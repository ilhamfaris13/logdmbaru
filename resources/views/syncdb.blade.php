@extends('admin.master')

@section('content')
<div class="main-container container-fluid">
  <div class="container-fluid">
    
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
        
    </div>
    </div>

@endsection
