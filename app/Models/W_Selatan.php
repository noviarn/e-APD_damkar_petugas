<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class W_Selatan extends Model
{
    public function allData()
    {
        return DB::table('master_sektor')->where('kode_wilayah','=',3)->get();
    }
}
