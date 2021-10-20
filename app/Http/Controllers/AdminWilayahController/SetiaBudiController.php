<?php

namespace App\Http\Controllers\AdminWilayahController;

use Illuminate\Http\Request;
use App\Models\SetiaBudi;

class SetiaBudiController extends Controller
{
    //
    public function __construct()
    {
        $this->SetiaBudi = new SetiaBudi();
    }

    public function index()
    {
        $data = [
            'master_pegawai'=> $this->SetiaBudi->allData(),
        ];
        return view('AdminWilayah.anggota_aw', $data);
    }
}
