@extends('layouts.app')
@section('title',$Title)
@section('content')

<!-- <section class="ct-01 inner-page-hero-ma content-section division">
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
                        <p class="s-21 color--grey">{{ $slide['short_description'] }}</p>
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

    </div>
</section>  -->


<section id="about-2" class="rel py-100 mt-5 about-section division">
    <!-- ABOUT-2 TITLE -->
    <div class="container">
        <div class="row d-flex align-items-center">

            <!-- TEXT BLOCK -->
            <div class="col-md-6">
                <div class="txt-block right-column wow fadeInLeft">
                    <!-- TEXT BOX -->
                    <div class="txt-box mb-0">
                        <!-- Title -->
                        <h5 class="s-40 w-700">@if(!empty($pagesSectionOne)) {{$pagesSectionOne->title ?? ''}} @else {{ __('Place Section 2 Content')}} @endif</h5>
                        <!-- Text -->
                        <p>@if(!empty($pagesSectionOne)) {!! $pagesSectionOne->short_description ?? '' !!} @else {{ __('Place Section 2 Content')}} @endif
                        </p>
                    </div> <!-- END TEXT BOX -->
                </div>
            </div> <!-- END TEXT BLOCK -->

            <div class="col-md-6">
                <div class="img-block left-column wow fadeInRight">
                    <img class="img-fluid" src="@if(!empty($pagesSectionOne)) {{asset('pages/'.$pagesSectionOne->image)}} @endif" title="@if(!empty($pagesSectionOne)) {{$pagesSectionOne->img_title}} @endif" alt="@if(!empty($pagesSectionOne)) {{$pagesSectionOne->img_alt}} @endif">
                </div>
            </div>

        </div>
    </div> <!-- END ABOUT-2 TITLE -->

    @if(!empty($galleryList))
    <!-- ABOUT-2 IMAGES -->
    <div class="container-fluid">
        <div class="row">
            <!-- IMAGES-1 -->
            <div class="col-md-5">
                <div class="text-end">
                    <!-- IMAGE-1 and IMAGE-2 -->
                    @foreach($galleryList->take(2) as $index => $gallery)
                    <div class="about-2-img a-2-{{ $index + 1 }} r-12">
                        <img class="img-fluid" src="@if(!empty($gallery)) {{asset('gallery/'.$gallery->image)}} @endif" title="@if(!empty($gallery)) {{$gallery->title}} @endif" alt="@if(!empty($gallery)) {{$gallery->title}} @endif">
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- END IMAGES-1 -->

            <!-- IMAGES-2 -->
            <div class="col-md-7">
                <!-- IMAGE-3 -->
                @if($galleryList->count() > 2)
                <div class="about-2-img a-2-3 r-12">
                    <img class="img-fluid" src="@if(!empty($galleryList)) {{asset('gallery/'.$galleryList[2]->image)}} @endif" title="@if(!empty($galleryList)) {{$galleryList[2]->title}} @endif" alt="@if(!empty($galleryList)) {{$galleryList[2]->title}} @endif">
                </div>
                @endif

                <div class="row">
                    <!-- TEXT -->
                    <!-- <div class="col-md-7 col-lg-6">
                        <div class="a2-txt bg--black-400 pattern-01 bg--fixed color--white r-12">

                        <div class="a2-txt-quote ico-40 o-20">
                                <span class="flaticon-quote"></span>
                            </div>

                            <p>{{$pagesSectionTwo->short_description ?? "Section 2 description"}}
                            </p>

                            <p class="a2-txt-author">{{$pagesSectionTwo->title ?? "Section 2 title"}}</p>
                        </div>
                    </div> -->

                    <!-- IMAGE-4 -->
                    @if($galleryList->count() > 3)
                    <div class="col-md-5 col-lg-6">
                        <div class="about-2-img a-2-4 r-12">
                            <img class="img-fluid" src="@if(!empty($galleryList)) {{asset('gallery/'.$galleryList[3]->image)}} @endif" title="@if(!empty($galleryList)) {{$galleryList[3]->title}} @endif" alt="@if(!empty($galleryList)) {{$galleryList[3]->title}} @endif">
                        </div>
                    </div>
                    @endif
                </div> <!-- End row -->
            </div> <!-- END IMAGES-2 -->
        </div>
    </div>
    @endif
    <!-- END ABOUT-2 IMAGES -->


