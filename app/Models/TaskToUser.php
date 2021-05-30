<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Filtering;
use App\Traits\FormatDates;
use App\Traits\LikeTrait;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * @mixin IdeHelperTaskToUser
 */
class TaskToUser extends Model
{
    use LogsActivity, FormatDates, Filtering, LikeTrait;

    protected static $logFillable = true;

    //! Table Name
    protected $table = 'task_to_user';

    //! Columns Casts
    protected $casts = [
        'user_id'   => 'int',
        'task_id'   => 'int'
    ];

    //! Primary Key Column Name
    protected $primaryKey = 'id';

    //! Fillable Columns
    protected $fillable = [
        'user_id',
        'task_id'
    ];

    // ! Sortable Columns
    public $sortables = [
        'id'
    ];

    //! Model Scopes

    //! Model relations
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function task(): HasOne
    {
        return $this->hasOne(Task::class, 'id', 'task_id');
    }
}
