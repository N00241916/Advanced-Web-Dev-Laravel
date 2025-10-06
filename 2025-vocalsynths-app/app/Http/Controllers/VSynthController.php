<?php

namespace App\Http\Controllers;

use App\Models\VSynth;
use Illuminate\Http\Request;

class VSynthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vsynths = VSynth::all(); //Returns all the books, and...
        return view('vsynths.index', compact('vsynths')); //sends them to the view index
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vsynths.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VSynth $vsynth)
    {
        return view('vsynths.show')->with('vsynth', $vsynth);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VSynth $vsynth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VSynth $vsynth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VSynth $vsynth)
    {
        //
    }
}
