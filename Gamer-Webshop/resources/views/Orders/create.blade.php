@extends('app')

@section('content')
    <h1>Új rendelés hozzáadása</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <label for="product_id">Termék</label>
        <select name="product_id" id="product_id" required>
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>

        <label for="quantity">Mennyiség</label>
        <input type="number" name="quantity" id="quantity" required>

        <button type="submit">Rendelés létrehozása</button>
    </form>
@endsection
