
@extends('backend.index')

@section('title', 'Roles')

@section('css')
<!-- Start datatable css -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection

@section('content')
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Roles</h4>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li><span>Roles</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <!-- Dark table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="header-title">Role List</h4>
                        <a class="btn btn-flat btn-primary text-light mb-3" href="{{ route('roles.create') }}"><i class="fa fa-plus"></i> Add Role</a>
                    </div>
                    <div class="data-tables datatable-dark">
                        <table id="dataTable" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>SN</th>
                                    <th>Role</th>
                                    <th>Guard</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($roles as $role)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ Str::ucfirst($role->name) }}</td>
                                    <td>{{ $role->guard_name }}</td>
                                    <td>
                                        <div class="btn-group mb-xl-3" role="group" aria-label="Button group with nested dropdown">
                                            <a href="{{ route('roles.edit', $role) }}" class="btn btn-xs btn-flat btn-info"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href="button" class="btn btn-xs btn-flat btn-danger"><i class="fa fa-trash-o"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">Please insert role into database</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark table end -->
    </div>
</div>
@endsection
@section('js')
<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
@endsection
