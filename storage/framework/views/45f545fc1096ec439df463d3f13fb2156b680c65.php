
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
     	<div class="row">
     	<div class="col-6 col-md-6">
     		<form method="get" action="/fnilai/filter" enctype="multipart/form-data">
					
          <div class="form-group">
            <label class="col-form-label" for="modal-input-nama">Kelompok </label>
            <select name="kelompok" class="form-control" id="kelompok">
            	<option value="" disabled selected>Pilih</option>
            	<?php $__currentLoopData = $kelompoks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($log->Kelompok); ?>"><?php echo e($log->Kelompok); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="modal-footer">
							<button type="submit" class="btn btn-primary">Cari</button>
					</div>
				</form>
					</div>
         </div>
         <div class="row">
         	<div class="col-6 col-md-6">
         		<button type="button" class="btn btn-success" onclick="tablesToExcel(['tabel2'], ['nilai_dm'], 'nilai_dm.xls', 'Excel')">Export </button>
            <a type="button" class="btn btn-info" href="/panduannilai">Panduan Nilai</a>
			<!-- <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
			IMPORT EXCEL
			</button> -->
         	</div>
         </div>
          
          
       </div>
     </div>
    </div>
        <!-- END COL 2- CARD 1 -->
        
    </div>
   
  </div>
  <!-- COL 2 -->
    <div class="col-12 col-md-12">
      <!-- COL 2- CARD 1 -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Nilai DM <?php echo e($getKel); ?></h3>
        </div>
            <div class="card-body">
			<!-- <a href="/pnilai/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a> -->
			
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
            <th> DOPS</th>
						<th> OSCE</th>
						<th> Nilai Akhir</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="data-row">
                    <td class="align-middle">
                      <a class="btn btn-primary btn-sm" href="/detail_dm_kegiatan/<?php echo e($log->id_dm); ?>" target="_blank"><i class="far fa-eye"></i></a>
                      <!-- <a class="btn btn-success btn-sm" href="/nilai/<?php echo e($log->nim); ?>"><i class="fas fa-edit"></i></a> -->
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
					<td class="align-middle "><?php echo e($log->dops); ?></td>
          <td class="align-middle "><?php echo e($log->osce); ?></td>
					<td class="align-middle "><?php echo e($log->nilai_akhir); ?></td>
					<!-- <td class="align-middle ">0</td>-->
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>

                <table id="tabel2" class="table table-bordered table-hover" hidden>
                  <thead>
              <tr>
                <th colspan="14">NILAI KEPANITERAAN</th>
              </tr>
              <tr>
                <th colspan="7">KELOMPOK : <?php echo e($getKel); ?> </th>
                <th colspan="7">STASE : </th>
              </tr>
            <tr>
            
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
            <th> DOPS</th>
            <th> OSCE</th>
            <th> Nilai Akhir</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="data-row">
                    
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
          <td class="align-middle "><?php echo e($log->dops); ?></td>
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
      "autoWidth": true,
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
<script src="<?php echo e(URL::to('js/export.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\logdmbaru\logdmbaru\resources\views/Penilaian/nilai_filter.blade.php ENDPATH**/ ?>