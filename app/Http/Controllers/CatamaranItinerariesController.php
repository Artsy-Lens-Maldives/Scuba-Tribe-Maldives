<?php

namespace App\Http\Controllers;

use App\catamaran;
use App\catamaran_itineraries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CatamaranItinerariesController extends Controller
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
    public function create($catamaran)
    {
        $catamarans = catamaran::where('slug', $catamaran)->get();
        return view('catamaran.admin.create-itinerary', compact('catamarans'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catamaran_itineraries = catamaran_itineraries::create(Input::except('_token'));
        $url = 'admin/catamaran/itinerary/' . $catamaran_itineraries->catamaran->slug;
        return redirect($url)->with('alert-success', 'Successfully added itenerary');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\catamaran_itineraries  $catamaran_itineraries
     * @return \Illuminate\Http\Response
     */
    public function show(catamaran_itineraries $catamaran_itineraries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\catamaran_itineraries  $catamaran_itineraries
     * @return \Illuminate\Http\Response
     */
    public function edit(catamaran_itineraries $catamaran_itineraries)
    {
        $catamarans = catamaran::all();        
        return view('catamaran.admin.edit-itinerary', compact('catamarans', 'catamaran_itineraries')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\catamaran_itineraries  $catamaran_itineraries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, catamaran_itineraries $catamaran_itineraries)
    {
        $catamaran_itineraries->catamaran_id = $request->catamaran_id;
        $catamaran_itineraries->current = $request->current;
        $catamaran_itineraries->max = $request->max;
        $catamaran_itineraries->date = $request->date;
        $catamaran_itineraries->price = $request->price;
        $catamaran_itineraries->detail = $request->detail;
        $catamaran_itineraries->save();

        $url = 'admin/catamaran/itinerary/' . $catamaran_itineraries->catamaran->slug;
        return redirect($url)->with('alert-success', 'Successfully edited itenerary');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\catamaran_itineraries  $catamaran_itineraries
     * @return \Illuminate\Http\Response
     */
    public function destroy(catamaran_itineraries $catamaran_itineraries)
    {
        $catamaran_itineraries->delete();
        return redirect()->back()->with('alert-success', 'Successfully Deleted Itinerary');
    }
}
