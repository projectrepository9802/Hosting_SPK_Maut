@extends('Admin.Layouts.main')

@section('content-wrapper')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">
                <i class="fas fa-home me-1"></i>
                Dashboard
            </h1>
        </div>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Selamat datang <strong>Administrator!</strong> Anda bisa mengoperasikan sistem dengan wewenang tertentu melalui
            pilihan di bawah.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-4 col-md-8 mb-4">
                <div class="card border-left-danger shadow h-100 py-2 card-clickable">
                    <div class="card-body">
                        <div class="row no-gutters d-flex align-items-center" style="height: 100%;">
                            <div class="col mr-2 align-middle">
                                <div class="font-weight-bold text-secondary h5">
                                    Data Alternatif</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <a href="{{ URL::to('data-alternatif') }}" class="btn btn-transparent stretched-link p-0 m-0"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-8 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters d-flex align-items-center" style="height: 100%;">
                            <div class="col mr-2 align-middle">
                                <div class="font-weight-bold text-secondary h5">
                                    Data Kriteria</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-box fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <a href="{{ URL::to('data-kriteria') }}" class="btn btn-transparent stretched-link p-0 m-0"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-8 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters d-flex align-items-center" style="height: 100%;">
                            <div class="col mr-2 align-middle">
                                <div class="font-weight-bold text-secondary h5">
                                    Data Sub Kriteria</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-boxes fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <a href="{{ URL::to('data-subkriteria') }}" class="btn btn-transparent stretched-link p-0 m-0"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-8 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters d-flex align-items-center" style="height: 100%;">
                            <div class="col mr-2 align-middle">
                                <div class="font-weight-bold text-secondary h5">
                                    Data Penilaian</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <a href="{{ URL::to('data-penilaian') }}" class="btn btn-transparent stretched-link p-0 m-0"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-8 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters d-flex align-items-center" style="height: 100%;">
                            <div class="col mr-2 align-middle">
                                <div class="font-weight-bold text-secondary h5">
                                    Data Hasil Penilaian</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <a href="{{ URL::to('data-hasil-penilaian') }}"
                            class="btn btn-transparent stretched-link p-0 m-0"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-8 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters d-flex align-items-center" style="height: 100%;">
                            <div class="col mr-2 align-middle">
                                <div class="font-weight-bold text-secondary h5">
                                    Cetak Laporan</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-print fa-2x text-gray-300"></i>
                            </div>
                        </div>
                        <a href="{{ URL::to('cetak-laporan') }}" class="btn btn-transparent stretched-link p-0 m-0"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
