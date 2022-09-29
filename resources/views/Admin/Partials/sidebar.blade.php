<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ URL::to('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-database"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SPK MAUT</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active {{ Request::segment(1) === 'dashboard' ? 'active' : null }}">
        <a class="nav-link" href="{{ URL::to('dashboard') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>

    <!-- Nav Item - Data Alternatif -->
    <li class="nav-item {{ Request::segment(1) === 'data-alternatif' ? 'active' : null }}">
        <a class="nav-link" href="{{ URL::to('data-alternatif') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Alternatif</span></a>
    </li>

    <!-- Nav Item - Data Kriteria -->
    <li class="nav-item {{ Request::segment(1) === 'data-kriteria' ? 'active' : null }}">
        <a class="nav-link" href="{{ URL::to('data-kriteria') }}">
            <i class="fas fa-fw fa-box"></i>
            <span>Data Kriteria</span></a>
    </li>

    <!-- Nav Item - Data Sub Kriteria -->
    <li class="nav-item {{ Request::segment(1) === 'data-subkriteria' ? 'active' : null }}">
        <a class="nav-link" href="{{ URL::to('data-subkriteria') }}">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Data Sub Kriteria</span></a>
    </li>

    <!-- Nav Item - Data Penilaian -->
    <li class="nav-item {{ Request::segment(1) === 'data-penilaian' ? 'active' : null }}">
        <a class="nav-link" href="{{ URL::to('data-penilaian') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Data Penilaian</span></a>
    </li>

    <!-- Nav Item - Data Hasil Penilaian -->
    <li class="nav-item {{ Request::segment(1) === 'data-hasil-penilaian' ? 'active' : null }}">
        <a class="nav-link" href="{{ URL::to('data-hasil-penilaian') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Hasil Penilaian</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master User
    </div>

    <!-- Nav Item - Data User -->
    <li class="nav-item {{ Request::segment(1) === 'data-user' ? 'active' : null }}">
        <a class="nav-link" href="{{ URL::to('data-user') }}">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>Data User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Cetak Laporan
    </div>

    <!-- Nav Item - Cetak Laporan -->
    <li class="nav-item {{ Request::segment(1) === 'cetak-laporan' ? 'active' : null }}">
        <a class="nav-link" href="{{ URL::to('cetak-laporan') }}">
            <i class="fas fa-fw fa-print"></i>
            <span>Cetak Laporan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
