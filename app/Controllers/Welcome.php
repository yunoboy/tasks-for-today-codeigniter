<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Welcome extends BaseController
{
    public function index(): string
    {
        $today = date('Y-m-d');
        $taskModel = new TaskModel();

        return view('welcome/index', [
            'title' => 'Tasks for Today',
            'today' => $today,
            'tasks' => $taskModel->findForDate($today),
        ]);
    }
}
