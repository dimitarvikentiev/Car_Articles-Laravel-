@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create post
                </div>
                <div class="panel-body">
                    <form enctype="multipart/form-data" action="/posts" method="POST">
                        {{ csrf_field() }}

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" required>
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control" rows="10" cols="1000" required></textarea>
                            <label for="image">Choose a image</label>
                            <input type="file" name="image">
                        </div>

                        <input type="submit" class="btn-btn-success pull-right">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection