@extends('template');


@section('title', 'Edit Books')


@section('body')

<form action="/updateBook/{{$Book->id}}" method="POST" class="m-5" enctype="multipart/form-data">
    <h1>Edit Book</h1>
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" class="form-control" value="{{$Book->Judul}}" name="title">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label" >Author Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="author">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Publish Date</label>
      <input type="date" class="form-control" id="exampleInputPassword1" value="{{$Book->PublishDate}}" name="date">
    </div>
    <div class="mb-3">
        <label>Stock</label>
      <input type="text" class="form-control"  value="{{$Book->stock}}" name="stock">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">image</label>
      <input type="file" class="form-control" id="exampleInputPassword1" name="image">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  

  @endsection