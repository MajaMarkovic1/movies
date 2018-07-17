@extends('layouts.master')
@extends('layouts.navbar')
@section('content')
<div style='width: 90%; margin: 0 auto;'>
    
    @foreach($movies as $movie)
        <div><a href='/movies/{{$movie->id}}'>{{ $movie->title }}</a></div>
        <div>{{ $movie->storyline }}</div>
    @endforeach
</div>
@endsection


