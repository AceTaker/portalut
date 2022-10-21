

<?php $__env->startSection('content'); ?>
<!-- profile -->
<div id="profile">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-1">
                <div class="card" style="width: 18rem;">
                    <img src="/image/mahasiswa/<?php echo e($item->photo); ?>" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo e($item->nama); ?></h5>
                        <p class="card-text"><?php echo e($item->nim); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card" style="width: 40rem;">
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                              <tr>
                                <td>Tahun Akademik</td>
                                <td>:</td>
                                <td><?php echo e($ta->tahun_akademik); ?>/<?php echo e($ta->semester); ?></td>
                              </tr>
                              <tr>
                                <td>Fakultas</td>
                                <td>:</td>
                                <td><?php echo e($fakultas->fakultas->fakultas); ?></td>
                              </tr>
                              <tr>
                                <td>Prodi</td>
                                <td>:</td>
                                <td><?php echo e($item->prodis->prodi); ?></td>
                              </tr>
                              <tr>
                                <td>Kelas</td>
                                <td>:</td>
                                <?php if($item->id_kelas === null): ?>
                                  <td></td>
                                <?php else: ?>
                                  <td><?php echo e($item->kelas->nama); ?></td>
                                <?php endif; ?>
                              </tr>
                              <tr>
                                <td>Dosen PA</td>
                                <td>:</td>
                                <?php if($item->id_kelas === null): ?>
                                  <td></td>
                                <?php else: ?>
                                  <td><?php echo e($dosen->dosen->nama); ?></td>
                                <?php endif; ?>
                              </tr>
                              <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?php echo e($item->alamat); ?></td>
                              </tr>
                              <tr>
                                <td>Tempat dan Tanggal Lahir</td>
                                <td>:</td>
                                <td><?php echo e($item->tempat_lahir); ?>, <?php echo e(date('d-m-Y', strtotime($item->tanggal_lahir))); ?></td>
                              </tr>
                              <tr>
                                <td>No HP</td>
                                <td>:</td>
                                <td><?php echo e($item->telp); ?></td>
                              </tr>
                              <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?php echo e($item->email); ?></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- end profile -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\siakad\resources\views/user/dashboard/dashboard.blade.php ENDPATH**/ ?>