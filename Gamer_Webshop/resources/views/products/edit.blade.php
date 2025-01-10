@extends('app')

@section('content')
    <h1>Termék szerkesztése</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Név</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required>

        <label for="description">Leírás</label>
        <textarea name="description" id="description" required>{{ $product->description }}</textarea>

        <label for="price">Ár</label>
        <input type="number" name="price" id="price" value="{{ $product->price }}" required>

        <label for="stock">Készlet</label>
        <input type="number" name="stock" id="stock" value="{{ $product->stock }}" required>

        <label for="category_id">Kategória</label>
        <select name="category_id" id="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Frissítés</button>
    </form>
@endsection
