@extends('layouts.app')

@section('main_content')
    <h1>Crea un nuovo fumetto</h1>
    <form action=" {{route('comics.store')}} " method="post">
        @csrf

        <div>
            <label for="thumb">Copertina(url)</label>
            <br>
            <input type="text" name="thumb" id="thumb">
        </div>
        <br>
        <div>
            <label for="title">Titolo fumetto</label>
            <br>
            <input type="text" name="title" id="title">
        </div>
        <br>
        <div>
            <label for="series">Serie</label>
            <br>
            <input type="text" name="series" id="series">
        </div>
        <br>
        <div>
            <label for="type">Tipologia</label>
            <br>
            <input type="text" name="type" id="type">
        </div>
        <br>
        <div>
            <label for="description">Descrizione</label>
            <br>
            <textarea type="text" name="description" id="description"></textarea>
        </div>
        <br>
        <div>
            <label for="sale_date">Data di uscita</label>
            <br>
            <input type="text" name="sale_date" id="sale_date">
        </div>
        <br>
        <div>
            <label for="price">Prezzo</label>
            <br>
            <input type="text" name="price" id="price">
        </div>
        <br>

        <button type="submit">Invia!</button>
    </form>
@endsection
