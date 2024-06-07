@extends('admin.master')
@php
    $KaryawanCount = \App\Models\ModelKaryawan::count();
    $GajiCount = \App\Models\ModelGaji::count();
    // $supirCount = \App\Models\ModelSupir::count();
    // $gudangCount = \App\Models\ModelGudang::count();
@endphp
@section('content')
    <div class="pagetitle">
        <h1>Selamat Datang {{ session('username') }}!</h1>
    </div>
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col">
                <div class="row">
                    <!-- Karyawan Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Data Karyawan</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-vcard"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $KaryawanCount }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Karyawan Card -->

                    <!-- Gaji Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Data Gaji Karyawan</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cash-coin"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $GajiCount }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Gaji Card -->

                    {{-- <!-- Outlet Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Data Outlet</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-shop"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $outletCount }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Outlet Card -->

                    <!-- Pernikahan Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Data Supir </h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-vcard"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $supirCount }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Data Pernikahan Card --> --}}
                </div>
            </div>
    </section>
    </div>

    {{-- <script>
        // Set interval to update data every 5 seconds
        setInterval(function() {
            $.ajax({
                type: 'GET',
                url: '{{ route('dashboard.data') }}',
                success: function(data) {
                    $('#barang-count').text(data.barang_count);
                    $('#outlet-count').text(data.outlet_count);
                    $('#supir-count').text(data.supir_count);
                    $('#gudang-count').text(data.gudang_count);
                }
            });
        }, 5000);
    </script> --}}
@endsection
