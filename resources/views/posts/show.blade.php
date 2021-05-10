@extends('pages.layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default btn-lg"> &lt Go Back</a>
   
    
    <div class="container col-md-8 text-center">
    <h1>{{$post->title}}</h1>
    <img src="{{ asset('storage/cover_images/'.$post->cover_image) }}" style="width:75%"></img>
    
    
    <div>
        {!!$post->body!!}
    </div>
    
    <hr>
    <small>Written on {{$post->created_at}}  by<b> {{$post->user->name}}<b></small>
           </div>

    <hr>
    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
         <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>

         {!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
         {{Form::hidden('_method','DELETE')}}
         {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
         {!!Form::close()!!}
    @endif
    @endif
@endsection