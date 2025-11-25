<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\VSynth;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $songs = Song::query()
            ->when($search, function ($query, $search) {
                $query->where('title', 'like', "%{$search}%") 
                    ->orWhere('artist', 'like', "%{$search}%");
            })->with('vsynths')
            ->get();
        return view('songs.index', compact('songs')); //sends them to the view index
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('songs.index')->with('error', 'Access Denied');
        }
        $vsynths = VSynth::all();
        return view('songs.create', compact('vsynths'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([  //validates the parameters and sets restrictions
            'title' => 'required',
            'artist' => 'required',
            'vsynths' => 'array',
            'released' => 'required|date',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'song_link' => 'required'
        ]);

        if ($request->hasFile('cover_image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/songs'), $imageName);
        }

        $song = Song::create($validated);

        if ($request->has('vsynths')) {
            $song->vsynths->attach($request->vsynths);
        }

        // Song::create([
        //     'title' => $request->title,
        //     'artist' => $request->artist,
        //     'released' => $request->released,
        //     'cover_image' => $imageName,
        //     'song_link' => $request->song_link,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        return to_route('songs.index')->with('success', 'Song created successfully! :3');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        $song->load('vsynths');
        return view('songs.show')->with('song', $song);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        $vsynths = VSynth::all();
        $songVSynths = $song->vsynths->pluck('id')->toArray();
        return view('songs.edit', compact('song', 'vsynths', 'songVSynths'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'artist' => 'required|string',
            'vsynths' => 'array',
            'released' => 'date',
            'cover_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'song_link' => 'required'
        ]);

        if ($request->hasFile('cover_image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->cover_image->move(public_path('images/songs'), $imageName);
        }

        $song->update($validated);

        if ($request->has('vsynths')) {
            $song->vsynths()->sync($request->vsynths);
        }

        return redirect()->route('songs.index')->with('success', 'Song successfully updated~');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        $song->vsynths()->detach();
        $song->delete();

        return redirect()->route('songs.index')->with('success', 'Song deleted successfully.');
    }
}
