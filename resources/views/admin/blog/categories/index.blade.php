@extends('admin.layouts.master')
@section('title', 'Kateqoriyalar')
@section('css')
    <link rel="stylesheet" href="{{asset("back/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css")}}"/>
    <link rel="stylesheet" href="{{asset("back/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css")}}"/>
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
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-3">
            <form class="card" method="POST">
                <div class="card-header">
                    <div class="card-title">
                        Yeni Bloq Kateqoriyası Yarat
                    </div>
                </div>
                @csrf
                <div class="card-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Ad" required
                               maxlength="255"/>
                        <label for="title" class="form-label text-white-50">
                            Ad
                        </label>
                    </div>
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn w-100 btn-primary text-white">
                        Yarat
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-9">
            <div class="table-responsive">
                <table id="myTable" class="table table-striped border">
                    <thead>
                    <tr>
                        <th>
                            Ad
                        </th>
                        <th>
                            Əməliyyatlar
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                        <tr id="{{ $item->id }}">
                            <td>
                                {{ $item->title }}
                            </td>
                            <td>
                                <a href="{{ route('admin.blog.category.edit', $item->id) }}" class="btn
                                btn-outline-warning">
                                    <i class="ti-pencil-alt"></i>
                                </a>
                                <button class="btn btn-outline-danger">
                                    <i class="ti-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset("back/node_modules/datatables.net/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("back/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js")}}"></script>
    <script>
        $('#myTable').DataTable({
            ordering: false
        });
        $('.btn-outline-danger').click(function() {
            let id = $(this).closest('tr').attr('id');
            $.ajax({
                url: '{{ route('admin.blog.category.delete', ':id') }}'.replace(':id', id),
                async: false,
                success: function() {
                    $('tr#' + id + '').remove();
                },
                error: function() {
                    alert('error');
                }
            })
        });
    </script>
@endsection
