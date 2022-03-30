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
            <h3 class="card-title">Daftar Nilai DM</h3>
        </div>
     <div class="card-body">
     	<div class="row">
     	<div class="col-6 col-md-6">
     		<form method="get" action="/fnilai/filter" enctype="multipart/form-data">
					
          <div class="form-group">
            <label class="col-form-label" for="modal-input-nama">Kelompok </label>
            <select name="kelompok" class="form-control" id="kelompok">
            	<option value="" disabled selected>Pilih</option>
            	@foreach($kelompoks as $key => $log)
                    <option value="{{ $log->Kelompok }}">{{ $log->Kelompok }}</option>
               @endforeach
            </select>
          </div>
          <div class="modal-footer">
							<button type="submit" class="btn btn-primary">Cari</button>
					</div>
				</form>
					</div>
         </div>
         <div class="row">
         	<div class="col-6 col-md-6">
         		<button type="button" class="btn btn-success" onclick="tablesToExcel(['tabel1'], ['ProductDay1'], 'TestBook.xls', 'Excel')">Export </button>
			<button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
			IMPORT EXCEL
			</button>
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
            <h3 class="card-title">Daftar Nilai DM</h3>
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
						<th> OSCE</th>
						<th> Nilai Akhir</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($logs as $key => $log)
                    <tr class="data-row">
                    <td class="align-middle">
                      <a class="btn btn-primary btn-sm" href="/detail_dm_kegiatan/{{ $log->id_dm }}" target="_blank"><i class="far fa-eye"></i></a>
                      <a class="btn btn-success btn-sm" href="/nilai/{{ $log->nim }}"><i class="fas fa-edit"></i></a>
                    </td>
                    <td class="align-middle ">{{ $log->nama }}</td>
                    <td class="align-middle ">{{ $log->nim }}</td>
					<td class="align-middle ">{{ $log->atitude }}</td>
					<td class="align-middle ">{{ $log->longcase }}</td>
					<td class="align-middle ">{{ $log->jurnal }}</td>
					<td class="align-middle ">{{ $log->minicex }}</td>
					<td class="align-middle ">{{ $log->derajat }}</td>
					<td class="align-middle ">{{ $log->pengabdian }}</td>
					<td class="align-middle ">{{ $log->prettest }}</td>
					<td class="align-middle ">{{ $log->posttest }}</td>
					<td class="align-middle ">{{ $log->osce }}</td>
					<td class="align-middle ">{{ $log->nilai_akhir }}</td>
					<!-- <td class="align-middle ">0</td>-->
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
@endsection

