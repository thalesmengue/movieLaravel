@extends('layouts.scaffold')

@section('title', 'myMovieList')

@section('content')

    <div>
            <x-edit_form :movie="$movie" />
    </div>
@endsection
