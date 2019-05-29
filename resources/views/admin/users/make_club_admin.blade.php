@extends('admin.layouts.app')

@section('content')
<main class="main">
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item">Excel Files</li>
    <li class="breadcrumb-item active">Upload</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" action="{{ url('/admin/users/'.$user->id.'/make_club_admin') }}" method="post">
                <div class="card">
                  <div class="card-header">
                    <strong>Upload</div>
                  <div class="card-body">
                      {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="club_id">Club </label>
                        <div class="col-md-9">
                            <select class="form-control @error('club_id') is-invalid @enderror" id="club_id" name="club_id">
                                <option value="">Select Club</option>
                                @foreach ($clubs as $club):
                                    <option value="{{ $club->id }}">{{ $club->name }}</option>
                                @endforeach
                            </select>
                            @error('club_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o"></i> Make Club Admin</button>
                  </div>
                </div>
                </form>
            </div>
            <!-- /.col-->
        </div>
    <!-- /.row-->
    </div>
</div>
</main>
@endsection