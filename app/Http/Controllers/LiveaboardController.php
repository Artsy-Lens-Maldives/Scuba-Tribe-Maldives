<?php

namespace App\Http\Controllers;

use App\liveaboard;
use App\liveaboard_photo;
use App\liveaboard_itinerary;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

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
        $liveaboard = liveaboard::create(Input::except('_token', 'image'));
        foreach ($request->image as $photo) {
            $fileName = $liveaboard->slug . '-' . time() . '-' . $photo->getClientOriginalName();
            $location = 'public/' . $liveaboard->slug . '/images'; 
            $file = $photo->storeAs($location, $fileName);
            liveaboard_photo::create([
                'liveaboard_id' => $liveaboard->id,
                'photo_url' => '/liveaboard'. '/' . $liveaboard->slug . '/' . 'photo/' . $fileName
            ]);
        }
        return 'Successfully created';
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

    public function image($slug, $filename)
    {
        $fileloc = 'app/public/' . $slug . '/' . 'images/' . $filename;
        $path = storage_path($fileloc);
    
        $failed = "It failed";
        
        if (!File::exists($path)) {
          return $failed;
        }
    
        $file = File::get($path);
        $type = File::mimeType($path);
    
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
    
        return $response;
    }

    public function itinerary()
    {
        $liveaboards = liveaboard::all();
        return view('liveaboard.itinerary', compact('liveaboards'));   
    }
    
    public function itinerary_add()
    {
        liveaboard_itinerary::create(Input::except('_token'));
        return redirect()->back()->with('alert-success', 'Successfully added itenerary');
    }
}
