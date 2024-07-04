@extends('admin.layouts.master')
@section('title', 'Bloq Redaktəsi')
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
						<a href="{{ route('admin.blog.index') }}">
							Bloq
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
					   maxlength="255" value="{{ $blog->title }}" autofocus/>
				<label for="title" class="form-label text-white-50">
					Başlıq
				</label>
			</div>
			@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
			@enderror
			<div class="form-floating mb-3">
				<input type="text" class="form-control" name="description" id="description" placeholder="Açıqlama"
					   required maxlength="255" value="{{ $blog->description }}"/>
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
				<textarea class="form-control" name="text" id="text" required
						  placeholder="Məzmun">{!! $blog->text !!}</textarea>
			</div>
			@error('text')
			<div class="alert alert-danger">{{ $message }}</div>
			@enderror
			<div class="mb-3">
				<label for="text" class="form-label text-white-50">
					Kateqoriya
				</label>
				<select class="select2 w-100" name="category_id" id="category_id" required>
					@foreach($categories as $category)
						<option value="{{ $category->id }}" @if($blog->category_id == $category->id) selected @endif>
							{{ $category->title }}
						</option>
					@endforeach
				</select>
			</div>
			<div class="mb-3">
				<label for="text" class="form-label text-white-50">
					Teqlər
				</label>
				<select class="select2 select2 w-100" name="tags[]" id="tags" multiple required>
					@foreach($tags as $tag)
						<option value="{{ $tag->id }}"
								@if($blog->tags->pluck('id')->contains($tag->id)) selected @endif>
							{{ $tag->title }}
						</option>
					@endforeach
				</select>
			</div>
			@error('tags')
			<div class="alert alert-danger">{{ $message }}</div>
			@enderror
			<div class="mb-3">
				<label for="image" class="form-label text-white-50">
					Şəkil
				</label>
				<input type="file" name="image" id="image" class="dropify" data-show-remove="false"
					   accept="image/jpeg, image/png, image/jpg, image/gif, image/svg"
					   @if($blog->image) data-default-file="{{ Storage::url($blog->image) }}" @endif/>
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
            filebrowserImageUploadUrl: '/admin/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/admin/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/admin/laravel-filemanager/upload?type=Files&_token='
        });
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
@endsection
