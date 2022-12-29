<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Outreach
 * @package App\Models
 * @version December 20, 2022, 1:31 pm UTC
 *
 * @property string $title
 * @property string $brief
 * @property string $description
 * @property string $photo
 * @property string $attachment_pdf
 * @property integer $type
 */
class Outreach extends Model
{
    use SoftDeletes;


    public $table = 'outreaches';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'brief',
        'description',
        'photo',
        'attachment_pdf',
        'type'
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
        'photo' => 'string',
        'attachment_pdf' => 'string',
        'type' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
