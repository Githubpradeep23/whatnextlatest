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
                                        <h1><a href="{{url('admin/blog')}}" class="btn btn-primary float-left">View Post</a></h1>
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
                        </div>

                        <form method="POST" action="{{url('admin/blog')}}" role="form" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row">

                                <div class="col-sm-8  border-right">

                                    <div class="form-group">
                                        <label for="inputName">Title</label>
                                        <input type="text" name="title" id="title" class="form-control {{ ($errors->any() && $errors->first('title')) ? 'is-invalid' : '' }}" placeholder="Please Input Title Here" value="{{old('title')}}">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('title',':message')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Short Description</label>
                                        <textarea class="form-control " name="short_description" id="short_description" placeholder="Place Content Here" rows="5" cols="5">{{old('short_description')}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Description</label>
                                        <textarea class="textarea " name="description" id="description" placeholder="Place Content Here" rows="10" cols="10">{{old('description')}}</textarea>
                                    </div>
                                </div>


                                <div class="col-sm-4">

                                    <div class="form-group">
                                        <label for="inputName">Featured Image</label>
                                        <input type="file" name="image" data-default-file="{{asset('assets/backend/admin/empty.png')}}" id="image" class="dropify" data-height="100" data-max-file-size="3M" data-allowed-file-extensions='["jpg", "png","jpeg"]' data-show-loader="true" />

                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('image',':message')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Image Title</label>
                                        <input type="text" name="img_title" id="img_title" class="form-control " placeholder="Please input Image Title" value="{{old('img_title')}}">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('img_title',':message')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Image Alt</label>
                                        <input type="text" name="img_alt" id="img_alt" class="form-control " placeholder="Please input Image Alt" value="{{old('img_alt')}}">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('img_alt',':message')}}</div>
                                        @endif
                                    </div>

                                    <!-- <div class="form-group">
                                        <label for="inputName">Url</label>
                                        <input type="text" name="url" id="url" class="form-control "
                                            placeholder="Please input Url" value="{{old('url')}}">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('url',':message')}}</div>
                                        @endif
                                    </div> -->

                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" value="Add New Post" class="btn btn-primary float-left">
                                    </div>
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