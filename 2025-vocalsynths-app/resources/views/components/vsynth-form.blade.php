@props(['action', 'method', 'vsynth'])

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
            value="{{old('name', $vsynth->name ?? '') }}" {{--Ensures that if updating an entry, the form shows its previous data--}}
            required {{--Stops you from leaving the field blank--}}
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('name')
            <p class="text-sm text-red-600">{{$message}}</p> {{--sends the error message if something goes wrong--}}
        @enderror
    </div>

    <div class="mb-4">
        <label for="age" class="block text-sm text-gray-700">Age</label>
        <input
            type="text"
            name="age"
            id="age"
            value="{{old('age', $vsynth->age ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('age')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="gender" class="block text-sm text-gray-700">Gender</label>
        <input
            type="text"
            name="gender"
            id="gender"
            value="{{old('gender', $vsynth->gender ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('gender')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="type" class="block text-sm text-gray-700">Type</label>
        <input
            type="text"
            name="type"
            id="type"
            value="{{old('type', $vsynth->type ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('type')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="release_date" class="block text-sm text-gray-700">Released</label>
        <input
            type="text"
            name="release_date"
            id="release_date"
            value="{{old('release_date', $vsynth->release_date ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('release_date')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="demolink" class="block text-sm text-gray-700">Demo Embed (Format: https://youtube.com/embed/...)</label>
        <input
            type="text"
            name="demolink"
            id="demolink"
            value="{{old('demolink', $vsynth->demolink ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('demolink')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="image" class="block text-sm font=medium text-gray-700">Image of the Synth:</label>
        <input
            type="file"
            name="image"
            id="image"
            {{isset($vsynth) ? '' : 'required'}}
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        />
        @error('image')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    @isset($vsynth->image)
        <div class="mb-4">
            <img src="{{asset( 'images/vsynths/' . $vsynth->image)}}" alt="Synth Image" class="w-24 h-32 object-cover">
        </div>
    @endisset

    <div>
        <x-primary-button>
            {{isset($vsynth) ? 'Update VocalSynth' : 'Add VocalSynth'}}
        </x-primary-button>
        
            <a href="{{ route('vsynths.index') }}" class="text-gray-600 bg-blue-300 hover:bg-blue-700 hover:text-white font-bold py-2 px-4 rounded">
                Cancel
            </a>
            
    </div>
</form>