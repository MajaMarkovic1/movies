@extends('layouts.master')
@extends('layouts.navbar')
@section('content')
<div style='width: 90%; margin: 0 auto;'>

    <div>{{$movie->title}}</div>
    <div>{{$movie->genre}}</div>
    <div>{{$movie->director}}</div>
    <div>{{$movie->production_year}}</div>
    <div>{{$movie->storyline}}</div>

</div>
@endsection