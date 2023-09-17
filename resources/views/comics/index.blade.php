@extends('layouts.mainpage')

@section('page-title', 'Comics-Index')

@section('main')
<div class="container-sm">
<h1> Comics Index</h1>
<a href="{{route('comics.create')}}" class="btn btn-primary mb-2">Add</a>
<table class="table">
    <thead>
        <tr>
        <th scope="col">Title</th>
        <th scope="col">Image</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Series</th>
        <th scope="col">Date</th>
        <th scope="col">Type</th>
        <th scope="col">Artist</th>
        <th scope="col">Writer</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach ($comics as $comic)
        <td>{{ $comic->title}}</td>
        <td> <img src="{{$comic->thumb}}" alt="" class="w-75"></td>
        <td> {{ $comic->description}}</td>
        <td> $ {{ $comic->price}}</td>
        <td>{{ $comic->series}}</td>
        <td>{{ $comic->sale_date}}</td>
        <td>{{ $comic->type}}</td>
        <td> {{ $comic->artists}}</td>
        <td> {{$comic->writers}}</td>
        <td> <a href="{{ route('comics.show',['comic'=>$comic->id])}}"  class="btn btn-info">Look</a> </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection