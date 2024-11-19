@extends('layouts.app')
@section('title',$Title)
@section('content')

<div class="position-relative">
    <div class="iq-breadcrumb bg-primary-subtle">
        <div class="container">
            <nav aria-label="breadcrumb" class="text-center">
                <h2 class="title">Appointment And Contact Us</h2>
                <ol class="breadcrumb justify-content-center mt-2 mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{url('/')}}">Home</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div> <!--bread-crumb-->
</div>

<div class="text-center">
    <div class="container pt-5 pb-5 border-bottom">
        <div class="row">
            <div class="col-md-4">
                <i class="fas fa-map-marker-alt text-secondary font-size-60 mb-5"></i>
                <div class="iq-title-box mb-0">
                    <span class="iq-subtitle text-uppercase">LOCATION</span>
                    <h5 class="iq-title iq-heading-title mt-3">
                        <span class="right-text text-capitalize ">1-2, Datt Residency, Opp. Railway Stadium North, Jabalpur, Madhya Pradesh 482001 India</span>
                    </h5>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
                <i class="far fa-envelope text-secondary font-size-60 mb-5"></i>
                <div class="iq-title-box mb-0">
                    <span class="iq-subtitle text-uppercase">EMAIL</span>
                    <h5 class="iq-title iq-heading-title mt-3">
                        <span class="right-text text-capitalize ">support@gmail.com</span>
                    </h5>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
                <i class="fas fa-phone  text-secondary font-size-60 mb-5"></i>
                <div class="iq-title-box mb-0">
                    <span class="iq-subtitle text-uppercase">CALL ANYTIME</span>
                    <h5 class="iq-title iq-heading-title mt-3">
                        <span class="right-text text-capitalize ">0761 401 7781</span>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pt-5 pb-5">
    <div class="container text-center pt-5 pb-5">
        <div class="iq-title-box">
            <span class="iq-subtitle text-uppercase">JUST A CALL AWAY</span>
            <h2 class="iq-title iq-heading-title">
                <span class="right-text text-capitalize fw-500">We'd love to</span>
                <span class="left-text text-capitalize fw-light">hear from you!</span>
            </h2>
            <p class="iq-title-desc text-body mt-3 mb-0">
                We are here and always ready to help you. Let us know how we serve
                you and we’ll get back within no time.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-2 d-lg-block d-none"></div>
            <div class="col-lg-8">

                <div class="">
                    @if($message = Session::get('errormsg'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <p>{{ $message }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if($errors->any() && $errors->first('duplicate_booking',':message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <p>{{$errors->first('duplicate_booking',':message')}}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if($message = Session::get('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p>{{ $message }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                </div>


                <form method="post" action="{{url('store/appointments')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="custom-form-field mb-4">
                                <label for="name" class="fw-bold" style="float: left;">Your Name:</label>
                                <input type="text" id="name" name="name" placeholder="Your Name" class="form-control" value="{{old('name')}}">
                                @if($errors->any())
                                <div class="text-danger">{{$errors->first('name',':message')}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-form-field mb-4">
                                <label for="email" class="fw-bold" style="float: left;">Your Email:</label>
                                <input type="email" id="email" name="email" placeholder="Your Email" class="form-control" value="{{old('email')}}">
                                @if($errors->any())
                                <div class="text-danger">{{$errors->first('email',':message')}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-form-field mb-4">
                                <label for="mobile" class="fw-bold" style="float: left;">Mobile Number:</label>
                                <input type="tel" id="mobile" name="mobile" maxlength="10" placeholder="Mobile Number" class="form-control" value="{{old('mobile')}}">
                                @if($errors->any())
                                <div class="text-danger">{{$errors->first('mobile',':message')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="custom-form-field mb-4">
                                        <label for="slot_id" class="fw-bold" style="float: left;">Select Time Slot:</label>
                                        <select id="slot_id" class="form-control" name="slot_id">
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
                                <div class="col-lg-6">
                                    <div class="custom-form-field mb-4">
                                        <label for="date" class="fw-bold" style="float: left;">Date:</label>
                                        <input type="date" id="date" name="date" minlength="10" maxlength="140" placeholder="Date" class="form-control" value="{{old('date')}}">
                                        @if($errors->any())
                                        <div class="text-danger">{{$errors->first('date',':message')}}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="custom-form-field mb-4">
                                <label for="message" class="fw-bold" style="float: left;">Your Message:</label>
                                <textarea id="message" name="message" placeholder="Your Message" class="form-control">{{ old('message') }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 text-start">
                            <div class="iq-btn-container">
                                <button class="iq-button text-capitalize border-0" type="submit">
                                    <span class="iq-btn-text-holder position-relative">Book Appointment</span>
                                    <span class="iq-btn-icon-holder">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 8 8" fill="none">
                                            <path d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-2 d-lg-block d-none"></div>
        </div>
    </div>
</div>
@endsection