<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Pembimbing;
use Barryvdh\DomPDF\Facade as PDF;

class AdminController extends Controller
{
    public function user(){
        $users=Users::all();
        return view('home.admin.index', ['users'=>$users]);
    }
    public function users(){
        $users=Users::all();
        return view('home.admin.users', ['users'=>$users]);
    }
    public function pembimbing(){
        $pembimbing=Pembimbing::all();
        return view('home.admin.pembimbing', ['pembimbing'=>$pembimbing]);
    }
    public function addpbb(){
        return view('home.admin.formadd');
    }
    public function postpbb(Request $request){
        $this->validate($request,[
            'name_pbb'  => 'required',
            'alamat'  => 'required',
            'wa'  => 'required',
        ]);
        Pembimbing::create([
            'name_pbb'  => $request->name_pbb,
            'alamat'  => $request->alamat,
            'wa'  => $request->wa,
        ]);
        return redirect('home/admin/pembimbing');
    }
    public function editpbb($id){
        $pembimbing = Pembimbing::find($id);
        return view('home.admin.editpbb', ['pembimbing' => $pembimbing]);
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
