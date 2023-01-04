<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;

class NotificationTo extends Model
{
    use SoftDeletes, Translatable;


    public $table = 'notification_to';

    protected $fillable = [
        'notificationable_id',
        'notificationable_type'
    ];

    /**
     * Timestamps.
     *
     * @var boolean
     */
    public $timestamps = false;

    public function notificationable()
    {
        return $this->morphTo();
    }
}
