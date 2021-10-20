<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KebBaru extends Model
{
    public function allData()
    {
        return DB::table('master_pegawai')->where('kode_pos','>=',4.12)->where('kode_pos','<',4.13)->get();
    }
}
