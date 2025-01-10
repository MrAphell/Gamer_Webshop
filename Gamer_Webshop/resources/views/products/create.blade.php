@extends('app')

@section('content')
    <div class="container mt-5">
        <h1>Új termék hozzáadása</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="name" class="form-label">Név</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="description" class="form-label">Leírás</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="price" class="form-label">Ár</label>
                <input type="number" name="price" id="price" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="stock" class="form-label">Készlet</label>
                <input type="number" name="stock" id="stock" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="category_id" class="form-label">Kategória</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Mentés</button>
        </form>
    </div>
@endsection
