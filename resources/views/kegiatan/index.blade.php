@extends('admin.master')

@section('content')
<section class="content">
  <!-- main -->
  <div class="container-fluid">
 <!--row tabel-->
        <div class="row">
           
          <div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Buku Kegiatan Kepaniteraan</h3>
                
              </div>
             
              <!-- /.card-header -->
              <div class="card-body">
              <form method="get" action="/kegiatan/filter" enctype="multipart/form-data">
          
              <div class="input-group">
                <input type="text" name="nim" placeholder="Cari NIM..." class="form-control">
                <span class="input-group-append">
                <button type="submit" class="btn btn-primary">Cari</button>
                <a type="button" class="btn btn-info" href="/kegiatan"><i class="fa fa-retweet"></i></a>
                </span>
              </div>
        </form>
                <table id="ex" class="table table-responsive table-bordered table-hover">
                  <thead>
                  
                    <tr>

                      <th><input type="checkbox"  id="chkAll" /></th>
                      <th>AKSI/STATUS</th>
                      <th> NAMA</th>
                      <th> NIM</th>
                      <th> KEGIATAN KEPANITERAAN</th>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> STASE</th>
                      <th> TANGGAL</th>
                      <th> KETERANGAN</th>
                      <th> DOSEN PEMBIMBING KLINIK</th>
                      <th hidden> </th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  <form id="edit-form" method="POST" action="{{ route('signature.edit') }}">
                   @csrf
                  @foreach($logs as $key => $log)
                    <tr class="data-row">
                   
                      @if($log->status == 0)
                         <!--<button type="button" class="btn btn-warning" id="edit-item" data-item-id="{{ $log->id }}">Verifikasi</button>-->
                         
                   
                   
                 
                   <td class="align-middle">
                   <input type="checkbox" class="chkVerif" name="cekVerif[]" value="{{ $log->id }}" />
                   </td>
                   <td class="align-middle">
                  <span class="badge bg-red">Belum Verifikasi</span>
                  </td>
                  <!--<input type="checkbox" name="status[{{ $log->id }}]" >-->
                  
        
                      @else  
                      <td class="align-middle"></td>
                      <td class="align-middle">
                      <span class="badge bg-green">Sudah diverifikasi</span>
                      </td>
                      @endif
                        <td class="align-middle name">{{ $log->nama }}</td>
                      <td class="align-middle nim">{{ $log->username }}</td>
                      <td class="align-middle jenis">{{ $log->jenis }}</td>
                      <td class="align-middle word-break tempat">{{ $log->tempat }}</td>
                      <td class="align-middle word-break rs">{{ $log->rumah_sakit_ }}</td>
                      <td class="align-middle word-break stase">{{ $log->stase_ }}</td>
                      <td class="align-middle tanggal">{{date('d-m-Y', strtotime($log->tanggal))}}</td>
                      <td class="align-middle keterangan">{{$log->keterangan}} <br>Lampiran : <a href="/upload/{{$log->lampiran}}" target="_blank">{{$log->lampiran}}</a> </td>
                      <td class="align-middle word-break dosen">{{ $log->dosen }}</td>
                      <td class="align-middle foto" hidden>{{ $log->profile_photo_path }}</td>
                     
                      </td>
                     

                    </tr>
                    
                    @endforeach
                     <input  class="btn btn-small btn-info" type="submit" value="Verifikasi" />
                    </form>
                  </tbody>
                  <tfoot>
                     
                  </tfoot>

                </table>
                {{ $logs->links('pagination::bootstrap-4') }}
              </div>
              
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
	 
    

</section>


 <script>
 
 $(function(e){
  $('#chkAll').click(function(){
    $('.chkVerif').prop('checked',$(this).prop('checked'));
  })

 });
 </script>





@endsection