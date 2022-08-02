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
            <h3 class="card-title">Daftar Nilai DM Mata</h3>
        </div>
     <div class="card-body">
     	<div class="row">
     	<div class="col-6 col-md-6">
     		<form method="get" action="/nilaimata/filter" enctype="multipart/form-data">
					
          <div class="form-group">
            <label class="col-form-label" for="modal-input-nama">Kelompok </label>
            <select name="kelompok" class="form-control" id="kelompok">
            	<option value="" disabled selected>Pilih</option>
            	@foreach($kelompoks as $key => $log)
                    <option value="{{ $log->Kelompok }}">{{ $log->Kelompok }}</option>
               @endforeach
            </select>
          </div>

          <div class="form-group">
							<button type="submit" class="btn btn-primary">Terapkan</button>
					</div>
				</form>
        <div class="form-group">
        <button type="button" class="btn btn-success" onclick="tablesToExcel(['tabel2'], ['nilai_dm'], 'nilai_dm.xls', 'Excel')">Download Template </button>
       
        
            <a type="button" class="btn btn-info" href="/panduannilai">Panduan Nilai</a>
          </div>
					</div>
           <div class="col-6 col-md-6">
            <div class="form-group">
            <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
              UPLOAD NILAI
              </button>
            </div>
            <div class="form-group">
            <a type="button" class="btn btn-warning" href="/nilaiukp">IKM_DM LEMBAR PENILAIAN UKP</a>
            </div>
            <div class="form-group">
            <a type="button" class="btn btn-warning" href="/nilaiukm">IKM_DM LEMBAR PENILAIAN UKM</a>
            </div>
            <div class="form-group">
            <a type="button" class="btn btn-warning" href="/bukukerja">IKM_Buku Kerja Dokter Muda Bagian IKM</a>
            </div>
            <div class="form-group">
            <a type="button" class="btn btn-warning" href="/atitudeikm">Lembar Penilaian Attitude</a>
            </div>
             <!--  <form method="post" action="/dm/import_excel" enctype="multipart/form-data">
            @csrf
          <label>Upload Nilai</label>
            <div class="form-group">
              <input type="file" name="file" required="required">
            </div>
          <button type="submit" class="btn btn-primary">Upload</button>
      </form> -->
            </div>
         </div>
         <div class="row">
         	<div class="col-6 col-md-6">
         		<!-- <button type="button" class="btn btn-success" onclick="tablesToExcel(['tabel2'], ['nilai_dm'], 'nilai_dm.xls', 'Excel')">Download Template </button>
            <a type="button" class="btn btn-info" href="/panduannilai">Panduan Nilai</a> -->
			<!-- <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
			IMPORT EXCEL
			</button> -->
      
         	</div>
           
         </div>
          
          
       </div>
     </div>
    </div>
        <!-- END COL 2- CARD 1 -->
        
    </div>
   
  </div>
  <!-- COL 2 -->
    <div class="col-12 col-md-12">
      <!-- COL 2- CARD 1 -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Nilai DM {{$getKel}}</h3>
        </div>
            <div class="card-body">
			<!-- <a href="/pnilai/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a> -->
			
            <table id="tabel1" class="table table-bordered table-hover">
                  <thead>
             
            <tr>
						<th>AKSI</th>
						<th> NAMA</th>
						<th> NIM</th> 
						<th> Atitude</th> 	
						<th> Longcase</th>
						<th> Jurnal</th> 
						<th> Minicex</th> 
						<th> Derajat</th> 
						<th> Pengabdian</th> 
						<th> Prettest</th>
						<th> Posttest</th>
            <th> DOPS</th>
						<th> OSCE</th>
            <th> Responsi</th>
						<th> Nilai Akhir</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($logs as $key => $log)
                    <tr class="data-row">
                    <td class="align-middle">
                      <a class="btn btn-primary btn-sm" href="/detail_dm_kegiatan/{{ $log->id_dm }}" target="_blank"><i class="far fa-eye"></i></a>
                     
                      <a href="/hpsnilai/{{$log->id_dm}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                    <td class="align-middle ">{{ $log->NAMA }}</td>
                    <td class="align-middle ">{{ $log->nim_profesi_dokter }}</td>
                    @if($log->atitude== null)
                    <td class="align-middle ">0</td>
                    @else
          					<td class="align-middle ">{{ $log->atitude }}</td>
                    @endif
                    @if($log->longcase== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->longcase }}</td>
                    @endif
          					 @if($log->jurnal== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->jurnal }}</td>
                    @endif
          					 @if($log->minicex== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->minicex }}</td>
                    @endif
          					 @if($log->derajat== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->derajat }}</td>
                    @endif
          					 @if($log->pengabdian== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->pengabdian }}</td>
                    @endif
          					 @if($log->prettest== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->prettest }}</td>
                    @endif
          					 @if($log->posttest== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->posttest }}</td>
                    @endif
          					 @if($log->dops== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->dops }}</td>
                    @endif
          					 @if($log->osce== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->osce }}</td>
                    @endif
                     @if($log->responsi== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->responsi }}</td>
                    @endif
                    @if($log->nilai_akhir== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->nilai_akhir }}</td>
                    @endif
          				
					<!-- <td class="align-middle ">0</td>-->
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>

                <table id="tabel2" class="table table-bordered table-hover" hidden>
                  <thead>
              <tr>
                <th colspan="14">NILAI KEPANITERAAN</th>
              </tr>
              <tr>
                <th colspan="7">KELOMPOK : {{$getKel}} </th>
                <th colspan="7">STASE : Mata</th>
                <th colspan="7">Setelah mengisi nilai, silahkan di save ke format XLSX</th>
              </tr>
            <tr>
            
            <th> NAMA</th>
            <th> NIM</th> 
            <th> Atitude</th>   
            <th> Longcase</th>
            <th> Jurnal</th> 
            <th> Minicex</th> 
            <th> Derajat</th> 
            <th> Pengabdian</th> 
            <th> Prettest</th>
            <th> Posttest</th>
            <th> DOPS</th>
            <th> OSCE</th>
            <th> Responsi</th>
            <th> Nilai Akhir</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($logs as $key => $log)
                    <tr class="data-row">
                    
                    <td class="align-middle ">{{ $log->NAMA }}</td>
                    <td class="align-middle ">{{ $log->nim_profesi_dokter }}</td>
         @if($log->atitude== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->atitude }}</td>
                    @endif
                    @if($log->longcase== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->longcase }}</td>
                    @endif
                     @if($log->jurnal== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->jurnal }}</td>
                    @endif
                     @if($log->minicex== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->minicex }}</td>
                    @endif
                     @if($log->derajat== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->derajat }}</td>
                    @endif
                     @if($log->pengabdian== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->pengabdian }}</td>
                    @endif
                     @if($log->prettest== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->prettest }}</td>
                    @endif
                     @if($log->posttest== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->posttest }}</td>
                    @endif
                     @if($log->dops== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->dops }}</td>
                    @endif
                     @if($log->osce== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->osce }}</td>
                    @endif
                     @if($log->responsi== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->responsi }}</td>
                    @endif
                    @if($log->nilai_akhir== null)
                    <td class="align-middle ">0</td>
                    @else
                    <td class="align-middle ">{{ $log->nilai_akhir }}</td>
                    @endif
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
            </div>
        </div>
        <!-- END COL 2- CARD 1 -->
      <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="post" action="/pnilai/import_nilai_mata" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
            </div>
            <div class="modal-body">
 
              {{ csrf_field() }}
 
              <label>Pilih file excel</label>
              <div class="form-group">
                <input type="file" name="file" required="required">
              </div>
 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Import</button>
            </div>
          </div>
        </form>
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
      "autoWidth": true,
      "responsive": false,
    });

    $('#tabel1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    
  });
</script>
<script src="{{URL::to('js/export.js')}}"></script>
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", type="text/javascript">
  function Export() {
    $("#table1").table2excel({
      filename: "file.xls"
    });
  }
</script> -->
@endsection

