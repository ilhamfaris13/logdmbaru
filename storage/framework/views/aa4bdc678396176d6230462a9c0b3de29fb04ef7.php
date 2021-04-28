
<?php $__env->startPush('meta'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<section class="content">
  <!-- main -->
  <div class="container-fluid">
  <?php if( Auth::user()->level == "dm"): ?>
  <div class="row">
    <div class="col-12">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Buku Kegiatan Kepaniteraan</h3>
                
              </div>
              
                  <a href="<?php echo e(url('/create_ujian')); ?>" class="btn btn-success" > Buat Baru <i class="fa fa-plus"></i></a>
                 
                  </div>
    </div>
  </div>
  <?php else: ?>
                  <?php endif; ?>
     <!--row tabel-->
     <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Buku Kegiatan Kepaniteraan</h3>
                
              </div>
             
              <!-- /.card-header -->
              <div class="card-body">
             
                <table id="example2" class="table table-responsive table-bordered table-hover">
                  <thead>
                  
                    <tr>
                      <th>AKSI</th>
                      <?php if( Auth::user()->level == "dm"): ?>
                      <?php else: ?>
                      <th> NAMA</th>
                      <th> NIM</th>
                      <?php endif; ?>
                      <th> JENIS KEPANITERAAN</th>
                      <th> KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> STASE</th>
                      <th> TANGGAL</th>
                      <th> CATATAN</th>
                      <th> PENGUJI 1</th>
                      <th> PENGUJI 2</th>
                      <th> TTD PENGUJI 1</th>
                      <th> TTD PENGUJI 2</th>
                      <th hidden> </th>
                      <th hidden> </th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="data-row">
                    <?php if( Auth::user()->level == "dosen"): ?>
                      <td class="align-middle">
                      <!-- PENGUJI -->
                      <?php if($log->ttd_penguji_1 != 'wait.png' AND $log->ttd_penguji_2 != 'wait.png'): ?>
                      <span class="badge bg-green">Sudah Verifikasi</span>
                      <?php elseif($log->ttd_penguji_1 == 'wait.png' AND $log->ttd_penguji_2 == 'wait.png'): ?>
                      <button type="button" class="btn btn-warning" id="edit-item" data-item-id="<?php echo e($log->id); ?>">Verif</button>
                      <?php elseif($log->ttd_penguji_1 != 'wait.png' AND $log->ttd_penguji_2 == 'wait.png'): ?>
                      <span class="badge bg-red">Penguji 1 Sudah Verifikasi</span>
                        <?php if(Auth::user()->name == $log->dosen1): ?>
                        <?php else: ?>
                          <button type="button" class="btn btn-warning" id="edit-item" data-item-id="<?php echo e($log->id); ?>">Verif</button>
                        <?php endif; ?>
                      <?php elseif($log->ttd_penguji_1 == 'wait.png' AND $log->ttd_penguji_2 != 'wait.png'): ?>
                      <span class="badge bg-green">Penguji 2 Sudah Verifikasi</span>
                        <?php if(Auth::user()->name == $log->dosen2): ?>
                        <?php else: ?>
                          <button type="button" class="btn btn-warning" id="edit-item" data-item-id="<?php echo e($log->id); ?>">Verif</button>
                        <?php endif; ?>
                      <?php else: ?>
                      <?php endif; ?>
                      <!-- PENGUJI -->
                      
                      </td>
                      <?php else: ?>
                    
                      <?php endif; ?>
                      <?php if( Auth::user()->level == "dm"): ?>
                      <?php else: ?>
                      <td class="align-middle name"><?php echo e($log->nama); ?></td>
                      <td class="align-middle nim"><?php echo e($log->username); ?></td>
                      <?php endif; ?>
                      <td class="align-middle jenis"><?php echo e($log->jenis); ?></td>
                      <td class="align-middle word-break tempat"><?php echo e($log->kasus); ?></td>
                      <td class="align-middle word-break rs"><?php echo e($log->rumah_sakit_); ?></td>
                      <td class="align-middle word-break stase"><?php echo e($log->stase_); ?></td>
                      <td class="align-middle tanggal"><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                      <td class="align-middle keterangan"><?php echo e($log->catatan); ?></td>
                      <td class="align-middle word-break dosen1"><?php echo e($log->dosen1); ?></td>
                      <td class="align-middle word-break dosen2"><?php echo e($log->dosen2); ?></td>
                      <td class="align-middle ttd1" ><img src="/upload/<?php echo e($log->ttd_penguji_1); ?>" width="100" height="100"></td>
                      <td class="align-middle ttd2" ><img src="/upload/<?php echo e($log->ttd_penguji_2); ?>" width="100" height="100"></td>
                      <td class="align-middle foto" hidden><?php echo e($log->profile_photo_path); ?></td>
                     
                      <?php if(Auth::user()->name ==  $log->dosen1  ): ?>
                      <td class="align-middle word-break stsdosen" hidden>penguji_1</td>
                      <?php else: ?>
                      <td class="align-middle word-break stsdosen" hidden>penguji_2</td>
                      <?php endif; ?>

                    </tr>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        <!-- /.row -->
       
      <!-- /.container-fluid -->
  <!-- heading -->
  
<!-- TABLE 2-->

<!-- TABLE 2-->
<!-- Attachment Modal -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-modal-label">Verifikasi Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="attachment-body-content">
      <?php if($message = Session::get('success')): ?>

      <div class="alert alert-success  alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">×</button>  
            <strong><?php echo e($message); ?></strong>
             </div>
            <?php endif; ?>
          
            <div class="card text-black bg-light mb-0">
            <div class="card-header">
              <h2 class="m-0">Profil DM</h2>
            </div>
            <div class="card-body">
            <div class="row"> 
            <!--kiri-->
              <div class="col-md-6 ">
              <div class="form-group">
              <div class="widget-user-header ">
                <div class="widget-user-image">
                  <img id="modal-input-foto" class="img-circle elevation-2" src="" alt="" width="150" height="170">
                 
                </div>
                </div>
                <!-- /.widget-user-image -->
                
              </div>
           
              <!-- /name -->
              <div class="form-group">
              <label class="col-form-label" for="modal-input-name" >Nama </label>
                <input type="text" name="name" class="form-control" id="modal-input-name" disabled>
              </div>
              <!-- /name -->
              <div class="form-group">
              <label class="col-form-label" for="modal-input-nim" >NIM </label>
                <input type="text" name="nim" class="form-control" id="modal-input-nim" disabled>
              </div>
              
              <div class="form-group">
                <label class="col-form-label" for="modal-input-name">Rumah Sakit</label>
                <input type="text" name="rs" class="form-control" id="modal-input-rs" disabled>
              </div>
              </div>
              <!--kanan-->
              <div class="col-md-6">
              <!-- id -->
              <div class="form-group">
                
                <input type="text" name="id" class="form-control" id="modal-input-id" hidden>
              </div>
              <!-- /id -->
              <!-- description -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-jenis">Jenis</label>
                <input type="text" name="tempat" class="form-control" id="modal-input-jenis" disabled>
              </div>
              <!-- /description -->
              <!-- name -->
             
              
              <!-- description -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-tempat">Tempat/Tindakan/Kasus/Level SKDI</label>
                <input type="text" name="tempat" class="form-control" id="modal-input-tempat" disabled>
              </div>
              <!-- /description -->
              <!-- description -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-stase">Stase</label>
                <input type="text" name="tempat" class="form-control" id="modal-input-stase" disabled>
              </div>
              <!-- /description -->
              <!-- description -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-tanggal">Tanggal</label>
                <input type="text" name="tempat" class="form-control" id="modal-input-tanggal" disabled>
              </div>
              <!-- /description -->
              <!-- description -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-keterangan">Keterangan/Jumlah Soal/Jenis Ketrampilan</label>
                <input type="text" name="keterangan" class="form-control" id="modal-input-keterangan" disabled>
              </div>
              <!-- /description -->
              <!-- description -->
              <div class="form-group">
                
                <input type="text" name="stsdosen" class="form-control" id="modal-input-stsdosen" hidden>
              </div>
              <!-- /description -->
            </div>
              </div>
              <div class="row"> 
              <div class="col-md-6">
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
              </div>
              </div>
            </div>
            
      </div>
      
      
    </div>
  </div>
  <!-- /Attachment Modal -->
</section>


 <script>
 
 $(document).ready(function() {
  /**
   * for showing edit item popup
   */

  $(document).on('click', "#edit-item", function() {
    $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

    var options = {
      'backdrop': 'static'
    };
    $('#edit-modal').modal(options)
  })

  // on modal show
  /*
  *
  EDIT MODAL
  *
  */
  $('#edit-modal').on('show.bs.modal', function() {
    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
    var row = el.closest(".data-row");

    // get the data
    var id = el.data('item-id');
    var name = row.children(".name").text();
    var nim = row.children(".nim").text();
    var foto = row.children(".foto").text();
    var tempat = row.children(".tempat").text();
    var rs = row.children(".rs").text();
    var stase = row.children(".stase").text();
    var tanggal = row.children(".tanggal").text();
    var keterangan = row.children(".keterangan").text();
    var jenis = row.children(".jenis").text();
    var description = row.children(".description").text();
    var stsdosen = row.children(".stsdosen").text();
   
    // fill the data in the input fields
    $("#modal-input-id").val(id);
    $("#modal-input-name").val(name);
    $("#modal-input-tempat").val(tempat);
    $("#modal-input-nim").val(nim);
    $("#modal-input-foto").attr("src","/storage/"+foto);
    $("#modal-input-rs").val(rs);
    $("#modal-input-stase").val(stase);
    $("#modal-input-tanggal").val(tanggal);
    $("#modal-input-keterangan").val(keterangan);
    $("#modal-input-jenis").val(jenis);
    $("#modal-input-description").val(description);
    $("#modal-input-stsdosen").val(stsdosen);


    $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            
            var canvas = document.getElementById('signature-pad');
               var coba = "coba";
               var signaturePad = new SignaturePad(canvas, {
              
               });
               var saveButton = document.getElementById('simpan');
               var clearButton = document.getElementById('hapus');
               
               saveButton.addEventListener('click', function (event) {
                event.preventDefault();
                $.ajax({
                  url: "<?php echo e(url('/ujian/post')); ?>",
                  method: 'post',
                  data: {
                    
                     signature: signaturePad.toDataURL('image/png'),
                     id:id,
                     stsdosen:stsdosen
                  },
                  success: function(response){
                    window.location.href = "<?php echo e(url('/ujian')); ?>";
                  //  console.log(response);
                  if(response) {
            //$('.success').text(response.success);
                    jQuery('.alert').show();
                     jQuery('.alert').html(response.success);
                      }
                     
                  }});
               });
               clearButton.addEventListener('click', function () {
                  signaturePad.clear();
                  
                });
  })
  /*
  *
  END EDIT MODAL
  *
  */
  

  // on modal hide
  $('#edit-modal').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  })
})
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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\log_dm\logdm\resources\views/ujian/index.blade.php ENDPATH**/ ?>