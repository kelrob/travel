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
                            <div class="">La Tropicana</div>
                        </div>
                        <div class="col-auto">
                            <div class="">></div>
                        </div>
                        <div class="col-auto">
                            <div class="text-dark-1">Lagos State</div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-auto">
                  <a href="#" class="text-14 text-blue-1 underline"
                    >All Hotel in London</a
                  >
                </div> -->
            </div>
        </div>
    </section>

    <section class="pt-40">
        <div class="container">
            <div class="row y-gap-20 justify-between items-end">
                <div class="col-auto">
                    <div class="row x-gap-20 items-center">
                        <div class="col-auto">
                            <h1 class="text-30 sm:text-25 fw-600">La Tropicana</h1>
                        </div>

                        <div class="col-auto">
                            <i class="icon-star text-10 text-yellow-1"></i>

                            <i class="icon-star text-10 text-yellow-1"></i>

                            <i class="icon-star text-10 text-yellow-1"></i>

                            <i class="icon-star text-10 text-yellow-1"></i>

                            <i class="icon-star text-10 text-yellow-1"></i>
                        </div>
                    </div>

                    <div class="row x-gap-20 y-gap-20 items-center">
                        <div class="col-auto">
                            <div class="d-flex items-center text-15 text-light-1">
                                <i class="icon-location-2 text-16 mr-5"></i>
                                Lagos State, Nigeria
                            </div>
                        </div>

                        <!-- <div class="col-auto">
                          <button
                            data-x-click="mapFilter"
                            class="text-blue-1 text-15 underline"
                          >
                            Show on map
                          </button>
                        </div> -->
                    </div>
                </div>

                <div class="col-auto">
                    <div class="row x-gap-15 y-gap-15 items-center">
                        <div class="col-auto">
                            <div class="text-14">
                                From
                                <span class="text-22 text-dark-1 fw-500"
                                >&#8358;72,000</span
                                >
                            </div>
                        </div>

                        <div class="col-auto">
                            <a
                                href="#"
                                class="button h-50 px-24 -dark-1 bg-blue-1 text-white"
                            >
                                Book Now
                                <div class="icon-arrow-top-right ml-15"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="galleryGrid -type-1 pt-30">
                <div class="galleryGrid__item relative d-flex">
                    <img src="{{asset('img/gallery/1/1.png')}}" alt="image" class="rounded-4" />

                    <div class="absolute px-20 py-20 col-12 d-flex justify-end">
                        <button
                            class="button -blue-1 size-40 rounded-full flex-center bg-white text-dark-1"
                        >
                            <i class="icon-heart text-16"></i>
                        </button>
                    </div>
                </div>

                <div class="galleryGrid__item">
                    <img src="{{asset('img/gallery/1/2.png')}}" alt="image" class="rounded-4" />
                </div>

                <div class="galleryGrid__item relative d-flex">
                    <img src="{{asset('img/gallery/1/3.png')}}" alt="image" class="rounded-4" />

                    <div class="absolute h-full col-12 flex-center">
                        <a
                            href="https://www.youtube.com/watch?v=ANYfx4-jyqY"
                            class="button -blue-1 size-40 rounded-full flex-center bg-white text-dark-1 js-gallery"
                            data-gallery="gallery1"
                        >
                            <i class="icon-play text-16"></i>
                        </a>
                    </div>
                </div>

                <div class="galleryGrid__item">
                    <img src="{{asset('img/gallery/1/4.png')}}" alt="image" class="rounded-4" />
                </div>

                <div class="galleryGrid__item relative d-flex">
                    <img src="{{asset('img/gallery/1/5.png')}}" alt="image" class="rounded-4" />

                    <div
                        class="absolute px-10 py-10 col-12 h-full d-flex justify-end items-end"
                    >
                        <a
                            href="{{asset('img/gallery/1/1.png')}}"
                            class="button -blue-1 px-24 py-15 bg-white text-dark-1 js-gallery"
                            data-gallery="gallery2"
                        >
                            See other Pictires
                        </a>
                        <a
                            href="{{asset('img/gallery/1/2.png')}}"
                            class="js-gallery"
                            data-gallery="gallery2"
                        ></a>
                        <a
                            href="{{asset('img/gallery/1/3.png')}}"
                            class="js-gallery"
                            data-gallery="gallery2"
                        ></a>
                        <a
                            href="{{asset('img/gallery/1/4.png')}}"
                            class="js-gallery"
                            data-gallery="gallery2"
                        ></a>
                        <a
                            href="{{asset('img/gallery/1/5.png')}}"
                            class="js-gallery"
                            data-gallery="gallery2"
                        ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-30">
        <div class="container">
            <div class="row y-gap-30">
                <div class="col-xl-8">
                    <div class="row y-gap-40">
                        <div class="col-12">
                            <h3 class="text-22 fw-500">Property highlights</h3>
                            <div class="row y-gap-20 pt-30">
                                <div class="col-lg-3 col-6">
                                    <div class="text-center">
                                        <i class="icon-city text-24 text-blue-1"></i>
                                        <div class="text-15 lh-1 mt-10">La Tropicana</div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">
                                    <div class="text-center">
                                        <i class="icon-bell-ring text-24 text-blue-1"></i>
                                        <div class="text-15 lh-1 mt-10">Great Kitchen</div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">
                                    <div class="text-center">
                                        <i class="icon-tv text-24 text-blue-1"></i>
                                        <div class="text-15 lh-1 mt-10">Great View</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="overview" class="col-12">
                            <h3 class="text-22 fw-500 pt-40 border-top-light">
                                LA CAMPAGNE TROPICANA RESORT
                            </h3>
                            <p class="text-dark-1 text-15 mt-20">
                                African themed Forest, River and Beach Resort located in
                                Ibeju Lekki area of Lagos, Nigeria. It’s a beautiful resort
                                for vacation, staycation, retreat and for games. La
                                Campagne Tropicana Beach Resort is focused on presenting
                                African hospitality and culture in a cosmopolitan manner.
                            </p>

                            <!-- <a
                              href="#"
                              class="d-block text-14 text-blue-1 fw-500 underline mt-10"
                              >Show More</a
                            > -->
                        </div>

                        <div class="col-12">
                            <h3 class="text-22 fw-500 pt-40 border-top-light">
                                Most Popular Facilities
                            </h3>
                            <div class="row y-gap-10 pt-20">
                                <div class="col-md-5">
                                    <div class="d-flex x-gap-15 y-gap-15 items-center">
                                        <i class="icon-no-smoke"></i>
                                        <div class="text-15">Non-smoking rooms</div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="d-flex x-gap-15 y-gap-15 items-center">
                                        <i class="icon-wifi"></i>
                                        <div class="text-15">Free WiFi</div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="d-flex x-gap-15 y-gap-15 items-center">
                                        <i class="icon-parking"></i>
                                        <div class="text-15">Parking</div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="d-flex x-gap-15 y-gap-15 items-center">
                                        <i class="icon-kitchen"></i>
                                        <div class="text-15">Kitchen</div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="d-flex x-gap-15 y-gap-15 items-center">
                                        <i class="icon-living-room"></i>
                                        <div class="text-15">Living Area</div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="d-flex x-gap-15 y-gap-15 items-center">
                                        <i class="icon-shield"></i>
                                        <div class="text-15">Safety &amp; security</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="px-24 py-20 rounded-4 bg-green-1">
                                <div class="row x-gap-20 y-gap-20 items-center">
                                    <div class="col-auto">
                                        <div class="flex-center size-60 rounded-full bg-white">
                                            <i class="icon-star text-yellow-1 text-30"></i>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <h4 class="text-18 lh-15 fw-500">
                                            This property is in high demand!
                                        </h4>
                                        <div class="text-15 lh-15">
                                            7 travelers have booked today.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-40">
        <div class="container">
            <div class="row x-gap-40 y-gap-40">
                <div class="col-12">
                    <h3 class="text-22 fw-500">Facilities of La Tropicana</h3>

                    <div class="row x-gap-40 y-gap-40 pt-20">
                        <div class="col-xl-4">
                            <div class="row y-gap-30">
                                <div class="col-12">
                                    <div class="">
                                        <div class="d-flex items-center text-16 fw-500">
                                            <i class="icon-home text-20 mr-10"></i>
                                            La champagne watersports activities rates
                                        </div>

                                        <ul class="text-15 pt-10">
                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Boat cruise
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Canoe cruise
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Jet ski
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Swimming lessons
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Swimmind bike
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Retreat on the lagoon
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Kayaki
                                            </li>
                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Dining on water
                                            </li>
                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Tubing
                                            </li>
                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Water taxi
                                            </li>
                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Beach soccer
                                            </li>
                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Horse riding
                                            </li>
                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Private pools
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="row y-gap-30">
                                <div class="col-12">
                                    <div class="">
                                        <div class="d-flex items-center text-16 fw-500">
                                            <i class="icon-home text-20 mr-10"></i>
                                            La champagne Tropicana packages
                                        </div>

                                        <ul class="text-15 pt-10">
                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Easter package
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Daycation
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Corporate team bond
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Exclusive getaways
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Honeymoon packages
                                            </li>
                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Kamp afrika
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="row y-gap-30">
                                <div class="col-12">
                                    <div class="">
                                        <div class="d-flex items-center text-16 fw-500">
                                            <i class="icon-city-2 text-20 mr-10"></i>
                                            Accommodation in la champagne Tropicana resort
                                        </div>

                                        <ul class="text-15 pt-10">
                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Kodi
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Laba
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Exclusive kodi
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Oso
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Obailerigi
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Obailerigi with jacussi
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Obailerigi 3bed
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Obieze
                                            </li>

                                            <li class="d-flex items-center">
                                                <i class="icon-check text-10 mr-20"></i>
                                                Anago
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="reviews"></div>
    <section class="pt-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-22 fw-500">Guest reviews</h3>
                </div>
            </div>

            <div class="row y-gap-30 items-center pt-20">
                <div class="col-lg-3">
                    <div class="flex-center rounded-4 min-h-250 bg-blue-1-05">
                        <div class="text-center">
                            <div class="text-60 md:text-50 fw-600 text-blue-1">4.8</div>
                            <div class="fw-500 lh-1">Exceptional</div>
                            <div class="text-14 text-light-1 lh-1 mt-5">
                                3,014 reviews
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="row y-gap-30">
                        <div class="col-md-4 col-sm-6">
                            <div class="">
                                <div class="d-flex items-center justify-between">
                                    <div class="text-15 fw-500">Location</div>
                                    <div class="text-15 text-light-1">9.4</div>
                                </div>

                                <div class="progressBar mt-10">
                                    <div class="progressBar__bg bg-blue-2"></div>
                                    <div
                                        class="progressBar__bar bg-dark-1"
                                        style="width: 90%"
                                    ></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="">
                                <div class="d-flex items-center justify-between">
                                    <div class="text-15 fw-500">Staff</div>
                                    <div class="text-15 text-light-1">9.4</div>
                                </div>

                                <div class="progressBar mt-10">
                                    <div class="progressBar__bg bg-blue-2"></div>
                                    <div
                                        class="progressBar__bar bg-dark-1"
                                        style="width: 90%"
                                    ></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="">
                                <div class="d-flex items-center justify-between">
                                    <div class="text-15 fw-500">Cleanliness</div>
                                    <div class="text-15 text-light-1">9.4</div>
                                </div>

                                <div class="progressBar mt-10">
                                    <div class="progressBar__bg bg-blue-2"></div>
                                    <div
                                        class="progressBar__bar bg-dark-1"
                                        style="width: 90%"
                                    ></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="">
                                <div class="d-flex items-center justify-between">
                                    <div class="text-15 fw-500">Value for money</div>
                                    <div class="text-15 text-light-1">9.4</div>
                                </div>

                                <div class="progressBar mt-10">
                                    <div class="progressBar__bg bg-blue-2"></div>
                                    <div
                                        class="progressBar__bar bg-dark-1"
                                        style="width: 90%"
                                    ></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="">
                                <div class="d-flex items-center justify-between">
                                    <div class="text-15 fw-500">Comfort</div>
                                    <div class="text-15 text-light-1">9.4</div>
                                </div>

                                <div class="progressBar mt-10">
                                    <div class="progressBar__bg bg-blue-2"></div>
                                    <div
                                        class="progressBar__bar bg-dark-1"
                                        style="width: 90%"
                                    ></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="">
                                <div class="d-flex items-center justify-between">
                                    <div class="text-15 fw-500">Facilities</div>
                                    <div class="text-15 text-light-1">9.4</div>
                                </div>

                                <div class="progressBar mt-10">
                                    <div class="progressBar__bg bg-blue-2"></div>
                                    <div
                                        class="progressBar__bar bg-dark-1"
                                        style="width: 90%"
                                    ></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="">
                                <div class="d-flex items-center justify-between">
                                    <div class="text-15 fw-500">Free WiFi</div>
                                    <div class="text-15 text-light-1">9.4</div>
                                </div>

                                <div class="progressBar mt-10">
                                    <div class="progressBar__bg bg-blue-2"></div>
                                    <div
                                        class="progressBar__bar bg-dark-1"
                                        style="width: 90%"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="border-top-light mt-30"></div>
    </div>

    <div id="facilities"></div>
@endsection
