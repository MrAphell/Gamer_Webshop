@extends('app')

@section('content')
    <div class="container mt-5">
        <h1>Rendelés szerkesztése</h1>

        <form action="{{ route('orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="product_id" class="form-label">Termék</label>
                <select name="product_id" id="product_id" class="form-select" required>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}" {{ $order->product_id == $product->id ? 'selected' : '' }}>
                            {{ $product->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="quantity" class="form-label">Mennyiség</label>
                <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $order->quantity }}" required>
            </div>

            <button type="submit" class="btn btn-success">Frissítés</button>
        </form>
    </div>
@endsection
