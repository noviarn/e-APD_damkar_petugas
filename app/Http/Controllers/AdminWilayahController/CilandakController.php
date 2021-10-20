<?php

namespace App\Http\Controllers\AdminWilayahController;

use Illuminate\Http\Request;
use App\Models\Cilandak;

class CilandakController extends Controller
{
    //
    public function __construct()
    {
        $this->Cilandak = new Cilandak();
    }

    public function index()
    {
        $data = [
            'master_pegawai'=> $this->Cilandak->allData(),
        ];
        return view('AdminWilayah.anggota_aw', $data);
    }
}
