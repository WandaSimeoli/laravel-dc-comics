@extends('layouts.mainpage')

@section('page-title', 'Add new Comic')

@section('main')
<h1 class="text-center"> Add new Comic</h1>
<form action="{{ route('comics.store')}}" method="POST" class="container-sm">
    @csrf
  <div class="mb-3">
    <label for="inputTitle" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror"  id="inputTitle" name="title" 
    placeholder="Enter title" value="{{old('title')}}">
  </div>
  @error('title')
      <div class="alert alert-danger">
        {{$message}}
        @enderror
      </div>
  <div class="mb-3">
  <label class="form-label" for="inputImage">Image</label>
  <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="inputImage" name="thumb" 
  placeholder="Enter url" value="{{old('thumb')}}">
</div>
@error('thumb')
      <div class="alert alert-danger">
        {{$message}}
        @enderror
      </div>
  <div class="mb-3">
    <label for="inputDescription" class="form-label" >Description</label>
    <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Enter description" id="inputDescription" style="height: 100px" 
    name="description" value="{{old('description')}}"></textarea>
  </div>
  @error('description')
      <div class="alert alert-danger">
        {{$message}}
        @enderror
      </div>
  <div class="mb-3">
    <label for="inputPrice" class="form-label" >Price</label>
    <input type="number" class="form-control @error('price') is-invalid @enderror" id="inputPrice" name="price" 
    placeholder="Enter price" value="{{old('price')}}">
  </div>
  @error('price')
      <div class="alert alert-danger">
        {{$message}}
        @enderror
      </div>
  <div class="mb-3">
    <label for="inputSeries" class="form-label" >Series</label>
    <input type="text" class="form-control @error('series') is-invalid @enderror" id="inputSeries" name="series" 
    placeholder="Enter series" value="{{old('series')}}">
  </div>
  @error('series')
      <div class="alert alert-danger">
        {{$message}}
        @enderror
      </div>
  <div class="mb-3">
    <label for="inputDate" class="form-label" >Date</label>
    <input type="date" class="form-control @error('date') is-invalid @enderror" id="inputDate" name="sale_date" 
    placeholder="Enter date" value="{{old('date')}}">
  </div>
  @error('sale_date')
      <div class="alert alert-danger">
        {{$message}}
        @enderror
      </div>
  <div class="mb-3">
    <label for="inputType" class="form-label" >Type</label>
    <input type="text" class="form-control @error('type') is-invalid @enderror" id="inputType" name="type" 
    placeholder="Enter type" value="{{old('type')}}">
  </div>
  @error('type')
      <div class="alert alert-danger">
        {{$message}}
        @enderror
      </div>
  <div class="mb-3">
    <label for="inputArtist" class="form-label" >Artist</label>
    <input type="text" class="form-control @error('artists') is-invalid @enderror" id="inputArtist" name="artists" 
    placeholder="Enter artists" value="{{old('artists')}}">
  </div>
  @error('artists')
      <div class="alert alert-danger">
        {{$message}}
        @enderror
      </div>
  <div class="mb-3">
    <label for="inputWriter" class="form-label" >Writer</label>
    <input type="text" class="form-control @error('writers') is-invalid @enderror" id="inputWriter" name="writers" 
    placeholder="Enter writers" value="{{old('writers')}}">
  </div>
  @error('writers')
      <div class="alert alert-danger">
        {{$message}}
        @enderror
      </div>
  <button type="submit" class="btn btn-success">Add</button>
</form>
  

@endsection