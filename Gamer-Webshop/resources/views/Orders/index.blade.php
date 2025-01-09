@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-5">Rendelések</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Új rendelés hozzáadása</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Termék</th>
                <th>Mennyiség</th>
                <th>Teljes ár</th>
                <th>Rendelés dátuma</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->product->name }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->total_price }}</td>
                    <td>{{ $order->order_date }}</td>
                    <td>
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Törlés</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
