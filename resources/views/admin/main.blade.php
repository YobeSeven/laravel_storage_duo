@extends('layouts.index')

@section('content')
    <h1>page admin</h1>
    <nav>
        <ul>
            <li><a href="">Membre</a></li>
            <li><a href={{route('genre.index')}}>Genre</a></li>
        </ul>
    </nav>
@endsection