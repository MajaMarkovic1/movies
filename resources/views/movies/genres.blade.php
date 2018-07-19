@extends('layouts.master')

@section('content')

    <div style="width: 90%; margin: 0 auto;">
        @foreach( $movies as $movie )
            <h4 ><a style='color: grey;' href="{{ action('MoviesController@show', $movie) }}">{{ $movie->title }} </a></h4>            
            <div>{{ $movie->storyline }}</div><br>
        @endforeach 
    </div>

@endsection

@section('sidebar')

    @include('layouts.sidebar')

@endsection


