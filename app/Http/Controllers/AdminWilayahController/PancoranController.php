<?php

namespace App\Http\Controllers\AdminWilayahController;

use Illuminate\Http\Request;
use App\Models\Pancoran;

class PancoranController extends Controller
{
    //
    public function __construct()
    {
        $this->Pancoran = new Pancoran();
    }

    public function index()
    {
        $data = [
            'master_pegawai'=> $this->Pancoran->allData(),
        ];
        return view('AdminWilayah.anggota_aw', $data);
    }
}
