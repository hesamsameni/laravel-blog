<div class="col-sm-9 blog-main">
<div class="blog-post">
    <a href="/posts/{{ $post->id }}"><h2 class="blog-post-title">{{$post->title}}</h2></a>
    <p class="blog-post-meta"><span class="postCategory">{{$post->category}}</span>{{$post->created_at -> toFormattedDateString()}}</p>
    <p>{{$post->body}}</p>
</div>
</div>