<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Partner
 * @package App\Models
 * @version December 20, 2022, 1:35 pm UTC
 *
 * @property string $logo
 * @property string $link
 */
class Partner extends Model
{
    use SoftDeletes;


    public $table = 'partners';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'logo',
        'link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'logo' => 'string',
        'link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'logo' => 'required',
        'link' => 'required'
    ];

    
}
