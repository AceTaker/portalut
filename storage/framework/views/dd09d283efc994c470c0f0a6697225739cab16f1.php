

<?php $__env->startSection('content'); ?>
<div id="absen">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4 class="text-success text-center">Kartu Hasil Studi</h4>
        <h4>Tahun Akademik: <?php echo e($ta->tahun_akademik); ?>/<?php echo e($ta->semester); ?></h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <table>
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
            <td>Kelas</td>
            <td>:</td>
            <td><?php echo e($mahasiswa->kelas->nama); ?></td>
          </tr>
        </table>
      </div>
      <div class="col-md-6">
        <table>
          <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td><?php echo e($mahasiswa->prodis->prodi); ?></td>
          </tr>
          <tr>
            <td>Dosen PA</td>
            <td>:</td>
            <td><?php echo e($mahasiswa->kelas->dosen->nama); ?></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
      <a type="submit" href="<?php echo e(route('nilai.print', $mahasiswa->id)); ?>" target="_blank" class="btn btn-success mt-3 mb-3">Cetak KHS <i class="fas fa-print"></i></a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="tg table">
          <thead>
            <tr>
              <th class="tg-6h95" rowspan="2">No</th>
              <th class="tg-6h95" rowspan="2">Kode</th>
              <th class="tg-6h95" rowspan="2">Mata Kuliah</th>
              <th class="tg-6h95" rowspan="2">SKS</th>
              <th class="tg-k7qf" colspan="18">Nilai</th>
            </tr>
            <tr>
              <td class="tg-k7qf">Nilai Akhir</td>
              <td class="tg-k7qf">Huruf</td>
              <td class="tg-k7qf">Bobot</td>
              <td class="tg-k7qf">SKS x Bobot</td>
            </tr>
          </thead>
          <tbody>
          <?php $__empty_1 = true; $__currentLoopData = $nilais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $nilai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
              <td class="tg-3xi5"><?php echo e($index+1); ?></td>
              <td class="tg-3xi5"><?php echo e($nilai->schedule->matkul->kode); ?></td>
              <td class="tg-3xi5"><?php echo e($nilai->schedule->matkul->matkul); ?></td>
              <td class="tg-3xi5"><?php echo e($nilai->schedule->matkul->sks); ?></td>
              <td class="tg-3xi5"><?php echo e($nilai->nilai_akhir); ?></td>
              <td class="tg-3xi5"><?php echo e($nilai->nilai_huruf); ?></td>
              <td class="tg-3xi5">
                <?php if($nilai->nilai_huruf == "A"): ?>
                  <?php echo e(4); ?>

                <?php elseif($nilai->nilai_huruf == "B"): ?>
                  <?php echo e(3); ?>

                <?php elseif($nilai->nilai_huruf == "C"): ?>
                  <?php echo e(2); ?>

                <?php elseif($nilai->nilai_huruf == "D"): ?>
                  <?php echo e(1); ?>

                <?php else: ?>
                  <?php echo e(0); ?>

                <?php endif; ?>
              </td>
              <td class="tg-3xi5">
                <?php if($nilai->nilai_huruf == "A"): ?>
                  <?php echo e(4 * $nilai->schedule->matkul->sks); ?>

                <?php elseif($nilai->nilai_huruf == "B"): ?>
                  <?php echo e(3 * $nilai->schedule->matkul->sks); ?>

                <?php elseif($nilai->nilai_huruf == "C"): ?>
                  <?php echo e(2 * $nilai->schedule->matkul->sks); ?>

                <?php elseif($nilai->nilai_huruf == "D"): ?>
                  <?php echo e(1 * $nilai->schedule->matkul->sks); ?>

                <?php else: ?>
                  <?php echo e(0); ?>

                <?php endif; ?>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
              <td>
                Jadwal Kosong
              </td>
            </tr>
            <?php endif; ?>
            <tr>
              <td class="tg-3xi5"><b>Total</b></td>
              <td class="tg-3xi5"></td>
              <td class="tg-3xi5"></td>
              <td class="tg-3xi5"><b><?php echo e($totalSks); ?></b></td>
              <td class="tg-3xi5"></td>
              <td class="tg-3xi5"></td>
              <td class="tg-3xi5"></td>
              <td class="tg-3xi5"><b><?php echo e($totalBobot); ?></b></td>
            </tr>
          </tbody>
        </table>
        <table class="font-weight-bold">
          <tr>
            <td>Indeks Prestasi Semester</td>
            <td>:</td>
            <td><?php echo e(number_format(($totalBobot/$totalSks) * 4 , 2)); ?></td>
          </tr>
        </table>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\siakad\resources\views/user/nilai/index.blade.php ENDPATH**/ ?>