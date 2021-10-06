@extends('admin.app')
@section('content')
<section class="content">
<div class="container-fluid">
  <!-- ROW 1 -->
  <div class="row">
    <!-- COL 1 -->
  <div class="col-6 col-md-6">
      <!-- COL 2- CARD 2 -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sinkron Database</h3>
        </div>
            <div class="card-body">
            <form method="POST" action="{{ route('syncdb.create') }}">
            {{ csrf_field() }}
              <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Sinkron User DM" />
             </div>
        </form>
       
            </div>
        </div>
        <!-- END COL 2- CARD 1 -->
  </div>
   <!-- COL 2 -->
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
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": false,
    });

    $('#tabel1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
    
  });
</script>
@endsection

