@extends('admin.app')
@section('content')
<section class="content">
<div class="container-fluid">
  <div class="row">
  <div class="col-6 col-md-6">
    <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah User</h3>
            </div>
            <div class="card-body">
            @foreach($user2 as $key => $log)
            <form method="POST" action="{{ route('admin.edit') }}" >
            @csrf
                
                    
                    <input type="text" name="id" class="form-control" id="id" value="{{$log->id}}" hidden>
              
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-username">Username </label>
                    <input type="text" name="username" class="form-control" id="username" value="{{$log->username}}" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-nama">Nama </label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{$log->name}}" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-email">Email </label>
                    <input type="email" name="email" class="form-control" id="email" value="{{$log->email}}" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-level">Level</label>
                    <select name="level" class="form-control" id="level" style="text-transform: capitalize;">
                    <option value="{{$log->level}}" >{{$log->level}}</option>
                    <option value="admin" >Admin</option>
                    <option value="dosen" >Dosen/Dokter</option>
                    <option value="dm" >Dokter Muda</option>
                     </select>
                </div>
               
                <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
             </div>
            </form>
            @endforeach
            </div>
        </div>
        
    </div>
    <div class="col-6 col-md-6">
    <div class="card">
            <div class="card-header">
                <h3 class="card-title">Reset Password</h3>
            </div>
            <div class="card-body">
            @foreach($user2 as $key => $log)
            <form method="POST" action="{{ route('admin.reset') }}" >
            @csrf
            <input type="text" name="id" class="form-control" id="id" value="{{$log->id}}" hidden>
            <input type="text" name="username" class="form-control" id="username" value="{{$log->username}}" hidden>
            <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
            </div>
            </form>
            @endforeach
            </div>
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
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": false,
    });

    $('#tabel1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
    
  });
</script>
@endsection

