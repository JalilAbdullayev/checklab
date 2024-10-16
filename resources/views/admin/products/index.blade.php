@php use Illuminate\Support\Facades\Route; @endphp
@extends('admin.layouts.master')
@section('title')
    Məhsullar @if(!Route::is('admin.products.index'))
        | {{ $title }}
    @endif
@endsection
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
                    <li class="breadcrumb-item active">
                        @yield('title')
                    </li>
                </ol>
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary d-none d-lg-block m-l-15 text-white">
                    <i class="ti-plus"></i> Yeni Məhsul
                </a>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="table-responsive">
        <table id="myTable" class="table table-striped border">
            <thead>
            <tr>
                <th>
                    Ad
                </th>
                <th>
                    Şəkil
                </th>
                <th>
                    Kateqoriyalar
                </th>
                <th>
                    Teqlər
                </th>
                <th>
                    Yaş Qrupları
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
                        <img class="w-25" src="{{ asset(Storage::url($item->image)) }}" alt=""/>
                    </td>
                    <td>
                        @foreach($item->categories as $category)
                            <a href="{{ route('admin.products.category.all', $category->slug) }}" class="text-body
                           @if(count($item->categories->all()) > 1) px-1 @endif">
                                {{ $category->title }}
                            </a>
                        @endforeach
                    </td>
                    <td>
                        @foreach($item->tags as $tag)
                            <a href="{{ route('admin.products.tag.all', $tag->slug) }}" class="text-body
                            @if(count($item->tags->all()) > 1) px-1 @endif">
                                {{ $tag->title }}
                            </a>
                        @endforeach
                    </td>
                    <td>
                        @foreach($item->ages as $age)
                            <a href="{{ route('admin.products.age-groups.all', $age->slug) }}" class="text-body
                            @if(count($item->ages->all()) > 1) px-1 @endif">
                                {{ $age->title }}
                            </a>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('admin.products.edit', $item->id) }}" class="btn btn-outline-warning">
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
                url: '{{ route('admin.products.delete', ':id') }}'.replace(':id', id),
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
