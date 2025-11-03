<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Vocal Synths') }}
        </h2>

    </x-slot>

    <x-alert-success>
        {{ session('success') }} {{--displays the success notification at the top of the screen when redirected from create/edit/delete --}}
    </x-alert-success>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List of Vocal Synths:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($vsynths as $vsynth)  {{--loops through each vocal synth in the db and displays them--}}
                        <div class="border p-4 rounded-lg shadow-md bg-cyan-100">
                            <a href="{{ route('vsynths.show', $vsynth) }}">  {{--creates the layout for each individual card displaying the synths, and adds a link to a single show page with all details--}}
                                <x-vsynth-card
                                    :name="$vsynth->name"
                                    :image="$vsynth->image"
                                />
                            </a>

                            @if(auth()->user()->role === 'admin')
                                <div class="mt-4 flex space-x-2">
                                    <a href="{{ route('vsynths.edit', $vsynth) }}" class="text-gray-600 bg-blue-300 hover:bg-blue-700 hover:text-white font-bold py-2 px-4 rounded">  {{--produces an edit button that routes to the edit function in the controller, and allows the user to change a synth--}}
                                        Edit
                                    </a>

                                    <form action="{{ route('vsynths.destroy', $vsynth) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this synth?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-gray-600 font-bold py-2 px-4 rounded">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>