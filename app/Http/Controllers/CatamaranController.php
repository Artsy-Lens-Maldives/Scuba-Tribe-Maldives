<?php

namespace App\Http\Controllers;

use App\catamaran;
use App\catamaran_photos;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class CatamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catamarans = catamaran::all();
        return view('catamaran.index', compact('catamarans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catamaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $catamaran = catamaran::create(Input::except('_token', 'image'));
        foreach ($request->image as $photo) {
            $fileName = $catamaran->slug . '-' . time() . '-' . $photo->getClientOriginalName();
            $location = 'public/' . $catamaran->slug . '/images'; 
            $file = $photo->storeAs($location, $fileName);
            catamaran_photos::create([
                'catamaran_id' => $catamaran->id,
                'photo_url' => '/catamaran'. '/' . $catamaran->slug . '/' . 'photo/' . $fileName
            ]);
        }
        return 'Successfully created';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\catamaran  $catamaran
     * @return \Illuminate\Http\Response
     */
    public function show(catamaran $catamaran)
    {
        return view('catamaran.detail', compact('catamaran'));
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