</section> <!-- END ABOUT-2 -->

<!-- ABOUT-3
			============================================= -->
<div id="about-3" class="about-section division">
    <div class="container">
        <div class="row">

            @if(!empty($pagesSectionThree->entries))
            @forelse($pagesSectionThree->entries as $secTwoKey => $secTwo)
            <div class="col-md-6">
                <div class="fbox-11 fb-{{$secTwoKey+1}} wow fadeInUp">
                    <!-- Icon -->
                    <div class="fbox-ico-wrap">
                        <div class="fbox-ico ico-50">
                            <div class="shape-ico">
                                <img class="img-fluid" src="@if(!empty($secTwo)) {{asset('pages/'.$secTwo->image)}} @endif" title="@if(!empty($secTwo)) {{$secTwo->title}} @endif" alt="@if(!empty($secTwo)) {{$secTwo->title}} @endif">
                            </div>
                        </div>
                    </div> <!-- End Icon -->
                    <!-- Text -->
                    <div class="fbox-txt">
                        <h6 class="s-22 w-700">{{ $secTwo->title }}</h6>
                        <p>{!! $secTwo->description !!}
                        </p>
                    </div>

                </div>
            </div>
            @empty
            @endforelse
            @endif
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END ABOUT-3 -->

<!-- STATISTIC-5
			============================================= -->
<div id="statistic-5" class="py-100 statistic-section division">
    <div class="container">

        <!-- STATISTIC-1 WRAPPER -->
        <div class="statistic-5-wrapper">
            <div class="row row-cols-1 row-cols-md-3">
                @if(!empty($pagesSectionTowelth->entries) && $pagesSectionTowelth->id)
                @foreach($pagesSectionTowelth->entries as $elevanKey => $elevanList)
                <!-- STATISTIC BLOCK #1 -->
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
<!-- END STATISTIC-5 -->

<!-- TEXT CONTENT
			============================================= -->
<section class="bg--04 bg--fixed py-100 ct-01 content-section division bgImageHeight">
    <div class="container">
        <div class="row d-flex align-items-center">

            <!-- <div class="col-md-6 order-last order-md-2">
                <div class="txt-block left-column wow fadeInRight">

                <span class="section-id">Co-founder at What Next</span>

                <h2 class="s-50 w-700">{{$pagesSectionFour->title ?? "Section 4 title"}}</h2>

                <p class="p-lg">{{$pagesSectionFour->short_description ?? "Section 4 title"}}
                    </p>
                </div>
            </div> 

            <div class="col-md-6 order-first order-md-2">
                <div class="img-block j-img video-preview right-column wow fadeInLeft">

                <a class="video-popup2" href="https://www.youtube.com/embed/7e90gBu4pas">
                        <div class="video-btn video-btn-xl bg--theme">
                            <div class="video-block-wrapper"><span class="flaticon-play-button"></span></div>
                        </div>
                    </a>

                    <img class="img-fluid r-20" src="@if(!empty($pagesSectionFour)) {{asset('pages/'.$pagesSectionFour->image)}} @endif" title="@if(!empty($pagesSectionFour)) {{$pagesSectionFour->title}} @endif" alt="@if(!empty($pagesSectionFour)) {{$pagesSectionFour->title}} @endif">
                </div>
            </div> -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</section>
<!-- END TEXT CONTENT -->

<!-- FEATURES-11
			============================================= -->
