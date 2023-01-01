<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultantTypeTranslation extends Model
{


    protected $table = 'consultant_type_translations';

    protected $fillable = ['name'];

    public $timestamps = false;
}
