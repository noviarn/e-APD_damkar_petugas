<?php

namespace App\Http\Controllers\AdminDinasController;

use Illuminate\Http\Request;
use App\Models\master_apd;

class TambahApdController extends ControllerDinas
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dtApd = master_apd::all();
        return view('AdminDinas.Apd', compact('dtApd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('AdminDinas.createApd');
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
        master_apd::create([
            'jenis_apd' => $request->jenis_apd,
            'merk' => $request->merk,
            'ukuran' => $request->ukuran,
            'foto' => $request->foto,
            'tahun' => $request->tahun,
        ]);
        return redirect('dash-dinas')->with('pesan', 'Berhasil menambahkan APD baru!!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_ma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_ma)
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
