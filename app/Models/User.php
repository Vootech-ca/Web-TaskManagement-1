<?php

namespace App\Models;

use App\Traits\Filtering;
use App\Traits\FormatDates;
use App\Traits\LikeTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Traits\HasRoles;

/**
 * @mixin IdeHelperUser
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens, HasRoles, LogsActivity, LikeTrait, FormatDates, Filtering;

    protected static $logFillable = true;

    //! Table Name
    protected $table = 'users';

    //! Primary Key Column Name
    protected $primaryKey = 'id';

    //! Columns Casts
    protected $casts = [
        'gender' => 'bool'
    ];

    protected $fillable = [
        'username',
        'password',
        'user_type',
        'gender'
    ];

    // ! Sortable Columns (Custom)
    public $sortables = [
        'id',
        'username',
        'user_type',
        'gender'
    ];

    //! Model Scopes

    //! Model relations
}
