<?php

namespace App\Http\Controllers;

use App\Models\Praktekkerja;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class PraktekkerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $praktek = Praktekkerja::all();
        return view('praktekkerja.index',compact(['praktek']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $p = IdGenerator::generate(['table'=>'praktek_kerja','field'=>'id','length'=>5,'prefix'=>'PK']);
        return view('praktekkerja.create',compact(['p']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Praktekkerja::create($request->except(['submit','_token']));
        return redirect('/praktek');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Praktekkerja  $praktekkerja
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $praktek = Praktekkerja::where('status',1)->get();
        return view('praktekkerja.view',compact(['praktek']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Praktekkerja  $praktekkerja
     * @return \Illuminate\Http\Response
     */
    public function edit(Praktekkerja $praktekkerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Praktekkerja  $praktekkerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Praktekkerja $praktekkerja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Praktekkerja  $praktekkerja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Praktekkerja $praktekkerja)
    {
        //
    }
}
