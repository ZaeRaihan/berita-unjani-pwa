@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4">

            @if (session()->has('success'))
            <div class="alert alert-success" role="alert"> 
                {{ session('success') }}
            </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger" role="alert"> 
                {{ session('loginError') }}
            </div>
            @endif

            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Login Admin Berita</h1>
                <form action="/login" method="post">
                    @csrf {{-- wajib untuk setiap form agar aman dari xss --}}
                    <div class="form-floating">
                        <label for="username">Username</label>
                        <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                    <button class="btn btn-primary mt-3 w-100 py-2" type="submit">Login</button>
                </form>
                {{-- <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small> --}}
            </main>
        </div>
    </div>
</div>
@endsection
