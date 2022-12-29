<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class IndividualTraining
 * @package App\Models
 * @version December 20, 2022, 1:15 pm UTC
 *
 * @property string $full_name
 * @property string $country_code
 * @property string $phone
 * @property string $email
 * @property string $attachment_letter
 */
class IndividualTraining extends Model
{
    use SoftDeletes;


    public $table = 'individual_trainings';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'full_name',
        'country_code',
        'phone',
        'email',
        'attachment_letter'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'full_name' => 'string',
        'country_code' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'attachment_letter' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'full_name' => 'required|string|min:3|max:191',
        'country_code' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'attachment_letter' => 'required'
    ];

    
}
