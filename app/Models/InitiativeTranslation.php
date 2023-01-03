<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InitiativeTranslation extends Model
{
    protected $table = 'initiative_translations';

    /**
     * Fillable fields.
     *
     * @var array
     */
    protected $fillable = [
        'name_tab',
        'name',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'title',
        'brief',
        'description',
        'strategic_goal',
        'target_group',
    ];

    public $timestamps = false;
}