<section id="features-11" class="py-100 features-section division">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-70">
                    <!-- Title -->
                    <h2 class="s-50 w-700">{{$pagesSectionFive->title ?? "Section 5 title"}}</h2>
                    <!-- Text -->
                    <p class="s-21 color--grey">{!! $pagesSectionFive->short_description ?? "Section 5 title" !!}</p>
                </div>
            </div>
        </div>

        <!-- FEATURES-11 WRAPPER -->
        <div class="fbox-wrapper">
            <div class="row row-cols-1 row-cols-md-2 rows-3">

                @if($pagesSectionFive && $pagesSectionFive->entries)
                @foreach($pagesSectionFive->entries as $entIndexFour => $entry)
                <!-- FEATURE BOX #1 -->
                <div class="col">
                    <div class="fbox-11 fb-{{$entIndexFour+1}} wow fadeInUp">
                        <!-- Icon -->
                        <div class="fbox-ico-wrap">
                            <div class="fbox-ico ico-50">
                                <div class="shape-ico">
                                    <img class="img-fluid" src="@if(!empty($entry)) {{asset('pages/'.$entry->image)}} @endif" title="@if(!empty($entry)) {{$entry->title}} @endif" alt="@if(!empty($entry)) {{$entry->title}} @endif">
                                </div>
                            </div>
                        </div> <!-- End Icon -->

                        <!-- Text -->
                        <div class="fbox-txt">
                            <h6 class="s-22 w-700">{{ $entry->title }}</h6>
                            <p>{!! $entry->description !!}
                            </p>
                        </div>

                    </div>
                </div>
                @endforeach
                @else
                <p class="text-center">No data found.</p>
                @endif
                <!-- END FEATURE BOX #1 -->

            </div> <!-- End row -->
        </div> <!-- END FEATURES-11 WRAPPER -->


    </div> <!-- End container -->
</section> <!-- END FEATURES-11 -->

<!-- DIVIDER LINE -->
<hr class="divider">
<!-- BRANDS-1 ============================================= -->

<section class="bg--04 bg--fixed py-100 ct-01 content-section division bgImageHeight">
    <div class="container">
        <div class="row d-flex align-items-center">

            <!-- <div class="col-md-6 order-last order-md-2">
                <div class="txt-block left-column wow fadeInRight">

                <span class="section-id">Co-founder at What Next</span>

                <h2 class="s-50 w-700">{{$pagesSectionFour->title ?? "Section 4 title"}}</h2>

                <p class="p-lg">{{$pagesSectionFour->short_description ?? "Section 4 title"}}
                    </p>
                </div>
            </div> 

            <div class="col-md-6 order-first order-md-2">
                <div class="img-block j-img video-preview right-column wow fadeInLeft">

                <a class="video-popup2" href="https://www.youtube.com/embed/7e90gBu4pas">
                        <div class="video-btn video-btn-xl bg--theme">
                            <div class="video-block-wrapper"><span class="flaticon-play-button"></span></div>
                        </div>
                    </a>

                    <img class="img-fluid r-20" src="@if(!empty($pagesSectionFour)) {{asset('pages/'.$pagesSectionFour->image)}} @endif" title="@if(!empty($pagesSectionFour)) {{$pagesSectionFour->title}} @endif" alt="@if(!empty($pagesSectionFour)) {{$pagesSectionFour->title}} @endif">
                </div>
            </div> -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

<hr class="divider">

<div id="brands-1" class="py-80 brands-section">
    <div class="container">

        <!-- BRANDS TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="brands-title mb-50">
                    <h5 class="s-20">{{$pagesSectionSix->title ?? "Section 6 title"}}</h5>
                </div>
            </div>
        </div>

        <!-- BRANDS CAROUSEL -->
        <div class="row">
            <div class="col text-center">
                <div class="owl-carousel brands-carousel-6">

                    @if($pagesSectionSix && $pagesSectionSix->entries)
                    @foreach($pagesSectionSix->entries as $entry)
                    <div class="brand-logo">
                        <a href="#">
                            <img class="img-fluid light-theme-img" src="@if(!empty($entry)) {{asset('pages/'.$entry->image)}} @endif" title="@if(!empty($entry)) {{$entry->title}} @endif" alt="@if(!empty($entry)) {{$entry->title}} @endif">
                        </a>
                    </div>
                    @endforeach
                    @else
                    <p>No data found.</p>
                    @endif
                </div>
            </div>
        </div> <!-- END BRANDS CAROUSEL -->


    </div> <!-- End container -->
</div> <!-- END BRANDS-1 -->

<!-- DIVIDER LINE -->
<hr class="divider">

<!-- TEAM-1
			============================================= -->
