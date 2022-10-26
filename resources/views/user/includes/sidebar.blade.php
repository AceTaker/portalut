<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img src="{{ asset('assets-real/img//logo.png') }}" alt="logo" width="100" class="mb-5 mt-2 mr-2">
        </div>
        {{-- <div class="text-center">Portal Universitas Terbuka</div> --}}
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="http://portalut.test/">SI</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item {{ Request::is('mahasiswas*') ? 'active' : '' }}">
                <a href="{{ url('/mahasiswas') }}" class="nav-link ">
                    <i class="fas fa-home"></i><span>Beranda</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown fas" data-toggle="dropdown"><i class="fas fa-user"></i>
                    <span>Mahasiswa</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('krs.index') }}">Kartu Rencana Studi</a></li>
                    <li><a class="nav-link" href="{{ url('/nilais') }}">Kartu Hasil Studi</a></li>
                    <li><a class="nav-link" href="{{ url('/absens') }}">Absensi</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
