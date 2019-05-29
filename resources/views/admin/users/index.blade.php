@extends('admin.layouts.app')

@section('content')
<main class="main">
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item active">Users</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
            @include('admin.partials.flash')
            <div class="card">
                <div class="card-header">
                <i class="fa fa-align-justify"></i> Users
                </div>
                <div class="card-body">
                @if (count($users))
                <table class="table table-responsive-sm table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Club</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->getClubName() }}</td>
                        <td>
                            @can('make_club_admin', $user)
                                @if ($user->role == "user")
                                    <button class="btn  btn-primary" type="button" onclick="location.href='{{ url("/admin/users/".$user->id."/make_club_admin") }}'">Make Club Admin</button>
                                @endif
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                <div class="text-center">No users</div>
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