@extends('app')
@include('layouts.partials.head')

@section('title', 'GTWTravels - Activity')

@section('header')
    @include('layouts.partials.header_blue')
@endsection

@section('content')
    <section class="py-10 d-flex items-center bg-light-2">
        <div class="container">
            <div class="row y-gap-10 items-center justify-between">
                <div class="col-auto">
                    <div
                        class="row x-gap-10 y-gap-5 items-center text-14 text-light-1"
                    >
                        <div class="col-auto">
                            <div class="">Home</div>
                        </div>
                        <div class="col-auto">
                            <div class="">></div>
                        </div>
                        <div class="col-auto">
                            <div class="">London Hotels</div>
                        </div>
                        <div class="col-auto">
                            <div class="">></div>
                        </div>
                        <div class="col-auto">
                            <div class="text-dark-1">
                                Great Northern Hotel, a Tribute Portfolio Hotel, London
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <a href="#" class="text-14 text-blue-1 underline"
                    >All Activties in London</a
                    >
                </div>
            </div>
        </div>
    </section>

    <section class="pt-40">
        <div class="container">
            <div
                class="relative d-flex justify-center js-section-slider"
                data-gap="10"
                data-slider-cols="xl-2 lg-2 base-1"
                data-nav-prev="js-img-prev"
                data-nav-next="js-img-next"
                data-loop
            >
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ratio ratio-64:45">
                            <img
                                src="img/lists/activity/single/1.png"
                                alt="image"
                                class="rounded-4 img-ratio"
                            />
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ratio ratio-64:45">
                            <img
                                src="img/lists/activity/single/2.png"
                                alt="image"
                                class="rounded-4 img-ratio"
                            />
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ratio ratio-64:45">
                            <img
                                src="img/lists/activity/single/3.png"
                                alt="image"
                                class="rounded-4 img-ratio"
                            />
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ratio ratio-64:45">
                            <img
                                src="img/lists/activity/single/4.png"
                                alt="image"
                                class="rounded-4 img-ratio"
                            />
                        </div>
                    </div>
                </div>

                <div class="absolute h-full col-11">
                    <button
                        class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-img-prev"
                    >
                        <i class="icon icon-chevron-left text-12"></i>
                    </button>

                    <button
                        class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-img-next"
                    >
                        <i class="icon icon-chevron-right text-12"></i>
                    </button>
                </div>

                <div
                    class="absolute h-full col-12 px-20 py-20 d-flex justify-end items-end"
                >
                    <a
                        href="img/lists/activity/single/1.png"
                        class="button -blue-1 px-24 py-15 bg-white text-dark-1 z-2 js-gallery"
                        data-gallery="gallery2"
                    >
                        Book Now!
                    </a>
                    <a
                        href="img/lists/activity/single/2.png"
                        class="js-gallery"
                        data-gallery="gallery2"
                    ></a>
                    <a
                        href="img/lists/activity/single/3.png"
                        class="js-gallery"
                        data-gallery="gallery2"
                    ></a>
                    <a
                        href="img/lists/activity/single/4.png"
                        class="js-gallery"
                        data-gallery="gallery2"
                    ></a>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-40">
        <div class="container">
            <div class="row y-gap-30">
                <div class="col-lg-8">
                    <div class="row justify-between items-end">
                        <div class="col-auto">
                            <h1 class="text-26 fw-600">
                                Lake District Rail Day Trip from London
                            </h1>

                            <div class="row x-gap-10 y-gap-20 items-center pt-10">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <i class="icon-star text-10 text-yellow-1"></i>

                                        <div class="text-14 text-light-1 ml-10">
                                            <span class="text-15 fw-500 text-dark-1">4.82</span>
                                            94 reviews
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="row x-gap-10 items-center">
                                        <div class="col-auto">
                                            <div class="d-flex x-gap-5 items-center">
                                                <i class="icon-location-2 text-16 text-light-1"></i>
                                                <div class="text-15 text-light-1">
                                                    Greater London, United Kingdom
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <button
                                                data-x-click="mapFilter"
                                                class="text-blue-1 text-15 underline"
                                            >
                                                Show on map
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="row x-gap-10 y-gap-10">
                                <div class="col-auto">
                                    <button class="button px-15 py-10 -blue-1">
                                        <i class="icon-share mr-10"></i>
                                        Share
                                    </button>
                                </div>

                                <div class="col-auto">
                                    <button class="button px-15 py-10 -blue-1 bg-light-2">
                                        <i class="icon-heart mr-10"></i>
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-top-light mt-40 mb-40"></div>

                    <h3 class="text-22 fw-500 mt-30">Tour snapshot</h3>

                    <div class="row y-gap-30 justify-between pt-20">
                        <div class="col-md-auto col-6">
                            <div class="d-flex">
                                <i class="icon-clock text-22 text-blue-1 mr-10"></i>
                                <div class="text-15 lh-15">
                                    Duration:<br />
                                    11h
                                </div>
                            </div>
                        </div>

                        <div class="col-md-auto col-6">
                            <div class="d-flex">
                                <i class="icon-customer text-22 text-blue-1 mr-10"></i>
                                <div class="text-15 lh-15">
                                    Group size:<br />
                                    52
                                </div>
                            </div>
                        </div>

                        <div class="col-md-auto col-6">
                            <div class="d-flex">
                                <i class="icon-route text-22 text-blue-1 mr-10"></i>
                                <div class="text-15 lh-15">
                                    Near public<br />
                                    transportation
                                </div>
                            </div>
                        </div>

                        <div class="col-md-auto col-6">
                            <div class="d-flex">
                                <i class="icon-access-denied text-22 text-blue-1 mr-10"></i>
                                <div class="text-15 lh-15">
                                    Free cancellation <br /><a
                                        href="#"
                                        class="text-blue-1 underline"
                                    >Learn more</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-top-light mt-40 mb-40"></div>

                    <div class="row x-gap-40 y-gap-40">
                        <div class="col-12">
                            <h3 class="text-22 fw-500">Overview</h3>

                            <div class="show-more -h-60 js-show-more">
                                <div class="show-more__content">
                                    <p class="text-dark-1 text-15 mt-20">
                                        Unless you hire a car, visiting Stonehenge, Bath, and
                                        Windsor Castle in one day is next to impossible.
                                        Designed specifically for travelers with limited time in
                                        London, this tour allows you to check off a range of
                                        southern England's historical attractions in just one
                                        day by eliminating the hassle of traveling between each
                                        one independently. Travel by comfortable coach and
                                        witness your guide bring each UNESCO World Heritage Site
                                        to life with commentary. Plus, all admission tickets are
                                        included in the tour price.
                                    </p>
                                </div>

                                <div class="show-more__button">
                                    <button
                                        class="d-block text-14 text-blue-1 fw-500 underline mt-10"
                                        data-show-more-change-text="Show More, Show Less"
                                    >
                                        Show More
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h5 class="text-16 fw-500">Available languages</h5>
                            <div class="text-15 mt-10">
                                German, Chinese, Portuguese, Japanese, English, Italian,
                                Chinese, French, Spanish
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h5 class="text-16 fw-500">Cancellation policy</h5>
                            <div class="text-15 mt-10">
                                For a full refund, cancel at least 24 hours in advance of
                                the start date of the experience.
                            </div>
                        </div>

                        <div class="col-12">
                            <h5 class="text-16 fw-500">Highlights</h5>
                            <ul class="list-disc text-15 mt-10">
                                <li>
                                    Travel between the UNESCO World Heritage sites aboard a
                                    comfortable coach
                                </li>
                                <li>
                                    Explore with a guide to delve deeper into the history
                                </li>
                                <li>
                                    Great for history buffs and travelers with limited time
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-40 border-top-light">
                        <div class="row x-gap-40 y-gap-40 pt-40">
                            <div class="col-12">
                                <h3 class="text-22 fw-500">What's Included</h3>

                                <div class="row x-gap-40 y-gap-40 pt-20">
                                    <div class="col-md-6">
                                        <div class="text-dark-1 text-15">
                                            <i class="icon-check text-10 mr-10"></i> Entry ticket
                                            to Harry Potter Warner Bros Studio Tour London
                                        </div>
                                        <div class="text-dark-1 text-15">
                                            <i class="icon-check text-10 mr-10"></i> Return
                                            transfers in air-conditioned coach
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="text-dark-1 text-15">
                                            <i class="icon-close text-green-2 text-10 mr-10"></i>
                                            Food and drinks
                                        </div>
                                        <div class="text-dark-1 text-15">
                                            <i class="icon-close text-green-2 text-10 mr-10"></i>
                                            Gratuities
                                        </div>
                                        <div class="text-dark-1 text-15">
                                            <i class="icon-close text-green-2 text-10 mr-10"></i>
                                            Digital guide available in 10 different languages at
                                            additional cost
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="d-flex justify-end">
                        <div class="w-360 lg:w-full d-flex flex-column items-center">
                            <div
                                class="px-30 py-30 rounded-4 border-light bg-white shadow-4"
                            >
                                <div class="text-14 text-light-1">
                                    From
                                    <span class="text-20 fw-500 text-dark-1 ml-5">US$72</span>
                                </div>

                                <div class="row y-gap-20 pt-30">
                                    <div class="col-12">
                                        <div
                                            class="searchMenu-date px-20 py-10 border-light rounded-4 -right js-form-dd js-calendar js-calendar-el"
                                        >
                                            <div data-x-dd-click="searchMenu-date">
                                                <h4 class="text-15 fw-500 ls-2 lh-16">Date</h4>

                                                <div
                                                    class="capitalize text-15 text-light-1 ls-2 lh-16"
                                                >
                                                    <span class="js-first-date">Wed 2 Mar</span>
                                                    -
                                                    <span class="js-last-date">Fri 11 Apr</span>
                                                </div>
                                            </div>

                                            <div
                                                class="searchMenu-date__field shadow-2"
                                                data-x-dd="searchMenu-date"
                                                data-x-dd-toggle="-is-active"
                                            >
                                                <div class="bg-white px-30 py-30 rounded-4">
                                                    <div
                                                        class="elCalendar js-calendar-el-calendar"
                                                    ></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div
                                            class="searchMenu-guests px-20 py-10 border-light rounded-4 js-form-dd js-form-counters"
                                        >
                                            <div data-x-dd-click="searchMenu-guests">
                                                <h4 class="text-15 fw-500 ls-2 lh-16">
                                                    Number of travelers
                                                </h4>

                                                <div class="text-15 text-light-1 ls-2 lh-16">
                                                    <span class="js-count-adult">2</span> adults -
                                                    <span class="js-count-child">1</span> childeren -
                                                    <span class="js-count-room">1</span> room
                                                </div>
                                            </div>

                                            <div
                                                class="searchMenu-guests__field shadow-2"
                                                data-x-dd="searchMenu-guests"
                                                data-x-dd-toggle="-is-active"
                                            >
                                                <div class="bg-white px-30 py-30 rounded-4">
                                                    <div
                                                        class="row y-gap-10 justify-between items-center"
                                                    >
                                                        <div class="col-auto">
                                                            <div class="text-15 fw-500">Adults</div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div
                                                                class="d-flex items-center js-counter"
                                                                data-value-change=".js-count-adult"
                                                            >
                                                                <button
                                                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down"
                                                                >
                                                                    <i class="icon-minus text-12"></i>
                                                                </button>

                                                                <div
                                                                    class="flex-center size-20 ml-15 mr-15"
                                                                >
                                                                    <div class="text-15 js-count">2</div>
                                                                </div>

                                                                <button
                                                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up"
                                                                >
                                                                    <i class="icon-plus text-12"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="border-top-light mt-24 mb-24"></div>

                                                    <div
                                                        class="row y-gap-10 justify-between items-center"
                                                    >
                                                        <div class="col-auto">
                                                            <div class="text-15 lh-12 fw-500">
                                                                Children
                                                            </div>
                                                            <div class="text-14 lh-12 text-light-1 mt-5">
                                                                Ages 0 - 17
                                                            </div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div
                                                                class="d-flex items-center js-counter"
                                                                data-value-change=".js-count-child"
                                                            >
                                                                <button
                                                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down"
                                                                >
                                                                    <i class="icon-minus text-12"></i>
                                                                </button>

                                                                <div
                                                                    class="flex-center size-20 ml-15 mr-15"
                                                                >
                                                                    <div class="text-15 js-count">1</div>
                                                                </div>

                                                                <button
                                                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up"
                                                                >
                                                                    <i class="icon-plus text-12"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="border-top-light mt-24 mb-24"></div>

                                                    <div
                                                        class="row y-gap-10 justify-between items-center"
                                                    >
                                                        <div class="col-auto">
                                                            <div class="text-15 fw-500">Rooms</div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div
                                                                class="d-flex items-center js-counter"
                                                                data-value-change=".js-count-room"
                                                            >
                                                                <button
                                                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down"
                                                                >
                                                                    <i class="icon-minus text-12"></i>
                                                                </button>

                                                                <div
                                                                    class="flex-center size-20 ml-15 mr-15"
                                                                >
                                                                    <div class="text-15 js-count">1</div>
                                                                </div>

                                                                <button
                                                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up"
                                                                >
                                                                    <i class="icon-plus text-12"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button
                                            class="button -dark-1 py-15 px-35 h-60 col-12 rounded-4 bg-blue-1 text-white"
                                        >
                                            Book Now
                                        </button>
                                    </div>
                                </div>

                                <div class="d-flex items-center pt-20">
                                    <div class="size-40 flex-center bg-light-2 rounded-full">
                                        <i class="icon-heart text-16 text-green-2"></i>
                                    </div>
                                    <div class="text-14 lh-16 ml-10">
                                        94% of travelers recommend this experience
                                    </div>
                                </div>
                            </div>

                            <div class="px-30">
                                <div class="text-14 text-light-1 mt-30">
                                    Not sure? You can cancel this reservation up to 24 hours
                                    in advance for a full refund.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-40">
        <div class="container">
            <div class="pt-40 border-top-light">
                <div class="row x-gap-40 y-gap-40">
                    <div class="col-auto">
                        <h3 class="text-22 fw-500">Important information</h3>
                    </div>
                </div>

                <div class="row x-gap-40 y-gap-40 justify-between pt-20">
                    <div class="col-lg-4 col-md-6">
                        <div class="fw-500 mb-10">Inclusions</div>
                        <ul class="list-disc">
                            <li>Superior Coach, Wi-Fi and USB Charging On-board</li>
                            <li>Expert guide</li>
                            <li>Admission to Windsor Castle (if option selected)</li>
                            <li>Admission to Stonehenge</li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="fw-500 mb-10">Departure details</div>
                        <div class="text-15">
                            Departures from 01st April 2022: Tour departs at 8 am
                            (boarding at 7.30 am), Victoria Coach Station Gate 1-5
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="fw-500 mb-10">Know before you go</div>
                        <ul class="list-disc">
                            <li>Duration: 11h</li>
                            <li>Mobile tickets accepted</li>
                            <li>Instant confirmation</li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="fw-500 mb-10">Exclusions</div>
                        <ul class="list-disc">
                            <li>Hotel pick-up and drop-off</li>
                            <li>Gratuities</li>
                            <li>Lunch</li>
                        </ul>
                    </div>

                    <div class="col-12">
                        <div class="fw-500 mb-10">Additional information</div>
                        <ul class="list-disc">
                            <li>Confirmation will be received at time of booking</li>
                            <li>
                                Departs at 8am (boarding at 7.30am), Victoria Coach Station
                                Gate 1-5, 164 Buckingham Palace Road, London, SW1W 9TP
                            </li>
                            <li>
                                As Windsor Castle is a working royal palace, sometimes the
                                entire Castle or the State Apartments within the Castle need
                                to be closed at short notice. (if selected this option)
                            </li>
                            <li>
                                Stonehenge is closed on 21 June due to the Summer Solstice.
                                During this time, we will instead visit the Avebury Stone
                                Circle.
                            </li>
                            <li>Please note: the tour itinerary and order may change</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-40 mb-40">
        <div class="border-top-light"></div>
    </div>

    <section class="mb-40">
        <div class="container">
            <h3 class="text-22 fw-500 mb-20">Activity's Location</h3>

            <div class="map rounded-4 map-500 js-map-single"></div>
        </div>
    </section>
@endsection

