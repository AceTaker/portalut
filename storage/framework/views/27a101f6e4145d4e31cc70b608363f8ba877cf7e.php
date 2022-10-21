

<?php $__env->startSection('content'); ?>
<div id="mahasiswa">
  <div class="container">
    <?php if($mahasiswa->id_kelas === null): ?>
      <td>Tidak dapat mengisi KRS, karena kelas anda belum ditentukan</td>
    <?php else: ?>
    <div class="row">
      <div class="col-12">
        <h4>Kartu Rencana Studi (KRS) Tahun Akademik:</h4>
      </div>
    </div>
    <div class="row bio">
      <div class="col-md-2">
        <img src="/image/mahasiswa/<?php echo e($mahasiswa->photo); ?>" class="photo" alt="">
      </div>
      <div class="col-md-5">
        <table class="table">
          <tbody>
            <tr>
              <td>Tahun Akademik</td>
              <td>:</td>
              <td><?php echo e($ta->tahun_akademik); ?>/<?php echo e($ta->semester); ?></td>
            </tr>
            <tr>
              <td>Nim</td>
              <td>:</td>
              <td><?php echo e($mahasiswa->nim); ?></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><?php echo e($mahasiswa->nama); ?></td>
            </tr>
            <tr>
              <td>Fakultas</td>
              <td>:</td>
              <td><?php echo e($fakultas->fakultas->fakultas); ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-5">
        <table class="table">
          <tbody>
            <tr>
              <td>Program Studi</td>
              <td>:</td>
              <td><?php echo e($mahasiswa->prodis->prodi); ?></td>
            </tr>
            <tr>
              <td>Kelas</td>
              <td>:</td>
              <td><?php echo e($mahasiswa->kelas->nama); ?></td>
            </tr>
            <tr>
              <td>Dosen PA</td>
              <td>:</td>
              <td><?php echo e($dosen->dosen->nama); ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <a type="submit" href="<?php echo e(route('krs.create')); ?>" class="btn btn-primary mt-3 mb-3">Tambah KRS <i class="fas fa-plus"></i></a>
        <a type="submit" href="<?php echo e(route('krs.show', $mahasiswa->id)); ?>" target="_blank" class="btn btn-success mt-3 mb-3">Cetak KRS <i class="fas fa-print"></i></a>
      </div>
      <div class="col-md-8">
        <?php if(session('status')): ?>
          <div class="alert alert-success mt-3">
              <?php echo e(session('status')); ?>

          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 daftarKrs">
        <table class="table table-striped">
          <thead class="thead-dark">
            <th>
              No
            </th>
            <th>
              Semester
            </th>
            <th>
              Kode Matakuliah
            </th>
            <th>
              Matakuliah
            </th>
            <th>
              SKS
            </th>
            <th>
              Dosen
            </th>
            <th>
              Kelas
            </th>
            <th>
              Hari
            </th>
            <th>
              Waktu
            </th>
            <th>
              Ruangan
            </th>
            <th>
              Hapus
            </th>
          </thead>
          <tbody>
          <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
              <td>
              <?php echo e($index+1); ?>

              </td>
              <td>
              <?php echo e($item->schedule['matkul']['smt']); ?>(<?php echo e($item->schedule['matkul']['semester']); ?>)
              </td>
              <td>
              <?php echo e($item->schedule['matkul']['kode']); ?>

              </td>
              <td>
              <?php echo e($item->schedule['matkul']['matkul']); ?>

              </td>
              <td>
              <?php echo e($item->schedule['matkul']['sks']); ?>

              </td>
              <td>
              <?php echo e($item->schedule['dosen']['nama']); ?>

              </td>
              <td>
              <?php echo e($item->schedule['kelas']['nama']); ?>

              </td>
              <td>
              <?php echo e($item->schedule['hari']); ?>

              </td>
              <td>
              <?php echo e($item->schedule['waktu']); ?>

              </td>
              <td>
              <?php echo e($item->schedule['ruangan']['ruangan']); ?>

              </td>
              <td>
                <form action="<?php echo e(route('krs.destroy', $item->id)); ?>" 
                  method="post" 
                  class="d-inline">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('delete'); ?>
                  <button class="btn btn-danger btn-sm">
                  <i class="fa fa-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
              <td>
                Belum mengambil KRS
              </td>
            </tr>
            <?php endif; ?>
          </tbody>
        </table>
        <table border="0">
          <tbody>
            <tr>
              <td>Total SKS yang diambil</td>
              <td>:</td>
              <td><?php echo e($totalSks); ?></td>
            </tr>
            <tr>
              <td>Maximal SKS yang diambil</td>
              <td>:</td>
              <td><?php echo e($maxSks); ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\siakad\resources\views/user/krs/index.blade.php ENDPATH**/ ?>