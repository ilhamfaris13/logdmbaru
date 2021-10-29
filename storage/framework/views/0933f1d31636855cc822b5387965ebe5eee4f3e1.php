

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                   <?php $__currentLoopData = $user2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <img class="profile-user-img img-responsive img-circle"
                  src="/upload/profile/<?php echo e($us->profile_photo_path); ?>" alt="<?php echo e(Auth::user()->name); ?>"
                   >
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="text-center">
               
                  <!-- <div class="form-group">
                    <a class="btn btn-info btn-sm" href="#" ><i class="far fa-edit"></i>Upload Foto</a>
                  </div> -->
                </div>
                
                <?php $__currentLoopData = $user2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3 class="profile-username text-center">Profil Dokter Muda</h3>

                <p class="text-muted text-center">Details</p>
                
                <ul class="list-group list-group-unbordered mb-3">

                <li class="list-group-item">
                    <b>Nama</b> <a class="float-right"><?php echo e($users->name); ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>NIM</b> <a class="float-right"><?php echo e($users->username); ?></a>
                  </li>
                  
                  <?php $__currentLoopData = $paru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $parus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-group-item">
                    <b>RM</b> <a class="float-right"><?php echo e($parus->nomor_rm); ?></a>
                    <a class="btn btn-primary btn-sm" href="http://103.112.123.217/rm/paru1_view.php?editid1=<?php echo e($parus->Id_paru); ?>&" target="_blank"><i class="far fa-eye"></i></a>
                  </li>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php $__currentLoopData = $andrologi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-group-item">
                    <b>RM</b> <a class="float-right"><?php echo e($rms->nomor_rm); ?></a>
                    <a class="btn btn-primary btn-sm" href="http://103.112.123.217/rm/andrologi1_view.php?editid1=<?php echo e($rms->id_andrologi); ?>&" target="_blank"><i class="far fa-eye"></i></a>
                  </li>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php $__currentLoopData = $ginekologi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-group-item">
                    <b>RM</b> <a class="float-right"><?php echo e($rms->nomor_rm); ?></a>
                    <a class="btn btn-primary btn-sm" href="http://103.112.123.217/rm/ginekologi1_view.php?editid1=<?php echo e($rms->id_gine); ?>&" target="_blank"><i class="far fa-eye"></i></a>
                  </li>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php $__currentLoopData = $interna; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-group-item">
                    <b>RM</b> <a class="float-right"><?php echo e($rms->nomor_rm); ?></a>
                    <a class="btn btn-primary btn-sm" href="http://103.112.123.217/rm/interna1_view.php?editid1=<?php echo e($rms->id_interna); ?>&" target="_blank"><i class="far fa-eye"></i></a>
                  </li>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php $__currentLoopData = $jiwa1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-group-item">
                    <b>RM</b> <a class="float-right"><?php echo e($rms->nomor_rm); ?></a>
                    <a class="btn btn-primary btn-sm" href="http://103.112.123.217/rm/jiwa1_view.php?editid1=<?php echo e($rms->id_Jiwa); ?>&" target="_blank"><i class="far fa-eye"></i></a>
                  </li>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php $__currentLoopData = $kulit1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-group-item">
                    <b>RM</b> <a class="float-right"><?php echo e($rms->nomor_rm); ?></a>
                    <a class="btn btn-primary btn-sm" href="http://103.112.123.217/rm/kulit1_view.php?editid1=<?php echo e($rms->id_kulit); ?>&" target="_blank"><i class="far fa-eye"></i></a>
                  </li>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php $__currentLoopData = $mata1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-group-item">
                    <b>RM</b> <a class="float-right"><?php echo e($rms->nomor_rm); ?></a>
                    <a class="btn btn-primary btn-sm" href="http://103.112.123.217/rm/mata1_view.php?editid1=<?php echo e($rms->id_mata); ?>&" target="_blank"><i class="far fa-eye"></i></a>
                  </li>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php $__currentLoopData = $neurologi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-group-item">
                    <b>RM</b> <a class="float-right"><?php echo e($rms->nomor_rm); ?></a>
                    <a class="btn btn-primary btn-sm" href="http://103.112.123.217/rm/neurologi1_view.php?editid1=<?php echo e($rms->id_neuro); ?>&" target="_blank"><i class="far fa-eye"></i></a>
                  </li>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php $__currentLoopData = $obstetri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-group-item">
                    <b>RM</b> <a class="float-right"><?php echo e($rms->nomor_rm); ?></a>
                    <a class="btn btn-primary btn-sm" href="http://103.112.123.217/rm/obstetri1_view.php?editid1=<?php echo e($rms->Id_obstetri); ?>&" target="_blank"><i class="far fa-eye"></i></a>
                  </li>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php $__currentLoopData = $pediatri1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-group-item">
                    <b>RM</b> <a class="float-right"><?php echo e($rms->nomor_rm); ?></a>
                    <a class="btn btn-primary btn-sm" href="http://103.112.123.217/rm/pediatri1_view.php?editid1=<?php echo e($rms->id_pediatri); ?>&" target="_blank"><i class="far fa-eye"></i></a>
                  </li>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php $__currentLoopData = $tht1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-group-item">
                    <b>RM</b> <a class="float-right"><?php echo e($rms->nomor_rm); ?></a>
                    <a class="btn btn-primary btn-sm" href="http://103.112.123.217/rm/tht1_view.php?editid1=<?php echo e($rms->id_tht); ?>&" target="_blank"><i class="far fa-eye"></i></a>
                  </li>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- COL -->
        <!-- <div class="col-md-6">
          
        </div> -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">STASE : IPD/ITEKNA</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example1">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($log->rumah_sakit_); ?></td>
                      <td><?php echo e($log->dosen); ?></td>
                        <?php if($log->status == 1): ?>
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        <?php else: ?>
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        <?php endif; ?>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></div>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">ILMU KESEHATAN ANAK (IKA)</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive" >
                  <table class="table m-0" id="example2">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $ika; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($log->rumah_sakit_); ?></td>
                      <td><?php echo e($log->dosen); ?></td>
                        <?php if($log->status == 1): ?>
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        <?php else: ?>
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        <?php endif; ?>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></div>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">BEDAH</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example3">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $bedah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($log->rumah_sakit_); ?></td>
                      <td><?php echo e($log->dosen); ?></td>
                        <?php if($log->status == 1): ?>
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        <?php else: ?>
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        <?php endif; ?>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></div>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">KULIT</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example4">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $kulit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($log->rumah_sakit_); ?></td>
                      <td><?php echo e($log->dosen); ?></td>
                        <?php if($log->status == 1): ?>
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        <?php else: ?>
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        <?php endif; ?>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></div>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">THT</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example5">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $tht; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($log->rumah_sakit_); ?></td>
                      <td><?php echo e($log->dosen); ?></td>
                        <?php if($log->status == 1): ?>
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        <?php else: ?>
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        <?php endif; ?>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></div>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">MATA</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example6">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $mata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($log->rumah_sakit_); ?></td>
                      <td><?php echo e($log->dosen); ?></td>
                        <?php if($log->status == 1): ?>
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        <?php else: ?>
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        <?php endif; ?>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></div>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">SARAF</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example7">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $saraf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($log->rumah_sakit_); ?></td>
                      <td><?php echo e($log->dosen); ?></td>
                        <?php if($log->status == 1): ?>
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        <?php else: ?>
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        <?php endif; ?>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></div>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">JIWA</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example8">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $jiwa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($log->rumah_sakit_); ?></td>
                      <td><?php echo e($log->dosen); ?></td>
                        <?php if($log->status == 1): ?>
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        <?php else: ?>
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        <?php endif; ?>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></div>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
          <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">FORENSIK</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example9">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $forensik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($log->rumah_sakit_); ?></td>
                      <td><?php echo e($log->dosen); ?></td>
                        <?php if($log->status == 1): ?>
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        <?php else: ?>
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        <?php endif; ?>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></div>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
          <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">ANESTESI</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example10">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $anestesi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($log->rumah_sakit_); ?></td>
                      <td><?php echo e($log->dosen); ?></td>
                        <?php if($log->status == 1): ?>
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        <?php else: ?>
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        <?php endif; ?>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></div>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
          <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">RADIOLOGI</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example11">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $radiologi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($log->rumah_sakit_); ?></td>
                      <td><?php echo e($log->dosen); ?></td>
                        <?php if($log->status == 1): ?>
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        <?php else: ?>
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        <?php endif; ?>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></div>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
          <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">REHAB MEDIK</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example12">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $rehab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($log->rumah_sakit_); ?></td>
                      <td><?php echo e($log->dosen); ?></td>
                        <?php if($log->status == 1): ?>
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        <?php else: ?>
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        <?php endif; ?>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></div>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
          <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">FARMASI</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-02">
                <div class="table-responsive">
                  <table class="table m-0"id="example13">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $farmasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($log->rumah_sakit_); ?></td>
                      <td><?php echo e($log->dosen); ?></td>
                        <?php if($log->status == 1): ?>
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        <?php else: ?>
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        <?php endif; ?>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></div>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
    </div>
</div>

<script>
  $(function () {
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });

    $('#example3').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    $('#example4').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    $('#example5').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });

    $('#example6').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    $('#example7').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    $('#example8').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });

    $('#example9').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    $('#example10').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    $('#example11').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });

    $('#example12').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    $('#example13').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    
  });
</script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\log_dm\logdm\resources\views/penilaian/detail_dm_kegiatan.blade.php ENDPATH**/ ?>