<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Filtering;
use App\Traits\FormatDates;
use App\Traits\LikeTrait;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * @mixin IdeHelperTaskCategory
 */
class TaskCategory extends Model
{
    use LogsActivity, FormatDates, Filtering, LikeTrait;

    protected static $logFillable = true;

    //! Table Name
    protected $table = 'task_category';

    //! Columns Casts
    protected $casts = [];

    //! Primary Key Column Name
    protected $primaryKey = 'id';

    //! Fillable Columns
    protected $fillable = [
        'name'
    ];

    // ! Sortable Columns
    public $sortables = [
        'id',
        'name'
    ];

    //! Model Scopes

    //! Model relations
}
