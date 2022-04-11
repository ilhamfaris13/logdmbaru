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
                <ul class="list-group list-group-unbordered mb-3">
                    @if( Auth::user()->level == "dm")
                    <li class="list-group-item">
                    <div class="text-center">
                      <b>Stase Yang Diambil</b> 
                    </div>  
                    </li>
                    <li class="list-group-item">
                    <b>IPD/ITERNA</b>
                    @if($ipd==0)
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    @else
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    @endif
                    </li>
                    <li class="list-group-item">
                    <b>ILMU KESEHATAN ANAK (IKA)</b>
                    @if($ika==0)
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    @else
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    @endif
                    </li>
                    <li class="list-group-item">
                    <b>BEDAH</b> 
                    @if($bedah==0)
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    @else
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    @endif
                    </li>
                    <li class="list-group-item">
                    <b>KULIT</b>
                    @if($kulit==0)
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    @else
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    @endif
                    </li>
                    <li class="list-group-item">
                    <b>THT</b>
                    @if($tht==0)
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    @else
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    @endif
                    </li>
                    <li class="list-group-item">
                    <b>MATA</b>
                    @if($mata1==0)
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    @else
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    @endif
                    </li>
                    <li class="list-group-item">
                    <b>SARAF</b>
                    @if($saraf==0)
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    @else
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    @endif
                    </li>
                    <li class="list-group-item">
                    <b>JIWA</b>
                    @if($jiwa==0)
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    @else
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    @endif
                    </li>
                    <li class="list-group-item">
                    <b>FORENSIK</b>
                    @if($forensik==0)
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    @else
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    @endif
                    </li>
                    <li class="list-group-item">
                    <b>ANESTESI</b>
                    @if($anestesi==0)
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    @else
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    @endif
                    </li>
                    <li class="list-group-item">
                    <b>RADIOLOGI</b>
                    @if($radiologi==0)
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    @else
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    @endif
                    </li>
                    <li class="list-group-item">
                    <b>REHAB MEDIK</b>
                    @if($rehab==0)
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    @else
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    @endif
                    </li>
                    <li class="list-group-item">
                    <b>FARMASI</b>
                    @if($farmasi==0)
                    <a class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></a>
                    @else
                    <a class="btn btn-success btn-sm float-right"><i class="fas fa-check"></i></a>
                    @endif
                    </li>
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
    </div>
    @endsection