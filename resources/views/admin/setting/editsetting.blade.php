@extends('layouts.admin')
@section('title',$Title)
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
        <div class="col-xxl-9">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">

                    <div class="border-bottom pb-3 mb-3">
                        <h4 class="fs-18 fw-semibold mb-1">Site Settings</h4>
                        <p class="fs-15">Update your title meta description meta keyword and logos details here.</p>
                    </div>

                    <form method="POST" action="{{url('admin/settings/' . $EditSettings->id)}}" role="form" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Site Title</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="title" value="{{old('title',$EditSettings->title)}}" class="form-control text-dark" placeholder="Site Title">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Meta Keyword</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="keywords" value="{{old('keywords',$EditSettings->keywords)}}" class="form-control text-dark" placeholder="Meta Keyword">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Meta Description</label>
                                    <div class="form-group position-relative">
                                        <textarea name="description" class="form-control text-dark" placeholder="Meta Description" cols="30" rows="5">{{($EditSettings->description)}}</textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="border-bottom pb-3 mb-3 mt-5">
                            <h4 class="fs-18 fw-semibold mb-1">Top Header Settings</h4>
                            <p class="fs-15">Fill all Information as below</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">Logo</label>
                                    <div class="form-group position-relative">
                                        <img src="{{asset('logo/'.$EditSettings->logo)}}" alt="" style="width: 50px; height:50px;">
                                        <input type="file" name="logo" data-default-file="{{asset('logo/'.$EditSettings->logo)}}" id="logo" class="dropify" data-height="50" data-max-file-size="3M" data-allowed-file-extensions='["jpg", "png","jpeg"]' />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">Fav Icon</label>
                                    <div class="form-group position-relative">
                                        <img src="{{asset('favicon/'.$EditSettings->favicon)}}" alt="" style="width: 50px; height:50px;">
                                        <input type="file" name="favicon" data-default-file="{{asset('favicon/'.$EditSettings->favicon)}}" id="favicon" class="dropify" data-height="50" data-max-file-size="3M" data-allowed-file-extensions='["jpg", "png","jpeg"]' />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">Top Email</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="top_email" id="top_email" class="form-control text-dark" value="{{old('top_email',$EditSettings->top_email)}}" placeholder="Top Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">Top Mobile</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="top_mobile" id="top_mobile" class="form-control text-dark" value="{{old('top_mobile',$EditSettings->top_mobile)}}" placeholder="Top Mobile">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">Top Address</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="top_address" id="top_address" class="form-control text-dark" value="{{old('top_address',$EditSettings->top_address)}}" placeholder="Top Address">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group d-flex gap-3">
                                    <button class="btn btn-primary py-3 px-5 fw-semibold text-white">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.content-wrapper -->

@endsection