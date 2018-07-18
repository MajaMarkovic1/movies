@extends('layouts.master')
@extends('layouts.navbar')
@section('content')

<h5>Comments:</h5>

    @foreach( $movie->comment as $comment )
        <div >{{ $comment->content }} </div>            
        <div style='color: grey; font-size: 10px;'>{{ $comment->created_at }}</div><br>
    @endforeach 

@endsection