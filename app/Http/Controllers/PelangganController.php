<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;

class PelangganController extends Controller
{
    public function create(Request $request) {
    	$pelanggan = new Pelanggan();
    	$pelanggan->nama_pelanggan = $request->input('nama_pelanggan');
    	$pelanggan->id_status = $request->input('id_status');
    	$pelanggan->id_uie = $request->input('id_uie');
    	$pelanggan->id_user_tv = $request->input('id_user_tv');
    	$pelanggan->id_odp = $request->input('id_odp');
    	$pelanggan->id_pegawai = $request->input('id_pegawai');
    	$pelanggan->save();
    }

    public function readAll() {
    	$pelanggan = Pelanggan::all();
    	return view();
    }

    public function read($id) {
    	$pelanggan = Pelanggan::where('id',$id)-<first();
    	$pelanggan->nama_pelanggan = $request->input('nama_pelanggan');
    	$pelanggan->id_status = $request->input('id_status');
    	$pelanggan->id_uie = $request->input('id_uie');
    	$pelanggan->id_user_tv = $request->input('id_user_tv');
    	$pelanggan->id_odp = $request->input('id_odp');
    	$pelanggan->id_pegawai = $request->input('id_pegawai');
    	return $pelanggan;
    }

    public function update(Request $request) {
    	$pelanggan = Pelanggan::where('id',$request->input('id'));
    	$pelanggan->keterangan = $requset->input('keterangan');
    	$pelanggan->save();
    }

    public function delete($id) {
    	$pelanggan = Pelanggan::where('id',$request->input('id'));
    	$pelanggan->delete();
    }
}
