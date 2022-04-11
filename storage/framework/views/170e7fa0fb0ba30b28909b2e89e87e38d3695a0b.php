

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                   <!-- <img class="profile-user-img img-fluid img-circle"
                  src="/upload/profile/164869164020150410110.jpg" alt="<?php echo e(Auth::user()->name); ?>"
                   > -->
                   <img class="profile-user-img img-responsive img-circle"
                  src="/upload/profile/<?php echo e(Auth::user()->profile_photo_path); ?>" alt="<?php echo e(Auth::user()->name); ?>"
                   >
                </div>
                <div class="text-center">
               
                  <!-- <div class="form-group">
                    <a class="btn btn-info btn-sm" href="#" ><i class="far fa-edit"></i>Upload Foto</a>
                  </div> -->
                </div>
                
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3 class="profile-username text-center"><?php echo e(Auth::user()->name); ?></h3>

                <p class="text-muted text-center">Dokter Muda Fakultas Kedokteran Universitas Hangtuah</p>
                
                <ul class="list-group list-group-unbordered mb-3">

                <li class="list-group-item">
                    <b>Nama</b> <a class="float-right"><?php echo e(Auth::user()->name); ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Username</b> <a class="float-right"><?php echo e(Auth::user()->username); ?></a>
                  </li>
                  <?php if( Auth::user()->level == "dm"): ?>
                  <li class="list-group-item">
                    <b>Kelompok</b> <a class="float-right"><?php echo e($users->kelompok); ?></a>
                  </li>
                 <!--  <?php $__currentLoopData = $mata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $matas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-group-item">
                    <b>RM</b> <a class="float-right"><?php echo e($matas->Nomor_Rm); ?></a>
                    <a class="btn btn-primary btn-sm" href="http://localhost//new_test/output/mata1_view.php?editid1=<?php echo e($matas->Id_Mata); ?>&" target="_blank"><i class="far fa-eye"></i></a>
                  </li>
                  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
                  <?php else: ?>
               
                  <?php endif; ?>
                  
                </ul>
                <ul class="list-group list-group-unbordered mb-3">
                    <?php if( Auth::user()->level == "dm"): ?>
                    <li class="list-group-item">
                    <div class="text-center">
                      <b>Stase Yang Diambil</b> 
                    </div>  
                    </li>
                    <li class="list-group-item">
                    <b>IPD/ITERNA</b>
                    <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?>
                    </li>
                    <li class="list-group-item">
                    <b>ILMU KESEHATAN ANAK (IKA)</b>
                    <?php if($ika==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?>
                    </li>
                    <li class="list-group-item">
                    <b>BEDAH</b> 
                    <?php if($bedah==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?>
                    </li>
                    <li class="list-group-item">
                    <b>KULIT</b>
                    <?php if($kulit==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?>
                    </li>
                    <li class="list-group-item">
                    <b>THT</b>
                    <?php if($tht==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?>
                    </li>
                    <li class="list-group-item">
                    <b>MATA</b>
                    <?php if($mata1==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?>
                    </li>
                    <li class="list-group-item">
                    <b>SARAF</b>
                    <?php if($saraf==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?>
                    </li>
                    <li class="list-group-item">
                    <b>JIWA</b>
                    <?php if($jiwa==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?>
                    </li>
                    <li class="list-group-item">
                    <b>FORENSIK</b>
                    <?php if($forensik==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?>
                    </li>
                    <li class="list-group-item">
                    <b>ANESTESI</b>
                    <?php if($anestesi==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?>
                    </li>
                    <li class="list-group-item">
                    <b>RADIOLOGI</b>
                    <?php if($radiologi==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?>
                    </li>
                    <li class="list-group-item">
                    <b>REHAB MEDIK</b>
                    <?php if($rehab==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?>
                    </li>
                    <li class="list-group-item">
                    <b>FARMASI</b>
                    <?php if($farmasi==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?>
                    </li>
                    <?php else: ?>

                    <?php endif; ?>
                    
                  </ul>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-6">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
            <form action="/upload/foto" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD PAS FOTO</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                  </form>
            </div>
            
        </div>

        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
            <form action="/ganti/pwd" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>GANTI PASSWORD</b><br/>
                      <div class="form-group">
                    <label class="col-form-label" for="modal-input-password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    </div>
                    <input type="submit" value="Ganti" class="btn btn-primary">
                  </form>
            </div>
            
        </div>
       
       <!--  <div class="card card-primary card-outline">
            <div class="card-body box-profile">
            <form action="/upload/foto" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                      <b>CETAK BERKAS</b>
                    </div>
                    <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="CETAK" />
             </div>
                  </form>
            </div>
            
        </div> -->


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\logdmbaru\logdmbaru\resources\views/dashboard.blade.php ENDPATH**/ ?>