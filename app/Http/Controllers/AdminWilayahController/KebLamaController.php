<?php

namespace App\Http\Controllers\AdminWilayahController;

use Illuminate\Http\Request;
use App\Models\KebLama;

class KebLamaController extends Controller
{
    //
    public function __construct()
    {
        $this->KebLama = new KebLama();
    }

    public function index()
    {
        $data = [
            'master_pegawai'=> $this->KebLama->allData(),
        ];
        return view('AdminWilayah.anggota_aw', $data);
    }
}
