<?php

namespace App\Http\Controllers;

use App\inquery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class InqueryController extends Controller
{
    public function show($id, $name, $type, $iten_id)
    {
        return view('inquiry.inquery', compact('name', 'type'));
    }

    public function store($id, $name, $type, $iten_id)
    {
        $inquery = inquery::create(Input::except('_token'));
        $inquery->type_id = $id;
        $inquery->type = $type;
        $inquery->iten_id = $iten_id;

        
        return redirect()->back()->with('alert-success', 'Your Inquiry has been sent. We wil get back to you as soon as possible.');
    }
}
