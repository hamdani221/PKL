<?php

namespace App\Http\Controllers;

use App\Models\Pertukaranmhs;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class PertukaranmhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pmhs = Pertukaranmhs::all();
        return view('pertmhs.index',compact(['pmhs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $m = IdGenerator::generate(['table'=>'pertukaranmhs','field'=>'id','length'=>5,'prefix'=>'PM']);
        return view('pertmhs.create',compact(['m']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pertukaranmhs::create($request->except(['_token','submit']));
        return redirect('/daftarprt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pertukaranmhs  $pertukaranmhs
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $pmhs = Pertukaranmhs::where('status',1)->get();
        return view('pertmhs.view',compact(['pmhs']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pertukaranmhs  $pertukaranmhs
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertukaranmhs $pertukaranmhs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pertukaranmhs  $pertukaranmhs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertukaranmhs $pertukaranmhs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pertukaranmhs  $pertukaranmhs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertukaranmhs $pertukaranmhs)
    {
        //
    }
}
