@extends('admin.layouts.master')
@section('title', 'İstifadəçi Redaktə')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-white-50">
                @yield('title')
            </h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.index') }}">
                            Ana Səhifə
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.users.index') }}">
                            İstifadəçilər
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        @yield('title')
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <form class="card" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Ad" maxlength="255"
                       value="{{ $user->name }}" required/>
                <label for="name" class="form-label text-white-50">
                    Ad
                </label>
            </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" maxlength="255"
                       value="{{ $user->email }}" required/>
                <label for="email" class="form-label text-white-50">
                    E-mail
                </label>
            </div>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="role" class="form-label text-white-50">
                    Admin
                </label>
                <select class="form-control" name="role" id="role">
                    <option value="0" @if($user->role == 0) selected @endif>
                        Admin
                    </option>
                    <option value="1" @if($user->role == 1) selected @endif>
                        Moderator
                    </option>
                    <option value="2" @if($user->role == 2) selected @endif>
                        Müştəri
                    </option>
                </select>
            </div>
            <button type="submit" class="btn w-100 btn-primary text-white">
                Saxla
            </button>
        </div>
    </form>
@endsection
