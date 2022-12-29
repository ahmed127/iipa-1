<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuRoute extends Model
{
    public $table = 'menu_routes';

    public $fillable = [
        'name',
        'route_name',
        'url',
        'status',
        'type'
    ];

    protected $casts = [
        'id'         => 'integer',
        'name'       => 'string',
        'route_name' => 'string',
        'url'        => 'string',
        'status'     => 'integer',
        'type'       => 'string'
    ];

    public static $rules = [

        'name'          => 'required',
        'route_name'    => 'required',
        'url'           => 'required',
        'status'        => 'required',
        'type'          => 'required',
    ];

    public $timestamps = false;

    /**
     * Scope a query to only include category type.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeAdmin($query)
    {
        $query->where('type', 1);
    }

    /**
     * Scope a query to only include category type.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeWebsite($query)
    {
        $query->where('type', 2);
    }
}
