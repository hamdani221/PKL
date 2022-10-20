<?php

namespace App\Http\Controllers;

use App\Models\KegMandiri;
use Illuminate\Http\Request;

class RekmanController extends Controller
{
    public function index(){
        $mandiri = KegMandiri::whereIn('status',[1,2])->get();
        return view('rekap.mandiri.index',compact(['mandiri']));
    }

    public function laporan(){
        $mandiri = KegMandiri::where('status',2)->get();
        return view('rekap.mandiri.cetak',compact(['mandiri']));
    }

}
