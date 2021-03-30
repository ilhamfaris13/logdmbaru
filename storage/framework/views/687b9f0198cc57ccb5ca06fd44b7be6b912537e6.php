<?php $__env->startPush('script'); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
  
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    
    <script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

<div class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-10">
       <!-- Table -->
       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              
                <table class="table table-border">
                <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th>Tempat</th>
                      <th>tanggal</th>
                      <th>TtDP</th>
                      <th>data masuk</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
				<td><?php echo e(++$key); ?></td>
				
                
                <td> <?php echo e($log->tempat); ?></td>
                <td> <?php echo e($log->nama); ?></td>
                <td><?php echo e(date('d-m-Y', strtotime($log->tanggal))); ?></td>
                <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-modal">
                <i class="fa fa-edit"></I>
              </button></td>
                <td><?php echo e(date('H:i:s', strtotime($log->datamasuk))); ?></td>
				
			</tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
                
              </div>
  </div>
  </div>
  </div>
              <!-- /.card-body -->
            </div>
                <!-- Attachment Modal -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-modal-label">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="attachment-body-content">
      <div class="card">
               <div class="card-header">
                   <h5>Laravel Signature Pad Tutorial Example - ItSolutionStuff.com </h5>
               </div>
               <div class="card-body">
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success  alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>  
                            <strong><?php echo e($message); ?></strong>
                        </div>
                    <?php endif; ?>
                    <form method="POST" action="<?php echo e(route('welcome.upload')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="col-md-12">
                            <label class="" for="">Signature:</label>
                            <br/>
                            <div id="sig" ></div>
                            <br/>
                            <button id="clear" class="btn btn-danger btn-sm">Clear Signature</button>
                            <textarea id="signature64" name="signed" style="display: none"></textarea>
                        </div>
                        <br/>
                        <button class="btn btn-success">Save</button>
                    </form>
               </div>
           </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- /Attachment Modal -->
 </div>
 
 <?php $__env->stopSection(); ?>
 
    
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/blog/resources/views/welcome.blade.php ENDPATH**/ ?>