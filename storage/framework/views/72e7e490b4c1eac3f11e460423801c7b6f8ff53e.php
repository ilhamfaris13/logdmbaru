

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
          <form id="edit-form" method="POST" action="<?php echo e(route('rekmedis.create')); ?>">
                        <?php echo csrf_field(); ?>
            <div class="card text-black bg-light mb-0">
                <div class="card-header">
                    <h2 class="m-0">Tambah Rekam Medis</h2>
                </div>
            </div>
            <div class="card-body">
              <!-- /nama -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Nama Pasien </label>
                <input type="text" name="nama" class="form-control" id="nama" required autofocus>
              </div>
              <!-- /nama -->
              <!-- tgl_lahir -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-name">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal" required >
              </div>
              <!-- /tgl_lahir -->
              <!-- /pendidikan -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Pendidikan </label>
                <input type="text" name="pendidikan" class="form-control" id="pendidikan" required>
              </div>
              <!-- /pendidikan -->
              <!-- /Pekerjaan -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Pekerjaan </label>
                <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" required>
              </div>
              <!-- /Pekerjaan -->
               <!-- /alamat -->
               <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Alamat </label>
                <input type="text" name="alamat" class="form-control" id="alamat" required>
              </div>
              <!-- /alamat -->
              <!-- /nomordokumen -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Nomor Dokumen </label>
                <input type="text" name="nomordokumen" class="form-control" id="nomordokumen" required>
              </div>
              <!-- /nomordokumen -->
               <!-- /agama -->
               <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Agama </label>
             
                <select name="agama" class="form-control" id="agama" required>
              
                  <option value="Islam" >Islam</option>
                  <option value="Kristen" >Kristen</option>
                  <option value="Katolik" >Katolik</option>
                  <option value="Lainnya" >Lainnya</option>
                 
                </select>
              </div>
              <!-- /agama -->
               <!-- /jeniskelamin -->
               <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Jenis Kelamin </label>
                <select name="jeniskelamin" class="form-control" id="jeniskelamin" required>
                  <option value="Laki-laki" >Laki-laki</option>
                  <option value="Perempuan" >Perempuan</option>
                </select>
              </div>
              <!-- /jeniskelamin -->
               <!-- /namalengkap -->
               <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Nama Lengkap </label>
                <input type="text" name="namalengkap" class="form-control" id="namalengkap" required>
              </div>
              <!-- /namalengkap -->
                <!-- /statuskawin -->
                <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Status Kawin </label>
                <select name="statuskawin" class="form-control" id="statuskawin" required>
                  <option value="Kawin" >Kawin</option>
                  <option value="Belum Kawin" >Belum Kawin</option>
                  <option value="Duda" >Duda</option>
                  <option value="Janda" >Janda</option>
                  <option value="Dibawah Umur" >Dibawah Umur</option>
                </select>
              </div>
              <!-- /statuskawin -->
               <!-- /caramasuk -->
               <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Cara Masuk </label>
                
                <select name="caramasuk" class="form-control" id="caramasuk" required>
                  <option value="Dokter" >Dokter</option>
                  <option value="Puskesmas" >Puskesmas</option>
                  <option value="RS. Lain" >RS. Lain</option>
                  <option value="Instansi Lain" >Instansi Lain</option>
                  <option value="Kasus Polisi" >Kasus Polisi</option>
                  <option value="Datang Sendiri" >Datang Sendiri</option>
                </select>
              </div>
              <!-- /caramasuk -->
               <!-- /penganggungjawabpembayaran -->
               <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Penganggung Jawab Pembayaran </label>
                <input type="text" name="penganggungjawabpembayaran" class="form-control" id="penganggungjawabpembayaran" required>
              </div>
              <!-- /penganggungjawabpembayaran -->
               <!-- /namaalamat -->
               <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Nama Alamat </label>
                <input type="text" name="namaalamat" class="form-control" id="namaalamat" required>
              </div>
              <!-- /namaalamat -->
              <!-- /keluargaterdekat -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Keluarga Terdekat </label>
                <input type="text" name="keluargaterdekat" class="form-control" id="keluargaterdekat" required>
              </div>
              <!-- /keluargaterdekat -->
              <!-- /bagian -->
                <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Bagian </label>
                <input type="text" name="bagian" class="form-control" id="bagian" required>
              </div>
              <!-- /bagian -->
              <!-- /ruangan -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Ruangan </label>
                <input type="text" name="ruangan" class="form-control" id="ruangan" required>
              </div>
              <!-- /ruangan -->
               <!-- /kelas -->
               <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Kelas </label>
                <input type="text" name="kelas" class="form-control" id="kelas" required>
              </div>
              <!-- /kelas -->
                <!-- /tanggalmasuk -->
                <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Tanggal Masuk </label>
                <input type="date" name="tanggalmasuk" class="form-control" id="tanggalmasuk" required>
              </div>
              <!-- /tanggalmasuk -->
              <!-- /tanggalkeluar -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Tanggal Keluar </label>
                <input type="date" name="tanggalkeluar" class="form-control" id="tanggalkeluar" required>
              </div>
              <!-- /tanggalkeluar -->
               <!-- /diagnosamasuk -->
               <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Diagnosa Masuk </label>
                <select class="livesearch form-control" name="diagnosamasuk" id="diagnosamasuk" required></select>
                
              </div>
              <!-- /diagnosamasuk -->
               <!-- /diagnosautama -->
               <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Diagnosa Utama </label>
                <select class="livesearch form-control" name="diagnosamasuk" id="diagnosautama" required></select>
              </div>
              <!-- /diagnosautama -->
                <!-- /lamarawat -->
                <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Lama Rawat </label>
                <input type="number" name="lamarawat" class="form-control" id="lamarawat" required>
              </div>
              <!-- /lamarawat -->
                <!-- /komplikasi -->
                <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Komplikasi </label>
                <input type="text" name="komplikasi" class="form-control" id="komplikasi" required>
              </div>
              <!-- /komplikasi -->
                 <!-- /jenisanesti -->
                 <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Jenis Anesti </label>
                <input type="text" name="jenisanesti" class="form-control" id="jenisanesti" required>
              </div>
              <!-- /jenisanesti -->
               <!-- /penyebabinfeksi -->
               <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Penyebab Infeksi </label>
                <input type="text" name="penyebabinfeksi" class="form-control" id="penyebabinfeksi" required>
              </div>
              <!-- /penyebabinfeksi -->
                 <!-- /imunisasipernahdapat -->
                 <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Imunisasi yang Pernah didapat </label>
                <select name="imunisasipernahdapat" class="form-control" id="imunisasipernahdapat" required>
                  <option value="BCG" >BCG</option>
                  <option value="DPT" >DPT</option>
                  <option value="Polio" >BCG</option>
                  <option value="TFI" >DPT</option>
                  <option value="Campak" >Campak</option>
                </select>
              </div>
              <!-- /imunisasipernahdapat -->
               <!-- /imunisasiselamarawat -->
               <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Imunisasi Selama dirawat </label>
               
                <select name="imunisasiselamarawat" class="form-control" id="imunisasiselamarawat" required>
                  <option value="BCG" >BCG</option>
                  <option value="DPT" >DPT</option>
                  <option value="Polio" >BCG</option>
                  <option value="TFI" >DPT</option>
                  <option value="Campak" >Campak</option>
                </select>
              </div>
              <!-- /imunisasiselamarawat -->
               <!-- /transfusidarah -->
               <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Transfusi Darah </label>
                <input type="number" name="transfusidarah" class="form-control" id="transfusidarah" min="0" value="0" step=".01" required>
              </div>
              <!-- /transfusidarah -->
               <!-- /keadaankeluar -->
               <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Keadaan Keluar </label>
                <input type="text" name="keadaankeluar" class="form-control" id="keadaankeluar" required>
              </div>
              <!-- /keadaankeluar -->
               <!-- /carakeluar -->
               <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Cara Keluar </label>
                <input type="text" name="carakeluar" class="form-control" id="carakeluar" required>
              </div>
              <!-- /carakeluar -->
                <!-- /dokterrawat -->
                <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Dokter Rawat </label>
                <input type="text" name="dokterrawat" class="form-control" id="dokterrawat" required>
              </div>
              <!-- /dokterrawat -->
              
              <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
             </div>
            </div>
           
           
                        
        </form>
    </div>
    </div>
    </section>
    
    <script type="text/javascript">
    
    $(document).ready(function() {
        $('select').selectpicker();
    });
    $('.livesearch').select2({
        placeholder: '',
        ajax: {
            url: '/ajax-autocomplete-search',
            dataType: 'json',
            delay: 10,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.ALIAS,
                            id: item.KODE
                        }
                    })
                };
            },
            cache: true
        }
    });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\log_dm\logdm\resources\views//rekmedis/create.blade.php ENDPATH**/ ?>