<?php

namespace App\Models;

use App\Helpers\ImageUploaderTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consulting extends Model
{
    use SoftDeletes, ImageUploaderTrait;

    public $table = 'consultings';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'email',
        'country_code',
        'phone',
        'country_id',
        'job_id',
        'consultant_type_id',
        'type',
        'date_of_birth',
        'fav_lang',
        'description',
        'attachment_letter',
        'gender',
        'nationality'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'country_code' => 'string',
        'phone' => 'string',
        'country_id' => 'integer',
        'job_id' => 'integer',
        'consultant_type_id' => 'integer',
        'type' => 'integer',
        'date_of_birth' => 'date:Y-m-d',
        'fav_lang' => 'integer',
        'description' => 'string',
        'attachment_letter' => 'string',
        'gender' => 'integer',
        'nationality' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|min:3|max:191',
        'email' => 'required|email|confirmed',
        'country_code' => 'required',
        'phone' => 'required',
        'country_id' => 'required|exists:countries,id',
        'job_id' => 'required|exists:jobs,id',
        'consultant_type_id' => 'required|exists:consultant_types,id',
        'type' => 'required',
        'date_of_birth' => 'required',
        'fav_lang' => 'required|in:1,2',
        'description' => 'required',
        'attachment_letter' => 'required',
        'gender' => 'required|in:1,2',
        'nationality' => 'required'
    ];

    // Types Handling
    public static function types()
    {
        return [
            1 => __('lang.request_lawsuit'),
            2 => __('lang.legal_advisor'),
        ];
    }

    public function getTypeAttribute()
    {
        return $this->types()[$this->attributes['type']];
    }
    // End Types Handling

    // FavLangs Handling
    public static function favLangs()
    {
        return [
            1 => __('lang.arabic'),
            2 => __('lang.english'),
        ];
    }

    public function getFavLangAttribute()
    {
        return $this->favLangs()[$this->attributes['fav_lang']];
    }
    // End genders Handling

    // genders Handling
    public static function genders()
    {
        return [
            1 => __('lang.male'),
            2 => __('lang.female'),
        ];
    }

    public function getGenderAttribute()
    {
        return $this->genders()[$this->attributes['gender']];
    }
    // End genders Handling

    // Date Of Birth Handling
    public function getDateOfBirthAttribute()
    {
        return (new \Carbon\Carbon($this->attributes['date_of_birth']))->format('d-m-Y');
    }
    // End Date Of Birth Handling

    // Attachment letter Handling
    public function setAttachmentLetterAttribute($file)
    {
        if ($file) {
            try {
                $fileName = $this->createFileName($file);

                $this->saveFile($file, $fileName);

                $this->attributes['attachment_letter'] = $fileName;
            } catch (\Throwable $th) {
                $this->attributes['attachment_letter'] = $file;
            }
        }
    }


    public function getAttachmentLetterAttribute($val)
    {
        return $val ? asset('uploads/files') . '/' . $val : null;
    }
    // End Attachment letter Handling
    /////////////////////// Relations ///////////////////////

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function consultant_type()
    {
        return $this->belongsTo(ConsultantType::class);
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function follow()
    {
        return $this->morphOne(Follow::class, 'forable');
    }
}
