@extends('app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Jelszó visszaállítás</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">Elfelejtetted a jelszavad? Semmi gond. Add meg az email címed, és elküldünk egy jelszó visszaállítási linket, amellyel új jelszót állíthatsz be.</p>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email cím</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Jelszó visszaállítási link küldése</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
