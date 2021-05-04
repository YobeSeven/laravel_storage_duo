@extends('layouts.index')

@section('content')
    <h1>page Membre create</h1>
    <form action="{{route('membre.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nom">creation nom</label>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <label for="age">creation age</label>
            <input type="number" name="age" id="age" min="0" max="image">
        </div>
        <div>
            <label for="image">creation image</label>
            <input type="file" name="image" id="image">
        </div>
        <div>
            <label for="genre">creation genre</label>
            <select name="genre" id="">
                @foreach ($genres as $genre)
                    <option value="{{$genre->id}}"> {{$genre->genre}}</option>
                @endforeach
            </select>
            <button type="submit">envoyer</button>
        </div>

    </form>
@endsection