<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobTranslation extends Model
{


    protected $table = 'job_translations';

    protected $fillable = ['name'];

    public $timestamps = false;
}
