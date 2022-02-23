@extends('admin.app')
@section('content')
<section class="content">
<div class="container-fluid">
  <!-- ROW 1 -->
  <div class="row">
      <!-- COL 1 -->
    <div class="col-12 col-md-12">
      <!-- COL1-CARD 1 -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">PENILAIAN ATTITUDE</h3>
        </div>
      
        <div class="card-body">
        <form method="POST" action="{{ route('atitude.create') }}" >
            @csrf
                
                    
                <input type="text" name="id" class="form-control" id="id" value="" hidden>
            <!--
                <div class="form-group">
                  <label class="col-form-label" for="modal-input-username">PELANGGARAN RINGAN </label>
                  <ul>
                    <li>
                      <!-- Radio Button
                      <div class="form-group">
                        <label for="gender">
                         Datang terlambat lebih dari 25 % kehadiran
                        </label>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="terlambat" id="terlambatA" value="A">
                          <label for="terlambatA" class="form-check-label">
                            A
                          </label>
                        </div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="terlambat" id="terlambatB" value="B">
                          <label for="terlambatB" class="form-check-label">
                            B
                          </label>
                        </div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="terlambat" id="terlambatC" value="C">
                          <label for="terlambatC" class="form-check-label">
                            C
                          </label>
                        </div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="terlambat" id="terlambatD" value="D">
                          <label for="terlambatD" class="form-check-label">
                            D
                          </label>
                        </div>
                      </div>
                      <!-- /Radio Button
                    </li>
                    <li>
                   
                      <!-- Radio Button
                      <div class="form-group">
                        <label for="gender">
                        Tidak masuk tanpa izin terlebih dahulu
                        </label>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="masuk" id="masukA" value="A">
                          <label for="masukA" class="form-check-label">
                            A
                          </label>
                        </div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="masuk" id="masukB" value="B">
                          <label for="masukB" class="form-check-label">
                            B
                          </label>
                        </div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="masuk" id="masukC" value="C">
                          <label for="masukC" class="form-check-label">
                            C
                          </label>
                        </div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="masuk" id="masukD" value="D">
                          <label for="masukD" class="form-check-label">
                            D
                          </label>
                        </div>
                      </div>
                      <!-- /Radio Button
                    </li>
                  </ul>
                </div>
                
                <div class="form-group">
                  <label class="col-form-label" for="modal-input-username">PELANGGARAN SEDANG </label>
                  <ul>
                    <li>
                      
                      <!-- Radio Button
                      <div class="form-group">
                        <label for="gender">
                        Meninggalkan kota tempat kepaniteraan
                        </label>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="kota" id="kotaA" value="A">
                          <label for="kotaA" class="form-check-label">
                            A
                          </label>
                        </div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="kota" id="kotaB" value="B">
                          <label for="kotaB" class="form-check-label">
                            B
                          </label>
                        </div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="kota" id="kotaC" value="C">
                          <label for="kotaC" class="form-check-label">
                            C
                          </label>
                        </div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="kota" id="kotaD" value="D">
                          <label for="kotaD" class="form-check-label">
                            D
                          </label>
                        </div>
                      </div>
                      <!-- /Radio Button
                    </li>
                    
                  </ul>
                </div>
                <div class="form-group">
                  <label class="col-form-label" for="modal-input-username">PELANGGARAN BERAT </label>
                  <ul>
                    <li>
                      <label class="col-form-label" for="modal-input-username">Tidak mengerjakan tugas </label>
                      <input type="text" name="tugas" class="form-control" id="tugas" value="" required>
                    </li>
                    <li>
                      <label class="col-form-label" for="modal-input-username">Memalsukan tanda tangan pembimbing </label>
                      <input type="text" name="ttd" class="form-control" id="ttd" value="" required>
                    </li>
                    <li>
                      <label class="col-form-label" for="modal-input-username">Tidak menghormati pembimbing, teman sejawat, paramedis, dan pasien </label>
                      <input type="text" name="hormat" class="form-control" id="hormat" value="" required>
                    </li>
                    <li>
                      <label class="col-form-label" for="modal-input-username">Tindakan Asusila </label>
                      <input type="text" name="asusila" class="form-control" id="asusila" value="" required>
                    </li>
                    <li>
                      <label class="col-form-label" for="modal-input-username">Menggunakan NAPZA </label>
                      <input type="text" name="napza" class="form-control" id="napza" value="" required>
                    </li>
                    <li>
                      <label class="col-form-label" for="modal-input-username">Melanggar kode etik kedokteran</label>
                      <input type="text" name="kodeetik" class="form-control" id="kodeetik" value="" required>
                    </li>
                    <li>
                      <label class="col-form-label" for="modal-input-username">Menjadi anggota / simpatisan organisasi terlarang</label>
                      <input type="text" name="organisasi" class="form-control" id="organisasi" value="" required>
                    </li>
                  </ul>
                </div>
				-->
                <div class="form-group">
					<label class="col-form-label" for="modal-input-username">Nilai Akhir Attitude</label>
                    <input type="text" name="kodeetik" class="form-control" id="kodeetik" value="" required>
                </div>
                
               
                <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
             </div>
            </form>
        </div>
      </div>
      <!-- END COL1-CARD 1 -->
    </div>
  </div>
</div>



</section>
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
</script>
@endsection

