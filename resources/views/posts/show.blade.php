@extends('posts.master')
@section('title', 'Show')
@section('content')
    <div>
        <strong>Title</strong>
        <p>{{$post->title}}</p>
    </div>
    <div>
        <strong>Body</strong>
        <p>{{$post->body}}</p>
    </div>
    <div>
        <a class="btn btn-dark" href="{{route('posts.index')}}">Back</a>
    </div>
@endsection

