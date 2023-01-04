<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageTranslation extends Model
{


    protected $table = 'package_translations';

    protected $fillable = ['name', 'note', 'description'];

    public $timestamps = false;
}
