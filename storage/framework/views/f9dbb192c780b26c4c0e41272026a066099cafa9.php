

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <a href="<?php echo e(url('schedule/'. $id)); ?>" class="btn btn-success pull-left">
                <i class="fa fa-arrow-left"></i>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Jadwal Kuliah</h4>
                </div>
                <div class="card-body">
                  <form action="<?php echo e(route('schedule.update', $item->id)); ?>" method="POST" enctype="multipart/form-data">
                  <?php echo method_field('PUT'); ?>
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="id_prodi" value="<?php echo e($item->id_prodi); ?>">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Matakuliah</label>
                          <select class="form-control <?php $__errorArgs = ['id_matkul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleFormControlSelect1" name="id_matkul">
                            <?php $__currentLoopData = $matkuls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemM): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($item->id_matkul == $itemM->id): ?>
                                <option value="<?php echo e($itemM->id); ?>" selected><?php echo e($itemM->smt); ?> | <?php echo e($itemM->matkul); ?> | <?php echo e($itemM->sks); ?> SKS</option>
                              <?php else: ?>
                                <option value="<?php echo e($itemM->id); ?>"><?php echo e($itemM->smt); ?> | <?php echo e($itemM->matkul); ?> | <?php echo e($itemM->sks); ?> SKS</option>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          <?php $__errorArgs = ['id_matkul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Dosen</label>
                          <select class="form-control <?php $__errorArgs = ['id_dosen'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleFormControlSelect1" name="id_dosen">
                            <?php $__currentLoopData = $dosens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemD): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($item->id_dosen == $itemD->id): ?>
                                <option value="<?php echo e($itemD->id); ?>" selected><?php echo e($itemD->nama); ?></option>
                              <?php else: ?>
                                <option value="<?php echo e($itemD->id); ?>"><?php echo e($itemD->nama); ?></option>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          <?php $__errorArgs = ['id_dosen'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Kelas</label>
                          <select class="form-control <?php $__errorArgs = ['id_kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleFormControlSelect1" name="id_kelas">
                            <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemK): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($item->id_kelas == $itemK->id): ?>
                                <option value="<?php echo e($itemK->id); ?>" selected><?php echo e($itemK->nama); ?></option>
                              <?php else: ?>
                                <option value="<?php echo e($itemK->id); ?>"><?php echo e($itemK->nama); ?></option>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          <?php $__errorArgs = ['id_kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Hari</label>
                          <select class="form-control <?php $__errorArgs = ['hari'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleFormControlSelect1" name="hari">
                            <?php if($item->hari === 'Senin'): ?>
                              <option selected>Senin</option>
                            <?php else: ?>
                              <option>Senin</option>
                            <?php endif; ?>
                            <?php if($item->hari === 'Selasa'): ?>
                              <option selected>Selasa</option>
                            <?php else: ?>
                              <option>Selasa</option>
                            <?php endif; ?>
                            <?php if($item->hari === 'Rabu'): ?>
                              <option selected>Rabu</option>
                            <?php else: ?>
                              <option>Rabu</option>
                            <?php endif; ?>
                            <?php if($item->hari === 'Kamis'): ?>
                              <option selected>Kamis</option>
                            <?php else: ?>
                              <option>Kamis</option>
                            <?php endif; ?>
                            <?php if($item->hari === "Jum'at"): ?>
                              <option selected>Jum'at</option>
                            <?php else: ?>
                              <option>Jum'at</option>
                            <?php endif; ?>
                            <?php if($item->hari === 'Sabtu'): ?>
                              <option selected>Sabtu</option>
                            <?php else: ?>
                              <option>Sabtu</option>
                            <?php endif; ?>
                          </select>
                          <?php $__errorArgs = ['hari'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Waktu</label>
                          <input type="text" class="form-control" name="waktu" value="<?php echo e(old('waktu') ? old('waktu') : $item->waktu); ?>" 
                            class="form-control <?php $__errorArgs = ['waktu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <?php $__errorArgs = ['waktu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Ruangan</label>
                          <select class="form-control <?php $__errorArgs = ['id_ruangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleFormControlSelect1" name="id_ruangan">
                            <?php $__currentLoopData = $ruangans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemR): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($item->id_ruangan == $itemR->id): ?>
                                <option value="<?php echo e($itemR->id); ?>" selected><?php echo e($itemR->ruangan); ?></option>
                              <?php else: ?>
                                <option value="<?php echo e($itemR->id); ?>"><?php echo e($itemR->ruangan); ?></option>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          <?php $__errorArgs = ['id_ruangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-muted"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Edit</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portalut\resources\views/pages/schedule/edit.blade.php ENDPATH**/ ?>