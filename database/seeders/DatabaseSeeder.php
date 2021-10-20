<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(MasterJenisAPDTableSeeder::class);
        $this->call(MasterTipeUkuranTableSeeder::class);
        $this->call(MasterKondisiTableSeeder::class);
        $this->call(MasterJenisKondisiTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MasterAPDTableSeeder::class);
        $this->call(APDTableSeeder::class);
    }
}
