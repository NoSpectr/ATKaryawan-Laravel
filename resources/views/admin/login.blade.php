@extends('admin.form') @section('content')
    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
        <div class="d-flex justify-content-center py-4">
            <a href="" class="logo d-flex align-items-center w-auto">
                <img src="{{ asset('assets/img/vas.png') }}" alt="">
                <span class="d-none d-lg-block">ATKaryawan</span>
            </a>
        </div><!-- End Logo -->
        {{-- Alert Success Update --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="card mb-3">
            <div class="card-body">
                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                </div>
                <form class="row g-3 needs-validation" method="post" action="{{ route('login') }}" novalidate>
                    @csrf
                    <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <input type="text" name="username" class="form-control" id="username"
                                placeholder="Masukkan Username" required>
                            <div class="invalid-feedback">Silakan masukkan nama pengguna anda!</div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Masukkan Password" required>
                        <div class="invalid-feedback">Silakan masukkan kata sandi anda!</div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12" align="center">
                        <p class="small mb-0">Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
                        <p class="small mb-0">Kembali ke <a href="{{ route('index') }}">halaman awal</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
