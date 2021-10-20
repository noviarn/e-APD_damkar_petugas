<?php

namespace App\Http\Controllers\AdminDinasController;

use Illuminate\Http\Request;
use App\Models\W_Selatan;

class WselatanController extends ControllerDinas
{
    public function __construct()
    {
        $this->W_Selatan = new W_Selatan();
    }
    public function index()
    {
        $data = [
            'master_sektor'=> $this->W_Selatan->allData(),
        ];
        return view('AdminDinas.wilayah_dinas', $data);
    }
}
