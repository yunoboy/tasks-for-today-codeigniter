<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DemoDataSeeder extends Seeder
{
    public function run()
    {
        $today = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime('-1 day'));
        $tomorrow = date('Y-m-d', strtotime('+1 day'));
        $createdAt = date('Y-m-d H:i:s');

        $this->db->table('tasks')->truncate();
        $this->db->table('users')->truncate();

        $this->db->table('tasks')->insertBatch([
            ['title' => 'Review project requirements', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => 'Prepare team meeting notes', 'status' => 'completed', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => 'Update client contact list', 'status' => 'in_progress', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => 'Test the daily task filter', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
            ['title' => 'Archive previous reports', 'status' => 'completed', 'task_date' => $yesterday, 'created_at' => $createdAt],
            ['title' => 'Back up the project database', 'status' => 'completed', 'task_date' => $yesterday, 'created_at' => $createdAt],
            ['title' => 'Draft the next sprint plan', 'status' => 'pending', 'task_date' => $tomorrow, 'created_at' => $createdAt],
            ['title' => 'Schedule the stakeholder review', 'status' => 'pending', 'task_date' => $tomorrow, 'created_at' => $createdAt],
        ]);

        $this->db->table('users')->insert([
            'username' => 'yuan',
            'full_name' => 'Yuan Evangelista',
            'email' => 'yuan@example.com',
            'created_at' => $createdAt,
        ]);
    }
}
