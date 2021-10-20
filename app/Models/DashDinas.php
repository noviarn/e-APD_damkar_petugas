<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DashDinas extends Model
{
    public function allData()
    {
        return DB::table('master_wilayah')->get();
    }
    public function detailData($kode_wilayah)
    {
        return DB::table('master_sektor')->where('kode_wilayah', $kode_wilayah)->first();
    }
}
