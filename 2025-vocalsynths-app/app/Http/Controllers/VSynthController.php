<?php

namespace App\Http\Controllers;

use App\Models\VSynth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VSynthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vsynths = VSynth::all(); //Returns all the synths, and...
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
        $request->validate([  //validates the parameters and sets restrictions
            'name' => 'required',
            'age' => 'required|integer',
            'gender' => 'required',
            'type' => 'required',
            'release_date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'demolink' => 'required'
        ]);

        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/vsynths'), $imageName);
        }

        VSynth::create([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'type' => $request->type,
            'release_date' => $request->release_date,
            'image' => $imageName,
            'demolink' => $request->demolink,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return to_route('vsynths.index')->with('success', 'Synth created successfully! :3');
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
        return view('vsynths.edit')->with('vsynth', $vsynth);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VSynth $vsynth)
    {
        $request->validate([  //validates the parameters and sets restrictions
            'name' => 'required',
            'age' => 'required|integer',
            'gender' => 'required',
            'type' => 'required',
            'release_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'demolink' => 'required'
        ]);

        $data = $request->only(['name', 'age', 'gender', 'type', 'release_date', 'demolink']);  //puts the validated parameters into a variable to be updated easier and more consistently

        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/vsynths'), $imageName);
            $data['image'] = $imageName;  //if the form has a new image for the synth, puts it into the data variable to be passed through
        }

        $vsynth->update($data);
        // else {
        //     $imageName = $vsynth->image;
        // }

        // $vsynth->update([
        //     'name' => $request->name,
        //     'age' => $request->age,
        //     'gender' => $request->gender,
        //     'type' => $request->type,
        //     'release_date' => $request->release_date,
        //     'image' => $imageName,
        //    //'created_at' => old('created_at', $vsynth->release_date ?? ''),
        //     'updated_at' => now()
        // ]);

        return to_route('vsynths.index')->with('success', 'Synth updated successfully! :3');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VSynth $vsynth)
    {
        if (!$vsynth) {
            return to_route('vsynths.index')->with('failure', 'Synth not found...'); //returns you to the index page with a failure notification if the synth isnt found
        }

        $vsynth->delete();

        return to_route('vsynths.index')->with('success', 'Synth successfully deleted!');
    }
}
