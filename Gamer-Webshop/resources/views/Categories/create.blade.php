@extends('layouts.app')

@section('content')
    <h1>Új kategória hozzáadása</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="name">Név</label>
        <input type="text" name="name" id="name" required>

        <label for="description">Leírás</label>
        <textarea name="description" id="description"></textarea>

        <button type="submit">Mentés</button>
    </form>
@endsection
