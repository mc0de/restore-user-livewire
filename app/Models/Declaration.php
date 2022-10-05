<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Declaration extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'declarations';

    public $orderable = [
        'id',
        'user.name',
        'order.name',
        'order.date',
        'user_start_time',
        'user_end_time',
        'kilometers',
        'status.name',
    ];

    public $filterable = [
        'id',
        'user.name',
        'order.name',
        'order.date',
        'user_start_time',
        'user_end_time',
        'kilometers',
        'status.name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'order_id',
        'user_start_time',
        'user_end_time',
        'kilometers',
        'status_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function status()
    {
        return $this->belongsTo(Declarationstatus::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
