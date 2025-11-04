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
                            <ul class="mt-4 space-y-4">
                                @foreach ($vsynth->tunings as $tuning)
                                    <li class="bg-gray-100 p-4 rounded-lg">
                                        <p class="font-semibold">{{$tuning->name}}</p>
                                        <p>{{$tuning->artist}}</p>
                                        <img src="../images/tunings{{$tuning->image}}">
                                    </li>
                                    
                                @endforeach    
                            </ul>  
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>