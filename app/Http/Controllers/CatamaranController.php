<?php

namespace App\Http\Controllers;

use App\catamaran;
use Illuminate\Http\Request;

class CatamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('catamaran.index');
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
     * @param  \App\catamaran  $catamaran
     * @return \Illuminate\Http\Response
     */
    public function show(catamaran $catamaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\catamaran  $catamaran
     * @return \Illuminate\Http\Response
     */
    public function edit(catamaran $catamaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\catamaran  $catamaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, catamaran $catamaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\catamaran  $catamaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(catamaran $catamaran)
    {
        //
    }
}
