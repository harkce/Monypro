<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;

class StatusController extends Controller
{
    public function create(Request $request) {
    	$status = new Status();
    	$status->keterangan = $request->input('keterangan');
    	$status->save();
    }

    public function readAll() {
    	$status = Status::all();
    	return view();
    }

    public function read($id) {
    	$status = Status::where('id',$id)-<first();
    	return $agency;
    }

    public function update(Request $request) {
    	$status = Status::where('id',$request->input('id'));
    	$status->keterangan = $requset->input('keterangan');
    	$status->save();
    }

    public function delete($id) {
    	$status = Status::where('id',$request->input('id'));
    	$status->delete();
    }
}
