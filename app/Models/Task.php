<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'task';

    public function resource()
    {
        return $this->belongsTo(Resource::class, 'resource_id_assigned');
    }

    public function workOrderItemDetail()
    {
        return $this->belongsTo(WorkOrderItemDetail::class, 'work_order_item_detail_id', 'id');
    }

    public function taskCounts()
    {
        return $this->hasMany(TaskCount::class, 'task_id', 'id');
    }
}
