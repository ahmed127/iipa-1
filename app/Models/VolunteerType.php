<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class VolunteerType
 * @package App\Models
 * @version December 20, 2022, 12:59 pm UTC
 *
 * @property string $name
 */
class VolunteerType extends Model
{
    use SoftDeletes, Translatable;


    public $table = 'volunteer_types';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    public $translatedAttributes = ['name'];


    public static function rules()
    {
        $languages = array_keys(config('langs'));
        foreach ($languages as $language) {
            $rules[$language . '.name'] = 'required|string|min:3|max:191';
        }

        return $rules;
    }


}
