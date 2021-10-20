<?php

namespace App\Http\Controllers\AdminWilayahController;

use Illuminate\Http\Request;
use App\Models\pegawai_test;

class PegawaitestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dtPegawai = pegawai_test::all();
        return view('AdminWilayah.pegawai', compact('dtPegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('AdminWilayah.createpegawai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());
        pegawai_test::create([
            'NIP' => $request->NIP,
            'NRK' => $request->NRK,
            'phl' => $request->phl,
            'nama' => $request->nama,
            'jabatan_id' => $request->jabatan_id,
            'kode_pos' => $request->kode_pos,
            'no_telepon' => $request->no_telepon,
            'group_piket' => $request->group_piket,
        ]);

        return redirect('lihat-pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
