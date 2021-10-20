<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class APD extends Model
{
    protected $table = 'apd';

    protected $fillable = [
        'merk',
        'tahun',
        'kondisi_id',
        'ukuran',
        'foto',
        'status_verifikasi',
    ];
}
