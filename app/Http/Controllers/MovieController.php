<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class MovieController extends Controller
{

    public function index()
    {

        $movies = Movie::all();

        return view("index", compact("movies"));
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                "name" => "required|min:3|max:100|unique:movies",
                "rating" => "required|integer|min:1|max:10",
                "date_watched" => "required"
            ],
            [
                "name.required" => "The name field must be filled",
                "name.min" => "The name of the movie must have at least 3 characters",
                "name.max" => "The name of the movie must have less than 100 characters",
                "name.unique" => "This movie is already registered",

                "rating.required" => "The rating field must be filled",
                "rating.integer" => "The movie rating must be a value between 1 and 10",
                "rating.min" => "The movie rating must be a value between 1 and 10",
                "rating.max" => "The movie rating must be a value between 1 and 10",

                "date_watched.required" => "The date watched field must be filled"
            ]
        );

        Movie::query()->create($request->all());

        return redirect("/");
    }

    public function edit(Movie $movie)
    {
        return view("edit", compact("movie"));
    }

    public function update(Request $request, $id)
    {

        $movie = Movie::query()->find($id);
        $movie->update($request->all());

        return redirect("/");
    }

    public function destroy($id)
    {

        Movie::destroy($id);

        return redirect("/");
    }

}
