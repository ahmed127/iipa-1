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
        'fees' => 'array',
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
        $rules['fees'] = 'required|array';
        $rules["fees.0.name.en"] = "required|string";
        $rules["fees.0.name.ar"] = "required|string";
        $rules["fees.0.amount"] = "required|integer";
        $rules['office_fees'] = 'nullable';

        for ($i = 1; $i < 3; $i++) {
            $rules["fees.$i.name.en"] = "nullable|string";
            $rules["fees.$i.name.ar"] = "required_with:fees.$i.name.en";
            $rules["fees.$i.amount"] = "required_with:fees.$i.name.en";
        }

        return $rules;
    }
}
