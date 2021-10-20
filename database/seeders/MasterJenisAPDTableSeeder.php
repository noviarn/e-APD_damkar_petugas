<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterJenisAPD;

class MasterJenisAPDTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $master_jenis_apd = [
            [
                'jenis_apd' => 'Fire Helmet'
            ],
            [
                'jenis_apd' => 'Rescue Helmet'
            ],
            [
                'jenis_apd' => 'Goggles'
            ],
            [
                'jenis_apd' => 'Balaclava (Penutup Kepala)'
            ],
            [
                'jenis_apd' => 'Fire Jacket'
            ],
            [
                'jenis_apd' => 'Jumpsuit'
            ],
            [
                'jenis_apd' => 'Rescue Boots'
            ],
            [
                'jenis_apd' => 'Fire Boots'
            ],
            [
                'jenis_apd' => 'Fire Gloves'
            ],
            [
                'jenis_apd' => 'Rescue Gloves'
            ],
            [
                'jenis_apd' => 'APD Baru'
            ],
        ];
       MasterJenisAPD::insert($master_jenis_apd);
    }
}
