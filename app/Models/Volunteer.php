<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Volunteer
 * @package App\Models
 * @version December 20, 2022, 1:05 pm UTC
 *
 * @property integer $volunteer_type_id
 * @property string $full_name
 * @property string $id_no
 * @property string $email
 * @property string $country_code
 * @property string $phone
 * @property string $attachment_cv
 */
class Volunteer extends Model
{
    use SoftDeletes;


    public $table = 'volunteers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'volunteer_type_id',
        'full_name',
        'id_no',
        'email',
        'country_code',
        'phone',
        'attachment_cv'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'volunteer_type_id' => 'integer',
        'full_name' => 'string',
        'id_no' => 'string',
        'email' => 'string',
        'country_code' => 'string',
        'phone' => 'string',
        'attachment_cv' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'volunteer_type_id' => 'required|exists:volunteer_types,id',
        'full_name' => 'required|srting|min:3|max:191',
        'id_no' => 'required',
        'email' => 'required|email',
        'country_code' => 'required',
        'phone' => 'required',
        'attachment_cv' => 'required'
    ];

    
}
