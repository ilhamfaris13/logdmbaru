@extends('admin.master')

@section('content')
<section class="content">
<div class="container-fluid">
<div class="row">
    <div class="col-12" style ="padding: 50px;">
    <center>
    <h1>Panduan Pemakaian Aplikasi Log-DM</h1>
    </center>
    <br>
    <p style="text-indent: 45px;">Aplikasi/Sistem Log-Dm ini bertujuan untuk menjadi pengganti Buku Kepaniteraan saat ini. Berhubung Sistem ini masih dalam masa pengembangan, maka akan ada fitur yang secara tiba-tiba muncul. Sistem ini diluncurkan dengan status "Masa Percobaan" atau "Demo". Yang berarti semua data kegiatan, data dosen, dokter muda, maupun tanda tangan dosen adalah data "Dummy" atau data coba-coba. Pada halaman panduan ini ditegaskan pada dasarnya semua data yang ada di sistem ini jangan sampai disalah gunakan untuk kepentingan yang lain. Hal ini bertujuan agar tidak terjadi hal-hal yang tidak diinginkan.
    </p>
    <p style="text-indent: 45px;">Demi menekan penggunaan kertas yang berakibat penyimpanan gudang menjadi penuh, maka Sistem ini akan menjadi solusi. Semua data akan masuk kedalam sistem dan tersimpan di server FK UHT. Selain itu, data yang tersimpan di Database server FK UHT dapat dimanfaatkan untuk sistem-sistem lain kedepannya. Adapun fitur-fitur yang tersedia di dalam sistem Log-Dm adalah sebagai berikut :
    </p>

    <ul>
        <li><a href="#bagiandm">User untuk hak Akses Dokter Muda</a>
            <ul>
                <li><a href="#logindm">Login</a></li>
                <li><a href="#buatbaru">Daftar Kegiatan</a></li>
                <li><a href="#laporan">Cetak Laporan</a></li>
            </ul>
        </li>
        <li><a href="#bagiandosen">User untuk hak Akses Dosen</a>
            <ul>
                <li><a href="#daftar">Proses Verifikasi</a></li>
                <li><a href="#ttd">Tanda Tangan Digital</a></li>
            </ul>
        </li>
    </ul>
    </div>
<div>

