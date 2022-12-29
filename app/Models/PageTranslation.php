<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class PageTranslation extends Model
{
    use Sluggable;

    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'page_translations';

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
        'content',
        'slug'
    ];

    /**
     * Timestamps.
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
