<?php

namespace App\Models;

use Eloquent as Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Region
 * @package App\Models
 * @version May 25, 2022, 9:19 pm UTC
 *
 * @property integer $city_id
 * @property string $name
 */
class Region extends Model
{
    use SoftDeletes, Translatable;


    public $table = 'regions';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'city_id',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'city_id' => 'integer',
        'name' => 'string'
    ];

    public $translatedAttributes = ['name'];

    /**
     * Rules validation
     *
     * @return array vaildations rules
     */
    public static function rules()
    {
        $languages = array_keys(config('langs'));
        foreach ($languages as $language) {
            $rules[$language . '.name'] = 'required|string|min:3|max:191';
        }

        // $rules['city_id'] = 'required|integer';

        return $rules;
    }


}
