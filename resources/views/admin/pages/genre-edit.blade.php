@extends('layouts.index')

@section('content')
    <h1>page Genre edit</h1>
    <form action={{route('genre.update', $genre->id)}} method="POST">
       @csrf
        @method('PUT')
        <div>
            <label for="genre">modification genre</label>
            <input type="text" name="genre" id="genre">
        </div>
        <button type="submit">modifier</button>
    </form>
    
@endsection