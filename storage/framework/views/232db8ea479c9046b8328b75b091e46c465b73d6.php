<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          SI Akademik
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo e(route('mahasiswa.index')); ?>">
              <i class="material-icons">person</i>
              <p>Mahasiswa</p>
            </a>
          </li>
          <li class="nav-item ">
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo e(route('schedule.index')); ?>">
              <i class="material-icons">library_books</i>
              <p>Jadwal</p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Master Data
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo e(route('dosen.index')); ?>">Dosen</a>
              <a class="dropdown-item" href="<?php echo e(route('fakultas.index')); ?>">Fakultas</a>
              <a class="dropdown-item" href="<?php echo e(route('gedung.index')); ?>">Gedung</a>
              <a class="dropdown-item" href="<?php echo e(route('kelas.index')); ?>">Kelas</a>
              <a class="dropdown-item" href="<?php echo e(route('matkul.index')); ?>">Matakuliah</a>
              <a class="dropdown-item" href="<?php echo e(route('prodi.index')); ?>">Program Studi</a>
              <a class="dropdown-item" href="<?php echo e(route('ruangan.index')); ?>">Ruangan</a>
              <a class="dropdown-item" href="<?php echo e(route('ta.index')); ?>">Tahun Akademik</a>
            </div>
          </li>
        </ul>
      </div>
    </div><?php /**PATH C:\laragon\www\siakad\resources\views/includes/sidebar.blade.php ENDPATH**/ ?>