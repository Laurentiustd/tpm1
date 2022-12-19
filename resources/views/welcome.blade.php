@extends('template')

@section('title', 'welcome')

@section('body')


@foreach ($Book as $book)
    <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$book->Judul}}</h5>
      <p class="card-text">{{$book->PublishDate}}</p>
      <a href="/showBook/{{$book->id}}" class="btn btn-primary">{{$book->stock}}</a>
    </div>
  </div>
@endforeach


  {{-- {{$i = 1}}

  @if ($i > 0)
    {{$i}}
  @endif --}}

  {{-- @for ($i = 0; $i < 10; $i++)
    {{$i}}
  @endfor --}}

@endsection
