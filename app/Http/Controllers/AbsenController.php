<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;

class AbsenController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function absensi(Request $request){
        $this->validate($request, [
            'users_id'=>'required',
            'status'=>'required',
            'keterangan'=>'required',
        ]);
        $absen=new \App\Models\Absensi;
        $absen->users_id=$request->users_id;
        $absen->status= $request->status;
        $absen->keterangan= $request->keterangan;
        $absen->save();
        return back();
    }
}
