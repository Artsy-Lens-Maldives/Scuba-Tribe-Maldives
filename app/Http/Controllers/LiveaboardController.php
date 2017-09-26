<?php

namespace App\Http\Controllers;

use App\liveaboard;
use Illuminate\Http\Request;

class LiveaboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liveaboards = liveaboard::all();
        return view('liveaboard.index', compact('liveaboards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('liveaboard.create');
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
     * @param  \App\liveaboard  $liveaboard
     * @return \Illuminate\Http\Response
     */
    public function show(liveaboard $liveaboard)
    {
        return view('liveaboard.detail', compact('liveaboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\liveaboard  $liveaboard
     * @return \Illuminate\Http\Response
     */
    public function edit(liveaboard $liveaboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\liveaboard  $liveaboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, liveaboard $liveaboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\liveaboard  $liveaboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(liveaboard $liveaboard)
    {
        //
    }
}
