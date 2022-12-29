<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Director
 * @package App\Models
 * @version December 19, 2022, 4:27 pm UTC
 *
 * @property string $photo
 * @property string $name
 * @property string $country_code
 * @property string $job_title
 */
class Director extends Model
{
    use SoftDeletes;


    public $table = 'directors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'photo',
        'name',
        'country_code',
        'job_title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'photo' => 'string',
        'name' => 'string',
        'country_code' => 'string',
        'job_title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'photo' => 'required|mimes:jpeg,jpg,png|max:10000',
        'name' => 'required|string|min:3|max:191',
        'country_code' => 'required|string|min:3|max:191',
        'job_title' => 'required|string|min:3|max:191'
    ];

    
}
