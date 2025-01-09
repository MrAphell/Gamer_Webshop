@extends('layouts.app')

@section('content')
    <h1>Rendelés szerkesztése</h1>
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="product_id">Termék</label>
        <select name="product_id" id="product_id" required>
            @foreach ($products as $product)
                <option value="{{ $product->id }}" {{ $order->product_id == $product->id ? 'selected' : '' }}>
                    {{ $product->name }}
                </option>
            @endforeach
        </select>

        <label for="quantity">Mennyiség</label>
        <input type="number" name="quantity" id="quantity" value="{{ $order->quantity }}" required>

        <button type="submit">Frissítés</button>
    </form>
@endsection
