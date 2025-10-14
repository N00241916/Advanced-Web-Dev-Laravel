@props(['name', 'age', 'gender', 'type', 'release_date', 'image'])

<div class="border rounded-lg shadow-md p-6 bg-sky-200 hover:shadow-lg transition duration-300 max-w-xl mx-auto">
    <h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{ $name }}</h1>
    <div class="overflow-hidden rounded-lg mb-4 flex justify-start">
        <img src="{{ asset('images/vsynths/' . $image) }}" alt="{{ $name }}" class="w-full max-w-xs h-auto object-cover">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/4YCLRpKY1cs?si=yld-ikyiBxTSEvfr" allowfullscreen></iframe>  
    </div>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Age: {{ $age }}</h2>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">{{ $gender }}</h2>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">{{ $type }}</h2>
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Released: {{ $release_date }}</h2>
</div>