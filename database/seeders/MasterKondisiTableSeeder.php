<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterKondisi;

class MasterKondisiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $master_kondisi = [
            [
                'nama_kondisi' => 'Belum submit',
                'keterangan' => 'Belum submit APD'
            ],
            [
                'nama_kondisi' => 'Baik',
                'keterangan' => 'Dapat dipergunakan dan fungsi melindungi masih baik'
            ],
            [
                'nama_kondisi' => 'Rusak Ringan',
                'keterangan' => 'Cat helm tergores'
            ],
            [
                'nama_kondisi' => 'Rusak Sedang',
                'keterangan' => 'Kaca buram'
            ],
            [
                'nama_kondisi' => 'Rusak Berat',
                'keterangan' => 'Tali pengaman (strap) putus, Kaca Pecah, Helm retak/pecah'
            ],
            [
                'nama_kondisi' => 'Rusak Sedang',
                'keterangan' => 'Adjust ukuran kepala rusak'
            ],
            [
                'nama_kondisi' => 'Rusak Ringan',
                'keterangan' => 'Kaca buram'
            ],
            [
                'nama_kondisi' => 'Rusak Berat',
                'keterangan' => 'Rusak tidak bisa dipakai'
            ],
            [
                'nama_kondisi' => 'Rusak Ringan',
                'keterangan' => 'Robek dibagian leher belakang'
            ],
            [
                'nama_kondisi' => 'Rusak Berat',
                'keterangan' => 'Robek bagian leher depan'
            ],
            [
                'nama_kondisi' => 'Rusak Ringan',
                'keterangan' => 'Reflector terkelupas'
            ],
            [
                'nama_kondisi' => 'Rusak Sedang',
                'keterangan' => 'Robek pada bagian ketiak'
            ],
            [
                'nama_kondisi' => 'Rusak Berat',
                'keterangan' => 'Robek yang menyebabkan bahaya pada petugas'
            ],
            [
                'nama_kondisi' => 'Rusak Ringan',
                'keterangan' => 'Robek, kulit mengelupas'
            ],
            [
                'nama_kondisi' => 'Rusak Berat',
                'keterangan' => 'Alas telapak bolong'
            ],
            [
                'nama_kondisi' => 'Rusak Ringan',
                'keterangan' => 'Lapisan dalam lepas jahitan'
            ],
            [
                'nama_kondisi' => 'Rusak Berat',
                'keterangan' => 'Robek bagian telapak tangan'
            ],
            [
                'nama_kondisi' => 'Hilang',
                'keterangan' => 'APD hilang'
            ],
            [
                'nama_kondisi' => 'Belum menerima',
                'keterangan' => 'Belum menerima APD'
            ],
        ];
       MasterKondisi::insert($master_kondisi);
    }
}