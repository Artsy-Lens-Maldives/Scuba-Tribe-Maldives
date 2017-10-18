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
        return view('liveaboard.admin.create-liveaboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $liveaboard = liveaboard::create(Input::except('_token', 'image', 'catamaran_layout_photo'));
        
        $layout_photo = $request->catamaran_layout_photo;
        
        $layout_name = $liveaboard->slug . '-layout-' . time() . '-' . $layout_photo->getClientOriginalName();
        $location = 'public/' . $liveaboard->slug . '/images'; 
        $layout_file = $layout_photo->storeAs($location, $layout_name);
        
        $liveaboard->vessel_layout_photo = '/liveaboard'. '/' . $liveaboard->slug . '/' . 'photo/' . $layout_name;
        $liveaboard->save();
        
        $i = 0;
        foreach ($request->image as $photo) {
            $i++;
            if ($i == '1'){
                $m = '1';
            } else {
                $m = '0';
            }
            $fileName = $liveaboard->slug . '-' . time() . '-' . $photo->getClientOriginalName();
            $location = 'public/' . $liveaboard->slug . '/images'; 
            $file = $photo->storeAs($location, $fileName);
            liveaboard_photo::create([
                'liveaboard_id' => $liveaboard->id,
                'main' => $m,
                'photo_url' => '/liveaboard'. '/' . $liveaboard->slug . '/' . 'photo/' . $fileName
            ]);
        }
        return redirect()->back()->with('alert-success', 'Successfully added new Liveaboard');
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
        return view('liveaboard.admin.edit-liveaboard', compact('liveaboard'));
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
        $liveaboard->name = $request->name;
        $liveaboard->star = $request->star;
        $liveaboard->description = $request->description;
        $liveaboard->boat_features = $request->boat_features;
        $liveaboard->food_and_drinks = $request->food_and_drinks;
        $liveaboard->diving = $request->diving;
        $liveaboard->gear_rental = $request->gear_rental;
        $liveaboard->save();

        $message = "Successfully updated " . $liveaboard->name . " Liveaboard";
        return redirect('admin/liveaboard')->with('alert-success', $message);

    }

    public function deleteImage($liveaboard,$id)
    {
        $image = liveaboard_photo::find($id);
        $image->delete();
        return redirect('admin/liveaboard/edit/'. $liveaboard .'/#image_preview_old')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\liveaboard  $liveaboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(liveaboard $liveaboard)
    {
        $liveaboard->delete();
        return redirect()->back()->with('alert-success', 'Successfully Deleted Liveaboard');
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
