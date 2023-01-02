<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VolunteerTypeTranslation extends Model
{


    protected $table = 'volunteer_type_translations';

    protected $fillable = ['name'];

    public $timestamps = false;
}
