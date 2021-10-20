<?php

namespace App\Http\Controllers\AdminWilayahController;

use Illuminate\Http\Request;
use App\Models\Verifikasi;

class VerifikasiController extends Controller
{
    //
    public function __construct()
    {
        $this->Verifikasi = new Verifikasi();
    }

    public function index()
    {
        $data = [
            'verifikasi'=> $this->Verifikasi->allData(),
        ];
        return view('AdminWilayah.verifikasi', $data);
    }

    // public function detail($kode_dinas)
    // {
    //     $data = [
    //         'master_sektor'=> $this->DashDinas->detailData($kode_dinas),
    //     ];
    //     return view('AdminDinas.wilayah_dinas', $data);
    // }
}
