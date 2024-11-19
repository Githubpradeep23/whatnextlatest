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
                        <h4 class="fw-semibold fs-18 mb-sm-0">Edit Banner</h4>
                        <a href="{{url('admin/banner')}}" class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3">
                            <span class="py-sm-1 d-block">
                                <i class="ri-eye-line text-white"></i>
                                <span>Banner List</span>
                            </span>
                        </a>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel" aria-labelledby="preview-tab" tabindex="0">
                            <form method="POST" action="{{url('admin/banner/' . $EditBanner->id)}}" role="form" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-8">

                                        <div class="form-group mb-4">
                                            <label class="label">Title</label>
                                            <div class="form-group position-relative">
                                                <input type="text" name="title" value="{{old('title',$EditBanner->title)}}" class="form-control text-dark {{ ($errors->any() && $errors->first('title')) ? 'is-invalid' : '' }}" placeholder="Title">
                                                @if($errors->any())
                                                <div class="text-danger">{{$errors->first('title',':message')}}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group mb-0">
                                            <label class="label">Short Description</label>
                                            <div class="form-group position-relative">
                                                <textarea name="short_description" id="editor" class="form-control text-dark" placeholder="Short Description" cols="30" rows="10">{{old('short_description',$EditBanner->short_description)}}</textarea>
                                                @if($errors->any())
                                                <div class="text-danger">{{$errors->first('short_description',':message')}}</div>
                                                @endif
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-lg-4">

                                        <div class="form-group mb-4">
                                            <label class="label">Image</label>
                                            <img src="{{asset('banner/'.$EditBanner->image)}}" alt="" style="width: 50px; height:50px;">
                                            <div class="form-group position-relative">
                                                <input type="file" name="image" data-default-file="{{asset('banner/'.$EditBanner->image)}}" id="image" class="dropify" data-height="100" data-max-file-size="3M" data-allowed-file-extensions='["jpg", "png","jpeg"]' />
                                                <input type="hidden" name="old_image" value="{{old('name',$EditBanner->image)}}">
                                                @if($errors->any())
                                                <div class="text-danger">{{$errors->first('image',':message')}}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label class="label">Order By</label>
                                            <div class="form-group position-relative">
                                                <input type="number" name="order_by" value="{{old('order_by',$EditBanner->order_by)}}" class="form-control text-dark" placeholder="Order By">
                                                @if($errors->any())
                                                <div class="text-danger">{{$errors->first('order_by',':message')}}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label class="label">Image Title</label>
                                            <div class="form-group position-relative">
                                                <input type="text" name="img_title" value="{{old('img_title',$EditBanner->img_title)}}" class="form-control text-dark" placeholder="Image Title">
                                                @if($errors->any())
                                                <div class="text-danger">{{$errors->first('img_title',':message')}}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label class="label">Image Alt</label>
                                            <div class="form-group position-relative">
                                                <input type="text" name="img_alt" value="{{old('img_alt',$EditBanner->img_alt)}}" class="form-control text-dark" placeholder="Image Alt">
                                                @if($errors->any())
                                                <div class="text-danger">{{$errors->first('img_alt',':message')}}</div>
                                                @endif
                                            </div>
                                        </div>

                                    </div>

                                    <div class="d-flex gap-2 mt-4">
                                        <button type="submit" class="btn btn-primary bg-primary bg-opacity-10 text-primary border-0 fw-semibold py-2 px-4">Update</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.content-wrapper -->

@endsection