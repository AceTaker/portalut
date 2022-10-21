

<?php $__env->startSection('content'); ?>    
    <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Jadwal Kuliah Tahun Akademik: <?php echo e($ta->tahun_akademik); ?> /<?php echo e($ta->semester); ?></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          No
                        </th>
                        <th>
                          Fakultas
                        </th>
                        <th>
                          Kode Program Studi
                        </th>
                        <th>
                          Program Studi
                        </th>
                        <th>
                         Jenjang
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                          <td>
                          <?php echo e($index+1); ?>

                          </td>
                          <td>
                          <?php echo e($item->fakultas['fakultas']); ?>

                          </td>
                          <td>
                          <?php echo e($item->kode_prodi); ?>

                          </td>
                          <td>
                          <?php echo e($item->prodi); ?>

                          </td>
                          <td>
                          <?php echo e($item->jenjang); ?>

                          </td>
                          <td>
                            <a href="<?php echo e(route('schedule.show', $item->id)); ?>" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i>
                            </a>
                          </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                          <td>
                            data tidak tersedia
                          </td>
                        </tr>
                        <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\siakad\resources\views/pages/schedule/index.blade.php ENDPATH**/ ?>