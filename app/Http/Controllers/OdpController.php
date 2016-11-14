<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ODP;

class OdpController extends Controller
{
    public function create(Request $request) {
    	$odp = new ODP();
    	$odp->nama_odp = $request->input('nama_odp');
    	$odp->alamat_odp = $request->input('alamat_odp');
    	$odp->id_sto = $request->input('id_sto');
    	$odp->save();
    }

    public function readAll() {
    	$odp = ODP::all();
    	return view();
    }

    public function read($id) {
    	$odp = ODP::where('id',$id)-<first();
    	return $odp;
    }

    public function update(Request $request) {
    	$odp = ODP::where('id',$request->input('id'));
    	$odp->nama_odp = $request->input('nama_odp');
    	$odp->alamat_odp = $request->input('alamat_odp');
    	$odp->id_sto = $request->input('id_sto');
    	$odp->save();
    }

    public function delete($id) {
    	$odp = ODP::where('id',$request->input('id'));
    	$odp->delete();
    }
}
