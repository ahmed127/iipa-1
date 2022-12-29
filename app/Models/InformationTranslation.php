<?php

namespace App\Models;

use App\Helpers\ImageUploaderTrait;
use Illuminate\Database\Eloquent\Model;

class InformationTranslation extends Model
{
    use ImageUploaderTrait;

    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'information_translations';

    /**
     * Primary key.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Fillable fields.
     *
     * @var array
     */
    protected $fillable = ['name', 'logo', 'address'];

    public $timestamps = false;

     ################################### Appends #####################################

     protected $appends = [
        'logo_original_path',
        'logo_thumbnail_path',
    ];

    // logo
    public function setLogoAttribute($file)
    {
        try {
            if ($file) {

                $fileName = $this->createFileName($file);

                $this->originalImage($file, $fileName);

                $this->thumbImage($file, $fileName, 200, 200);

                $this->attributes['logo'] = $fileName;
            }
        } catch (\Throwable $th) {
            $this->attributes['logo'] = $file;
        }
    }

    public function getLogoOriginalPathAttribute()
    {
        return $this->logo ? asset('uploads/images/original/' . $this->logo) : null;
    }

    public function getLogoThumbnailPathAttribute()
    {
        return $this->logo ? asset('uploads/images/thumbnail/' . $this->logo) : null;
    }
    // logo
}
