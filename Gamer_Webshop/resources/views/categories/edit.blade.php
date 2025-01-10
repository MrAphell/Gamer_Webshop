@extends('app')

@section('content')
    <div class="container mt-5">
        <h1>Kategória szerkesztése</h1>

        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="name" class="form-label">Név</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="description" class="form-label">Leírás</label>
                <textarea name="description" id="description" class="form-control" required>{{ $category->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Frissítés</button>
        </form>
    </div>
@endsection
