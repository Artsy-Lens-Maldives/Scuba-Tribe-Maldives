<?php

namespace App\Http\Controllers;

use App\diving_spot;
use App\dive_photos;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class DivingSpotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divespots = diving_spot::all();
        return view('diving-spots.index', compact('divespots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diving-spots.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diving_spot = diving_spot::create(Input::except('_token', 'image'));
        $i = 0;
        foreach ($request->image as $photo) {
            $i++;
            if ($i == '1'){
                $m = '1';
            } else {
                $m = '0';
            }
            $fileName = $diving_spot->slug . '-' . time() . '-' . $photo->getClientOriginalName();
            $location = 'public/' . $diving_spot->slug . '/images'; 
            $file = $photo->storeAs($location, $fileName);
            dive_photos::create([
                'dive_id' => $diving_spot->id,
                'main' => $m,
                'photo_url' => '/local-island'. '/' . $diving_spot->slug . '/' . 'photo/' . $fileName
            ]);
        }
        return redirect()->back()->with('alert-success', 'Successfully added new divespot');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\diving_spot  $diving_spot
     * @return \Illuminate\Http\Response
     */
    public function show(diving_spot $diving_spot)
    {
        $liveaboard = $diving_spot;
        return view('diving-spots.detail', compact('liveaboard', 'diving_spot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\diving_spot  $diving_spot
     * @return \Illuminate\Http\Response
     */
    public function edit(diving_spot $diving_spot)
    {
        return view('diving-spots.admin.edit', compact('diving_spot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\diving_spot  $diving_spot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, diving_spot $diving_spot)
    {
        $diving_spot->name= $request->name;
        $diving_spot->star= $request->star;
        $diving_spot->description= $request->description;
        $diving_spot->save();

        foreach ($request->image as $photo) {
            $fileName = $diving_spot->slug . '-' . time() . '-' . $photo->getClientOriginalName();
            $location = 'public/' . $diving_spot->slug . '/images'; 
            $file = $photo->storeAs($location, $fileName);
            dive_photos::create([
                'dive_id' => $diving_spot->id,
                'main' => '0',
                'photo_url' => '/local-island'. '/' . $diving_spot->slug . '/' . 'photo/' . $fileName
            ]);
        }

        $message = "Successfully updated " . $diving_spot->name . " Local Island";
        return redirect('admin/local-island')->with('alert-success', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\diving_spot  $diving_spot
     * @return \Illuminate\Http\Response
     */
    public function destroy(diving_spot $diving_spot)
    {
        $diving_spot->delete();
        return redirect()->back()->with('alert-success', 'Successfully Deleted Local Island');
    }

    public function deleteImage($diving_spot,$id)
    {
        $image = dive_photos::find($id);
        $image->delete();
        return redirect()->back()->withInput();
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
}
