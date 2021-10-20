<?php

namespace App\Http\Controllers\AdminWilayahController;

use Illuminate\Http\Request;
use App\Models\Pesanggrahan;

class PesanggrahanController extends Controller
{
    //
    public function __construct()
    {
        $this->Pesanggrahan = new Pesanggrahan();
    }

    public function index()
    {
        $data = [
            'master_pegawai'=> $this->Pesanggrahan->allData(),
        ];
        return view('AdminWilayah.anggota_aw', $data);
    }
}
