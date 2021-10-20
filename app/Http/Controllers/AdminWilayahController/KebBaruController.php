<?php

namespace App\Http\Controllers\AdminWilayahController;

use Illuminate\Http\Request;
use App\Models\KebBaru;

class KebBaruController extends Controller
{
    //
    public function __construct()
    {
        $this->KebBaru = new KebBaru();
    }

    public function index()
    {
        $data = [
            'master_pegawai'=> $this->KebBaru->allData(),
        ];
        return view('AdminWilayah.anggota_aw', $data);
    }
}
