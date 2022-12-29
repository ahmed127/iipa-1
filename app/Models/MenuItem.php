<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuItem extends Model
{
    public $table = 'menu_items';

    public $fillable = [
        'name',
        'menu_id',
        'menu_route_id',
        'parent_id',
        'status',
        'type'
    ];

    protected $casts = [
        'id'            => 'integer',
        'name'          => 'string',
        'menu_id'       => 'integer',
        'menu_route_id' => 'integer',
        'parent_id'     => 'integer',
        'status'        => 'integer',
        'type'          => 'string'
    ];

    public static $rules = [

        'name'          => 'required',
        'menu_id'       => 'required',
        'menu_route_id' => 'required',
        'parent_id'     => 'required',
        'status'        => 'required',
        'type'          => 'required',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function route()
    {
        return $this->belongsTo(MenuRoute::class, 'menu_route_id', 'id');
    }

    public $timestamps = false;

    #################################################################################
    ################################### Appends #####################################
    #################################################################################


    protected $appends = ['type_text'];


    public function getTypeTextAttribute()
    {
        $array = [
            1 => __('models/menus.fields.type_category'),
            2 => __('models/menus.fields.type_route'),
        ];
        return $array[$this->type];
    }

    public function routes()
    {
        return $this->belongsTo(MenuItem::class, 'parent_id', 'id');
    }

    /**
     * Scope a query to only include category type.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeCategories($query)
    {
        $query->where('type', 1);
    }

    /**
     * Scope a query to only include category type.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeRoutes($query)
    {
        $query->where('type', 2);
    }
}

