

<?php $__env->startSection('content'); ?>
<section class="content">
  <!-- main -->
  <div class="container-fluid">
 <!--row tabel-->
        <div class="row">
           
          <div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Buku Kegiatan Kepaniteraan</h3>
                
              </div>
             
              <!-- /.card-header -->
              <div class="card-body">
              <form method="get" action="kegiatan/filter" enctype="multipart/form-data">
          
              <div class="input-group">
                <input type="text" name="nim" placeholder="Cari NIM..." class="form-control">
                <span class="input-group-append">
                <button type="submit" class="btn btn-primary">Cari</button>
                <a type="button" class="btn btn-info" href="/kegiatan"><i class="fa fa-retweet"></i></a>
                </span>
              </div>
        </form>
                <table id="ex" class="table table-responsive table-bordered table-hover">
                  <thead>
                  
                    <tr>

                      <th><input type="checkbox"  id="chkAll" /></th>
                      <th>AKSI/STATUS</th>
                      <th> NAMA</th>
                      <th> NIM</th>
                      <th> KEGIATAN KEPANITERAAN</th>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> STASE</th>
                      <th> TANGGAL</th>
                      <th> KETERANGAN</th>
                      <th> DOSEN PEMBIMBING KLINIK</th>
                      <th hidden> </th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  <form id="edit-form" method="POST" action="<?php echo e(route('signature.edit')); ?>">
                   <?php echo csrf_field(); ?>
                  <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="data-row">
                   
                      <?php if($log->status == 0): ?>
                         <!--<button type="button" class="btn btn-warning" id="edit-item" data-item-id="<?php echo e($log->id); ?>">Verifikasi</button>-->
                         
                   
                   
                 
                   <td class="align-middle">
                   <input type="checkbox" class="chkVerif" name="cekVerif[]" value="<?php echo e($log->id); ?>" />
                   </td>
                   <td class="align-middle">
                  <span class="badge bg-red">Belum Verifikasi</span>
                  </td>
                  <!--<input type="checkbox" name="status[<?php echo e($log->id); ?>]" >-->
                  
        
                      <?php else: ?>  
                      <td class="align-middle"></td>
                      <td class="align-middle">
                      <span class="badge bg-green">Sudah diverifikasi</span>
                      </td>
                      <?php endif; ?>
                        <td class="align-middle name"><?php echo e($log->nama); ?></td>
                      <td class="align-middle nim"><?php echo e($log->username); ?></td>
                      <td class="align-middle jenis"><?php echo e($log->jenis); ?></td>
                      <td class="align-middle word-break tempat"><?php echo e($log->tempat); ?></td>
                      <td class="align-middle word-break rs"><?php echo e($log->rumah_sakit_); ?></td>
                      <td class="align-middle word-break stase"><?php echo e($log->stase_); ?></td>
                      <td class="align-middle tanggal"><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                      <td class="align-middle keterangan"><?php echo e($log->keterangan); ?></td>
                      <td class="align-middle word-break dosen"><?php echo e($log->dosen); ?></td>
                      <td class="align-middle foto" hidden><?php echo e($log->profile_photo_path); ?></td>
                     
                      </td>
                     

                    </tr>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <input  class="btn btn-small btn-info" type="submit" value="Verifikasi" />
                    </form>
                  </tbody>
                  <tfoot>
                     
                  </tfoot>

                </table>
                <?php echo e($logs->links('pagination::bootstrap-4')); ?>

              </div>
              
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
	 
    

</section>


 <script>
 
 $(function(e){
  $('#chkAll').click(function(){
    $('.chkVerif').prop('checked',$(this).prop('checked'));
  })

 });
 </script>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\logdmbaru\resources\views//kegiatan/index.blade.php ENDPATH**/ ?>