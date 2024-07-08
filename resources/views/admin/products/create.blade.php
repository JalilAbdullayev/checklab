@extends('admin.layouts.master')
@section('title', 'Yeni Məhsul')
@section('css')
    <link href="{{ asset('back/ckeditor/samples/css/samples.css') }}" rel="stylesheet"/>
    <link href="{{ asset('back/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}" rel="stylesheet"/>
    <link href="{{ asset('back/node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset("back/node_modules/dropify/dist/css/dropify.min.css") }}"/>
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
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.products.index') }}">
                            Məhsullar
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
    <form class="card" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="title" id="title" placeholder="Başlıq" required
                       maxlength="255"/>
                <label for="title" class="form-label text-white-50">
                    Ad
                </label>
            </div>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="price" id="price" placeholder="Qiymət" required
                       min="0"/>
                <label for="price" class="form-label text-white-50">
                    Qiymət
                </label>
            </div>
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="discount" id="discount" placeholder="Endirim" min="0"/>
                <label for="discount" class="form-label text-white-50">
                    Endirimli qiymət
                </label>
            </div>
            @error('discount')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="description" id="description" placeholder="Açıqlama"
                       maxlength="255"/>
                <label for="description" class="form-label text-white-50">
                    Açıqlama
                </label>
            </div>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="text" class="form-label text-white-50">
                    Məzmun
                </label>
                <textarea class="form-control" name="text" id="text" placeholder="Məzmun"></textarea>
            </div>
            @error('text')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="categories" class="form-label text-white-50">
                    Kateqoriya
                </label>
                <select class="select2 w-100" name="categories[]" id="categories" multiple>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tags" class="form-label text-white-50">
                    Teqlər
                </label>
                <select class="select2 select2 w-100" name="tags[]" id="tags" multiple>
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">
                            {{ $tag->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="ages" class="form-label text-white-50">
                    Yaş qrupları
                </label>
                <select class="select2 select2 w-100" name="ages[]" id="ages" multiple>
                    @foreach($ages as $age)
                        <option value="{{ $age->id }}">
                            {{ $age->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label text-white-50">
                    Şəkil
                </label>
                <input type="file" name="image" id="image" class="dropify" accept="image/jpeg,
                image/png, image/jpg, image/gif, image/svg" data-show-remove="false"/>
            </div>
            @error('image')
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
    <script src="{{ asset('back/node_modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset("back/node_modules/dropify/dist/js/dropify.min.js") }}"></script>
    <script>
        $(".select2").select2();
        const about = CKEDITOR.replace('text', {
            extraAllowedContent: 'div',
            height: 150,
            filebrowserImageBrowseUrl: '/admin/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/admin/laravel-filemanager/upload?type=Images&_token={{ csrf_token() }}',
            filebrowserBrowseUrl: '/admin/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/admin/laravel-filemanager/upload?type=Files&_token={{ csrf_token() }}',
            filebrowserUploadMethod: 'form'
        });
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
@endsection
