@props(['title', 'artist', 'released', 'cover_image', 'song_link']) {{--Imports the values from the database to load them in this file--}}

<div class="border rounded-lg shadow-md p-6 bg-sky-200 hover:shadow-lg transition duration-300 max-w-4xl mx-auto"> {{--changed size of box from xl -> 4xl to fit youtube embed--}}
    
    <div class="overflow-hidden rounded-lg mb-4 flex justify-start">
        <img src="{{ asset('images/songs/' . $cover_image) }}" alt="{{ $title }}" class="w-full max-w-xs h-auto object-cover">
        <iframe width="560" height="315" src="{{ asset($song_link)}}" allowfullscreen class="ml-5"></iframe> {{--embeds a youtube video based on the link in the db--}}
    </div>
    <h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{ $title }}</h1>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Artist: {{ $artist }}</h2>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Released: {{ $released }}</h2>
      
</div>