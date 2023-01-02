<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes, Translatable;

    public $table = 'countries';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'code'
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

    // translated attributes
    public $translatedAttributes =  ['name'];

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
        $rules['code'] = 'required';

        return $rules;
    }


    // Relationships
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
