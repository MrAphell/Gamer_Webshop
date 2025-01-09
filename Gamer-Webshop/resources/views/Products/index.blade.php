@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5">Termékek</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Új termék hozzáadása</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Termék neve</th>
                    <th>Ár</th>
                    <th>Készlet</th>
                    <th>Kategória</th>
                    <th>Akciók</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Szerkesztés</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
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
