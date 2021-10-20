<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nrk' => '108675',
                'password' => bcrypt('password'),
                'nama_lengkap' => 'KUNTOROHADI S.SOS',
                'nip' => '116411031985031004',
                'alamat' => 'Jl. Kebun Sirih 1',
                'telp' => '0811111111',
                'email' => 'kuntorohadi@gmail.com',
                'status_id' => '1',
                'remember_token' => Str::random(60)
            ],
            [
                'nrk' => '176150',
                'password' => bcrypt('password'),
                'nama_lengkap' => 'DWI SUMANTO',
                'nip' => '18505092009041007',
                'alamat' => 'Jl. Kebun Sirih 2',
                'telp' => '0812222222',
                'email' => 'dwi@gmail.com',
                'status_id' => '1',
                'remember_token' => Str::random(60)
            ],
            [
                'nrk' => '128069',
                'password' => bcrypt('password'),
                'nama_lengkap' => 'Neliana, SAP',
                'nip' => '196201211991032005',
                'alamat' => 'Jl. Kebun Sirih 3',
                'telp' => '0813333333',
                'email' => 'neliana@gmail.com',
                'status_id' => '1',
                'remember_token' => Str::random(60)
            ],
        ];
       User::insert($users);
    }
}
