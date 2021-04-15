

<?php $__env->startSection('content'); ?>
<section class="content">
<div class="main-container container-fluid">
  <div class="container-fluid">
    
    <div style="font-size: 15px; font-weight: bold" class="panel-body">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<h4><?php echo e($error); ?></h4>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php if(session('status')): ?>
					<div>
					 <?php echo e(session('status')); ?>

					</div>
					<?php endif; ?>
          <form id="edit-form" method="POST" action="<?php echo e(route('bimbingan.create')); ?>">
                        <?php echo csrf_field(); ?>
            <div class="card text-black bg-light mb-0">
                <div class="card-header">
                    <h2 class="m-0">Tambah Ketrampilan Klinis</h2>
                </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Jenis Kepaniteraan </label>
                <select name="jenis" class="form-control" id="jenis">
                <option value="Ketramplian Klinis" selected>Ketramplian Klinis</option>
               <!--  <option value="Tugas Jaga Ruang" >Tugas Jaga Ruang</option>
                <option value="Keterampilan / Kegiatan di Poliklinik" >Keterampilan / Kegiatan di Poliklinik</option>
                <option value="Unit Gawat Darurat" >Unit Gawat Darurat</option>
                <option value="Kegiatan Asistensi di Ruang Oprasi" >Kegiatan Asistensi di Ruang Oprasi</option>
                <option value="Kegiatan Kuliah Pakar" >Kegiatan Kuliah Pakar</option>
                <option value="Tugas pada Dinas Luar" >Tugas pada Dinas Luar</option>
                <?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($rss->jenis); ?>" ><?php echo e($rss->jenis); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
                </select>
              </div>
              <!-- id -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Level SKDI </label>
                <input type="text" name="tempat" class="form-control" id="tempat" required>
              </div>
              <!-- /id -->
              <!-- name -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-name">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal" required autofocus>
              </div>
              <!-- /name -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Jenis Ketrampilan </label>
                <input type="number" name="keterangan" class="form-control" id="keterangan" required>
              </div>
              
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Rumah Sakit </label>
                <select name="rumahsakit" class="form-control" id="rumahsakit">
                <?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($rss->id); ?>" ><?php echo e($rss->nama); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                
              </div>
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">STASE </label>
                <select name="stase" class="form-control" id="stase">
                <?php $__currentLoopData = $stase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($rss->id); ?>" ><?php echo e($rss->stase); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Dosen </label>
                <select name="dosen" class="form-control" id="dosen">
                <?php $__currentLoopData = $dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($rss->NIP); ?>" ><?php echo e($rss->NAMA); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              
              <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
             </div>
            </div>
           
           
                        
        </form>
    </div>
    </div>
    </section>
<script>

</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\log_dm\logdm\resources\views//ketrampilan/create_ketrampilan.blade.php ENDPATH**/ ?>