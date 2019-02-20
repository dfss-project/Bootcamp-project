<?php

namespace App\Http\Controllers;

use App\ss;
use Illuminate\Http\Request;

class SsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('huur', compact('huur'));
    }

    public function koop()
    {
        return view('koop', compact('koop'));
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
     * @param  \App\ss  $ss
     * @return \Illuminate\Http\Response
     */
    public function show(ss $ss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ss  $ss
     * @return \Illuminate\Http\Response
     */
    public function edit(ss $ss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ss  $ss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ss $ss)
    {
     App\ss::where('active',1)
            ->where('prijs','500')
            ->update('rented');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ss  $ss
     * @return \Illuminate\Http\Response
     */
    public function destroy(ss $ss)
    {
        //
    }
}
