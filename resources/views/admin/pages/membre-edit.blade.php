@extends('layouts.index')

@section('content')
    <h1>page Membre edit</h1>
    <form action="{{route('membre.update', $membre->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="nom">modification nom</label>
                <input type="text" name="nom" id="nom">
            </div>
            <div>
                <label for="age">modification age</label>
                <input type="text" name="age" id="age">
            </div>
            <div>
                <label for="image">modification image</label>
                <input type="text" name="image" id="image">
            </div>
            <div>
                <label for="genre">modification genre</label>
                <input type="text" name="genre" id="genre">
            </div>
            <button type="submit">modifier</button>

    </form>
@endsection