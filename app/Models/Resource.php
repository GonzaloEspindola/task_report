<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $table = 'resource';
    
    public function tasks()
    {
        return $this->hasMany(Task::class, 'resource_id_assigned');
    }
}
