
<?php $__env->startSection('content'); ?>
<section class="content">
<div class="container-fluid">
  <div class="row">
  <div class="col-6 col-md-6">
    <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah User</h3>
            </div>
            <div class="card-body">
            <?php $__currentLoopData = $user2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form method="POST" action="<?php echo e(route('admin.edit')); ?>" >
            <?php echo csrf_field(); ?>
                
                    
                    <input type="text" name="id" class="form-control" id="id" value="<?php echo e($log->id); ?>" hidden>
              
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-username">Username </label>
                    <input type="text" name="username" class="form-control" id="username" value="<?php echo e($log->username); ?>" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-nama">Nama </label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo e($log->name); ?>" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-email">Email </label>
                    <input type="email" name="email" class="form-control" id="email" value="<?php echo e($log->email); ?>" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-level">Level</label>
                    <select name="level" class="form-control" id="level" style="text-transform: capitalize;">
                    <option value="<?php echo e($log->level); ?>" ><?php echo e($log->level); ?></option>
                    <option value="admin" >Admin</option>
                    <option value="dosen" >Dosen/Dokter</option>
                    <option value="dm" >Dokter Muda</option>
                     </select>
                </div>
               
                <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
             </div>
            </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        
    </div>
    <div class="col-6 col-md-6">
    <div class="card">
            <div class="card-header">
                <h3 class="card-title">Reset Password</h3>
            </div>
            <div class="card-body">
            <?php $__currentLoopData = $user2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form method="POST" action="<?php echo e(route('admin.reset')); ?>" >
            <?php echo csrf_field(); ?>
            <input type="text" name="id" class="form-control" id="id" value="<?php echo e($log->id); ?>" hidden>
            <input type="text" name="username" class="form-control" id="username" value="<?php echo e($log->username); ?>" hidden>
            <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
            </div>
            </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        
    </div>
   
   
    </div>
  
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


<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\logdmbaru\resources\views/admin/edit.blade.php ENDPATH**/ ?>