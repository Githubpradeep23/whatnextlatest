@extends('layouts.admin')
@section('title', $Title)
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <section class="content-header">
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h1><a href="{{url('admin/appointment/list')}}" class="btn btn-primary float-left">View Appointment</a></h1>
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

                    <div class="card-body">
                        <div class="">
                            @if($message = Session::get('errormsg'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <p>{{ $message }}</p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            @if($errors->any() && $errors->first('duplicate_booking',':message'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <p>{{$errors->first('duplicate_booking',':message')}}</p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
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
                        </div>

                        <form method="POST" action="{{url('admin/appointment/create')}}" role="form" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row">

                                <div class="col-sm-6 border-right">

                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input type="text" value="{{old('name')}}" name="name" id="name" class="form-control {{ ($errors->any() && $errors->first('name')) ? 'is-invalid' : '' }}" placeholder="Please Input name Here">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('name',':message')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Email</label>
                                        <input value="{{old('email')}}" type="text" name="email" id="email" class="form-control {{ ($errors->any() && $errors->first('email')) ? 'is-invalid' : '' }}" placeholder="Please input Image Title">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('email',':message')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Mobile</label>
                                        <input value="{{old('mobile')}}" type="text" name="mobile" id="mobile" class="form-control {{ ($errors->any() && $errors->first('mobile')) ? 'is-invalid' : '' }}" placeholder="Please input Image Alt">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('mobile',':message')}}</div>
                                        @endif
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="inputName">Time Slot</label>
                                                <select class="form-control {{ ($errors->any() && $errors->first('slot_id')) ? 'is-invalid' : '' }}" name="slot_id">
                                                    <option value="">Select Time Slot</option>
                                                    @forelse($slotsList as $list)
                                                    <option value="{{$list->id}}">{{$list->slots}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                                @if($errors->any())
                                                <div class="text-danger">{{$errors->first('slot_id',':message')}}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="inputName">Date</label>
                                                <input value="{{old('date')}}" type="date" name="date" id="date" class="form-control {{ ($errors->any() && $errors->first('date')) ? 'is-invalid' : '' }}" placeholder="Please input Image Alt">
                                                @if($errors->any())
                                                <div class="text-danger">{{$errors->first('date',':message')}}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Message</label>
                                        <textarea class="form-control" name="message" placeholder="Input Message Here">{{old('message')}}</textarea>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <input type="submit" value="Add New Appointment" class="btn btn-primary">
                                </div>
                            </div>
                            <!-- /.card-body -->

                        </form>
                    </div>

                </div>
                <!-- /.card -->

            </div>

        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection