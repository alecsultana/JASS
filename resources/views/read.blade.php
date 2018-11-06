@extends('master')

@section('title', 'Homepage')

@section('content')
  <a href="/admin/create">NEW</a>
  <table style="width:100%">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Slug</th>
      <th>Options</th>
    </tr>
    @foreach($restaurants as $restaurant)
      <tr>
        <td>{{ $restaurant->id }}</td>
        <td>{{ $restaurant->name }}</td>
        <td>{{ $restaurant->description}}</td>
        <td>{{ $restaurant->slug}}</td>
        <td><a href="/restaurant/{{ $restaurant->id }}">VIEW</a>
            <a href="/admin/edit/{{$restaurant->id}}">EDIT</a>

            <!--appending delete to an anchor tag is bad practce-->
            <a href="/delete/{{$restaurant->id}}">DELETE</a>
        </td>
      </tr>
    @endforeach
  </table>
@endsection
