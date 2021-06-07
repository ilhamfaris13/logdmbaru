
<?php $__env->startSection('content'); ?>
<section class="content">
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Registrasi Akun Baru</h3>
            </div>
            <div class="card-body">
            <form >
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-id">Username </label>
                    <input type="text" name="username" class="form-control" id="username" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-id">Nama </label>
                    <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-id">Email </label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-id">Level</label>
                    <input type="text" name="level" class="form-control" id="level" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-id">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-id">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                </div>
                <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
             </div>
            </form>
            </div>
           
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Kegiatan</h3>
            </div>
            <div class="card-body">
            <table id="tabel1" class="table table-responsive table-bordered table-hover">
                  <thead>
                  
                    <tr>
                      <th> NAMA</th>
                      <th> USERNAME</th>
                      <th> LEVEL</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="data-row">
                   
                    <td class="align-middle "><?php echo e($log->nama); ?></td>
                    <td class="align-middle word-break "><?php echo e($log->username); ?></td>
                    <td class="align-middle word-break "><?php echo e($log->tanggal); ?></td>
                  
                    </tr>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
            <div>
            <!-- card body -->
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


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\log_dm\logdm\resources\views/admindashboard.blade.php ENDPATH**/ ?>