  <div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img src="<?php echo e(asset('assets/img//logo/logo-crop.png')); ?>" alt="logo" width="60" class="mb-5 mt-2 mr-2">
        </div>
        <div class="text-center">Portal Universitas Terbuka</div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="http://portalut.test/">SI</a>
        </div>
        <ul class="sidebar-menu">
                <li class="nav-item <?php echo e(Request::is('/') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('dashboard')); ?>" class="nav-link ">
                        <i class="fas fa-home"></i><span>Beranda</span>
                    </a>
                </li>
                <li class="nav-item <?php echo e(Request::is('mahasiswa*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('mahasiswa.index')); ?>" class="nav-link ">
                        <i class="fas fa-user"></i></i><span>Mahasiswa</span>
                    </a>
                </li>
                 <li class="nav-item <?php echo e(Request::is('/schedule') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('schedule.index')); ?>" class="nav-link ">
                        <i class="fas fa-book"></i></i><span>Jadwal</span>
                    </a>
                  </li>
                <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data Master</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('dosen.index')); ?>">Dosen</a></li>
                <li><a class="nav-link" href="<?php echo e(route('fakultas.index')); ?>">Fakultas</a></li>
                <li><a class="nav-link" href="<?php echo e(route('gedung.index')); ?>">Gedung</a></li>
                <li><a class="nav-link" href="<?php echo e(route('kelas.index')); ?>">Kelas</a></li>
                <li><a class="nav-link" href="<?php echo e(route('matkul.index')); ?>">Mata Kuliah</a></li>
                <li><a class="nav-link" href="<?php echo e(route('prodi.index')); ?>">Program Studi</a></li>
                <li><a class="nav-link" href="<?php echo e(route('ruangan.index')); ?>">Ruangan</a></li>
                <li><a class="nav-link" href="<?php echo e(route('ta.index')); ?>">Tahun Akademik</a></li>
              </ul>
            </li>
        </ul>
      </aside>
    </div>
<?php /**PATH C:\laragon\www\portalut\resources\views/includes/sidebar.blade.php ENDPATH**/ ?>