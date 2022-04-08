@extends('admin.master')

@section('content')
<section class="content">
  <!-- main -->
  <div class="container-fluid">
  @if( Auth::user()->level == "dm")
  <div class="row">
    <div class="col-12">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Buku Kegiatan Kepaniteraan</h3>
                
              </div>
              
                  <a href="{{url('/create_kegiatan')}}" class="btn btn-success" > Buat Baru <i class="fa fa-plus"></i></a>
                 
                  </div>
    </div>
  </div>
  @else
                  @endif
                  <!--row tabel-->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Buku Kegiatan Kepaniteraan</h3>
                
              </div>
             
              <!-- /.card-header -->
              <div class="card-body">
             
                <table id="example2" class="table table-responsive table-bordered table-hover">
                  <thead>
                  
                    <tr>
                      <th>NO.</th>
                      @if( Auth::user()->level == "dm")
                      @else
                      <th> NAMA</th>
                      <th> NIM</th>
                      @endif
                      <th> KEGIATAN KEPANITERAAN</th>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> STASE</th>
                      <th> TANGGAL</th>
                      <th> KETERANGAN</th>
                      <th> DOSEN PEMBIMBING KLINIK</th>
                     
                      <th>STATUS </th>
                      <th hidden> </th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($logs as $key => $log)
                    <tr class="data-row">
                      <td class="align-middle iteration">{{ ++$key }}</td>
                      @if( Auth::user()->level == "dm")
                      @else
                      <td class="align-middle name">{{ $log->nama }} </td>
                      <td class="align-middle nim">{{ $log->username }}</td>
                      @endif
                      <td class="align-middle jenis">{{ $log->jenis }}</td>
                      <td class="align-middle word-break tempat">{{ $log->tempat }}</td>
                      <td class="align-middle word-break rs">{{ $log->rumah_sakit_ }}</td>
                      <td class="align-middle word-break stase">{{ $log->stase_ }}</td>
                      <td class="align-middle tanggal">{{date('d-m-Y', strtotime($log->tanggal))}}</td>
                      <td class="align-middle keterangan">{{$log->keterangan}}</td>
                      <td class="align-middle word-break dosen">{{ $log->dosen }}</td>
                      
                      <td class="align-middle foto" hidden>/upload/profile/{{ $log->profile_photo_path }}</td>
                      @if( Auth::user()->level == "dosen")
                      <td class="align-middle">
                      @if($log->status == 0)
                        <button type="button" class="btn btn-warning" id="edit-item" data-item-id="{{ $log->id }}">Verifikasi</button>
                      @else  
                      <span class="badge bg-green">Sudah di Verifikasi</span>
                      @endif
                      </td>
                      @else
                      <!--status-->
                      @if($log->status == 0)
                      <td class="align-middle word-break description"><span class="badge bg-red">Belum Verifikasi</span></td>
                      @else
                      <td class="align-middle word-break description"><span class="badge bg-green">Sudah Verifikasi</span></td>
                      @endif
                      <!--status-->
                      @endif

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
        <!-- /.row -->
        @if( Auth::user()->level == "dm")
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Terverivikasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="d-flex justify-content-end mb-4">
                  <a class="btn btn-primary" href="{{ URL::to('/dm/pdf') }}">Export to PDF</a>
                </div>
                <table id="tabel1" class="table table-responsive table-bordered table-hover">
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
                  @foreach($verif as $key => $log)
                    <tr class="data-row">
                    <td class="align-middle word-break "><i class="fa fa-check"></i></td>
                      
                      
                      
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
        <!-- /.row -->
        @else
        @endif
      </div>
      <!-- /.container-fluid -->
  <!-- heading -->
  
<!-- TABLE 2-->

