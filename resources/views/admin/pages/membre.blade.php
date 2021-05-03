@extends('layouts.index')

@section('content')
    <h1>page Membre</h1>
    @foreach ($membres as $item)
        <p>{{$item->nom}}</p>
        <p>{{$item->age}}</p>
        <p>{{$item->image}}</p>
        <p>{{$item->genre}}</p>
        <a href="{{route('membre.edit', $item->id)}}">modifier</a>
        <form action="{{route('membre.destroy', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">supprimer</button>
        </form>
        <hr>
    @endforeach
    <a href="{{route('membre.create')}}">create</a>
@endsection