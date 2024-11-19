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
                                        <h1><a href="{{url('admin/document')}}" class="btn btn-primary float-left">View Document</a></h1>
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

                        <form method="POST" action="{{url('admin/document')}}" role="form" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row">

                                <div class="col-sm-6 border-right">

                                    <div class="form-group">
                                        <label for="inputName">Title</label>
                                        <input type="text" name="title" id="title" class="form-control {{ ($errors->any() && $errors->first('title')) ? 'is-invalid' : '' }}" placeholder="Please input title here" value="{{old('title')}}">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('title',':message')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Image</label>
                                        <input type="file" name="image" data-default-file="{{asset('assets/backend/admin/empty.png')}}" id="image" class="dropify" data-height="100" data-max-file-size="5M" data-allowed-file-extensions='["jpg", "png","jpeg"]' />
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('image',':message')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Document</label>
                                        <input type="file" name="document_file" data-default-file="{{asset('assets/backend/admin/empty.png')}}" id="document_file" class="dropify" data-height="100" data-max-file-size="10M" data-allowed-file-extensions='["doc","docx","pdf"]' />
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('document_file',':message')}}</div>
                                        @endif
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="col-sm-12">
                                <div class="row">
                                    <input type="submit" value="Add New Document" class="btn btn-primary float-left">
                                </div>
                            </div>
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