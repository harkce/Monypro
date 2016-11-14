<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserTV;

class UserTvController extends Controller
{
    public function create(Request $request) {
    	$user_tv = new UserTV();
    	$user_tv->keterangan = $request->input('keterangan');
    	$user_tv->save();
    }

    public function readAll() {
    	$user_tv = UserTV::all();
    	return view();
    }

    public function read($id) {
    	$user_tv = UserTV::where('id',$id)-<first();
    	return $user_tv;
    }

    public function update(Request $request) {
    	$user_tv = UserTV::where('id',$request->input('id'));
    	$user_tv->keterangan = $requset->input('keterangan');
    	$user_tv->save();
    }

    public function delete($id) {
    	$user_tv = UserTV::where('id',$request->input('id'));
    	$user_tv->delete();
    }
}
