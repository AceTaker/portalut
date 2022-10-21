

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
                  <h4 class="card-title ">Data Tahun Akademik</h4>
                  <div class="ml-auto">
               <a type="submit" href="<?php echo e(route('ta.create')); ?>"  class="btn btn-primary"v>Tambah</a>
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
                          Tahun Akademik
                        </th>
                        <th>
                          Semester
                        </th>
                        <th>
                          Status
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
                          <?php echo e($item->tahun_akademik); ?>

                          </td>
                          <td>
                          <?php echo e($item->semester); ?>

                          </td>
                          <td>
                          <?php if($item->status == 0): ?>
                              <div class="badge badge-pill badge-danger mb-1">Tidak Aktif</div>
                          <?php else: ?>
                              <div class="badge badge-pill badge-success mb-1">Aktif</div>
                          <?php endif; ?>
                          </td>
                          <td>
                          <?php if($item->status == 0): ?>
                            <form action="/activeTa/<?php echo e($item->id); ?>" 
                                    method="post" 
                                    class="d-inline">
                            <input type="hidden" value="<?php echo e($item->id); ?>" name="id">
                            <?php echo csrf_field(); ?>
                                <button class="btn btn-success btn-sm">
                                Aktifkan
                                </button>
                            </form>
                          <?php else: ?>
                              
                          <?php endif; ?>
                            <a href="<?php echo e(route('ta.edit', $item->id)); ?>" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="<?php echo e(route('ta.destroy', $item->id)); ?>" 
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
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portalut\resources\views/pages/ta/index.blade.php ENDPATH**/ ?>