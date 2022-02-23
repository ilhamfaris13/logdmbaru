
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
          <h3 class="card-title">PENILAIAN DM</h3>
        </div>
      
        <div class="card-body">
		<?php $__currentLoopData = $user2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3 class="profile-username text-center">Penilaian Akhir Dokter Muda</h3>

                <p class="text-muted text-center">Penilaian</p>
                
                <ul class="list-group list-group-unbordered mb-3">

					<li class="list-group-item">
                    <b>Nama</b> <a class="float-right"><?php echo e($users->nama); ?></a>
					</li>
					<li class="list-group-item">
                    <b>NIM</b> <a class="float-right"><?php echo e($users->nim); ?></a>
					</li>
				 </ul>
        
        <form method="POST" action="<?php echo e(route('nilai.create')); ?>" >
            <?php echo csrf_field(); ?>
			<!--<input type="submit" name="sendNewSms" class="inputButton" id="sendNewSms" value=" Send " disabled />
			<input type="checkbox"  onchange="document.getElementById('sendNewSms').disabled = !this.checked;" /> -->
                
                <input type="text" name="id" class="form-control" id="id" value="<?php echo e($users->id); ?>" hidden>
				
                <div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir Attitude</label>
					<?php if($users->atitude == 0): ?>
                    <input type="number" name="atitude" class="form-control" id="kodeetik" value="<?php echo e($users->atitude); ?>" >
					<?php else: ?>
					<input type="number" name="atitude" class="form-control" id="kodeetik" value="<?php echo e($users->atitude); ?>" readonly="true">
					<?php endif; ?>
                </div>
				
				<div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir Long Case</label>
					<?php if($users->longcase == 0): ?>
                    <input type="number" name="longcase" class="form-control" id="kodeetik" value="<?php echo e($users->longcase); ?>" >
					<?php else: ?>
					<input type="text" name="longcase" class="form-control" id="kodeetik" value="<?php echo e($users->longcase); ?>" readonly="true">
					<?php endif; ?>
                </div>
				<div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir Journal</label>
					<?php if($users->jurnal == 0): ?>
                   <input type="number" name="jurnal" class="form-control" id="kodeetik" value="<?php echo e($users->jurnal); ?>" >
					<?php else: ?>
					<input type="number" name="jurnal" class="form-control" id="kodeetik" value="<?php echo e($users->jurnal); ?>" readonly="true">
					<?php endif; ?>
                </div>
				<div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir Mini-CEX</label>
                   
					<?php if($users->minicex == 0): ?>
					<input type="number" name="minicex" class="form-control" id="kodeetik" value="<?php echo e($users->minicex); ?>" >
					<?php else: ?>
					<input type="number" name="minicex" class="form-control" id="kodeetik" value="<?php echo e($users->minicex); ?>" readonly="true">
					<?php endif; ?>
                </div>
				<div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir 360 Derajat</label>
                   
					<?php if($users->derajat == 0): ?>
					<input type="number" name="derajat" class="form-control" id="kodeetik" value="<?php echo e($users->derajat); ?>" >
					<?php else: ?>
					<input type="number" name="derajat" class="form-control" id="kodeetik" value="<?php echo e($users->derajat); ?>" readonly="true">
					<?php endif; ?>
                </div>
				<div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir Pengabdian pada Masyarakat</label>
                    
					<?php if($users->pengabdian == 0): ?>
					<input type="number" name="pengabdian" class="form-control" id="kodeetik" value="<?php echo e($users->pengabdian); ?>" >
					<?php else: ?>
					<input type="number" name="pengabdian" class="form-control" id="kodeetik" value="<?php echo e($users->pengabdian); ?>" readonly="true">
					<?php endif; ?>
                </div>
				<div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir Pretest</label>
                    
					<?php if($users->prettest == 0): ?>
					<input type="number" name="prettest" class="form-control" id="kodeetik" value="<?php echo e($users->prettest); ?>" >
					<?php else: ?>
					<input type="number" name="prettest" class="form-control" id="kodeetik" value="<?php echo e($users->prettest); ?>" readonly="true">
					<?php endif; ?>
                </div>
				<div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir Posttest</label>
                   
					<?php if($users->posttest == 0): ?>
					<input type="number" name="posttest" class="form-control" id="kodeetik" value="<?php echo e($users->posttest); ?>" >
					<?php else: ?>
					<input type="number" name="posttest" class="form-control" id="kodeetik" value="<?php echo e($users->posttest); ?>" readonly="true">
					<?php endif; ?>
                </div>
                <div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir OSCE</label>
                   
					<?php if($users->osce == 0): ?>
					<input type="number" name="osce" class="form-control" id="kodeetik" value="<?php echo e($users->osce); ?>" >
					<?php else: ?>
					<input type="number" name="osce" class="form-control" id="kodeetik" value="<?php echo e($users->osce); ?>" readonly="true">
					<?php endif; ?>
                </div>
               
                <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
             </div>
            </form>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
      <!-- END COL1-CARD 1 -->
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


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\log_dm\logdm\resources\views/penilaian/nilai.blade.php ENDPATH**/ ?>