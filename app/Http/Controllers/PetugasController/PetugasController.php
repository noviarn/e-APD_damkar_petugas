<?php

namespace App\Http\Controllers\PetugasController;

use Illuminate\Http\Request;
use Auth;

class PetugasController extends Controller
{
    public function profilPetugas()
    {
        return view('petugas.profile');
    }

    public function berandaPetugasLaporAPD()
    {
        $user_id = Auth::id();
        $data_insert_apd = \App\Models\APD::join('users', 'users.nrk', '=', 'apd.petugas_id')
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->where('users.nrk', $user_id)
               ->get(['apd.*', 'users.*', 'master_jenis_apd.*']);
        return view('petugas.lapor-apd', ['data_insert_apd' => $data_insert_apd]);
    }

    public function berandaPetugasDataAPD()
    {
        $user_id = Auth::id();
        $data_apd = \App\Models\APD::join('users', 'users.nrk', '=', 'apd.petugas_id')
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->where('users.nrk', $user_id)
               ->get(['apd.*', 'users.*', 'master_jenis_apd.*']);
        $data_apd_fire_helmet = \App\Models\APD::join('master_kondisi', 'master_kondisi.id_mk', '=', 'apd.kondisi_id')
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->where('petugas_id', $user_id)
               ->where('apd_id', '1')
               ->get(['apd.*', 'master_kondisi.*', 'master_jenis_apd.*', 'master_kondisi.keterangan as keterangan_kondisi']);
        $data_apd_rescue_helmet = \App\Models\APD::join('master_kondisi', 'master_kondisi.id_mk', '=', 'apd.kondisi_id')
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->where('petugas_id', $user_id)
               ->where('apd_id', '2')
               ->get(['apd.*', 'master_kondisi.*', 'master_jenis_apd.*', 'master_kondisi.keterangan as keterangan_kondisi']);
        $data_apd_goggles = \App\Models\APD::join('master_kondisi', 'master_kondisi.id_mk', '=', 'apd.kondisi_id')
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->where('petugas_id', $user_id)
               ->where('apd_id', '3')
               ->get(['apd.*', 'master_kondisi.*', 'master_jenis_apd.*', 'master_kondisi.keterangan as keterangan_kondisi']);
        $data_apd_balaclava = \App\Models\APD::join('master_kondisi', 'master_kondisi.id_mk', '=', 'apd.kondisi_id')     
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->where('petugas_id', $user_id)
               ->where('apd_id', '4')
               ->get(['apd.*', 'master_kondisi.*', 'master_jenis_apd.*', 'master_kondisi.keterangan as keterangan_kondisi']);
        $data_apd_fire_jacket = \App\Models\APD::join('master_kondisi', 'master_kondisi.id_mk', '=', 'apd.kondisi_id')
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->where('petugas_id', $user_id)
               ->where('apd_id', '5')
               ->get(['apd.*', 'master_kondisi.*', 'master_jenis_apd.*', 'master_kondisi.keterangan as keterangan_kondisi']);
        $data_apd_jumpsuit = \App\Models\APD::join('master_kondisi', 'master_kondisi.id_mk', '=', 'apd.kondisi_id')
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->where('petugas_id', $user_id)
               ->where('apd_id', '6')
               ->get(['apd.*', 'master_kondisi.*', 'master_jenis_apd.*', 'master_kondisi.keterangan as keterangan_kondisi']);
        $data_apd_rescue_boot = \App\Models\APD::join('master_kondisi', 'master_kondisi.id_mk', '=', 'apd.kondisi_id')
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->where('petugas_id', $user_id)
               ->where('apd_id', '7')
               ->get(['apd.*', 'master_kondisi.*', 'master_jenis_apd.*', 'master_kondisi.keterangan as keterangan_kondisi']);
        $data_apd_fire_boot = \App\Models\APD::join('master_kondisi', 'master_kondisi.id_mk', '=', 'apd.kondisi_id')
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->where('petugas_id', $user_id)
               ->where('apd_id', '8')
               ->get(['apd.*', 'master_kondisi.*', 'master_jenis_apd.*', 'master_kondisi.keterangan as keterangan_kondisi']);
        $data_apd_fire_gloves = \App\Models\APD::join('master_kondisi', 'master_kondisi.id_mk', '=', 'apd.kondisi_id')
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->where('petugas_id', $user_id)
               ->where('apd_id', '9')
               ->get(['apd.*', 'master_kondisi.*', 'master_jenis_apd.*', 'master_kondisi.keterangan as keterangan_kondisi']);
        $data_apd_rescue_gloves = \App\Models\APD::join('master_kondisi', 'master_kondisi.id_mk', '=', 'apd.kondisi_id')
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->where('petugas_id', $user_id)
               ->where('apd_id', '10')
               ->get(['apd.*', 'master_kondisi.*', 'master_jenis_apd.*', 'master_kondisi.keterangan as keterangan_kondisi']);


        return view('petugas.data-apd', compact('data_apd', 'data_apd_fire_helmet', 'data_apd_rescue_helmet', 'data_apd_goggles', 'data_apd_balaclava', 'data_apd_fire_jacket', 'data_apd_jumpsuit', 'data_apd_rescue_boot', 'data_apd_fire_boot', 'data_apd_fire_gloves', 'data_apd_rescue_gloves'));
    }

