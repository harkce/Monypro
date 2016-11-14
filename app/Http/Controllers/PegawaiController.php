<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class PegawaiController extends Controller
{
    public function create(Request $request) {
    	$pegawai = new Pegawai();
    	$pegawai->nama_pegawai = $request->input('nama_pegawai');
    	$pegawai->alamat_pegawai = $request->input('alamat_pegawai');
    	$pegawai->tipe_pegawai = $request->input('tipe_pegawai');
    	$pegawai->nomor_hp = $request->input('nomor_hp');
    	$pegawai->id_agency = $request->input('id_agency');
    	$pegawai->id_login = $request->input('id_login');
    	$pegawai->save();
    }

    public function readAll() {
    	$pegawai = Pegawai::all();
    	return view();
    }

    public function read($id) {
    	$pegawai = Pegawai::where('id',$id)-<first();
    	return $pegawai;
    }

    public function update(Request $request) {
    	$pegawai = Pegawai::where('id',$request->input('id'));
    	$pegawai->nama_pegawai = $request->input('nama_pegawai');
    	$pegawai->alamat_pegawai = $request->input('alamat_pegawai');
    	$pegawai->tipe_pegawai = $request->input('tipe_pegawai');
    	$pegawai->nomor_hp = $request->input('nomor_hp');
    	$pegawai->id_agency = $request->input('id_agency');
    	$pegawai->id_login = $request->input('id_login');
    	$pegawai->save();
    }

    public function delete($id) {
    	$pegawai = Pegawai::where('id',$request->input('id'));
    	$pegawai->delete();
    }
}
