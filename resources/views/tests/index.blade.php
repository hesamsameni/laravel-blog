@extends ('Layouts/master')

@section ('content')
<ul>
        @foreach ($tests as $test)
        <a href="/tests/{{$test->id}}"><li>{{$test->body}}</li></a>
        @endforeach
    </ul>
@endsection