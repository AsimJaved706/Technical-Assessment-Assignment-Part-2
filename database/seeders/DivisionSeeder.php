<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Division;
use App\Models\Province;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get the province IDs based on the names
        $balochistan = Province::where('name', 'Balochistan')->first();
        $khyberPakhtunkhwa = Province::where('name', 'Khyber Pakhtunkhwa')->first();
        $punjab = Province::where('name', 'Punjab')->first();
        $sindh = Province::where('name', 'Sindh')->first();
        $azadKashmir = Province::where('name', 'Azad Kashmir')->first();
        $gilgitBaltistan = Province::where('name', 'Gilgit-Baltistan')->first();

        // Divisions of Balochistan Province
        $divisions = [
            ['name' => 'Kalat', 'province_id' => $balochistan->id],
            ['name' => 'Loralai', 'province_id' => $balochistan->id],
            ['name' => 'Makran', 'province_id' => $balochistan->id],
            ['name' => 'Naseerabad', 'province_id' => $balochistan->id],
            ['name' => 'Quetta', 'province_id' => $balochistan->id],
            ['name' => 'Rakhshan', 'province_id' => $balochistan->id],
            ['name' => 'Sibi', 'province_id' => $balochistan->id],
            ['name' => 'Zhob', 'province_id' => $balochistan->id],

            // Divisions of Khyber Pakhtunkhwa Province
            ['name' => 'Bannu', 'province_id' => $khyberPakhtunkhwa->id],
            ['name' => 'Dera Ismail Khan', 'province_id' => $khyberPakhtunkhwa->id],
            ['name' => 'Hazara', 'province_id' => $khyberPakhtunkhwa->id],
            ['name' => 'Kohat', 'province_id' => $khyberPakhtunkhwa->id],
            ['name' => 'Malakand', 'province_id' => $khyberPakhtunkhwa->id],
            ['name' => 'Mardan', 'province_id' => $khyberPakhtunkhwa->id],
            ['name' => 'Peshawar', 'province_id' => $khyberPakhtunkhwa->id],

            // Divisions of Punjab Province
            ['name' => 'Bahawalpur', 'province_id' => $punjab->id],
            ['name' => 'Dera Ghazi Khan', 'province_id' => $punjab->id],
            ['name' => 'Faisalabad', 'province_id' => $punjab->id],
            ['name' => 'Gujranwala', 'province_id' => $punjab->id],
            ['name' => 'Gujrat', 'province_id' => $punjab->id],
            ['name' => 'Lahore', 'province_id' => $punjab->id],
            ['name' => 'Mianwali', 'province_id' => $punjab->id],
            ['name' => 'Multan', 'province_id' => $punjab->id],
            ['name' => 'Rawalpindi', 'province_id' => $punjab->id],
            ['name' => 'Sahiwal', 'province_id' => $punjab->id],
            ['name' => 'Sargodha', 'province_id' => $punjab->id],

            // Divisions of Sindh Province
            ['name' => 'Hyderabad', 'province_id' => $sindh->id],
            ['name' => 'Karachi', 'province_id' => $sindh->id],
            ['name' => 'Larkana', 'province_id' => $sindh->id],
            ['name' => 'Mirpur Khas', 'province_id' => $sindh->id],
            ['name' => 'Shaheed Benazirabad', 'province_id' => $sindh->id],
            ['name' => 'Sukkur', 'province_id' => $sindh->id],

            // Divisions of Azad Kashmir
            ['name' => 'Mirpur', 'province_id' => $azadKashmir->id],
            ['name' => 'Muzaffarabad', 'province_id' => $azadKashmir->id],
            ['name' => 'Poonch', 'province_id' => $azadKashmir->id],

            // Divisions of Gilgit-Baltistan
            ['name' => 'Gilgit', 'province_id' => $gilgitBaltistan->id],
            ['name' => 'Baltistan', 'province_id' => $gilgitBaltistan->id],
        ];

        // Seed the divisions
        foreach ($divisions as $division) {
            Division::create($division);
        }
    }
}
