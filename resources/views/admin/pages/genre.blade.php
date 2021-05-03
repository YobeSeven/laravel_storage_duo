@extends('layouts.index')

@section('content')
    <h1>page Genre</h1>
    @foreach ($genres as $item)
        <p>{{$item->genre}}</p>
        <a href={{route('genre.edit', $item->id)}}>modifier</a>
        <form action="{{route('genre.destroy',$item->id)}}" method="POST">
         @csrf
         @method('DELETE')
         <button type="submit">supprimer</button>
        </form>
        <hr>
    @endforeach
    <a href={{route('genre.create')}}>create</a>
    
@endsection