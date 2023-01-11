<?php

namespace App\Models;

use App\Helpers\ImageUploaderTrait;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Regulation
 * @package App\Models
 * @version December 20, 2022, 1:33 pm UTC
 *
 * @property string $title
 * @property string $brief
 * @property string $description
 * @property string $photo
 * @property string $attachment_pdf
 * @property integer $type
 */
class Regulation extends Model
{
    use SoftDeletes, Translatable, ImageUploaderTrait;


    public $table = 'regulations';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'brief',
        'description',
        'photo',
        'attachment_pdf',
        'type',
        'link'
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


    public $translatedAttributes =  ['title', 'description', 'brief'];

    public static function rules()
    {
        $languages = array_keys(config('langs'));

        foreach ($languages as $language) {
            $rules[$language . '.title'] = 'required|string|max:191';
            $rules[$language . '.description'] = 'required|string';
            $rules[$language . '.brief'] = 'required|string';
        }

        $rules['attachment_pdf'] = 'nullable';
        $rules['type'] = 'nullable';
        $rules['photo'] = 'required|image|mimes:jpeg,jpg,png';
        $rules['link'] = 'nullable';

        return $rules;
    }



    public static function types()
    {
        return [
            1 => __('lang.pdf'),
            2 => __('lang.page'),
        ];
    }

    public function setPhotoAttribute($file)
    {
        if ($file) {
            try {
                $fileName = $this->createFileName($file);

                $this->originalImage($file, $fileName);

                $this->thumbImage($file, $fileName, 1200, 450);

                $this->attributes['photo'] = $fileName;
            } catch (\Throwable $th) {
                $this->attributes['photo'] = $file;
            }
        }
    }
    protected $appends = ['photo_original_path', 'photo_thumbnail_path', 'type_text'];

    public function getPhotoOriginalPathAttribute()
    {
        return asset('uploads/images/original/' . $this->photo);
    }
    public function getPhotoThumbnailPathAttribute()
    {
        return asset('uploads/images/thumbnail/' . $this->photo);
    }

    public function getTypeTextAttribute()
    {
        return $this->types()[$this->attributes['type']];
    }

    public function setAttachmentPdfAttribute($file)
    {
        if ($file) {
            try {
                $fileName = $this->createFileName($file);

                $this->saveFile($file, $fileName);

                $this->attributes['attachment_pdf'] = $fileName;
            } catch (\Throwable $th) {
                $this->attributes['attachment_pdf'] = $file;
            }
        }
    }

    public function getAttachmentPdfAttribute()
    {
        return asset('uploads/files/' . $this->attributes['attachment_pdf']);
    }
}