<!-- TABLE 2-->
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
      @if ($message = Session::get('success'))

      <div class="alert alert-success  alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">×</button>  
            <strong>{{ $message }}</strong>
             </div>
            @endif
            <form id="edit-form" method="POST" action="{{ route('signaturepad.upload') }}">
            @csrf
            <div class="card text-black bg-light mb-0">
            <div class="card-header">
              <h2 class="m-0">Verifikasi</h2>
            </div>
            <div class="card-body">
            <div class="row"> 
            <!--kiri-->
              <div class="col-md-6 ">
              <div class="form-group">
              <div class="widget-user-header ">
                <div class="widget-user-image">
                  <img id="modal-input-foto" class="img-circle elevation-2" src="" alt="" width="150" height="170">
                 
                </div>
                </div>
                <!-- /.widget-user-image -->
                
              </div>
           
              <!-- /name -->
              <div class="form-group">
              <label class="col-form-label" for="modal-input-name" >Nama </label>
                <input type="text" name="name" class="form-control" id="modal-input-name" disabled>
              </div>
              <!-- /name -->
              <div class="form-group">
              <label class="col-form-label" for="modal-input-nim" >NIM </label>
                <input type="text" name="nim" class="form-control" id="modal-input-nim" disabled>
              </div>
              
              <div class="form-group">
                <label class="col-form-label" for="modal-input-name">Rumah Sakit</label>
                <input type="text" name="rs" class="form-control" id="modal-input-rs" disabled>
              </div>
              </div>
              <!--kanan-->
              <div class="col-md-6">
              <!-- id -->
              <div class="form-group">
                
                <input type="text" name="id" class="form-control" id="modal-input-id" hidden>
              </div>
              <!-- /id -->
              <!-- description -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-jenis">Jenis</label>
                <input type="text" name="tempat" class="form-control" id="modal-input-jenis" disabled>
              </div>
              <!-- /description -->
              <!-- name -->
             
              
              <!-- description -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-tempat">Tempat/Tindakan/Kasus</label>
                <input type="text" name="tempat" class="form-control" id="modal-input-tempat" disabled>
              </div>
              <!-- /description -->
              <!-- description -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-stase">Stase</label>
                <input type="text" name="tempat" class="form-control" id="modal-input-stase" disabled>
              </div>
              <!-- /description -->
              <!-- description -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-tanggal">Tanggal</label>
                <input type="text" name="tempat" class="form-control" id="modal-input-tanggal" disabled>
              </div>
              <!-- /description -->
              <!-- description -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-keterangan">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="modal-input-keterangan" disabled>
              </div>
              <!-- /description -->
              
              <!-- Signatur --> 
              <div class="form-group">
              <label class="col-form-label" for="modal-input-signature">Tanda Tangan:</label>
              <br>
                <div id="sig" ></div>
                <br>
                <button id="clear" class="btn btn-danger btn-sm"><i class="fa fa fa-undo"></i></button>
                <textarea class="form-control" id="signature64" name="signed" style="display: none"></textarea>
                </div>
                <br/>
                <button class="btn btn-success btn-md">Save</button>                            
              </div>
              <!-- Signatur --> 
            </div>
              </div>
              <div class="row"> 
              <div class="col-md-12">
              <div class="form-group">
                
              </div>
              </div>
              </div>
            </div>
            
            
            
            </form>
      </div>
      
      
    </div>
  </div>
</section>
<!-- /Attachment Modal -->

 <script>
 $(document).ready(function() {
  /**
   * for showing edit item popup
   */

  $(document).on('click', "#edit-item", function() {
    $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

    var options = {
      'backdrop': 'static'
    };
    $('#edit-modal').modal(options)
  })

  // on modal show
  $('#edit-modal').on('show.bs.modal', function() {
    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
    var row = el.closest(".data-row");

    // get the data
    var id = el.data('item-id');
    var name = row.children(".name").text();
    var nim = row.children(".nim").text();
    var foto = row.children(".foto").text();
    var tempat = row.children(".tempat").text();
    var rs = row.children(".rs").text();
    var stase = row.children(".stase").text();
    var tanggal = row.children(".tanggal").text();
    var keterangan = row.children(".keterangan").text();
    var jenis = row.children(".jenis").text();
    var description = row.children(".description").text();
   
    // fill the data in the input fields
    $("#modal-input-id").val(id);
    $("#modal-input-name").val(name);
    $("#modal-input-tempat").val(tempat);
    $("#modal-input-nim").val(nim);
    $("#modal-input-foto").attr("src",""+foto);
    $("#modal-input-rs").val(rs);
    $("#modal-input-stase").val(stase);
    $("#modal-input-tanggal").val(tanggal);
    $("#modal-input-keterangan").val(keterangan);
    $("#modal-input-jenis").val(jenis);
    $("#modal-input-description").val(description);
    

  })

  // on modal hide
  $('#edit-modal').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  })
})
 </script>
 <script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
    
</script>

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
      "autoWidth": false,
      "responsive": false,
    });
    
  });
</script>
 
@endsection