@extends('layouts.index')

@section('content')
    <h1>page Genre create</h1>
    <form action="{{route('genre.store')}}" method="POST">
        @csrf
        <div>
            <label for="genre">creation sexe</label>
            <input type="text" name="genre" id="genre">
        </div>
        <button type="submit">envoyer</button>
    </form>
@endsection