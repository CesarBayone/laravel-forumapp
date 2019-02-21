@extends('layouts.app')        
@section('content')
    <h1>{{$title}}</h1>
    @if (count($services) > 0) 
        <ul class="list-group">
        @foreach ($services as $service)
        <li class="list-group-item">{{$service}}</li>
        @endforeach
    
    </ul>
    <p>These are some of the services we provide.</p>
    @endif
       
@endsection