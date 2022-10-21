

<?php $__env->startSection('content'); ?>
   <!-- General CSS Files -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"
        integrity="sha512-3M00D/rn8n+2ZVXBO9Hib0GKNpkm8MSUU/e2VNthDyBYxKWG+BftNYYcuEjXlyrSO637tidzMBXfE7sQm0INUg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Libraries -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/stisla/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/stisla/css/components.css')); ?>">
<div id="jumbotron">
    <div class="container">
      <div class="row d-flex"> 
        <div class="col-md-7 text-white text-center align-self-center">
          <p class="mb-4">Sistem Informasi Akademik</p>
          <hr>
          <p>UNIVERSITAS TERBUKA</p>
        </div>
        <div class="col-md-5">
          <div class="login">
            <h3 class="text-center">Login</h3>
            <?php if(session('status')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <form class="user" action="<?php echo e(route('login2')); ?>" method="post">
            <?php echo csrf_field(); ?>
              <div class="form-group">
                <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nim/Email">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- end jumbotron -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\portalut\resources\views/otentikasi/login.blade.php ENDPATH**/ ?>