@extends('layouts.app')
@section('title',$Title)
@section('content')

<!-- PAGE HERO SECTION
			============================================= -->
@if(!empty($pagesSectionOne))
<section class="page-hero-section">
    <div class="page-hero-section-overlay bg--01 bg--scroll">
        <div class="container">
            <div class="row d-flex align-items-center">

                <!-- TEXT BLOCK -->
                <div class="col-md-6">
                    <div class="txt-block left-column color--white wow fadeInRight">
                        <!-- Section ID -->
                        <!-- <span class="section-id rounded-id bg--tra-white color--white">
                            Careers
                        </span> -->
                        <!-- Title -->
                        <h2 class="s-30 w-700 textColorTheme">{{$pagesSectionOne->title ?? "Hero section 1 title"}}</h2>
                        <!-- Text -->
                        <p class="p-lg w-400 text-black">{!! $pagesSectionOne->short_description ?? "Hero section 1 title" !!}
                        </p>
                    </div>
                </div> <!-- END TEXT BLOCK -->

                <!-- IMAGE BLOCK -->
                <div class="col-md-6">
                    <div class="img-block right-column wow fadeInLeft">
                        <img class="img-fluid" src="@if(!empty($pagesSectionOne)) {{asset('pages/'.$pagesSectionOne->image)}} @endif" title="@if(!empty($pagesSectionOne)) {{$pagesSectionOne->title}} @endif" alt="@if(!empty($pagesSectionOne)) {{$pagesSectionOne->title}} @endif">
                    </div>
                </div>

            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- End Page Hero Section Overlay -->

    <!-- WAVE SHAPE BOTTOM -->
    <div class="wave-shape-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 170">
            <path fill="#fff" fill-opacity="1" d="M0,160L120,160C240,160,480,160,720,138.7C960,117,1200,75,1320,53.3L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
        </svg>
    </div>

</section> <!-- END PAGE HERO SECTION -->
@endif
<!-- ABOUT-3
			============================================= -->
@if(!empty($pagesSectionTwo))
<div id="about-3" class="py-50 mt-5 about-section division">
    <div class="container">
        <div class="row">
            <!-- ABOUT-3 TEXT -->
            @if(!empty($pagesSectionTwo->entries))
            @forelse($pagesSectionTwo->entries as $secTwoKey => $secTwo)
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
</div>
@endif
<!-- ABOUT-2
			============================================= -->
@if (!empty($galleryList))

<div id="about-2" class="py-50 rel about-section division">
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

                            <p>{!! $pagesSectionThree->short_description ?? "Section 3 description" !!}
                            </p>

                            <p class="a2-txt-author">{{$pagesSectionThree->title ?? "Section 3 title"}}</p>
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
    <!-- END ABOUT-2 IMAGES -->
</div> <!-- END ABOUT-2 -->
@endif

<!-- FEATURES-11
			============================================= -->
@if (!empty($pagesSectionFour))

<section id="features-11" class="py-100 features-section division">
    <div class="container">

        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-70">
                    <!-- Title -->
                    <h2 class="s-52 w-700">{{$pagesSectionFour->title ?? "Section 4 title"}}</h2>
                    <!-- Text -->
                    <p class="s-21 color--grey">{!! $pagesSectionFour->short_description ?? "Section 4 title" !!}</p>
                </div>
            </div>
        </div>

        <!-- FEATURES-11 WRAPPER -->
        <div class="fbox-wrapper">
            <div class="row row-cols-1 row-cols-md-2 rows-3">
                <!-- FEATURE BOX #1 -->

                @if($pagesSectionFour && $pagesSectionFour->entries)
                @foreach($pagesSectionFour->entries as $entIndexFour => $entry)
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
                            <p>{!! $entry->description !!}</p>
                        </div>

                    </div>
                </div>
                @endforeach
                @else
                <p>No pagess found.</p>
                @endif

                <!-- END FEATURE BOX #1 -->

            </div> <!-- End row -->
        </div> <!-- END FEATURES-11 WRAPPER -->

    </div> <!-- End container -->
</section>
<!-- END FEATURES-11 -->
@endif

@if (!empty($pagesSectionFive))

