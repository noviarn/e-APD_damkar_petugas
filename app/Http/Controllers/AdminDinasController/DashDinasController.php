<?php

namespace App\Http\Controllers\AdminDinasController;

use Illuminate\Http\Request;
use App\Models\DashDinas;

class DashDinasController extends ControllerDinas
{
    //
    public function __construct()
    {
        $this->DashDinas = new DashDinas();
    }

    public function index()
    {
        $data = [
            'master_wilayah'=> $this->DashDinas->allData(),
        ];
        return view('AdminDinas.dash_dinas', $data);
    }

    public function detail($kode_dinas)
    {
        $data = [
            'master_sektor'=> $this->DashDinas->detailData($kode_dinas),
        ];
        return view('AdminDinas.wilayah_dinas', $data);
    }
}
