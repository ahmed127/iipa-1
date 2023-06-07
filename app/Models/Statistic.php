<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Statistic extends Model
{
    use SoftDeletes, Translatable;

    public $table = 'statistics';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'value',
        'symbol',
        'color',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string'
    ];

    // translated attributes
    public $translatedAttributes =  ['title', 'description'];

    /**
     * Rules validation
     *
     * @return array vaildations rules
     */
    public static function rules()
    {
        $languages = array_keys(config('langs'));
        foreach ($languages as $language) {
            $rules[$language . '.title'] = 'required|string|min:3|max:191';
            $rules[$language . '.description'] = 'required|string|min:3|max:191';
        }
        $rules['value'] = 'required|numeric';
        $rules['symbol'] = 'nullable|string|size:1';

        return $rules;
    }
}
