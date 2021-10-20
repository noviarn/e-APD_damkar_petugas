<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class VerifikasiModel extends Model
{
    public function verifikasi()
    {
        return DB::table('users')->get();
    }
    public function details()
    {
        return DB::table('users')
            ->leftJoin('apd', 'apd.nrk', '=', 'users.nrk')
            ->leftJoin('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
            ->get();
    }
}
