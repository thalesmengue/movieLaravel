<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function index(Request $request)
    {
        $search = $request["search"] ?? "";
        if ($search != "") {
            $movies = Movie::where("name", "LIKE", "%$search%")->get();
        } else {
            $movies = Movie::where("user_id", auth()->user()->id)->get();
        }

        return view("index", compact("movies"));
    }

    public function search(Request $request)
    {
        $movies = Movie::query();

    }

    public function register()
    {
        return view("register_movie");
    }

    public function store(MovieRequest $request)
    {
        Movie::query()->create($request->merge([
            "user_id" => auth()->user()->id
        ])->all());

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
