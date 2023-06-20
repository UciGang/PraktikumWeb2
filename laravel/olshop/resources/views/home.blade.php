@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 style="text-align: center">Selamat Datang {{ Auth::user()->name }} Registrasi Berhasil</h2>
                <h4 style="text-align: center">Antum Logout duls biar sabi masuk Dashboard</h4>
            </div>
        </div>
    </div>
@endsection
