<?php

namespace App\Models;

use App\Helpers\ImageUploaderTrait;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;



class Director extends Model
{
    use SoftDeletes, Translatable, ImageUploaderTrait;


    public $table = 'directors';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'type',
        'photo',
        'period'
    ];


    public $translatedAttributes =  ['name', 'nickname', 'job_title'];


    public static function rules()
    {
        $languages = array_keys(config('langs'));

        foreach ($languages as $language) {
            $rules[$language . '.name'] = 'required|string|max:191';
            $rules[$language . '.nickname'] = 'required|string';
            $rules[$language . '.job_title'] = 'nullable|string';
        }

        $rules['photo'] = 'nullable|mimes:jpeg,jpg,png|max:10000';
        $rules['period'] = 'nullable|string|min:3|max:191';

        return $rules;
    }


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
