<?php

namespace App\Models;

use App\Helpers\ImageUploaderTrait;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Page extends Model
{
    use SoftDeletes, Translatable, ImageUploaderTrait;

    public $table = 'pages';


    protected $dates = ['deleted_at'];

    public $fillable = [
        'photo',
        'image',
        'attachment_pdf',
        'type', // 1 => page - 2 => pdf, 3 => image
        'active',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'        => 'integer',
        'active'    => 'string',
        'in_navbar' => 'string',
        'in_footer' => 'string'
    ];

    /**
     * Translated attributes.
     *
     * @var array
     */
    public $translatedAttributes =  [
        'meta_title',
        'meta_description',
        'meta_keywords',
        'name',
        'slug',
        'title',
        'brief',
        'description',
    ];

    /**
     * Rules validation
     *
     * @return array vaildations rules
     */
    public static function rules()
    {
        $languages = array_keys(config('langs'));

        foreach ($languages as $language) {
            $rules[$language . '.name'] = 'nullable|required_if:type,1';
            $rules[$language . '.btn_name'] = 'nullable|required_if:type,1';
            $rules[$language . '.meta_title'] = 'nullable|required_if:type,1';
            $rules[$language . '.meta_description'] = 'nullable|required_if:type,1';
            $rules[$language . '.meta_keywords'] = 'nullable|required_if:type,1';
            $rules[$language . '.title'] = 'required|string|min:3|max:191';
            $rules[$language . '.brief'] = 'required|string|min:3|max:191';
            $rules[$language . '.description'] = 'nullable|required_if:type,1';
            // $rules[$language . '.slug'] = 'required|string|min:3|max:191';
        }

        $rules['type'] = 'required|in:1,3';
        $rules['attachment_pdf'] = 'nullable|required_if:type,2|file|mimes:pdf';
        $rules['photo'] = 'required|image|mimes:jpeg,jpg,png';
        $rules['image'] = 'nullable|required_if:type,3|image|mimes:jpeg,jpg,png';

        return $rules;
    }

    // public static function menu_list()
    // {
    //     return [
    //         2 => 'about',
    //         3 => 'class_action',
    //         4 => 'volunteer_and_training',
    //         5 => 'footer',
    //     ];
    // }

    // Attachment Pdf
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

    public function getAttachmentPdfAttribute($val)
    {
        return asset('uploads/files/' . $val);
    }

    // Attachment Pdf

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

    // Image Handling
    public function setImageAttribute($file)
    {
        if ($file) {
            try {
                $fileName = $this->createFileName($file);

                $this->originalImage($file, $fileName);

                $this->thumbImage($file, $fileName, 300, 300);

                $this->attributes['image'] = $fileName;
            } catch (\Throwable $th) {
                $this->attributes['image'] = $file;
            }
        }
    }


    public function getImageAttribute($val)
    {
        return $val ? asset('uploads/images/original') . '/' . $val : null;
    }
    // End Image Handling
}
