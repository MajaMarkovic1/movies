@extends('layouts.master')
@extends('layouts.navbar')
@section('content')
    @foreach($movies as $movie)
        <div><a href='/movies/{{$movie->id}}'>{{ $movie->title }}</a></div>
        <div>{{ $movie->storyline }}</div>
    @endforeach
@endsection
