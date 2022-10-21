        <nav class="navbar navbar-expand-lg main-navbar">
          <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
              <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            </ul>
          </form>
        
          <ul class="navbar-nav navbar-right">
            <li class="dropdown">
              <a href="" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <div class="d-sm-none d-lg-inline-block">
                  
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="" class="dropdown-item has-icon">
                  <i class="fas fa-info"></i> About
                </a>
                <div class="dropdown-divider"></div>
                <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-inline">
                  <?php echo csrf_field(); ?>
                  <button type="submit" class="dropdown-item text-danger">
                    <i class="fas fa-sign-out-alt pr-2"></i> Logout
                  </button>
                </form>
              </div>
            </li>
          </ul>
        </nav>
        <?php /**PATH C:\laragon\www\portalut\resources\views/includes/navbar.blade.php ENDPATH**/ ?>