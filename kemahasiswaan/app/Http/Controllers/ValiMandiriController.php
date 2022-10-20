<?php

namespace App\Http\Controllers;

use App\Models\KegMandiri;
use Illuminate\Http\Request;

class ValiMandiriController extends Controller
{
    public function index(){
        $mandiri= KegMandiri::where('status',0)->get();
        return view('validasi.mandiri.mandiri',compact(['mandiri']));
    }
    public function edit($id){
        $mandiri = KegMandiri::find($id);
        return view('validasi.mandiri.edit',compact(['mandiri']));
    }
    public function update($id, Request $request){
        $mandiri=KegMandiri::find($id);
        $mandiri->update($request->except(['submit','_token']));
        $mandiri->status=1;
        $mandiri->save();
        return redirect('/valimandiri');
    }
    public function Tolak($id){
        $mandiri = KegMandiri::find($id);
        $mandiri->status=3;
        $mandiri->save();
        return redirect('/valimandiri');
    }
}
