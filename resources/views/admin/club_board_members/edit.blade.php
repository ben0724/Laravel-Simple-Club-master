@extends('admin.layouts.app')

@section('content')
<main class="main">
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item">Club Board Members</li>
    <li class="breadcrumb-item active">Edit Club Board Member</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" action="{{ url('/admin/club_board_members/'.$member->id) }}" method="post">
                <div class="card">
                  <div class="card-header">
                    <strong>Edit Club Board Member</div>
                  <div class="card-body">
                      {{ method_field('put') }}
                      {{ csrf_field() }}
                      <!-- <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Club </label>
                        <div class="col-md-9">
                            <select class="form-control" id="club_id" name="club_id">
                                @foreach ($clubs as $club):
                                    <option value="{{ $club->id }}" {{ $club->id==old('club_id', $member->club->id) ? "selected":"" }}>{{ $club->name }}</option>
                                @endforeach
                            </select>
                        </div>
                      </div> -->

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="name">Name</label>
                        <div class="col-md-9">
                          <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name', $member->name) }}" placeholder="Enter Name.." >
                          @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="phone">Phone Number</label>
                        <div class="col-md-9">
                          <input class="form-control @error('phone') is-invalid @enderror" id="phone" type="text" name="phone" value="{{ old('phone', $member->phone) }}" placeholder="Enter Phone Number.." >
                          @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="address">Address</label>
                        <div class="col-md-9">
                          <input class="form-control @error('address') is-invalid @enderror" id="address" type="text" name="address" value="{{ old('address', $member->address) }}" placeholder="Enter Address..">
                          @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="zipcode">Zipcode</label>
                        <div class="col-md-9">
                          <input class="form-control @error('zipcode') is-invalid @enderror" id="zipcode" type="text" name="zipcode" value="{{ old('zipcode', $member->zipcode) }}" placeholder="Enter Zipcode..">
                          @error('zipcode')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="city">City</label>
                        <div class="col-md-9">
                          <input class="form-control @error('city') is-invalid @enderror" id="city" type="text" name="city" value="{{ old('city', $member->city) }}" placeholder="Enter City..">
                          @error('city')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="country">Country</label>
                        <div class="col-md-9">
                          <input class="form-control @error('country') is-invalid @enderror" id="country" type="text" name="country" value="{{ old('country', $member->country) }}" placeholder="Enter Country..">
                          @error('country')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="role">Role</label>
                        <div class="col-md-9">
                          <input class="form-control @error('role') is-invalid @enderror" id="role" type="text" name="role" value="{{ old('role', $member->role) }}" placeholder="Enter Role..">
                          @error('role')
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