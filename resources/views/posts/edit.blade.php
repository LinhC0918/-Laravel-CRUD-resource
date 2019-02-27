@extends('posts.master')
@section('title', 'Edit')
@section('content')
    <div class="col-lg-12">
        <h3>Edit Post</h3>
    </div>

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whooops! </strong> There were some problems with your input.<br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('posts.update', $post->id)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" value="{{$post->title}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea name="body" rows="3" class="form-control">{{$post->body}}</textarea>
        </div>
        <a class="btn btn-dark" href="{{route('posts.index')}}">Back</a>
        <button type="submit" class="btn btn-success">Edit</button>
    </form>
@endsection

