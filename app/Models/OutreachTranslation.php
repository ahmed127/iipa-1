<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OutreachTranslation extends Model
{
    protected $table = 'outreach_translations';

    /**
     * Fillable fields.
     *
     * @var array
     */
    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_keywords',
        'name',
        'slug',
        'title',
        'brief',
        'description',
        'btn_name'
    ];

    /**
     * Timestamps.
     *
     * @var boolean
     */
    public $timestamps = false;
}
