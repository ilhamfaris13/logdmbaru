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
                      <a class="btn btn-primary btn-sm" href="/detail_kegiatan/{{ $log->id }}" target="_blank"><i class="far fa-eye"></i></a>
                      
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
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Semua Kegiatan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
                <table id="example2" class="table table-responsive table-bordered table-hover">
                  <thead>
                  
                    <tr>
                      <th>STATUS</th>
                      
                     
                      <th> KEGIATAN KEPANITERAAN</th>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> STASE</th>
                      <th> TANGGAL</th>
                      <th> DOSEN</th>
                     
                      <th> STATUS </th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($logs2 as $key => $log)
                    <tr class="data-row">
                    <td class="align-middle word-break "><a class="btn btn-primary btn-sm" href="/detail_kegiatan/{{ $log->id }}" target="_blank"><i class="far fa-eye"></i></a></td>
                      <td class="align-middle ">{{ $log->jenis }}</td>
                      <td class="align-middle word-break ">{{ $log->tempat }}</td>
                      <td class="align-middle word-break ">{{ $log->rumah_sakit_ }}</td>
                      <td class="align-middle word-break ">{{ $log->stase_ }}</td>
                      <td class="align-middle ">{{date('d-m-Y', strtotime($log->tanggal))}}</td>
                      <td class="align-middle word-break ">{{ $log->dosen }}</td>
                    
                      <!--status-->
                      @if($log->status == 0)
                      <td class="align-middle word-break "><span class="badge bg-red">Belum Verifikasi</span></td>
                      @else
                      <td class="align-middle word-break "><span class="badge bg-green">Sudah Verifikasi</span></td>
                      @endif
                      <!--status-->
                     

                    </tr>
                    
                    @endforeach
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
           

            
          </div>
          <!-- /.col -->
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

