<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DirectorTranslation extends Model
{

    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'director_translations';

    /**
     * Primary key.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Fillable fields.
     *
     * @var array
     */
    protected $fillable = ['name', 'nickname', 'job_title'];

    /**
     * Timestamps.
     *
     * @var boolean
     */
    public $timestamps = false;
}
