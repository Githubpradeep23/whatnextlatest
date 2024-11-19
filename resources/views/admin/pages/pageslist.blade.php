@extends('layouts.admin')
@section('title', $Title )
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
                        <h4 class="fw-semibold fs-18 mb-sm-0">{{$Title}}</h4>
                        <a href="{{url('admin/pages/create?'.$pageId)}}" class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3">
                            <span class="py-sm-1 d-block">
                                <i class="ri-add-line text-white"></i>
                                <span>Create New {{$PageTitle}}</span>
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

                    <div class="default-table-area recent-orders">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Page</th>
                                        <th scope="col">Section</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Img title</th>
                                        <th scope="col">Img Alt</th>
                                        <th scope="col">Order By</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $number = 1;@endphp

                                    @forelse($pagesList as $key => $list)

                                    <tr class="text-center">
                                        <th scope="row">{{ $number }}</th>
                                        <td>{{ substr(strip_tags($list->title), 0, 40) }}...</td>
                                        <td>@if(!empty($list->page) && $list->page == '1') {{ __('About Us')}} @else {{ __('Clients We Cater')}} @endif</td>
                                        <td> Section-{{ $list->type }}</td>
                                        <td>@if(!empty($list->image))<img src="{{asset('pages/'.$list->image)}}" alt="" style="width: 50px; height:50px;">@else <img src="{{asset('assets/backend/admin/empty.png')}}" alt="" style="width: 50px; height:50px;"> @endif</td>
                                        <td>{{ substr(strip_tags($list->img_title), 0, 30) }}...</td>
                                        <td>{{ substr(strip_tags($list->img_alt), 0, 30) }}...</td>
                                        <td>{{ $list->order_by }}</td>
                                        <td>{{ substr(strip_tags($list->short_description), 0, 30) }}.....</td>

                                        <td>
                                            <div class="dropdown action-opt">
                                                <button class="btn bg p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i data-feather="more-horizontal"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ url('admin/pages/details/' . $list->id .'?'.$pageId) }}">
                                                            <i data-feather="eye"></i>
                                                            Detail
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ url('admin/pages/' . $list->id . '/edit?'.$pageId) }}">
                                                            <i data-feather="edit-3"></i>
                                                            Edit
                                                        </a>
                                                    </li>
                                                    <li>

                                                        <form method="POST" action="{{ url('admin/pages/' . $list->id.'?'.$pageId) }}" role="form" enctype="multipart/form-data" class="form-horizontal">
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

                    </div>
                </div>
            </div>


        </div>

    </div>

</div>
<!-- /.content-wrapper -->

@endsection