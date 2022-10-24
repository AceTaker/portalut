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
              <li class="nav-item {{ Request::is('dosens*') ? 'active' : '' }}">
                  <a href="{{ url('/mahasiswas') }}" class="nav-link ">
                      <i class="fas fa-home"></i><span>Beranda</span>
                  </a>
              </li>
              <li class="dropdown">
            <a href="#" class="nav-link has-dropdown fas" data-toggle="dropdown"><i class="fas fa-university"></i> <span>Akademik</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('absen.list') }}">Absensi</a></li>
              <li><a class="nav-link" href="{{ route('nilai.list') }}">Nilai</a></li>
             
            </ul>
          </li>
      </ul>
    </aside>
  </div>
