<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai_test extends Model
{
    use HasFactory;
    protected $table = "pegawai_test";
    protected $primaryKey = "NIP";
    protected $fillable = [
        'NIP','NRK','phl','nama','jabatan_id','kode_pos','no_telepon','group_piket'];
}
