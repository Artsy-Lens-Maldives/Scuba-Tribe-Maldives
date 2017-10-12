<?php

namespace App\Http\Controllers;

use App\liveaboard;
use App\liveaboard_itinerary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class LiveaboardItineraryController extends Controller
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
    public function create($liveaboard)
    {
        $liveaboards = liveaboard::where('slug', $liveaboard)->get();
        return view('liveaboard.admin.create-itinerary', compact('liveaboards'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $liveaboard_itinerary = liveaboard_itinerary::create(Input::except('_token'));
        
        $url = 'admin/liveaboard/itinerary/' . $liveaboard_itinerary->liveaboard->slug;
        return redirect($url)->with('alert-success', 'Successfully added itenerary');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\liveaboard_itinerary  $liveaboard_itinerary
     * @return \Illuminate\Http\Response
     */
    public function show(liveaboard_itinerary $liveaboard_itinerary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\liveaboard_itinerary  $liveaboard_itinerary
     * @return \Illuminate\Http\Response
     */
    public function edit(liveaboard_itinerary $liveaboard_itinerary)
    {
        $liveaboards = liveaboard::all();        
        return view('liveaboard.admin.edit-itinerary', compact('liveaboards', 'liveaboard_itinerary')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\liveaboard_itinerary  $liveaboard_itinerary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, liveaboard_itinerary $liveaboard_itinerary)
    {
        $liveaboard_itinerary->liveaboard_id = $request->liveaboard_id;
        $liveaboard_itinerary->current = $request->current;
        $liveaboard_itinerary->max = $request->max;
        $liveaboard_itinerary->date = $request->date;
        $liveaboard_itinerary->detail = $request->detail;
        $liveaboard_itinerary->save();

        $url = 'admin/liveaboard/itinerary/' . $liveaboard_itinerary->liveaboard->slug;
        return redirect($url)->with('alert-success', 'Successfully edited itenerary');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\liveaboard_itinerary  $liveaboard_itinerary
     * @return \Illuminate\Http\Response
     */
    public function destroy(liveaboard_itinerary $liveaboard_itinerary)
    {
        $liveaboard_itinerary->delete();
        return redirect()->back()->with('alert-success', 'Successfully Deleted Itinerary');
    }
}
