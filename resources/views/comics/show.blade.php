@extends('layouts.app')

@section('main_content')
    <h1>Dettagli fumetto</h1>

    <img src=" {{$selected_comic->thumb}} " alt="{{$selected_comic->title}}">

    <h2>{{$selected_comic->title}}</h2>

    <h3><span>{{$selected_comic->series}}<span> | <span>{{$selected_comic->type}}</span></h3>

    <p>{{$selected_comic->description}}</p>

    <h4><small>{{$selected_comic->sale_date}}</small> | <small>Euro: {{$selected_comic->price}}</small></h4>

    <br><br>

    <a href="{{ route('comics.edit', ['comic' => $selected_comic->id]) }}">Modifica</a>

    <form action="{{ route('comics.destroy', ['comic' => $selected_comic->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Elimina</button>
    </form>
@endsection