<section id="team-1" class="pt-100 team-section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-80">
                    <!-- Title -->
                    <h2 class="s-50 w-700">{{$pagesSectionSeven->title ?? "Section 7 title"}}</h2>
                    <!-- Text -->
                    <p class="s-21 color--grey">{!! $pagesSectionSeven->short_description ?? "Section 7 title" !!}</p>
                </div>
            </div>
        </div>

        <!-- TEAM MEMBERS WRAPPER -->
        <div class="team-members-wrapper">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                <!-- TEAM MEMBER #1 -->
                @if($pagesSectionSeven && $pagesSectionSeven->entries)
                @foreach($pagesSectionSeven->entries as $entry)
                <div class="col">
                    <div class="team-member mb-50 wow fadeInUp">
                        <!-- Team Member Photo -->
                        <div class="team-member-photo r-14">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="@if(!empty($entry)) {{asset('pages/'.$entry->image)}} @endif" title="@if(!empty($entry)) {{$entry->title}} @endif" alt="@if(!empty($entry)) {{$entry->title}} @endif">
                                <div class="item-overlay"></div>
                            </div>
                        </div>
                        <!-- Team Member Data -->
                        <div class="team-member-data">
                            <h6 class="s-20 w-700 color--black">{{ $entry->title }}</h6>
                            <p class="color--grey">{!! $entry->description !!}</p>
                        </div>
                    </div>
                </div> <!-- END TEAM MEMBER #1 -->
                @endforeach
                @else
                <p class="text-center">No data found.</p>
                @endif
            </div> <!-- End row -->
        </div> <!-- TEAM MEMBERS WRAPPER -->

        <!-- MORES BUTTON -->
        <div class="row">
            <div class="col">
                <div class="more-btn text-center mt-20 wow fadeInUp">
                    <a href="#" class="btn btn--tra-black hover--theme">Join our team</a>
                </div>
            </div>
        </div>

    </div> <!-- End container -->
</section> <!-- END TEAM-1 -->

<!-- BOX CONTENT
			============================================= -->
<section class="pt-100 ws-wrapper content-section">
    <div class="container">
        <div class="bc-1-wrapper bg--02 bg--fixed r-16">
            <div class="section-overlay">
                <div class="row d-flex align-items-center">
                    <!-- TEXT BLOCK -->
                    <div class="col-md-6 order-last order-md-2">
                        <div class="txt-block left-column wow fadeInRight">
                            <!-- Section ID -->
                            <span class="section-id">Why Choose Us</span>
                            <!-- Title -->
                            <h2 class="s-46 w-700">{{$pagesSectionEight->title ?? "Section 8 title"}}</h2>
                            <!-- Text -->
                            <p>{!! $pagesSectionEight->short_description ?? "Section 8 title" !!}
                            </p>
                        </div>
                    </div> <!-- END TEXT BLOCK -->

                    <!-- IMAGE BLOCK -->
                    <div class="col-md-6 order-first order-md-2">
                        <div class="img-block right-column wow fadeInLeft">
                            <img class="img-fluid r-20" src="@if(!empty($pagesSectionEight)) {{asset('pages/'.$pagesSectionEight->image)}} @endif" title="@if(!empty($pagesSectionEight)) {{$pagesSectionEight->title}} @endif" alt="@if(!empty($pagesSectionEight)) {{$pagesSectionEight->title}} @endif">
                        </div>
                    </div>

                </div> <!-- End row -->
            </div> <!-- End section overlay -->
        </div> <!-- End content wrapper -->
    </div> <!-- End container -->
</section> <!-- END BOX CONTENT -->

<!-- TEXT CONTENT
			============================================= -->
