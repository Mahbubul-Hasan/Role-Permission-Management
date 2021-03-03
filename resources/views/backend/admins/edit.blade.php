
@extends('backend.index')

@section('title', 'Update Admin')

@section('css')
<link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Uses</h4>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li><a href="{{ route('admin.admins.index') }}">Admins</a></li>
                    <li><span>Update Admin</span></li>
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
                    <h4 class="header-title">Create Admin</h4>
                    <form action="{{ route('admin.admins.update', $admin->id) }}" method="POST">
                        @csrf @method('PUT')
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" id="inputName" value="{{ old('name') ?? $admin->name }}" required>
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="inputEmail" value="{{ old('email') ?? $admin->email }}" required>
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputUsername" class="col-sm-2 col-form-label">Username <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="username" class="form-control form-control-sm @error('username') is-invalid @enderror" id="inputUsername" value="{{ old('username') ?? $admin->username }}" required>
                                @error('username') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputRole" class="col-sm-2 col-form-label">Roles <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <select id="inputRole" class="form-control form-control-sm @error('roles') is-invalid @enderror" name="roles[]" multiple>
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" @if($admin->hasRole($role->name)) selected @endif>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                @error('roles') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="inputPassword">
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputConfirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password_confirmation" class="form-control form-control-sm @error('password_confirmation') is-invalid @enderror" id="inputConfirmPassword">
                                @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-flat btn-success float-right mt-2 px-5">Update Admin</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Dark table end -->
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
@endsection

@section('extra_js')
<script>
    $('#inputRole').select2();
</script>
@endsection
