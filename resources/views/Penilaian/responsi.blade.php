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
          <form id="edit-form" method="POST" action="{{ route('kegiatan.create') }}">
                        @csrf
            <div class="card text-black bg-light mb-0">
                <div class="card-header">
                    <h2 class="m-0">Tambah Kegiatan </h2>
                </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Jenis Kepaniteraan </label>
                <select name="jenis" class="form-control" id="jenis">
                <option value="Tugas Jaga Ruang" >Presentasi Kasus / Responsi</option>
                <option value="Keterampilan / Kegiatan di Poliklinik" >Karya Tulis / Referat</option>
                
                
                </select>
              </div>
              <!-- id -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Kasus /Judul </label>
                <input type="text" name="tempat" class="form-control" id="tempat" required>
              </div>
              <!-- /id -->
              <!-- name -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-name">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal" required autofocus>
              </div>
              <!-- /name -->
             
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
                <label class="col-form-label" for="modal-input-id">Dosen </label>
                <select name="dosen" class="form-control" id="dosen">
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

