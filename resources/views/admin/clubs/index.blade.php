@extends('admin.layouts.app')

@section('content')
<main class="main">
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item">Clubs</li>
    <li class="breadcrumb-item active">All Clubs</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
            @include('admin.partials.flash')
            <div class="card">
                <div class="card-header">
                <i class="fa fa-align-justify"></i> All Clubs
                @can('create', App\Club::class)
                - <a class="" href="{{ url('/admin/clubs/create') }}">Add New</a>
                @endcan
                </div>
                <div class="card-body">
                @if (count($clubs))
                <table class="table table-responsive-sm table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Site Url</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($clubs as $club)
                    <tr>
                        <td>{{ $club->id }}</td>
                        <td>{{ $club->name }}</td>
                        <td>{{ $club->address }}</td>
                        <td>{{ $club->siteurl }}</td>
                        <td>
                            @can('update', $club)
                            <button class="btn  btn-primary" type="button" onclick="location.href='{{ url("/admin/clubs/".$club->id."/edit") }}'">Edit</button>
                            @endcan

                            @can('delete', $club)
                            <button class="btn  btn-danger" type="button" onclick="event.preventDefault();
                            if (confirm('Are you sure to delete this item?')) document.getElementById('delete-form-{{ $club->id }}').submit();">Delete</button>

                            <form id="delete-form-{{ $club->id }}" action="{{ url('/admin/clubs/'.$club->id) }}" method="post">
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
                <div class="text-center">No clubs</div>
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