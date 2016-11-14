<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandatel;

class KandatelController extends Controller
{
    public function create(Request $request) {
    	$kandatel = new kandatel();
    	$kandatel->save();
    }

    public function readAll() {
    	$kandatel = Kandatel::all();
    	return view();
    }

    public function read($id) {
    	$kandatel = Kandatel::where('id',$id)-<first();
    	return $kandatel;
    }

    /*
    public function update(Request $request) {
    	$kandatel = ::where('id',$request->input('id'));
    	$kandatel->nama_agen = $requset->input('nama_agen');
    	$kandatel->nama_pemilik = $requset->input('nama_pemilik');
    	$kandatel->nomor_hp = $request->input('nomor_hp');
    	$kandatel->save();
    }
    */

    public function delete($id) {
    	$kandatel = Kandatel::where('id',$request->input('id'));
    	$kandatel->delete();
    }
}
