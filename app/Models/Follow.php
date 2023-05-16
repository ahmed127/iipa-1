<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Follow extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'follows';

    public $fillable = [
        'user_id',
        'name',
        'forable_type',
        'forable_id',
        'department', // 1 => advisors, 2 => class_action, 3 => volunteer, 4 => training_entities, 5 => training_individuals, 6 => content_us
        'status', // 1=>pending, 2 => inprogress, 3 => approved, 4 => rejected, 5 => closed, 6 => finished
    ];

    protected $casts = [
        'id'            => 'integer',
        'user_id'       => 'integer',
        'request_type'  => 'string',
        'request_id'    => 'integer',
        'department'    => 'integer',
        'status'        => 'integer'
    ];

    public static function departments()
    {
        return [
            1 => __('lang.request_your_advisors'),
            2 => __('lang.request_class_action'),
            3 => __('lang.request_volunteer'),
            4 => __('lang.request_training_entities'),
            5 => __('lang.request_training_individuals'),
            6 => __('lang.request_content_us'),
            7 => __('lang.request_recruitment'),

        ];
    }

    public static function status_types()
    {
        return [
            1 => __('lang.pending'),
            2 => __('lang.in_progress'),
            3 => __('lang.approved'),
            4 => __('lang.rejected'),
            5 => __('lang.closed'),
            6 => __('lang.finished'),
        ];
    }

    protected $appends = ['status_name', 'department_name'];

    public function getStatusNameAttribute()
    {
        return $this->status_types()[$this->status];
    }
    public function getDepartmentNameAttribute()
    {
        return $this->departments()[$this->department];
    }

    public function forable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
