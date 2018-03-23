@extends('posts.app')

@section('content')
    <h3>{{$post->title}}</h3>
    <text>{{$post->created_at}}</text>
    <hr>


    <p>{{$post->body}}</p>





@endsection
