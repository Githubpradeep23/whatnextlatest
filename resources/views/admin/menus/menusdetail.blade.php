@extends('layouts.admin')
@section('title', $Title )
@section('content')
<style>
    b {
        font-size: 18px;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content">

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <!-- <h1><a href="{{url('user/application/create')}}" class="btn btn-success float-left">Add New
                            Application</a></h1> -->
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
            <div class="card-body">
                <div class="row">

                    <div class="col-6 col-md-6 col-lg-6 order-2 border-right order-md-1">
                        <!-- Category -->
                        <div class="single category">

                            <ul class="list-unstyled">
                                <li><b> Name :</b> <span class="pull-right">{{$MenuDetail->name}}</span> </li>
                                <hr />
                                <li><b> Parent Menu :</b> <span class="pull-right">@if(!empty($MenuDetail->parentname->name))
                                        {{$MenuDetail->parentname->name}} @endif</span></a></li>
                                <hr />
                                <li><b> Menu Type :</b> <span class="pull-right">@if(!empty($MenuDetail->menu_type ==
                                        '1'))
                                        {{ __('Main Menu') }}
                                        @elseif(!empty($MenuDetail->menu_type == '2')) {{ __('Sub Menu') }} @else
                                        {{ _('Footer Menu') }} @endif</span></a></li>
                                <hr />

                                <li><b> Layout Type :</b> <span class="pull-right">@if(!empty($MenuDetail->layout_type ==
                                        '0'))
                                        {{ __('Top Menu') }}
                                        @elseif(!empty($MenuDetail->layout_type == '1')) {{ __('Footer Menu') }}  @endif</span></a></li>
                                <hr />

                                <li> <b> Order By : </b> <span class="pull-right">{{$MenuDetail->order_by}}</span></li>
                                <hr />
                                <li><b> Url : </b> <span class="pull-right">{{$MenuDetail->url}}</span> </li>
                                <hr />
                                <li> <b> Target Type : </b> <span class="pull-right">@if(!empty($MenuDetail->type ==
                                        '1'))
                                        {{ __('Same Page') }} @else
                                        {{ __('Next Page') }} @endif</span>
                                </li>
                                <hr />
                                <li> <b> Pages : </b> <span class="pull-right">@if(!empty($MenuDetail->pagename->title))
                                        {{$MenuDetail->pagename->title}} @endif</span>
                                </li>
                                <hr />

                                <li><b> Created At : </b> <span class="pull-right">{{$MenuDetail->created_at}}</span>
                                </li>
                                <hr />
                                <li><b> Status : </b><span class="pull-right">@if(!empty($MenuDetail->status == '0'))
                                        {{ __('Enable')}} @else {{ __('Disable') }} @endif </span> </li>


                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection