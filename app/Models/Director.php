<?php

namespace App\Models;

use App\Helpers\ImageUploaderTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Director extends Model
{
    use SoftDeletes, ImageUploaderTrait;


    public $table = 'directors';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'type',
        'photo',
        'name',
        'nickname',
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
        'nickname' => 'string',
        'job_title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'photo' => 'nullable|mimes:jpeg,jpg,png|max:10000',
        'name' => 'required|string|min:3|max:191',
        'nickname' => 'required',
        'job_title' => 'nullable|string|min:3|max:191'
    ];


    public function setPhotoAttribute($file)
    {
        if ($file) {
            try {
                $fileName = $this->createFileName($file);

                $this->originalImage($file, $fileName);

                $this->thumbImage($file, $fileName, 300, 300);

                $this->attributes['photo'] = $fileName;
            } catch (\Throwable $th) {
                $this->attributes['photo'] = $file;
            }
        }
    }


    public function getPhotoAttribute($val)
    {
        // return $val ? asset('uploads/images/original') . '/' . $val : asset('website/images/Portrait_Placeholder.png');
        return $val ? asset('uploads/images/original') . '/' . $val : null;
    }
}
