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
          <form id="edit-form" method="POST" action="{{ route('bimbingan.create') }}">
                        @csrf
            <div class="card text-black bg-light mb-0">
                <div class="card-header">
                    <h2 class="m-0">Tambah Bimbingan Soal UKMPPD</h2>
                </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Jenis Kepaniteraan </label>
                <select name="jenis" class="form-control" id="jenis" onChange="SelectRedirect();" >
                <option value="Bimbingan Soal UKDI" selected>Bimbingan Soal UKMPPD</option>
                @foreach($jenis as $key => $rss)
                  <option value="{{$rss->jenis}}" >{{$rss->jenis}}</option>
                  @endforeach
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
                <label class="col-form-label" for="modal-input-id">Kasus & Level SKDI </label>
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
                <label class="col-form-label" for="modal-input-id">Jumlah Soal </label>
                <input type="number" name="keterangan" class="form-control" id="keterangan" required>
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
    <script language="javascript">
      function SelectRedirect(){
      // ON selection of section this function will work
      //alert( document.getElementById('s1').value);

      switch(document.getElementById('jenis').value)
      {
      case "Bimbingan Soal UKMPPD":
      window.location="{{url('/create_bimbingan')}}";
      break;
      case "Ketramplian Klinis":
      window.location="{{url('/create_ketrampilan')}}";
      break;
      case "Ujian Akhir CO-SCHAAP":
      window.location="{{url('/create_ujian')}}";
      break;



      /// Can be extended to other different selections of SubCategory //////
      default:
      window.location="{{url('/create_kegiatan')}}";
      //window.location="../"; // if no selection matches then redirected to home page
      break;
      }// end of switch 
      }
      ////////////////// 
    </script>
@endsection

