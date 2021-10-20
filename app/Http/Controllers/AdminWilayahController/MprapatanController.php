<?php

namespace App\Http\Controllers\AdminWilayahController;

use Illuminate\Http\Request;
use App\Models\Mprapatan;

class MprapatanController extends Controller
{
    //
    public function __construct()
    {
        $this->Mprapatan = new Mprapatan();
    }

    public function index()
    {
        $data = [
            'master_pegawai'=> $this->Mprapatan->allData(),
        ];
        return view('AdminWilayah.anggota_aw', $data);
    }
}
