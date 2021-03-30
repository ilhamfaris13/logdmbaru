<?php $__env->startSection('content'); ?>
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
          <form id="edit-form" method="POST" action="<?php echo e(route('sync.create')); ?>">
                        <?php echo csrf_field(); ?>
            
              <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Syncronize DM" />
             </div>
            </div>               
        </form>
        
    </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/blog/resources/views/syncdb.blade.php ENDPATH**/ ?>