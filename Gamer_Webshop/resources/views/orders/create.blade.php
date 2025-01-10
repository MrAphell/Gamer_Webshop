@extends('app')

@section('content')
    <div class="container mt-5">
        <h1>Új rendelés hozzáadása</h1>

        <form action="{{ route('orders.store') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="product_id" class="form-label">Termék</label>
                <select name="product_id" id="product_id" class="form-select" required>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="quantity" class="form-label">Mennyiség</label>
                <input type="number" name="quantity" id="quantity" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Rendelés létrehozása</button>
        </form>
    </div>
@endsection
