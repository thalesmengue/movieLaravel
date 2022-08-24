<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class MovieController extends Controller
{

    public function index(Request $request): View
    {

        $movies = Movie::all();

        return view("index", compact("movies"));
    }

    public function store(Request $request): Redirector
    {

        $movie = Movie::query()->create($request->all());

        return redirect("/");
    }

    public function edit(Movie $movie): View
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
//        Movie::query()->where("id", $id)->delete();

        Movie::destroy($id);

        return redirect("/");
    }

}
