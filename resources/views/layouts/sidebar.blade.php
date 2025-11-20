<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text mx-3">SIMRS</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('pasien.index') }}">
            <i class="fas fa-fw fa-user-injured"></i>
            <span>Pasien</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('dokter.index') }}">
            <i class="fas fa-fw fa-user-md"></i>
            <span>Dokter</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('rekam-medis.index') }}">
            <i class="fas fa-fw fa-notes-medical"></i>
            <span>Rekam Medis</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('spesialis.index') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Master Spesialis</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('metode.index') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Metode Pembayaran</span>
        </a>
    </li>

</ul>