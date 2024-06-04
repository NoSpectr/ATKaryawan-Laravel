@extends('admin.form')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-10 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center py-4">
                <a href="" class="logo d-flex align-items-center w-auto">
                    <img src="{{ asset('assets/img/vas.png') }}" alt="">
                    <span class="d-none d-lg-block">ATKaryawan</span>
                </a>
            </div><!-- End Logo -->
            <div class="card w-100">
                <div class="card-body">
                    <div class="pt-4 pb-4">
                        <h5 class="card-title text-center pb-0 fs-4">Register</h5>
                    </div>

                    <form method="POST" action="{{ route('register') }}" class="row g-3 needs-validation" novalidate>
                        @csrf
                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Masukkan Username" required>
                                <div class="invalid-feedback">Silakan masukkan username anda!</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Masukkan Email" required>
                            <div class="invalid-feedback">Silakan masukkan email anda!</div>
                        </div>

                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password Minimal 8 Karakter!" required>
                            <div class="invalid-feedback">Silakan masukkan password anda!</div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Register</button>
                        </div>

                        <div class="col-12 text-center">
                            <p class="small mb-0">Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
