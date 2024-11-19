@extends('layouts.admin')
@section('title',$Title)
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
                                        <!-- <h1><a href="{{url('admin/locations/create')}}" class="btn btn-primary float-left">Add New
                                                locations</a>
                                        </h1> -->
                                    </div>
                                    <div class="col-sm-6">
                                        <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item active">{{$Title}}</li>
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

                        <div class="row">

                            <div class="col-sm-6 border-right">
                                <form method="post" action="{{url('admin/locations/'.$editLocation->id)}}" role="form" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">

                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="inputName">Title</label>
                                                <input type="text" value="{{old('title',$editLocation->title)}}" name="title" id="title" class="form-control {{ ($errors->any() && $errors->first('title')) ? 'is-invalid' : '' }}" placeholder="Please Input Title Here">
                                                @if($errors->any())
                                                <div class="text-danger">{{$errors->first('title',':message')}}</div>
                                                @endif
                                            </div>
                                            @if($errors->any())
                                            <div class="text-danger">{{$errors->first('title',':message')}}</div>
                                            @endif
                                        </div>

                                        <div class="col-sm-2 my-4" style="padding-top: 6px;">
                                            <input type="submit" value="Update" class="btn btn-primary">
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>

                        <table id="" class="table table-bordered table-striped my-4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @php $number = ($locationsList->currentpage()-1)* $locationsList->perpage() + 1;@endphp

                                @forelse($locationsList as $key => $list)
                                <tr>
                                    <th scope="row">{{ $number }}</th>
                                    <td>{{ucfirst($list->title)}}</td>
                                    <td>{{$list->created_at}}</td>
                                    <!-- <td>
                                        <div class="switch switch-success d-inline m-r-10">
                                            <input id="switch-s-{{$list->id}}" type="checkbox" class="locationsStatus btn btn-success" name="" rel="{{$list->id}}" data-toggle="toggle" data-on="Enable" data-of="Disable" data-onstyle="success" data-offstyle="danger" @if($list->status=="0")
                                            checked @endif>
                                            <label for="switch-s-{{$list->id}}" class="cr"></label>
                                        </div>
                                    </td> -->
                                    <td class="dinline">
                                        <a href="{{ url('admin/locations/' . $list->id . '/edit') }}" class=""><i class="fas fa-edit"></i></a>

                                        <form method="POST" action="{{ url('admin/locations/' . $list->id) }}" role="form" enctype="multipart/form-data" class="form-horizontal">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="delbtnstyle" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
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
                                    <th>Title</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>

                        <div class="row">

                            <div class="col-sm-6">
                                Showing {{ $locationsList->firstItem() }} to {{ $locationsList->lastItem() }}
                                of total {{$locationsList->total()}} entries
                            </div>

                            <div class="col-sm-6">
                                {{ $locationsList->links() }}
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