<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    use HasFactory;

    protected $table = 'work_order';

    public function workOrderItems()
    {
        return $this->hasMany(WorkOrderItem::class, 'work_order_id', 'id');
    }
}
