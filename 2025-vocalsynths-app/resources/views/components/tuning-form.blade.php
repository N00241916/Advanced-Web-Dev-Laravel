@props(['action', 'method', 'tuning', 'vsynth'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data"> {{--Declares the forms method and encryption type--}}
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <div class="mb-4">
        <label for="name" class="block text-sm text-gray-700">Name</label>
        <input
            type="text"
            name="name"
            id="name"
            value="{{old('name', $tuning->name ?? '') }}" {{--Ensures that if updating an entry, the form shows its previous data--}}
            required {{--Stops you from leaving the field blank--}}
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('name')
            <p class="text-sm text-red-600">{{$message}}</p> {{--sends the error message if something goes wrong--}}
        @enderror
    </div>
    
    <div class="mb-4">
        <label for="artist" class="block text-sm text-gray-700">Artist</label>
        <input
            type="text"
            name="artist"
            id="artist"
            value="{{old('artist', $tuning->artist ?? '') }}" {{--Ensures that if updating an entry, the form shows its previous data--}}
            required {{--Stops you from leaving the field blank--}}
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('artist')
            <p class="text-sm text-red-600">{{$message}}</p> {{--sends the error message if something goes wrong--}}
        @enderror
    </div>

    {{-- <div class="mb-4">
        <label for="vsynth_id" class="block text-sm text-gray-700">VSynth</label>
        <select name="vsynth_id" id="vsynth_id">
           
                @foreach ($vsynths as $vsynth)
                    <option value = " {{$vsynth->id}} ">{{$vsynth->name}}</option>
                @endforeach
           
        </select>
        @error('v_synth_id')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div> --}}

    <div class="mb-4">
        <label for="image" class="block text-sm font=medium text-gray-700">Image:</label>
        <input
            type="file"
            name="image"
            id="image"
            {{isset($tuning) ? '' : 'required'}}
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        />
        @error('image')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    @isset($tuning->image)
        <div class="mb-4">
            <img src="{{asset( 'images/tunings/' . $tuning->image)}}" alt="Tuning Image" class="w-24 h-32 object-cover">
        </div>
    @endisset

    <div>
        <x-primary-button>
            {{isset($tuning) ? 'Update Tuning' : 'Add Tuning'}}
        </x-primary-button>
        
            <a href="{{ route('vsynths.show', $vsynth) }}" class="text-gray-600 bg-blue-300 hover:bg-blue-700 hover:text-white font-bold py-2 px-4 rounded">
                Cancel
            </a>
            
    </div>
    
</form>