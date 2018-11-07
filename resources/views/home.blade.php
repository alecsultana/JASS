@extends('master')

@section('title', 'Homepage')

@section('content')

  <form action="/create" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="description" placeholder="Description">
    {{ csrf_field() }}
    <button type="submit">Add</button>
  </form>

  <br>

  Top Restaurants:

  <ul>
        @foreach($restaurants as $restaurant)
            <li>
              <strong>{{ $restaurant->name }}</strong>
              <br> {{ $restaurant->description}}
              <br>
              <a href="/restaurant/{{ $restaurant->id}}">View</a>
            </li>
        @endforeach
  </ul>

@endsection
