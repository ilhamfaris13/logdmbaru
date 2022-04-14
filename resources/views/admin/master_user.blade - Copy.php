@extends('admin.app')
@section('content')
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

                  @foreach($user2 as $key => $log)
                    <tr class="data-row">
                    <td class="align-middle ">{{ $log->username }}</td>
                    <td class="align-middle ">{{ $log->name }}</td>
                    <td class="align-middle word-break" style="text-transform: capitalize;">{{ $log->level }}</td>
                    <td class="align-middle">
                    <a class="btn btn-primary btn-sm" href="admin/edit/{{$log->id}}" target="_blank"><i class="far fa-eye"></i></a>
                   <!--  <a class="btn btn-success btn-sm" id="edit-item" data-toggle="modal" ><i class="fas fa-edit"></i></a> -->
                    <!--  <a href="" id="edit-item" class="edit-item" data-toggle="modal" data-target='#edit-item' data-id="{{ $log->id }}">Edit</a> -->
                    <!-- Open Modal -->
                     <a href="#" id="edit-item" class="pointer button-select edit-item" data-user-value="{{$log->id}}"
                      data-user-name="{{ $log->username }}" data-dismiss="modal">{{ $log->username }}</a>
                    </td>
                  
                    </tr>
                    
                    @endforeach
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
             
            <form method="POST" action="{{ route('admin.create') }}" >
            @csrf

            
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-username">Username </label>
                    <input type="text" name="username" class="form-control" id="username" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-nama">Nama </label>
                    <!-- <input type="text" name="nama" class="form-control" id="nama" required> -->
                    <input  type="text" name="user_id" class="form-control" id="user_id" >
                    <!-- Open Modal -->
                    <a href="#" id="edit-item" class="pointer button-select edit-item" data-dismiss="modal">Select</a>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-email">Email </label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-level">Level</label>
                    <select name="level" class="form-control" id="level">
                    <option value="" disabled selected>Pilih</option>
                    <option value="admin" >Admin</option>
                    <option value="dosen" >Dosen/Dokter</option>
                    <option value="dm" >Dokter Muda</option>
                     </select>
                </div>
                <div class="form-group input-control">
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
  
</div>

<!-- <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true"> -->
  <div class="modal fade" id="modal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-modal-label">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="attachment-body-content">
        <table id="example2" class="table table-bordered table-hover">
                <thead>
                  
                  <tr>
                  <th> USERNAME</th>
                    <th> NAMA</th>
                    <th> LEVEL</th>
                    
                    <th> UBAH</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($user2 as $key => $log)
                    <tr class="data-row">
                    <td class="align-middle ">{{ $log->username }}</td>
                    <td class="align-middle ">{{ $log->name }}</td>
                    <td class="align-middle word-break" style="text-transform: capitalize;">{{ $log->level }}</td>
                    <td class="align-middle">
                    <a class="btn btn-primary btn-sm" href="admin/edit/{{$log->id}}" target="_blank"><i class="far fa-eye"></i></a>
                    <a class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="#" class="pointer button-select" data-user-value="{{$log->username}}"
                     data-dismiss="modal">Pilih</a>
                    </td>
                  
                    </tr>
                    
                    @endforeach
                  </tbody>
            </table>
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
<script>

$(document).on('click','.edit-item',function(){
        $('#modal').modal('show');
       
    });
$(document).ready(function () {
    $('#modal table example2').on('click',function () {
        $('#user_id').val($(this).data('user-value')).siblings('input').val($(this).html());
    });
});
</script>
@endsection

    