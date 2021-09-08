
<?php $__env->startSection('content'); ?>
<section class="content">
<div class="container-fluid">
  <!-- ROW 1 -->
  <div class="row">
    <!-- COL 1 -->
  <div class="col-6 col-md-6">
      <!-- COL 2- CARD 2 -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sinkron Database</h3>
        </div>
            <div class="card-body">
            <form id="edit-form" method="POST" action="<?php echo e(route('sync.create')); ?>">
                        <?php echo csrf_field(); ?>
            
              <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Sinkron User DM" />
             </div>
                      
        </form>
        <form id="edit-form" method="POST" action="<?php echo e(route('sync.create_dosen')); ?>">
                        <?php echo csrf_field(); ?>
            
              <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Sinkron User Dosen/Dokter" />
             </div>
            </div>               
        </form>
            </div>
        </div>
        <!-- END COL 2- CARD 1 -->
  </div>
   <!-- COL 2 -->
  </div>
  



</section>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": false,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": false,
    });

    $('#tabel1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
    
  });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\log_dm\logdm\resources\views/admin/master_db.blade.php ENDPATH**/ ?>