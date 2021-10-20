<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterTipeUkuran;

class MasterTipeUkuranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $master_tipe_ukuran = [
            [
                'daftar_ukuran' => 'All size'
            ],
            [
                'daftar_ukuran' => '[38, 39, 40, 41, 42, 43, 44, 45]'
            ],
            [
                'daftar_ukuran' => '["S", "M", "L", "XL"]'
            ],
        ];
       MasterTipeUkuran::insert($master_tipe_ukuran);
    }
}
