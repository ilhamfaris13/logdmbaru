
<?php $__env->startPush('meta'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-6 col-md-6">
        <form id="rm" method="POST" action="<?php echo e(route('rm.redirect')); ?>">
                        <?php echo csrf_field(); ?>
            <div class="card text-black bg-light mb-0">
                <div class="card-header">
                    <h2 class="m-0">Redirect</h2>
                </div>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Nomor Rekam Medis </label>
                <input type="text" name="rm" class="form-control" id="rm" required>
              </div>
            <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
             </div>
        </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\log_dm\logdm\resources\views/rm_view.blade.php ENDPATH**/ ?>