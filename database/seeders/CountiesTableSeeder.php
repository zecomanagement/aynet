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
        DB::table('counties')->insert(array(
            array('id' => '1', 'county_name' => 'NAIROBI'),
            array('id' => '2', 'county_name' => 'MOMBASA'),
            array('id' => '3', 'county_name' => 'KISUMU'),
            array('id' => '4', 'county_name' => 'BOMET'),
            array('id' => '5', 'county_name' => 'BUNGOMA'),
            array('id' => '6', 'county_name' => 'BUSIA'),
            array('id' => '7', 'county_name' => 'ELGEYO/MARAKWET'),
            array('id' => '8', 'county_name' => 'EMBU'),
            array('id' => '9', 'county_name' => 'GARISSA'),
            array('id' => '10', 'county_name' => 'HOMA BAY'),
            array('id' => '11', 'county_name' => 'ISIOLO'),
            array('id' => '12', 'county_name' => 'KAJIADO'),
            array('id' => '13', 'county_name' => 'KAKAMEGA'),
            array('id' => '14', 'county_name' => 'KERICHO'),
            array('id' => '15', 'county_name' => 'KIAMBU'),
            array('id' => '16', 'county_name' => 'KILIFI'),
            array('id' => '17', 'county_name' => 'KIRINYAGA'),
            array('id' => '18', 'county_name' => 'KISII'),
            array('id' => '19', 'county_name' => 'KITUI'),
            array('id' => '20', 'county_name' => 'KWALE'),
            array('id' => '21', 'county_name' => 'LAIKIPIA'),
            array('id' => '22', 'county_name' => 'LAMU'),
            array('id' => '23', 'county_name' => 'MAKUENI'),
            array('id' => '24', 'county_name' => 'MANDERA'),
            array('id' => '25', 'county_name' => 'MARSABIT'),
            array('id' => '26', 'county_name' => 'MERU'),
            array('id' => '27', 'county_name' => 'MIGORI'),
            array('id' => '28', 'county_name' => 'MACHAKOS'),
            array('id' => '29', 'county_name' => 'MURANGA'),
            array('id' => '30', 'county_name' => 'NAKURU'),
            array('id' => '31', 'county_name' => 'NANDI'),
            array('id' => '32', 'county_name' => 'NAROK'),
            array('id' => '33', 'county_name' => 'NYAMIRA'),
            array('id' => '34', 'county_name' => 'NYANDARUA'),
            array('id' => '35', 'county_name' => 'NYERI'),
            array('id' => '36', 'county_name' => 'SAMBURU'),
            array('id' => '37', 'county_name' => 'SIAYA'),
            array('id' => '38', 'county_name' => 'TAITA TAVETA'),
            array('id' => '39', 'county_name' => 'TANA RIVER'),
            array('id' => '40', 'county_name' => 'THARAKA - NITHI'),
            array('id' => '41', 'county_name' => 'TRANS NZOIA'),
            array('id' => '42', 'county_name' => 'TURKANA'),
            array('id' => '43', 'county_name' => 'UASIN GISHU'),
            array('id' => '44', 'county_name' => 'VIHIGA'),
            array('id' => '45', 'county_name' => 'WAJIR'),
            array('id' => '46', 'county_name' => 'WEST POKOT'),
            array('id' => '47', 'county_name' => 'BARINGO')
        ));
    }
}
