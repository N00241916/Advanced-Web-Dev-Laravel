@props(['name', 'age', 'gender', 'type', 'release_date', 'image', 'demolink']) {{--Imports the values from the database to load them in this file--}}

<div class="border rounded-lg shadow-md p-6 bg-sky-200 hover:shadow-lg transition duration-300 max-w-4xl mx-auto"> {{--changed size of box from xl -> 4xl to fit youtube embed--}}
    <h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{ $name }}</h1>
    <div class="overflow-hidden rounded-lg mb-4 flex justify-start">
        <img src="{{ asset('images/vsynths/' . $image) }}" alt="{{ $name }}" class="w-full max-w-xs h-auto object-cover">
        <iframe width="560" height="315" src="{{ asset($demolink)}}" allowfullscreen class="ml-5"></iframe> {{--embeds a youtube video based on the link in the db--}}
    </div>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Age: {{ $age }}</h2>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">{{ $gender }}</h2>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">{{ $type }}</h2>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Released: {{ $release_date }}</h2>
      
</div>