@extends('layouts.app')

@section('page-title')
 pasta:{{ $comic->title }}
@endsection

@section('content')
  
    <div class="row w-50">
       
       <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <h2>{{$comic->title}}</h2>
        <p>Tipo: {{$comic->type}}</p>
        <p>Serie: {{$comic->series}}</p>
        <p>Data di rilascio: {{$comic->sale_date}}</p>
        <p>Prezzo: {{$comic->price}}</p>
        <p>Descrizione: <br />{{$comic->description}}</p>
       
    <a href="{{route('comics.index')}}" class="btn btn-primary">Torna all'elenco completo</a>

@endsection