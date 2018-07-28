@extends ('Layouts/master') @section ('content')
<div class="col-sm-9 blog-main" style="padding-top:50px">
    <div class="blog-post">
        <h2 class="blog-post-title">{{$post->title}}</h2>
        <p class="blog-post-meta"><span class="postCategory">{{$post->category}}</span>{{$post->created_at -> toFormattedDateString()}}</p>
        <p>{{$post->body}}</p>
    </div>
    <hr>
    <div class="comments">
        <ul class="list-group">
            <li class="list-group-item">
                @foreach ($post->comments as $comment)
                <strong>
{{ $comment->created_at->diffForHumans() }}
</strong>
                <article>
                    {{ $comment->body}}
                    <span class="username">{{ $comment -> username }}</span>
                </article>
                @endforeach
            </li>
        </ul>

    </div>
</div>
@endsection