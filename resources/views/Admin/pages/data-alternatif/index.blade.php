@extends('Admin.Layouts.main')

@section('addOnCSS')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
@endsection

@section('content-wrapper')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">
                <i class="fas fa-users me-1"></i>
                Data Alternatif
            </h1>
            <a href="#" class="btn btn-primary">
                <i class="fas fa-plus me-1"></i>
                Tambah Data Alternatif
            </a>
        </div>

        <!-- Content Row -->
        <div class="card">
            <div class="card-header bg-white text-primary fw-bold">
                <i class="fas fa-info-circle me-1"></i>
                Informasi Data Alternatif
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="dataTable" style="width: 100%;">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="align-middle text-center">No.</th>
                            <th class="align-middle text-center">Kode Alternatif</th>
                            <th class="align-middle text-center">Nama Alternatif</th>
                            <th class="align-middle text-center">Link Alternatif</th>
                            <th class="align-middle text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle text-center">1</td>
                            <td class="align-middle text-center">A01</td>
                            <td class="align-middle text-center">Pelanggan 1</td>
                            <td class="align-middle text-center"><a href="https://google.com">Klik Disini</a></td>
                            <td class="align-middle text-center">
                                <div class="btn-group" role="group">
                                    <a href="#" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('addOnJS')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="{{ URL::to('bin/js/script.js') }}"></script>
@endsection
