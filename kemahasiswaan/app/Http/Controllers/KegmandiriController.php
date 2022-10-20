<?php

namespace App\Http\Controllers;

use App\Models\KegMandiri;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class KegmandiriController extends Controller
{
    public function index(){
        $mandiri = KegMandiri::whereIn('status',[1,3])->get();
        return view('kegmandiri.index',compact(['mandiri']));
    }

    public function create(){
        $m = IdGenerator::generate(['table'=>'keg_mandiris','field'=>'id','length'=>11,'prefix'=>'PMandiri']);
        return view('kegmandiri.create',compact(['m']));
    }

    public function store(Request $request){
        KegMandiri::create($request->except(['_token','submit']));
        return redirect('/2')->with('toast_success', 'Pengajuan Berhasil Terkirim!');;
    }
    
    public function edit($id)
    {
        $mandiri = KegMandiri::find($id);
        return view('relasikegmandiri.edit',compact(['mandiri']));
    }

    public function update($id, Request $request)
    {
        // dd($request->all());
        $mandiri = KegMandiri::find($id);
        $mandiri->update($request->except(['_token','submit']));
        $mandiri->status=2;
        $mandiri->save();
        $nm=$request->foto_penghargaan;
        $ns=$request->sertifikat;
        $ts=$request->surat_tugas;
        $namafile = $nm->getClientOriginalName();
        $namafiles = $ns->getClientOriginalName();
        $surattugas = $ts->getClientOriginalName();
            $dtUpload = KegMandiri::find($id);
            $dtUpload ->foto_penghargaan = $namafile;
            $dtUpload ->sertifikat = $namafiles;
            $dtUpload ->surat_tugas = $surattugas;
            $nm->move(public_path().'/img',$namafile);
            $ns->move(public_path().'/img',$namafiles);
            $ts->move(public_path().'/doc',$surattugas);
            $dtUpload->save();
        return redirect('/relmandiri');
    }

    public function destroy($id)
    {
        $mandiri = KegMandiri::find($id);
        $mandiri->delete();
        return redirect('/relmandiri');
    }

    public function view(){
        $mandiri = KegMandiri::where('status',2)->get();
        return view('kegmandiri.view',compact(['mandiri']));
    }

    public function surat($id){
        $mandiri = KegMandiri::find($id);
        return view('kegmandiri.surat',compact(['mandiri']));
    }
}
