<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::paginate();
        $searchTerm = 'lorem';

        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        return view('movies.show', ['movie' => $movie]);
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $newMovie = new Movie();
        $newMovie->title = $data['title'];
        $newMovie->description = $data['description'];
        $newMovie->published_year = $data['published_year'];
        $newMovie->save();

        Movie::create($data);

        return redirect()->route('movies.show', ['id' => $newMovie->id]);
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, $id)
    {

        $data = $request->all();

        $movie = Movie::findOrFail($id);
        $movie->title = $data['title'];
        $movie->description = $data['description'];
        $movie->published_year = $data['published_year'];
        $movie->update();

        return redirect()->route('movies.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return redirect()->route('movies.index');
    }

}
