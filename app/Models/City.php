<?php

namespace App\Models;

use Eloquent as Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class City
 * @package App\Models
 * @version May 25, 2022, 2:32 pm UTC
 *
 * @property string $name
 */
class City extends Model
{
    use SoftDeletes, Translatable;


    public $table = 'cities';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'country_id',
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

    /**
     * Rules validation
     *
     * @return array vaildations rules
     */
    public static function rules(){
        $languages = array_keys(config('langs'));
        foreach ($languages as $language) {
            $rules[$language . '.name'] = 'required|string|min:3|max:191';
        }

        // $rules['country_id'] = 'required|integer';

        return $rules;
    }

    // Relationships
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function regions()
    {
        return $this->hasMany(Region::class);
    }


}
