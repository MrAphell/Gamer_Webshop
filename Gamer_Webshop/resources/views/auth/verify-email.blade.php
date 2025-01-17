@extends('app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Email Cím Ellenőrzése</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        Köszönjük, hogy regisztráltál! Mielőtt elkezdenéd használni az alkalmazást, kérlek ellenőrizd az email címedet az általunk küldött link segítségével. Ha nem kaptál emailt, újraküldheted a megerősítő linket.
                    </p>

                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success">
                            Egy új ellenőrző linket küldtünk a regisztráció során megadott email címedre.
                        </div>
                    @endif

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">Ellenőrző Email Újraküldése</button>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link">Kijelentkezés</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
