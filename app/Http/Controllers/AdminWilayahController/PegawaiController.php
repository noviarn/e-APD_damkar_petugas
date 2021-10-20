<?php

namespace App\Http\Controllers\AdminWilayahController;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->Pegawai = new Pegawai();
    }

    public function index()
    {
        // $data = [
        //     'master_pegawai'=> $this->Pegawai->allData(),
        // ];
        // return view('AdminWilayah.anggota_aw', $data);
    }
    public function detail($NRK)
    {
        $data = [
            'master_pegawai'=> $this->Pegawai->detailData($NRK),
        ];
        return view('AdminWilayah.detailanggota', $data);
    }
    public function create()
    {
        return view('AdminWilayah.add_anggota_aw');
    }
    public function store(Request $request)
    {
        Pegawai::create([
            'NIP'=>$request->NIP,
            'NRK'=>$request->NRK,
            'phl'=>$request->phl,
            'nama'=>$request->nama,
            'jabatan_id'=>$request->jabatan_id,
            'kode_pos'=>$request->kode_pos,
            'no_telepon'=>$request->no_telepon,
            'group_piket'=>$request->group_piket,
        ]);
        return redirect('/')->with('pesan', 'Berhasil menambahkan pegawai baru!!!');
    }
}

