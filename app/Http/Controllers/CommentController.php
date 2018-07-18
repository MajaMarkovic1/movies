<?php

namespace App\Http\Controllers;
use App\Movie;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
  
    public function store()
    {
        $this->validate(request(), [
            'content' =>'required',
            'movie_id' => 'required'
            ]); 

        Comment::create([
            'content' => request('content'),
            'movie_id' => request('movie_id')
        ]);
        
        return back();
    }

}
