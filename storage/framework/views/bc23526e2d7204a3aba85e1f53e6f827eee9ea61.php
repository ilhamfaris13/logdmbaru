<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="/assets/dist/img/user.png"
                       alt="User profile picture">
                </div>
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3 class="profile-username text-center">Fakultas Kedokteran UHT</h3>

                <p class="text-muted text-center">Profil Akun</p>

                <ul class="list-group list-group-unbordered mb-3">

                <li class="list-group-item">
                    <b>Nama</b> <a class="float-right"><?php echo e(Auth::user()->name); ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>NIM</b> <a class="float-right"><?php echo e(Auth::user()->username); ?></a>
                  </li>
                  <?php if( Auth::user()->level == "dm"): ?>
                  <li class="list-group-item">
                    <b>Kelompok</b> <a class="float-right"><?php echo e($users->kelompok); ?></a>
                  </li>
                  <?php else: ?>
                  <li class="list-group-item">
                    <b>NIDN</b> <a class="float-right"><?php echo e($users->nidn); ?></a>
                  </li>
                  <?php endif; ?>
                  
                </ul>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-6">
        
       
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/blog/resources/views/dashboard.blade.php ENDPATH**/ ?>