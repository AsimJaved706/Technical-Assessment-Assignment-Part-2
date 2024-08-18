<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\District;
use App\Models\Division;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get the division IDs based on the names
        // Azad Jammu and Kashmir
        $muzaffarabad = Division::where('name', 'Muzaffarabad')->first();
        $mirpur = Division::where('name', 'Mirpur')->first();
        $poonch = Division::where('name', 'Poonch')->first();

        // Balochistan
        $kalat = Division::where('name', 'Kalat')->first();
        $loralai = Division::where('name', 'Loralai')->first();
        $makran = Division::where('name', 'Makran')->first();
        $naseerabad = Division::where('name', 'Naseerabad')->first();
        $quetta = Division::where('name', 'Quetta')->first();
        $rakhshan = Division::where('name', 'Rakhshan')->first();
        $sibi = Division::where('name', 'Sibi')->first();
        $zhob = Division::where('name', 'Zhob')->first();

        // Gilgit-Baltistan
        $gilgit = Division::where('name', 'Gilgit')->first();
        $baltistan = Division::where('name', 'Baltistan')->first();

        // Islamabad Capital Territory
        $islamabad = Division::where('name', 'Islamabad')->first();

        // Khyber Pakhtunkhwa
        $bannu = Division::where('name', 'Bannu')->first();
        $deraIsmailKhan = Division::where('name', 'Dera Ismail Khan')->first();
        $hazara = Division::where('name', 'Hazara')->first();
        $kohat = Division::where('name', 'Kohat')->first();
        $malakand = Division::where('name', 'Malakand')->first();
        $mardan = Division::where('name', 'Mardan')->first();
        $peshawar = Division::where('name', 'Peshawar')->first();

        // Punjab
        $bahawalpur = Division::where('name', 'Bahawalpur')->first();
        $deraGhaziKhan = Division::where('name', 'Dera Ghazi Khan')->first();
        $faisalabad = Division::where('name', 'Faisalabad')->first();
        $gujranwala = Division::where('name', 'Gujranwala')->first();
        $gujrat = Division::where('name', 'Gujrat')->first();
        $lahore = Division::where('name', 'Lahore')->first();
        $mianwali = Division::where('name', 'Mianwali')->first();
        $multan = Division::where('name', 'Multan')->first();
        $rawalpindi = Division::where('name', 'Rawalpindi')->first();
        $sahiwal = Division::where('name', 'Sahiwal')->first();
        $sargodha = Division::where('name', 'Sargodha')->first();

        // Sindh
        $hyderabad = Division::where('name', 'Hyderabad')->first();
        $karachi = Division::where('name', 'Karachi')->first();
        $larkana = Division::where('name', 'Larkana')->first();
        $mirpurKhas = Division::where('name', 'Mirpur Khas')->first();
        $shaheedBenazirabad = Division::where('name', 'Shaheed Benazirabad')->first();
        $sukkur = Division::where('name', 'Sukkur')->first();

        // Seed the districts
        $districts = [
            // Azad Jammu and Kashmir
            ['name' => 'Muzaffarabad', 'division_id' => $muzaffarabad->id],
            ['name' => 'Hattian Bala', 'division_id' => $muzaffarabad->id],
            ['name' => 'Neelum', 'division_id' => $muzaffarabad->id],
            ['name' => 'Mirpur', 'division_id' => $mirpur->id],
            ['name' => 'Bhimber', 'division_id' => $mirpur->id],
            ['name' => 'Kotli', 'division_id' => $mirpur->id],
            ['name' => 'Poonch', 'division_id' => $poonch->id],
            ['name' => 'Bagh', 'division_id' => $poonch->id],
            ['name' => 'Haveli', 'division_id' => $poonch->id],
            ['name' => 'Sudhnati', 'division_id' => $poonch->id],

            // Balochistan
            ['name' => 'Awaran', 'division_id' => $kalat->id],
            ['name' => 'Barkhan', 'division_id' => $loralai->id],
            ['name' => 'Chagai', 'division_id' => $rakhshan->id],
            ['name' => 'Chaman', 'division_id' => $quetta->id],
            ['name' => 'Dera Bugti', 'division_id' => $sibi->id],
            ['name' => 'Duki', 'division_id' => $loralai->id],
            ['name' => 'Gwadar', 'division_id' => $makran->id],
            ['name' => 'Harnai', 'division_id' => $sibi->id],
            ['name' => 'Hub', 'division_id' => $kalat->id],
            ['name' => 'Jafarabad', 'division_id' => $naseerabad->id],
            ['name' => 'Jhal Magsi', 'division_id' => $naseerabad->id],
            ['name' => 'Kachhi', 'division_id' => $kalat->id],
            ['name' => 'Kalat', 'division_id' => $kalat->id],
            ['name' => 'Kech', 'division_id' => $makran->id],
            ['name' => 'Kharan', 'division_id' => $rakhshan->id],
            ['name' => 'Khuzdar', 'division_id' => $kalat->id],
            ['name' => 'Kohlu', 'division_id' => $sibi->id],
            ['name' => 'Lasbela', 'division_id' => $kalat->id],
            ['name' => 'Loralai', 'division_id' => $loralai->id],
            ['name' => 'Mastung', 'division_id' => $kalat->id],
            ['name' => 'Musakhel', 'division_id' => $zhob->id],
            ['name' => 'Nasirabad', 'division_id' => $naseerabad->id],
            ['name' => 'Nushki', 'division_id' => $rakhshan->id],
            ['name' => 'Panjgur', 'division_id' => $makran->id],
            ['name' => 'Pishin', 'division_id' => $quetta->id],
            ['name' => 'Quetta', 'division_id' => $quetta->id],
            ['name' => 'Qila Abdullah', 'division_id' => $quetta->id],
            ['name' => 'Qilla Saifullah', 'division_id' => $zhob->id],
            ['name' => 'Sherani', 'division_id' => $zhob->id],
            ['name' => 'Sibi', 'division_id' => $sibi->id],
            ['name' => 'Sohbatpur', 'division_id' => $naseerabad->id],
            ['name' => 'Surab', 'division_id' => $kalat->id],
            ['name' => 'Washuk', 'division_id' => $rakhshan->id],
            ['name' => 'Zhob', 'division_id' => $zhob->id],
            ['name' => 'Ziarat', 'division_id' => $zhob->id],
            ['name' => 'Usta Muhammad', 'division_id' => $naseerabad->id],

            // Gilgit-Baltistan
            ['name' => 'Ghanche', 'division_id' => $baltistan->id],
            ['name' => 'Skardu', 'division_id' => $baltistan->id],
            ['name' => 'Astore', 'division_id' => $gilgit->id],
            ['name' => 'Diamer', 'division_id' => $gilgit->id],
            ['name' => 'Ghizer', 'division_id' => $gilgit->id],
            ['name' => 'Gilgit', 'division_id' => $gilgit->id],
            ['name' => 'Hunza', 'division_id' => $gilgit->id],
       


            // Khyber Pakhtunkhwa

            ['name' => 'Bajaur', 'division_id' => $malakand->id],
            ['name' => 'Bannu', 'division_id' => $bannu->id],
            ['name' => 'Battagram', 'division_id' => $hazara->id],
            ['name' => 'Buner', 'division_id' => $malakand->id],
            ['name' => 'Charsadda', 'division_id' => $peshawar->id],
            ['name' => 'Central Dir', 'division_id' => $malakand->id],
            ['name' => 'Dera Ismail Khan', 'division_id' => $deraIsmailKhan->id],
            ['name' => 'Hangu', 'division_id' => $kohat->id],
            ['name' => 'Haripur', 'division_id' => $hazara->id],
            ['name' => 'Karak', 'division_id' => $kohat->id],
            ['name' => 'Khyber', 'division_id' => $peshawar->id],
            ['name' => 'Kohat', 'division_id' => $kohat->id],
            ['name' => 'Kolai Palas', 'division_id' => $hazara->id],
            ['name' => 'Kurram', 'division_id' => $kohat->id],
            ['name' => 'Lakki Marwat', 'division_id' => $bannu->id],
            ['name' => 'Lower Chitral', 'division_id' => $malakand->id],
            ['name' => 'Lower Dir', 'division_id' => $malakand->id],
            ['name' => 'Lower Kohistan', 'division_id' => $hazara->id],
            ['name' => 'Malakand', 'division_id' => $malakand->id],
            ['name' => 'Mansehra', 'division_id' => $hazara->id],
            ['name' => 'Mardan', 'division_id' => $mardan->id],
            ['name' => 'Mohmand', 'division_id' => $malakand->id],
            ['name' => 'North Waziristan', 'division_id' => $bannu->id],
            ['name' => 'Nowshera', 'division_id' => $peshawar->id],
            ['name' => 'Orakzai', 'division_id' => $kohat->id],
            ['name' => 'Peshawar', 'division_id' => $peshawar->id],
            ['name' => 'Shangla', 'division_id' => $malakand->id],
            ['name' => 'Upper South Waziristan', 'division_id' => $bannu->id],
            ['name' => 'Lower South Waziristan', 'division_id' => $bannu->id],
            ['name' => 'Swabi', 'division_id' => $mardan->id],
            ['name' => 'Swat', 'division_id' => $malakand->id],
            ['name' => 'Tank', 'division_id' => $deraIsmailKhan->id],
            ['name' => 'Torghar', 'division_id' => $hazara->id],
            ['name' => 'Upper Chitral', 'division_id' => $malakand->id],
            ['name' => 'Upper Dir', 'division_id' => $malakand->id],
            ['name' => 'Upper Kohistan', 'division_id' => $hazara->id],

            // Punjab
            ['name' => 'Attock', 'division_id' => $rawalpindi->id],
            ['name' => 'Bahawalnagar', 'division_id' => $bahawalpur->id],
            ['name' => 'Bahawalpur', 'division_id' => $bahawalpur->id],
            ['name' => 'Bhakkar', 'division_id' => $sargodha->id],
            ['name' => 'Chakwal', 'division_id' => $rawalpindi->id],
            ['name' => 'Chiniot', 'division_id' => $faisalabad->id],
            ['name' => 'Dera Ghazi Khan', 'division_id' => $deraGhaziKhan->id],
            ['name' => 'Faisalabad', 'division_id' => $faisalabad->id],
            ['name' => 'Gujranwala', 'division_id' => $gujranwala->id],
            ['name' => 'Gujrat', 'division_id' => $gujrat->id],
            ['name' => 'Hafizabad', 'division_id' => $gujranwala->id],
            ['name' => 'Jampur', 'division_id' => $deraGhaziKhan->id],
            ['name' => 'Jhang', 'division_id' => $faisalabad->id],
            ['name' => 'Jhelum', 'division_id' => $rawalpindi->id],
            ['name' => 'Kasur', 'division_id' => $lahore->id],
            ['name' => 'Khanewal', 'division_id' => $multan->id],
            ['name' => 'Khushab', 'division_id' => $sargodha->id],
            ['name' => 'Lahore', 'division_id' => $lahore->id],
            ['name' => 'Layyah', 'division_id' => $deraGhaziKhan->id],
            ['name' => 'Lodhran', 'division_id' => $bahawalpur->id],
            ['name' => 'Mandi Bahauddin', 'division_id' => $gujrat->id],
            ['name' => 'Mianwali', 'division_id' => $mianwali->id],
            ['name' => 'Multan', 'division_id' => $multan->id],
            ['name' => 'Muzaffargarh', 'division_id' => $deraGhaziKhan->id],
            ['name' => 'Nankana Sahib', 'division_id' => $lahore->id],
            ['name' => 'Narowal', 'division_id' => $gujranwala->id],
            ['name' => 'Okara', 'division_id' => $sahiwal->id],
            ['name' => 'Pakpattan', 'division_id' => $sahiwal->id],
            ['name' => 'Rahim Yar Khan', 'division_id' => $bahawalpur->id],
            ['name' => 'Rajanpur', 'division_id' => $deraGhaziKhan->id],
            ['name' => 'Rawalpindi', 'division_id' => $rawalpindi->id],
            ['name' => 'Sahiwal', 'division_id' => $sahiwal->id],
            ['name' => 'Sargodha', 'division_id' => $sargodha->id],
            ['name' => 'Sheikhupura', 'division_id' => $lahore->id],
            ['name' => 'Sialkot', 'division_id' => $gujranwala->id],
            ['name' => 'Toba Tek Singh', 'division_id' => $faisalabad->id],
            ['name' => 'Vehari', 'division_id' => $multan->id],
            ['name' => 'Talagang', 'division_id' => $rawalpindi->id],
            ['name' => 'Murree', 'division_id' => $rawalpindi->id],
            ['name' => 'Taunsa', 'division_id' => $deraGhaziKhan->id],
            ['name' => 'Kot Addu', 'division_id' => $deraGhaziKhan->id],
            ['name' => 'Wazirabad', 'division_id' => $gujranwala->id],

            // Sindh
            ['name' => 'Badin', 'division_id' => $hyderabad->id],
            ['name' => 'Dadu', 'division_id' => $hyderabad->id],
            ['name' => 'Ghotki', 'division_id' => $sukkur->id],
            ['name' => 'Hyderabad', 'division_id' => $hyderabad->id],
            ['name' => 'Jacobabad', 'division_id' => $sukkur->id],
            ['name' => 'Jamshoro', 'division_id' => $hyderabad->id],
            ['name' => 'Karachi Central', 'division_id' => $karachi->id],
            ['name' => 'Karachi East', 'division_id' => $karachi->id],
            ['name' => 'Karachi South', 'division_id' => $karachi->id],
            ['name' => 'Karachi West', 'division_id' => $karachi->id],
            ['name' => 'Kashmore', 'division_id' => $sukkur->id],
            ['name' => 'Keamari', 'division_id' => $karachi->id],
            ['name' => 'Khairpur', 'division_id' => $sukkur->id],
            ['name' => 'Korangi', 'division_id' => $karachi->id],
            ['name' => 'Larkana', 'division_id' => $larkana->id],
            ['name' => 'Malir', 'division_id' => $karachi->id],
            ['name' => 'Matiari', 'division_id' => $hyderabad->id],
            ['name' => 'Mirpur Khas', 'division_id' => $mirpurKhas->id],
            ['name' => 'Naushahro Feroze', 'division_id' => $shaheedBenazirabad->id],
            ['name' => 'Qambar Shahdadkot', 'division_id' => $larkana->id],
            ['name' => 'Sanghar', 'division_id' => $mirpurKhas->id],
            ['name' => 'Shaheed Benazirabad', 'division_id' => $shaheedBenazirabad->id],
            ['name' => 'Shikarpur', 'division_id' => $larkana->id],
            ['name' => 'Sujawal', 'division_id' => $hyderabad->id],
            ['name' => 'Sukkur', 'division_id' => $sukkur->id],
            ['name' => 'Tando Allahyar', 'division_id' => $hyderabad->id],
            ['name' => 'Tando Muhammad Khan', 'division_id' => $hyderabad->id],
            ['name' => 'Tharparkar', 'division_id' => $mirpurKhas->id],
            ['name' => 'Thatta', 'division_id' => $hyderabad->id],
            ['name' => 'Umerkot', 'division_id' => $mirpurKhas->id],
        ];

        // Seed the districts
        foreach ($districts as $district) {
            District::create($district);
        }
    }
}
