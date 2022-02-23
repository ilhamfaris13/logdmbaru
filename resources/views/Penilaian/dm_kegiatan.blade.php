@extends('admin.master')
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
            <table id="tabel1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>AKSI</th>
                      <th> NAMA</th>
                      <th> NIM</th>                    
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($logs as $key => $log)
                    <tr class="data-row">
                    <td class="align-middle">
                      <a class="btn btn-primary btn-sm" href="/detail_dm_kegiatan/{{ $log->id }}" target="_blank"><i class="far fa-eye"></i></a>
                      <a class="btn btn-success btn-sm" href="/nilai/{{ $log->id }}"><i class="fas fa-edit"></i>Nilai</a>
                    </td>
                    <td class="align-middle ">{{ $log->name }}</td>
                    <td class="align-middle ">{{ $log->username }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  </tfoot>
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

