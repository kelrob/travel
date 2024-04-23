@extends('app')
@include('layouts.partials.head')

@section('title', 'GTWTravels - About')

@section('header')
    @include('layouts.partials.header_white')
@endsection

@section('content')
    <section class="section-bg layout-pt-lg layout-pb-lg">
        <div class="section-bg__item col-12">
            <img src="img/pages/about/1.png" alt="image"/>
        </div>

        <div class="container">
            <div class="row justify-center text-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <h1 class="text-40 md:text-25 fw-600 text-white">
                        Who are we?
                    </h1>
                    <div class="text-white mt-15">Your trusted trip companion</div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-md">
        <div data-anim-wrap class="container">
            <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
                <div class="col-auto">
                    <div class="sectionTitle -md">
                        <h2 class="sectionTitle__title">Why Choose Us</h2>
                        <p class="sectionTitle__text mt-5 sm:mt-0">
                            These popular destinations have a lot to offer
                        </p>
                    </div>
                </div>
            </div>

            <div class="row y-gap-40 justify-between pt-50">
                <div data-anim-child="slide-up delay-2" class="col-lg-3 col-sm-6">
                    <div class="featureIcon -type-1">
                        <div class="d-flex justify-center">
                            <img src="#" data-src="img/featureIcons/1/1.svg" alt="image" class="js-lazy"/>
                        </div>

                        <div class="text-center mt-30">
                            <h4 class="text-18 fw-500">Best Price Guarantee</h4>
                            <p class="text-15 mt-10">
                                We offer the best Prices you can find anywhere.
                            </p>
                        </div>
                    </div>
                </div>

                <div data-anim-child="slide-up delay-3" class="col-lg-3 col-sm-6">
                    <div class="featureIcon -type-1">
                        <div class="d-flex justify-center">
                            <img src="#" data-src="img/featureIcons/1/2.svg" alt="image" class="js-lazy"/>
                        </div>

                        <div class="text-center mt-30">
                            <h4 class="text-18 fw-500">Easy & Quick Booking</h4>
                            <p class="text-15 mt-10">
                                Seamless and smooth Booking Experience.
                            </p>
                        </div>
                    </div>
                </div>

                <div data-anim-child="slide-up delay-4" class="col-lg-3 col-sm-6">
                    <div class="featureIcon -type-1">
                        <div class="d-flex justify-center">
                            <img src="#" data-src="img/featureIcons/1/3.svg" alt="image" class="js-lazy"/>
                        </div>

                        <div class="text-center mt-30">
                            <h4 class="text-18 fw-500">Customer Care 24/7</h4>
                            <p class="text-15 mt-10">
                                Have Questions? Don't worry we got you covered 24/7
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md">
        <div class="container">
            <div class="row y-gap-30 justify-between items-center">
                <div class="col-lg-5">
                    <h2 class="text-30 fw-600">About GTWTravels.com</h2>
                    <p class="mt-5">These popular destinations have a lot to offer</p>

                    <p class="text-dark-1 mt-60 lg:mt-40 md:mt-10">
                        Great Travel World Travel aims to be the ultimate companion for travelers worldwide,
                        facilitating seamless and enjoyable travel experiences for every individual. The brand prides
                        itself on its commitment to excellence, reliability, and personalized service
                        <br/><br/></p>
                    <h3>Mission</h3>
                    <p>
                        Our mission at Great Travel World Travel is to empower travelers by simplifying the complexities
                        of travel planning, offering expert guidance, and providing unparalleled support throughout
                        their journey. We believe in making travel accessible, stress-free, and unforgettable for
                        everyone.
                        <br/><br/>
                    </p>

                    <h3>Target Audience</h3>
                    <p>
                        Great Travel World Travel caters to a diverse clientele ranging from seasoned globetrotters
                        seeking unique adventures to first-time travelers embarking on their dream vacations. Our
                        services are tailored to meet the needs of solo travelers, families, couples, and groups alike,
                        ensuring that each customer receives personalized attention and assistance.
                        <br/><br/>
                    </p>

                    <h3 class="mt-20 mb-10">Brand Values</h3>
                    <ol style="padding: 0; margin: 0;">
                        <li><b>Excellence</b>: We are dedicated to delivering exceptional service and exceeding customer
                            expectations at every touchpoint.
                        </li>
                        <li>
                            <b>Reliability</b>: Customers can trust Great Travel World Travel to handle every aspect of
                            their
                            travel arrangements with professionalism, efficiency, and attention to detail.
                        </li>
                        <li>
                            <b>Personalization</b>: We understand that every traveler is unique, which is why we offer
                            customized solutions to suit individual preferences, budgets, and interests.
                        </li>
                        <li><b>Community</b>: Great Travel World Travel fosters a sense of community among travelers,
                            encouraging connections, cultural exchange, and shared experiences.
                        </li>
                        <li>
                            <b>Innovation</b>: We embrace innovation and technology to continuously enhance our services
                            and adapt to the evolving needs of modern travelers.
                        </li>

                    </ol>
                </div>

                <div class="col-lg-6">
                    <img src="img/pages/about/2.png" alt="image" class="rounded-4"/>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-60">
        <div class="container">
            <div class="border-bottom-light pb-40">
                <div class="row y-gap-30 justify-center text-center">
                    <div class="col-xl-3 col-6">
                        <div class="text-40 lg:text-30 lh-13 fw-600">4,958</div>
                        <div class="text-14 lh-14 text-light-1 mt-5">Destinations</div>
                    </div>

                    <div class="col-xl-3 col-6">
                        <div class="text-40 lg:text-30 lh-13 fw-600">2,869</div>
                        <div class="text-14 lh-14 text-light-1 mt-5">
                            Total Properties
                        </div>
                    </div>

                    <div class="col-xl-3 col-6">
                        <div class="text-40 lg:text-30 lh-13 fw-600">2M</div>
                        <div class="text-14 lh-14 text-light-1 mt-5">
                            Happy customers
                        </div>
                    </div>

                    <div class="col-xl-3 col-6">
                        <div class="text-40 lg:text-30 lh-13 fw-600">574,974</div>
                        <div class="text-14 lh-14 text-light-1 mt-5">
                            Our Volunteers
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg">
        <div class="container">
            <div class="row y-gap-20 justify-center text-center">
                <div class="col-lg-12">
                    <div class="sectionTitle -md text-align-center">
                        <h2 class="sectionTitle__title">Our Team</h2>
                        <p class="sectionTitle__text mt-5 sm:mt-0">
                            Meet the people who make it happen
                        </p>
                    </div>
                </div>

                {{--                <div class="col-auto">--}}
                {{--                    <div class="d-flex x-gap-15 items-center justify-center">--}}
                {{--                        <div class="col-auto">--}}
                {{--                            <button class="d-flex items-center text-24 arrow-left-hover js-team-prev">--}}
                {{--                                <i class="icon icon-arrow-left"></i>--}}
                {{--                            </button>--}}
                {{--                        </div>--}}

                {{--                        <div class="col-auto">--}}
                {{--                            <div class="pagination -dots text-border js-team-pag"></div>--}}
                {{--                        </div>--}}

                {{--                        <div class="col-auto">--}}
                {{--                            <button class="d-flex items-center text-24 arrow-right-hover js-team-next">--}}
                {{--                                <i class="icon icon-arrow-right"></i>--}}
                {{--                            </button>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>

            <div class="overflow-hidden pt-40 js-section-slider" data-gap="30"
                 data-slider-cols="xl-5 lg-4 md-2 sm-2 base-1" data-nav-prev="js-team-prev"
                 data-pagination="js-team-pag"
                 data-nav-next="js-team-next">
                <div class="swiper-wrapper justify-center text-center"
                >
                    <div class="swiper-slide">
                        <div class="">
                            <img src="{{url('https://gtwtravels.com/img/team-1.jpg')}}" alt="image"
                                 class="rounded-4 col-12"/>

                            <div class="mt-10">
                                <div class="text-18 lh-15 fw-500">George Joseph</div>
                                <div class="text-14 lh-15">CEO</div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="">
                            <img src="{{url('https://gtwtravels.com/img/team-2.jpg')}}" alt="image"
                                 class="rounded-4 col-12"/>

                            <div class="mt-10">
                                <div class="text-18 lh-15 fw-500">Iheoma Okeke</div>
                                <div class="text-14 lh-15">Consultant</div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="">
                            <img src="{{url('https://gtwtravels.com/img/team-3.jpg')}}" alt="image"
                                 class="rounded-4 col-12"/>

                            <div class="mt-10">
                                <div class="text-18 lh-15 fw-500">Shobayo Oluwafunmilayo Elizabeth</div>
                                <div class="text-14 lh-15">Project Coordinator</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
