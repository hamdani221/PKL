<?php

namespace App\Http\Controllers;

use App\Models\KegMandiri;
use App\Models\RelMandiri;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\File\UploadedFile as FileUploadedFile;

class RelmandiriController extends Controller
{
    public function index(){
        $relman = KegMandiri::where('status',1)->get();
        return view('relasikegmandiri.relmandiri',compact(['relman']));
    }

    public function create(){
        return view('relasikegmandiri.create');
    }

    public function store(Request $request){
        return $request->file('foto_penghargaan')->store('foto-penghargaan');
        RelMandiri::create($request->except(['_token','submit']));
        return redirect('/relmandiri');
    }
}
