<?php

namespace App\Models;

use App\Helpers\ImageUploaderTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IndividualTraining extends Model
{
    use SoftDeletes, ImageUploaderTrait;


    public $table = 'individual_trainings';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'full_name',
        'country_code',
        'phone',
        'email',
        'attachment_letter',
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
        'full_name' => 'string',
        'country_code' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'attachment_letter' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'full_name' => 'required|string|min:3|max:191',
        'country_code' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'attachment_letter' => 'required'
    ];

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
