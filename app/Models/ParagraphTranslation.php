<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParagraphTranslation extends Model
{

    protected $table = 'paragraph_translations';

    protected $fillable = ['title', 'text'];

    public $timestamps = false;
}
