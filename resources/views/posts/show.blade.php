@extends ('Layouts/master') @section ('content')
<div class="col-sm-9 blog-main" style="padding-top:50px">
    <!-- =====Blog Post Section===== -->
    <div class="blog-post">
        <h2 class="blog-post-title">{{$post->title}}</h2>
        <p class="blog-post-meta"><span class="postCategory">{{$post->category}}</span>{{$post->created_at -> toFormattedDateString()}}</p>
        <p>{{$post->body}}</p>
    </div>
    <!-- =====/Blog Post Section===== -->
    <hr>
    <!-- =====Comments Section===== -->
    <div class="comments">
        <ul class="list-group">
            <li class="list-group-item">
                @foreach ($post->comments as $comment)
                <strong>
                {{ $comment->created_at->diffForHumans() }}
                </strong>
                <article>
                    {{ $comment->body}}
                </article>
                @endforeach
            </li>
        </ul>
    </div>
    <!-- =====/Comments Section===== -->
    <hr>
    <!-- =====Add a Comment Section===== -->
    <div class="card">
        <div class="card-block">
            <form action="/posts/{{$post->id}}/comments" method="POST">
            @csrf
                <div class="form-group">
                    <textarea required name="body" class="form-control" placeholder="Your Comment"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>
                @include ('Layouts/errors')
            </form>
        </div>
    </div>
    <!-- =====/Add a Comment Section===== -->
</div>
@endsection