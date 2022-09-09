@extends('layouts.scaffold')

@section('title', 'myMovieList')

@section('content')

    <div>
        @component("components.register_movie_form")
        @endcomponent
    </div>
    <div class="flex justify-center items-center mt-4">
        <div class="flex flex-row">
            <form action="">
                <label for="default-search" class="mb-2 text-base font-medium text-rose-500">
                    search
                </label>
                <div class="flex">
                    <input type="search" name="search"
                           class="block pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
                           border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="search">
                    <button type="submit" class="text-white right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800
                   focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">
                        Search
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="flex justify-center items-center gap-10 flex-row flex-wrap mx-auto my-32">
        @isset($movies)
            @foreach ($movies as $movie)
                <x-card :movie="$movie"/>
            @endforeach
        @endisset
    </div>
@endsection
