@extends('layouts.scaffold')

@section('title', 'myMovieList')

@section('content')

    <div class="bg-white w-3/4 content-center ml-56 p-12 mt-4 rounded-2xl">
        <x-edit_profile_form :user="$user" />
    </div>

@endsection
