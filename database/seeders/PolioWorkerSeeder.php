<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PolioWorkerSeeder extends Seeder
{
    public function run()
    {
        // Define the permissions for polio workers
        $permissions = [
            "manage_provinces",
            "manage_divisions",
            "manage_districts",
            "manage_tehsils",
            "manage_union_councils",
            "manage_households",
        ];

        // Create 5 polio_worker users with all permissions
        $users = [
            [
                'name' => 'Worker 1',
                'email' => 'worker1@example.com',
                'password' => Hash::make('password'),
                'role' => "polio_worker",
                'permissions' => $permissions

            ],
            [
                'name' => 'Worker 2',
                'email' => 'worker2@example.com',
                'password' => Hash::make('password'),
                'role' => "polio_worker",
                'permissions' => $permissions

            ],
            [
                'name' => 'Worker 3',
                'email' => 'worker3@example.com',
                'password' => Hash::make('password'),
                'role' => "polio_worker",
                'permissions' => $permissions
            ],
            [
                'name' => 'Worker 4',
                'email' => 'worker4@example.com',
                'password' => Hash::make('password'),
                'role' => "polio_worker",
                'permissions' => $permissions

            ],
            [
                'name' => 'Worker 5',
                'email' => 'worker5@example.com',
                'password' => Hash::make('password'),
                'role' => "polio_worker",
                'permissions' => $permissions

            ],
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}
