<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function __invoke($year, $month)
    {

        $tasks = Task::with(['resource', 'taskCounts', 'workOrderItemDetail.workOrderItem.workOrder'])
            ->where('task_status_id', 4)
            ->whereHas('resource')
            ->whereHas('workOrderItemDetail.workOrderItem.workOrder', function ($query) use ($year, $month) {
                $query->whereYear('created', $year)
                      ->whereMonth('created', $month);
            })
            ->get();

            $taskData = $tasks->map(function ($task) {
                $workOrder = $task->workOrderItemDetail->workOrderItem->workOrder ?? null;
                $resource = $task->resource;

                $purchaseOrderId = DB::table('purchase_order')
                ->where('work_order_id', $workOrder->id ?? null)
                ->where('resource_id', $task->resource_id_assigned)
                ->value('id');
    
                return [
                    'resource_name'   => $resource ? "{$resource->firstname} {$resource->lastname}" : 'N/A',
                    'project_id'      => $workOrder->project_id ?? 'N/A',
                    'work_order_date' => $workOrder->created,
                    'task_number'     => $task->id,
                    'unit_price'      => $task->taskCounts->sum('unit_price') ?? 0,
                    'quantity'        => $task->taskCounts->sum('count') ?? 0,
                    'amount'          => $task->taskCounts->sum(fn($tc) => $tc->unit_price * $tc->count) ?? 0,
                    'work_order_number' => $purchaseOrderId ?? 'N/A',
                ];
            });
    
            return view('report.report', ['taskData' => $taskData]);
    }
}
