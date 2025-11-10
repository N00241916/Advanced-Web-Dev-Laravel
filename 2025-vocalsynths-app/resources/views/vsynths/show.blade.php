<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Vocal Synths') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-cyan-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Synth Details</h3> 
                        <x-vsynth-details  {{--allows model attributes to be called as props in the details page--}}
                            :name="$vsynth->name"
                            :age="$vsynth->age"
                            :gender="$vsynth->gender"
                            :type="$vsynth->type"
                            :release_date="$vsynth->release_date"
                            :image="$vsynth->image"
                            :demolink="$vsynth->demolink"
                        />
                    <div class="align-items-center">
                        <h4 class="font-semibold text-md mt-8">Well known Tunings~</h4>
                        @if($vsynth->tunings->isEmpty())
                            <p class="text-gray-600">No tunings yet...</p>
                        @else
                            <div class="mt-4 gap-2 flex">
                                @foreach ($vsynth->tunings as $tuning)
                                    <div class="bg-gray-100 p-4 rounded-lg">
                                        <p class="font-semibold">{{$tuning->name}}</p>
                                        <p>{{$tuning->artist}}</p>
                                        <img src="../images/tunings/{{$tuning->image}}" class="max-w-xs">
                                    </div>
                                    
                                @endforeach   
                                
                            </div>  
                        @endif
                        <div class="mt-4">
                            <a href="{{ route('tunings.create', $vsynth) }}" class="text-gray-600 bg-blue-300 hover:bg-blue-700 hover:text-white font-bold py-2 px-4 rounded">Add another tuning!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>