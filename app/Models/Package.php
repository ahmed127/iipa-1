<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;



class Package extends Model
{
    use SoftDeletes, Translatable;


    public $table = 'packages';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fees',
        'office_fees'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'fees' => 'string',
        'office_fees' => 'string'
    ];

    public $translatedAttributes = ['name', 'note', 'description'];

    public static function rules()
    {
        $languages = array_keys(config('langs'));
        foreach ($languages as $language) {
            $rules[$language . '.name'] = 'required|string|min:3|max:191';
            $rules[$language . '.note'] = 'nullable|string|min:3|max:191';
            $rules[$language . '.description'] = 'required|string';
        }
        $rules['fees'] = 'required';
        $rules['office_fees'] = 'nullable';

        return $rules;
    }
}
