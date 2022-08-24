@extends('layouts.scaffold')

@section('title', 'myMovieList')

@section('content')

    <div>
        <div>
            <x-edit_form :movie="$movie" />
        </div>
    </div>
@endsection
