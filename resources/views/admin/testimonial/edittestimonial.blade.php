@extends('layouts.admin')
@section('title',$Title)
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
                                        <h1><a href="{{url('admin/testimonial')}}" class="btn btn-primary float-left">View Testimonial</a></h1>
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

                        <form method="POST" action="{{url('admin/testimonial/' . $EditTestimonial->id)}}" role="form" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row">

                                <div class="col-sm-8  border-right">

                                    <div class="form-group">
                                        <label for="inputName">Title</label>
                                        <input type="text" name="title" id="title" class="form-control {{ ($errors->any() && $errors->first('title')) ? 'is-invalid' : '' }}" placeholder="Please Input Title Here" value="{{old('title',$EditTestimonial->title)}}">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('title',':message')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Image Title</label>
                                        <input type="text" name="img_title" id="img_title" class="form-control " placeholder="Please input Image Title" value="{{old('img_title',$EditTestimonial->img_title)}}">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('img_title',':message')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Image Alt</label>
                                        <input type="text" name="img_alt" id="img_alt" class="form-control " placeholder="Please input Image Alt" value="{{old('img_alt',$EditTestimonial->img_alt)}}">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('img_alt',':message')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Description</label>
                                        <textarea class="textarea" name="description" id="description" placeholder="Place Content Here" rows="5" cols="5">{{$EditTestimonial->description}}</textarea>
                                    </div>

                                </div>


                                <div class="col-sm-4">

                                    <div class="form-group">
                                        <label for="inputName">Image</label>
                                        <input type="file" name="image" data-default-file="{{asset('testimonial/'.$EditTestimonial->image)}}" id="image" class="dropify" data-height="100" data-max-file-size="3M" data-allowed-file-extensions='["jpg", "png","jpeg"]' />
                                        <input type="hidden" name="old_image" value="{{old('name',$EditTestimonial->image)}}">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('image',':message')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Type</label>
                                        <select name="type" class="form-control {{ ($errors->any() && $errors->first('type')) ? 'is-invalid' : '' }}">
                                            <option value="">Select</option>
                                            <option value="1" {{ $EditTestimonial->type == '1' ? 'selected' : '' }}>Success Stories</option>
                                            <option value="2" {{ $EditTestimonial->type == '2' ? 'selected' : '' }}>Happy Students</option>
                                        </select>
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('type',':message')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Order By</label>
                                        <input type="text" name="order_by" id="order_by" class="form-control " placeholder="Please input Order" value="{{old('order_by',$EditTestimonial->order_by)}}">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('order_by',':message')}}</div>
                                        @endif
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="col-sm-12">

                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" value="Update" class="btn btn-primary float-left">
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