<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SetiaBudi extends Model
{
    public function allData()
    {
        return DB::table('master_pegawai')->where('kode_pos','>=',4.17)->where('kode_pos','<',4.18)->get();
    }
}
