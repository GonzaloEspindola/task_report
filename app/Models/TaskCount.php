<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskCount extends Model
{
    use HasFactory;

    protected $table = 'task_count';

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
