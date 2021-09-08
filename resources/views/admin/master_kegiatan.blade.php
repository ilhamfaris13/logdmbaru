@extends('admin.app')
@section('content')
<section class="content">
<div class="container-fluid">
  <!-- ROW 1 -->
  <div class="row">
   <!-- COL 2 -->
    <div class="col-12 col-md-12">
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

