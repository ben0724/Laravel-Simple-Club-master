@extends('admin.layouts.app')

@section('content')
<main class="main">
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item">Club Board Members</li>
    <li class="breadcrumb-item active">Add New</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" action="{{ url('/admin/club_board_members') }}" method="post">
                <div class="card">
                  <div class="card-header">
                    <strong>Add New</div>
                  <div class="card-body">
                      {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="club_id">Club </label>
                        <div class="col-md-9">
                            <select class="form-control @error('club_id') is-invalid @enderror" id="club_id" name="club_id">
                                <option value="">Select Club</option>
                                @foreach ($clubs as $club):
                                    <option value="{{ $club->id }}" {{ $club->id==old('club_id', $club_id) ? "selected":"" }}>{{ $club->name }}</option>
                                @endforeach
                            </select>
                            @error('club_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="name">Name</label>
                        <div class="col-md-9">
                          <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Enter Name.." >
                          @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="phone">Phone Number</label>
                        <div class="col-md-9">
                          <input class="form-control @error('phone') is-invalid @enderror" id="phone" type="text" name="phone" value="{{ old('phone') }}" placeholder="Enter Phone Number.." >
                          @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="address">Address</label>
                        <div class="col-md-9">
                          <input class="form-control @error('address') is-invalid @enderror" id="address" type="text" name="address" value="{{ old('address') }}" placeholder="Enter Address..">
                          @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="zipcode">Zipcode</label>
                        <div class="col-md-9">
                          <input class="form-control @error('zipcode') is-invalid @enderror" id="zipcode" type="text" name="zipcode" value="{{ old('zipcode') }}" placeholder="Enter Zipcode..">
                          @error('zipcode')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="city">City</label>
                        <div class="col-md-9">
                          <input class="form-control @error('city') is-invalid @enderror" id="city" type="text" name="city" value="{{ old('city') }}" placeholder="Enter City..">
                          @error('city')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="country">Country</label>
                        <div class="col-md-9">
                          <input class="form-control @error('country') is-invalid @enderror" id="country" type="text" name="country" value="{{ old('country') }}" placeholder="Enter Country..">
                          @error('country')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="role">Role</label>
                        <div class="col-md-9">
                          <input class="form-control @error('role') is-invalid @enderror" id="role" type="text" name="role" value="{{ old('role') }}" placeholder="Enter Role..">
                          @error('role')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o"></i> Add New</button>
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