@extends('layouts.app')

@section('content')
    <h1>Rendelések</h1>
    <a href="{{ route('orders.create') }}">Új rendelés hozzáadása</a>

    <table>
        <thead>
            <tr>
                <th>Termék</th>
                <th>Mennyiség</th>
                <th>Teljes ár</th>
                <th>Rendelés dátuma</th>
                <th>Akciók</th>
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
                            <button type="submit">Törlés</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
