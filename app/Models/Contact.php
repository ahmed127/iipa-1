<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    public $table = 'contacts';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'phone',
        'country_code',
        'message'
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
        'phone' => 'string',
        'message' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|min:3|max:191',
        'email' => 'required|email|min:3|max:191',
        'phone' => 'required',
        'country_code' => 'required',
        'message' => 'required|string|min:3',
    ];
}
