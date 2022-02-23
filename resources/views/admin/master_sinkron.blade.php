@extends('admin.app')
@section('content')
<section class="content">
<div class="container-fluid">
  <!-- ROW 1 -->
  <div class="row">
    <!-- COL 1 -->
  
    <div class="col-5 col-md-5">
      <!-- COL1-CARD 2 -->
    <div class="card">
            <div class="card-header">
                <h3 class="card-title">Pengaturan Database</h3>
            </div>
            <div class="card-body">
            <form method="POST" action="{{ route('tarikdb.create') }}" >
            @csrf
                <div class="form-group">
                    <label class="col-form-label" for="modal-input-username">Pilih Pengaturan </label>
                    <select name="sinkron" class="form-control" id="sinkron">
                      <option value="" disabled selected>Pilih</option>
                      <option value="sinkrondm" >Sinkron DM</option>
                      <option value="sinkrondosen" >Sinkron Dosen/Dokter</option>
                      <option value="resetpwd" >Reset Semua Password DM</option>
					  <option value="nilai" >Set Nilai DM</option>
                    </select>
                    
                </div>
                <div class="form-group">
                  <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
                </div>
            </form>
            </div>
        </div>
        <!-- END COL1-CARD 2 -->
       
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

