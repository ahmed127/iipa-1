<?php

namespace App\Models;

use App\Helpers\ImageUploaderTrait;
use Astrotomic\Translatable\Translatable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Blog
 * @package App\Models
 * @version February 25, 2021, 12:16 pm EET
 *
 * @property string $photo
 */
class Blog extends Model
{
    use SoftDeletes, Translatable, ImageUploaderTrait;

    public $table = 'blogs';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'blog_category_id',
        'photo_sm',
        'photo_cover',
    ];


    public $translatedAttributes =  ['title', 'description', 'brief'];

    public static function rules()
    {
        $languages = array_keys(config('langs'));

        foreach ($languages as $language) {
            $rules[$language . '.title'] = 'required|string|max:191';
            $rules[$language . '.description'] = 'required|string';
            $rules[$language . '.brief'] = 'required|string';
        }

        $rules['blog_category_id'] = 'required';
        $rules['photo_sm'] = 'required';
        $rules['photo_cover'] = 'required';

        return $rules;
    }


    #################################################################################
    ################################### Appends #####################################
    #################################################################################


    protected $appends = ['photo_sm_original_path', 'photo_sm_thumbnail_path', 'photo_sm_original_path', 'photo_sm_thumbnail_path'];

    public function getPhotoSmOriginalPathAttribute()
    {
        return $this->photo_sm ? asset('uploads/images/original/' . $this->photo_sm) : null;
    }

    public function getPhotoSmThumbnailPathAttribute()
    {
        return $this->photo_sm ? asset('uploads/images/thumbnail/' . $this->photo_sm) : null;
    }

    public function getPhotoCoverOriginalPathAttribute()
    {
        return $this->photo_cover ? asset('uploads/images/original/' . $this->photo_cover) : null;
    }

    public function getPhotoCoverThumbnailPathAttribute()
    {
        return $this->photo_cover ? asset('uploads/images/thumbnail/' . $this->photo_cover) : null;
    }


    #################################################################################
    ################################# Functions #####################################
    #################################################################################

    public function setPhotoSmAttribute($file)
    {
        try {
            if ($file) {

                if ($file) {

                    $fileName = $this->createFileName($file);

                    $this->originalImage($file, $fileName);

                    $this->thumbImage($file, $fileName, 650, 365);

                    $this->attributes['photo_sm'] = $fileName;
                }
            }
        } catch (\Throwable $th) {
            $this->attributes['photo_sm'] = $file;
        }
    }

    public function setPhotoCoverAttribute($file)
    {
        try {
            if ($file) {

                if ($file) {

                    $fileName = $this->createFileName($file);

                    $this->originalImage($file, $fileName);

                    $this->thumbImage($file, $fileName, 650, 365);

                    $this->attributes['photo_cover'] = $fileName;
                }
            }
        } catch (\Throwable $th) {
            $this->attributes['photo_cover'] = $file;
        }
    }


    /////////////////////// Relations ///////////////////////

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id', 'id');
    }
}
