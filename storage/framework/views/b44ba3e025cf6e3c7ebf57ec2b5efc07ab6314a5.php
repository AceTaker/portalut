

<?php $__env->startSection('content'); ?>    
    <div class="container-fluid">
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
                  <h4 class="card-title ">Data Program Studi</h4>
                  <div class="ml-auto">
               <a type="submit" href="<?php echo e(route('prodi.create')); ?>"  class="btn btn-primary"v>Tambah</a>
                   </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
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
                         Ketua Prodi
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                          <td>
                          <?php echo e($item->id); ?>

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
                          <?php echo e($item->dosen['nama']); ?>

                          </td>
                          <td>
                            <a href="<?php echo e(route('prodi.edit', $item->id)); ?>" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="<?php echo e(route('prodi.destroy', $item->id)); ?>" 
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
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portalut\resources\views/pages/prodi/index.blade.php ENDPATH**/ ?>