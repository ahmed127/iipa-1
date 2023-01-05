<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Event
 * @package App\Models
 * @version December 20, 2022, 1:37 pm UTC
 *
 * @property string $title
 * @property string $brief
 * @property string $description
 * @property string $date
 */
class Event extends Model
{
    use SoftDeletes, Translatable;


    public $table = 'events';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'brief',
        'description',
        'date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'brief' => 'string',
        'description' => 'string',
        'date' => 'date'
    ];

    public $translatedAttributes =  ['title', 'description', 'brief'];

    public static function rules()
    {
        $languages = array_keys(config('langs'));

        foreach ($languages as $language) {
            $rules[$language . '.title'] = 'required|string|max:191';
            $rules[$language . '.description'] = 'required|string';
            $rules[$language . '.brief'] = 'required|string';
        }

        $rules['date'] = 'required';

        return $rules;
    }
}
