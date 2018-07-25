@extends ('Layouts/master') 
@section ('content')
        <div class="col-sm-9" style="padding-top:30px">
            <form action="/posts" method="POST">
                @csrf
                <div class="form-group">
                    <label for="postTitle">Title</label>
                    <input name="postTitle" type="text" class="form-control" id="postTitle">
                </div>
                <div class="form-group">
                    <label for="postBody">Body</label>
                    <textarea name="postBody" id="postBody" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="postCategory">Category</label>
                    <input name="postCategory" type="text" class="form-control" id="postCategory">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                @include ('Layouts/errors')
            </form>
        </div>
@endsection