@extends('layouts.master')
@extends('layouts.navbar')
@section('content')

    <div style='width: 90%; margin: 0 auto;'>
        <div><strong>Title:</strong> {{$movie->title}}</div>
        <div><strong>Genre:</strong> {{$movie->genre}}</div>
        <div><strong>Director:</strong> {{$movie->director}}</div>
        <div><strong>Production year:</strong> {{$movie->production_year}}</div>
        <div><strong>Storyline:</strong> {{$movie->storyline}}</div>
    </div>

@endsection
