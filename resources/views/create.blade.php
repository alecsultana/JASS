@extends('master')

@section('title', 'Homepage')

@section('content')

  <form action="/store" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="description" placeholder="Description">
    {{ csrf_field() }}
    <button type="submit">Add</button>
  </form>

@endsection
