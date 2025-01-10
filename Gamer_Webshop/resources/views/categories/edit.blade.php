@extends('app')

@section('content')
    <h1>Kategória szerkesztése</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Név</label>
        <input type="text" name="name" id="name" value="{{ $category->name }}" required>

        <label for="description">Leírás</label>
        <textarea name="description" id="description">{{ $category->description }}</textarea>

        <button type="submit">Frissítés</button>
    </form>
@endsection
