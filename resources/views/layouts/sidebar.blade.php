<div class="col-sm-3 offset-sm-1 blog-sidebar">
    
    <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
        @foreach ($movies as $movie)
        <li><a style='color:grey;' href="{{ action('MoviesController@show', $movie) }}">{{ $movie->title }}</a></li>
        @endforeach
    </ol>
    </div>
    
</div><!-- /.blog-sidebar -->