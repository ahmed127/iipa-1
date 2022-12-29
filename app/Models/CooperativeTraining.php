<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class CooperativeTraining
 * @package App\Models
 * @version December 20, 2022, 1:12 pm UTC
 *
 * @property string $entity_name
 * @property string $country_code
 * @property string $phone
 * @property string $email
 * @property string $attachment_letter
 */
class CooperativeTraining extends Model
{
    use SoftDeletes;


    public $table = 'cooperative_trainings';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'entity_name',
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
        'entity_name' => 'string',
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
        'entity_name' => 'required|string|min:3|max:191',
        'country_code' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'attachment_letter' => 'required'
    ];

    
}
