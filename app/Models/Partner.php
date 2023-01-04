<?php

namespace App\Models;

use App\Helpers\ImageUploaderTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Partner extends Model
{
    use SoftDeletes, ImageUploaderTrait;


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


    public function setLogoAttribute($file)
    {
        if ($file) {
            try {
                $fileName = $this->createFileName($file);

                $this->originalImage($file, $fileName);

                $this->thumbImage($file, $fileName, 300, 300);

                $this->attributes['logo'] = $fileName;
            } catch (\Throwable $th) {
                $this->attributes['logo'] = $file;
            }
        }
    }


    public function getLogoAttribute($val)
    {
        return $val ? asset('uploads/images/original') . '/' . $val : null;
    }
}
