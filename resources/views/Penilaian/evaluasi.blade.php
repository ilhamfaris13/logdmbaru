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
                    <a class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                    
                    </td>
                  
                    </tr>
                    
                    @endforeach
                  </tbody>
            </table>
            </div>
        </div>
        <!-- END COL1-CARD 1 -->
        
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
@endsection

