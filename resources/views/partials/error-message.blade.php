@if($errors->has($fieldName))
    <ul>
        @foreach($errors->get($fieldName) as $error)
            <li class='btn btn-warning'>{{ $error }}</li>
        @endforeach
    </ul>
@endif