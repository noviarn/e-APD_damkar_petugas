<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Psminggu extends Model
{
    public function allData()
    {
        return DB::table('master_pegawai')->where('kode_pos','>=',4.19)->where('kode_pos','<',4.20)->get();
    }
}
