@extends('layouts.app')
@section('title',$Title)
@section('content')

<section id="contacts-1" class="pb-50 inner-page-hero contacts-section division">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title text-center mb-80">
                    <!-- Title -->
                    <h2 class="s-52 w-700">Contact Us</h2>
                    <!-- Text -->
                    <p class="p-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero natus repellendus aspernatur eius tempore provident non, autem nesciunt illo animi doloremque vitae sed placeat, nostrum debitis reprehenderit quam culpa odit.
                    </p>
                </div>
            </div>
        </div>

        <!-- CONTACT FORM -->
        <div class="row justify-content-center">
            <div class="col-md-11 col-lg-10 col-xl-8">
                <div class="form-holder">

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

                    <form name="contactform" class="row contact-form" method="post" action="{{url('contact-us')}}">
                        @csrf
                        <!-- Contact Form Input -->
                        <div class="col-md-12">
                            <p class="p-lg">Your Name: </p>
                            <input type="text" name="name" class="form-control name" placeholder="Your Name*">
                            @if($errors->any())
                            <div class="text-danger">{{$errors->first('name',':message')}}</div>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <p class="p-lg">Your Email Address: </p>
                            <input type="text" name="email" class="form-control email" placeholder="Email Address*">
                            @if($errors->any())
                            <div class="text-danger">{{$errors->first('email',':message')}}</div>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <p class="p-lg">Your Mobile: </p>
                            <input type="text" name="mobile" class="form-control email" placeholder="Mobile*">
                            @if($errors->any())
                            <div class="text-danger">{{$errors->first('mobile',':message')}}</div>
                            @endif
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control message" name="message" rows="2" cols="2" placeholder="I have a problem with..."></textarea>
                        </div>

                        <!-- Contact Form Button -->
                        <div class="col-md-12 mt-15 form-btn text-right">
                            <button type="submit" class="btn btn--theme hover--theme submit">Submit Request</button>
                        </div>

                        <!-- Contact Form Message -->
                        <div class="col-lg-12 contact-form-msg">
                            <span class="loading"></span>
                        </div>

                    </form>
                </div>
            </div>
        </div> <!-- END CONTACT FORM -->

        <hr class="divider">

        <div class="comp-table-payment py-50">
            <div class="row row-cols-1 row-cols-md-3">

                <!-- Office Address -->
                <div class="col col-lg-5">
                    <div id="pbox-1" class="pbox mb-40 wow fadeInUp">
                        <div class="d-flex">
                            <div class="fbox-ico-wrap">
                                <div class="fbox-ico ico-50">
                                    <div class="shape-ico color--theme">
                                        <!-- Font Awesome Icon -->
                                        <span class="fas fa-map-marker-alt"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="s-18 w-700">Office Address</h6>
                        </div>
                        <p>Plot No 127, Narayani complex, Zone -II M.P Nagar, Bhopal – 462011, MADHYA PRADESH, INDIA</p>
                    </div>
                </div>

                <!-- Emails -->
                <div class="col col-lg-4">
                    <div id="pbox-2" class="pbox mb-40 wow fadeInUp">
                        <div class="d-flex">
                            <div class="fbox-ico-wrap">
                                <div class="fbox-ico ico-50">
                                    <div class="shape-ico color--theme">
                                        <!-- Font Awesome Icon -->
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="s-18 w-700">Emails</h6>
                        </div>
                        <p>info@whatnext4edu.com</p>
                        <p>careers@whatnext4edu.com</p>
                    </div>
                </div>

                <!-- Contact Number -->
                <div class="col col-lg-3">
                    <div id="pbox-3" class="pbox mb-40 wow fadeInUp">
                        <div class="d-flex">
                            <div class="fbox-ico-wrap">
                                <div class="fbox-ico ico-50">
                                    <div class="shape-ico color--theme">
                                        <!-- Font Awesome Icon -->
                                        <span class="fas fa-phone-alt"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="s-18 w-700">Contact No.</h6>
                        </div>
                        <p>999999999</p>
                    </div>
                </div>

            </div>
        </div>



    </div> <!-- End container -->
</section>

@endsection