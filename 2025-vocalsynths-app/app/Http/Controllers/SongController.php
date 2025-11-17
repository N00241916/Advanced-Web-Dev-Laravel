<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::all(); //Returns all the songs, and...
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
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([  //validates the parameters and sets restrictions
            'title' => 'required',
            'artist' => 'required',
            'vocal_synths' => 'array',
            'released' => 'required|date',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'song_link' => 'required'
        ]);

        if ($request->hasFile('cover_image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/songs'), $imageName);
        }

        Song::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'released' => $request->released,
            'cover_image' => $imageName,
            'song_link' => $request->song_link,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return to_route('songs.index')->with('success', 'Song created successfully! :3');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        return view('songs.show')->with('song', $song);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        //
    }
}
