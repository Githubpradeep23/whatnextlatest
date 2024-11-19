@extends('layouts.admin')
@section('title', $Title )
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <section class="content-header">
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h1><a href="{{url('admin/testimonial/create')}}" class="btn btn-primary float-left">Add New Testimonial</a></h1>
                                    </div>
                                    <div class="col-sm-6">
                                        <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item active">@if(!empty($Title)) {{$Title}} @endif</li>
                                        </ol>
                                    </div>
                                </div>
                            </div><!-- /.container-fluid -->
                        </section>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body tblscrollbar">

                        <div class="">
                            @if($message = Session::get('errormsg'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <p>{{ $message }}</p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            @if($message = Session::get('msg'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <p>{{ $message }}</p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <div id="message_error" style="display: none;" class="alert alert-danger">Status Disabled
                            </div>
                            <div id="message_success" style="display: none;" class="alert alert-success">Status Enable
                            </div>
                        </div>

                        <table id="" class="table table-bordered table-striped my-4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Img Title</th>
                                    <th>Img Alt</th>
                                    <th>Description</th>
                                    <!-- <th>Status</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @php $number = ($PlanList->currentpage()-1)* $PlanList->perpage() + 1;@endphp

                                @forelse($PlanList as $key => $list)
                                <tr>
                                    <th scope="row">{{ $number }}</th>
                                    <td>@if(!empty($list->type) && $list->type == '1') {{ __('Success Stories') }} @elseif(!empty($list->type) && $list->type == '2') {{ __('Happy Students') }} @endif</td>
                                    <td>{{ substr(strip_tags($list->title), 0, 40) }}...</td>
                                    <td>@if(!empty($list->image))<img src="{{asset('testimonial/'.$list->image)}}" alt="" style="width: 50px; height:50px;">@else <img src="{{asset('assets/admin/empty.png')}}" alt="" style="width: 50px; height:50px;"> @endif</td>
                                    <td>{{ substr(strip_tags($list->img_title), 0, 30) }}...</td>
                                    <td>{{ substr(strip_tags($list->img_alt), 0, 30) }}...</td>
                                    <td>{{ substr(strip_tags($list->description), 0, 30) }}...</td>
                                    <!-- <td>
                                        <div class="switch switch-success d-inline m-r-10">
                                            <input id="switch-s-{{$list->id}}" type="checkbox" class="testimonialStatus btn btn-success" name="" rel="{{$list->id}}" data-toggle="toggle" data-on="Enable" data-of="Disable" data-onstyle="success" data-offstyle="danger" @if($list->status=="0")
                                            checked @endif>
                                            <label for="switch-s-{{$list->id}}" class="cr"></label>
                                        </div>
                                    </td> -->
                                    <td class="dinline">
                                        <a href="{{ url('admin/testimonial/' . $list->id . '/edit') }}" class=""><i class="fa fa-edit"></i></a>


                                        <form method="POST" action="{{ url('admin/testimonial/' . $list->id) }}" role="form" enctype="multipart/form-data" class="form-horizontal">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="delbtnstyle" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>

                                </tr>
                                <?php $number++; ?>
                                @empty
                                <tr>
                                    <td colspan="11" class="text-center">No Data Found</td>
                                    @endforelse
                                </tr>

                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Img Title</th>
                                    <th>Img Alt</th>
                                    <th>Description</th>
                                    <!-- <th>Status</th> -->
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>

                        <div class="row">

                            <div class="col-sm-6">
                                Showing {{ $PlanList->firstItem() }} to {{ $PlanList->lastItem() }}
                                of total {{$PlanList->total()}} entries
                            </div>

                            <div class="col-sm-6">
                                {{ $PlanList->links() }}
                            </div>

                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection