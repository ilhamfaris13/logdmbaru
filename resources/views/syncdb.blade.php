<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax Autocomplete Dynamic Search with select2</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <style>
        h2 {
            color: white;
        }
    </style>
</head>
<div class="main-container container-fluid">
  <div class="container-fluid">
  <div class="row">
            <div class="col-md-12 text-center mt-5">
                <h2>AJAX Autocomplete Search with Select2</h2>
            </div>
            <div class="col-md-8 mt-5 offset-2">
                <select class="livesearch form-control p-3" name="livesearch"></select>
            </div>
        </div>
    <div style="font-size: 15px; font-weight: bold" class="panel-body">
                    @foreach ($errors->all() as $error)
					<h4>{{ $error }}</h4>
					@endforeach
					@if (session('status'))
					<div>
					 {{ session('status') }}
					</div>
					@endif
           <form id="edit-form" method="POST" action="{{ route('sync.create') }}">
                        @csrf
            
              <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Syncronize DM" />
             </div>
            </div>               
        </form>
        <form method="post" action="{{ route('sync.multi') }}" >
            @csrf
           
        <table id="example2" class="table table-responsive table-bordered table-hover">
                  <thead>
                  
                    <tr>
                        <th>KODE</th>
                        <th> ALIAS</th>
                        <th> CEK</th>
                        
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($icd as $key => $log)
                    <tr class="data-row">
                    <td>{{$log->KODE}}</td>
                    <td>{{$log->ALIAS}}</td>
                
                    <td><!-- This input -->
                        <input type="checkbox" name="selected_values[]" value="{{$log->ID}}">
                    </td>
                    </tr>
                    
                    @endforeach
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
        <button type="submit" name="button">Get me some selected people</button>
        </form>
    </div>
    </div>
    <script type="text/javascript">
    
    $(document).ready(function() {
        $('select').selectpicker();
    });
    $('.livesearch').select2({
        placeholder: 'Select ICD',
        ajax: {
            url: '/ajax-autocomplete-search',
            dataType: 'json',
            delay: 10,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.ALIAS,
                            id: item.KODE
                        }
                    })
                };
            },
            cache: true
        }
    });
</script>
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
      "autoWidth": false,
      "responsive": false,
    });
    
  });
</script>

