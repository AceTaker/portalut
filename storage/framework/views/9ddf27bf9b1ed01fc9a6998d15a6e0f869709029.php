<table class="table table-bordered">
  <tr>
    <td></td>
    <td><img src="/image/mahasiswa/<?php echo e($item->photo); ?>" alt="foto" width="100" height="100"></td>
  </tr>
  <tr>
    <th>Nim</th>
    <td><?php echo e($item->nim); ?></td>
  </tr>
  <tr>
    <th>Nama</th>
    <td><?php echo e($item->nama); ?></td>
  </tr>
  <tr>
    <th>Tempat Tanggal Lahir</th>
    <td><?php echo e($item->tempat_lahir); ?>, <?php echo e(date('d-m-Y', strtotime($item->tanggal_lahir))); ?></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td><?php echo e($item->alamat); ?></td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td><?php echo e($item->jenis_kelamin); ?></td>
  </tr>
  <tr>
    <th>Agama</th>
    <td><?php echo e($item->agama); ?></td>
  </tr>
  <tr>
    <th>Program Studi</th>
    <td><?php echo e($item->prodis->prodi); ?></td>
  </tr>
  <tr>
    <th>Kelas</th>
    <?php if($item->id_kelas === NULL): ?>
      <td></td>
    <?php else: ?>
      <td><?php echo e($item->kelas->nama); ?></td>
    <?php endif; ?>
  </tr>
  <tr>
    <th>Telpon</th>
    <td><?php echo e($item->telp); ?></td>
  </tr>
  <tr>
    <th>Email</th>
    <td><?php echo e($item->email); ?></td>
  </tr>
</table><?php /**PATH C:\laragon\www\portalut\resources\views/pages/mahasiswa/show.blade.php ENDPATH**/ ?>