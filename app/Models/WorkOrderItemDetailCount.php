<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkOrderItemDetailCount extends Model
{
    use HasFactory;

    public function priceCategory()
    {
        return $this->belongsTo(PriceCategory::class, 'price_category_id', 'id');
    }

    public function workOrderItemDetail()
    {
        return $this->belongsTo(WorkOrderItemDetail::class, 'work_order_item_detail_id', 'id');
    }
}
