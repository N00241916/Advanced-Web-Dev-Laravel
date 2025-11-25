<form action="{{route('vsynths.index')}}" method="GET" class="flex items-center space-x-2">
        <input
            type="text"
            name="search" {{--so the controller can read it via $request->input('search')--}}
            value="{{request('search')}}" {{--keeps the user's query after submit--}}
            placeholder="Search..."
            class="border border-gray-300 rounded-md px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 w-48 transition"
            id="search"
        >
 
        {{-- Submit button: Pressing Enter in the input also submits the form--}}
        <button
            type="submit"
            class="bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-1.5 rounded-md text-sm transition">
            Search
        </button>
    </form>