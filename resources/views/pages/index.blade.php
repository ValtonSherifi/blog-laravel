@extends('pages.layouts.app')

@section('content')
        <div class="jumbotron text-center">
        <h1>Welcome To Laravel</h1>
        <p>This is the laravel application, Welcome.</p>
        @if(Auth::user())
<button>Welcome, {{ Auth::user()->name }}. Please explore/post stuff, thank you!</button>
@else
 <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p> 
@endif
       
        </div>
 @endsection  
