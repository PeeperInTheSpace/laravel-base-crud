@extends('layouts.app')

@section('main_content')
    <h1>Modifica il fumetto</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('comics.update', ['comic' => $comic_to_update->id])}}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="thumb">Copertina(url)</label>
            <br>
            <input type="text" name="thumb" id="thumb" value="{{old('thumb') ? old('thumb') : $comic_to_update->thumb}}">
        </div>
        <br>
        <div>
            <label for="title">Titolo fumetto</label>
            <br>
            <input type="text" name="title" id="title" value="{{old('title') ? old('title') : $comic_to_update->title}}">
        </div>
        <br>
        <div>
            <label for="series">Serie</label>
            <br>
            <input type="text" name="series" id="series" value="{{old('series') ? old('series') : $comic_to_update->series}}">
        </div>
        <br>
        <div>
            <label for="type">Tipologia</label>
            <br>
            <input type="text" name="type" id="type" value="{{old('type') ? old('type') : $comic_to_update->type}}">
        </div>
        <br>
        <div>
            <label for="description">Descrizione</label>
            <br>
            <textarea type="text" name="description" id="description">{{old('description') ? old('description') : $comic_to_update->title}}</textarea>
        </div>
        <br>
        <div>
            <label for="sale_date">Data di uscita</label>
            <br>
            <input type="text" name="sale_date" id="sale_date" value="{{old('sale_date') ? old('sale_date') : $comic_to_update->sale_date}}">
        </div>
        <br>
        <div>
            <label for="price">Prezzo</label>
            <br>
            <input type="text" name="price" id="price" value="{{old('price') ? old('price') : $comic_to_update->price}}">
        </div>
        <br>

        <button type="submit">Conferma</button>
    </form>
@endsection
