<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    public $table = 'menus';

    public $fillable = [
        'name',
        'status',
        'type'
    ];

    protected $casts = [
        'id'         => 'integer',
        'name'       => 'string',
        'status'     => 'integer',
        'type'       => 'string'
    ];

    public static $rules = [
        'name'   => 'required',
        'status' => 'required',
        'type'   => 'required',
    ];


    public function items()
    {
        return $this->hasMany(MenuItem::class);
    }

    public $timestamps = false;
}
