@extends('layouts.mainpage')

@section('page-title', 'Add new Comic')

@section('main')
<div class="container-sm">
<h1> Add new Comic</h1>
<form action="{{ route('comics.store')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="inputTitle" class="form-label">Title</label>
    <input type="text" class="form-control" id="inputTitle" name="title" placeholder="Enter value">
  </div>
  <div class="mb-3">
  <label class="form-label" for="inputImage">Image</label>
  <input type="text" class="form-control" id="inputImage" name="thumb" placeholder="Enter url">
</div>
  <div class="mb-3">
    <label for="inputDescription" class="form-label" >Description</label>
    <input type="text" class="form-control" id="inputDescription" name="description" placeholder="Enter value">
  </div>
  <div class="mb-3">
    <label for="inputPrice" class="form-label" >Price</label>
    <input type="text" class="form-control" id="inputPrice" name="price" placeholder="Enter value">
  </div>
  <div class="mb-3">
    <label for="inputSeries" class="form-label" >Series</label>
    <input type="text" class="form-control" id="inputSeries" name="series" placeholder="Enter value">
  </div>
  <div class="mb-3">
    <label for="inputDate" class="form-label" >Date</label>
    <input type="date" class="form-control" id="inputDate" name="sale_date" placeholder="Enter value">
  </div>
  <div class="mb-3">
    <label for="inputType" class="form-label" >Type</label>
    <input type="text" class="form-control" id="inputType" name="type" placeholder="Enter value">
  </div>
  <div class="mb-3">
    <label for="inputArtist" class="form-label" >Artist</label>
    <input type="text" class="form-control" id="inputArtist" name="artists" placeholder="Enter value">
  </div>
  <div class="mb-3">
    <label for="inputWriter" class="form-label" >Writer</label>
    <input type="text" class="form-control" id="inputWriter" name="writers" placeholder="Enter value">
  </div>
  <button type="submit" class="btn btn-success">Add</button>
</form>
</div>

@endsection