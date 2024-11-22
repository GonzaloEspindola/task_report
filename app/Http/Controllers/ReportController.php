<?php

namespace App\Http\Controllers;

use App\Models\Task;

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

            //retornar un json con el array de datos
            return response()->json($tasks);
    }
}
