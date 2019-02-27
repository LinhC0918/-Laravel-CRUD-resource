@extends('posts.master')
@section('title', 'Create')
@section('content')
    <div class="col-lg-12">
        <h3>Add New Post</h3>
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

    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea name="body" rows="3" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection

