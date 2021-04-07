<!DOCTYPE html>
<html>
<head>
	<title>Laporan Program Kepaniteraan Dokter Muda</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
</head>
<body>
	<style type="text/css">
  
	/* table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		} */
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}
   
}
        
	</style>
  
  <center>
  <table>
    <tr>
      <td><img src="{{ public_path('/assets/dist/img/logo-uht-1.png') }}" width="90" height="90"></td>
      <!-- <td><img src="{{ public_path('/assets/dist/img/logo-uht-1.png') }}" width="90" height="90"></td> -->
      <td>
      <center>
        <font size="4">Fakultas Kedokteran </font><br>
        <font size="5"><b>Universitas Hang Tuah Surabaya</b></font><br>
        <font size="2">Bidang Profesi : Program Kepaniteraan Dokter Muda</font><br>
        <font size="2"><i>Jl. Gadung no 1 Komplek Barat RSAL dr. Ramelan
          Surabaya 
          Jawa Timur : 60111 Telp./Fax (031) 8433626, 8438750 Email : fk@hangtuah.ac.id</i></font>
      </center>
      </td>
    </tr>
    <tr>
      <td colspan="2"><hr></td>
    </tr>
  
  </table>
  </center>
  <!-- Kop Header -->
  <table border="0">
    <tr>
      <td rowspan="2"><img style="width: 150px; border-radius: 75px; border: 2px solid white; margin: 0px 20px"class=""
        src="storage/{{Auth::user()->profile_photo_path}}"
         height="170px" width="150px" alt="Avatar"></td>
         <td style="margin: 0px 20px;" rowspan="2">
         <!-- <td rowspan="2"><img style="width: 150px; border-radius: 75px; border: 2px solid white;" class=""
        src="{{ public_path('storage/'.Auth::user()->profile_photo_path.'') }}"
         height="170px" width="150px" alt="Avatar"></td>
         <td> -->
         <ul >
        @foreach($user as $key => $users)
      <li class="list-group-item">
          <b>Nama :</b> <a class="float-right">{{Auth::user()->name}}</a>
        </li>
        <li class="list-group-item">
          <b>NIM :</b> <a class="float-right">{{Auth::user()->username}}</a>
        </li>
        <li class="list-group-item">
          <b>Kelompok:</b> <a class="float-right">{{$users->kelompok}}</a>
        </li>
       @endforeach
      </ul>
         </td>
         
    </tr>
   
    
    
  
  </table>
  <!-- Profile -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
         
        </div>
        <!-- /.card-header -->
        <div class="card-body" >
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">Keterampilan / Kegiatan di Poliklinik</h3>
                </center>
            </caption>
            <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> STASE</th>
                      <th> TANGGAL</th>
                      <th> TTDP</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              @php $i=1 @endphp
              @foreach($data as $log)
              <tr >
                        <td >{{ $log->tempat }}</td>
                        <td >{{ $log->rumah_sakit_ }}</td>
                        <td >{{ $log->stase_ }}</td>
                        <td >{{date('d-m-Y', strtotime($log->tanggal))}}</td>
                        <td >
                            <span>
                            <img src="{{ public_path('upload/'.$log->ttdp.'') }}" width="100" height="100">
                            </span>
                            <br>
                        <span>
                            {{ $log->dosen }}
                        </span>
                        </td>
                          
                         
        
                        </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">Kegiatan Kuliah Pakar</h3>
                </center>
            </caption>
            <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> STASE</th>
                      <th> TANGGAL</th>
                      <th> TTDP</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              @php $i=1 @endphp
              @foreach($data2 as $log)
              <tr >
                        <td >{{ $log->tempat }}</td>
                        <td >{{ $log->rumah_sakit_ }}</td>
                        <td >{{ $log->stase_ }}</td>
                        <td >{{date('d-m-Y', strtotime($log->tanggal))}}</td>
                        <td >
                            <span>
                            <img src="{{ public_path('upload/'.$log->ttdp.'') }}" width="100" height="100">
                            </span>
                            <br>
                        <span>
                            {{ $log->dosen }}
                        </span>
                        </td>
                          
                         
        
                        </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">Tugas Jaga Ruang</h3>
                </center>
            </caption>
            <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> STASE</th>
                      <th> TANGGAL</th>
                      <th> TTDP</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              @php $i=1 @endphp
              @foreach($data3 as $log)
              <tr >
                        <td >{{ $log->tempat }}</td>
                        <td >{{ $log->rumah_sakit_ }}</td>
                        <td >{{ $log->stase_ }}</td>
                        <td >{{date('d-m-Y', strtotime($log->tanggal))}}</td>
                        <td >
                            <span>
                            <img src="{{ public_path('upload/'.$log->ttdp.'') }}" width="100" height="100">
                            </span>
                            <br>
                        <span>
                            {{ $log->dosen }}
                        </span>
                        </td>
                          
                         
        
                        </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->


  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">Unit Gawat Darurat</h3>
                </center>
            </caption>
            <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> STASE</th>
                      <th> TANGGAL</th>
                      <th> TTDP</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              @php $i=1 @endphp
              @foreach($data4 as $log)
              <tr >
                        <td >{{ $log->tempat }}</td>
                        <td >{{ $log->rumah_sakit_ }}</td>
                        <td >{{ $log->stase_ }}</td>
                        <td >{{date('d-m-Y', strtotime($log->tanggal))}}</td>
                        <td >
                            <span>
                            <img src="{{ public_path('upload/'.$log->ttdp.'') }}" width="100" height="100">
                            </span>
                            <br>
                        <span>
                            {{ $log->dosen }}
                        </span>
                        </td>
                          
                         
        
                        </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">Kegiatan Asistensi di Ruang Operasi</h3>
                </center>
              </div>
            </caption>
            <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> STASE</th>
                      <th> TANGGAL</th>
                      <th> TTDP</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              @php $i=1 @endphp
              @foreach($data5 as $log)
              <tr >
                        <td >{{ $log->tempat }}</td>
                        <td >{{ $log->rumah_sakit_ }}</td>
                        <td >{{ $log->stase_ }}</td>
                        <td >{{date('d-m-Y', strtotime($log->tanggal))}}</td>
                        <td >
                            <span>
                            <img src="{{ public_path('upload/'.$log->ttdp.'') }}" width="100" height="100">
                            </span>
                            <br>
                        <span>
                            {{ $log->dosen }}
                        </span>
                        </td>
                          
                         
        
                        </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class='table table-bordered'>
            <caption>
              <center>
                <h3 class="card-title">Tugas pada Dinas Luar</h3>
                </center>
            </caption>
            <thead>  
                    <tr>
                      <th> TEMPAT/ TINDAKAN / KASUS</th>
                      <th> RUMAH SAKIT</th>
                      <th> STASE</th>
                      <th> TANGGAL</th>
                      <th> TTDP</th>
                      
                     
                    </tr>
                  </thead>
            <tbody>
              @php $i=1 @endphp
              @foreach($data6 as $log)
              <tr >
                        <td >{{ $log->tempat }}</td>
                        <td >{{ $log->rumah_sakit_ }}</td>
                        <td >{{ $log->stase_ }}</td>
                        <td >{{date('d-m-Y', strtotime($log->tanggal))}}</td>
                        <td >
                            <span>
                            <img src="{{ public_path('upload/'.$log->ttdp.'') }}" width="100" height="100">
                            </span>
                            <br>
                        <span>
                            {{ $log->dosen }}
                        </span>
                        </td>
                          
                         
        
                        </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- card Body -->
      </div>
      <!-- card -->
    </div>
    <!-- col -->
  </div>
  <!-- row -->

  
	<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": true,
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
   

</body>
</html>