<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Law
 * @package App\Models
 * @version December 20, 2022, 1:29 pm UTC
 *
 * @property string $title
 * @property string $description
 * @property string $attachment_pdf
 */
class Law extends Model
{
    use SoftDeletes;


    public $table = 'laws';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'description',
        'attachment_pdf'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'attachment_pdf' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
