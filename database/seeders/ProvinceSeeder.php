<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;
class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            'Balochistan',
            'Khyber Pakhtunkhwa',
            'Punjab',
            'Sindh',
            'Azad Kashmir',
            'Gilgit-Baltistan',
        ];

        foreach ($provinces as $province) {
            Province::create(['name' => $province]);
        }
    }
}
