<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Collection;
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
        'date',
        'open_calendar'
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
        'date' => 'datetime'
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
        $rules['open_calendar'] = 'required';

        return $rules;
    }


    public $appends = ['event_json'];

    public function getEventJsonAttribute()
    {
        $from = \Carbon\Carbon::parse($this->attributes['date'])->format('Ymd His');
        $to = \Carbon\Carbon::parse($this->attributes['date'])->addHour()->format('Ymd His');

        $data = (object)[
            'title' => $this->title,
            'link' => "https://calendar.google.com/calendar/u/0/r/eventedit?dates=$from/$to&text=$this->title",
            'start' => $this->date,
            'description' => $this->description,
            'open_calendar' => $this->open_calendar,
            'className' => 'fc-event-danger fc-event-solid-warning'
        ];

        return $data;
    }
}
