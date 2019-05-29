@extends('admin.layouts.app')

@section('content')
<main class="main">
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item">Excel Files</li>
    <li class="breadcrumb-item active">All Excel Files</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
            @include('admin.partials.flash')
            <div class="card">
                <div class="card-header">
                <i class="fa fa-align-justify"></i> All Excel Files
                @can('upload', App\ExcelFile::class)
                 - <a class="" href="{{ url('/admin/excel_files/upload') }}">Upload</a>
                @endcan
                </div>
                <div class="card-body">
                @if (count($excel_files))
                <table class="table table-responsive-sm table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Path</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($excel_files as $excel_file)
                    <tr>
                        <td>{{ $excel_file->id }}</td>
                        <td>{{ $excel_file->name }}</td>
                        <td>{{ $excel_file->path }}</td>
                        <td>
                            @can('download', $excel_file)
                            <button class="btn  btn-primary" type="button" onclick="location.href='{{ url("/admin/excel_files/".$excel_file->id) }}'">Download</button>
                            @endcan

                            @can('delete', $excel_file)
                            <button class="btn  btn-danger" type="button" onclick="event.preventDefault();
                            if (confirm('Are you sure to delete this item?')) document.getElementById('delete-form-{{ $excel_file->id }}').submit();">Delete</button>

                            <form id="delete-form-{{ $excel_file->id }}" action="{{ url('/admin/excel_files/'.$excel_file->id) }}" method="post">
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
                <div class="text-center">No excel files</div>
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