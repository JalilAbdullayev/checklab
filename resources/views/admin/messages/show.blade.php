@extends('admin.layouts.master')
@section('title', 'Mesaj')
@section('css')
	<style>
        textarea {
            height: 10rem !important;
        }
	</style>
@endsection
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
						<a href="{{ route('admin.messages.index') }}">
							Mesajlar
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
	<form class="card">
		<div class="card-body">
			<div class="form-floating mb-3">
				<input type="text" class="form-control" id="name" value="{{ $message->name }}" disabled/>
				<label for="name" class="form-label text-white-50">
					Ad
				</label>
			</div>
			<div class="form-floating mb-3">
				<input type="email" class="form-control" id="email" value="{{ $message->email }}" disabled/>
				<label for="email" class="form-label text-white-50">
					E-mail
				</label>
			</div>
			<div class="form-floating mb-3">
				<input type="text" class="form-control" id="subject" value="{{ $message->subject }}" disabled/>
				<label for="subject" class="form-label text-white-50">
					Mövzu
				</label>
			</div>
			<div class="form-floating mb-3">
				<textarea class="form-control" id="message" placeholder="Message"
						  disabled>{{ $message->message }}</textarea>
				<label for="message" class="form-label text-white-50">
					Mesaj
				</label>
			</div>
			<a href="mailto:{{ $message->email }}" class="btn btn-warning text-white">
                Answer
            </a>
        </div>
    </form>
@endsection