<section class="pt-100 ct-02 content-section division">
    <div class="container">
        <!-- SECTION CONTENT (ROW) -->
        <div class="row d-flex align-items-center">
            <!-- IMAGE BLOCK -->
            <div class="col-md-6">
                <div class="img-block left-column wow fadeInRight">
                    <img class="img-fluid r-20" src="@if(!empty($pagesSectionNine)) {{asset('pages/'.$pagesSectionNine->image)}} @endif" title="@if(!empty($pagesSectionNine)) {{$pagesSectionNine->title}} @endif" alt="@if(!empty($pagesSectionNine)) {{$pagesSectionNine->title}} @endif">
                </div>
            </div>

            <!-- TEXT BLOCK -->
            <div class="col-md-6">
                <div class="txt-block right-column wow fadeInLeft">
                    <!-- Section ID -->
                    <span class="section-id">Strategies That Work</span>
                    <!-- Title -->
                    <h2 class="s-46 w-700">{{$pagesSectionNine->title ?? "Section 9 title"}}</h2>
                    <!-- Text -->
                    <p>{!! $pagesSectionNine->short_description ?? "Section 9 title" !!}
                    </p>
                </div>
            </div> <!-- END TEXT BLOCK -->

        </div> <!-- END SECTION CONTENT (ROW) -->

    </div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->

<!-- TESTIMONIALS-2
			============================================= -->
<section id="reviews-2" class="pt-100 reviews-section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-70">
                    <!-- Title -->
                    <h2 class="s-50 w-700">{{$pagesSectionTenth->title ?? "Section 10 title"}}</h2>
                    <!-- Text -->
                    <p class="s-21 color--grey">{!! $pagesSectionTenth->short_description ?? "Section 10 title" !!}</p>
                </div>
            </div>
        </div>

        <!-- TESTIMONIALS-2 WRAPPER -->
        <div class="reviews-2-wrapper rel shape--02 shape--whitesmoke">
            <div class="row align-items-center row-cols-1 row-cols-md-2">

                @if($pagesSectionTenth && $pagesSectionTenth->entries)
                @foreach($pagesSectionTenth->entries as $entIndexFour => $entry)
                <div class="col">
                    <div id="rw-2-{{$entIndexFour+1}}" class="review-2 bg--white-100 block-shadow r-08">
                        <!-- Quote Icon -->
                        <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>
                        <!-- Text -->
                        <div class="review-txt">
                            <!-- Text -->
                            <p>{!! $entry->description !!}
                            </p>
                            <!-- Author -->
                            <div class="author-data clearfix">
                                <!-- Avatar -->
                                <div class="review-avatar">
                                    <img src="@if(!empty($entry)) {{asset('pages/'.$entry->image)}} @endif" title="@if(!empty($entry)) {{$entry->title}} @endif" alt="@if(!empty($entry)) {{$entry->title}} @endif">
                                </div>
                                <!-- Data -->
                                <div class="review-author">
                                    <h6 class="s-18 w-700">{{ $entry->title }}</h6>
                                </div>
                            </div> <!-- End Author -->
                        </div> <!-- End Text -->
                    </div>
                </div>
                @endforeach
                @else
                <p>No data found.</p>
                @endif
            </div> <!-- End row -->
        </div> <!-- END TESTIMONIALS-2 WRAPPER -->

    </div> <!-- End container -->
</section> <!-- END TESTIMONIALS-2 -->

<!-- TEXT CONTENT
			============================================= -->
<section class="bg--white-400 py-100 ct-03 content-section division mt-5">
    <div class="container">
        <div class="row d-flex align-items-center">

            <div class="col-md-6 col-lg-5 order-last order-md-2">
                <div class="txt-block left-column wow fadeInRight">
                    <span class="section-id">One-Stop Solution</span>
                    <h2 class="s-46 w-700">{{$pagesSectionEleventh->title ?? "Section 11 title"}}</h2>
                    <p>{!! $pagesSectionEleventh->short_description ?? "Section 11 title" !!}</p>
                </div>
            </div>

            <!-- IMAGE BLOCK -->
            <div class="col-md-6 col-lg-7 order-first order-md-2">
                <div class="img-block right-column wow fadeInLeft">
                    <img class="img-fluid r-20" src="@if(!empty($pagesSectionEleventh)) {{asset('pages/'.$pagesSectionEleventh->image)}} @endif" title="@if(!empty($pagesSectionEleventh)) {{$pagesSectionEleventh->title}} @endif" alt="@if(!empty($pagesSectionEleventh)) {{$pagesSectionEleventh->title}} @endif">
                </div>
            </div>

        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->

@endsection