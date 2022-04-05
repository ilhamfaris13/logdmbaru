<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Log Book Dokter Muda Fakultas Kedokteran |  Universitas Hangtuah</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php echo $__env->yieldPushContent('meta'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
  <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
<!-- Font Awesome JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"> </script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"> </script>

  
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    
  
    
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    
    <ul class="navbar-nav ml-auto">
    <li>
               <a class="nav-link" href="<?php echo e(route('logout')); ?>"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              Logout
              </a>

              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
               <?php echo e(csrf_field()); ?>

                </form>
            </li>
    </ul>
    
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/assets/dist/img/logo-uht-1.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Buku Kerja</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
   
     
     
        <div class="image" >
          <img src="/upload/profile/<?php echo e(Auth::user()->profile_photo_path); ?>" alt="<?php echo e(Auth::user()->name); ?>" class="img-circle ">
        </div>
        <div class="info">
          <a href="<?php echo e(url('/user/profile')); ?>" class="d-block"><?php echo e(Auth::user()->name); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="<?php echo e(url('/dashboard')); ?>" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item ">
         
          <?php if( Auth::user()->level == "dosen"): ?>
            <a href="<?php echo e(url('/kegiatan')); ?>" class="nav-link">
            <?php else: ?>
            <a href="<?php echo e(url('/signaturepad')); ?>" class="nav-link">
            <?php endif; ?>
              <i class="nav-icon fa fa-briefcase"></i>
              <p>
                Daftar Kegiatan
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>
          <!-- PENILAIAN -->
          <?php if( Auth::user()->level == "dm"): ?>
            <li class="nav-item">
            <a href="<?php echo e(url('/bimbingan')); ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Soal UKMPPD
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="http://103.112.123.217/rm/login.php" class="nav-link" target="_blank">
              <i class="nav-icon fas fa-ambulance"></i>
              <p>
                Rekam Medis
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            </li>
          <?php else: ?>
          <li class="nav-item">
            <a href="<?php echo e(url('/fnilai')); ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Daftar Nilai
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
			<!--
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('/responsi')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Responsi dan Referat</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?php echo e(url('/ujian')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ujian Akhir CO-SCHAAP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('/evaluasi')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>EVALUASI DM </p>
                </a>
              </li>
            
            </ul>
			PENILAIAN -->
          </li>
         <!--  <li class="nav-item ">
            <a href="<?php echo e(url('/dm_kegiatan')); ?>" class="nav-link">
              <i class="nav-icon fa fa-book-open"></i>
              <p>
                Detail Kegiatan DM
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li> -->
          <?php endif; ?>
          <!-- /PENILIAIAN -->
         
          <li class="nav-item ">
            <a href="<?php echo e(url('/panduan')); ?>" class="nav-link">
              <i class="nav-icon fa fa-info-circle"></i>
              <p>
                Pusat Bantuan
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>
         
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    <?php echo $__env->yieldContent('tittle'); ?>
    <small><?php echo $__env->yieldContent('subtitle'); ?></small>
    </h1>
    <?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i>Berhasil</h4>
    <hr>
    <p class="mb-0">
    <?php echo session('success'); ?>

    </p>
    </div>
    <?php endif; ?>
    <?php if(session('failed')): ?>
    <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-times-circle"></i>Gagal</h4>
    <hr>
    <p class="mb-0">
    <?php echo session('failed'); ?>

    </p>
    </div>
    <?php endif; ?>
    <?php if(session('delete')): ?>
    <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-times-circle"></i>Sukses Menghapus Data</h4>
    <hr>
    <p class="mb-0">
    <?php echo session('delete'); ?>

    </p>
    </div>
    <?php endif; ?>
    <?php if(session('warning')): ?>
    <div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-exclamation-triangle"></i>Peringatan</h4>
    <hr>
    <p class="mb-0">
    <?php echo session('warning'); ?>

    </p>
    </div>
    <?php endif; ?>
    <?php if(session('info')): ?>
    <div class="alert alert-info alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i>Perhatian</h4>
    <hr>
    <p class="mb-0">
    <?php echo session('info'); ?>

    </p>
    </div>
    <?php endif; ?>
    </section>

    <!-- Main content -->
    <section class="content">
      
    <?php echo $__env->yieldContent('content'); ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2020 <a href="http://fk.hangtuah.ac.id">Fakultas Kedokteran | Universitas Hang Tuah Surabaya</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<?php echo $__env->yieldPushContent('script'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\logdmbaru\resources\views/admin/master.blade.php ENDPATH**/ ?>