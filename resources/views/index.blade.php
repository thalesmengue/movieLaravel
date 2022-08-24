@extends('layouts.scaffold')

@section('title', 'myMovieList')

@section('content')

    <div>
        <div>
            @component("components.register_form")
            @endcomponent
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
