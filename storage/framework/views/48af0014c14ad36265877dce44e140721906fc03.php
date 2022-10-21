

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
        <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                        <div class="card-icon">
                                                <i class="material-icons">perm_identity</i>
                                        </div>
                                        <p class="card-category">Mahasiswa</p>
                                        <h3 class="card-title"><?php echo e($mahasiswa); ?>

                                                <small>Orang</small>
                                        </h3>
                                </div>
                                <div class="card-footer">
                                        <div class="stats">
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="card card-stats">
                                <div class="card-header card-header-primary card-header-icon">
                                        <div class="card-icon">
                                                <i class="material-icons">school</i>
                                        </div>
                                        <p class="card-category">Dosen</p>
                                        <h3 class="card-title"><?php echo e($dosen); ?>

                                                <small>Orang</small>
                                        </h3>
                                </div>
                                <div class="card-footer">
                                        <div class="stats">
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                        <div class="card-icon">
                                                <i class="material-icons">book_online</i>
                                        </div>
                                        <p class="card-category">Matakuliah</p>
                                        <h3 class="card-title"><?php echo e($matkul); ?>

                                        </h3>
                                </div>
                                <div class="card-footer">
                                        <div class="stats">
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\siakad\resources\views/pages/dashboard/index.blade.php ENDPATH**/ ?>