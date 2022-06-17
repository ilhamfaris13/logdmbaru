

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
    <?php if( Auth::user()->level == "dm"): ?>
    <div class="row">
        <div class="col-md-6">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <b>BUKTI PEMBAYARAN STASE IPD</b>
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
               <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>IPD/ITERNA</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/ipd" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">

                    <a href="/upload/ipd<?php echo e(Auth::user()->username); ?>.jpg" target="_blank"><img id="modal-input-foto" style="float: right;" class="img" src="/upload/ipd<?php echo e(Auth::user()->username); ?>.jpg" alt="" width="150" height="150"></a>
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?> -->
                    </li>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <b>BUKTI PEMBAYARAN STASE IKA</b> 
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>IKA</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/ika" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">
                    <img id="modal-input-foto" style="float: right;" class="img" src="/upload/ika<?php echo e(Auth::user()->username); ?>.jpg" alt="" width="150" height="150">
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?> -->
                    </li>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <b>BUKTI PEMBAYARAN STASE BEDAH</b>
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>IKA</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/bedah" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">
                    <img id="modal-input-foto" style="float: right;" class="img" src="/upload/bedah<?php echo e(Auth::user()->username); ?>.jpg" alt="" width="150" height="150">
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?> -->
                    </li>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <b>BUKTI PEMBAYARAN STASE KULIT</b>
                </button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
                <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>IKA</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/kulit" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">
                    <img id="modal-input-foto" style="float: right;" class="img" src="/upload/kulit<?php echo e(Auth::user()->username); ?>.jpg" alt="" width="150" height="150">
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?> -->
                    </li>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingfive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                  <b>BUKTI PEMBAYARAN STASE THT</b>
                </button>
              </h5>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>THT</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/tht" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">
                    <img id="modal-input-foto" style="float: right;" class="img" src="/upload/tht<?php echo e(Auth::user()->username); ?>.jpg" alt="" width="150" height="150">
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?> -->
                    </li>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingmata">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsemata" aria-expanded="false" aria-controls="collapsefive">
                  <b>BUKTI PEMBAYARAN STASE MATA</b>
                </button>
              </h5>
            </div>
            <div id="collapsemata" class="collapse" aria-labelledby="headingmata" data-parent="#accordion">
              <div class="card-body">
                <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>MATA</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/mata" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">
                    <img id="modal-input-foto" style="float: right;" class="img" src="/upload/mata<?php echo e(Auth::user()->username); ?>.jpg" alt="" width="150" height="150">
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?> -->
                    </li>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingsaraf">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesaraf" aria-expanded="false" aria-controls="collapsefive">
                  <b>BUKTI PEMBAYARAN STASE SARAF</b>
                </button>
              </h5>
            </div>
            <div id="collapsesaraf" class="collapse" aria-labelledby="headingsaraf" data-parent="#accordion">
              <div class="card-body">
                <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>SARAF</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/saraf" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">
                    <img id="modal-input-foto" style="float: right;" class="img" src="/upload/saraf<?php echo e(Auth::user()->username); ?>.jpg" alt="" width="150" height="150">
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?> -->
                    </li>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingjiwa">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsejiwa" aria-expanded="false" aria-controls="collapsefive">
                  <b>BUKTI PEMBAYARAN STASE JIWA</b>
                </button>
              </h5>
            </div>
            <div id="collapsejiwa" class="collapse" aria-labelledby="headingjiwa" data-parent="#accordion">
              <div class="card-body">
                <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>JIWA</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/jiwa" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">
                    <img id="modal-input-foto" style="float: right;" class="img" src="/upload/jiwa<?php echo e(Auth::user()->username); ?>.jpg" alt="" width="150" height="150">
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?> -->
                    </li>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingforensik">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseforensik" aria-expanded="false" aria-controls="collapseforensik">
                  <b>BUKTI PEMBAYARAN STASE FORENSIK</b>
                </button>
              </h5>
            </div>
            <div id="collapseforensik" class="collapse" aria-labelledby="headingdorensik" data-parent="#accordion">
              <div class="card-body">
                <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>FORENSIK</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/forensik" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">
                    <img id="modal-input-foto" style="float: right;" class="img" src="/upload/forensik<?php echo e(Auth::user()->username); ?>.jpg" alt="" width="150" height="150">
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?> -->
                    </li>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headinganestesi">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseanestesi" aria-expanded="false" aria-controls="collapseanestesi">
                  <b>BUKTI PEMBAYARAN STASE ANESTESI</b>
                </button>
              </h5>
            </div>
            <div id="collapseanestesi" class="collapse" aria-labelledby="headinganestesi" data-parent="#accordion">
              <div class="card-body">
                 <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>ANESTESI</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/anestesi" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">
                    <img id="modal-input-foto" style="float: right;" class="img" src="/upload/anestesi<?php echo e(Auth::user()->username); ?>.jpg" alt="" width="150" height="150">
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?> -->
                    </li>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingradiologi">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseradiologi" aria-expanded="false" aria-controls="collapseradiologi">
                  <b>BUKTI PEMBAYARAN STASE RADIOLOGI</b>
                </button>
              </h5>
            </div>
            <div id="collapseradiologi" class="collapse" aria-labelledby="headingradiologi" data-parent="#accordion">
              <div class="card-body">
                 <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>RADIOLOGI</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/radiologi" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">
                    <img id="modal-input-foto" style="float: right;" class="img" src="/upload/radiologi<?php echo e(Auth::user()->username); ?>.jpg" alt="" width="150" height="150">
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?> -->
                    </li>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingrehab">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapserehab" aria-expanded="false" aria-controls="collapserehab">
                  <b>BUKTI PEMBAYARAN STASE REHAB MEDIK</b>
                </button>
              </h5>
            </div>
            <div id="collapserehab" class="collapse" aria-labelledby="headingrehab" data-parent="#accordion">
              <div class="card-body">
                 <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>REHAB MEDIS</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/rehab" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">
                    <img id="modal-input-foto" style="float: right;" class="img" src="/upload/rehab<?php echo e(Auth::user()->username); ?>.jpg" alt="" width="150" height="150">
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?> -->
                    </li>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="h">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefarmasi" aria-expanded="false" aria-controls="collapsefiveFarmasi">
                  <b>BUKTI PEMBAYARAN STASE FARMASI</b>
                </button>
              </h5>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingfarmasi" data-parent="#accordion">
              <div class="card-body">
                 <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>FARMASI</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/farmasi" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">
                    <img id="modal-input-foto" style="float: right;" class="img" src="/upload/farmasi<?php echo e(Auth::user()->username); ?>.jpg" alt="" width="150" height="150">
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?> -->
                    </li>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingikm">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseikm" aria-expanded="false" aria-controls="collapseikm">
                  <b>BUKTI PEMBAYARAN STASE IKM</b>
                </button>
              </h5>
            </div>
            <div id="collapseikm" class="collapse" aria-labelledby="headingikm" data-parent="#accordion">
              <div class="card-body">
               <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>IKM</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/ikm" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">
                    <img id="modal-input-foto" style="float: right;" class="img" src="/ocp-/ikm<?php echo e(Auth::user()->username); ?>.jpg" alt="" width="150" height="150">
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?> -->
                    </li>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headinglakesla">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapselakesla" aria-expanded="false" aria-controls="collapselakesla">
                  <b>BUKTI PEMBAYARAN STASE LAKESLA</b>
                </button>
              </h5>
            </div>
            <div id="collapselakesla" class="collapse" aria-labelledby="headinglakesla" data-parent="#accordion">
              <div class="card-body">
                <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>LAKESLA</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/lakesla" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">
                    <img id="modal-input-foto" style="float: right;" class="img" src="/upload/lakesla<?php echo e(Auth::user()->username); ?>.jpg" alt="" width="150" height="150">
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?> -->
                    </li>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingobgyn">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseobgyn" aria-expanded="false" aria-controls="collapseobgyn">
                  <b>BUKTI PEMBAYARAN STASE OBGYN</b>
                </button>
              </h5>
            </div>
            <div id="collapseobgyn" class="collapse" aria-labelledby="headingobgyn" data-parent="#accordion">
              <div class="card-body">
                <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>OBSGYN</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/obgyn" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">
                    <img id="modal-input-foto" style="float: right;" class="img" src="/upload/obgyn<?php echo e(Auth::user()->username); ?>.jpg" alt="" width="150" height="150">
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- <?php if($ipd==0): ?>
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    <?php endif; ?> -->
                    </li>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
    <?php else: ?>
    <?php endif; ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\logdmbaru\resources\views/dashboard.blade.php ENDPATH**/ ?>