@extends('layouts.index')

@section('content')
    <h1>page Membre</h1>
    @foreach ($membres as $item)
        <p>{{$item->nom}}</p>
        <p>{{$item->age}}</p>
        <p>{{$item->image}}</p>
        <p>{{$item->genre}}</p>
    @endforeach
@endsection