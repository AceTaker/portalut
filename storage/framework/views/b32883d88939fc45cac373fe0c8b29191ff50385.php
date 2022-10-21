

<?php $__env->startSection('content'); ?>    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <a href="<?php echo e(route('schedule.index')); ?>" class="btn btn-success pull-left">
                <i class="fa fa-arrow-left"></i>
              </a>
            </div>
          </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">Jadwal Kuliah <?php echo e($item->prodi); ?></h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                      <p>Program Studi: <?php echo e($item->prodi); ?></p>
                      <p>Jenjang: <?php echo e($item->jenjang); ?></p>
                      <p>Fakultas: <?php echo e($item->fakultas->fakultas); ?></p>
                      <p>Tahun Akademik: <?php echo e($ta->tahun_akademik); ?></p>
                  </div>
                </div>
              </div>
            </div>
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
                  <h4 class="card-title ">Data Mata Kuliah</h4>
                  <div class="ml-auto">
               <a type="submit" href="<?php echo e(url('schedule/'. $item->id . '/create')); ?>"  class="btn btn-primary"v>Tambah</a>
                   </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
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
                          <?php echo e($item->matkul->smt); ?> (<?php echo e($item->matkul->semester); ?>)
                          </td>
                          <td>
                          <?php echo e($item->matkul->kode); ?>

                          </td>
                          <td>
                          <?php echo e($item->matkul->matkul); ?>

                          </td>
                          <td>
                          <?php echo e($item->matkul->sks); ?>

                          </td>
                          <td>
                          <?php echo e($item->dosen->nama); ?>

                          </td>
                          <td>
                          <?php echo e($item->kelas->nama); ?>

                          </td>
                          <td>
                          <?php echo e($item->hari); ?>

                          </td>
                          <td>
                          <?php echo e($item->waktu); ?>

                          </td>
                          <td>
                          <?php echo e($item->ruangan->ruangan); ?>

                          </td>
                          <td>
                            <div class="buttons">
                            <a href="<?php echo e(route('schedule.edit', $item->id)); ?>" class="btn btn-primary btn-action mr-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="<?php echo e(route('schedule.destroy', $item->id)); ?>" 
                                    method="post" 
                                    class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button class="btn btn-danger btn-action trigger--fire-modal-1">
                                <i class="fas fa-trash"></i>
                                </button>
                              
                            </form>
                            </div>
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
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portalut\resources\views/pages/schedule/show.blade.php ENDPATH**/ ?>