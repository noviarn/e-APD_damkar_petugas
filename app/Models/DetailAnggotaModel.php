<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DetailAnggotaModel extends Model
{
    public function detailData($id_petugas)
    {
        return DB::table('petugas')->where('petugas', $id_petugas)->first();
    }
}
