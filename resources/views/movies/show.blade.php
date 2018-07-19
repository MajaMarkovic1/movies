@extends('layouts.master')

@section('content')

    <div style='width: 90%; margin: 0 auto;'>
        
        <h1> {{ $movie->title }}</h1>
        <div><a href="../genres/{{$movie->genre}}"><strong>Genre:</strong></a> {{$movie->genre}}</div>
        <div><strong>Director:</strong> {{$movie->director}}</div>
        <div><strong>Production year:</strong> {{$movie->production_year}}</div>
        <div><strong>Storyline:</strong><p> {{$movie->storyline}}</p></div><br>
        
        @if(count($movie->comment))
        <div>
            <h5>Comments:</h5>
            @foreach( $movie->comment as $comment )
                <div >{{ $comment->content }} </div>            
                <div style='color: grey; font-size: 10px;'>{{ $comment->created_at }}</div><br>
            @endforeach  

        </div><br>
        @endif

        
        <form method='POST' action='{{$movie->id}}'>
            <h4>Add comment:</h4>

            {{ csrf_field() }}

            <div class="form-group" >
                <input style='width: 30%;' name="content" type="text" class="form-control" id="content">
                <input style='width: 30%;' name="movie_id" value='{{$movie->id}}' type="hidden" class="form-control" id="movie_id">
                @include('partials.error-message', ['fieldName' => 'content'])
            </div>
            <button type='submit' class="btn btn-primary">Submit</button>
            
        </form>
    </div>

@endsection
