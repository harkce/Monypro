<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\STO;

class StoController extends Controller
{
    public function create(Request $request) {
    	$sto = new STO();
    	$sto->nama_sto = $request->input('nama_sto');
    	$sto->id_kandatel = $request->input('id_kandatel');
    	$sto->save();
    }

    public function readAll() {
    	$sto = STO::all();
    	return view();
    }

    public function read($id) {
    	$sto = STO::where('id',$id)-<first();
    	return $sto;
    }

    public function update(Request $request) {
    	$sto = STO::where('id',$request->input('id'));
    	$sto->nama_sto = $requset->input('nama_sto');
    	$sto->id_kandatel = $request->input('id_kandatel');
    	$sto->save();
    }

    public function delete($id) {
    	$sto = STO::where('id',$request->input('id'));
    	$sto->delete();
    }
}
