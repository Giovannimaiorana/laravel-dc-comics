@extends('layouts.app')

@section('page-title', 'crea nuovo')

@section('content')
<div class="container">
    <div class="row">
        <form method="POST" action="{{route('comics.store')}}">

            @csrf

            <div class="mb-3">
                <label for="thumb" class="form-label">Link Immagine:</label>
                <input type="text" class="form-control" @error('thumb') is-invalid @enderror id="thumb" name="thumb" value="{{old('thumb')}}">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" class="form-control"  @error('title') is-invalid @enderror id="title" name="title" value="{{old('title')}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <input type="text" class="form-control"  @error('description') is-invalid @enderror id="description" name="description">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo:</label>
                <input type="number" step=".01" class="form-control"  @error('price') is-invalid @enderror id="price" name="price" value="{{old('price')}}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie:</label>
                <input type="text" class="form-control"  @error('series') is-invalid @enderror id="series" name="series" value="{{old('series')}}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo:</label>
                <input type="text" class="form-control"  @error('type') is-invalid @enderror id="type" name="type" value="{{old('type')}}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di rilascio:</label>
                <input type="date" class="form-control"  @error('sale_date') is-invalid @enderror id="sale_date" name="sale_date" value="{{old('sale_date')}}">
            </div>

            <button type="submit" class="btn btn-primary">Salva nuovo fumetto</button>

        </form>
    </div>
</div>
@endsection