<?php

namespace App\Models;

use App\Helpers\ImageUploaderTrait;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Law
 * @package App\Models
 * @version December 20, 2022, 1:29 pm UTC
 *
 * @property string $title
 * @property string $description
 * @property string $attachment_pdf
 */
class Law extends Model
{
    use SoftDeletes, Translatable, ImageUploaderTrait;


    public $table = 'laws';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'attachment_pdf',
        'btn_link',
        'type',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'attachment_pdf' => 'string'
    ];

    public $translatedAttributes = ['title', 'description'];

    public static function rules()
    {
        $languages = array_keys(config('langs'));
        foreach ($languages as $language) {
            $rules[$language . '.title'] = 'required|string|min:3|max:191';
            $rules[$language . '.description'] = 'required|string';
        }
        // $rules['attachment_pdf'] = 'required';
        $rules['type'] = 'required|in:1,2';
        $rules['attachment_pdf'] = 'required_if:type,2|file|mimes:pdf';
        $rules['btn_link'] = 'required_if:type,1';

        return $rules;
    }


    // attachment_pdf Handling
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
        return $val ? asset('uploads/files') . '/' . $val : null;
    }
    // End attachment_pdf Handling


}
