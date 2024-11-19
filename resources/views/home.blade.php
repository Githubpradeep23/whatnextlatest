@extends('layouts.app')
@section('title','Home')
@section('content')


<!-- TEXT CONTENT
			============================================= -->
<section class="ct-01 inner-page-hero-ma content-section division">
    <div class="container-fluid lrma">

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach($BannersList as $key => $slide)
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="{{ $key == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $key }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach($BannersList as $key => $slide)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="5000">
                    <img src="{{ asset("banner/".$slide->image) }}" class="img-fluid d-block w-100 w-52" alt="{{ $slide->img_alt }}" title="{{ $slide->img_title }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="s-30 w-500">{{ $slide['title'] }}</h5>
                        <p class="s-21 color--grey">{!! $slide['short_description'] !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->

@if(!empty($categorySectionOne))
<section id="features-11" class="pt-100 features-section division">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-70">

                    @if(!empty($categorySectionOne->title))
                    <h2 class="s-35 w-700">@if(!empty($categorySectionOne)) {{$categorySectionOne->title ?? ''}} @else {{ __('Place Section 1 Content')}} @endif</h2>
                    @endif

                    <!-- Text -->
                    @if(!empty($categorySectionOne->short_description))
                    <p class="s-21 color--grey">@if(!empty($categorySectionOne)) {!! $categorySectionOne->short_description ?? '' !!} @else {{ __('Place Section 1 Content')}} @endif</p>
                    @endif
                </div>
            </div>
        </div>

        <!-- FEATURES-11 WRAPPER -->
        @if(!empty($categorySectionOne->entries))
        <div class="fbox-wrapper">
            <div class="row row-cols-1 row-cols-md-2 rows-3">

                @forelse($categorySectionOne->entries as $iKey => $secOne)
                <!-- FEATURE BOX #1 -->
                <div class="col">
                    <div class="fbox-11 fb-1 wow fadeInUp">
                        <!-- Icon -->
                        <div class="fbox-ico-wrap">
                            <div class="fbox-ico ico-50">
                                <div class="shape-ico color--theme">
                                    <img class="img-fluid" src="@if(!empty($secOne)) {{asset('category/'.$secOne->image)}} @endif" title="@if(!empty($secOne)) {{$secOne->title}} @endif" alt="@if(!empty($secOne)) {{$secOne->title}} @endif">
                                </div>
                            </div>
                        </div> <!-- End Icon -->

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">{{$secOne->title}}</h6>
                            <p>{!! $secOne->description !!}
                            </p>
                        </div>

                    </div>
                </div>
                <!-- END FEATURE BOX #1 -->
                @empty
                @endforelse

            </div> <!-- End row -->
        </div> <!-- END FEATURES-11 WRAPPER -->
        @endif


    </div> <!-- End container -->
</section>
@endif

@if(!empty($categorySectionTwo))
<section class="pt-10 ct-02 content-section division">
    <div class="container">

        @if(!empty($categorySectionTwo->title))
        <!-- SECTION CONTENT (ROW) -->
        <div class="row d-flex align-items-center">

            <!-- IMAGE BLOCK -->
            <div class="col-md-6">
                <div class="img-block left-column wow fadeInRight">
                    <img class="img-fluid" src="@if(!empty($categorySectionTwo)) {{asset('category/'.$categorySectionTwo->image)}} @endif" title="@if(!empty($categorySectionTwo)) {{$categorySectionTwo->img_title}} @endif" alt="@if(!empty($categorySectionTwo)) {{$categorySectionTwo->img_alt}} @endif">
                </div>
            </div>

            <!-- TEXT BLOCK -->
            <div class="col-md-6">
                <div class="txt-block right-column wow fadeInLeft">

                    <!-- TEXT BOX -->
                    <div class="txt-box mb-0">

                        <!-- Title -->
                        @if(!empty($categorySectionTwo->title))
                        <h5 class="s-24 w-700">@if(!empty($categorySectionTwo)) {{$categorySectionTwo->title ?? ''}} @else {{ __('Place Section 2 Content')}} @endif</h5>
                        @endif
                        <!-- Text -->
                        @if(!empty($categorySectionTwo->short_description))
                        <div class="divUlLi">@if(!empty($categorySectionTwo)) {!! $categorySectionTwo->short_description !!} @else {{ __('Place Section 2 Content')}} @endif
                            <br />
                            <a href="{{url('about-us')}}" class="btn r-04 btn--theme hover--theme last-link">Read More</a>
                        </div>
                        @endif
                        <!-- List -->

                    </div> <!-- END TEXT BOX -->


                </div>
            </div> <!-- END TEXT BLOCK -->


        </div>
        <!-- END SECTION CONTENT (ROW) -->
        @endif

    </div> <!-- End container -->
</section>
@endif

<!-- FEATURES-12
			============================================= -->
<section id="features-12" class="shape--white-400 pt-100 features-section division">
    <div class="container">
        <div class="row ">


            <!-- TEXT BLOCK -->
            <div class="">
                <div class="txt-block left-column wow fadeInRight">

                    <!-- Section ID -->
                    <span class="section-id">One-Stop Solution</span>

                    <!-- Title -->
                    <h2 class="s-46 w-700">@if(!empty($categorySectionThree)) {{$categorySectionThree->title ?? ''}} @else {{ __('Place Section 3 Content')}} @endif</h2>

                    <!-- Text -->
                    <p>@if(!empty($categorySectionThree)) {!! $categorySectionThree->short_description ?? '' !!} @else {{ __('Place Section 3 Content')}} @endif
                    </p>

                </div>
            </div> <!-- END TEXT BLOCK -->


            <!-- FEATURES-12 WRAPPER -->
            <div class="col-md-12 mt-5">
                <div class="fbox-12-wrapper wow fadeInLeft">
                    <!-- features.blade.php -->
                    <div class="row">
                        @if($categorySectionThree && $categorySectionThree->entries)
                        @foreach($categorySectionThree->entries as $entry)
                        <div class="col-md-4">
                            <a href="{{url('services')}}">
                                <div id="fb-12-{{ $loop->iteration }}" class="fbox-12 bg--white-100 block-shadow r-12 mb-30">
                                    <!-- Icon -->
                                    <div class="fbox-ico ico-50">
                                        <div class="shape-ico color--theme">
                                            <img class="img-fluid" src="@if(!empty($entry)) {{asset('category/'.$entry->image)}} @endif" title="@if(!empty($entry)) {{$entry->title}} @endif" alt="@if(!empty($entry)) {{$entry->title}} @endif">
                                        </div>
                                    </div>
                                    <!-- End Icon -->
                                    <!-- Text -->
                                    <div class="fbox-txt">
                                        <h5 class="s-20 w-700">{{ $entry->title }}</h5>
                                        <p>{!! $entry->description !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        @endif
                    </div>

                </div> <!-- End row -->
            </div> <!-- END FEATURES-12 WRAPPER -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END FEATURES-12 -->

<!-- BOX CONTENT
			============================================= -->
<section class="pt-100 ws-wrapper content-section">
    <div class="container">
        <div class="bc-5-wrapper bg--02 hidd bg--scroll r-16">
            <div class="section-overlay">

                <!-- SECTION TITLE -->
                <div class="row justify-content-center">
                    <div class="col-md-11 col-lg-9">
                        <div class="section-title wow fadeInUp mb-60">
                            <!-- Title -->
                            <h2 class="s-50 w-700">@if(!empty($categorySectionFour)) {{$categorySectionFour->title ?? ''}} @else {{ __('Place Section 4 Content')}} @endif</h2>
                            <!-- Text -->
                            <p class="p-xl">
                                @if(!empty($categorySectionFour)) {!! $categorySectionFour->short_description ?? '' !!} @else {{ __('Place Section 4 Content')}} @endif
                            </p>

                        </div>
                    </div>
                </div>


                <!-- IMAGE BLOCK -->
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="bc-5-img bc-5-tablet img-block-hidden video-preview wow fadeInUp">

                            <!-- Play Icon -->
                            <a class="video-popup1" href="https://www.youtube.com/embed/SZEflIVnhH8">
                                <div class="video-btn video-btn-xl bg--theme">
                                    <div class="video-block-wrapper"><span class="flaticon-play-button"></span></div>
                                </div>
                            </a>

                            <!-- Preview Image -->
                            <img class="img-fluid" src="@if(!empty($categorySectionFour)) {{asset('category/'.$categorySectionFour->image)}} @endif" title="@if(!empty($categorySectionFour)) {{$categorySectionFour->img_title}} @endif" alt="@if(!empty($categorySectionFour)) {{$categorySectionFour->img_alt}} @endif">

                        </div>
                    </div>
                </div>


            </div> <!-- End section overlay -->
        </div> <!-- End content wrapper -->
    </div> <!-- End container -->
</section> <!-- END BOX CONTENT -->


<div id="statistic-5" class="py-100 statistic-section division">
    <div class="container">

        <!-- STATISTIC-1 WRAPPER -->
        <div class="statistic-5-wrapper">
            <div class="row row-cols-1 row-cols-md-3">

                <!-- STATISTIC BLOCK #1 -->
                @if(!empty($categorySectionEleven->entries) && $categorySectionEleven->id)
                @foreach($categorySectionEleven->entries as $elevanKey => $elevanList)
                <div class="col">
                    <div id="sb-5-1" class="wow fadeInUp">
                        <div class="statistic-block">
                            <!-- Digit -->
                            <div class="statistic-digit">
                                <h2 class="s-44 w-700">
                                    <span class="count-element">{!! $elevanList->description !!}</span>
                                </h2>
                            </div>

                            <!-- Text -->
                            <div class="statistic-txt">
                                <h5 class="s-19 w-700">{{$elevanList->title ?? ''}}</h5>
                            </div>

                        </div>
                    </div>
                </div> <!-- END STATISTIC BLOCK #1 -->
                @endforeach
                @endif

            </div> <!-- End row -->
        </div> <!-- END STATISTIC-5 WRAPPER -->


    </div> <!-- End container -->
</div>

<!-- DIVIDER LINE -->
<hr class="divider">

<!-- TEXT CONTENT
			============================================= -->
<section class="pt-100 ct-02 content-section division">
    <div class="container">


        <!-- SECTION CONTENT (ROW) -->
        <div class="row d-flex align-items-center">


            <!-- IMAGE BLOCK -->
            <div class="col-md-6">
                <div class="img-block left-column wow fadeInRight">
                    <img class="img-fluid" src="@if(!empty($categorySectionFive)) {{asset('category/'.$categorySectionFive->image)}} @endif" title="@if(!empty($categorySectionFive)) {{$categorySectionFive->img_title}} @endif" alt="@if(!empty($categorySectionFive)) {{$categorySectionFive->img_alt}} @endif">
                </div>
            </div>


            <!-- TEXT BLOCK -->
            <div class="col-md-6">
                <div class="txt-block right-column wow fadeInLeft">

                    <!-- Section ID -->
                    <span class="section-id">Easy Integration</span>

                    <!-- Title -->
                    <h2 class="s-50 w-700">@if(!empty($categorySectionFive)) {{$categorySectionFive->title ?? ''}} @else {{ __('Place Section 5 Content')}} @endif</h2>
                    <!-- Text -->
                    <p class="p-xl">
                        @if(!empty($categorySectionFive)) {!! $categorySectionFive->short_description ?? '' !!} @else {{ __('Place Section 5 Content')}} @endif
                    </p>
                    <!-- List -->

                </div>
            </div> <!-- END TEXT BLOCK -->


        </div> <!-- END SECTION CONTENT (ROW) -->


    </div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->




<!-- TEXT CONTENT
			============================================= -->
<section class="pt-20 ct-04 content-section division">
    <div class="container">

        <!-- SECTION CONTENT (ROW) -->
        <div class="row d-flex align-items-center">

            <!-- TEXT BLOCK -->
            <div class="col-md-6 order-last order-md-2">
                <div class="txt-block left-column wow fadeInRight">

                    <!-- CONTENT BOX #1 -->
                    @if(!empty($categorySectionSix->entries) && $categorySectionSix->id)
                    @foreach($categorySectionSix->entries as $sixKey => $sixList)
                    <div class="cbox-2 process-step">

                        <!-- Icon -->
                        <div class="ico-wrap">
                            <div class="cbox-2-ico bg--theme color--white">{{ $sixKey + 1 }}</div>
                            <span class="cbox-2-line"></span>
                        </div>

                        <!-- Text -->
                        <div class="cbox-2-txt">
                            <h5 class="s-22 w-700">{{ $sixList->title ?? '' }}</h5>
                            <p>{!! $sixList->description ?? '' !!}</p>
                        </div>

                    </div> <!-- END CONTENT BOX #1 -->
                    @endforeach
                    @endif

                </div>
            </div>

            <!-- END TEXT BLOCK -->

            <!-- IMAGE BLOCK -->
            <div class="col-md-6 order-first order-md-2">
                <div class="img-block wow fadeInLeft">
                    <img class="img-fluid" src="@if(!empty($categorySectionSix)) {{asset('category/'.$categorySectionSix->image)}} @endif" title="@if(!empty($categorySectionSix)) {{$categorySectionSix->img_title}} @endif" alt="@if(!empty($categorySectionSix)) {{$categorySectionSix->img_alt}} @endif">
                </div>
            </div>

        </div> <!-- END SECTION CONTENT (ROW) -->


    </div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->




<!-- TEXT CONTENT
			============================================= -->
<section class="pt-100 ct-02 content-section division">
    <div class="container">

        <!-- SECTION CONTENT (ROW) -->
        <div class="row d-flex align-items-center">

            <!-- IMAGE BLOCK -->
            <div class="col-md-6">
                <div class="img-block left-column wow fadeInRight">
                    <img class="img-fluid" src="@if(!empty($categorySectionSeven)) {{asset('category/'.$categorySectionSeven->image)}} @endif" title="@if(!empty($categorySectionSeven)) {{$categorySectionSeven->img_title}} @endif" alt="@if(!empty($categorySectionSeven)) {{$categorySectionSeven->img_alt}} @endif">
                </div>
            </div>

            <!-- TEXT BLOCK -->
            <div class="col-md-6">
                <div class="txt-block right-column wow fadeInLeft">

                    <!-- Section ID -->
                    <span class="section-id">Strategies That Work</span>

                    <!-- Title -->
                    <h2 class="s-50 w-700">@if(!empty($categorySectionSeven)) {{$categorySectionSeven->title ?? ''}} @else {{ __('Place Section 7 Content')}} @endif</h2>
                    <!-- Text -->
                    <p class="">
                        @if(!empty($categorySectionSeven)) {!! $categorySectionSeven->short_description ?? '' !!} @else {{ __('Place Section 7 Content')}} @endif
                    </p>
                    <!-- List -->

                </div>
            </div> <!-- END TEXT BLOCK -->


        </div> <!-- END SECTION CONTENT (ROW) -->


    </div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->

<!-- FEATURES-5
			============================================= -->
<section id="features-5" class="pt-100 features-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-70">

                    <!-- Title -->
                    <h2 class="s-50 w-700">@if(!empty($categorySectionEight)) {{$categorySectionEight->title ?? ''}} @else {{ __('Place Section 8 Content')}} @endif</h2>
                    <!-- Text -->
                    <p class="s-21 color--grey text-left">
                        @if(!empty($categorySectionEight)) {!! $categorySectionEight->short_description ?? '' !!} @else {{ __('Place Section 8 Content')}} @endif
                    </p>
                    <!-- List -->

                </div>
            </div>
        </div>


        <!-- FEATURES-5 WRAPPER -->
        <div class="fbox-wrapper text-center">
            <div class="row d-flex align-items-center">


                <!-- FEATURE BOX #1 -->
                <!-- Check if $categorySectionEight exists and has entries -->
                @if(!empty($categorySectionEight->entries) && $categorySectionEight)
                @foreach($categorySectionEight->entries as $entry)
                <!-- FEATURE BOX #1 -->
                <div class="col-md-6">
                    <a href="{{url('services')}}">
                        <div class="fbox-5 fb-1 gr--smoke r-16 wow fadeInUp">

                            <!-- Text -->
                            <div class="fbox-txt order-last order-md-2">
                                <h5 class="s-26 w-700">{{ $entry->title ?? 'Default Title' }}</h5>
                                <p class="text-justify">{!! $entry->description ?? 'Default description text goes here.' !!}</p>
                            </div>

                            <!-- Image -->
                            <div class="fbox-5-img order-first order-md-2">
                                <img class="img-fluid light-theme-img" src="@if(!empty($entry)) {{asset('category/'.$entry->image)}} @endif" title="@if(!empty($entry)) {{$entry->title}} @endif" alt="@if(!empty($entry)) {{$entry->title}} @endif">
                            </div>

                        </div>
                    </a>
                </div>
                @endforeach
                @endif
                <!-- END FEATURE BOX #1 -->


            </div> <!-- End row -->
        </div> <!-- END FEATURES-5 WRAPPER -->


    </div> <!-- End container -->
</section> <!-- END FEATURES-5 -->




<!-- FAQs-3
			============================================= -->
<section id="faqs-3" class="pt-100 faqs-section">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-70">

                    <h2 class="s-50 w-700">@if(!empty($categorySectionNingth)) {{$categorySectionNingth->title ?? ''}} @else {{ __('Place Section 9 Content')}} @endif</h2>
                    <!-- Text -->
                    <p class="s-21 color--grey">
                        @if(!empty($categorySectionNingth)) {!! $categorySectionNingth->short_description ?? '' !!} @else {{ __('Place Section 9 Content')}} @endif
                    </p>

                </div>
            </div>
        </div>

        <!-- FAQs-3 QUESTIONS -->
        <div class="faqs-3-questions">
            <div class="row">
                @if(!empty($categorySectionNingth->entries) && $categorySectionNingth)
                @php
                $half = ceil($categorySectionNingth->entries->count() / 2);
                @endphp

                <!-- QUESTIONS HOLDER - First Half -->
                <div class="col-lg-6">
                    <div class="questions-holder">
                        @foreach($categorySectionNingth->entries->take($half) as $key => $entry)
                        <div class="question mb-35 wow fadeInUp">
                            <h5 class="s-22 w-700"><span>{{ $key + 1 }}.</span> {{ $entry->title ?? 'Default Title' }}</h5>
                            <p class="color--grey">{!! $entry->description ?? 'Default description text goes here.' !!}</p>
                        </div>
                        @endforeach
                    </div>
                </div> <!-- END QUESTIONS HOLDER -->

                <!-- QUESTIONS HOLDER - Second Half -->
                <div class="col-lg-6">
                    <div class="questions-holder">
                        @foreach($categorySectionNingth->entries->skip($half) as $key => $entry)
                        <div class="question mb-35 wow fadeInUp">
                            <h5 class="s-22 w-700"><span>{{ $key + $half + 1 }}.</span> {{ $entry->title ?? 'Default Title' }}</h5>
                            <p class="color--grey">{!! $entry->description ?? 'Default description text goes here.' !!}</p>
                        </div>
                        @endforeach
                    </div>
                </div> <!-- END QUESTIONS HOLDER -->
                @endif
            </div>

            <!-- End row -->
        </div> <!-- END FAQs-3 QUESTIONS -->


        <!-- MORE QUESTIONS LINK -->
        <div class="row">
            <div class="col">
                <div class="more-questions mt-40">
                    <div class="more-questions-txt bg--white-400 r-100">
                        <p class="p-lg">Have any questions?
                            <a href="{{url('contact-us')}}" class="color--theme">Get in Touch</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div> <!-- End container -->
</section> <!-- END FAQs-3 -->




<!-- BANNER-13
			============================================= -->
<section id="banner-13" class="pt-100 banner-section">
    <div class="container">


        <!-- BANNER-13 WRAPPER -->
        <div class="banner-13-wrapper bg--05 bg--scroll r-16 block-shadow">
            <div class="banner-overlay">
                <div class="row d-flex align-items-center">


                    <!-- BANNER-5 TEXT -->
                    <div class="col-md-7">
                        <div class="banner-13-txt color--white">

                            <h2 class="s-46 w-700">@if(!empty($categorySectionTenght)) {{$categorySectionTenght->title ?? ''}} @else {{ __('Place Section 10 Content')}} @endif</h2>
                            <!-- Text -->
                            <p class="p-lg">
                                @if(!empty($categorySectionTenght)) {!! $categorySectionTenght->short_description ?? '' !!} @else {{ __('Place Section 10 Content')}} @endif
                            </p>

                            <!-- Button -->
                            <a href="#" class="btn r-04 btn--theme hover--tra-white">Get srarted - it's free</a>

                        </div>
                    </div> <!-- END BANNER-13 TEXT -->

                    <!-- BANNER-13 IMAGE -->
                    <div class="col-md-5">
                        <div class="banner-13-img text-center">
                            <img class="img-fluid" src="@if(!empty($categorySectionTenght)) {{asset('category/'.$categorySectionTenght->image)}} @endif" title="@if(!empty($categorySectionTenght)) {{$categorySectionTenght->title}} @endif" alt="@if(!empty($categorySectionTenght)) {{$categorySectionTenght->title}} @endif">
                        </div>
                    </div>


                </div> <!-- End row -->
            </div> <!-- End banner overlay -->
        </div> <!-- END BANNER-13 WRAPPER -->

    </div> <!-- End container -->
</section> <!-- END BANNER-13 -->

@endsection