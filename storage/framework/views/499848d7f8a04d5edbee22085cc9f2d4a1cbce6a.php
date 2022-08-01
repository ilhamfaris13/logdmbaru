
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
            <h3 class="card-title">Daftar Nilai DM Bedah</h3>
        </div>
     <div class="card-body">
     	<div class="row">
     	<div class="col-6 col-md-6">
     		<form method="get" action="/nilaibedah/filter" enctype="multipart/form-data">
					
          <div class="form-group">
            <label class="col-form-label" for="modal-input-nama">Kelompok </label>
            <select name="kelompok" class="form-control" id="kelompok">
            	<option value="" disabled selected>Pilih</option>
            	<?php $__currentLoopData = $kelompoks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($log->Kelompok); ?>"><?php echo e($log->Kelompok); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>

          <div class="form-group">
							<button type="submit" class="btn btn-primary">Terapkan</button>
					</div>
				</form>
        <div class="form-group">
        <button type="button" class="btn btn-success" onclick="tablesToExcel(['tabel2'], ['nilai_dm'], 'nilai_dm.xls', 'Excel')">Download Template </button>
       
        
            <a type="button" class="btn btn-info" href="/panduannilai">Panduan Nilai</a>
          </div>
					</div>
           <div class="col-6 col-md-6">
            <div class="form-group">
            <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
              UPLOAD NILAI
              </button>
            </div>
            <div class="form-group">
            <a type="button" class="btn btn-warning" href="/nilaiukp">IKM_DM LEMBAR PENILAIAN UKP</a>
            </div>
            <div class="form-group">
            <a type="button" class="btn btn-warning" href="/nilaiukm">IKM_DM LEMBAR PENILAIAN UKM</a>
            </div>
            <div class="form-group">
            <a type="button" class="btn btn-warning" href="/bukukerja">IKM_Buku Kerja Dokter Muda Bagian IKM</a>
            </div>
            <div class="form-group">
            <a type="button" class="btn btn-warning" href="/atitudeikm">Lembar Penilaian Attitude</a>
            </div>
             <!--  <form method="post" action="/dm/import_excel" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
          <label>Upload Nilai</label>
            <div class="form-group">
              <input type="file" name="file" required="required">
            </div>
          <button type="submit" class="btn btn-primary">Upload</button>
      </form> -->
            </div>
         </div>
         <div class="row">
         	<div class="col-6 col-md-6">
         		<!-- <button type="button" class="btn btn-success" onclick="tablesToExcel(['tabel2'], ['nilai_dm'], 'nilai_dm.xls', 'Excel')">Download Template </button>
            <a type="button" class="btn btn-info" href="/panduannilai">Panduan Nilai</a> -->
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
            <h3 class="card-title">Daftar Nilai DM Bedah <?php echo e($getKel); ?></h3>
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
            <th> Responsi</th>
						<th> Nilai Akhir</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="data-row">
                    <td class="align-middle">
                      <a class="btn btn-primary btn-sm" href="/detail_dm_kegiatan/<?php echo e($log->id_dm); ?>" target="_blank"><i class="far fa-eye"></i></a>
                     
                      <a href="/hpsnilai/<?php echo e($log->id_dm); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                    <td class="align-middle "><?php echo e($log->NAMA); ?></td>
                    <td class="align-middle "><?php echo e($log->nim_profesi_dokter); ?></td>
                    <?php if($log->atitude== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
          					<td class="align-middle "><?php echo e($log->atitude); ?></td>
                    <?php endif; ?>
                    <?php if($log->longcase== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->longcase); ?></td>
                    <?php endif; ?>
          					 <?php if($log->jurnal== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->jurnal); ?></td>
                    <?php endif; ?>
          					 <?php if($log->minicex== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->minicex); ?></td>
                    <?php endif; ?>
          					 <?php if($log->derajat== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->derajat); ?></td>
                    <?php endif; ?>
          					 <?php if($log->pengabdian== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->pengabdian); ?></td>
                    <?php endif; ?>
          					 <?php if($log->prettest== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->prettest); ?></td>
                    <?php endif; ?>
          					 <?php if($log->posttest== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->posttest); ?></td>
                    <?php endif; ?>
          					 <?php if($log->dops== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->dops); ?></td>
                    <?php endif; ?>
          					 <?php if($log->osce== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->osce); ?></td>
                    <?php endif; ?>
                     <?php if($log->responsi== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->responsi); ?></td>
                    <?php endif; ?>
                    <?php if($log->nilai_akhir== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->nilai_akhir); ?></td>
                    <?php endif; ?>
          				
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
                <th colspan="7">STASE : BEDAH</th>
                <th colspan="7">Setelah mengisi nilai, silahkan di save ke format XLSX</th>
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
            <th> Responsi</th>
            <th> Nilai Akhir</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="data-row">
                    
                    <td class="align-middle "><?php echo e($log->NAMA); ?></td>
                    <td class="align-middle "><?php echo e($log->nim_profesi_dokter); ?></td>
         <?php if($log->atitude== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->atitude); ?></td>
                    <?php endif; ?>
                    <?php if($log->longcase== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->longcase); ?></td>
                    <?php endif; ?>
                     <?php if($log->jurnal== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->jurnal); ?></td>
                    <?php endif; ?>
                     <?php if($log->minicex== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->minicex); ?></td>
                    <?php endif; ?>
                     <?php if($log->derajat== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->derajat); ?></td>
                    <?php endif; ?>
                     <?php if($log->pengabdian== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->pengabdian); ?></td>
                    <?php endif; ?>
                     <?php if($log->prettest== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->prettest); ?></td>
                    <?php endif; ?>
                     <?php if($log->posttest== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->posttest); ?></td>
                    <?php endif; ?>
                     <?php if($log->dops== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->dops); ?></td>
                    <?php endif; ?>
                     <?php if($log->osce== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->osce); ?></td>
                    <?php endif; ?>
                     <?php if($log->responsi== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->responsi); ?></td>
                    <?php endif; ?>
                    <?php if($log->nilai_akhir== null): ?>
                    <td class="align-middle ">0</td>
                    <?php else: ?>
                    <td class="align-middle "><?php echo e($log->nilai_akhir); ?></td>
                    <?php endif; ?>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
            </div>
        </div>
        <!-- END COL 2- CARD 1 -->
      <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="post" action="/pnilai/import_nilai_bedah" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
            </div>
            <div class="modal-body">
 
              <?php echo e(csrf_field()); ?>

 
              <label>Pilih file excel</label>
              <div class="form-group">
                <input type="file" name="file" required="required">
              </div>
 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Import</button>
            </div>
          </div>
        </form>
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
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", type="text/javascript">
  function Export() {
    $("#table1").table2excel({
      filename: "file.xls"
    });
  }
</script> -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\logdmbaru\resources\views/nstase/nilai_bedah.blade.php ENDPATH**/ ?>