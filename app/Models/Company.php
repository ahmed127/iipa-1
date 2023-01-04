<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Company extends Model
{
    use SoftDeletes, Translatable;


    public $table = 'companies';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'website',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'website' => 'string',
        'location' => 'string',
        'type' => 'integer'
    ];

    public static function types()
    {
        return [
            1 => __('lang.authorized'),
            2 => __('lang.not_authorized'),
        ];
    }

    public $translatedAttributes = ['name', 'location'];
    public $appends = ['type_name'];

    public static function rules()
    {
        $languages = array_keys(config('langs'));
        foreach ($languages as $language) {
            $rules[$language . '.name'] = 'required|string|min:3|max:191';
            $rules[$language . '.location'] = 'required|string';
        }
        $rules['website'] = 'required';
        $rules['type'] = 'required';

        return $rules;
    }

    public function getTypeNameAttribute()
    {
        return $this->types()[$this->attributes['type']];
    }


    public function scopeAuthorized($query)
    {
        return $query->where('type', 1);
    }
    public function scopeNotAuthorized($query)
    {
        return $query->where('type', 2);
    }
}
