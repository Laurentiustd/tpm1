@extends('template');

@section('title', 'View Books')

@section('body')
<form class="m-5" action="/storeBook" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Book Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="title">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Author Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="author">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Publish Date</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="date">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Stock</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="stock">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="image">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection