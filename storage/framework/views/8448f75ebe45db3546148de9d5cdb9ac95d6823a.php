<?php $__env->startSection('content'); ?>
  <div class="container">
  
    <div class="row">
    <form method="post" action="<?php echo e(route('sync.multi')); ?>" >
            <?php echo csrf_field(); ?>
           
        <table id="example2" class="table table-responsive table-bordered table-hover">
                  <thead>
                  
                    <tr>
                        <th>KODE</th>
                        <th> ALIAS</th>
                        <th> CEK</th>
                        
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $icd->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="data-row">
                    <td><?php echo e($log->KODE); ?></td>
                    <td><?php echo e($log->ALIAS); ?></td>
                
                    <td><!-- This input -->
                        <input type="checkbox" name="selected_values[]" value="<?php echo e($log->ID); ?>">
                    </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
        <button type="submit" name="button">Get me some selected people</button>
        </form>
    </div>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\log_dm\logdm\resources\views/syncdb.blade.php ENDPATH**/ ?>