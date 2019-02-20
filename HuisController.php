<?php

namespace App\Http\Controllers;

use App\Huis;
use Illuminate\Http\Request;

class HuisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $huis = Huis::all()->toArray();
        return view('huis', compact('huis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('huis', compact('huis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $huis = new Huis([
            'steden' => $request->get('steden'),
            'prijs' => $request->get('prijs'),
            'kamers' => $request->get('kamers'),
            'slaapkamers' => $request->get('slaapkamers'),
        ]);
        $huis->save();
        return redirect()->route('huis.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Huis  $huis
     * @return \Illuminate\Http\Response
     */
    public function show(Huis $huis)
    {
        return redirect()->route('huis.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Huis  $huis
     * @return \Illuminate\Http\Response
     */
    public function edit(Huis $huis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Huis  $huis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Huis $huis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Huis  $huis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Huis $huis)
    {
        //
    }
}
