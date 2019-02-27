@extends('posts.master')
@section('title', 'Home')
@section('content')
    <div class="col-lg-12">
        <h3>Simple CRUD with resource</h3>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="float-right">
                <a class="btn btn-xs btn-success" href="{{route('posts.create')}}">Create New Post</a>
            </div>
        </div>
    </div>


    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered text-center">
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Body</th>
            <th width="300px">Actions</th>
        </tr>

        @foreach($posts as $post)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>
                    <form action="{{route('posts.destroy', $post->id)}}" method="post">
                        <a href="{{route('posts.show', $post->id)}}" class="btn btn-xs btn-info">Show</a>
                        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-xs btn-primary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{$posts->links()}}

@endsection

