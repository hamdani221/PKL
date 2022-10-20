<?php

namespace App\Http\Controllers;

use App\Models\Pertukaranmhs;
use Illuminate\Http\Request;

class RekpertController extends Controller
{
    public function index()
    {
        $pmhs = Pertukaranmhs::where('status',1)->get();
        return view('rekap.pertukaran.index',compact(['pmhs']));
    }
    public function laporan()
    {
        $pmhs = Pertukaranmhs::where('status',1)->get();
        return view('rekap.pertukaran.cetak',compact(['pmhs']));
    }
}
