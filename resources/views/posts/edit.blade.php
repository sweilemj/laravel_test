@extends('posts.app')

@section('content')
<h3>Edit Post</h3>


<form action="{{route('posts.update',$post->id)}}" method="post" >
    {{csrf_field()}}
    {{method_field('put')}}
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{$post->title}}" class="form-control" id="title" placeholder="Enter Title">
    </div>


    <div class="form-group">
        <label for="body">Post</label>
        <textarea rows="4" name="body"class="form-control"  placeholder="Enter Post">{{$post->body}}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Edit</button>
</form>




@endsection
