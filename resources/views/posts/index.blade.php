@extends('pages.layouts.app')

@section('content')
    <h1>Posts</h1>
    
    @if(count($posts)>0)
        @foreach ($posts as $post)
            <div class="card">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="{{ asset('storage/cover_images/'.$post->cover_image) }}" style="width:100%"></img>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                       <small style="float:right; bottom:0;">Written on {{$post->created_at}} by<b> {{$post->user->name}}<b></small>
                    </div>
                </div>

                
            </div>   
        @endforeach
        <div class="d-flex justify-content-center">
            {!! $posts->links() !!}
        </div>
    @else 
        <p>No posts found</p>
    @endif

@endsection