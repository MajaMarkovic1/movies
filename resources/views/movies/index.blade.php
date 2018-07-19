@extends('layouts.master')

@section('content')

    <div style='width: 90%; margin: 0 auto; box-sizing: border-box;'>
        @foreach($movies as $movie)
            <h4><a style='color: grey;' href='movies/{{$movie->id}}'>{{ $movie->title }}</a></h4>
            <div >{{ $movie->storyline }}</div><br>
        @endforeach
    </div>

@endsection

@section('sidebar')

    @include('layouts.sidebar')

@endsection


