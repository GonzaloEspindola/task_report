<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkOrderItem extends Model
{
    use HasFactory;

    protected $table = 'work_order_item';

    public function workOrder()
    {
        return $this->belongsTo(WorkOrder::class, 'work_order_id', 'id');
    }

    public function workOrderItemDetails()
    {
        return $this->hasMany(WorkOrderItemDetail::class, 'work_order_item_id', 'id');
    }
}
