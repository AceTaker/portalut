

<?php $__env->startSection('content'); ?>    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <a href="<?php echo e(route('kelas.index')); ?>" class="btn btn-success pull-left">
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
                <h4 class="card-title ">Data Mahasiswa Kelas <?php echo e($item->nama); ?></h4>
                <div class="ml-auto">
               <a type="submit" href="<?php echo e(url('kelas/'. $item->id . '/add')); ?>"  class="btn btn-primary"v>Tambah</a>
                   </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                      <p>Nama Kelas: <?php echo e($item->nama); ?></p>
                      <p>Program Studi: <?php echo e($item->prodi->prodi); ?></p>
                  </div>
                  <div class="col-md-4">
                      <p>Dosen Wali: <?php echo e($item->dosen->nama); ?></p>
                      <p>Tahun Angkatan: <?php echo e($item->angkatan); ?></p>
                  </div>
                  <div class="col-md-4">
                      <p>Jumlah Mahasiswa: <?php echo e($jumlahMahasiswa); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Mahasiswa</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          No
                        </th>
                        <th>
                          Nim
                        </th>
                        <th>
                          Nama
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      <?php $__empty_1 = true; $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                          <td>
                          <?php echo e($index+1); ?>

                          </td>
                          <td>
                          <?php echo e($items->nim); ?>

                          </td>
                          <td>
                          <?php echo e($items->nama); ?>

                          </td>
                          <td>
                            <form action="/deleteMahasiswa/<?php echo e($items->id); ?>" 
                                    method="post" 
                                    class="d-inline">
                            <input type="hidden" value="<?php echo e($items->id); ?>" name="id">
                            <input type="hidden" value="<?php echo e($idKelas); ?>" name="idKelas">
                            <input type="hidden" value="<?php echo e($jumlahMahasiswa); ?>" name="jumlahMahasiswa">
                            <?php echo csrf_field(); ?>
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
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portalut\resources\views/pages/kelas/show.blade.php ENDPATH**/ ?>