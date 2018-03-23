@extends('posts.app')

@section('content')
 <h3>Add New Post</h3>


 <form action="{{route('posts.store')}}" method="post">
     {{csrf_field()}}
 <div class="form-group">
<label for="title">Title</label>
     <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
 </div>


 <div class="form-group">
<label for="body">Post</label>
   <textarea rows="4" name="body"class="form-control"  placeholder="Enter Post"></textarea>
 </div>

 <button type="submit" class="btn btn-success">Add</button>
 </form>




@endsection
