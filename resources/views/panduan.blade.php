@extends('admin.master')

@section('content')
<section class="content">
<div class="container-fluid">
<div class="row">
    <div class="col-12" style ="padding: 50px;">
    <center>
    <h1>Pusat Bantuan Aplikasi E-Log-DM</h1>
    </center>
    <br>
    <p style="text-indent: 45px;">Aplikasi/Sistem E-Log-Dm ini bertujuan untuk menjadi pengganti Buku Kepaniteraan saat ini. Berhubung Sistem ini masih dalam masa pengembangan, maka akan ada fitur yang secara tiba-tiba muncul. Sistem ini diluncurkan dengan status "Masa Percobaan" atau "Demo". Yang berarti semua data kegiatan, data dosen, dokter muda, maupun tanda tangan dosen adalah data "Dummy" atau data coba-coba. Pada halaman panduan ini ditegaskan pada dasarnya semua data yang ada di sistem ini jangan sampai disalah gunakan untuk kepentingan yang lain. Hal ini bertujuan agar tidak terjadi hal-hal yang tidak diinginkan.
    </p>
    <p style="text-indent: 45px;">Dalam masa percobaan ini, pasti selalu ada kesalahan berupa ERROR atau BUG pada sistem. Demi mendukung perkembangan sistem ini, maka kami menyediakan tempat untuk menyampaikan keluhan kepada kami baik berupa keluhan ERROR maupun fitur yang kurang pada sistem. Untuk mengisi data keluhan dapat di klik link sebagai berikut :
    </p>

    <ul>
        <li><a href="/downloadfile">Download Buku Panduan</a></li>
        
       
        @if( Auth::user()->level == "dosen")
		<li><a href="https://forms.gle/PfwbmhkQh2Ezbcs6A">Kuesioner Evaluasi Pembelajaran Dosen </a></li>
        <li><a href="/panduankep"><h2>Buku Panduan Kepaniteraan</h2></a></li>
        <li><a href="/panduannilai"><h2>Buku Panduan Penilaian</h2></a></li>
        <li><a href="/pedoman"><h2>Buku Pedoman Akademik</h2></a></li>
        <li><a href="/jadwalsiklus"><h2>Jadwal Siklus DM</h2></a></li>
        @else
		<li><a href="https://forms.gle/PfwbmhkQh2Ezbcs6A">Kuesioner Evaluasi Pembelajaran Dokter Muda </a></li>
        <li><a href="/formcutistase"><h1>Form Cuti Stase</h1></a></li>
        <li><a href="/formisolasi"><h1>Form Izin Isolasi Mandiri</h1></a></li>
        <li><a href="/formakademik"><h1>Form Cuti Akademik</h1></a></li>
        @endif
        <li><a href="/anestesi"><h2>Buku Panduan Kepaniteraan Anestesi</h2></a></li>
		<li><a href="/radiologi"><h2>Buku Panduan Kepaniteraan Radiologi</h2></a></li>
		<li><a href="/ipd"><h2>Buku Panduan Kepaniteraan IPD</h2></a></li>
		<li><a href="/tht"><h2>Buku Panduan Kepaniteraan THT</h2></a></li>
		<li><a href="/saraf"><h2>Buku Panduan Kepaniteraan Saraf</h2></a></li>
		<li><a href="/obsgyn"><h2>Buku Panduan Kepaniteraan Obsgyn</h2></a></li>
		<li><a href="/bedah"><h2>Buku Panduan Kepaniteraan Bedah</h2></a></li>
		<li><a href="/mata"><h2>Buku Panduan Kepaniteraan Mata</h2></a></li>
		<li><a href="/jiwa"><h2>Buku Panduan Kepaniteraan Jiwa</h2></a></li>
		<li><a href="/kulit"><h2>Buku Panduan Kepaniteraan Kulit</h2></a></li>
		<li><a href="/anak"><h2>Buku Panduan Kepaniteraan Anak</h2></a></li>
		<li><a href="/forensik"><h2>Buku Panduan Kepaniteraan Forensik</h2></a></li>
		<li><a href="/lakesla"><h2>Buku Panduan Kepaniteraan LAKESLA</h2></a></li>
		<li><a href="/farmasi"><h2>Buku Panduan Kepaniteraan Farmasi</h2></a></li>
        <li><a href="/panduannilai"><h2>Buku Panduan Penilaian</h2></a></li>
        <li><a href="/pedoman"><h2>Buku Pedoman Akademik</h2></a></li>
        <li><a href="/jadwalsiklus"><h2>Jadwal Siklus DM</h2></a></li>
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

