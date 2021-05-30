<?php
namespace App\Traits;

trait LikeTrait
{
    public function scopeWhereLike($query, $column, $value)
    {
        return $query->where($column, 'LIKE', '%' . $value . '%');
    }

    public function scopeOrWhereLike($query, $column, $value)
    {
        return $query->orWhere($column, 'LIKE', '%' . $value . '%');
    }

    public function scopeWhereLikeStart($query, $column, $value)
    {
        return $query->where($column, 'LIKE', $value . '%');
    }

    public function scopeOrWhereLikeStart($query, $column, $value)
    {
        return $query->orWhere($column, 'LIKE', $value . '%');
    }

    public function scopeWhereLikeEnd($query, $column, $value)
    {
        return $query->where($column, 'LIKE', '%' . $value);
    }

    public function scopeOrWhereLikeEnd($query, $column, $value)
    {
        return $query->orWhere($column, 'LIKE', '%' . $value);
    }
}
