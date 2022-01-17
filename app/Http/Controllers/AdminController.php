<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Pembimbing;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;

class AdminController extends Controller
{
    public function user(){
        $users = Users::where('role','mahasiswa')->get();
        return view('home.admin.index', ['users'=>$users]);
    }
    public function users(){
        $users = Users::where('role','mahasiswa')->get();
        return view('home.admin.users', ['users'=>$users]);
    }
    public function pembimbing(){
        $pembimbing=Pembimbing::all();
        return view('home.admin.pembimbing', ['pembimbing'=>$pembimbing]);
    }
    public function addpbb(){
        $users = Users::where('role','mahasiswa')->get();
        return view('home.admin.formadd', ['users'=>$users]);
    }
    public function postpbb(Request $request){
        $this->validate($request,[
            'user_id' => 'required',
            'name_pbb'  => 'required',
            'alamat'  => 'required',
            'wa'  => 'required',
        ]);
        Pembimbing::create([
            'users_id' => $request->user_id,
            'name_pbb' => $request->name_pbb,
            'alamat' => $request->alamat,
            'wa' => $request->wa,
        ]);
        return redirect('home/admin/pembimbing');
    }
    public function editpbb($id){
        $pembimbing = Pembimbing::find($id);
        $users = Users::where('role','mahasiswa')->get();
        return view('home.admin.editpbb', ['pembimbing' => $pembimbing, 'users' => $users]);
    }
    public function update(Request $request, $id){
        $this->validate($request,[
            'name_pbb'  => 'required',
            'alamat'  => 'required',
            'wa'  => 'required',
        ]);
        $pembimbing = Pembimbing::find($id);
        $pembimbing->name_pbb = $request->name_pbb;
        $pembimbing->alamat = $request->alamat;
        $pembimbing->wa = $request->wa;
        $pembimbing->save();
        return redirect('home/admin/pembimbing');
    }
    public function destroy($id){
        $pembimbing = Pembimbing::find($id);
        $pembimbing->delete();
        return back();
    }
    public function downloadpdf(){
        $users = Users::all();
        $pdf = PDF::loadView('home.admin.download', ['users'=> $users])->setOptions(['defaultFont'=>'sans-serif']);
        return $pdf->download('laporanabsen.pdf');
    }
}
