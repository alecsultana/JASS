@extends('master')

@section('title', $restaurant->name)

@section('content')

  <h3>{{ $restaurant->name }}</h3>
  <h4>{{ $restaurant->description }}</h4>

@endsection
