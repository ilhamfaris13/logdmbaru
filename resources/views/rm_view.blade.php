@extends('admin.master')
@push('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
@section('content')
<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-6 col-md-6">
        <form id="rm" method="POST" action="{{ route('rm.redirect') }}">
                        @csrf
            <div class="card text-black bg-light mb-0">
                <div class="card-header">
                    <h2 class="m-0">Redirect</h2>
                </div>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Nomor Rekam Medis </label>
                <input type="text" name="rm" class="form-control" id="rm" required>
              </div>
            <div class="form-group">
              <input style="background-color: #4EB1BA; color: black" class="btn btn-small btn-success" type="submit" value="Submit" />
             </div>
        </form>
        </div>
    </div>
</div>
@endsection