<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public const ORDERSORT_SELECT = [
        'T' => 'Training',
        'E' => 'Evenement',
    ];

    public const PARTICIPATION_POSSIBLE_RADIO = [
        'Y' => 'Ja',
        'N' => 'Nee',
    ];

    public $table = 'orders';

    public $orderable = [
        'id',
        'ordersort',
        'ordertype.name',
        'name',
        'location',
        'address',
        'city',
        'description',
        'participation_possible',
        'date',
        'start_time',
        'end_time',
    ];

    public $filterable = [
        'id',
        'ordersort',
        'ordertype.name',
        'name',
        'location',
        'address',
        'city',
        'description',
        'participation_possible',
        'date',
        'start_time',
        'end_time',
    ];

    protected $dates = [
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'ordersort',
        'ordertype_id',
        'name',
        'location',
        'address',
        'city',
        'description',
        'participation_possible',
        'date',
        'start_time',
        'end_time',
    ];

    public function getOrdersortLabelAttribute($value)
    {
        return static::ORDERSORT_SELECT[$this->ordersort] ?? null;
    }

    public function ordertype()
    {
        return $this->belongsTo(Ordertype::class);
    }

    public function getParticipationPossibleLabelAttribute($value)
    {
        return static::PARTICIPATION_POSSIBLE_RADIO[$this->participation_possible] ?? null;
    }

    public function getDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
