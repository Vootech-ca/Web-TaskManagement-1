<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

trait Filtering
{

    public function scopeFiltering(Builder $query, Request $request): Builder
    {
        // Define the returnable query
        $returnableQuery = '';

        // Get sortable column
        $sortables = data_get($this, 'sortables', []);

        // Get the column to sort
        $sort = $request->get('_sort', 'id');

        // Get the direction of which to sort
        $direction = $request->get('_dir', 'desc');

        // Ensure column to sort is part of model's sortables property
        // and that the direction is a valid value
        if ($sort && in_array($sort, $sortables, true) &&
            $direction && in_array($direction, ['asc', 'desc'])
        ) {
            // Return ordered query
            $returnableQuery = $query->orderBy($sort, $direction);
        }

        // Get the keyword that want to search with
        $keyword = $request->get('_filter', '');

        // Search in columns with keyword
        $returnableQuery->where(function ($query) use ($keyword) {
            foreach (static::getSearchFields() as $field) {
                if (strpos($field, '.') !== false) {
                    [$relation, $field] = explode('.', $field);
                    $query->orWhereHas($relation, function ($query) use ($field, $keyword) {
                        $query->where($field, 'like', '%' . $keyword . '%');
                    });
                } else {
                    $query->orWhere($field, 'LIKE', "%$keyword%");
                }
            }
        });

        return $returnableQuery;
    }

    /**
     * Get all searchable fields
     *
     * @return array
     */
    public static function getSearchFields(): array
    {
        $model = new static;

        $fields = $model->sortables;

        if (empty($fields)) {
            $fields = Schema::getColumnListing($model->getTable());

            // Remove the columns that will not be sortable
            $others[] = $model->primaryKey;
            $others[] = $model->getUpdatedAtColumn() ?: 'created_at';
            $others[] = $model->getCreatedAtColumn() ?: 'updated_at';

            $others[] = method_exists($model, 'getDeletedAtColumn')
                ? $model->getDeletedAtColumn()
                : 'deleted_at';

            $fields = array_diff($fields, $model->getHidden(), $others);
        }

        return $fields;
    }
}
