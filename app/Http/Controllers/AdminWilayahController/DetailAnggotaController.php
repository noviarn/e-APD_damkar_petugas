<?php

namespace App\Http\Controllers\AdminWilayahController;

use Illuminate\Http\Request;
use App\Models\DetailAnggotaModel;

class DetailAnggotaController extends Controller
{
    public function __construct()
    {
        $this->DetailAnggotaModel = new DetailAnggotaModel();
    }
    public function detail($nip)
    {
        $data = [
            'anggota'=> $this->DetailAnggotaModel->detailData($nip),
        ];
        return view('AdminWilayah.detailanggota', $data);
    }
}

