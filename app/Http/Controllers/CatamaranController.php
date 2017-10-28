<?php

namespace App\Http\Controllers;

use App\catamaran;
use App\catamaran_photos;
use App\catamaran_itineraries;
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
        return view('catamaran.admin.create-catamaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catamaran = catamaran::create(Input::except('_token', 'image', 'catamaran_layout_photo'));
        
        $layout_photo = $request->catamaran_layout_photo;
        
        if ($layout_photo != null) {            
            $layout_name = $catamaran->slug . '-layout-' . time() . '-' . $layout_photo->getClientOriginalName();
            $location = 'public/' . $catamaran->slug . '/images'; 
            $layout_file = $layout_photo->storeAs($location, $layout_name);
            
            $catamaran->catamaran_layout_photo = '/catamaran'. '/' . $catamaran->slug . '/' . 'photo/' . $layout_name;
            $catamaran->save();
        }
        $i = 0;
        foreach ($request->image as $photo) {
            $i++;
            if ($i == '1'){
                $m = '1';
            } else {
                $m = '0';
            }
            $fileName = $catamaran->slug . '-' . time() . '-' . $photo->getClientOriginalName();
            $file = $photo->storeAs($location, $fileName);
            catamaran_photos::create([
                'catamaran_id' => $catamaran->id,
                'main' => $m,
                'photo_url' => '/catamaran'. '/' . $catamaran->slug . '/' . 'photo/' . $fileName
            ]);
        }
        return redirect()->back()->with('alert-success', 'Successfully added new Catamaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\catamaran  $catamaran
     * @return \Illuminate\Http\Response
     */
    public function show(catamaran $catamaran)
    {
        $liveaboard = $catamaran;
        return view('catamaran.detail', compact('liveaboard', 'catamaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\catamaran  $catamaran
     * @return \Illuminate\Http\Response
     */
    public function edit(catamaran $catamaran)
    {
        return view('catamaran.admin.edit-catamaran', compact('catamaran'));
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
        $catamaran->name= $request->name;
        $catamaran->star= $request->star;
        $catamaran->description= $request->description;
        $catamaran->features= $request->features;
        $catamaran->save();
        
        $location = 'public/' . $catamaran->slug . '/images';

        if ($request->image != null) {
            foreach ($request->image as $photo) {
                $fileName = $catamaran->slug . '-' . time() . '-' . $photo->getClientOriginalName();
                $file = $photo->storeAs($location, $fileName);
                catamaran_photos::create([
                    'catamaran_id' => $catamaran->id,
                    'main' => '0',
                    'photo_url' => '/catamaran'. '/' . $catamaran->slug . '/' . 'photo/' . $fileName
                ]);
            }
        }
        
        $message = "Successfully updated " . $catamaran->name . " Catamaran";
        return redirect('admin/catamaran')->with('alert-success', $message);
    }

    public function deleteImage($catamaran,$id)
    {
        $image = catamaran_photos::find($id);
        $image->delete();
        return redirect('admin/catamaran/edit/'. $catamaran .'/#image_preview_old')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\catamaran  $catamaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(catamaran $catamaran)
    {
        $catamaran ->delete();
        return redirect()->back()->with('alert-success', 'Successfully Deleted Catamaran');
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
        $catamarans = catamaran::all();
        return view('catamaran.admin.create-itinerary', compact('catamarans'));   
    }
    
    public function itinerary_add()
    {
        catamaran_itineraries::create(Input::except('_token'));
        return redirect()->back()->with('alert-success', 'Successfully added itenerary');
    }
}