<section id="features-11" class="py-10 features-section division">
    <div class="container">

        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-70">
                    <!-- Title -->
                    <h2 class="s-52 w-700">{{$pagesSectionFive->title ?? "Section 5 title"}}</h2>
                    <!-- Text -->
                    <p class="s-21 color--grey">{!! $pagesSectionFive->short_description ?? "Section 5 title" !!}</p>
                </div>
            </div>
        </div>

        <!-- FEATURES-11 WRAPPER -->
        <div class="fbox-wrapper">
            <div class="row row-cols-1 row-cols-md-1 rows-3">
                <!-- FEATURE BOX #1 -->

                @if($pagesSectionFive && $pagesSectionFive->entries)
                @foreach($pagesSectionFive->entries as $entIndexFour => $entry)
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
                            <p>{!! $entry->description !!}</p>
                        </div>

                    </div>
                </div>
                @endforeach
                @else
                <p>No pagess found.</p>
                @endif

                <!-- END FEATURE BOX #1 -->

            </div> <!-- End row -->
        </div> <!-- END FEATURES-11 WRAPPER -->

    </div> <!-- End container -->
</section>
@endif

@if (!empty($pagesSectionSix))
<section id="careers-1" class="pt-40 pb-60 careers-section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-70">
                    <!-- Title -->
                    <h2 class="s-52 w-700">{{$pagesSectionSix->title ?? "Section 6 title"}}</h2>
                    <!-- Text -->
                    <p class="p-lg">{!! $pagesSectionSix->short_description ?? "Section 6 title" !!}
                    </p>
                </div>
            </div>
        </div>

        <!-- OPEN ROLES -->
        <div class="row row-cols-1 row-cols-md-2">
            <!-- OPEN ROLE #1 -->
            @if($pagesSectionSix && $pagesSectionSix->entries)
            @foreach($pagesSectionSix->entries as $entry)
            <div class="col">
                <div class="role-box bgSectionMulti r-10">
                    <a href="#">
                        <h6 class="s-20 w-700 text-white">{{ $entry->title }}</h6>
                        <p class="description text-white">{!! $entry->description !!}</p>
                    </a>
                </div>
            </div>
            @endforeach
            @else
            <p>No data found.</p>
            @endif
            <!-- END OPEN ROLE #1 -->
        </div> <!-- END OPEN ROLES --

    </div> <!-- End container -->
</section>
@endif

@if(!empty($pagesSectionSeven))
<section id="banner-12" class="banner-section">
    <div class="container">
        <!-- BANNER-12 WRAPPER -->
        <div class="banner-12-wrapper bg--01 bg--scroll r-16">
            <div class="banner-overlay">
                <div class="row d-flex align-items-center">
                    <!-- BANNER-12 TEXT -->
                    <div class="col-md-7">
                        <div class="banner-12-txt color--white">
                            <!-- Title -->
                            <h2 class="s-45 w-700 textColorTheme">{{$pagesSectionSeven->title ?? "Section 7 title"}}</h2>
                            <!-- Text -->
                            <p class="p-lg text-black">{!! $pagesSectionSeven->short_description ?? "Section 7 title" !!}
                            </p>
                            <!-- Button -->
                            <a href="mailto:yourdomain@mail.com" class="btn r-04 btn--theme hover--tra-white">yourdomain@mail.com</a>
                        </div>
                    </div> <!-- END BANNER-12 TEXT -->
                    <!-- BANNER-12 IMAGE -->
                    <div class="col-md-5">
                        <div class="banner-12-img text-center">
                            <img class="img-fluid" src="@if(!empty($pagesSectionSeven)) {{asset('pages/'.$pagesSectionSeven->image)}} @endif" title="@if(!empty($pagesSectionSeven)) {{$pagesSectionSeven->title}} @endif" alt="@if(!empty($pagesSectionSeven)) {{$pagesSectionSeven->title}} @endif">
                        </div>
                    </div>

                </div> <!-- End row -->
            </div> <!-- End banner overlay -->
        </div> <!-- END BANNER-12 WRAPPER -->

    </div> <!-- End container -->
</section>
@endif


@endsection