<?php

namespace App\Http\Controllers\AdminWilayahController;

use Illuminate\Http\Request;
use App\Models\Tebet;

class TebetController extends Controller
{
    //
    public function __construct()
    {
        $this->Tebet = new Tebet();
    }

    public function index()
    {
        $data = [
            'master_pegawai'=> $this->Tebet->allData(),
        ];
        return view('AdminWilayah.anggota_aw', $data);
    }
}
