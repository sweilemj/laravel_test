@extends('posts.app')

@section('content')
    <h3>All Posts</h3> <a href="{{route('posts.create')}}">Add new Post</a>

@if(count($posts)>0)
    <table class="table table-bordered">

       <tr>
           <th>#</th>
           <th>Title</th>
           <th>Edit</th>
           <th>Delete</th>
       </tr>


     @foreach($posts as $post)
       <tr>
           <td> {{$post->id}} </td>
           <td><a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a> </td>

           <td><a href="{{route('posts.edit',$post->id)}}"> <button class="btn btn-info">Edit</button> </a> </td>


           <td>

               <form action="{{route('posts.destroy',$post->id)}}" method="post">
                   {{csrf_field()}}
                   <input type="hidden" name="_method" value="delete" />
            <button class="btn btn-danger">Delete</button>

               </form>

           </td>
        </tr>

  @endforeach
    </table>
@else
    Not found posts
    @endif


@endsection
