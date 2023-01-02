<?php

namespace App\Models;

use App\Helpers\ImageUploaderTrait;
use Astrotomic\Translatable\Translatable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Initiative
 * @package App\Models
 * @version December 20, 2022, 1:28 pm UTC
 *
 * @property string $name
 * @property string $description
 */
class Initiative extends Model
{
    use SoftDeletes, Translatable, ImageUploaderTrait;


    public $table = 'initiatives';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'photo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string'
    ];

    public $translatedAttributes = ['name', 'description'];


    public static function rules()
    {
        $languages = array_keys(config('langs'));
        foreach ($languages as $language) {
            $rules[$language . '.name'] = 'required|string|min:3|max:191';
            $rules[$language . '.description'] = 'required|string';
        }
        $rules['photo'] = 'required|image|mimes:jpg,jpeg,png';

        return $rules;
    }


    // Photo Handling
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
        return $val ? asset('uploads/images/original') . '/' . $val : null;
    }
    // End Photo Handling
}
