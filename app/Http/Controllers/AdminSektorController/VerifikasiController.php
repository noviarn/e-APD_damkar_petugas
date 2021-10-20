<?php

namespace App\Http\Controllers\AdminSektorController;
use App\Models\VerifikasiModel;

use Illuminate\Http\Request;

class VerifikasiController extends Controller
{

    public function __construct()
    {
        $this->VerifikasiModel = new VerifikasiModel();
    }

    public function verifikasi()
    {
        $data = [
             'verifikasi' => $this->VerifikasiModel->verifikasi(),
        ];
        return view('AdminSektor.verifikasi', $data);
    }
    public function detail($nrk)
    {
        $data = [
            'verifikasi' => $this->VerifikasiModel->details($nrk),
       ];
       return view('AdminSektor.detail2', $data);
    }

    public function edit($apd_id)
    {
        $data = [
            'verifikasi' => $this->VerifikasiModel->details($apd_id),
       ];
        return view('AdminSektor.edit',$data);
    }

}
