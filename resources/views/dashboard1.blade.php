<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Signature</title>
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css"/>
    </head>
    <body>

<!-- This simple signature pad form register the signatures with AJAX  -->
<!-- The signatures are stored in Public folder and in DB (here signature -> file) -->


<!-- Signature pad form made with Boostrap components -->

      <br>
        <div class="container">
          <span class="success" style="color:green; margin-top:10px; margin-bottom: 10px;"></span>
          <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required="">
        </div>
          <div class="jumbotron">

            <h1 class="display-6">Signature pad library</h1>
            <p class="lead">Simple form made with Laravel framework and Ajax POST method</p>

            <div class="alert alert-success" style="display:none"></div>

              <div class="wrapper">
                <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
              </div>

              <br>
              <button class="btn btn-primary" id="save">Save</button>
              <button class="btn btn-secondary" id="clear">Clear</button>

            </div>
        </div>


<!-- Link to js file in folder app and CDN used for the signature pad :  Jquery, ajax, signature pad -->
      <script src="{{ url('js/app.js') }} " charset="utf-8"></script>
      <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>


<!-- AJAX to save signature pad content -->

      <script type="text/javascript">
         $(function(){
          $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
               var canvas = document.getElementById('signature-pad');
               var coba = "coba";
               var signaturePad = new SignaturePad(canvas, {
               });
               var saveButton = document.getElementById('save');
               var clearButton = document.getElementById('clear');
               let name = $("input[name=name]").val();
               saveButton.addEventListener('click', function (event) {
                event.preventDefault();
                $.ajax({
                  url: "{{ url('/signature/post') }}",
                  method: 'post',
                  data: {
                    
                     signature: signaturePad.toDataURL('image/png'),
                     //name:name,
                  },
                  success: function(response){
                    //window.location.href = "{{ url('/signature/post') }}";
                  //  console.log(response);
                  if(response) {
            $('.success').text(response.success);
           
          }
                     jQuery('.alert').show();
                     jQuery('.alert').html(response.success);
                  }});
               });
                clearButton.addEventListener('click', function () {
                  signaturePad.clear();
                  
                });
            });
      </script>

    </body>

</html>