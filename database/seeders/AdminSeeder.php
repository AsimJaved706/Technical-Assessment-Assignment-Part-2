<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'), 
            'role' => 'admin', 
            'permissions' => [
                'manage_provinces',
                'manage_divisions',
                'manage_districts',
                'manage_tehsils',
                'manage_union_councils',
                'manage_households',
                'assign_polio_workers',
                'view_reports',
                'manage_users',
            ],
        ]);
    }
}
