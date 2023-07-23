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
        'identification_num',
        'identification_file',
        'country_id',
        'job',
        'consultant_type_id',
        'advice_type',
        'type',
        'date_of_birth',
        'fav_lang',
        'description',
        'attachment_letter',
        'gender',
        'nationality',
        'user_id',
        'status', // 1=>pending, 2 => inprogress, 3 => approved, 4 => rejected, 5 => closed, 6 => finished
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
        'job' => 'string',
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
        'phone' => 'required|numeric|digits:9',
        'identification_num' => 'required|numeric|digits:10',
        'identification_file' => 'required|image',
        'country_id' => 'required|exists:countries,id',
        'job' => 'required|string',
        'consultant_type_id' => 'required',
        'advice_type' => 'required_if:consultant_type_id,0',
        'type' => 'nullable',
        'date_of_birth' => 'required',
        'fav_lang' => 'required|in:1,2',
        'description' => 'required',
        'attachment_letter' => 'nullable',
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

    public $appends = ['type_text', 'status_text'];

    public function getTypeTextAttribute()
    {
        return $this->types()[$this->attributes['type']];
    }
    // End Types Handling

    public function getStatusTextAttribute($val)
    {
        return Follow::status_types()[$this->attributes['status']];
    }

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

    // Identification File Handling
    public function setIdentificationFileAttribute($file)
    {
        if ($file) {
            try {
                $fileName = $this->createFileName($file);

                $this->saveFile($file, $fileName);

                $this->attributes['identification_file'] = $fileName;
            } catch (\Throwable $th) {
                $this->attributes['identification_file'] = $file;
            }
        }
    }


    public function getIdentificationFileAttribute($val)
    {
        return $val ? asset('uploads/files') . '/' . $val : null;
    }
    // End Identification File Handling
    /////////////////////// Relations ///////////////////////

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function consultant_type()
    {
        return $this->belongsTo(ConsultantType::class);
    }

    public function follow()
    {
        return $this->morphOne(Follow::class, 'forable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
