@extends('template')

@section('title', 'show book')
    
@section('body')

    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$Book->Judul}}</h5>
      <h5 class="card-title">{{$Book->Penulis}}</h5>
      <p class="card-text">{{$Book->PublishDate}}</p>
      <a href="#" class="btn btn-primary">{{$Book->stock}}</a>
      <a href="/editBook/{{$Book->id}}">Edit</a>
      <form action="/deleteBook/{{$Book->id}}" method="POST">
        @csrf
        @method('delete')
        <button>Delete</button>
      </form>
    </div>
  </div>
    
@endsection

