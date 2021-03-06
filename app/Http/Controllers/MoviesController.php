<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Comment;
use Illuminate\Http\Request;

class MoviesController extends Controller
{

    public function index()
    {
        $movies = Movie::published();
        
        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        //$movie = Movie::findOrFail($id);

        $movie = Movie::with('comment')->find($id);
       
        return view('movies.show', compact('movie'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required', 
            'genre' => 'required', 
            //'director' => 'required',
            'production_year' => 'required|integer|between:1900,2018',
            'storyline' => 'required|max:1000'
            ]);
            //dd(request()->all());
        Movie::create([
            'title' => request('title'),
            'genre' => request('genre'),
            'director' => request('director'),
            'production_year' => request('production_year'),
            'storyline' => request('storyline')
        ]);
        return redirect('movies');
    }
}



