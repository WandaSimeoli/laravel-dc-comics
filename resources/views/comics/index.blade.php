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
        <th scope="col">Actions</th>
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
        <td> <a href="{{ route('comics.show',['comic'=>$comic->id])}}"  class="btn btn-info m-2">Look</a>
        <a href="{{ route('comics.edit',['comic'=>$comic->id])}}"  class="btn btn-warning m-2">Modify</a>
        <form action="{{ route('comics.destroy',['comic'=>$comic->id])}}" method="POST"
        onsubmit="return confirm('Are you sure?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger m-2">
            Delete
        </button>
        </form>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection