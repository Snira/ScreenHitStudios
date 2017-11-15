@extends('layouts.app')

@section('content')
    <div style="margin-top: 20%" class="panel-heading"><h1>Nieuwe Post</h1></div>
    <div class="panel-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('admin.posts.store') }}">
            <div class="form-group">
                <label class="col-md-4 control-label" for="title">Title</label>
                <input required class="form-control" id="title" type="text" name="posts[title]">
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="body">Body</label>
                <input required class="form-control" id="body" type="text" name="posts[body]">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('admin.posts')}}" class="btn btn-default">Annuleer</a>
            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>




@endsection