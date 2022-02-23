
<?php $__env->startSection('content'); ?>
<section class="content">
<div class="container-fluid">
  <!-- ROW 1 -->
  <div class="row">
   <!-- COL 2 -->
    <div class="col-12 col-md-12">
      <!-- COL 2- CARD 1 -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Nilai DM</h3>
        </div>
            <div class="card-body">
			<a href="/pnilai/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
            <table id="tabel1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
						<th>AKSI</th>
						<th> NAMA</th>
						<th> NIM</th> 
						<th> Atitude</th> 	
						<th> Longcase</th>
						<th> Jurnal</th> 
						<th> Minicex</th> 
						<th> Derajat</th> 
						<th> Pengabdian</th> 
						<th> Prettest</th>
						<th> Posttest</th>
						<th> OSCE</th>
						<th> Nilai Akhir</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="data-row">
                    <td class="align-middle">
                      <a class="btn btn-primary btn-sm" href="/detail_dm_kegiatan/<?php echo e($log->id_dm); ?>" target="_blank"><i class="far fa-eye"></i></a>
                      <a class="btn btn-success btn-sm" href="/nilai/<?php echo e($log->id_dm); ?>"><i class="fas fa-edit"></i></a>
                    </td>
                    <td class="align-middle "><?php echo e($log->nama); ?></td>
                    <td class="align-middle "><?php echo e($log->nim); ?></td>
					<td class="align-middle "><?php echo e($log->atitude); ?></td>
					<td class="align-middle "><?php echo e($log->longcase); ?></td>
					<td class="align-middle "><?php echo e($log->jurnal); ?></td>
					<td class="align-middle "><?php echo e($log->minicex); ?></td>
					<td class="align-middle "><?php echo e($log->derajat); ?></td>
					<td class="align-middle "><?php echo e($log->pengabdian); ?></td>
					<td class="align-middle "><?php echo e($log->prettest); ?></td>
					<td class="align-middle "><?php echo e($log->posttest); ?></td>
					<td class="align-middle "><?php echo e($log->osce); ?></td>
					<td class="align-middle "><?php echo e($log->nilai_akhir); ?></td>
					<!-- <td class="align-middle ">0</td>-->
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
            </div>
        </div>
        <!-- END COL 2- CARD 1 -->
        
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
      "autoWidth": false,
      "responsive": true,
    });
    
  });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\log_dm\logdm\resources\views/Penilaian/index.blade.php ENDPATH**/ ?>