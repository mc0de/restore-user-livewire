<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ordertype extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public const TYPE_SELECT = [
        'T' => 'Training',
        'E' => 'Evenement',
    ];

    public $table = 'ordertypes';

    public $orderable = [
        'id',
        'name',
        'type',
    ];

    public $filterable = [
        'id',
        'name',
        'type',
    ];

    protected $fillable = [
        'name',
        'type',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getTypeLabelAttribute($value)
    {
        return static::TYPE_SELECT[$this->type] ?? null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
