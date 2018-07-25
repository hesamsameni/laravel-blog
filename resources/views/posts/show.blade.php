@extends ('Layouts/master')

@section ('content')
<div class="col-sm-9 blog-main" style="padding-top:30px">
<div class="blog-post">
    <h2 class="blog-post-title">{{$post->title}}</h2>
    <p class="blog-post-meta">{{$post->category}}</p>
    <p class="blog-post-meta">{{$post->created_at}}</p>
    <p>{{$post->body}}</p>
</div>
</div>
@endsection



