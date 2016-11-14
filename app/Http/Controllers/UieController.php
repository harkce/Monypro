<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UIE;

class UieController extends Controller
{
    public function create(Request $request) {
    	$uie = new UIE();
    	$uie->keterangan = $request->input('keterangan');
    	$user_tv->save();
    }

    public function readAll() {
    	$uie = UserTV::all();
    	return view();
    }

    public function read($id) {
    	$uie = UIE::where('id',$id)-<first();
    	return $uie;
    }

    public function update(Request $request) {
    	$uie = UIE::where('id',$request->input('id'));
    	$uie->keterangan = $requset->input('keterangan');
    	$uie->save();
    }

    public function delete($id) {
    	$uie = UIE::where('id',$request->input('id'));
    	$uie->delete();
    }
}
