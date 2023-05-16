@extends('layouts.app')


@section('page-title','Dc Comics')


@section('content')
@foreach ($comics as $comic)
<div class="card" style="width: 18rem;">
    <img src="{{$comic->thumb}}" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">{{$comic->title}}</h5>
      <p class="card-text">{{$comic->description}}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{$comic->series}}</li>
      <li class="list-group-item">{{$comic->sale_date}}</li>
      <li class="list-group-item">{{$comic->price}}</li>
    </ul>
    <div class="card-body">
      <a href="#" class="btn">Card link</a>

    </div>
  </div>
@endforeach


@endsection