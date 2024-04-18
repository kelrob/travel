@extends('app')

@include('layouts.partials.head')

@section('title', 'GTWTravels - Home')

@section('header')
    @include('layouts.partials.header_transparent')
@endsection

@section('content')
    <section data-anim-wrap class="masthead -type-10" style="background-color: #0d2857">
        <div class="container-1500">
            <div class="row" style="margin-top: -10%;">
                <div class="col-lg-auto">
                    <div class="masthead__content text-center">
                        <h1
                            data-anim-child="slide-up delay-1"
                            class="text-60 lg:text-40 sm:text-30 text-white"
                        >
                            Find Next Place To Visit
                        </h1>
                        <p data-anim-child="slide-up delay-2" class="mt-5 text-white">
                            Discover amazing places at exclusive deals
                        </p>

                        <div data-anim-child="slide-up delay-3">
                            <div class="row y-gap-20 items-center pt-40" style="margin-top: 5%; ">
                                <div class="col-auto">
                                    <div class="dropdown js-dropdown js-return-active">
                                        <div
                                            class="dropdown__button d-flex items-center text-15"
                                            data-el-toggle=".js-return-toggle"
                                            data-el-toggle-active=".js-return-active"
                                        >
                                            <span class="js-dropdown-title text-white">Round Trip</span>
                                            <i class="icon icon-chevron-sm-down text-7 text-white ml-10"></i>
                                        </div>

                                        <div
                                            class="toggle-element -dropdown js-click-dropdown js-return-toggle"
                                        >
                                            <div class="text-14 y-gap-15 js-dropdown-list">
                                                <div>
                                                    <a href="#" class="d-block js-dropdown-link"
                                                    >Round Trip</a
                                                    >
                                                </div>

                                                <div>
                                                    <a href="#" class="d-block js-dropdown-link"
                                                    >One Way</a
                                                    >
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="dropdown js-dropdown js-economy-active">
                                        <div
                                            class="dropdown__button d-flex items-center text-15"
                                            data-el-toggle=".js-economy-toggle"
                                            data-el-toggle-active=".js-economy-active"
                                        >
                                            <span class="js-dropdown-title text-white">Economy</span>
                                            <i class="icon icon-chevron-sm-down text-white text-7 ml-10"></i>
                                        </div>

                                        <div
                                            class="toggle-element -dropdown js-click-dropdown js-economy-toggle"
                                        >
                                            <div class="text-14 y-gap-15 js-dropdown-list">
                                                <div>
                                                    <a href="#" class="d-block js-dropdown-link"
                                                    >Economy</a
                                                    >
                                                </div>

                                                <div>
                                                    <a href="#" class="d-block js-dropdown-link"
                                                    >Middle</a
                                                    >
                                                </div>

                                                <div>
                                                    <a href="#" class="d-block js-dropdown-link"
                                                    >Business</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="dropdown js-dropdown js-bags-active">
                                        <div
                                            class="dropdown__button d-flex items-center text-15"
                                            data-el-toggle=".js-bags-toggle"
                                            data-el-toggle-active=".js-bags-active"
                                        >
                                            <span class="js-dropdown-title text-white">0 Bags</span>
                                            <i class="icon icon-chevron-sm-down text-white text-7 ml-10"></i>
                                        </div>

                                        <div
                                            class="toggle-element -dropdown js-click-dropdown js-bags-toggle"
                                        >
                                            <div class="text-14 y-gap-15 js-dropdown-list">
                                                <div>
                                                    <a href="#" class="d-block js-dropdown-link"
                                                    >0 Bags</a
                                                    >
                                                </div>

                                                <div>
                                                    <a href="#" class="d-block js-dropdown-link"
                                                    >1 Bag</a
                                                    >
                                                </div>

                                                <div>
                                                    <a href="#" class="d-block js-dropdown-link"
                                                    >2 Bags</a
                                                    >
                                                </div>

                                                <div>
                                                    <a href="#" class="d-block js-dropdown-link"
                                                    >3 Bags</a
                                                    >
                                                </div>

                                                <div>
                                                    <a href="#" class="d-block js-dropdown-link"
                                                    >4 Bags</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="mainSearch -col-4 -w-1070 bg-white shadow-1 rounded-4 pr-20 py-20 lg:px-20 lg:pt-5 lg:pb-20 mt-15"
                            >
                                <div class="button-grid items-center">
                                    <div
                                        class="searchMenu-loc px-24 lg:py-20 lg:px-0 js-form-dd js-liverSearch"
                                    >
                                        <div data-x-dd-click="searchMenu-loc">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">Flying From</h4>

                                            <div class="text-15 text-light-1 ls-2 lh-16">
                                                <input
                                                    autocomplete="off"
                                                    type="search"
                                                    placeholder="City or Airport"
                                                    class="js-search js-dd-focus"
                                                />
                                            </div>
                                        </div>

                                        <div
                                            class="searchMenu-loc__field shadow-2 js-popup-window"
                                            data-x-dd="searchMenu-loc"
                                            data-x-dd-toggle="-is-active"
                                        >
                                            <div
                                                class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4"
                                            >
                                                <div class="y-gap-5 js-results">
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option"
                                                        >
                                                            <div class="d-flex">
                                                                <div
                                                                    class="icon-location-2 text-light-1 text-20 pt-4"
                                                                ></div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target"
                                                                    >
                                                                        London
                                                                    </div>
                                                                    <div
                                                                        class="text-14 lh-12 text-light-1 mt-5"
                                                                    >
                                                                        Greater London, United Kingdom
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>

                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option"
                                                        >
                                                            <div class="d-flex">
                                                                <div
                                                                    class="icon-location-2 text-light-1 text-20 pt-4"
                                                                ></div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target"
                                                                    >
                                                                        New York
                                                                    </div>
                                                                    <div
                                                                        class="text-14 lh-12 text-light-1 mt-5"
                                                                    >
                                                                        New York State, United States
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>

                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option"
                                                        >
                                                            <div class="d-flex">
                                                                <div
                                                                    class="icon-location-2 text-light-1 text-20 pt-4"
                                                                ></div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target"
                                                                    >
                                                                        Paris
                                                                    </div>
                                                                    <div
                                                                        class="text-14 lh-12 text-light-1 mt-5"
                                                                    >
                                                                        France
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>

                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option"
                                                        >
                                                            <div class="d-flex">
                                                                <div
                                                                    class="icon-location-2 text-light-1 text-20 pt-4"
                                                                ></div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target"
                                                                    >
                                                                        Madrid
                                                                    </div>
                                                                    <div
                                                                        class="text-14 lh-12 text-light-1 mt-5"
                                                                    >
                                                                        Spain
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>

                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option"
                                                        >
                                                            <div class="d-flex">
                                                                <div
                                                                    class="icon-location-2 text-light-1 text-20 pt-4"
                                                                ></div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target"
                                                                    >
                                                                        Santorini
                                                                    </div>
                                                                    <div
                                                                        class="text-14 lh-12 text-light-1 mt-5"
                                                                    >
                                                                        Greece
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="searchMenu-loc px-24 lg:py-20 lg:px-0 js-form-dd js-liverSearch"
                                    >
                                        <div data-x-dd-click="searchMenu-loc">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">Flying To</h4>

                                            <div class="text-15 text-light-1 ls-2 lh-16">
                                                <input
                                                    autocomplete="off"
                                                    type="search"
                                                    placeholder="City or Airport"
                                                    class="js-search js-dd-focus"
                                                />
                                            </div>
                                        </div>

                                        <div
                                            class="searchMenu-loc__field shadow-2 js-popup-window"
                                            data-x-dd="searchMenu-loc"
                                            data-x-dd-toggle="-is-active"
                                        >
                                            <div
                                                class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4"
                                            >
                                                <div class="y-gap-5 js-results">
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option"
                                                        >
                                                            <div class="d-flex">
                                                                <div
                                                                    class="icon-location-2 text-light-1 text-20 pt-4"
                                                                ></div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target"
                                                                    >
                                                                        London
                                                                    </div>
                                                                    <div
                                                                        class="text-14 lh-12 text-light-1 mt-5"
                                                                    >
                                                                        Greater London, United Kingdom
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>

                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option"
                                                        >
                                                            <div class="d-flex">
                                                                <div
                                                                    class="icon-location-2 text-light-1 text-20 pt-4"
                                                                ></div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target"
                                                                    >
                                                                        New York
                                                                    </div>
                                                                    <div
                                                                        class="text-14 lh-12 text-light-1 mt-5"
                                                                    >
                                                                        New York State, United States
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>

                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option"
                                                        >
                                                            <div class="d-flex">
                                                                <div
                                                                    class="icon-location-2 text-light-1 text-20 pt-4"
                                                                ></div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target"
                                                                    >
                                                                        Paris
                                                                    </div>
                                                                    <div
                                                                        class="text-14 lh-12 text-light-1 mt-5"
                                                                    >
                                                                        France
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>

                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option"
                                                        >
                                                            <div class="d-flex">
                                                                <div
                                                                    class="icon-location-2 text-light-1 text-20 pt-4"
                                                                ></div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target"
                                                                    >
                                                                        Madrid
                                                                    </div>
                                                                    <div
                                                                        class="text-14 lh-12 text-light-1 mt-5"
                                                                    >
                                                                        Spain
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>

                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option"
                                                        >
                                                            <div class="d-flex">
                                                                <div
                                                                    class="icon-location-2 text-light-1 text-20 pt-4"
                                                                ></div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target"
                                                                    >
                                                                        Santorini
                                                                    </div>
                                                                    <div
                                                                        class="text-14 lh-12 text-light-1 mt-5"
                                                                    >
                                                                        Greece
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="searchMenu-date px-24 lg:py-20 lg:px-0 js-form-dd js-calendar js-calendar-el"
                                    >
                                        <div data-x-dd-click="searchMenu-date">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">Depart</h4>

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

                                    <div
                                        class="searchMenu-date px-24 lg:py-20 lg:px-0 js-form-dd js-calendar js-calendar-el"
                                    >
                                        <div data-x-dd-click="searchMenu-date">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">Return</h4>

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

                                    <div
                                        class="searchMenu-guests px-24 lg:py-20 lg:px-0 js-form-dd js-form-counters"
                                    >
                                        <div data-x-dd-click="searchMenu-guests">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">Travellers</h4>

                                            <div class="text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-count-adult">2</span> adults -
                                                <span class="js-count-child">1</span> childeren
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

                                                            <div class="flex-center size-20 ml-15 mr-15">
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
                                                        <div class="text-15 lh-12 fw-500">Children</div>
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

                                                            <div class="flex-center size-20 ml-15 mr-15">
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

                                            </div>
                                        </div>
                                    </div>

                                    <div class="button-item">
                                        <button
                                            id="searchBtn"
                                            class="mainSearch__submit button -blue-1 py-15 px-35 h-60 col-12 rounded-4 bg-dark-1 text-white"
                                            style="background-color: #7c2e1c !important;"
                                            onclick="window.location.href = '{{@route('flights')}}';"
                                        >
                                            <i class="icon-search text-20 mr-10"></i>
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-anim-child="slide-left delay-6"
                 class="masthead__image masthead-slider overflow-x-hidden js-masthead-slider-4 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden is-in-view">
                <div class="row" style="margin-top: -20%;">
                    <div class="col-auto" id="img">
                        <img
                            src="https://images.pexels.com/photos/1154638/pexels-photo-1154638.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                            alt="image"
                        />
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-md">
        <div class="container">
            <div data-anim="slide-up" class="row y-gap-20 justify-between items-end">
                <div class="col-auto">
                    <div class="sectionTitle -md">
                        <h2 class="sectionTitle__title">Popular Travel Destinations</h2>
                        <p class="sectionTitle__text mt-5 sm:mt-0">
                            These popular destinations have a lot to offer
                        </p>
                    </div>
                </div>

                <div class="col-auto md:d-none">
                    <a href="#" class="button -md -blue-1 bg-blue-1-05 text-blue-1">
                        <!-- View All Destinations -->
                        Start Booking
                        <div class="icon-arrow-top-right ml-15"></div>
                    </a>
                </div>
            </div>

            <div class="relative pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar
                 data-slider-cols="base-2 xl-4 lg-3 md-2 sm-2 base-1" data-anim="slide-up">
                <div class="swiper-wrapper">
                    @foreach($destinations as $destination)
                        @php
                            $slug = Illuminate\Support\Str::slug($destination->name, '-');
                        @endphp
                        <div class="swiper-slide">
                            <a href="{{@route('destination-info', ['id' => $destination->id, 'slug' => $slug])}}"
                               class="citiesCard -type-1 d-block rounded-4">
                                <div class="citiesCard__image ratio ratio-3:4">
                                    <img src="#"
                                         data-src="{{$destination->image}}"
                                         alt="image"
                                         class="js-lazy"/>
                                </div>

                                <div
                                    class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                                    <div class="citiesCard__bg"></div>

                                    <div class="citiesCard__top">
                                        <div class="text-14 text-white">
                                            {{$destination->hotel_count}} Hotel - {{$destination->tour_count}} Tours
                                            - {{$destination->activity_count}} Activity
                                        </div>
                                    </div>

                                    <div class="citiesCard__bottom">
                                        <h4 class="text-26 md:text-20 lh-13 text-white mb-20">
                                            {{$destination->name}}
                                        </h4>
                                        <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">
                                            Discover
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>

                <button
                    class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-prev">
                    <i class="icon icon-chevron-left text-12"></i>
                </button>

                <button
                    class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-next">
                    <i class="icon icon-chevron-right text-12"></i>
                </button>

                <div class="slider-scrollbar bg-light-2 mt-40 sm:d-none js-scrollbar"></div>

                <div class="row pt-20 d-none md:d-block">
                    <div class="col-auto">
                        <div class="d-inline-block">
                            <a href="#" class="button -md -blue-1 bg-blue-1-05 text-blue-1">
                                View All Destinations
                                <div class="icon-arrow-top-right ml-15"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    <section class="layout-pt-md layout-pb-md">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row y-gap-20">--}}
    {{--                <div data-anim="slide-up" class="col-md-6">--}}
    {{--                    <div class="ctaCard -type-1 rounded-4">--}}
    {{--                        <div class="ctaCard__image ratio ratio-63:55">--}}
    {{--                            <img class="img-ratio js-lazy" src="#"--}}
    {{--                                data-src="{{ asset('img/backgrounds/1.png') }}" alt="image" />--}}
    {{--                        </div>--}}

    {{--                        <div class="ctaCard__content py-70 px-70 lg:py-30 lg:px-30">--}}
    {{--                            <h4 class="text-40 lg:text-26 text-white">--}}
    {{--                                Things to do on<br />--}}
    {{--                                your trip--}}
    {{--                            </h4>--}}

    {{--                            <div class="d-inline-block mt-30">--}}
    {{--                                <a href="activity-single"--}}
    {{--                                    class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Experiences</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div data-anim="slide-up delay-1" class="col-md-6">--}}
    {{--                    <div class="ctaCard -type-1 rounded-4">--}}
    {{--                        <div class="ctaCard__image ratio ratio-63:55">--}}
    {{--                            <img class="img-ratio js-lazy" src="#"--}}
    {{--                                data-src="{{ asset('img/backgrounds/2.png') }}" alt="image" />--}}
    {{--                        </div>--}}

    {{--                        <div class="ctaCard__content py-70 px-70 lg:py-30 lg:px-30">--}}
    {{--                            <div class="text-15 fw-500 text-white mb-10">--}}
    {{--                                Enjoy Summer Deals--}}
    {{--                            </div>--}}

    {{--                            <h4 class="text-40 lg:text-26 text-white">--}}
    {{--                                Up to 70% Discount!--}}
    {{--                            </h4>--}}

    {{--                            <div class="d-inline-block mt-30">--}}
    {{--                                <a href="#" class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Learn--}}
    {{--                                    More</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <section class="layout-pt-md layout-pb-md">
        <div data-anim="slide-up delay-1" class="container">
            <div class="row y-gap-10 justify-between items-end">
                <div class="col-auto">
                    <div class="sectionTitle -md">
                        <h2 class="sectionTitle__title">Recommended Tour</h2>
                        <p class="sectionTitle__text mt-5 sm:mt-0">
                            Our Selections to escape from the troubles of life
                        </p>
                    </div>
                </div>

                <div class="col-sm-auto">
                    <!-- <div class="dropdown js-dropdown js-hotel-active">
                    <div
                      class="dropdown__button d-flex items-center rounded-4 border-light justify-between text-16 fw-500 px-20 h-50 w-140 sm:w-full text-14"
                      data-el-toggle=".js-hotel-toggle"
                      data-el-toggle-active=".js-hotel-active"
                    >
                      <span class="js-dropdown-title">Hotel</span>
                      <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                    </div>

                    <div
                      class="toggle-element -dropdown js-click-dropdown js-hotel-toggle"
                    >
                      <div class="text-14 y-gap-15 js-dropdown-list">
                        <div>
                          <a href="#" class="d-block js-dropdown-link">Animation</a>
                        </div>

                        <div>
                          <a href="#" class="d-block js-dropdown-link">Design</a>
                        </div>

                        <div>
                          <a href="#" class="d-block js-dropdown-link"
                            >Illustration</a
                          >
                        </div>

                        <div>
                          <a href="#" class="d-block js-dropdown-link">Lifestyle</a>
                        </div>

                        <div>
                          <a href="#" class="d-block js-dropdown-link">Business</a>
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>
            </div>

            <div class="relative overflow-hidden pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar
                 data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1" data-nav-prev="js-hotels-prev"
                 data-pagination="js-hotels-pag" data-nav-next="js-hotels-next">
                <div class="swiper-wrapper">
                    @foreach($tours as $tour)
                        @php
                            $slug = Illuminate\Support\Str::slug($tour->title, '-');
                        @endphp
                        <div class="swiper-slide">
                            <a href="{{@route('tour-details', ['id' => $tour->id, 'slug' => $slug])}}"
                               class="hotelsCard -type-1">
                                <div class="hotelsCard__image">
                                    <div class="cardImage ratio ratio-1:1">
                                        <div class="cardImage__content">
                                            <img class="rounded-4 col-12"
                                                 src="{{$tour->featured_image}}"
                                                 alt="image"/>
                                        </div>

                                        <div class="cardImage__leftBadge">
                                            <div
                                                class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                                Breakfast included
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hotelsCard__content mt-10">
                                    <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                                        <span>{{$tour->title}}</span>
                                    </h4>

                                    <p class="text-light-1 lh-14 text-14 mt-5">
                                        {{$tour->location}}
                                    </p>

                                    <div class="d-flex items-center mt-20">
                                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">
                                            4.8
                                        </div>
                                        <div class="text-14 text-dark-1 fw-500 ml-10">
                                            Exceptional
                                        </div>
                                        <div class="text-14 text-light-1 ml-10">
                                            3,014 reviews
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <div class="fw-500">
                                            Starting from
                                            <span
                                                class="text-blue-1">&#8358;{{number_format($tour->price / 100, 2)}}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>

                <div class="d-flex x-gap-15 items-center justify-center sm:justify-start pt-40 sm:pt-20">
                    <div class="col-auto">
                        <button class="d-flex items-center text-24 arrow-left-hover js-hotels-prev">
                            <i class="icon icon-arrow-left"></i>
                        </button>
                    </div>

                    <div class="col-auto">
                        <div class="pagination -dots text-border js-hotels-pag"></div>
                    </div>

                    <div class="col-auto">
                        <button class="d-flex items-center text-24 arrow-right-hover js-hotels-next">
                            <i class="icon icon-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
        <div data-anim-wrap class="container">
            <div class="row y-gap-20 justify-between">
                <div data-anim-child="slide-up delay-1" class="col-lg-3 col-sm-6">
                    <div class="featureIcon -type-1">
                        <div class="d-flex justify-center">
                            <img src="#" data-src="{{ asset('img/featureIcons/1/1.svg') }}" alt="image"
                                 class="js-lazy"/>
                        </div>

                        <div class="text-center mt-30">
                            <h4 class="text-18 fw-500">Best Price Guarantee</h4>
                            <p class="text-15 mt-10">
                                We offer the best Prices you can find anywhere.
                            </p>
                        </div>
                    </div>
                </div>

                <div data-anim-child="slide-up delay-2" class="col-lg-3 col-sm-6">
                    <div class="featureIcon -type-1">
                        <div class="d-flex justify-center">
                            <img src="#" data-src="{{ asset('img/featureIcons/1/2.svg') }}" alt="image"
                                 class="js-lazy"/>
                        </div>

                        <div class="text-center mt-30">
                            <h4 class="text-18 fw-500">Easy & Quick Booking</h4>
                            <p class="text-15 mt-10">
                                Seamless and smooth Booking Experience.
                            </p>
                        </div>
                    </div>
                </div>

                <div data-anim-child="slide-up delay-3" class="col-lg-3 col-sm-6">
                    <div class="featureIcon -type-1">
                        <div class="d-flex justify-center">
                            <img src="#" data-src="{{ asset('img/featureIcons/1/3.svg') }}" alt="image"
                                 class="js-lazy"/>
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

    <section class="layout-pt-lg layout-pb-lg bg-blue-2">
        <div data-anim-wrap class="container">
            <div class="row y-gap-40 justify-between">
                <div data-anim-child="slide-up delay-1" class="col-xl-5 col-lg-6">
                    <h2 class="text-30">
                        What our customers are<br/>
                        saying us?
                    </h2>
                    <p class="mt-20">
                        Still in doubt of what we do and not sure if you are in the right
                        place? See what our customers are saying about us. You are
                        definitely next. Let's make it happen.
                    </p>

                    <div class="row y-gap-30 pt-60 lg:pt-40">
                        <div class="col-sm-5 col-6">
                            <div class="text-30 lh-15 fw-600">13m+</div>
                            <div class="text-light-1 lh-15">Happy People</div>
                        </div>

                        <div class="col-sm-5 col-6">
                            <div class="text-30 lh-15 fw-600">4.88</div>
                            <div class="text-light-1 lh-15">Overall rating</div>

                            <div class="d-flex x-gap-5 items-center pt-10">
                                <div class="icon-star text-blue-1 text-10"></div>

                                <div class="icon-star text-blue-1 text-10"></div>

                                <div class="icon-star text-blue-1 text-10"></div>

                                <div class="icon-star text-blue-1 text-10"></div>

                                <div class="icon-star text-blue-1 text-10"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-anim-child="slide-up delay-2" class="col-lg-6">
                    <div class="overflow-hidden js-testimonials-slider-3" data-scrollbar>
                        <div class="swiper-wrapper">
                            @foreach($testimonials as $testimonial)
                                <div class="swiper-slide" data-swiper-autoplay="2000">
                                    <div class="row items-center x-gap-30 y-gap-20">
                                        <div class="col-auto">
                                            <img src="#"
                                                 data-src="{{!$testimonial->image ? @asset('img/user.png') : $testimonial->image}}"
                                                 style="max-height: 70px; border-radius: 40px" alt="image"
                                                 class="js-lazy"/>
                                        </div>

                                        <div class="col-auto">
                                            <h5 class="text-16 fw-500">{{$testimonial->name}}</h5>
                                            <div class="text-15 text-light-1 lh-15">
                                                {{$testimonial->profession}}
                                            </div>
                                        </div>
                                    </div>

                                    <p class="text-18 fw-500 text-dark-1 mt-30 sm:mt-20">
                                        {!! nl2br($testimonial->testimonial) !!}
                                    </p>
                                </div>
                            @endforeach

                        </div>

                        <div class="d-flex items-center js-testimonials-slider-pag">
                            <div class="text-dark-1 fw-500 js-current">01</div>
                            <div class="slider-scrollbar bg-border ml-20 mr-20 w-max-300 js-scrollbar"></div>
                            <div class="text-dark-1 fw-500 js-all">05</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-md">
        <div data-anim-wrap class="container">
            <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
                <div class="col-auto">
                    <div class="sectionTitle -md">
                        <h2 class="sectionTitle__title">Our Services for you</h2>
                        <p class="sectionTitle__text mt-5 sm:mt-0">
                            What we are all about - What we do
                        </p>
                    </div>
                </div>
            </div>

            <div class="row y-gap-30 pt-60 lg:pt-40">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-blue-1-05 rounded-4 px-50 py-40">
                        <div class="size-70 bg-white rounded-full flex-center">
                            <img src="{{ asset('img/airplane.png') }}" alt="icon"/>
                        </div>

                        <div class="mt-24">
                            <div class="text-18 fw-500">Flights Services</div>
                            <p class="mt-5">
                                Providing seamless and efficient assistance for all aspects of air travel.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="bg-blue-1-05 rounded-4 px-50 py-40">
                        <div class="size-70 bg-white rounded-full flex-center">
                            <img src="{{ asset('img/mortarboard.png') }}" alt="icon"/>
                        </div>

                        <div class="mt-24">
                            <div class="text-18 fw-500">School Abroad</div>
                            <p class="mt-5">
                                Guiding students towards international academic opportunities.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="bg-blue-1-05 rounded-4 px-50 py-40">
                        <div class="size-70 bg-white rounded-full flex-center">
                            <img src="{{ asset('img/tour-guide.png') }}" alt="icon"/>
                        </div>

                        <div class="mt-24">
                            <div class="text-18 fw-500">Tourism</div>
                            <p class="mt-5">
                                Crafting unforgettable travel experiences worldwide.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="bg-blue-1-05 rounded-4 px-50 py-40">
                        <div class="size-70 bg-white rounded-full flex-center">
                            <img src="{{ asset('img/event.png') }}" alt="icon"/>
                        </div>

                        <div class="mt-24">
                            <div class="text-18 fw-500">Visa</div>
                            <p class="mt-5">
                                Simplifying the process of obtaining travel documentation for international journeys.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="bg-blue-1-05 rounded-4 px-50 py-40">
                        <div class="size-70 bg-white rounded-full flex-center">
                            <img src="{{ asset('img/pages/help/icons/5.svg') }}" alt="icon"/>
                        </div>

                        <div class="mt-24">
                            <div class="text-18 fw-500">Expedite U.S Appointment</div>
                            <p class="mt-5">
                                Streamlining the process for urgent visa appointments to the United States.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="bg-blue-1-05 rounded-4 px-50 py-40">
                        <div class="size-70 bg-white rounded-full flex-center">
                            <img src="{{ asset('img/pages/help/icons/6.svg') }}" alt="icon"/>
                        </div>

                        <div class="mt-24">
                            <div class="text-18 fw-500">Consultation</div>
                            <p class="mt-5">
                                Providing expert guidance and personalized advice for your travel needs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-40">
        <div class="container">
            <div class="row y-gap-30 items-center pt-40 sm:pt-20">
                <div class="col-xl-4">
                    <div class="row y-gap-30 text-dark-1">
                        <div class="col-sm-5 col-6">
                            <div class="text-30 lh-15 fw-600">13m+</div>
                            <div class="lh-15">Happy People</div>
                        </div>

                        <div class="col-sm-5 col-6">
                            <div class="text-30 lh-15 fw-600">4.88</div>
                            <div class="lh-15">Overall rating</div>

                            <div class="d-flex x-gap-5 items-center pt-10">
                                <div class="icon-star text-dark-1 text-10"></div>

                                <div class="icon-star text-dark-1 text-10"></div>

                                <div class="icon-star text-dark-1 text-10"></div>

                                <div class="icon-star text-dark-1 text-10"></div>

                                <div class="icon-star text-dark-1 text-10"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="row y-gap-30 justify-between items-center">
                        <div class="col-md-auto col-sm-6">
                            <div class="d-flex justify-center">
                                <img src="https://download.logo.wine/logo/British_Airways/British_Airways-Logo.wine.png"
                                     style="max-width: 150px;" alt="image"/>
                            </div>
                        </div>

                        <div class="col-md-auto col-sm-6">
                            <div class="d-flex justify-center">
                                <img src="https://download.logo.wine/logo/Lufthansa/Lufthansa-Logo.wine.png"
                                     style="width: 150px;" alt="image"/>
                            </div>
                        </div>

                        <div class="col-md-auto col-sm-6">
                            <div class="d-flex justify-center">
                                <img
                                    src="https://global.discourse-cdn.com/infiniteflight/original/3X/c/0/c0bd00655c561aa489f269af91bb67da98f37a7e.png"
                                    style="width: 150px;" alt="image"/>
                            </div>
                        </div>

                        <div class="col-md-auto col-sm-6">
                            <div class="d-flex justify-center">
                                <img src="https://logolook.net/wp-content/uploads/2021/01/Air-France-Logo-1976.png"
                                     style="width: 150px;" alt="image"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
