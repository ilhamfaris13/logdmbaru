@extends('admin.master')
@section('content')
<section class="content">
<div class="container-fluid">
  <!-- ROW 1 -->
  <div class="row">
      <!-- COL 1 -->
    <div class="col-12 col-md-12">
      <!-- COL1-CARD 1 -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">PENILAIAN DM</h3>
        </div>
      
        <div class="card-body">
		@foreach($user2 as $key => $users)
                <h3 class="profile-username text-center">Penilaian Akhir Dokter Muda</h3>

                <p class="text-muted text-center">Penilaian</p>
                
                <ul class="list-group list-group-unbordered mb-3">

					<li class="list-group-item">
                    <b>Nama</b> <a class="float-right">{{$users->nama}}</a>
					</li>
					<li class="list-group-item">
                    <b>NIM</b> <a class="float-right">{{$users->nim}}</a>
					</li>
				 </ul>
        
        <form method="POST" action="{{ route('nilai.create') }}" >
            @csrf
			<!--<input type="submit" name="sendNewSms" class="inputButton" id="sendNewSms" value=" Send " disabled />
			<input type="checkbox"  onchange="document.getElementById('sendNewSms').disabled = !this.checked;" /> -->
                
                <input type="text" name="id" class="form-control" id="id" value="{{$users->id}}" hidden>
				
                <div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir Attitude</label>
					@if($users->atitude == 0)
                    <input type="number" name="atitude" class="form-control" id="kodeetik" value="{{$users->atitude}}" >
					@else
					<input type="number" name="atitude" class="form-control" id="kodeetik" value="{{$users->atitude}}" readonly="true">
					@endif
                </div>
				
				<div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir Long Case</label>
					@if($users->longcase == 0)
                    <input type="number" name="longcase" class="form-control" id="kodeetik" value="{{$users->longcase}}" >
					@else
					<input type="text" name="longcase" class="form-control" id="kodeetik" value="{{$users->longcase}}" readonly="true">
					@endif
                </div>
				<div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir Journal</label>
					@if($users->jurnal == 0)
                   <input type="number" name="jurnal" class="form-control" id="kodeetik" value="{{$users->jurnal}}" >
					@else
					<input type="number" name="jurnal" class="form-control" id="kodeetik" value="{{$users->jurnal}}" readonly="true">
					@endif
                </div>
				<div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir Mini-CEX</label>
                   
					@if($users->minicex == 0)
					<input type="number" name="minicex" class="form-control" id="kodeetik" value="{{$users->minicex}}" >
					@else
					<input type="number" name="minicex" class="form-control" id="kodeetik" value="{{$users->minicex}}" readonly="true">
					@endif
                </div>
				<div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir 360 Derajat</label>
                   
					@if($users->derajat == 0)
					<input type="number" name="derajat" class="form-control" id="kodeetik" value="{{$users->derajat}}" >
					@else
					<input type="number" name="derajat" class="form-control" id="kodeetik" value="{{$users->derajat}}" readonly="true">
					@endif
                </div>
				<div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir Pengabdian pada Masyarakat</label>
                    
					@if($users->pengabdian == 0)
					<input type="number" name="pengabdian" class="form-control" id="kodeetik" value="{{$users->pengabdian}}" >
					@else
					<input type="number" name="pengabdian" class="form-control" id="kodeetik" value="{{$users->pengabdian}}" readonly="true">
					@endif
                </div>
				<div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir Pretest</label>
                    
					@if($users->prettest == 0)
					<input type="number" name="prettest" class="form-control" id="kodeetik" value="{{$users->prettest}}" >
					@else
					<input type="number" name="prettest" class="form-control" id="kodeetik" value="{{$users->prettest}}" readonly="true">
					@endif
                </div>
				<div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir Posttest</label>
                   
					@if($users->posttest == 0)
					<input type="number" name="posttest" class="form-control" id="kodeetik" value="{{$users->posttest}}" >
					@else
					<input type="number" name="posttest" class="form-control" id="kodeetik" value="{{$users->posttest}}" readonly="true">
					@endif
                </div>
                <div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir OSCE</label>
                   
					@if($users->osce == 0)
					<input type="number" name="osce" class="form-control" id="kodeetik" value="{{$users->osce}}" >
					@else
					<input type="number" name="osce" class="form-control" id="kodeetik" value="{{$users->osce}}" readonly="true">
					@endif
                </div>
               
                <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
             </div>
            </form>
			@endforeach
        </div>
      </div>
      <!-- END COL1-CARD 1 -->
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

