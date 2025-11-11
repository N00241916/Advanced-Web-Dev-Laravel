<?php

namespace App\Http\Controllers;

use App\Models\Tuning;
use App\Models\VSynth;
use Illuminate\Http\Request;

class TuningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tunings = Tuning::all(); //Returns all the synths, and...
        return view('tunings.index', compact('tunings')); //sends them to the view index
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(VSynth $vsynth)
    {
        // dd($vsynth->id);
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('vsynths.index')->with('error', 'Access Denied');
        }
        return view('tunings.create', compact('vsynth'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, VSynth $vsynth)
    {
        $request->validate([
            // 'v_synth_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/tunings'), $imageName);
        }
       
        $vsynth->tunings()->create([
            'v_synth_id' => $vsynth->id,
            'name' => $request->input('name'),
            'artist' => $request->input('artist'),
            'image' => $imageName
        ]);

        return redirect()->route('vsynths.show', $vsynth)->with('success', 'Added new tuning successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tuning $tuning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tuning $tuning, VSynth $vsynth)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('tunings.index')->with('error', 'Access Denied.');
        }
        return view('tunings.edit', compact('tuning'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tuning $tuning)
    {
        $tuning->update($request->only(['name', 'artist']));

        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/tunings'), $imageName);
            $data['image'] = $imageName;  //if the form has a new image for the synth, puts it into the data variable to be passed through
        }

        return redirect()->route('tunings.index')
                         ->with('success', 'Tuning updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tuning $tuning)
    {
        if (!$tuning) {
            return to_route('tunings.index')->with('failure', 'Synth not found...'); //returns you to the index page with a failure notification if the synth isnt found
        }

        $tuning->delete();

        return to_route('tunings.index')->with('success', 'Synth successfully deleted!');
    }
}
