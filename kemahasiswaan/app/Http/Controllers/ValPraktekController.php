<?php

namespace App\Http\Controllers;

use App\Models\Praktekkerja;
use Illuminate\Http\Request;

class ValPraktekController extends Controller
{
    public function index(){
        $praktek = Praktekkerja::where('status',0)->get();
        return view('validasi.praktek.praktek',compact(['praktek']));
    }

    public function edit($id){
        $praktek = Praktekkerja::find($id);
        return view('validasi.praktek.edit',compact(['praktek']));
    }

    public function update($id, Request $request){
        $praktek = Praktekkerja::find($id);
        $praktek->update($request->except(['_token','submit']));
        $praktek->status=1;
        $praktek->save();
        return redirect('/valpraktek');
    }

    public function tolak($id){
        $praktek = Praktekkerja::find($id);
        $praktek->status=2;
        $praktek->save();
        return redirect('/valpraktek');
    }
}
