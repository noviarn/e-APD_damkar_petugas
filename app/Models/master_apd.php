<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_apd extends Model
{
    use HasFactory;
    protected $table = "master_apd";
    protected $primaryKey = "id_ma";
    protected $fillable = [
        'jenis_apd','merk','ukuran','foto','tahun'];
}
