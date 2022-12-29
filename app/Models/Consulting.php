<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Consulting
 * @package App\Models
 * @version December 20, 2022, 1:27 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $email_confirmation
 * @property string $country_code
 * @property string $phone
 * @property integer $country_id
 * @property integer $job_id
 * @property integer $consultant_type_id
 * @property integer $type
 * @property string $date_of_birth
 * @property integer $fav_lang
 * @property string $description
 * @property string $attachment_letter
 * @property integer $gender
 * @property string $nationality
 */
class Consulting extends Model
{
    use SoftDeletes;


    public $table = 'consultings';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'email_confirmation',
        'country_code',
        'phone',
        'country_id',
        'job_id',
        'consultant_type_id',
        'type',
        'date_of_birth',
        'fav_lang',
        'description',
        'attachment_letter',
        'gender',
        'nationality'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_confirmation' => 'string',
        'country_code' => 'string',
        'phone' => 'string',
        'country_id' => 'integer',
        'job_id' => 'integer',
        'consultant_type_id' => 'integer',
        'type' => 'integer',
        'date_of_birth' => 'date',
        'fav_lang' => 'integer',
        'description' => 'string',
        'attachment_letter' => 'string',
        'gender' => 'integer',
        'nationality' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|min:3|max:191',
        'email' => 'required|email',
        'email_confirmation' => 'required|email',
        'country_code' => 'required',
        'phone' => 'required',
        'country_id' => 'required|exists:countries,id',
        'job_id' => 'required|exists:jobs,id',
        'consultant_type_id' => 'required|exists:consultant_types,id',
        'type' => 'required',
        'date_of_birth' => 'required',
        'fav_lang' => 'required|in:1,2',
        'description' => 'required',
        'attachment_letter' => 'required',
        'gender' => 'required|in:1,2',
        'nationality' => 'required'
    ];

    
}
