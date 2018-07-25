@extends ('Layouts/master')

@section ('content')
<div class="col-sm-9 blog-main" style="padding-top:50px">
<div class="blog-post">
    <h2 class="blog-post-title">{{$post->title}}</h2>
    <p class="blog-post-meta"><span class="postCategory">{{$post->category}}</span>{{$post->created_at -> toFormattedDateString()}}</p>
    <p>{{$post->body}}</p>
</div>
</div>
@endsection



