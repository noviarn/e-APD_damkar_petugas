<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pegawai extends Model
{
    public $table = "master_pegawai";
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $fillable = [
        'NIP',
        'NRK',
        'phl',
        'nama',
        'jabatan_id',
        'kode_pos',
        'no_telepon',
        'group_piket',
        ''
    ];
    protected $hidden;
    public function allData()
    {
        return DB::table('master_pegawai')->get();
    }

    public function detailData($NRK)
    {
        return DB::table('master_pegawai')->where('NRK', $NRK)->first();
    }

    // public function addData($data)
    // {
    //     DB::table('master_pegawai')->insert($data);
    // }
}
