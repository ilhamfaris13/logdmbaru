@extends('admin.app')
@section('content')
<section class="content">
<div class="container-fluid">
  <!-- ROW 1 -->
  <div class="row">
    <!-- COL 1 -->
  <div class="col-6 col-md-6">
    <!-- COL1-CARD 1 -->
  <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar User</h3>
            </div>
            <div class="card-body">
            
            <table id="tabel1" class="table table-bordered table-hover">
                <thead>
                  
                  <tr>
                  <th> NIM</th>
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
                    
                    </td>
                  
                    </tr>
                    
                    @endforeach
                  </tbody>
            </table>
            </div>
        </div>
        <!-- END COL1-CARD 1 -->
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
                    <input type="text" name="nama" class="form-control" id="nama" required>
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
   <!-- COL 2 -->
    <div class="col-6 col-md-6">
      <!-- COL 2- CARD 1 -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Kegiatan DM</h3>
        </div>
            <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                  
                  <tr>
                    <th> NAMA</th>
                    <th> USERNAME</th>
                    
                    <th> UBAH</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($logs as $key => $log)
                    <tr class="data-row">
                   
                    <td class="align-middle ">{{ $log->nama }}</td>
                    <td class="align-middle word-break ">{{ $log->id }}</td>
                   
                    <td class="align-middle">
                    <a class="btn btn-primary btn-sm"><i class="far fa-eye"></i></a>
                    <a class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-danger btn-sm" href="/admin/delete/{{ $log->id }}" ><i class="far fa-trash-alt"></i></a>
                    </td>
                  
                    </tr>
                    
                    @endforeach
                  </tbody>
            </table>
            </div>
        </div>
        <!-- END COL 2- CARD 1 -->
        <!-- COL 2- CARD 2 -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sinkron Database</h3>
        </div>
            <div class="card-body">
            <form id="edit-form" method="POST" action="{{ route('sync.create') }}">
                        @csrf
            
              <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Sinkron User DM" />
             </div>
                      
        </form>
        <form id="edit-form" method="POST" action="{{ route('sync.create_dosen') }}">
                        @csrf
            
              <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Sinkron User Dosen/Dokter" />
             </div>
            </div>               
        </form>
            </div>
        </div>
        <!-- END COL 2- CARD 1 -->
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

