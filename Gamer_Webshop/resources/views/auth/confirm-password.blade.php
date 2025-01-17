@extends('app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Jelszó megerősítése</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">Kérjük, erősítsd meg a jelszavad a folytatáshoz.</p>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="password" class="form-label">Jelszó</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autofocus autocomplete="current-password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Megerősítés</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
