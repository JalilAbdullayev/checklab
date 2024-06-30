@extends('admin.layouts.master')
@section('title', 'Əlaqə')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/ckeditor/samples/css/samples.css') }}"/>
    <link rel="stylesheet" href="{{ asset('back/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}"/>
@endsection
@section('content')
    <!-- Bread crumb -->
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
                    <li class="breadcrumb-item active">
                        @yield('title')
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Bread crumb -->
    <form class="card" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Telefon" required
                       maxlength="14" value="{{ $contact->phone }}"/>
                <label for="phone" class="form-label text-white-50">
                    Telefon
                </label>
            </div>
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required
                       maxlength="255" value="{{ $contact->email }}"/>
                <label for="email" class="form-label text-white-50">
                    E-mail
                </label>
            </div>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="address" id="address" placeholder="Ünvan" required
                       maxlength="255" value="{{ $contact->address }}"/>
                <label for="address" class="form-label text-white-50">
                    Ünvan
                </label>
            </div>
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="url" class="form-control" name="facebook" id="facebook" placeholder="Facebook" required
                       maxlength="255" value="{{ $contact->facebook }}"/>
                <label for="facebook" class="form-label text-white-50">
                    Facebook
                </label>
            </div>
            @error('facebook')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="url" class="form-control" name="instagram" id="instagram" placeholder="Instagram" required
                       maxlength="255" value="{{ $contact->instagram }}"/>
                <label for="instagram" class="form-label text-white-50">
                    Instagram
                </label>
            </div>
            @error('instagram')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="url" class="form-control" name="whatsapp" id="whatsapp" placeholder="WhatsApp" required
                       maxlength="255" value="{{ $contact->whatsapp }}"/>
                <label for="whatsapp" class="form-label text-white-50">
                    WhatsApp
                </label>
            </div>
            @error('whatsapp')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="work_hours" class="form-label text-white-50">
                    İş saatları
                </label>
                <textarea class="form-control" name="work_hours" id="work_hours" required maxlength="255"
                          placeholder="İş saatları">{!! $contact->work_hours !!}</textarea>
            </div>
            @error('work_hours')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn w-100 btn-primary text-white">
                Yadda saxla
            </button>
        </div>
    </form>
@endsection
@section('js')
    <script src="{{ asset('back/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('back/ckeditor/samples/js/sample.js') }}"></script>
    <script>
        const about = CKEDITOR.replace('work_hours', {
            extraAllowedContent: 'div',
            height: 150,
            filebrowserImageBrowseUrl: '/admin/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/admin/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/admin/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/admin/laravel-filemanager/upload?type=Files&_token='
        });
    </script>
@endsection
