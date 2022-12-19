@extends('template');

@section('title', 'View Books')

@section('body')
<form class="m-5" action="/storeBook" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Book Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="title">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Publish Date</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="date">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Stock</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="stock">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection