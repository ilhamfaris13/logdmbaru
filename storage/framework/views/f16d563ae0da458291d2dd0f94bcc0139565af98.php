<!DOCTYPE html>
<html>
<head>
	<title>Laporan Program Kepaniteraan Dokter Muda</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
</head>
<body>
	<style type="text/css">
  
	/* table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		} */
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}
   
    #pageFooter:after {
    counter-increment: page;
    content: counter(page);
}

        
	</style>
  
  <center>
  <table>
    <tr>
      <td><img src="<?php echo e(public_path('/assets/dist/img/logo-uht-1.png')); ?>" width="90" height="90"></td>
      <!-- <td><img src="<?php echo e(public_path('/assets/dist/img/logo-uht-1.png')); ?>" width="90" height="90"></td> -->
      <td>
      <center>
        <font size="4">Fakultas Kedokteran </font><br>
        <font size="5"><b>Universitas Hang Tuah Surabaya</b></font><br>
        <font size="2">Bidang Profesi : Program Kepaniteraan Dokter Muda</font><br>
        <font size="2"><i>Jl. Gadung no 1 Komplek Barat RSAL dr. Ramelan
          Surabaya 
          Jawa Timur : 60111 Telp./Fax (031) 8433626, 8438750 Email : fk@hangtuah.ac.id</i></font>
      </center>
      </td>
    </tr>
    <tr>
      <td colspan="2"><hr></td>
    </tr>
  
  </table>
  </center>
  <!-- Kop Header -->
  <table border="0">
    <tr>
      <!-- <td rowspan="2"><img style="width: 150px; border-radius: 75px; border: 2px solid white; margin: 0px 20px"class=""
        src="/upload/profile/<?php echo e(Auth::user()->profile_photo_path); ?>"
           alt="Avatar"></td>
         <td style="margin: 0px 20px;" rowspan="2"> -->
         <td rowspan="2"><img style="width: 150px; border-radius: 75px; border: 2px solid white; margin: 0px 20px"class=""
        src="<?php echo e(public_path('/upload/profile/'.Auth::user()->profile_photo_path)); ?>"
           alt="Avatar"></td>
         <td style="margin: 0px 20px;" rowspan="2">
         <!-- <td rowspan="2"><img style="width: 150px; border-radius: 75px; border: 2px solid white;" class=""
        src="<?php echo e(public_path('storage/'.Auth::user()->profile_photo_path.'')); ?>"
         height="170px" width="150px" alt="Avatar"></td>
         <td> -->
         <ul >
        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="list-group-item">
          <b>Nama :</b> <a class="float-right"><?php echo e(Auth::user()->name); ?></a>
        </li>
        <li class="list-group-item">
          <b>NIM :</b> <a class="float-right"><?php echo e(Auth::user()->username); ?></a>
        </li>
        <li class="list-group-item">
          <b>Kelompok:</b> <a class="float-right"><?php echo e($users->kelompok); ?></a>
        </li>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
         </td>
         
    </tr>
   
    
    
  
  </table>
  <!-- Profile -->
  
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
         
        </div>
        <!-- /.card-header -->
        <div class="card-body" >
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">ILMU PENYAKIT DALAM</h3>
                </center>
            </caption>
            <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> DPK</th>
                      <th> TANGGAL</th>
                      <th> STATUS</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              <?php $i=1 ?>
              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                        <td ><?php echo e($log->tempat); ?></td>
                        <td ><?php echo e($log->rumah_sakit_); ?></td>
                        <td ><?php echo e($log->dosen); ?></td>
                        <td ><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                         <td class="align-middle word-break description"><img src="<?php echo e(public_path('/upload/profile/check.png')); ?>" width="24" height="24"></td>
                          
                         
        
                        </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->
  <div style="page-break-before:always">&nbsp;</div> 
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">ILMU KESEHATAN ANAK (IKA)</h3>
                </center>
            </caption>
            <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> DPK</th>
                      <th> TANGGAL</th>
                      <th> STATUS</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              <?php $i=1 ?>
              <?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                        <td ><?php echo e($log->tempat); ?></td>
                        <td ><?php echo e($log->rumah_sakit_); ?></td>
                        <td ><?php echo e($log->dosen); ?></td>
                        <td ><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                         <td class="align-middle word-break description"><img src="<?php echo e(public_path('/upload/profile/check.png')); ?>" width="24" height="24"></td>
                          
                         
        
                        </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->
  <div style="page-break-before:always">&nbsp;</div> 
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">BEDAH</h3>
                </center>
            </caption>
             <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> DPK</th>
                      <th> TANGGAL</th>
                      <th> STATUS</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              <?php $i=1 ?>
              <?php $__currentLoopData = $data3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                        <td ><?php echo e($log->tempat); ?></td>
                        <td ><?php echo e($log->rumah_sakit_); ?></td>
                        <td ><?php echo e($log->dosen); ?></td>
                        <td ><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                         <td class="align-middle word-break description"><img src="<?php echo e(public_path('/upload/profile/check.png')); ?>" width="24" height="24"></td>
                          
                         
        
                        </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->
  <div style="page-break-before:always">&nbsp;</div> 

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">KULIT</h3>
                </center>
            </caption>
             <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> DPK</th>
                      <th> TANGGAL</th>
                      <th> STATUS</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              <?php $i=1 ?>
              <?php $__currentLoopData = $data4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                        <td ><?php echo e($log->tempat); ?></td>
                        <td ><?php echo e($log->rumah_sakit_); ?></td>
                        <td ><?php echo e($log->dosen); ?></td>
                        <td ><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                         <td class="align-middle word-break description"><img src="<?php echo e(public_path('/upload/profile/check.png')); ?>" width="24" height="24"></td>
                          
                         
        
                        </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->
  <div style="page-break-before:always">&nbsp;</div> 
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">THT</h3>
                </center>
              </div>
            </caption>
             <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> DPK</th>
                      <th> TANGGAL</th>
                      <th> STATUS</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              <?php $i=1 ?>
              <?php $__currentLoopData = $data5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                        <td ><?php echo e($log->tempat); ?></td>
                        <td ><?php echo e($log->rumah_sakit_); ?></td>
                        <td ><?php echo e($log->dosen); ?></td>
                        <td ><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                         <td class="align-middle word-break description"><img src="<?php echo e(public_path('/upload/profile/check.png')); ?>" width="24" height="24"></td>
                          
                         
        
                        </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->
  <div style="page-break-before:always">&nbsp;</div> 
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">MATA</h3>
                </center>
            </caption>
             <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> DPK</th>
                      <th> TANGGAL</th>
                      <th> STATUS</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              <?php $i=1 ?>
              <?php $__currentLoopData = $data6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                        <td ><?php echo e($log->tempat); ?></td>
                        <td ><?php echo e($log->rumah_sakit_); ?></td>
                        <td ><?php echo e($log->dosen); ?></td>
                        <td ><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                         <td class="align-middle word-break description"><img src="<?php echo e(public_path('/upload/profile/check.png')); ?>" width="24" height="24"></td>
                          
                         
        
                        </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->
  <div style="page-break-before:always">&nbsp;</div> 
  <!-- Presentasi Kasus / Responsi -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">SARAF</h3>
                </center>
            </caption>
             <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> DPK</th>
                      <th> TANGGAL</th>
                      <th> STATUS</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              <?php $i=1 ?>
              <?php $__currentLoopData = $data7; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                        <td ><?php echo e($log->tempat); ?></td>
                        <td ><?php echo e($log->rumah_sakit_); ?></td>
                        <td ><?php echo e($log->dosen); ?></td>
                        <td ><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                         <td class="align-middle word-break description"><img src="<?php echo e(public_path('/upload/profile/check.png')); ?>" width="24" height="24"></td>
                          
                         
        
                        </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->
  <div style="page-break-before:always">&nbsp;</div> 
<!-- Karya Tulis / Referat -->
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">JIWA</h3>
                </center>
            </caption>
             <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> DPK</th>
                      <th> TANGGAL</th>
                      <th> STATUS</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              <?php $i=1 ?>
              <?php $__currentLoopData = $data8; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                        <td ><?php echo e($log->tempat); ?></td>
                        <td ><?php echo e($log->rumah_sakit_); ?></td>
                        <td ><?php echo e($log->dosen); ?></td>
                        <td ><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                         <td class="align-middle word-break description"><img src="<?php echo e(public_path('/upload/profile/check.png')); ?>" width="24" height="24"></td>
                          
                         
        
                        </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->
  <div style="page-break-before:always">&nbsp;</div> 
  <!-- Bimbingan Soal UKDI -->
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">FORENSIK</h3>
                </center>
            </caption>
             <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> DPK</th>
                      <th> TANGGAL</th>
                      <th> STATUS</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              <?php $i=1 ?>
              <?php $__currentLoopData = $data9; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                        <td ><?php echo e($log->tempat); ?></td>
                        <td ><?php echo e($log->rumah_sakit_); ?></td>
                        <td ><?php echo e($log->dosen); ?></td>
                        <td ><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                         <td class="align-middle word-break description"><img src="<?php echo e(public_path('/upload/profile/check.png')); ?>" width="24" height="24"></td>
                          
                         
        
                        </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->
  <div style="page-break-before:always">&nbsp;</div> 
  <!-- Ketramplian Klinis -->
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">ANESTESI</h3>
                </center>
            </caption>
             <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> DPK</th>
                      <th> TANGGAL</th>
                      <th> STATUS</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              <?php $i=1 ?>
              <?php $__currentLoopData = $data10; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                        <td ><?php echo e($log->tempat); ?></td>
                        <td ><?php echo e($log->rumah_sakit_); ?></td>
                        <td ><?php echo e($log->dosen); ?></td>
                        <td ><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                         <td class="align-middle word-break description"><img src="<?php echo e(public_path('/upload/profile/check.png')); ?>" width="24" height="24"></td>
                          
                         
        
                        </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->
  <div style="page-break-before:always">&nbsp;</div> 
  <!-- Prolonged Exam -->
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">RADIOLOGI</h3>
                </center>
            </caption>
             <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> DPK</th>
                      <th> TANGGAL</th>
                      <th> STATUS</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              <?php $i=1 ?>
              <?php $__currentLoopData = $data11; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                        <td ><?php echo e($log->tempat); ?></td>
                        <td ><?php echo e($log->rumah_sakit_); ?></td>
                        <td ><?php echo e($log->dosen); ?></td>
                        <td ><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                         <td class="align-middle word-break description"><img src="<?php echo e(public_path('/upload/profile/check.png')); ?>" width="24" height="24"></td>
                          
                         
        
                        </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->

  <div style="page-break-before:always">&nbsp;</div> 
  <!-- Ujian Akhir CO-SCHAAP -->
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">REHAB MEDIK</h3>
                </center>
            </caption>
             <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> DPK</th>
                      <th> TANGGAL</th>
                      <th> STATUS</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              <?php $i=1 ?>
              <?php $__currentLoopData = $data12; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                        <td ><?php echo e($log->tempat); ?></td>
                        <td ><?php echo e($log->rumah_sakit_); ?></td>
                        <td ><?php echo e($log->dosen); ?></td>
                        <td ><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                         <td class="align-middle word-break description"><img src="<?php echo e(public_path('/upload/profile/check.png')); ?>" width="24" height="24"></td>
                          
                         
        
                        </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->
  <div style="page-break-before:always">&nbsp;</div> 
  <!-- FARMASI -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">FARMASI</h3>
                </center>
            </caption>
             <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> DPK</th>
                      <th> TANGGAL</th>
                      <th> STATUS</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              <?php $i=1 ?>
              <?php $__currentLoopData = $data13; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                        <td ><?php echo e($log->tempat); ?></td>
                        <td ><?php echo e($log->rumah_sakit_); ?></td>
                        <td ><?php echo e($log->dosen); ?></td>
                        <td ><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                         <td class="align-middle word-break description"><img src="<?php echo e(public_path('/upload/profile/check.png')); ?>" width="24" height="24"></td>
                          
                         
        
                        </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->
  <div style="page-break-before:always">&nbsp;</div> 
  <!-- IKM -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">ILMU KESEHATAN MASYARAKAT</h3>
                </center>
            </caption>
             <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> DPK</th>
                      <th> TANGGAL</th>
                      <th> STATUS</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              <?php $i=1 ?>
              <?php $__currentLoopData = $data14; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                        <td ><?php echo e($log->tempat); ?></td>
                        <td ><?php echo e($log->rumah_sakit_); ?></td>
                        <td ><?php echo e($log->dosen); ?></td>
                        <td ><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                         <td class="align-middle word-break description"><img src="<?php echo e(public_path('/upload/profile/check.png')); ?>" width="24" height="24"></td>
                          
                         
        
                        </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->
  <div style="page-break-before:always">&nbsp;</div> 
  <!-- LAKESLA -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">LAKESLA</h3>
                </center>
            </caption>
             <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> DPK</th>
                      <th> TANGGAL</th>
                      <th> STATUS</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              <?php $i=1 ?>
              <?php $__currentLoopData = $data15; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                        <td ><?php echo e($log->tempat); ?></td>
                        <td ><?php echo e($log->rumah_sakit_); ?></td>
                        <td ><?php echo e($log->dosen); ?></td>
                        <td ><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                         <td class="align-middle word-break description"><img src="<?php echo e(public_path('/upload/profile/check.png')); ?>" width="24" height="24"></td>
                          
                         
        
                        </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->
  <div style="page-break-before:always">&nbsp;</div> 
  <!-- OBSTETRI DAN GINEKOLOGI -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">OBSTETRI DAN GINEKOLOGI</h3>
                </center>
            </caption>
             <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> DPK</th>
                      <th> TANGGAL</th>
                      <th> STATUS</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              <?php $i=1 ?>
              <?php $__currentLoopData = $data16; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr >
                        <td ><?php echo e($log->tempat); ?></td>
                        <td ><?php echo e($log->rumah_sakit_); ?></td>
                        <td ><?php echo e($log->dosen); ?></td>
                        <td ><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                         <td class="align-middle word-break description"><img src="<?php echo e(public_path('/upload/profile/check.png')); ?>" width="24" height="24"></td>
                          
                         
        
                        </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->
  <div style="page-break-before:always">&nbsp;</div> 

  </div>
	<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": true,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": false,
      });
  
      $('#tabel1').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": false,
      });
      
    });
  </script>
   

</body>
</html><?php /**PATH C:\xampp\htdocs\logdmbaru\resources\views/pdf_view.blade.php ENDPATH**/ ?>