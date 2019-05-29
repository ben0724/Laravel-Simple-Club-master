@extends('admin.layouts.app')

@section('content')
<main class="main">
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item">Clubs</li>
    <li class="breadcrumb-item active">Edit Club</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" action="{{ url('/admin/clubs/'.$club->id) }}" method="post">
                <div class="card">
                  <div class="card-header">
                    <strong>Edit Club</div>
                  <div class="card-body">
                      {{ method_field('put') }}
                      {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="name">Name</label>
                        <div class="col-md-9">
                          <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name', $club->name) }}" placeholder="Enter Name.." >
                          @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="shortname">Short Name</label>
                        <div class="col-md-9">
                          <input class="form-control @error('shortname') is-invalid @enderror" id="shortname" type="text" name="shortname" value="{{ old('shortname', $club->shortname) }}" placeholder="Enter Short Name.." >
                          @error('shortname')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="address">Address</label>
                        <div class="col-md-9">
                          <input class="form-control @error('address') is-invalid @enderror" id="address" type="text" name="address" value="{{ old('address', $club->address) }}" placeholder="Enter Address..">
                          @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="zipcode">Zipcode</label>
                        <div class="col-md-9">
                          <input class="form-control @error('zipcode') is-invalid @enderror" id="zipcode" type="text" name="zipcode" value="{{ old('zipcode', $club->zipcode) }}" placeholder="Enter Zipcode..">
                          @error('zipcode')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="city">City</label>
                        <div class="col-md-9">
                          <input class="form-control @error('city') is-invalid @enderror" id="city" type="text" name="city" value="{{ old('city', $club->city) }}" placeholder="Enter City..">
                          @error('city')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="country">Country</label>
                        <div class="col-md-9">
                          <input class="form-control @error('country') is-invalid @enderror" id="country" type="text" name="country" value="{{ old('country', $club->country) }}" placeholder="Enter Country..">
                          @error('country')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="email">Email</label>
                        <div class="col-md-9">
                          <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email', $club->email) }}" placeholder="Enter Email..">
                          @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="siteurl">Site Url</label>
                        <div class="col-md-9">
                          <input class="form-control @error('siteurl') is-invalid @enderror" id="siteurl" type="url" name="siteurl" value="{{ old('siteurl', $club->siteurl) }}" placeholder="Enter Site Url..">
                          @error('siteurl')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o"></i> Update</button>
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