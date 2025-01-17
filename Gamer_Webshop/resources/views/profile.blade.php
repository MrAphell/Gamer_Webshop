@extends('app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Profilom</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Név:</strong> {{ $user->name }}
                        </li>
                        <li class="list-group-item">
                            <strong>Email:</strong> {{ $user->email }}
                        </li>
                        <li class="list-group-item">
                            <strong>Csatlakozás dátuma:</strong> {{ $user->created_at->format('Y-m-d') }}
                        </li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('profile.edit') }}" class="btn btn-warning">Profil szerkesztése</a>
                </div>
            </div>
        </div>
    </div>
@endsection
