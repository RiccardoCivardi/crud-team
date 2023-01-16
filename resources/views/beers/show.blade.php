@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>show</h1>
    <div class="card" style="width: 18rem;">
        <img src="{{$beer->image}}" class="card-img-top" alt="{{$beer->name}}">
        <div class="card-body">
            <h5 class="card-title">{{$beer->name}}</h5>
            <p class="card-text">Price: {{$beer->price}}</p>
            <p class="card-text">Rating: {{$beer->rating}}</p>
            <a href="{{route('beers.index')}}" class="btn btn-primary">Torna alla home</a>
        </div>
        </div>
    </div>
    
@endsection