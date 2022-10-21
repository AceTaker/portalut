<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img src="{{ asset('assets/img//logo/logo-crop.png') }}" alt="logo" width="60" class="mb-5 mt-2 mr-2">
        </div>
        <div class="text-center">SI-SULTAN</div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="http://si-sultan.test/">SS</a>
        </div>
        <ul class="sidebar-menu">
                <ul class="sidebar-menu">
                    <li><a class="nav-link" href="{{ url('/mahasiswas') }}"><i class="fas fa-pencil-ruler"></i> <span>Home</span></a></li>
                  <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Mahasiswa</span></a>
                    <ul class="dropdown-menu" style="display: none;">
                      <li><a class="nav-link" href="{{ route('krs.index') }}">Kartu Rencana Studi</a></li>
                      <li><a class="nav-link" href="{{ url('/nilais') }}">Kartu Hasil Studi</a></li>
                      <li><a class="nav-link" href="{{ url('/absens') }}">Absensi</a></li>
                    </ul>
                  </li>
                </ul>
    </aside>
</div>
