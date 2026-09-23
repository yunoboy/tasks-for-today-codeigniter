<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = [
        'title',
        'status',
        'task_date',
        'created_at',
    ];
    protected $useTimestamps = false;

    public function findForDate(string $date): array
    {
        return $this->where('task_date', $date)
            ->orderBy('created_at', 'ASC')
            ->findAll();
    }
}