<div class="row">
          <div class="col-12">
            <div class="card" id="bagiandm">
              <div class="card-header">
                <h2 class="card-title">Panduan Penggunaan Untuk USER - DM (Dokter Muda)</h2>
                
              </div>
             
              <!-- /.card-header -->
              <div class="card-body">
             
                <table id="tabledm" class="table table-responsive table-bordered">
                  <thead>
                  
                    <tr>
                      <th>No.</th>
                      <th> Keterangan</th>
                      <th> Gambar</th>
                   
                    </tr>
                  </thead>
                  <tbody>
                 
                    <tr class="data-row" id = "logindm">
                        <td class="align-middle word-break dosen">1</td>
                        <td class="align-middle foto" >Login DM Username dan password = NIM</td>
                        <td class=" id" ><img src="/gambar/1.png" height = "600" width = "1000"></td> 
                    </tr>
                    <tr class="data-row">   
                        <td class="align-middle word-break dosen">2</td>
                        <td class="align-middle foto" > Dosen Username dan Password = NIP</td>
                        <td class="align-middle id" ><img src="{{ public_path('/assets/dist/img/2.png') }}"  height = "600" width = "1000"></td> 
                    </tr>
                    <tr class="data-row">   
                        <td class="align-middle word-break dosen">3</td>
                        <td class="align-middle foto" > Dashboard akan menampilkan informasi dari DM maupun dosen yang sudah login. <br> Untuk melakukan edit profile, maka klik bagian yang dilingkari </td>
                        <td class="align-middle id" ><img src="/assets/dist/img/3.png"  height = "600" width = "1000"></td> 
                    </tr>
                    <tr class="data-row">   
                        <td class="align-middle word-break dosen">4</td>
                        <td class="align-middle foto" >Pada halaman Edit Profile terdapat fitur untuk upload foto dan merubah password</td>
                        <td class="align-middle id" ><img src="/assets/dist/img/4.png"  height = "600" width = "1000"></td> 
                    </tr>
                    <tr class="data-row" id="buatbaru">   
                        <td class="align-middle word-break dosen">5</td>
                        <td class="align-middle foto" >Untuk membuat daftar kegiatan baru, maka user dapat melakukan input kegiatan baru <br> di Daftar Kegiatan -> Buat Baru</td>
                        <td class="align-middle id" ><img src="/assets/dist/img/5.png"  height = "600" width = "1000"></td> 
                    </tr>
                    <tr class="data-row">   
                        <td class="align-middle word-break dosen">6</td>
                        <td class="align-middle foto" >Disini user akan melakukan pengisian daftar kegiatan dengan rinci mulai dari STASE, RS, sampai Dosen pembimbing</td>
                        <td class="align-middle id" ><img src="/assets/dist/img/6.png"  height = "600" width = "1000"></td> 
                    </tr>
                    <tr class="data-row">   
                        <td class="align-middle word-break dosen">7</td>
                        <td class="align-middle foto" >Kondisi apabila kegiatan telah berhasi diinputkan</td>
                        <td class="align-middle id" ><img src="/assets/dist/img/7.png"  height = "600" width = "1000"></td> 
                    </tr>
                    <tr class="data-row">   
                        <td class="align-middle word-break dosen">8</td>
                        <td class="align-middle foto" >Sistem ini juga dilengkapi dengan fitur pencarian. Caranya user hanya memasukan kata kunci sesuai jenis keterangannya, STASE-nya, Rumah sakitnya, dan lain-lain. Sekain itu pada daftar kegiatan yang baru ditambahkan akan berstatus "Belum Verifikasi"</td>
                        <td class="align-middle id" ><img src="/assets/dist/img/8.png"  height = "600" width = "1000"></td> 
                    </tr>
                    <tr class="data-row">   
                        <td class="align-middle word-break dosen">9</td>
                        <td class="align-middle foto" >Berikut merupakan tampilan daftar kegiatan yang sudah diverifikasi. Kolom untuk daftar kegiatan yang sudah terverifikasi akan muncul dibawah dan status pada kegiatan tersebut menjadi "Sudah diverifikasi" serta muncul tanda tangan dari dosen</td>
                        <td class="align-middle id" ><img src="/assets/dist/img/12.png"  height = "600" width = "1000"></td> 
                    </tr>
                    <tr class="data-row" id="laporan">   
                        <td class="align-middle word-break dosen">10</td>
                        <td class="align-middle foto" >Setelah DM menyelesaikan tugas Kepaniteraannya, maka DM dapat melakukan pengunduhan laporan kegiatan dengan cara menekan tombol "Export PDF"</td>
                        <td class="align-middle id" ><img src="/assets/dist/img/15.png"  height = "600" width = "1000"></td> 
                    </tr>
                    <tr class="data-row">   
                        <td class="align-middle word-break dosen">11</td>
                        <td class="align-middle foto" >Hasil PDF yang siap di cetak</td>
                        <td class="align-middle id" ><img src="/assets/dist/img/16.png"  height = "600" width = "1000"></td> 
                    </tr>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card" id="bagiandosen">
              <div class="card-header">
              <h2 class="card-title">Panduan Penggunaan Untuk USER - DOSEN</h2>
                
              </div>
             
              <!-- /.card-header -->
              <div class="card-body">
             
                <table id="tabledosen" class="table table-responsive table-bordered">
                  <thead>
                  
                    <tr>
                      <th>No.</th>
                      <th> Keterangan</th>
                      <th> Gambar</th>
                   
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="data-row" id="daftar">   
                        <td class="align-middle word-break dosen">1</td>
                        <td class="align-middle foto" >Setelah user DM selesai menginputkan kegiatan, maka DM menunggu untuk dosen melakukan verifikasi. Pada halaman Daftar Kegiatan dosen, terdapat tombol "Verifikasi" yang berfungsi untuk melakukan verifikasi kegiatan DM</td>
                        <td class="align-middle id" ><img src="/assets/dist/img/9.png"  height = "600" width = "1000"></td> 
                    </tr>
                    <tr class="data-row">   
                        <td class="align-middle word-break dosen" id="ttd">2</td>
                        <td class="align-middle foto" >Setelah menekan tombol "Verifikasi", user akan disediakan informasi lengkap tentang kegiatan yang sudah di daftarkan oleh DM beserta panel untuk melakukuan tanda tangan digital</td>
                        <td class="align-middle id" ><img src="/assets/dist/img/10.png"  height = "600" width = "1000"></td> 
                    </tr>
                    <tr class="data-row">   
                        <td class="align-middle word-break dosen">3</td>
                        <td class="align-middle foto" >Setelah user dosen selesai melakukan verifikasi, maka status pada kegiatan tersebut akan berubah menjadi "Sudah diverifikasi"</td>
                        <td class="align-middle id" ><img src="/assets/dist/img/11.png"  height = "600" width = "1000"></td> 
                    </tr>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
           

            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
          
           
             


</section>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": false,
      "autoWidth": false,
    });
    $('#tabledm').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": true,
      "responsive": false,
    });
    $('#tabledosen').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": true,
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
@endsection

