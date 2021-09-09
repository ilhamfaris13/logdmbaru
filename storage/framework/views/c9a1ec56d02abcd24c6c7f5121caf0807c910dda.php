
<?php $__env->startSection('content'); ?>
<section class="content">
<div class="container-fluid">
  <!-- ROW 1 -->
  <div class="row">
    <!-- COL 1 -->
  <div class="col-12 col-md-12">
    <!-- COL1-CARD 1 -->
  <div class="card">
    <div class="card-header">
    <h3 class="card-title">Daftar Dokter Muda</h3>
    </div>
    <div class="card-body">
      <!-- <div class="form-group">
        <label class="col-form-label" for="modal-input-id">Kelompok </label>
          <select name="jenis" class="form-control" id="jenis" onChange="SelectRedirect();" >
            <option value="45 - UH" ><a href="#" >45 - UH</a></option>
            <option value="45 - A" >45 - A</option>
          </select>
      </div> -->
      <table id="tabel1" class="table table-bordered table-hover">
      <thead>                  
      <tr>
      <th> NIM</th>
      <th> NAMA</th>
      <th> LEVEL</th>
      <th> UBAH</th>
      </tr>
      </thead>
      <tbody>
      <?php $__currentLoopData = $user2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr class="data-row">
      <td class="align-middle "><?php echo e($log->nim_profesi_dokter); ?></td>
      <td class="align-middle "><?php echo e($log->NAMA); ?></td>
      <td class="align-middle word-break" style="text-transform: capitalize;"><?php echo e($log->Kelompok); ?></td>
      <td class="align-middle">
      <a class="btn btn-primary btn-sm" href="#" target="_blank"><i class="far fa-eye"></i></a>
      <a class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
      </td>
      </tr>                    
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
      </table>
    </div>
  </div>
        <!-- END COL1-CARD 1 -->
        
    </div>
   <!-- COL 2 -->
    <div class="col-6 col-md-6">
      <!-- COL2-CARD 2 -->
      <div class="card">
        
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
      "autoWidth": true,
      "responsive": true,
    });
    
  });
  
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\log_dm\logdm\resources\views/admin/master_dm.blade.php ENDPATH**/ ?>