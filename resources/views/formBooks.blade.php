@extends('template');

@section('title', 'View Books')

@section('body')
<form class="m-5" action="/storeBook" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Book Name</label>
    <input type="text" class="form-control @error('Judul') is-invalid @enderror" id="exampleInputEmail1" name="title" value="{{old('Judul')}}">
    @error('Judul')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Author Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="author">
    @error('author')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Publish Date</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="date">
    @error('date')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Stock</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="stock">
    @error('stock')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="image">
    @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Category</label>
    <select class="form-select" aria-label="Default select example" name="category">
      @foreach ($category as $i)
          <option value="{{$i->id}}">{{$i->nama}}</option>
      @endforeach
    </select>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection