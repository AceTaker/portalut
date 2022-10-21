

<?php $__env->startSection('content'); ?>    
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <a href="<?php echo e(url('kelas/'. $id)); ?>" class="btn btn-success pull-left">
              <i class="fa fa-arrow-left"></i>
            </a>
          </div>
        </div>
        <div class="row">
            <div class="col-8">
            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            </div>
        </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Mahasiswa</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Nim
                        </th>
                        <th>
                          Nama
                        </th>
                        <th>
                          Program Studi
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      <form method="post" action="/storeMahasiswa">
                      <?php echo csrf_field(); ?>
                      <input type="hidden" value="<?php echo e($id); ?>" name="id">
                      <input type="hidden" value="<?php echo e($jumlahMahasiswa); ?>" name="jumlahMahasiswa">
                      <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                          <td>
                          <?php echo e($item->nim); ?>

                          </td>
                          <td>
                          <?php echo e($item->nama); ?>

                          </td>
                          <td>
                          <?php echo e($item->prodis->prodi); ?>

                          </td>
                          <td>
                          <input class="form-check-input" type="checkbox" value="<?php echo e($item->id); ?>" id="defaultCheck<?php echo e($item->id); ?>" name="mahasiswa[]">
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
                    <button type="submit" class="btn btn-primary pull-right">Add</button>
                    <div class="clearfix"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portalut\resources\views/pages/kelas/add.blade.php ENDPATH**/ ?>