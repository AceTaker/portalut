<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">UNIVERSITAS PERDANA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo e(url('/mahasiswas')); ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Mahasiswa
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo e(route('krs.index')); ?>">Kartu Rencana Studi</a>
            <a class="dropdown-item" href="<?php echo e(url('/nilais')); ?>">Kartu Hasil Studi</a>
            <a class="dropdown-item" href="<?php echo e(url('/absens')); ?>">Absensi</a>
          </div>
        </li>
        <li class="nav-item active logout">
          <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?>

          </a>

          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
              <?php echo csrf_field(); ?>
          </form>
        </li>
      </ul>
    </div>
  </nav>
  <!-- end navbar --><?php /**PATH C:\laragon\www\siakad\resources\views/user/includes/navbar.blade.php ENDPATH**/ ?>