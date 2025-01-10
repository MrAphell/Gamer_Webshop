@extends('app')

@section('content')
    <div class="container mt-5">
        <h1>Új kategória hozzáadása</h1>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="name" class="form-label">Név</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="description" class="form-label">Leírás</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Mentés</button>
        </form>
    </div>
@endsection
