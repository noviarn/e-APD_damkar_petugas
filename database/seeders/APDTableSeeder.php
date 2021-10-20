<?php

namespace Database\Seeders;
use App\Models\APD;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class APDTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apd = [
            [
                'apd_id' => '1',
                'petugas_id' => '108675',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '2',
                'petugas_id' => '108675',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '3',
                'petugas_id' => '108675',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '4',
                'petugas_id' => '108675',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '5',
                'petugas_id' => '108675',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '6',
                'petugas_id' => '108675',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '7',
                'petugas_id' => '108675',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '8',
                'petugas_id' => '108675',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '9',
                'petugas_id' => '108675',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '10',
                'petugas_id' => '108675',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '1',
                'petugas_id' => '176150',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '2',
                'petugas_id' => '176150',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '3',
                'petugas_id' => '176150',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '4',
                'petugas_id' => '176150',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '5',
                'petugas_id' => '176150',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '6',
                'petugas_id' => '176150',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '7',
                'petugas_id' => '176150',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '8',
                'petugas_id' => '176150',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '9',
                'petugas_id' => '176150',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '10',
                'petugas_id' => '176150',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '1',
                'petugas_id' => '128069',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '2',
                'petugas_id' => '128069',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '3',
                'petugas_id' => '128069',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '4',
                'petugas_id' => '128069',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '5',
                'petugas_id' => '128069',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '6',
                'petugas_id' => '128069',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '7',
                'petugas_id' => '128069',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '8',
                'petugas_id' => '128069',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '9',
                'petugas_id' => '128069',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'apd_id' => '10',
                'petugas_id' => '128069',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
       APD::insert($apd);
    }
}
