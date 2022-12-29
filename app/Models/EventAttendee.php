<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class EventAttendee
 * @package App\Models
 * @version December 20, 2022, 1:39 pm UTC
 *
 * @property integer $event_id
 * @property integer $user_id
 */
class EventAttendee extends Model
{
    use SoftDeletes;


    public $table = 'event_attendees';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'event_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'event_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'event_id' => 'required|exists:events,id',
        'user_id' => 'required|exists:users,id'
    ];

    
}
