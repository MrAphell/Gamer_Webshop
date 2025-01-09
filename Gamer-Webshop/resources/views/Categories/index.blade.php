@extends('app')

@section('content')
<div class="container">
    <h1 class="mt-5 text-center">Kategóriák</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Új kategória hozzáadása</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kategória neve</th>
                <th>Leírás</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Szerkesztés</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Törlés</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
