@extends ('Layouts/master')
@section ('content')
<div class="col-md-9" style="padding-top:30px">
    <a href="/posts/create" class="btn btn-primary" style="float:right">Publish New Post</a>
<ul>
        @foreach ($posts as $post)
        @include('posts/post')
        @endforeach
    </ul>
</div>

@endsection

