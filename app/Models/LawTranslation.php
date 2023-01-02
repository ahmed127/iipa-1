<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LawTranslation extends Model
{


    protected $table = 'law_translations';

    protected $fillable = ['title', 'description'];

    public $timestamps = false;
}
