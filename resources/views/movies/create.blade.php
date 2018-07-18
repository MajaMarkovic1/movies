@extends('layouts.master')
@extends('layouts.navbar')
@section('content')

<!-- @if(!empty($errors->all()))
   @foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach
@endif -->

    <div style='width: 50%; margin: 0 auto;'>
        <form action='movies' method='POST' >

            {{ csrf_field() }}

            <div class="form-group" >
                <label for="title">Title</label>
                <input name="title" type="text" class="form-control" id="title">
                @include('partials.error-message', ['fieldName' => 'title'])
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <input name="genre" class="form-control" id="genre">
                @include('partials.error-message', ['fieldName' => 'genre'])
                
            </div>
            <div class="form-group">
                <label for="director">Director</label>
                <input name="director" class="form-control" id="director">
                @include('partials.error-message', ['fieldName' => 'director'])
                
            </div>  
            <div class="form-group">
                <label for="production_year">Production year</label>
                <input name="production_year" class="form-control" id="production_year">
                @include('partials.error-message', ['fieldName' => 'production_year'])
            
                
            </div>
            <div class="form-group">
                <label for="storyline">Storyline</label>
                <input name="storyline" class="form-control" id="storyline">
                @include('partials.error-message', ['fieldName' => 'storyline'])
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection