<?php

namespace App\Http\Controllers;

use App\Models\Pertukaranmhs;
use Illuminate\Http\Request;

class ValPertController extends Controller
{
    public function index(){
        $pertukaran = Pertukaranmhs::where('status',0)->get();
        return view('validasi.pertukaran.pertukaran',compact(['pertukaran']));
    }
    public function edit($id){
        $pertukaran = Pertukaranmhs::find($id);
        return view('validasi.pertukaran.edit',compact(['pertukaran']));
    }
    public function update($id, Request $request){
        $pertukaran = Pertukaranmhs::find($id);
        $pertukaran->update($request->except(['_token','submit']));
        $pertukaran->status=1;
        $pertukaran->save();
        return redirect('/valpert');
    }
    public function tolak($id){
        $pertukaran = Pertukaranmhs::find($id);
        $pertukaran->status=2;
        $pertukaran->save();
        return redirect('/valpert');
    }
}