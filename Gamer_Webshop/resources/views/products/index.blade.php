@extends('app')

@section('content')
    <div class="container">
        <h1 class="mt-5 text-center">Termékek</h1>

        @auth
            <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Új termék hozzáadása</a>
        @endauth

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Termék neve</th>
                    <th>Ár</th>
                    <th>Készlet</th>
                    <th>Kategória</th>
                    <th>Műveletek</th>
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
                            @auth
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Szerkesztés</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Törlés</button>
                                </form>
                            @endauth
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