    public function submitAPD($id)
    {
        $user_id = Auth::id();

        $data_apd = \App\Models\APD::join('users', 'users.nrk', '=', 'apd.petugas_id')
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->where('users.nrk', $user_id)
               ->find($id);

        $apd_fire_helmet = \App\Models\MasterAPD::all()->where('mj_id', '1');
        $data_ukuran_fh = \App\Models\MasterAPD::join('master_tipe_ukuran', 'master_tipe_ukuran.id_mt', '=', 'master_apd.mt_id')
                ->where('master_apd.mj_id', '1')
                ->limit(1)
                ->get(['master_apd.*', 'master_tipe_ukuran.*']);
        $data_kondisi_fh = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '1')
               ->whereBetween('master_jenis_kondisi.mk_id', [2, 99])
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);
        $data_kondisi_fh_x = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '1')
               ->where('master_jenis_kondisi.mk_id', '>', 99)
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);

        $apd_rescue_helmet = \App\Models\MasterAPD::all()->where('mj_id', '2');
        $data_ukuran_rh = \App\Models\MasterAPD::join('master_tipe_ukuran', 'master_tipe_ukuran.id_mt', '=', 'master_apd.mt_id')
                ->where('master_apd.mj_id', '2')
                ->limit(1)
                ->get(['master_apd.*', 'master_tipe_ukuran.*']);
        $data_kondisi_rh = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '2')
               ->whereBetween('master_jenis_kondisi.mk_id', [2, 99])
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);
        $data_kondisi_rh_x = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '2')
               ->where('master_jenis_kondisi.mk_id', '>', 99)
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);

        $apd_goggles = \App\Models\MasterAPD::all()->where('mj_id', '3');
        $data_ukuran_gg = \App\Models\MasterAPD::join('master_tipe_ukuran', 'master_tipe_ukuran.id_mt', '=', 'master_apd.mt_id')
                ->where('master_apd.mj_id', '3')
                ->limit(1)
                ->get(['master_apd.*', 'master_tipe_ukuran.*']);
        $data_kondisi_gg = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '3')
               ->whereBetween('master_jenis_kondisi.mk_id', [2, 99])
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);
        $data_kondisi_gg_x = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '3')
               ->where('master_jenis_kondisi.mk_id', '>', 99)
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);

        $apd_balaclava = \App\Models\MasterAPD::all()->where('mj_id', '4');
        $data_ukuran_bc = \App\Models\MasterAPD::join('master_tipe_ukuran', 'master_tipe_ukuran.id_mt', '=', 'master_apd.mt_id')
                ->where('master_apd.mj_id', '4')
                ->limit(1)
                ->get(['master_apd.*', 'master_tipe_ukuran.*']);
        $data_kondisi_bc = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '4')
               ->whereBetween('master_jenis_kondisi.mk_id', [2, 99])
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);
        $data_kondisi_bc_x = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '4')
               ->where('master_jenis_kondisi.mk_id', '>', 99)
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);

        $apd_fire_jacket = \App\Models\MasterAPD::all()->where('mj_id', '5');
        $data_ukuran_fj = \App\Models\MasterAPD::join('master_tipe_ukuran', 'master_tipe_ukuran.id_mt', '=', 'master_apd.mt_id')
                ->where('master_apd.mj_id', '5')
                ->limit(1)
                ->get(['master_apd.*', 'master_tipe_ukuran.*']);
        $data_kondisi_fj = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '5')
               ->whereBetween('master_jenis_kondisi.mk_id', [2, 99])
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);
        $data_kondisi_fj_x = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '5')
               ->where('master_jenis_kondisi.mk_id', '>', 99)
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);

        $apd_jumpsuit = \App\Models\MasterAPD::all()->where('mj_id', '6');
        $data_ukuran_js = \App\Models\MasterAPD::join('master_tipe_ukuran', 'master_tipe_ukuran.id_mt', '=', 'master_apd.mt_id')
                ->where('master_apd.mj_id', '6')
                ->limit(1)
                ->get(['master_apd.*', 'master_tipe_ukuran.*']);
        $data_kondisi_js = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '6')
               ->whereBetween('master_jenis_kondisi.mk_id', [2, 99])
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);
        $data_kondisi_js_x = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '6')
               ->where('master_jenis_kondisi.mk_id', '>', 99)
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);

        if ($data_apd->apd_id == 1) {
            return view('petugas.laporAPD.fire-helmet', compact('data_apd', 'apd_fire_helmet', 'data_ukuran_fh', 'data_kondisi_fh', 'data_kondisi_fh_x'));
        }
        else if ($data_apd->apd_id == 2) {
            return view('petugas.laporAPD.rescue-helmet', compact('data_apd', 'data_ukuran_rh', 'apd_rescue_helmet', 'data_kondisi_rh', 'data_kondisi_rh_x'));
        }
        else if ($data_apd->apd_id == 3) {
            return view('petugas.laporAPD.goggles', compact('data_apd', 'data_ukuran_gg', 'apd_goggles', 'data_kondisi_gg', 'data_kondisi_gg_x'));
        }
        else if ($data_apd->apd_id == 4) {
            return view('petugas.laporAPD.balaclava', compact('data_apd', 'data_ukuran_bc', 'apd_balaclava', 'data_kondisi_bc', 'data_kondisi_bc_x'));
        }
        else if ($data_apd->apd_id == 5) {
            return view('petugas.laporAPD.fire-jacket', compact('data_apd', 'apd_fire_jacket', 'data_ukuran_fj', 'data_kondisi_fj', 'data_kondisi_fj_x'));
        }
        else if ($data_apd->apd_id == 6) {
            return view('petugas.laporAPD.jumpsuit', compact('data_apd', 'apd_jumpsuit', 'data_ukuran_js', 'data_kondisi_js', 'data_kondisi_js_x'));
        }
    }

    public function APDsubmitted(Request $request, $id)
    {
        $user_id = Auth::id();
        $data_apd = \App\Models\APD::join('users', 'users.nrk', '=', 'apd.petugas_id')
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->where('users.nrk', $user_id)
               ->find($id);

        $apd_submitted = \App\Models\APD::find($id);
        $apd_submitted->update($request->all());
        if($request->hasFile('foto'))
        {
            $apd_submitted_nrk = json_encode($apd_submitted->petugas_id);
            $apd_submitted_apd_id = json_encode($apd_submitted->apd_id);
            $photo_name = $apd_submitted_nrk . '_' . $apd_submitted_apd_id . '.' .  $request->file('foto')->extension();
            $request->file('foto')->move(public_path('img/data-lapor-apd/'), $photo_name);
            $apd_submitted->foto = $photo_name;
            $apd_submitted->status_verifikasi = 1;

            /*dd($apd_submitted);*/
            $apd_submitted->save();
        }
        else
        {
            $apd_submitted->status_verifikasi = 1;
            $apd_submitted->save();
        } 
        
        return redirect('/petugas/dashboard/lapor-apd');
    }

    public function editAPD($id)
    {
        $user_id = Auth::id();

        $data_apd = \App\Models\APD::join('users', 'users.nrk', '=', 'apd.petugas_id')
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->where('users.nrk', $user_id)
               ->find($id);

        $apd_fire_helmet = \App\Models\MasterAPD::all()->where('mj_id', '1');
        $data_ukuran_fh = \App\Models\MasterAPD::join('master_tipe_ukuran', 'master_tipe_ukuran.id_mt', '=', 'master_apd.mt_id')
                ->where('master_apd.mj_id', '1')
                ->limit(1)
                ->get(['master_apd.*', 'master_tipe_ukuran.*']);
        $data_kondisi_fh = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '1')
               ->whereBetween('master_jenis_kondisi.mk_id', [2, 99])
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);
        $data_kondisi_fh_x = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '1')
               ->where('master_jenis_kondisi.mk_id', '>', 99)
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);

        $apd_rescue_helmet = \App\Models\MasterAPD::all()->where('mj_id', '2');
        $data_ukuran_rh = \App\Models\MasterAPD::join('master_tipe_ukuran', 'master_tipe_ukuran.id_mt', '=', 'master_apd.mt_id')
                ->where('master_apd.mj_id', '2')
                ->limit(1)
                ->get(['master_apd.*', 'master_tipe_ukuran.*']);
        $data_kondisi_rh = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '2')
               ->whereBetween('master_jenis_kondisi.mk_id', [2, 99])
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);
        $data_kondisi_rh_x = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '2')
               ->where('master_jenis_kondisi.mk_id', '>', 99)
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);

        $apd_balaclava = \App\Models\MasterAPD::all()->where('mj_id', '4');
        $data_ukuran_bc = \App\Models\MasterAPD::join('master_tipe_ukuran', 'master_tipe_ukuran.id_mt', '=', 'master_apd.mt_id')
                ->where('master_apd.mj_id', '4')
                ->limit(1)
                ->get(['master_apd.*', 'master_tipe_ukuran.*']);
        $data_kondisi_bc = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '4')
               ->whereBetween('master_jenis_kondisi.mk_id', [2, 99])
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);
        $data_kondisi_bc_x = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '4')
               ->where('master_jenis_kondisi.mk_id', '>', 99)
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);

        if ($data_apd->apd_id == 1) {
            return view('petugas.editAPD.edit_fire-helmet', compact('data_apd', 'apd_fire_helmet', 'data_kondisi_fh', 'data_ukuran_fh', 'data_kondisi_fh_x'));
        }
        if ($data_apd->apd_id == 2) {
            return view('petugas.editAPD.edit_rescue-helmet', compact('data_apd', 'apd_rescue_helmet', 'data_kondisi_rh', 'data_ukuran_rh', 'data_kondisi_rh_x'));
        }
        if ($data_apd->apd_id == 4) {
            return view('petugas.editAPD.edit_balaclava', compact('data_apd', 'apd_balaclava', 'data_kondisi_bc', 'data_ukuran_bc', 'data_kondisi_bc_x'));
        }
    }

    public function APDedited(Request $request, $id)
    {
        $user_id = Auth::id();
        $data_apd = \App\Models\APD::join('users', 'users.nrk', '=', 'apd.petugas_id')
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->where('users.nrk', $user_id)
               ->find($id);

        $apd_edited = \App\Models\APD::find($id);
        $apd_edited->update($request->all());

        if($request->kondisi_id < 100)
        {
            if($request->hasFile('foto'))
            {
                $apd_edited_nrk = json_encode($apd_edited->petugas_id);
                $apd_edited_apd_id = json_encode($apd_edited->apd_id);
                $photo_name = $apd_edited_nrk . '_' . $apd_edited_apd_id . '.' .  $request->file('foto')->extension();
                $request->file('foto')->move(public_path('img/data-lapor-apd/'), $photo_name);
                $apd_edited->foto = $photo_name;

                /*dd($apd_submitted);*/
                $apd_edited->save();
            }
        }
        else
        {
            $apd_edited->ukuran = NULL;
            $apd_edited->merk = NULL;
            $apd_edited->tahun = NULL;
            $apd_edited->foto = NULL;
            $apd_edited->save();
        } 
        
        return redirect('/petugas/dashboard/data-apd');
    }

    public function laporAPDFireHelmet($id)
    {
        $user_id = Auth::id();
        $data_apd = \App\Models\APD::all()->where('id', $id);
        $data_insert_apd = \App\Models\APD::join('users', 'users.nrk', '=', 'apd.petugas_id')
               ->join('master_jenis_apd', 'master_jenis_apd.id_mj', '=', 'apd.apd_id')
               ->get(['apd.*', 'users.*', 'master_jenis_apd.*']);
        $data_master_apd = \App\Models\MasterAPD::all()->where('mj_id', '1');
        $data_kondisi = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '1')
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);
        return view('petugas.laporAPD.fire-helmet', compact('data_apd', 'data_insert_apd', 'data_master_apd', 'data_kondisi'));
    }

    public function addAPDFireHelmet(Request $request)
    {
        $addAPD = new \App\Models\APD;
        $addAPD->apd_id = '1';
        $addAPD->ukuran = '1';
        $addAPD->merk = $request->merk;
        $addAPD->petugas_id = Auth::id();
        $addAPD->tahun = $request->tahun;
        $addAPD->kondisi_id = $request->kondisi_id;
        $addAPD->foto = $request->foto;
        $addAPD->status_verifikasi = '0';

        $addAPD->save();

        return redirect('/dashboard');
    }

    public function laporAPDRescueHelmet()
    {
        $data_master_apd = \App\Models\MasterAPD::all()->where('mj_id', '2');
        $data_kondisi = \App\Models\MasterJenisKondisi::join('master_kondisi', 'master_kondisi.id_mk', '=', 'master_jenis_kondisi.mk_id')
               ->where('master_jenis_kondisi.mj_id', '2')
               ->get(['master_jenis_kondisi.*', 'master_kondisi.*']);
        return view('petugas.laporAPD.rescue-helmet', compact('data_master_apd', 'data_kondisi'));
    }

    public function addAPDRescueHelmet(Request $request)
    {
        $addAPD = new \App\Models\APD;
        $addAPD->apd_id = '2';
        $addAPD->ukuran = '1';
        $addAPD->merk = $request->merk;
        $addAPD->petugas_id = Auth::id();
        $addAPD->tahun = $request->tahun;
        $addAPD->kondisi_id = $request->kondisi_id;
        $addAPD->foto = $request->foto;
        $addAPD->status_verifikasi = '0';

        $addAPD->save();

        return redirect('/dashboard');
    }

    public function laporAPDFireJacket()
    {
        return view('petugas.laporAPD.fire-jacket');
    }
}
