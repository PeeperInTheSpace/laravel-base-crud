@extends('layouts.app')

@section('main_content')
    <h1>Crea un nuovo fumetto</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action=" {{route('comics.store')}} " method="post">
        @csrf

        <div>
            <label for="thumb">Copertina(url)</label>
            <br>
            <input type="text" name="thumb" id="thumb" value="{{old('thumb')}}">
        </div>
        <br>
        <div>
            <label for="title">Titolo fumetto</label>
            <br>
            <input type="text" name="title" id="title" value="{{old('title')}}">
        </div>
        <br>
        <div>
            <label for="series">Serie</label>
            <br>
            <input type="text" name="series" id="series" value="{{old('series')}}">
        </div>
        <br>
        <div>
            <label for="type">Tipologia</label>
            <br>
            <input type="text" name="type" id="type" value="{{old('type')}}">
        </div>
        <br>
        <div>
            <label for="description">Descrizione</label>
            <br>
            <textarea type="text" name="description" id="description">{{old('description')}}</textarea>
        </div>
        <br>
        <div>
            <label for="sale_date">Data di uscita</label>
            <br>
            <input type="text" name="sale_date" id="sale_date" value="{{old('sale_date')}}">
        </div>
        <br>
        <div>
            <label for="price">Prezzo</label>
            <br>
            <input type="text" name="price" id="price" value="{{old('price')}}">
        </div>
        <br>

        <button type="submit">Invia!</button>
    </form>
@endsection
