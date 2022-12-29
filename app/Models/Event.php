<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Event
 * @package App\Models
 * @version December 20, 2022, 1:37 pm UTC
 *
 * @property string $title
 * @property string $brief
 * @property string $description
 * @property string $date
 */
class Event extends Model
{
    use SoftDeletes;


    public $table = 'events';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'brief',
        'description',
        'date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'brief' => 'string',
        'description' => 'string',
        'date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
