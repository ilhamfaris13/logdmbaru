@extends('admin.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                   <!-- <img class="profile-user-img img-fluid img-circle"
                  src="/upload/profile/164869164020150410110.jpg" alt="{{ Auth::user()->name }}"
                   > -->
                   <img class="profile-user-img img-responsive img-circle"
                  src="/upload/profile/{{ Auth::user()->profile_photo_path}}" alt="{{ Auth::user()->name }}"
                   >
                </div>
                <div class="text-center">
               
                  <!-- <div class="form-group">
                    <a class="btn btn-info btn-sm" href="#" ><i class="far fa-edit"></i>Upload Foto</a>
                  </div> -->
                </div>
                
                @foreach($user as $key => $users)
                <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

                <p class="text-muted text-center">Dokter Muda Fakultas Kedokteran Universitas Hangtuah</p>
                
                <ul class="list-group list-group-unbordered mb-3">

                <li class="list-group-item">
                    <b>Nama</b> <a class="float-right">{{Auth::user()->name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Username</b> <a class="float-right">{{Auth::user()->username}}</a>
                  </li>
                  @if( Auth::user()->level == "dm")
                  <li class="list-group-item">
                    <b>Kelompok</b> <a class="float-right">{{$users->kelompok}}</a>
                  </li>
                 <!--  @foreach($mata as $key => $matas)
                  <li class="list-group-item">
                    <b>RM</b> <a class="float-right">{{$matas->Nomor_Rm}}</a>
                    <a class="btn btn-primary btn-sm" href="http://localhost//new_test/output/mata1_view.php?editid1={{$matas->Id_Mata}}&" target="_blank"><i class="far fa-eye"></i></a>
                  </li>
                  
                  @endforeach -->
                  @else
               
                  @endif
                  
                </ul>
                
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-6">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
            <form action="/upload/foto" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
          
                    <div class="form-group">
                      <b>UPLOAD PAS FOTO</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
            </form>
            </div>
            
        </div>

        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
            <form action="/ganti/pwd" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
          
                    <div class="form-group">
                      <b>GANTI PASSWORD</b><br/>
                      <div class="form-group">
                    <label class="col-form-label" for="modal-input-password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    </div>
                    <input type="submit" value="Ganti" class="btn btn-primary">
                  </form>
            </div>
            
        </div>
       
       <!--  <div class="card card-primary card-outline">
            <div class="card-body box-profile">
            <form action="/upload/foto" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <b>CETAK BERKAS</b>
                    </div>
                    <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="CETAK" />
             </div>
                  </form>
            </div>
            
        </div> -->


        @endforeach
        </div>

    </div>
    @if( Auth::user()->level == "dm")
    <div class="row">
        <div class="col-md-6">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <b>BUKTI PEMBAYARAN STASE IPD</b>
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
               <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>IPD/ITERNA</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/ipd" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">

                    <a href="/upload/ipd{{ Auth::user()->username}}.jpg" target="_blank"><img id="modal-input-foto" style="float: right;" class="img" src="/upload/ipd{{ Auth::user()->username}}.jpg" alt="" width="150" height="150"></a>
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- @if($ipd==0)
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    @else
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    @endif -->
                    </li>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <b>BUKTI PEMBAYARAN STASE IKA</b> 
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <div class="text-center">
               
                  <b>BUKTI PEMBAYARAN STASE</b>
                </div>
                    <li class="list-group-item">
                    <div class="text-center">
                    <b>IKA</b>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                         <tr>
                        <th>AKSI</th>
                        <th> FOTO</th>
                        </tr>
                        <tr class="data-row">
                        <td class="align-middle">
                            <form action="/upload/ika" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
          
                    <div class="form-group">
                      <b>UPLOAD BUKTI PEMBAYARAN</b><br/>
                      <input type="file" name="file">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                        </td>
                        <td>
                            <div class="widget-user-image">
                    <img id="modal-input-foto" style="float: right;" class="img" src="/upload/ika{{ Auth::user()->username}}.jpg" alt="" width="150" height="150">
                    </div>
                        </td>
                        </tr>
                    </table>
                     
                    
                   
                    <!-- @if($ipd==0)
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    @else
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    @endif -->
                    </li>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <b>BUKTI PEMBAYARAN STASE BEDAH</b>
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                Masih Belum Tersedia
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <b>BUKTI PEMBAYARAN STASE KULIT</b>
                </button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
                Masih Belum Tersedia
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingfive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                  <b>BUKTI PEMBAYARAN STASE THT</b>
                </button>
              </h5>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                Masih Belum Tersedia
              </div>
            </div>
          </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingfive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                  <b>BUKTI PEMBAYARAN STASE MATA</b>
                </button>
              </h5>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                Masih Belum Tersedia
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingfive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                  <b>BUKTI PEMBAYARAN STASE SARAF</b>
                </button>
              </h5>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                Masih Belum Tersedia
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingfive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                  <b>BUKTI PEMBAYARAN STASE JIWA</b>
                </button>
              </h5>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                Masih Belum Tersedia
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingfive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                  <b>BUKTI PEMBAYARAN STASE FORENSIK</b>
                </button>
              </h5>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                Masih Belum Tersedia
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingfive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                  <b>BUKTI PEMBAYARAN STASE ANESTESI</b>
                </button>
              </h5>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                Masih Belum Tersedia
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingfive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                  <b>BUKTI PEMBAYARAN STASE RADIOLOGI</b>
                </button>
              </h5>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                Masih Belum Tersedia
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingfive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                  <b>BUKTI PEMBAYARAN STASE REHAB MEDIK</b>
                </button>
              </h5>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                Masih Belum Tersedia
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingfive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                  <b>BUKTI PEMBAYARAN STASE FARMASI</b>
                </button>
              </h5>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                Masih Belum Tersedia
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingfive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                  <b>BUKTI PEMBAYARAN STASE IKM</b>
                </button>
              </h5>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                Masih Belum Tersedia
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingfive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                  <b>BUKTI PEMBAYARAN STASE LAKESLA</b>
                </button>
              </h5>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                Masih Belum Tersedia
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingfive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                  <b>BUKTI PEMBAYARAN STASE OBGYN</b>
                </button>
              </h5>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                Masih Belum Tersedia
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
    @else
    @endif

    @endsection