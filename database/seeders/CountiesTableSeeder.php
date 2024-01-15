<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counties')->insert([
            ['id' => '1', 'county_name' => 'NAIROBI'],
            ['id' => '2', 'county_name' => 'MOMBASA'],
            ['id' => '3', 'county_name' => 'KISUMU'],
            ['id' => '4', 'county_name' => 'BOMET'],
            ['id' => '5', 'county_name' => 'BUNGOMA'],
            ['id' => '6', 'county_name' => 'BUSIA'],
            ['id' => '7', 'county_name' => 'ELGEYO/MARAKWET'],
            ['id' => '8', 'county_name' => 'EMBU'],
            ['id' => '9', 'county_name' => 'GARISSA'],
            ['id' => '10', 'county_name' => 'HOMA BAY'],
            ['id' => '11', 'county_name' => 'ISIOLO'],
            ['id' => '12', 'county_name' => 'KAJIADO'],
            ['id' => '13', 'county_name' => 'KAKAMEGA'],
            ['id' => '14', 'county_name' => 'KERICHO'],
            ['id' => '15', 'county_name' => 'KIAMBU'],
            ['id' => '16', 'county_name' => 'KILIFI'],
            ['id' => '17', 'county_name' => 'KIRINYAGA'],
            ['id' => '18', 'county_name' => 'KISII'],
            ['id' => '19', 'county_name' => 'KITUI'],
            ['id' => '20', 'county_name' => 'KWALE'],
            ['id' => '21', 'county_name' => 'LAIKIPIA'],
            ['id' => '22', 'county_name' => 'LAMU'],
            ['id' => '23', 'county_name' => 'MAKUENI'],
            ['id' => '24', 'county_name' => 'MANDERA'],
            ['id' => '25', 'county_name' => 'MARSABIT'],
            ['id' => '27', 'county_name' => 'MIGORI'],
            ['id' => '28', 'county_name' => 'MACHAKOS'],
            ['id' => '29', 'county_name' => 'MURANGA'],
            ['id' => '30', 'county_name' => 'NAKURU'],
            ['id' => '31', 'county_name' => 'NANDI'],
            ['id' => '32', 'county_name' => 'NAROK'],
            ['id' => '33', 'county_name' => 'NYAMIRA'],
            ['id' => '34', 'county_name' => 'NYANDARUA'],
            ['id' => '36', 'county_name' => 'SAMBURU'],
            ['id' => '37', 'county_name' => 'SIAYA'],
            ['id' => '38', 'county_name' => 'TAITA TAVETA'],
            ['id' => '39', 'county_name' => 'TANA RIVER'],
            ['id' => '40', 'county_name' => 'THARAKA - NITHI'],
            ['id' => '41', 'county_name' => 'TRANS NZOIA'],
            ['id' => '42', 'county_name' => 'TURKANA'],
            ['id' => '43', 'county_name' => 'UASIN GISHU'],
            ['id' => '44', 'county_name' => 'VIHIGA'],
            ['id' => '45', 'county_name' => 'WAJIR'],
            ['id' => '46', 'county_name' => 'WEST POKOT'],
            ['id' => '47', 'county_name' => 'BARINGO']
        ]);
        
    }
}
