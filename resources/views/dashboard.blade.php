@extends('admin.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                  src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"
                   >
                </div>
                @foreach($user as $key => $users)
                <h3 class="profile-username text-center">Fakultas Kedokteran UHT</h3>

                <p class="text-muted text-center">Profil Akun</p>

                <ul class="list-group list-group-unbordered mb-3">

                <li class="list-group-item">
                    <b>Nama</b> <a class="float-right">{{Auth::user()->name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>NIM</b> <a class="float-right">{{Auth::user()->username}}</a>
                  </li>
                  @if( Auth::user()->level == "dm")
                  <li class="list-group-item">
                    <b>Kelompok</b> <a class="float-right">{{$users->kelompok}}</a>
                  </li>
                  @else
                  <li class="list-group-item">
                    <b>NIDN</b> <a class="float-right">{{$users->nidn}}</a>
                  </li>
                  @endif
                  
                </ul>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-6">
        
       
        @endforeach
        </div>
        </div>
    </div>
    @endsection