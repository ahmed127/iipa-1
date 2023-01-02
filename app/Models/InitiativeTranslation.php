<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InitiativeTranslation extends Model
{


    protected $table = 'initiative_translations';

    protected $fillable = ['name', 'description'];

    public $timestamps = false;
}
