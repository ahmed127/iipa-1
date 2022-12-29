<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class VolunteerType
 * @package App\Models
 * @version December 20, 2022, 12:59 pm UTC
 *
 * @property string $name
 */
class VolunteerType extends Model
{
    use SoftDeletes;


    public $table = 'volunteer_types';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
