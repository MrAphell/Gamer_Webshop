@extends('app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 mb-4 text-center">
                <h2 class="font-weight-bold">Profil</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 mb-4">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        Profil információk frissítése
                    </div>
                    <div class="card-body">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <div class="col-md-8 mb-4">
                <div class="card shadow-lg">
                    <div class="card-header bg-warning text-white">
                        Jelszó frissítése
                    </div>
                    <div class="card-body">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <div class="col-md-8 mb-4">
                <div class="card shadow-lg">
                    <div class="card-header bg-danger text-white">
                        Fiók törlése
                    </div>
                    <div class="card-body">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
