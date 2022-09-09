@extends('layouts.scaffold_login')

@section('title', 'myMovieList')

@section('content')

    <div>
        <div>
            @component("components.register_form")
            @endcomponent
        </div>
    </div>
@endsection
