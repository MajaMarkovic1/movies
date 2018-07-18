<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'genre', 'director', 'production_year', 'storyline', 'created_at'
    ];

    protected function published()
    {
        return self::orderBy('title', 'asc')->take(5)->get();
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

}
