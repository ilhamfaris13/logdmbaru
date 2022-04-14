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
                    <h2 class="m-0">Tambah Kegiatan</h2>
                </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Kegiatan Kepaniteraan </label>
                <!-- <select name="jenis" class="form-control" id="jenis" onChange="SelectRedirect();" > -->
                <select name="jenis" class="form-control" id="jenis" onchange="showfield(this.options[this.selectedIndex].value)">
                <option value=""  >Pilih Kegiatan</option>
                @foreach($jenis as $key => $rss)
                  <option value="{{$rss->jenis}}" >{{$rss->jenis}}</option>
                  @endforeach
                  <option value="Lainnya">Lainnya</option>
                </select>
                <div class="form-group" id="div1"></div>
              </div>
              <!-- id -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Tempat / Tindakan / Kasus </label>
                <input type="text" name="tempat" class="form-control" id="tempat" required>
              <!--   <select name="tempat" class="form-control" id="tempat">
                @foreach($mata as $key => $matas)
                  <option value="{{$matas->Nomor_Rm}}" >{{$matas->Nomor_Rm}}</option>
                  @endforeach
                </select> -->
              </div>
              <!-- /id -->
              <!-- name -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-name">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal" required autofocus>
              </div>
              <!-- /name -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Keterangan </label>
                <textarea type="text" name="keterangan" class="form-control" id="keterangan" required></textarea> 
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
                <label class="col-form-label" for="modal-input-id">Dosen Pembimbing Klinik </label>
                <div class="card">
                  <div class="card-header">
                      <h3 class="card-title">Daftar Dosen</h3>
                  </div>
                  <div class="card-body">
                    <table id="tabel1" class="table table-bordered table-hover">
                <thead>
                  
                  <tr>
                    <th> AKSI</th>
                    <th> NAMA</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach($dosen as $key => $log)
                    <tr class="data-row">
                      <td class="align-middle ">
                        <input type="radio" id="dosen" name="dosen" value="{{ $log->NIP }}">
                      </td>
                      
                      <td class="align-middle ">{{ $log->NAMA }}</td>
                    </tr>
                    
                    @endforeach
                  </tbody>
            </table>
                  </div>
                </div>
                
                <!--  <select name="dosen" class="form-control" id="dosen">
                @foreach($dosen as $key => $rss)
                  <option value="{{$rss->NIP}}" >{{$rss->NAMA}}</option>
                  @endforeach
                </select>  -->
                
             <!--  <input name="dosen" list="dosen"  class="form-control">
              <datalist id="dosen">
                @foreach($dosen as $key => $rss)
                  <option value="{{$rss->NIP}}" >{{$rss->NAMA}}</option>
                @endforeach
              </datalist>   
              </div>
              -->
              
              <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
             </div>
            </div>
           
           
                        
        </form>
    </div>
    </div>
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-modal-label">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="attachment-body-content">
        <table id="tabel1" class="table table-bordered table-hover">
                <thead>
                  
                  <tr>
                    <th> NIP</th>
                    <th> NAMA</th>
                    
                    <th> UBAH</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($dosen as $key => $log)
                    <tr class="data-row">
                        <td class="align-middle nip">{{ $log->NIP }}</td>
                        <td class="align-middle ">{{ $log->NAMA }}</td>
                       
                        <td class="align-middle">
                            <button class="btn btn-sm btn-primary nip" data-nip="{{ $log->NIP }}" id="btnPilih">Pilih</button>
                            <a  href="" onclick="add('{{ $log->NIP }}');"><i class="fa fa-pencil"></i></a> 
                        </td>
                  
                    </tr>
                    
                    @endforeach
                  </tbody>
            </table>
      </div>
    </div>
  </div>
</div>
  
    
      
      
    </section>
    <script language="javascript">
      function SelectRedirect(){
      // ON selection of section this function will work
      //alert( document.getElementById('s1').value);

      switch(document.getElementById('jenis').value)
      {
      /*case "Bimbingan Soal UKMPPD":
      window.location="{{url('/create_bimbingan')}}";
      break;
      case "Ketramplian Klinis":
      window.location="{{url('/create_ketrampilan')}}";
      break;
      case "Ujian Akhir CO-SCHAAP":
      window.location="{{url('/create_ujian')}}";
      break;*/



      /// Can be extended to other different selections of SubCategory //////
      default:
      //window.location="{{url('/create_kegiatan')}}";
      //window.location="../"; // if no selection matches then redirected to home page
      break;
      }// end of switch 
      }
      ////////////////// 
    </script>
   <script type="text/javascript">
function showfield(name){
  if(name=='Lainnya')document.getElementById('div1').innerHTML='Lainnya: <input type="text"  class="form-control"  name="jenis" />';
  else document.getElementById('div1').innerHTML='';
}


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
      "autoWidth": true,
      "responsive": true,
    });
    
  });

  $('.cari-karyawan').on('click', function () {

  $("#edit-modal").modal("show");
  function add(id)
  {
    alert(id);
    document.getElementById("dosen").innerHTML = id;
  }
  
  



});
/*$(".btnPilih").each(function(){
  $(this).click(function(){
  var nip = $(this).data("NIP");
  document.getElementById("dosen").value = nip;
  })
});*/
</script>
<script>

</script>
@endsection

