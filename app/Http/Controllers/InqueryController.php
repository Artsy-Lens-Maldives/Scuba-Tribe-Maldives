<?php

namespace App\Http\Controllers;

use App\inquery;
use Illuminate\Http\Request;

class InqueryController extends Controller
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
        $name = "Test";
        return view('inquery', compact('name'));
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
     * @param  \App\inquery  $inquery
     * @return \Illuminate\Http\Response
     */
    public function show(inquery $inquery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inquery  $inquery
     * @return \Illuminate\Http\Response
     */
    public function edit(inquery $inquery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inquery  $inquery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inquery $inquery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inquery  $inquery
     * @return \Illuminate\Http\Response
     */
    public function destroy(inquery $inquery)
    {
        //
    }
}
