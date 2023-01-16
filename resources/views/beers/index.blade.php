@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>
            Beers
        </h1>


        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Rating</th>
                <th scope="col">Image</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($beers as $beer)
                <tr>
                    <td>{{$beer->id}}</td>
                    <td>{{$beer->name}}</td>
                    <td>{{$beer->price}}</td>
                    <td>{{$beer->rating}}</td>
                    <td><img class="img-thumbnail" src="{{$beer->image}}" alt="{{$beer->name}}"></td>
                </tr>
                @endforeach


            </tbody>
          </table>

          {{$beers->links()}}
    </div>

@endsection
