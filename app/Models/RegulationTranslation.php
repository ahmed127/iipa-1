<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegulationTranslation extends Model
{
    protected $table = 'regulation_translations';
    protected $fillable = ['title', 'description', 'brief'];
    public $timestamps = false;
}
