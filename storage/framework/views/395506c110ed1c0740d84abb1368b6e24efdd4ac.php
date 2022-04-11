
<?php $__env->startPush('meta'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopPush(); ?>
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

<script src="<?php echo e(url('js/app.js')); ?> " charset="utf-8"></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": false,
      "autoWidth": false,
      "searching": true,
       "ordering": false,
    });
    $('#example2').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
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
      "responsive": false,
    });
    
  });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\logdmbaru\logdmbaru\resources\views//kegiatan/index.blade.php ENDPATH**/ ?>