<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterAPD;

class MasterAPDTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $master_apd = [
            [
                'mj_id' => '1',
                'mt_id' => '1',
                'merk' => 'Merk Fire Helmet 1',
                'keterangan' => 'Keterangan 1',
                'daftar_tahun' => '2019'
            ],
            [
                'mj_id' => '1',
                'mt_id' => '1',
                'merk' => 'Merk Fire Helmet 2',
                'keterangan' => 'Keterangan 2',
                'daftar_tahun' => '2018'
            ],
            [
                'mj_id' => '1',
                'mt_id' => '1',
                'merk' => 'Merk Fire Helmet 3',
                'keterangan' => 'Keterangan 3',
                'daftar_tahun' => '2017'
            ],
            [
                'mj_id' => '2',
                'mt_id' => '1',
                'merk' => 'Merk Rescue Helmet 1',
                'keterangan' => 'Keterangan 1',
                'daftar_tahun' => '2019'
            ],
            [
                'mj_id' => '2',
                'mt_id' => '1',
                'merk' => 'Merk Rescue Helmet 2',
                'keterangan' => 'Keterangan 2',
                'daftar_tahun' => '2018'
            ],
            [
                'mj_id' => '2',
                'mt_id' => '1',
                'merk' => 'Merk Rescue Helmet 3',
                'keterangan' => 'Keterangan 3',
                'daftar_tahun' => '2017'
            ],
            [
                'mj_id' => '3',
                'mt_id' => '1',
                'merk' => 'Merk Goggles 1',
                'keterangan' => 'Keterangan 1',
                'daftar_tahun' => '2019'
            ],
            [
                'mj_id' => '3',
                'mt_id' => '1',
                'merk' => 'Merk Goggles 2',
                'keterangan' => 'Keterangan 2',
                'daftar_tahun' => '2018'
            ],
            [
                'mj_id' => '3',
                'mt_id' => '1',
                'merk' => 'Merk Goggles 3',
                'keterangan' => 'Keterangan 13',
                'daftar_tahun' => '2017'
            ],
            [
                'mj_id' => '4',
                'mt_id' => '1',
                'merk' => 'Merk Balaclava 1',
                'keterangan' => 'Keterangan 1',
                'daftar_tahun' => '2019'
            ],
            [
                'mj_id' => '4',
                'mt_id' => '1',
                'merk' => 'Merk Balaclava 2',
                'keterangan' => 'Keterangan 2',
                'daftar_tahun' => '2018'
            ],
            [
                'mj_id' => '4',
                'mt_id' => '1',
                'merk' => 'Merk Balaclava 3',
                'keterangan' => 'Keterangan 3',
                'daftar_tahun' => '2017'
            ],
            [
                'mj_id' => '5',
                'mt_id' => '3',
                'merk' => 'Merk Balaclava 1',
                'keterangan' => 'Keterangan 1',
                'daftar_tahun' => '2019'
            ],
            [
                'mj_id' => '5',
                'mt_id' => '3',
                'merk' => 'Merk Balaclava 2',
                'keterangan' => 'Keterangan 2',
                'daftar_tahun' => '2018'
            ],
            [
                'mj_id' => '5',
                'mt_id' => '3',
                'merk' => 'Merk Balaclava 3',
                'keterangan' => 'Keterangan 3',
                'daftar_tahun' => '2017'
            ],
        ];
       MasterAPD::insert($master_apd);
    }
}
