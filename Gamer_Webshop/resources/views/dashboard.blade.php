@extends('app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Üdvözöllek {{ Auth::user()->name }}!</h3>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h4 class="text-gray-900">Sikeresen bejelentkeztél a rendszerbe!</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
