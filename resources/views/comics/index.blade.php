@extends('layouts.app')

@section('main_content')

    <h1>Lista dei fumetti</h1>
    <ul>
        @foreach ($comics_list as $comic)
            <li>
                <hr>
                <a href=" {{route('comics.show', ['comic' => $comic->id]) }} "><h2> {{$comic->title}} </h2></a>
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                <p> {{$comic->description}} </p>
                <hr><br><br>
            </li>
        @endforeach
    </ul>

@endsection
