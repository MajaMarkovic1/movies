<div class="col-sm-3 offset-sm-1 blog-sidebar">
    
    <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
        @foreach ($latest_movies as $latest_movie)
        <li><a style='color:grey;' href="/movies/{{$latest_movie->id}}">{{ $latest_movie->title }}</a></li>
        @endforeach
    </ol>
    </div>
    
</div><!-- /.blog-sidebar -->