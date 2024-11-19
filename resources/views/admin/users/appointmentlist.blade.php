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
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $number = ($appointmentList->currentpage()-1)* $appointmentList->perpage() + 1;@endphp

                                    @forelse($appointmentList as $key => $list)

                                    <tr class="text-center">
                                        <th scope="row">{{ $number }}</th>
                                        <td>{{ ucfirst($list->name) }}</td>
                                        <td>{{ $list->email }}</td>
                                        <td>{{ $list->mobile }}</td>
                                        <td>{{ $list->message }}</td>
                                        <td>{{ $list->created_at }}</td>
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
                            <span class="fs-14">Showing {{ $appointmentList->firstItem() }} To {{ $appointmentList->lastItem() }} Of {{$appointmentList->total()}} Entries</span>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination mb-0 mt-3 mt-sm-0 justify-content-center">
                                    {{ $appointmentList->links() }}
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