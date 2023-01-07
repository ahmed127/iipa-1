<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;
use App\Helpers\ImageUploaderTrait;

/**
 * Class slider
 * @package App\Models
 * @version June 4, 2020, 12:06 pm UTC
 *
 * @property string $photo
 * @property string $title
 * @property string $description
 * @property string $link
 * @property integer $status
 * @property integer $sort
 */
class Slider extends Model
{
    use SoftDeletes, Translatable, ImageUploaderTrait;

    public $table = 'sliders';


    protected $dates = ['deleted_at'];

    public $translatedAttributes =  ['title', 'brief', 'description'];


    public $fillable = [
        'in_order_to',
        'attachment_pdf',
        'photo',
        'type',
        'link',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'in_order_to' => 'integer',
        'photo' => 'string',
        'content' => 'string',
    ];


    /**
     * Validation rules
     *
     * @var array
     */
    public static function rules()
    {
        $languages = array_keys(config('langs'));

        foreach ($languages as $language) {
            $rules[$language . '.title'] = 'nullable';
            $rules[$language . '.brief'] = 'nullable';
            $rules[$language . '.description'] = 'nullable';
        }

        $rules['attachment_pdf'] = 'nullable';
        $rules['in_order_to'] = 'nullable';
        $rules['type'] = 'nullable';
        $rules['photo'] = 'required|image|mimes:jpeg,jpg,png';
        $rules['link'] = 'nullable';

        return $rules;
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
    protected $appends = ['photo_original_path', 'photo_thumbnail_path'];

    public function getPhotoOriginalPathAttribute()
    {
        return asset('uploads/images/original/' . $this->photo);
    }
    public function getPhotoThumbnailPathAttribute()
    {
        return asset('uploads/images/thumbnail/' . $this->photo);
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
