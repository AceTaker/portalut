

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
            <div class="col-4">
            <a type="submit" href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary pull-right">Tambah</a>
            <div class="clearfix"></div>
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
                          ID
                        </th>
                        <th>
                          Nim
                        </th>
                        <th>
                          Nama
                        </th>
                        <th>
                          Alamat
                        </th>
                        <th>
                          Program Studi
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
                          <?php echo e($item->nim); ?>

                          </td>
                          <td>
                          <?php echo e($item->nama); ?>

                          </td>
                          <td>
                          <?php echo e($item->alamat); ?>

                          </td>
                          <td>
                          <?php echo e($item->prodis['prodi']); ?>

                          </td>
                          <td>
                            <a href="#mymodal"
                              data-remote="<?php echo e(route('mahasiswa.show', $item->id)); ?>"
                              data-toggle="modal"
                              data-target="#mymodal"
                              data-title=""
                              class="btn btn-info btn-sm">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="<?php echo e(route('mahasiswa.edit', $item->id)); ?>" class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="<?php echo e(route('mahasiswa.destroy', $item->id)); ?>" 
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
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\siakad\resources\views/pages/mahasiswa/index.blade.php ENDPATH**/ ?>