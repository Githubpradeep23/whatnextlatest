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
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">

                    <div class="d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                        <h4 class="fw-semibold fs-18 mb-sm-0">{{$Title}}</h4>
                        <a href="{{url('admin/pages?'.$pageId)}}" class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3">
                            <span class="py-sm-1 d-block">
                                <i class="ri-eye-line text-white"></i>
                                <span>{{$PageTitle}}</span>
                            </span>
                        </a>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel" aria-labelledby="preview-tab" tabindex="0">
                            <form method="POST" action="{{url('admin/pages/' . $EditPages->id.'?'.$pageId)}}" role="form" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-8">

                                        <div class="form-group mb-4">
                                            <label class="label">Title</label>
                                            <div class="form-group position-relative">
                                                <input type="text" name="title" value="{{old('title',$EditPages->title)}}" class="form-control text-dark {{ ($errors->any() && $errors->first('title')) ? 'is-invalid' : '' }}" placeholder="Title">
                                                @if($errors->any())
                                                <div class="text-danger">{{$errors->first('title',':message')}}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group mb-0">
                                            <label class="label">Short Description</label>
                                            <div class="form-group position-relative">
                                                <textarea name="short_description" id="editor" class="form-control text-dark" placeholder="Short Description" cols="30" rows="10">{{old('short_description',$EditPages->short_description)}}</textarea>
                                                @if($errors->any())
                                                <div class="text-danger">{{$errors->first('short_description',':message')}}</div>
                                                @endif
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-lg-4">

                                        <div class="form-group mb-4">
                                            <label class="label">Image</label>
                                            <img src="{{asset('pages/'.$EditPages->image)}}" alt="" style="width: 50px; height:50px;">
                                            <div class="form-group position-relative">
                                                <input type="file" name="image" data-default-file="{{asset('pages/'.$EditPages->image)}}" id="image" class="dropify" data-height="100" data-max-file-size="3M" data-allowed-file-extensions='["jpg", "png","jpeg"]' />
                                                <input type="hidden" name="old_image" value="{{old('name',$EditPages->image)}}">
                                                @if($errors->any())
                                                <div class="text-danger">{{$errors->first('image',':message')}}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label class="label">Order By</label>
                                            <div class="form-group position-relative">
                                                <input type="number" name="order_by" value="{{old('order_by',$EditPages->order_by)}}" class="form-control text-dark" placeholder="Order By">
                                                @if($errors->any())
                                                <div class="text-danger">{{$errors->first('order_by',':message')}}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- <div class="col-sm-6">
                                                <div class="form-group mb-4">
                                                    <label class="label">Section</label>
                                                    <div class="form-group position-relative">
                                                        <select name="page" class="form-control text-dark">
                                                            <option value="1" {{ old('page', $EditPages->page) == '1' ? 'selected' : '' }}>About Us</option>
                                                            <option value="2" {{ old('page', $EditPages->page) == '2' ? 'selected' : '' }}>Clients We Cater</option>
                                                        </select>
                                                        @if($errors->any())
                                                        <div class="text-danger">{{ $errors->first('page', ':message') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="col-sm-12">
                                                <div class="form-group mb-4">
                                                    <label class="label">Section</label>
                                                    <div class="form-group position-relative">
                                                        <select name="type" class="form-control text-dark">
                                                            <option value="1" {{ old('type', $EditPages->type) == '1' ? 'selected' : '' }}>Section 1</option>
                                                            <option value="2" {{ old('type', $EditPages->type) == '2' ? 'selected' : '' }}>Section 2</option>
                                                            <option value="3" {{ old('type', $EditPages->type) == '3' ? 'selected' : '' }}>Section 3</option>
                                                            <option value="4" {{ old('type', $EditPages->type) == '4' ? 'selected' : '' }}>Section 4</option>
                                                            <option value="5" {{ old('type', $EditPages->type) == '5' ? 'selected' : '' }}>Section 5</option>
                                                            <option value="6" {{ old('type', $EditPages->type) == '6' ? 'selected' : '' }}>Section 6</option>
                                                            <option value="7" {{ old('type', $EditPages->type) == '7' ? 'selected' : '' }}>Section 7</option>
                                                            <option value="8" {{ old('type', $EditPages->type) == '8' ? 'selected' : '' }}>Section 8</option>
                                                            <option value="9" {{ old('type', $EditPages->type) == '9' ? 'selected' : '' }}>Section 9</option>
                                                            <option value="10" {{ old('type', $EditPages->type) == '10' ? 'selected' : '' }}>Section 10</option>
                                                            <option value="11" {{ old('type', $EditPages->type) == '11' ? 'selected' : '' }}>Section 11</option>
                                                            <option value="12" {{ old('type', $EditPages->type) == '12' ? 'selected' : '' }}>Counter Section 12</option>
                                                        </select>
                                                        @if($errors->any())
                                                        <div class="text-danger">{{ $errors->first('type', ':message') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label class="label">Image Title</label>
                                            <div class="form-group position-relative">
                                                <input type="text" name="img_title" value="{{old('img_title',$EditPages->img_title)}}" class="form-control text-dark" placeholder="Image Title">
                                                @if($errors->any())
                                                <div class="text-danger">{{$errors->first('img_title',':message')}}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label class="label">Image Alt</label>
                                            <div class="form-group position-relative">
                                                <input type="text" name="img_alt" value="{{old('img_alt',$EditPages->img_alt)}}" class="form-control text-dark" placeholder="Image Alt">
                                                @if($errors->any())
                                                <div class="text-danger">{{$errors->first('img_alt',':message')}}</div>
                                                @endif
                                            </div>
                                        </div>

                                    </div>

                                    <!-- start service detiled content -->

                                    <div class="col-lg-12 mt-5">
                                        <h3>Section Inner Content</h3>
                                        <div id="multiple-entries">
                                            @foreach($EditPages->entries as $i => $entry)
                                            <div class="entry-row row mb-4" style="border: 1px solid #007bff; padding: 10px; border-radius: 5px; background-color: #e9ecef;">
                                                <input type="hidden" name="entries[{{$i}}][id]" value="{{ $entry->id }}">
                                                <div class="col-md-4">
                                                    <div class="form-group mb-2">
                                                        <label class="label">Title</label>
                                                        <input type="text" name="entries[{{$i}}][title]" value="{{ old('entries.'.$i.'.title', $entry->title) }}" class="form-control text-dark" placeholder="Title">
                                                        @if($errors->any())
                                                        <div class="text-danger">{{ $errors->first('entries.'.$i.'.title', ':message') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group mb-2">
                                                        <label class="label">Image</label>
                                                        @if($entry->image)
                                                        <img src="{{ asset('pages/' . $entry->image) }}" alt="Image" style="width: 50px; height: 50px;">
                                                        @endif
                                                        <input type="file" name="entries[{{$i}}][image]" class="form-control-file">
                                                        @if($errors->any())
                                                        <div class="text-danger">{{ $errors->first('entries.'.$i.'.image', ':message') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-2">
                                                        <label class="label">Text</label>
                                                        <textarea name="entries[{{$i}}][description]" class="form-control text-dark" placeholder="Description" rows="3">{{ old('entries.'.$i.'.description', $entry->description) }}</textarea>
                                                        @if($errors->any())
                                                        <div class="text-danger">{{ $errors->first('entries.'.$i.'.description', ':message') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Add new empty entries for additional fields -->
                                    @for ($i = $EditPages->entries->count(); $i < 10; $i++) <div class="entry-row row mb-4" style="border: 1px solid #007bff; padding: 10px; border-radius: 5px; background-color: #e9ecef;">
                                        <div class="col-md-4">
                                            <div class="form-group mb-2">
                                                <label class="label">Title</label>
                                                <input type="text" name="entries[{{$i}}][title]" value="{{ old('entries.'.$i.'.title') }}" class="form-control text-dark" placeholder="Title">
                                                @if($errors->any())
                                                <div class="text-danger">{{ $errors->first('entries.'.$i.'.title', ':message') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-2">
                                                <label class="label">Image</label>
                                                <input type="file" name="entries[{{$i}}][image]" class="form-control-file">
                                                @if($errors->any())
                                                <div class="text-danger">{{ $errors->first('entries.'.$i.'.image', ':message') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-2">
                                                <label class="label">Text</label>
                                                <textarea name="entries[{{$i}}][description]" class="form-control text-dark" placeholder="Description" rows="3">{{ old('entries.'.$i.'.description') }}</textarea>
                                                @if($errors->any())
                                                <div class="text-danger">{{ $errors->first('entries.'.$i.'.description', ':message') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                </div>
                                @endfor
                                <!-- End service detailed content -->

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