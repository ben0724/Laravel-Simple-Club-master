@extends('admin.layouts.app')

@section('content')
<main class="main">
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item">Club Board Members</li>
    <li class="breadcrumb-item active">All Club Board Members</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                @include('admin.partials.flash')
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="select1">Club: </label>
                            <div class="col-md-9">
                                <form id="club-form" action="{{ url('/admin/club_board_members') }}" method="get">
                                    <select class="form-control" id="club_id" name="club_id" onchange="document.getElementById('club-form').submit()">
                                        <option value="0">All</option>
                                        @foreach ($clubs as $club):
                                            <option value="{{ $club->id }}" {{ $club->id==$club_id ? "selected":"" }}>{{ $club->name }}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                <i class="fa fa-align-justify"></i> All Club Board Members
                @can('create', App\ClubBoardMember::class)
                 - <a class="" href="{{ url('/admin/club_board_members/create') }}">Add New</a>
                @endcan
                </div>

                <div class="card-body">
                @if (count($club_board_members))
                <table class="table table-responsive-sm table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($club_board_members as $member)
                    <tr>
                        <td>{{ $member->id }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->phone }}</td>
                        <td>{{ $member->address }}</td>
                        <td>
                            @can('update', $member)
                            <button class="btn  btn-primary" type="button" onclick="location.href='{{ url("/admin/club_board_members/".$member->id."/edit") }}'">Edit</button>
                            @endcan

                            @can('delete', $member)
                            <button class="btn  btn-danger" type="button" onclick="event.preventDefault();
                            if (confirm('Are you sure to delete this item?')) document.getElementById('delete-form-{{ $member->id }}').submit();">Delete</button>

                            <form id="delete-form-{{ $member->id }}" action="{{ url('/admin/club_board_members/'.$member->id) }}" method="post">
                                {{ method_field('delete') }}
                                @csrf
                            </form>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                <div class="text-center">No club board members</div>
                @endif
                </div>
            </div>
            </div>
            <!-- /.col-->
        </div>
    <!-- /.row-->
    </div>
</div>
</main>
@endsection