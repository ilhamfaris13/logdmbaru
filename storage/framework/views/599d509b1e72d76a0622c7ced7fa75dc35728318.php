
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
            
            <table id="tabel1" class="table table-bordered table-hover">
                <thead>
                  
                  <tr>
                  <th> USERNAME</th>
                    <th> NAMA</th>
                    <th> LEVEL</th>
                    
                    <th> UBAH</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $user2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="data-row">
                    <td class="align-middle "><?php echo e($log->username); ?></td>
                    <td class="align-middle "><?php echo e($log->name); ?></td>
                    <td class="align-middle word-break" style="text-transform: capitalize;"><?php echo e($log->level); ?></td>
                    <td class="align-middle">
                    <a class="btn btn-warning btn-sm" href="admin/edit/<?php echo e($log->id); ?>" target="_blank"><i class="far fa-edit"></i></a>
                   <a href="/user/<?php echo e($log->id); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                   
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
    <div class="col-5 col-md-5">
      <!-- COL1-CARD 2 -->
    <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah User</h3>
            </div>
            <div class="card-body">
            <form method="POST" action="<?php echo e(route('admin.create')); ?>" >
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-username">Username </label>
                    <input type="text" name="username" class="form-control" id="username" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-nama">Nama </label>
                    <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-email">Email </label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-level">Level</label>
                    <select name="level" class="form-control" id="level" onchange="showfield(this.options[this.selectedIndex].value)">
                    <option value="" disabled selected>Pilih</option>
                    <option value="admin" >Admin</option>
                    <option value="dosen" >Dosen/Dokter</option>
                    <option value="dm" >Dokter Muda</option>
                     </select>

                     <div class="form-group" id="div1">
                       
                     </div>
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="modal-input-password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-cpassword">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                </div>
                <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
             </div>
            </form>
            </div>
        </div>
        <!-- END COL1-CARD 2 -->
       
    </div>
    
  </div>
   <!-- ROW 2 -->
 <!--  <div class="row">
      <div class="col-7 col-md-7">
          <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Dosen</h3>
            </div>
            <div class="card-body">
            <form method="POST" action="<?php echo e(route('admin.createdosen')); ?>" >
            <?php echo csrf_field(); ?>
               
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-nama">Nama </label>
                    <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-email">NIP </label>
                    <input type="text" name="nip" class="form-control" id="nip" required>
                </div>
                
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-password">Rumah Sakit</label>
                    <input type="text" name="rs" class="form-control" id="rs" required>
                </div>
              
                <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
             </div>
            </form>
            </div>
        </div>
      </div>
  </div> -->
</div>



</section>
<script>
    function showfield(name){
  if(name=='dosen')document.getElementById('div1').innerHTML='  <select name="rs" class="form-control" id="rs" ><?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($log->id); ?>" ><?php echo e($log->nama); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </select>';
  else document.getElementById('div1').innerHTML='';
}
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


<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\logdmbaru\logdmbaru\resources\views/admin/master_user.blade.php ENDPATH**/ ?>