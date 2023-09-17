@extends('layouts.mainpage')

@section('page-title', 'Modified' .$comic->title)

@section('main')
<div class="container-sm bg-warning">
<h1> Modify Comic</h1>
<form action="{{ route('comics.update', ['comic'=>$comic->id])}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="inputTitle" class="form-label">Title</label>
    <input type="text" class="form-control" id="inputTitle" name="title" placeholder="Enter value" value="{{$comic->title}}">
  </div>
  <div class="mb-3">
  <label class="form-label" for="inputImage">Image</label>
  <input type="text" class="form-control" id="inputImage" name="thumb" placeholder="Enter url" value="{{$comic->thumb}}">
</div>
  <div class="mb-3">
    <label for="inputDescription" class="form-label" >Description</label>
    <input type="text" class="form-control" id="inputDescription" name="description" placeholder="Enter value" value="{{$comic->description}}">
  </div>
  <div class="mb-3">
    <label for="inputPrice" class="form-label" >Price</label>
    <input type="text" class="form-control" id="inputPrice" name="price" placeholder="Enter value" value="{{$comic->price}}">
  </div>
  <div class="mb-3">
    <label for="inputSeries" class="form-label" >Series</label>
    <input type="text" class="form-control" id="inputSeries" name="series" placeholder="Enter value" value="{{$comic->series}}">
  </div>
  <div class="mb-3">
    <label for="inputDate" class="form-label" >Date</label>
    <input type="date" class="form-control" id="inputDate" name="sale_date" placeholder="Enter value" value="{{$comic->sale_date}}">
  </div>
  <div class="mb-3">
    <label for="inputType" class="form-label" >Type</label>
    <input type="text" class="form-control" id="inputType" name="type" placeholder="Enter value" value="{{$comic->type}}">
  </div>
  <div class="mb-3">
    <label for="inputArtist" class="form-label" >Artist</label>
    <input type="text" class="form-control" id="inputArtist" name="artists" placeholder="Enter value" value="{{$comic->artists}}">
  </div>
  <div class="mb-3">
    <label for="inputWriter" class="form-label" >Writer</label>
    <input type="text" class="form-control" id="inputWriter" name="writers" placeholder="Enter value" value="{{$comic->writers}}">
  </div>
  <button type="submit" class="btn btn-success">Update</button>
</form>
</div>

@endsection