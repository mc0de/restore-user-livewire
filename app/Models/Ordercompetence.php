<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ordercompetence extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'ordercompetences';

    public $orderable = [
        'id',
        'order.name',
        'order.date',
        'competence.name',
        'number',
    ];

    public $filterable = [
        'id',
        'order.name',
        'order.date',
        'competence.name',
        'number',
    ];

    protected $fillable = [
        'order_id',
        'competence_id',
        'number',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function competence()
    {
        return $this->belongsTo(Competence::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
