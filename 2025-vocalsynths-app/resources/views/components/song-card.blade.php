@props(['title', 'artist', 'cover_image'])

<div class="border rounded-lg shadow-md p-6 bg-cyan-200 hover:shadow-lg transition duration-300">
    <img src="{{asset( 'images/songs/' . $cover_image)}}" alt="{{$title}}">
    <h4 class="font-bold text-lg">{{ $title }}</h4>
    <p class="font-bold text-md">{{ $artist }}</p>


</div>