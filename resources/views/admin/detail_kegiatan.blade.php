@extends('admin.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                   @foreach($user2 as $key => $us)
                   <img class="profile-user-img img-responsive img-circle"
                  src="/upload/profile/{{ $us->profile_photo_path}}" alt="{{ Auth::user()->name }}"
                   >
                   @endforeach
                </div>
                <div class="text-center">
               
                  <!-- <div class="form-group">
                    <a class="btn btn-info btn-sm" href="#" ><i class="far fa-edit"></i>Upload Foto</a>
                  </div> -->
                </div>
                
                @foreach($user2 as $key => $users)
                <h3 class="profile-username text-center">Profil Dokter Muda</h3>

                <p class="text-muted text-center">Details</p>
                
                <ul class="list-group list-group-unbordered mb-3">

                <li class="list-group-item">
                    <b>Nama</b> <a class="float-right">{{$users->name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>NIM</b> <a class="float-right">{{$users->username}}</a>
                  </li>
                  
                  
                  
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- COL -->
        <!-- <div class="col-md-6">
          
        </div> -->
        @endforeach
        <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">STASE : IPD/INTERNA</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example1">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($logs as $key => $log)
                    <tr>
                      <td>{{ $log->rumah_sakit_ }}</td>
                      <td>{{ $log->dosen }}</td>
                        @if($log->status == 1)
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        @else
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        @endif
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{date('d-m-Y', strtotime($log->tanggal))}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">ILMU KESEHATAN ANAK (IKA)</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive" >
                  <table class="table m-0" id="example2">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ika as $key => $log)
                    <tr>
                      <td>{{ $log->rumah_sakit_ }}</td>
                      <td>{{ $log->dosen }}</td>
                        @if($log->status == 1)
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        @else
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        @endif
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{date('d-m-Y', strtotime($log->tanggal))}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">BEDAH</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example3">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bedah as $key => $log)
                    <tr>
                      <td>{{ $log->rumah_sakit_ }}</td>
                      <td>{{ $log->dosen }}</td>
                        @if($log->status == 1)
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        @else
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        @endif
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{date('d-m-Y', strtotime($log->tanggal))}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">KULIT</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example4">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($kulit as $key => $log)
                    <tr>
                      <td>{{ $log->rumah_sakit_ }}</td>
                      <td>{{ $log->dosen }}</td>
                        @if($log->status == 1)
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        @else
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        @endif
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{date('d-m-Y', strtotime($log->tanggal))}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">THT</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example5">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tht as $key => $log)
                    <tr>
                      <td>{{ $log->rumah_sakit_ }}</td>
                      <td>{{ $log->dosen }}</td>
                        @if($log->status == 1)
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        @else
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        @endif
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{date('d-m-Y', strtotime($log->tanggal))}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">MATA</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example6">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mata as $key => $log)
                    <tr>
                      <td>{{ $log->rumah_sakit_ }}</td>
                      <td>{{ $log->dosen }}</td>
                        @if($log->status == 1)
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        @else
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        @endif
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{date('d-m-Y', strtotime($log->tanggal))}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">SARAF</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example7">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($saraf as $key => $log)
                    <tr>
                      <td>{{ $log->rumah_sakit_ }}</td>
                      <td>{{ $log->dosen }}</td>
                        @if($log->status == 1)
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        @else
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        @endif
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{date('d-m-Y', strtotime($log->tanggal))}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">JIWA</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example8">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jiwa as $key => $log)
                    <tr>
                      <td>{{ $log->rumah_sakit_ }}</td>
                      <td>{{ $log->dosen }}</td>
                        @if($log->status == 1)
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        @else
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        @endif
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{date('d-m-Y', strtotime($log->tanggal))}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
          <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">FORENSIK</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example9">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($forensik as $key => $log)
                    <tr>
                      <td>{{ $log->rumah_sakit_ }}</td>
                      <td>{{ $log->dosen }}</td>
                        @if($log->status == 1)
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        @else
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        @endif
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{date('d-m-Y', strtotime($log->tanggal))}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
          <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">ANESTESI</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example10">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($anestesi as $key => $log)
                    <tr>
                      <td>{{ $log->rumah_sakit_ }}</td>
                      <td>{{ $log->dosen }}</td>
                        @if($log->status == 1)
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        @else
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        @endif
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{date('d-m-Y', strtotime($log->tanggal))}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
          <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">RADIOLOGI</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example11">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($radiologi as $key => $log)
                    <tr>
                      <td>{{ $log->rumah_sakit_ }}</td>
                      <td>{{ $log->dosen }}</td>
                        @if($log->status == 1)
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        @else
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        @endif
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{date('d-m-Y', strtotime($log->tanggal))}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
          <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">REHAB MEDIK</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table class="table m-0" id="example12">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rehab as $key => $log)
                    <tr>
                      <td>{{ $log->rumah_sakit_ }}</td>
                      <td>{{ $log->dosen }}</td>
                        @if($log->status == 1)
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        @else
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        @endif
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{date('d-m-Y', strtotime($log->tanggal))}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
          <!-- COL -->
        <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">FARMASI</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-02">
                <div class="table-responsive">
                  <table class="table m-0"id="example13">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($farmasi as $key => $log)
                    <tr>
                      <td>{{ $log->rumah_sakit_ }}</td>
                      <td>{{ $log->dosen }}</td>
                        @if($log->status == 1)
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        @else
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        @endif
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{date('d-m-Y', strtotime($log->tanggal))}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">ILMU KESEHATAN MASYARAKAT</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-02">
                <div class="table-responsive">
                  <table class="table m-0"id="example13">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ikm as $key => $log)
                    <tr>
                      <td>{{ $log->rumah_sakit_ }}</td>
                      <td>{{ $log->dosen }}</td>
                        @if($log->status == 1)
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        @else
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        @endif
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{date('d-m-Y', strtotime($log->tanggal))}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <!-- /.col -->
         <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">LAKESLA</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-02">
                <div class="table-responsive">
                  <table class="table m-0"id="example13">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lakesla as $key => $log)
                    <tr>
                      <td>{{ $log->rumah_sakit_ }}</td>
                      <td>{{ $log->dosen }}</td>
                        @if($log->status == 1)
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        @else
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        @endif
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{date('d-m-Y', strtotime($log->tanggal))}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
         <!-- /.col -->
         <div class="col-md-12">
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">OBSTETRI DAN GINEKOLOGI</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-02">
                <div class="table-responsive">
                  <table class="table m-0"id="example13">
                    <thead>
                    <tr>
                      <th>Rumah Sakit</th>
                      <th>Dosen/Dokter</th>
                      <th>Status</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($obgyn as $key => $log)
                    <tr>
                      <td>{{ $log->rumah_sakit_ }}</td>
                      <td>{{ $log->dosen }}</td>
                        @if($log->status == 1)
                        <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                        @else
                        <td><span class="badge badge-danger"><i class="fas fa-times"></i></span></td>
                        @endif
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{date('d-m-Y', strtotime($log->tanggal))}}</div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
         <!-- /.col -->
    </div>
</div>

<script>
  $(function () {
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });

    $('#example3').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    $('#example4').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    $('#example5').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });

    $('#example6').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    $('#example7').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    $('#example8').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });

    $('#example9').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    $('#example10').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    $('#example11').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });

    $('#example12').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    $('#example13').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
    
  });
</script>
    @endsection