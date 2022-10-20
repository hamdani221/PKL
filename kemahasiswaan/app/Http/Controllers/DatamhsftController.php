<?php

namespace App\Http\Controllers;

use App\Models\Datamhsft;
use Illuminate\Http\Request;

class DatamhsftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Datamhsft::all();
        return view('data.datamhs',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datamhsft  $datamhsft
     * @return \Illuminate\Http\Response
     */
    public function show(Datamhsft $datamhsft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datamhsft  $datamhsft
     * @return \Illuminate\Http\Response
     */
    public function edit(Datamhsft $datamhsft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datamhsft  $datamhsft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datamhsft $datamhsft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datamhsft  $datamhsft
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datamhsft $datamhsft)
    {
        //
    }
}
