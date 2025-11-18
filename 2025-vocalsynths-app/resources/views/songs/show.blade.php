<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Songs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-cyan-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Song Details</h3> 
                        <x-song-details  {{--allows model attributes to be called as props in the details page--}}
                            :title="$song->title"
                            :artist="$song->artist"
                            :vsynths="$song->vsynths"
                            :released="$song->released"
                            :cover_image="$song->cover_image"
                            :song_link="$song->song_link"
                        />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>