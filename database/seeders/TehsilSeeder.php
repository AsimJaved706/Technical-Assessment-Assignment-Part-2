<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tehsil;
use App\Models\District;

class TehsilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get the district IDs based on the names
        // Bahawalpur Division
        $bahawalnagar = District::where('name', 'Bahawalnagar')->first();
        $bahawalpur = District::where('name', 'Bahawalpur')->first();
        $rahimYarKhan = District::where('name', 'Rahim Yar Khan')->first();

        // Dera Ghazi Khan Division
        $deraGhaziKhan = District::where('name', 'Dera Ghazi Khan')->first();
        $jampur = District::where('name', 'Jampur')->first();
        $kotAddu = District::where('name', 'Kot Addu')->first();
        $layyah = District::where('name', 'Layyah')->first();
        $muzaffargarh = District::where('name', 'Muzaffargarh')->first();
        $rajanpur = District::where('name', 'Rajanpur')->first();
        $taunsa = District::where('name', 'Taunsa')->first();

        // Faisalabad Division
        $chiniot = District::where('name', 'Chiniot')->first();
        $faisalabad = District::where('name', 'Faisalabad')->first();
        $jhang = District::where('name', 'Jhang')->first();
        $tobaTekSingh = District::where('name', 'Toba Tek Singh')->first();

        // Gujrat Division
        $gujrat = District::where('name', 'Gujrat')->first();
        $hafizabad = District::where('name', 'Hafizabad')->first();
        $mandiBahauddin = District::where('name', 'Mandi Bahauddin')->first();
        $wazirabad = District::where('name', 'Wazirabad')->first();

        // Gujranwala Division
        $gujranwala = District::where('name', 'Gujranwala')->first();
        $narowal = District::where('name', 'Narowal')->first();
        $sialkot = District::where('name', 'Sialkot')->first();

        // Lahore Division
        $kasur = District::where('name', 'Kasur')->first();
        $lahore = District::where('name', 'Lahore')->first();
        $nankanaSahib = District::where('name', 'Nankana Sahib')->first();
        $sheikhupura = District::where('name', 'Sheikhupura')->first();

        // Multan Division
        $khanewal = District::where('name', 'Khanewal')->first();
        $lodhran = District::where('name', 'Lodhran')->first();
        $multan = District::where('name', 'Multan')->first();
        $vehari = District::where('name', 'Vehari')->first();

        // Rawalpindi Division
        $attock = District::where('name', 'Attock')->first();
        $chakwal = District::where('name', 'Chakwal')->first();
        $jhelum = District::where('name', 'Jhelum')->first();
        $rawalpindi = District::where('name', 'Rawalpindi')->first();
        $murree = District::where('name', 'Murree')->first();

        // Sahiwal Division
        $okara = District::where('name', 'Okara')->first();
        $pakpattan = District::where('name', 'Pakpattan')->first();
        $sahiwal = District::where('name', 'Sahiwal')->first();

        // Sargodha Division
        $khushab = District::where('name', 'Khushab')->first();
        $sargodha = District::where('name', 'Sargodha')->first();

        // Mianwali Division
        $bhakkar = District::where('name', 'Bhakkar')->first();
        $mianwali = District::where('name', 'Mianwali')->first();
        $talagang = District::where('name', 'Talagang')->first();

        // Seed the tehsils
        $tehsils = [
            // Bahawalpur Division
            ['name' => 'Bahawalnagar Tehsil', 'district_id' => $bahawalnagar->id],
            ['name' => 'Chishtian Tehsil', 'district_id' => $bahawalnagar->id],
            ['name' => 'Fort Abbas Tehsil', 'district_id' => $bahawalnagar->id],
            ['name' => 'Haroonabad Tehsil', 'district_id' => $bahawalnagar->id],
            ['name' => 'Minchinabad Tehsil', 'district_id' => $bahawalnagar->id],
            ['name' => 'Ahmadpur East Tehsil', 'district_id' => $bahawalpur->id],
            ['name' => 'Bahawalpur City Tehsil', 'district_id' => $bahawalpur->id],
            ['name' => 'Bahawalpur Saddar Tehsil', 'district_id' => $bahawalpur->id],
            ['name' => 'Hasilpur Tehsil', 'district_id' => $bahawalpur->id],
            ['name' => 'Khairpur Tamewali Tehsil', 'district_id' => $bahawalpur->id],
            ['name' => 'Yazman Tehsil', 'district_id' => $bahawalpur->id],
            ['name' => 'Khanpur Tehsil', 'district_id' => $rahimYarKhan->id],
            ['name' => 'Liaqatpur Tehsil', 'district_id' => $rahimYarKhan->id],
            ['name' => 'Rahim Yar Khan Tehsil', 'district_id' => $rahimYarKhan->id],
            ['name' => 'Sadiqabad Tehsil', 'district_id' => $rahimYarKhan->id],

            // Dera Ghazi Khan Division
            ['name' => 'Dera Ghazi Khan Tehsil', 'district_id' => $deraGhaziKhan->id],
            ['name' => 'De-Excluded Area D.G. Khan Tehsil', 'district_id' => $deraGhaziKhan->id],
            ['name' => 'Kot Chutta Tehsil', 'district_id' => $deraGhaziKhan->id],
            ['name' => 'Jampur Tehsil', 'district_id' => $jampur->id],
            ['name' => 'Muhammadpur Tehsil', 'district_id' => $jampur->id],
            ['name' => 'Dajal Tehsil', 'district_id' => $jampur->id],
            ['name' => 'Tribal Area Tehsil', 'district_id' => $jampur->id],
            ['name' => 'Kot Addu Tehsil', 'district_id' => $kotAddu->id],
            ['name' => 'Chowk Sarwar Shaheed Tehsil', 'district_id' => $kotAddu->id],
            ['name' => 'Chaubara Tehsil', 'district_id' => $layyah->id],
            ['name' => 'Karor Lal Esan Tehsil', 'district_id' => $layyah->id],
            ['name' => 'Layyah Tehsil', 'district_id' => $layyah->id],
            ['name' => 'Alipur Tehsil', 'district_id' => $muzaffargarh->id],
            ['name' => 'Jatoi Tehsil', 'district_id' => $muzaffargarh->id],
            ['name' => 'Muzaffargarh Tehsil', 'district_id' => $muzaffargarh->id],
            ['name' => 'Rajanpur Tehsil', 'district_id' => $rajanpur->id],
            ['name' => 'Rojhan Tehsil', 'district_id' => $rajanpur->id],
            ['name' => 'De-Excluded Area Rajanpur Tehsil', 'district_id' => $rajanpur->id],
            ['name' => 'Taunsa Tehsil', 'district_id' => $taunsa->id],
            ['name' => 'Koh-e-Suleman Tehsil', 'district_id' => $taunsa->id],
            ['name' => 'Vehova Tehsil', 'district_id' => $taunsa->id],

            // Faisalabad Division
            ['name' => 'Bhowana Tehsil', 'district_id' => $chiniot->id],
            ['name' => 'Chiniot Tehsil', 'district_id' => $chiniot->id],
            ['name' => 'Lalian Tehsil', 'district_id' => $chiniot->id],
            ['name' => 'Chak Jhumra Tehsil', 'district_id' => $faisalabad->id],
            ['name' => 'Faisalabad City Tehsil', 'district_id' => $faisalabad->id],
            ['name' => 'Faisalabad Sadar Tehsil', 'district_id' => $faisalabad->id],
            ['name' => 'Jaranwala Tehsil', 'district_id' => $faisalabad->id],
            ['name' => 'Samundri Tehsil', 'district_id' => $faisalabad->id],
            ['name' => 'Tandlianwala Tehsil', 'district_id' => $faisalabad->id],
            ['name' => 'Jhang Tehsil', 'district_id' => $jhang->id],
            ['name' => 'Shorkot Tehsil', 'district_id' => $jhang->id],
            ['name' => 'Ahmadpur Sial Tehsil', 'district_id' => $jhang->id],
            ['name' => 'Athara Hazari Tehsil', 'district_id' => $jhang->id],
            ['name' => 'Gojra Tehsil', 'district_id' => $tobaTekSingh->id],
            ['name' => 'Kamalia Tehsil', 'district_id' => $tobaTekSingh->id],
            ['name' => 'Pirmahal Tehsil', 'district_id' => $tobaTekSingh->id],
            ['name' => 'Toba Tek Singh Tehsil', 'district_id' => $tobaTekSingh->id],

            // Gujrat Division
            ['name' => 'Gujrat Tehsil', 'district_id' => $gujrat->id],
            ['name' => 'Kharian Tehsil', 'district_id' => $gujrat->id],
            ['name' => 'Sarai Alamgir Tehsil', 'district_id' => $gujrat->id],
            ['name' => 'Jalalpur Jattan Tehsil', 'district_id' => $gujrat->id],
            ['name' => 'Kunjah Tehsil', 'district_id' => $gujrat->id],
            ['name' => 'Hafizabad Tehsil', 'district_id' => $hafizabad->id],
            ['name' => 'Pindi Bhattian Tehsil', 'district_id' => $hafizabad->id],
            ['name' => 'Malakwal Tehsil', 'district_id' => $mandiBahauddin->id],
            ['name' => 'Mandi Bahauddin Tehsil', 'district_id' => $mandiBahauddin->id],
            ['name' => 'Phalia Tehsil', 'district_id' => $mandiBahauddin->id],
            ['name' => 'Wazirabad Tehsil', 'district_id' => $wazirabad->id],
            ['name' => 'Ali Pur Chatta Tehsil', 'district_id' => $wazirabad->id],

            // Gujranwala Division
            ['name' => 'Gujranwala City Tehsil', 'district_id' => $gujranwala->id],
            ['name' => 'Gujranwala Saddar Tehsil', 'district_id' => $gujranwala->id],
            ['name' => 'Kamoke Tehsil', 'district_id' => $gujranwala->id],
            ['name' => 'Nowshera Virkan Tehsil', 'district_id' => $gujranwala->id],
            ['name' => 'Narowal Tehsil', 'district_id' => $narowal->id],
            ['name' => 'Shakargarh Tehsil', 'district_id' => $narowal->id],
            ['name' => 'Zafarwal Tehsil', 'district_id' => $narowal->id],
            ['name' => 'Daska Tehsil', 'district_id' => $sialkot->id],
            ['name' => 'Pasrur Tehsil', 'district_id' => $sialkot->id],
            ['name' => 'Sambrial Tehsil', 'district_id' => $sialkot->id],
            ['name' => 'Sialkot Tehsil', 'district_id' => $sialkot->id],

            // Lahore Division
            ['name' => 'Chunian Tehsil', 'district_id' => $kasur->id],
            ['name' => 'Kasur Tehsil', 'district_id' => $kasur->id],
            ['name' => 'Kot Radha Kishan Tehsil', 'district_id' => $kasur->id],
            ['name' => 'Pattoki Tehsil', 'district_id' => $kasur->id],
            ['name' => 'Lahore Cantonment Tehsil', 'district_id' => $lahore->id],
            ['name' => 'Lahore City Tehsil', 'district_id' => $lahore->id],
            ['name' => 'Model Town Tehsil', 'district_id' => $lahore->id],
            ['name' => 'Raiwind Tehsil', 'district_id' => $lahore->id],
            ['name' => 'Shalimar Tehsil', 'district_id' => $lahore->id],
            ['name' => 'Nankana Sahib Tehsil', 'district_id' => $nankanaSahib->id],
            ['name' => 'Sangla Hill Tehsil', 'district_id' => $nankanaSahib->id],
            ['name' => 'Shah Kot Tehsil', 'district_id' => $nankanaSahib->id],
            ['name' => 'Ferozewala Tehsil', 'district_id' => $sheikhupura->id],
            ['name' => 'Muridke Tehsil', 'district_id' => $sheikhupura->id],
            ['name' => 'Safdarabad Tehsil', 'district_id' => $sheikhupura->id],
            ['name' => 'Sheikhupura Tehsil', 'district_id' => $sheikhupura->id],
            ['name' => 'Sharak Pur Tehsil', 'district_id' => $sheikhupura->id],

            // Multan Division
            ['name' => 'Jahanian Tehsil', 'district_id' => $khanewal->id],
            ['name' => 'Kabirwala Tehsil', 'district_id' => $khanewal->id],
            ['name' => 'Khanewal Tehsil', 'district_id' => $khanewal->id],
            ['name' => 'Mian Channu Tehsil', 'district_id' => $khanewal->id],
            ['name' => 'Dunyapur Tehsil', 'district_id' => $lodhran->id],
            ['name' => 'Kahror Pacca Tehsil', 'district_id' => $lodhran->id],
            ['name' => 'Lodhran Tehsil', 'district_id' => $lodhran->id],
            ['name' => 'Jalalpur Pirwala Tehsil', 'district_id' => $multan->id],
            ['name' => 'Multan City Tehsil', 'district_id' => $multan->id],
            ['name' => 'Multan Saddar Tehsil', 'district_id' => $multan->id],
            ['name' => 'Shujabad Tehsil', 'district_id' => $multan->id],
            ['name' => 'Jallah Jeem Tehsil', 'district_id' => $vehari->id],
            ['name' => 'Burewala Tehsil', 'district_id' => $vehari->id],
            ['name' => 'Mailsi Tehsil', 'district_id' => $vehari->id],
            ['name' => 'Vehari Tehsil', 'district_id' => $vehari->id],

            // Rawalpindi Division
            ['name' => 'Attock Tehsil', 'district_id' => $attock->id],
            ['name' => 'Fateh Jang Tehsil', 'district_id' => $attock->id],
            ['name' => 'Hassan Abdal Tehsil', 'district_id' => $attock->id],
            ['name' => 'Hazro Tehsil', 'district_id' => $attock->id],
            ['name' => 'Jand Tehsil', 'district_id' => $attock->id],
            ['name' => 'Pindi Gheb Tehsil', 'district_id' => $attock->id],
            ['name' => 'Chakwal Tehsil', 'district_id' => $chakwal->id],
            ['name' => 'Choa Saidan Shah Tehsil', 'district_id' => $chakwal->id],
            ['name' => 'Kallar Kahar Tehsil', 'district_id' => $chakwal->id],
            ['name' => 'Dina Tehsil', 'district_id' => $jhelum->id],
            ['name' => 'Jhelum Tehsil', 'district_id' => $jhelum->id],
            ['name' => 'Pind Dadan Khan Tehsil', 'district_id' => $jhelum->id],
            ['name' => 'Sohawa Tehsil', 'district_id' => $jhelum->id],
            ['name' => 'Rawalpindi Tehsil', 'district_id' => $rawalpindi->id],
            ['name' => 'Gujar Khan Tehsil', 'district_id' => $rawalpindi->id],
            ['name' => 'Kahuta Tehsil', 'district_id' => $rawalpindi->id],
            ['name' => 'Kallar Syedan Tehsil', 'district_id' => $rawalpindi->id],
            ['name' => 'Taxila Tehsil', 'district_id' => $rawalpindi->id],
            ['name' => 'Daultala Tehsil', 'district_id' => $rawalpindi->id],
            ['name' => 'Kotli Sattian Tehsil', 'district_id' => $murree->id],
            ['name' => 'Murree Tehsil', 'district_id' => $murree->id],

            // Sahiwal Division
            ['name' => 'Depalpur Tehsil', 'district_id' => $okara->id],
            ['name' => 'Okara Tehsil', 'district_id' => $okara->id],
            ['name' => 'Renala Khurd Tehsil', 'district_id' => $okara->id],
            ['name' => 'Arifwala Tehsil', 'district_id' => $pakpattan->id],
            ['name' => 'Pakpattan Tehsil', 'district_id' => $pakpattan->id],
            ['name' => 'Chichawatni Tehsil', 'district_id' => $sahiwal->id],
            ['name' => 'Sahiwal Tehsil', 'district_id' => $sahiwal->id],

            // Sargodha Division
            ['name' => 'Khushab Tehsil', 'district_id' => $khushab->id],
            ['name' => 'Noorpur Thal Tehsil', 'district_id' => $khushab->id],
            ['name' => 'Quaidabad Tehsil', 'district_id' => $khushab->id],
            ['name' => 'Naushera (Wadi-e-Soon) Tehsil', 'district_id' => $khushab->id],
            ['name' => 'Bhalwal Tehsil', 'district_id' => $sargodha->id],
            ['name' => 'Bhera Tehsil', 'district_id' => $sargodha->id],
            ['name' => 'Kot Momin Tehsil', 'district_id' => $sargodha->id],
            ['name' => 'Sahiwal Tehsil', 'district_id' => $sargodha->id],
            ['name' => 'Sargodha Tehsil', 'district_id' => $sargodha->id],
            ['name' => 'Shahpur Tehsil', 'district_id' => $sargodha->id],
            ['name' => 'Sillanwali Tehsil', 'district_id' => $sargodha->id],

            // Mianwali Division
            ['name' => 'Bhakkar Tehsil', 'district_id' => $bhakkar->id],
            ['name' => 'Darya Khan Tehsil', 'district_id' => $bhakkar->id],
            ['name' => 'Kaloorkot Tehsil', 'district_id' => $bhakkar->id],
            ['name' => 'Mankera Tehsil', 'district_id' => $bhakkar->id],
            ['name' => 'Isakhel Tehsil', 'district_id' => $mianwali->id],
            ['name' => 'Mianwali Tehsil', 'district_id' => $mianwali->id],
            ['name' => 'Piplan Tehsil', 'district_id' => $mianwali->id],
            ['name' => 'Talagang Tehsil', 'district_id' => $talagang->id],
            ['name' => 'Lawa Tehsil', 'district_id' => $talagang->id],
            ['name' => 'Multan Khurd Tehsil', 'district_id' => $talagang->id],
        ];

        // Seed the tehsils
        foreach ($tehsils as $tehsil) {
            Tehsil::create($tehsil);
        }
    }
}
