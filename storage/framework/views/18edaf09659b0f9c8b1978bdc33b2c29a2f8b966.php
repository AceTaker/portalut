

<?php $__env->startSection('content'); ?>
<div id="absen">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4 class="text-success">Absensi Tahun Akademik: <?php echo e($ta->tahun_akademik); ?>/<?php echo e($ta->semester); ?></h4>
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
              <th class="tg-k7qf" colspan="18">Pertemuan</th>
              <th class="tg-6h95" rowspan="2">%</th>
            </tr>
            <tr>
              <td class="tg-k7qf">1</td>
              <td class="tg-k7qf">2</td>
              <td class="tg-k7qf">3</td>
              <td class="tg-k7qf">4</td>
              <td class="tg-k7qf">5</td>
              <td class="tg-k7qf">6</td>
              <td class="tg-k7qf">7</td>
              <td class="tg-k7qf">8</td>
              <td class="tg-k7qf">9</td>
              <td class="tg-k7qf">10<br></td>
              <td class="tg-k7qf">11</td>
              <td class="tg-k7qf">12</td>
              <td class="tg-k7qf">13</td>
              <td class="tg-k7qf">14</td>
              <td class="tg-k7qf">15</td>
              <td class="tg-k7qf">16</td>
              <td class="tg-k7qf">17</td>
              <td class="tg-k7qf">18</td>
            </tr>
          </thead>
          <tbody>
          <?php $__empty_1 = true; $__currentLoopData = $absens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $absen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
              <td class="tg-3xi5"><?php echo e($index+1); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->schedule['matkul']['kode']); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->schedule['matkul']['matkul']); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p1); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p2); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p3); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p4); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p5); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p6); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p7); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p8); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p9); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p10); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p11); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p12); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p13); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p14); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p15); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p16); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p17); ?></td>
              <td class="tg-3xi5"><?php echo e($absen->p18); ?></td>
              <td class="tg-3xi5"><?php echo e(number_format((($absen->p1 + $absen->p2 + $absen->p3 + $absen->p4 + $absen->p5 + $absen->p6 + $absen->p7 + $absen->p8 + $absen->p9 + $absen->p10 + $absen->p11 + $absen->p12 + $absen->p13 + $absen->p14 + $absen->p15 + $absen->p16 + $absen->p17 + $absen->p18) / 36) * 100 , 2)); ?>%</td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
              <td>
                Jadwal Kosong
              </td>
            </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\siakad\resources\views/user/absen/index.blade.php ENDPATH**/ ?>