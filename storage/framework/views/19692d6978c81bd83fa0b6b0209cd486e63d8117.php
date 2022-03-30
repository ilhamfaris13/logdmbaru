
<?php $__env->startSection('content'); ?>
<section class="content">
<div class="container-fluid">
  <!-- ROW 1 -->
  <div class="row">
    <!-- COL 1 -->
  <div class="col-7 col-md-7">
     <!-- COL1-CARD 1 -->
  <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar User</h3>
            </div>
            <div class="card-body">
            
            <form method="get" action="/fnilai/filter" enctype="multipart/form-data">
          
            <div class="form-group">
             <label class="col-form-label" for="modal-input-sig" >Tanda Tangan </label>
              <div class="jumbotron">
                <span class="success" style="color:green; margin-top:10px; margin-bottom: 10px;"></span>
                <div class="alert alert-success" style="display:none"></div>
      
                <div class="wrapper">
                  <canvas id="signature-pad" class="signature-pad" style="border:1px;"></canvas>
                </div>

                <br>
                <button class="btn btn-primary" id="simpan">Save</button>
                <button class="btn btn-secondary" id="hapus">Clear</button>
              </div>
              <!-- Signaturepad -->
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
           </form>
            </div>
        </div>
        <!-- END COL1-CARD 1 -->
        
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


<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\logdmbaru\resources\views/penilaian/evaluasi.blade.php ENDPATH**/ ?>