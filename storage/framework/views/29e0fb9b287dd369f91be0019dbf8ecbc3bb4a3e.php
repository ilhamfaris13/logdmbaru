
<?php $__env->startSection('content'); ?>
<section class="content">
<div class="container-fluid">
  <!-- ROW 1 -->
	<div class="row">
    <!-- COL 1 -->
		<div class="col-5 col-md-5">
			<!-- COL1-CARD 2 -->
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Import Excel</h3>
				</div>
				<div class="card-body">
					<form method="post" action="/dm/import_excel" enctype="multipart/form-data">
						<?php echo csrf_field(); ?>
						<label>Pilih file excel</label>
						<div class="form-group">
							<input type="file" name="file" required="required">
						</div>
						<button type="submit" class="btn btn-primary">Import</button>
					</form>
				</div>
			</div>
		</div>
	<!-- END COL1-CARD 2 -->
    </div>
</div>
</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\log_dm\logdm\resources\views/admin/master_import.blade.php ENDPATH**/ ?>