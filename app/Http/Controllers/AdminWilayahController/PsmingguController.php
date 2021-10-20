<?php

namespace App\Http\Controllers\AdminWilayahController;

use Illuminate\Http\Request;
use App\Models\Psminggu;

class PsmingguController extends Controller
{
    //
    public function __construct()
    {
        $this->Psminggu = new Psminggu();
    }

    public function index()
    {
        $data = [
            'master_pegawai'=> $this->Psminggu->allData(),
        ];
        return view('AdminWilayah.anggota_aw', $data);
    }
}
