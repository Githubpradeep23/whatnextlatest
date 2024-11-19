@extends('layouts.app')
@section('title',$Title)
@section('content')
<main>
    <!-- login Area Strat-->
    <section class="contact__area pb-100 pt-95">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact__info">
                        <h3>Head Office</h3>
                        <ul class="mb-55">
                            <li class="d-flex mb-35">
                                <div class="contact__info-icon mr-20">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="contact__info-content">
                                    <h6>Address:</h6>
                                    <span></span>
                                </div>
                            </li>
                            <li class="d-flex mb-35">
                                <div class="contact__info-icon mr-20">
                                    <i class="fal fa-envelope-open-text"></i>
                                </div>
                                <div class="contact__info-content">
                                    <h6>Email:</h6>
                                    <span></span>
                                </div>
                            </li>
                            <li class="d-flex mb-35">
                                <div class="contact__info-icon mr-20">
                                    <i class="fal fa-phone-alt"></i>
                                </div>
                                <div class="contact__info-content">
                                    <h6>Number Phone:</h6>
                                    <span></span>
                                </div>
                            </li>
                        </ul>
                        <p>.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact__form">
                        <h3>Find Your Nearest Franchisee.</h3>
                        <form action="#" id="contact-form">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact__input">
                                        <label>State <span class="required">*</span></label>
                                        <select class="form-control" name="state" id="state">
                                            <option value="">Select</option>
                                            @forelse($State as $key => $list)
                                            <option value="{{$key}}">{{$list}}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact__input">
                                        <label>City <span class="required">*</span></label>
                                        <select class="form-control" name="city" id="city">
                                        <option value="">Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact__input">
                                        <label>Details:</label>
                                        <div  id="contactd"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                        <p class="ajax-response"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login Area End-->
</main>
@endsection