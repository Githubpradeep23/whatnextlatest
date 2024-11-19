@extends('layouts.app')
@if(!empty($Page->title))
@section('title',$Page->title)
@else
@section('title',$Title)
@endif
@section('content')

<div class="breadcroumb-area bread-bg" style="background-image: url('{{asset("pages/".$Page->image)}}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title">
                    <h1>Pages</h1>
                    <h6><a href="{{url('/')}}">Home</a> <i class="far fa-dot-circle"></i> @if(!empty($Page->title)) {{$Page->title}} @endif</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-content-wrapper wow fadeInUp" data-wow-delay=".4s">
                    <div class="section-title">
                        <h6>@if(!empty($Page->title)) {{$Page->title}} @endif</h6>
                        <h2>@if(!empty($Page->short_description)) {{$Page->short_description}} @endif</h2>
                    </div>


                    <div>
                        {!! $Page->description !!}
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection