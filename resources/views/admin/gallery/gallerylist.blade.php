@extends('layouts.admin')
@section('title', $Title)
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content">

    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18"></h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="{{url('admin/dashboard')}}" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">{{$Title}}</span>
            </li>
        </ul>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">


            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                        <h4 class="fw-semibold fs-18 mb-sm-0">Gallery List</h4>
                        <a href="{{url('admin/gallery/create')}}" class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3">
                            <span class="py-sm-1 d-block">
                                <i class="ri-add-line text-white"></i>
                                <span>Create New Gallery</span>
                            </span>
                        </a>
                    </div>

                    <div class="">
                        @if($message = Session::get('errormsg'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if($message = Session::get('msg'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    </div>

                    <div class="default-table-area members-list">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $number = ($galleryList->currentpage()-1)* $galleryList->perpage() + 1;@endphp

                                    @forelse($galleryList as $key => $list)

                                    <tr class="text-center">
                                        <th scope="row">{{ $number }}</th>
                                        <td>@if(!empty($list->image))<a href="{{asset('gallery/'.$list->image)}}" target="_blank"><img src="{{asset('gallery/'.$list->image)}}" alt="" style="width: 50px; height:50px;"></a>@else <img src="{{asset('assets/admin/empty.png')}}" alt="" style="width: 50px; height:50px;"> @endif</td>
                                        <td>{{ $list->title }}</td>
                                        <td>
                                            <div class="dropdown action-opt">
                                                <button class="btn bg p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i data-feather="more-horizontal"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ url('admin/gallery/' . $list->id . '/edit') }}">
                                                            <i data-feather="edit-3"></i>
                                                            Edit
                                                        </a>
                                                    </li>
                                                    <li>

                                                        <form method="POST" action="{{ url('admin/gallery/' . $list->id) }}" role="form" enctype="multipart/form-data" class="form-horizontal">
                                                            @csrf
                                                            @method('delete')

                                                            <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure?')"><i data-feather="trash-2"></i>Delete</button>
                                                        </form>

                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php $number++; ?>
                                    @empty
                                    <tr>
                                        <td colspan="11" class="text-center">No Data Found</td>
                                        @endforelse
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="d-sm-flex justify-content-between align-items-center text-center">
                            <span class="fs-14">Showing {{ $galleryList->firstItem() }} To {{ $galleryList->lastItem() }} Of {{$galleryList->total()}} Entries</span>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination mb-0 mt-3 mt-sm-0 justify-content-center">
                                    {{ $galleryList->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

</div>
<!-- /.content-wrapper -->

@endsection