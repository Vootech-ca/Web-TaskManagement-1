<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Filtering;
use App\Traits\FormatDates;
use App\Traits\LikeTrait;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * @mixin IdeHelperTask
 */
class Task extends Model
{
    use LogsActivity, FormatDates, Filtering, LikeTrait;

    protected static $logFillable = true;

    //! Table Name
    protected $table = 'tasks';

    //! Columns Casts
    protected $casts = [
        'category_id'   => 'int',
        'status_id'     => 'int',
        'start_date'    => 'date',
        'end_date'      => 'date',
        'created_by'    => 'int'
    ];

    //! Primary Key Column Name
    protected $primaryKey = 'id';

    //! Fillable Columns
    protected $fillable = [
        'category_id',
        'status_id',
        'title',
        'description',
        'start_date',
        'end_date',
        'created_by'
    ];

    // ! Sortable Columns
    public $sortables = [
        'id',
        'title',
        'description',
    ];

    //! Model Attributes
    public function getStartDateAttribute($date): string
    {
        return Carbon::parse($date)->format($this->onlyDateFormat);
    }

    public function getEndDateAttribute($date): string
    {
        return Carbon::parse($date)->format($this->onlyDateFormat);
    }

    //! Model relations
    public function category(): HasOne
    {
        return $this->hasOne(TaskCategory::class, 'id', 'category_id');
    }

    public function status(): HasOne
    {
        return $this->hasOne(TaskStatus::class, 'id', 'status_id');
    }

    public function users(): HasManyThrough
    {
        return $this->hasManyThrough(User::class, TaskToUser::class, 'user_id', 'id', 'id', 'task_id');
    }

    public function createdBy(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'created_by');
    }
}
