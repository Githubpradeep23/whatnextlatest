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
                                        <h1><a href="{{url('admin/menus/create')}}" class="btn btn-primary float-left">Add New Menus</a>
                                        </h1>
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

                        <form method="get" action="{{url('admin/search/menu/list')}}" role="form" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row">

                                <div class="col-sm-4 border-right">
                                    <div class="form-group">
                                        <label for="inputName">Title</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-sm-2 border-right">
                                    <div class="form-group">
                                        <label for="inputName">Menu Type</label>
                                        <select name="menu_type" id="menu_type" class="form-control">
                                            <option value="">Select</option>
                                            <option value="1">Main Menu</option>
                                            <option value="2">Sub Menu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2 border-right">
                                    <div class="form-group">
                                        <label for="inputName">Pages</label>
                                        <select name="page_id" id="page_id" class="form-control">
                                            <option value="">Select Page</option>

                                            @forelse($PageList as $list)
                                            <option value="{{$list->id}}">{{$list->title}}
                                            </option>
                                            @empty
                                            <option value="">No data found</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-4" style="padding-top: 6px;">
                                    <input type="submit" value="Search" class="btn btn-primary">
                                </div>

                            </div>
                        </form>
                        <table id="example1" class="table table-bordered table-striped my-4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Parent Menu</th>
                                    <th>Url</th>
                                    <th>Pages</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @php $number = ($MenuList->currentpage()-1)* $MenuList->perpage() + 1;@endphp

                                @forelse($MenuList as $key => $list)
                                <tr>
                                    <th scope="row">{{ $number }}</th>
                                    <td>{{$list->name}}</td>
                                    <td>@if(!empty($list->parentname->name)) {{$list->parentname->name}} @endif</td>
                                    <td>{{$list->url}}</td>
                                    <td>@if(!empty($list->pagename->title)) {{$list->pagename->title}} @endif</td>
                                    <td>{{$list->created_at}}</td>
                                    <td>
                                        <div class="switch switch-success d-inline m-r-10">
                                            <input id="switch-s-{{$list->id}}" type="checkbox" class="MenusStatus btn btn-success" name="" rel="{{$list->id}}" data-toggle="toggle" data-on="Enable" data-of="Disable" data-onstyle="success" data-offstyle="danger" @if($list->status=="0")
                                            checked @endif>
                                            <label for="switch-s-{{$list->id}}" class="cr"></label>
                                        </div>
                                    </td>

                                    <td class="dinline">
                                        <a href="{{ url('admin/menus/' . $list->id ) }}" class=""><i class="fa fa-eye"></i></a>
                                        &nbsp;
                                        &nbsp;
                                        <a href="{{ url('admin/menus/' . $list->id . '/edit') }}" class=""><i class="fa fa-edit"></i></a>

                                        <form method="POST" action="{{ url('admin/menus/' . $list->id) }}" role="form" enctype="multipart/form-data" class="form-horizontal">
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
                                    <th>Name</th>
                                    <th>Parent Menu</th>
                                    <th>Url</th>
                                    <th>Pages</th>
                                    <th>created_at</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>

                        <div class="row">

                            <div class="col-sm-6">
                                Showing {{ $MenuList->firstItem() }} to {{ $MenuList->lastItem() }}
                                of total {{$MenuList->total()}} entries
                            </div>

                            <div class="col-sm-6">
                                {{ $MenuList->links() }}
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