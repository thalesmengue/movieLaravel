<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MovieController extends Controller
{

    public function index(Request $request): View
    {
        $search = $request["search"] ?? "";
        if ($search != "") {
            $movies = Movie::query()->where("name", "LIKE", "%$search%")->get();
        } else {
            $movies = Movie::query()->where("user_id", auth()->user()->id)->get();
        }

        return view("index", compact("movies"));
    }

    public function search(Request $request)
    {
        $movies = Movie::query();
    }

    public function register(): View
    {
        return view("register_movie");
    }

    public function store(MovieRequest $request): RedirectResponse
    {
        Movie::query()->create($request->merge([
            "user_id" => auth()->user()->id
        ])->all());

        return redirect("/");
    }

    public function edit(Movie $movie): View
    {
        return view("edit", compact("movie"));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $movie = Movie::query()->find($id);
        $movie->update($request->all());

        return redirect("/");
    }

    public function destroy($id): RedirectResponse
    {
        Movie::destroy($id);

        return redirect("/");
    }

}
