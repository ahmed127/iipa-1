<?php

namespace App\Models;

use App\Helpers\ImageUploaderTrait;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Information extends Model
{
    use SoftDeletes, Translatable, ImageUploaderTrait;

    public $table = 'informations';

    protected $dates = ['deleted_at'];

    public $translatedAttributes =  ['name', 'logo', 'address'];


    public $fillable = [
        'phone',
        'email',
        'facebook_link',
        'twitter_link',
        'instagram_link',
        'linkedin_link',
        'youtube_link',
        'facebook_visible',
        'twitter_visible',
        'instagram_visible',
        'linkedin_visible',
        'youtube_visible',
        'location_lat',
        'location_long',
        'logo_fav_icon',
    ];

    protected $casts = [];

    public $timestamps = false;




    /**
     * Validation rules
     *
     * @var array
     */
    public static function rules()
    {
        $languages = array_keys(config('langs'));

        foreach ($languages as $language) {
            $rules[$language . '.name'] = 'required|string|min:3|max:191';
            $rules[$language . '.logo'] = 'nullable';
            $rules[$language . '.address'] = 'nullable';
        }

        $rules['phone'] = 'nullable';
        $rules['email'] = 'nullable';
        $rules['facebook_link'] = 'nullable';
        $rules['twitter_link'] = 'nullable';
        $rules['instagram_link'] = 'nullable';
        $rules['linkedin_link'] = 'nullable';
        $rules['youtube_link'] = 'nullable';
        $rules['facebook_visible'] = 'nullable';
        $rules['twitter_visible'] = 'nullable';
        $rules['instagram_visible'] = 'nullable';
        $rules['linkedin_visible'] = 'nullable';
        $rules['youtube_visible'] = 'nullable';
        $rules['location_lat'] = 'nullable';
        $rules['location_long'] = 'nullable';
        $rules['logo_fav_icon'] = 'nullable';

        return $rules;
    }


    ################################### Appends #####################################

    protected $appends = [
        'logo_fav_icon_original_path',
        'logo_fav_icon_thumbnail_path',
    ];

    // logo_fav_icon
    public function setLogoFavIconAttribute($file)
    {
        try {
            if ($file) {

                $fileName = $this->createFileName($file);

                $this->originalImage($file, $fileName);

                $this->thumbImage($file, $fileName, 100, 100);

                $this->attributes['logo_fav_icon'] = $fileName;
            }
        } catch (\Throwable $th) {
            $this->attributes['logo_fav_icon'] = $file;
        }
    }

    public function getLogoFavIconOriginalPathAttribute()
    {
        return $this->logo_fav_icon ? asset('uploads/images/original/' . $this->logo_fav_icon) : null;
    }

    public function getLogoFavIconThumbnailPathAttribute()
    {
        return $this->logo_fav_icon ? asset('uploads/images/thumbnail/' . $this->logo_fav_icon) : null;
    }
    // logo_fav_icon


}
