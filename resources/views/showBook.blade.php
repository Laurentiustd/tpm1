@extends('template')

@section('title', 'show book')
    
@section('body')

    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$Book->Judul}}</h5>
      <p class="card-text">{{$Book->PublishDate}}</p>
      <a href="#" class="btn btn-primary">{{$Book->stock}}</a>
    </div>
  </div>
    
@endsection

