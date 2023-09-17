@extends('layouts.mainpage')

@section('page-title', $comic->title)

@section('main')
<h1> {{ $comic->title}}</h1>
<div class="container-sm">
<table class="table">
    <thead>
        <tr>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Series</th>
        <th scope="col">Date</th>
        <th scope="col">Type</th>
        <th scope="col">Artist</th>
        <th scope="col">Writer</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>{{ $comic->title}}</td>
        <td> {{ $comic->description}}</td>
        <td> $ {{ $comic->price}}</td>
        <td>{{ $comic->series}}</td>
        <td>{{ $comic->sale_date}}</td>
        <td>{{ $comic->type}}</td>
        <td> {{ $comic->artists}}</td>
        <td> {{$comic->writers}}</td>
        </tr>
    </tbody>
    </table>
</div>

@endsection