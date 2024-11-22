<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkOrderItemDetail extends Model
{
    use HasFactory;

    protected $table = 'work_order_item_detail';

    public function workOrderItem()
    {
        return $this->belongsTo(WorkOrderItem::class, 'work_order_item_id', 'id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'work_order_detail_id', 'id');
    }
}
