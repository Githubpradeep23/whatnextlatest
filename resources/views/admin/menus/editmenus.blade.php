@extends('layouts.admin')
@section('title',$Title)
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <section class="content-header">
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h1><a href="{{url('admin/menus')}}" class="btn btn-primary float-left">View Menus</a></h1>
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

                        <form method="POST" action="{{url('admin/menus/' . $EditMenus->id)}}" role="form" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row">

                                <div class="col-sm-12">

                                    <div class="form-group">

                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="layout_type" class="custom-control-input MainMenu" checked="checked" value="0" {{ ($EditMenus->layout_type == '0') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="customRadioInline1">Top
                                                Menu</label>
                                        </div>

                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline2" name="layout_type" class="custom-control-input MainMenu" value="1" {{ ($EditMenus->layout_type == '1') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="customRadioInline2">Footer
                                                Menu</label>
                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline3" name="menu_type" class="custom-control-input MainMenu" value="1" {{ ($EditMenus->menu_type == '1') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="customRadioInline3">Main
                                                Menu</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline4" name="menu_type" class="custom-control-input MainMenu" value="2" {{ ($EditMenus->menu_type == '2') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="customRadioInline4">Sub
                                                Menu</label>
                                        </div>

                                    </div>

                                    <div class="form-group hideParent">
                                        <label for="testimonial">Parent Menu</label>
                                        <select class="form-control {{ ($errors->any() && $errors->first('parent_id')) ? 'is-invalid' : '' }} " name="parent_id">
                                            <option value="">Parent Menu</option>

                                            @forelse($MenuList as $list)
                                            <option value="{{$list->id}}" {{ ($EditMenus->parent_id == $list->id)  ? 'selected' : '' }}>
                                                {{$list->name}}
                                            </option>
                                            @empty
                                            <option value="">No data found</option>
                                            @endforelse
                                        </select>

                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('parent_id',':message')}}
                                        </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Menu Title</label>
                                        <input type="text" name="name" id="name" class="form-control {{ ($errors->any() && $errors->first('name')) ? 'is-invalid' : '' }}" placeholder="Please input name here" value="{{old('name',$EditMenus->name)}}">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('name',':message')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Order By</label>
                                        <input type="text" name="order_by" id="order_by" class="form-control {{ ($errors->any() && $errors->first('order_by')) ? 'is-invalid' : '' }}" placeholder="Please input order by here" value="{{old('order_by',$EditMenus->order_by)}}">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('order_by',':message')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="testimonial">Target Type</label>
                                        <select class="form-control {{ ($errors->any() && $errors->first('type')) ? 'is-invalid' : '' }} " name="type">

                                            <option value="1" {{ ($EditMenus->type == 1)  ? 'selected' : '' }}> Same
                                                Page</option>
                                            <option value="2" {{ ($EditMenus->type == 2)  ? 'selected' : '' }}> Next
                                                Page</option>

                                        </select>

                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('type',':message')}}
                                        </div>
                                        @endif
                                    </div>


                                    <div class="form-group hidePage">
                                        <label for="testimonial">Page</label>
                                        <select class="PageSel form-control {{ ($errors->any() && $errors->first('page_id')) ? 'is-invalid' : '' }} " name="page_id">
                                            <option value="">Select Page</option>

                                            @forelse($PageList as $list)
                                            <option value="{{$list->id}}" {{ ($EditMenus->page_id == $list->id)  ? 'selected' : '' }}>
                                                {{$list->title}}
                                            </option>
                                            @empty
                                            <option value="">No data found</option>
                                            @endforelse
                                        </select>

                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('page_id',':message')}}
                                        </div>
                                        @endif
                                    </div>

                                    <fieldset class="fieldsetsty hideurl hidePage">
                                        <legend class="text-center"><b>OR</b></legend>
                                    </fieldset>

                                    <div class="form-group hideurl">
                                        <label for="inputName">URL</label>
                                        <input type="text" name="url" id="url" class="urlhide form-control {{ ($errors->any() && $errors->first('url')) ? 'is-invalid' : '' }}" placeholder="Please input url here" value="{{old('url',$EditMenus->url)}}">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('url',':message')}}</div>
                                        @endif
                                    </div>


                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="row">
                                <div class="col-12">
                                    <input type="submit" value="Update Menu" class="btn btn-primary float-left">
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