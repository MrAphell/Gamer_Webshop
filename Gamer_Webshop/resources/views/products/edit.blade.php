@extends('app')

@section('content')
    <div class="container mt-5">
        <h1>Termék szerkesztése</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="name" class="form-label">Név</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="description" class="form-label">Leírás</label>
                <textarea name="description" id="description" class="form-control" required>{{ $product->description }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="price" class="form-label">Ár</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="stock" class="form-label">Készlet</label>
                <input type="number" name="stock" id="stock" class="form-control" value="{{ $product->stock }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="category_id" class="form-label">Kategória</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Frissítés</button>
        </form>
    </div>
@endsection
