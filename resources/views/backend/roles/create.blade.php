
@extends('backend.index')

@section('title', 'Create Role')

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
                    <li><a href="{{ route('admin.roles.index') }}">Roles</a></li>
                    <li><span>Create Role</span></li>
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
                    <h4 class="header-title">Create Role</h4>
                    <form action="{{ route('admin.roles.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="inputRole" class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="inputRole">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputRole" class="col-sm-2 col-form-label">Permissions</label>
                            <div class="col-sm-10">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkAll">
                                    <label class="custom-control-label" for="checkAll"><h6 class="text-capitalize font-weight-bolder">All</h6></label>
                                </div>
                                <div class="row">
                                    @foreach ($permissions as $key => $values)
                                    <div class="col-sm-2 mt-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="permission-group-name permission-checkbox custom-control-input" id="checkAll-{{ $key }}" onchange="checkPermissionByGroupName('group-name-{{ $key }}', this)">
                                            <label class="custom-control-label" for="checkAll-{{ $key }}"><h6 class="text-capitalize font-weight-bolder">{{ $key }}</h6></label>
                                        </div>
                                        <div class="group-name-{{ $key }}">
                                            @foreach ($values as $item)
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="permission-name permission-checkbox custom-control-input" id="permission-{{ $item->id }}" name="permissions[]" value="{{ $item->name }}" onchange="checkPermission(this)">
                                                <label class="custom-control-label" for="permission-{{ $item->id }}">{{ $item->name }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-flat btn-primary float-right mt-2 px-5">Create Role</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Dark table end -->
    </div>
</div>
@endsection

@section('extra_js')
<script src="{{ asset('assets/js/multyCheckbox.js') }}"></script>
@endsection
