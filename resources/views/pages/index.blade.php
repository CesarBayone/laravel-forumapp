@extends('layouts.app')        
@section('content')
    
    <div class="jumbotron text-center">
    <h1>Welcome to {{config("app.name", "Laravel-Forumapp")}}</h1>
    <p>My first app in Laravel. </p>
    <p><a href="/register" class="btn btn-primary btn-lg m-1" role="button">Register</a><a href="/login" class="btn btn-success btn-lg m-1" role="button">Login</a></p>
    </div> 
@endsection