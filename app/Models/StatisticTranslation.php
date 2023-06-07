<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatisticTranslation extends Model
{

    protected $table = 'statistic_translations';

    protected $fillable = ['title', 'description'];

    /**
     * Timestamps.
     *
     * @var boolean
     */
    public $timestamps = false;
}
