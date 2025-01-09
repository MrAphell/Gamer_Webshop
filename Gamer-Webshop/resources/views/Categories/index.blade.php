@extends('layouts.app')

@section('content')
    <h1>Kategóriák</h1>
    <a href="{{ route('categories.create') }}">Új kategória hozzáadása</a>

    <table>
        <thead>
            <tr>
                <th>Kategória neve</th>
                <th>Leírás</th>
                <th>Akciók</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}">Szerkesztés</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Törlés</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
