<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agency;

class AgencyController extends Controller
{
    public function create(Request $request) {
    	$agency = new Agency();
    	$agency->nama_agen = $request->input('nama_agen');
    	$agency->nama_pemilik = $request->input('nama_pemilik');
    	$agency->alamat_agen = $request->input('alamat_agen');
    	$agency->nomor_hp = $request->input('nomor_hp');
    	$agency->save();
    }

    public function readAll() {
    	$agency = Agency::all();
    	return view();
    }

    public function read($id) {
    	$agency = Agency::where('id',$id)-<first();
    	return $agency;
    }

    public function update(Request $request) {
    	$agency = Agency::where('id',$request->input('id'));
    	$agency->nama_agen = $requset->input('nama_agen');
    	$agency->nama_pemilik = $requset->input('nama_pemilik');
    	$agency->nomor_hp = $request->input('nomor_hp');
    	$agency->save();
    }

    public function delete($id) {
    	$agency = Agency::where('id',$request->input('id'));
    	$agency->delete();
    }
}
