<?php

namespace App\Http\Controllers;

use App\Models\Praktekkerja;
use Illuminate\Http\Request;

class RekpraController extends Controller
{
    public function index()
    {
        $praktek = Praktekkerja::where('status',1)->get();
        return view('rekap.praktek.index',compact(['praktek']));
    }
    public function laporan()
    {
        $praktek = Praktekkerja::where('status',1)->get();
        return view('rekap.praktek.cetak',compact(['praktek']));
    }
}
