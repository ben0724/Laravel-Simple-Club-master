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
                <form class="form-horizontal" action="{{ url('/admin/excel_files') }}" method="post" enctype="multipart/form-data">
                <div class="card">
                  <div class="card-header">
                    <strong>Upload</div>
                  <div class="card-body">
                      {{ csrf_field() }}
                      <!-- <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="name">Name</label>
                        <div class="col-md-9">
                          <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Enter Name.." >
                          @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file">File</label>
                        <div class="col-md-9">
                          <input id="file" type="file" name="file">
                        </div>
                      </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o"></i> Upload</button>
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