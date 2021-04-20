@extends('admin.master')

@section('content')
<section class="content">
<div class="main-container container-fluid">
  <div class="container-fluid">
    
    <div style="font-size: 15px; font-weight: bold" class="panel-body">
                    @foreach ($errors->all() as $error)
					<h4>{{ $error }}</h4>
					@endforeach
					@if (session('status'))
					<div>
					 {{ session('status') }}
					</div>
					@endif
          <form id="edit-form" method="POST" action="{{ route('ujian.create') }}">
                        @csrf
            <div class="card text-black bg-light mb-0">
                <div class="card-header">
                    <h2 class="m-0">Tambah Ujian</h2>
                </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Jenis  </label>
                <select name="jenis" class="form-control" id="jenis">
                <option value="Ujian Akhir CO-SCHAAP" selected>Ujian Akhir CO-SCHAAP</option>
                <option value="Prolonged Exam" >Prolonged Exam</option>
               <!--  <option value="Tugas Jaga Ruang" >Tugas Jaga Ruang</option>
                <option value="Keterampilan / Kegiatan di Poliklinik" >Keterampilan / Kegiatan di Poliklinik</option>
                <option value="Unit Gawat Darurat" >Unit Gawat Darurat</option>
                <option value="Kegiatan Asistensi di Ruang Oprasi" >Kegiatan Asistensi di Ruang Oprasi</option>
                <option value="Kegiatan Kuliah Pakar" >Kegiatan Kuliah Pakar</option>
                <option value="Tugas pada Dinas Luar" >Tugas pada Dinas Luar</option>
                @foreach($jenis as $key => $rss)
                  <option value="{{$rss->jenis}}" >{{$rss->jenis}}</option>
                  @endforeach -->
                </select>
              </div>
              <!-- id -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Kasus </label>
                <input type="text" name="kasus" class="form-control" id="kasus" required>
              </div>
              <!-- /id -->
              <!-- name -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-name">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal" required autofocus>
              </div>
              <!-- /name -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Catatan </label>
                <input type="text" name="catatan" class="form-control" id="catatan" required>
              </div>
              
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Rumah Sakit </label>
                <select name="rumahsakit" class="form-control" id="rumahsakit">
                @foreach($rs as $key => $rss)
                  <option value="{{$rss->id}}" >{{$rss->nama}}</option>
                  @endforeach
                </select>
                
              </div>
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">STASE </label>
                <select name="stase" class="form-control" id="stase">
                @foreach($stase as $key => $rss)
                  <option value="{{$rss->id}}" >{{$rss->stase}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Penguji 1 </label>
                <select name="penguji1" class="form-control" id="penguji1">
                @foreach($dosen as $key => $rss)
                  <option value="{{$rss->NIP}}" >{{$rss->NAMA}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Penguji 2 </label>
                <select name="penguji2" class="form-control" id="penguji2">
                @foreach($dosen as $key => $rss)
                  <option value="{{$rss->NIP}}" >{{$rss->NAMA}}</option>
                  @endforeach
                </select>
              </div>
              
              <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
             </div>
            </div>
           
           
                        
        </form>
    </div>
    </div>
    </section>
<script>

</script>
@endsection

