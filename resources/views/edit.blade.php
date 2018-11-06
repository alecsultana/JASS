@extends('master')

@section('title', 'Homepage')

@section('content')

  <form action="/store" method="post">
    <input type="hidden" name="id" value="{{ $restaurant->id }}">
    <input type="text" name="name" value="{{ $restaurant->name }}" placeholder="Name">
    <input type="text" name="description" value="{{ $restaurant->description}}" placeholder="Description">
    {{ csrf_field() }}
    <button type="submit">Update</button>
  </form>

@endsection
