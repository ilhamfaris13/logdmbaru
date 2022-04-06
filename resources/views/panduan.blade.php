@extends('admin.master')

@section('content')
<section class="content">
<div class="container-fluid">
<div class="row">
    <div class="col-12" style ="padding: 50px;">
    <center>
    <h1>Pusat Bantuan Aplikasi Log-DM</h1>
    </center>
    <br>
    <p style="text-indent: 45px;">Aplikasi/Sistem Log-Dm ini bertujuan untuk menjadi pengganti Buku Kepaniteraan saat ini. Berhubung Sistem ini masih dalam masa pengembangan, maka akan ada fitur yang secara tiba-tiba muncul. Sistem ini diluncurkan dengan status "Masa Percobaan" atau "Demo". Yang berarti semua data kegiatan, data dosen, dokter muda, maupun tanda tangan dosen adalah data "Dummy" atau data coba-coba. Pada halaman panduan ini ditegaskan pada dasarnya semua data yang ada di sistem ini jangan sampai disalah gunakan untuk kepentingan yang lain. Hal ini bertujuan agar tidak terjadi hal-hal yang tidak diinginkan.
    </p>
    <p style="text-indent: 45px;">Dalam masa percobaan ini, pasti selalu ada kesalahan berupa ERROR atau BUG pada sistem. Demi mendukung perkembangan sistem ini, maka kami menyediakan tempat untuk menyampaikan keluhan kepada kami baik berupa keluhan ERROR maupun fitur yang kurang pada sistem. Untuk mengisi data keluhan dapat di klik link sebagai berikut :
    </p>

    <ul>
        <li><a href="/downloadfile">Download Buku Panduan</a></li>
        <li><a href="http://fk.hangtuah.ac.id/feedback-website/">Form Feedback</a></li>
        <li><a href="https://forms.gle/PfwbmhkQh2Ezbcs6A">Kuesioner Evaluasi Pembelajaran Dokter Muda </a></li>
        
        @if( Auth::user()->level == "dosen")
        <li><a href="/panduankep"><h1>Buku Panduan Kepaniteraan</h1></a></li>
        <li><a href="/panduannilai"><h1>Buku Panduan Penilaian</h1></a></li>
        <li><a href="/pedoman"><h1>Buku Pedoman Akademik</h1></a></li>
        <li><a href="/jadwalsiklus"><h1>Jadwal Siklus DM</h1></a></li>
        @else
        <li><a href="/formcutistase"><h1>Form Cuti Stase</h1></a></li>
        <li><a href="/formisolasi"><h1>Form Izin Isolasi Mandiri</h1></a></li>
        <li><a href="/formakademik"><h1>Form Cuti Akademik</h1></a></li>
        @endif
        
    </ul>
    </div>
<div>

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

