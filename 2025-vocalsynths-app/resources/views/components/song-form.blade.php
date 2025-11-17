@props(['action', 'method', 'song', 'vsynth'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data"> {{--Declares the forms method and encryption type--}}
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <div class="mb-4">
        <label for="title" class="block text-sm text-gray-700">Title</label>
        <input
            type="text"
            name="title"
            id="title"
            value="{{old('title', $song->title ?? '') }}" {{--Ensures that if updating an entry, the form shows its previous data--}}
            required {{--Stops you from leaving the field blank--}}
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('title')
            <p class="text-sm text-red-600">{{$message}}</p> {{--sends the error message if something goes wrong--}}
        @enderror
    </div>

    <div class="mb-4">
        <label for="artist" class="block text-sm text-gray-700">Artist</label>
        <input
            type="text"
            name="artist"
            id="artist"
            value="{{old('artist', $song->artist ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('artist')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="released" class="block text-sm text-gray-700">Released</label>
        <input
            type="text"
            name="released"
            id="released"
            value="{{old('released', $song->released ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('released')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="song_link" class="block text-sm text-gray-700">Song Embed (Format: https://youtube.com/embed/...)</label>
        <input
            type="text"
            name="song_link"
            id="song_link"
            value="{{old('song_link', $song->song_link ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('song_link')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    

    <div class="mb-4">
        <label for="cover_image" class="block text-sm font=medium text-gray-700">Image of the Synth:</label>
        <input
            type="file"
            name="cover_image"
            id="cover_image"
            {{isset($song) ? '' : 'required'}}
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        />
        @error('cover_image')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    @isset($song->image)
        <div class="mb-4">
            <img src="{{asset( 'images/songs/' . $song->cover_image)}}" alt="Song Image" class="w-24 h-32 object-cover">
        </div>
    @endisset

    <div>
        <x-primary-button>
            {{isset($song) ? 'Update Song' : 'Add Song'}}
        </x-primary-button>
        
            <a href="{{ route('songs.index') }}" class="text-gray-600 bg-blue-300 hover:bg-blue-700 hover:text-white font-bold py-2 px-4 rounded">
                Cancel
            </a>
            
    </div>
</form>