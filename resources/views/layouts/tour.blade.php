@extends('app')
@include('layouts.partials.head')

@section('title', 'GTWTravels - Tours')

@section('header')
    @include('layouts.partials.header_blue')
@endsection

@section('content')
    <section class="pt-40 pb-40 bg-light-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h1 class="text-30 fw-600">Ongoing Tours</h1>
                        <p class="sectionTitle__text mt-5 sm:mt-0">
                            Below are our ongoing tour
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
        <div class="container">
            <div class="row y-gap-30">
                <div class="col-xl-12 col-lg-12">
                    <div class="row y-gap-10 items-center justify-between">
                        <div class="col-auto">
                            <div class="text-18">
                                <span class="fw-500">5 active</span> tours
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="row x-gap-20 y-gap-20">
                                <!-- <div class="col-auto">
                                  <button
                                    class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1"
                                  >
                                    <i class="icon-up-down text-14 mr-10"></i>
                                    Sort
                                  </button>
                                </div> -->

                                <!-- <div class="col-auto d-none lg:d-block">
                                  <button
                                    data-x-click="filterPopup"
                                    class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1"
                                  >
                                    <i class="icon-up-down text-14 mr-10"></i>
                                    Filter
                                  </button>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="mt-30"></div>

                    <div class="row y-gap-30">
                        <div class="col-12">
                            <div class="border-top-light pt-30">
                                <div class="row x-gap-20 y-gap-20">
                                    <div class="col-md-auto">
                                        <div
                                            class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4"
                                        >
                                            <div class="cardImage__content">
                                                <img
                                                    class="rounded-4 col-12"
                                                    src="https://live.staticflickr.com/960/40079593530_fce35b75ab_b.jpg"
                                                    alt="image"
                                                />
                                            </div>

                                            <div class="cardImage__wishlist">
                                                <button
                                                    class="button -blue-1 bg-white size-30 rounded-full shadow-2"
                                                >
                                                    <i class="icon-heart text-12"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="row x-gap-10 items-center">
                                            <div class="col-auto">
                                                <p class="text-14 lh-14 mb-5">6+ hours</p>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="size-3 rounded-full bg-light-1 mb-5"
                                                ></div>
                                            </div>
                                            <div class="col-auto">
                                                <p class="text-14 lh-14 mb-5">Full-day Tours</p>
                                            </div>
                                        </div>

                                        <h3 class="text-18 lh-16 fw-500">
                                            The Great Olumo Rock in the city of Abeokuta
                                        </h3>
                                        <p class="text-14 lh-14 mt-5">Abeokuta, Ogun State</p>

                                        <div class="text-14 lh-15 fw-500 mt-20">
                                            20th of February 2024
                                        </div>
                                        <div class="text-14 text-green-2 fw-500 lh-15 mt-5">
                                            Free cancellation
                                        </div>
                                    </div>

                                    <div class="col-md-auto text-right md:text-left">
                                        <div
                                            class="d-flex x-gap-5 items-center justify-end md:justify-start"
                                        >
                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>
                                        </div>

                                        <div class="text-14 lh-14 text-light-1 mt-10">
                                            14 reviews
                                        </div>

                                        <div class="text-14 text-light-1 mt-50 md:mt-20">
                                            From
                                        </div>
                                        <div class="text-22 lh-12 fw-600 mt-5">
                                            &#8358;72,000
                                        </div>
                                        <div class="text-14 text-light-1 mt-5">per adult</div>

                                        <a
                                            href="#"
                                            class="button -md -dark-1 bg-blue-1 text-white mt-24"
                                        >
                                            View Detail
                                            <div class="icon-arrow-top-right ml-15"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="border-top-light pt-30">
                                <div class="row x-gap-20 y-gap-20">
                                    <div class="col-md-auto">
                                        <div
                                            class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4"
                                        >
                                            <div class="cardImage__content">
                                                <img
                                                    class="rounded-4 col-12"
                                                    src="https://live.staticflickr.com/960/40079593530_fce35b75ab_b.jpg"
                                                    alt="image"
                                                />
                                            </div>

                                            <div class="cardImage__wishlist">
                                                <button
                                                    class="button -blue-1 bg-white size-30 rounded-full shadow-2"
                                                >
                                                    <i class="icon-heart text-12"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="row x-gap-10 items-center">
                                            <div class="col-auto">
                                                <p class="text-14 lh-14 mb-5">6+ hours</p>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="size-3 rounded-full bg-light-1 mb-5"
                                                ></div>
                                            </div>
                                            <div class="col-auto">
                                                <p class="text-14 lh-14 mb-5">Full-day Tours</p>
                                            </div>
                                        </div>

                                        <h3 class="text-18 lh-16 fw-500">
                                            The Great Olumo Rock in the city of Abeokuta
                                        </h3>
                                        <p class="text-14 lh-14 mt-5">Abeokuta, Ogun State</p>

                                        <div class="text-14 lh-15 fw-500 mt-20">
                                            20th of February 2024
                                        </div>
                                        <div class="text-14 text-green-2 fw-500 lh-15 mt-5">
                                            Free cancellation
                                        </div>
                                    </div>

                                    <div class="col-md-auto text-right md:text-left">
                                        <div
                                            class="d-flex x-gap-5 items-center justify-end md:justify-start"
                                        >
                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>
                                        </div>

                                        <div class="text-14 lh-14 text-light-1 mt-10">
                                            14 reviews
                                        </div>

                                        <div class="text-14 text-light-1 mt-50 md:mt-20">
                                            From
                                        </div>
                                        <div class="text-22 lh-12 fw-600 mt-5">
                                            &#8358;72,000
                                        </div>
                                        <div class="text-14 text-light-1 mt-5">per adult</div>

                                        <a
                                            href="#"
                                            class="button -md -dark-1 bg-blue-1 text-white mt-24"
                                        >
                                            View Detail
                                            <div class="icon-arrow-top-right ml-15"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="border-top-light pt-30">
                                <div class="row x-gap-20 y-gap-20">
                                    <div class="col-md-auto">
                                        <div
                                            class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4"
                                        >
                                            <div class="cardImage__content">
                                                <img
                                                    class="rounded-4 col-12"
                                                    src="https://live.staticflickr.com/960/40079593530_fce35b75ab_b.jpg"
                                                    alt="image"
                                                />
                                            </div>

                                            <div class="cardImage__wishlist">
                                                <button
                                                    class="button -blue-1 bg-white size-30 rounded-full shadow-2"
                                                >
                                                    <i class="icon-heart text-12"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="row x-gap-10 items-center">
                                            <div class="col-auto">
                                                <p class="text-14 lh-14 mb-5">6+ hours</p>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="size-3 rounded-full bg-light-1 mb-5"
                                                ></div>
                                            </div>
                                            <div class="col-auto">
                                                <p class="text-14 lh-14 mb-5">Full-day Tours</p>
                                            </div>
                                        </div>

                                        <h3 class="text-18 lh-16 fw-500">
                                            The Great Olumo Rock in the city of Abeokuta
                                        </h3>
                                        <p class="text-14 lh-14 mt-5">Abeokuta, Ogun State</p>

                                        <div class="text-14 lh-15 fw-500 mt-20">
                                            20th of February 2024
                                        </div>
                                        <div class="text-14 text-green-2 fw-500 lh-15 mt-5">
                                            Free cancellation
                                        </div>
                                    </div>

                                    <div class="col-md-auto text-right md:text-left">
                                        <div
                                            class="d-flex x-gap-5 items-center justify-end md:justify-start"
                                        >
                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>
                                        </div>

                                        <div class="text-14 lh-14 text-light-1 mt-10">
                                            14 reviews
                                        </div>

                                        <div class="text-14 text-light-1 mt-50 md:mt-20">
                                            From
                                        </div>
                                        <div class="text-22 lh-12 fw-600 mt-5">
                                            &#8358;72,000
                                        </div>
                                        <div class="text-14 text-light-1 mt-5">per adult</div>

                                        <a
                                            href="#"
                                            class="button -md -dark-1 bg-blue-1 text-white mt-24"
                                        >
                                            View Detail
                                            <div class="icon-arrow-top-right ml-15"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="border-top-light pt-30">
                                <div class="row x-gap-20 y-gap-20">
                                    <div class="col-md-auto">
                                        <div
                                            class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4"
                                        >
                                            <div class="cardImage__content">
                                                <img
                                                    class="rounded-4 col-12"
                                                    src="https://live.staticflickr.com/960/40079593530_fce35b75ab_b.jpg"
                                                    alt="image"
                                                />
                                            </div>

                                            <div class="cardImage__wishlist">
                                                <button
                                                    class="button -blue-1 bg-white size-30 rounded-full shadow-2"
                                                >
                                                    <i class="icon-heart text-12"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="row x-gap-10 items-center">
                                            <div class="col-auto">
                                                <p class="text-14 lh-14 mb-5">6+ hours</p>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="size-3 rounded-full bg-light-1 mb-5"
                                                ></div>
                                            </div>
                                            <div class="col-auto">
                                                <p class="text-14 lh-14 mb-5">Full-day Tours</p>
                                            </div>
                                        </div>

                                        <h3 class="text-18 lh-16 fw-500">
                                            The Great Olumo Rock in the city of Abeokuta
                                        </h3>
                                        <p class="text-14 lh-14 mt-5">Abeokuta, Ogun State</p>

                                        <div class="text-14 lh-15 fw-500 mt-20">
                                            20th of February 2024
                                        </div>
                                        <div class="text-14 text-green-2 fw-500 lh-15 mt-5">
                                            Free cancellation
                                        </div>
                                    </div>

                                    <div class="col-md-auto text-right md:text-left">
                                        <div
                                            class="d-flex x-gap-5 items-center justify-end md:justify-start"
                                        >
                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>
                                        </div>

                                        <div class="text-14 lh-14 text-light-1 mt-10">
                                            14 reviews
                                        </div>

                                        <div class="text-14 text-light-1 mt-50 md:mt-20">
                                            From
                                        </div>
                                        <div class="text-22 lh-12 fw-600 mt-5">
                                            &#8358;72,000
                                        </div>
                                        <div class="text-14 text-light-1 mt-5">per adult</div>

                                        <a
                                            href="#"
                                            class="button -md -dark-1 bg-blue-1 text-white mt-24"
                                        >
                                            View Detail
                                            <div class="icon-arrow-top-right ml-15"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="border-top-light pt-30">
                                <div class="row x-gap-20 y-gap-20">
                                    <div class="col-md-auto">
                                        <div
                                            class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4"
                                        >
                                            <div class="cardImage__content">
                                                <img
                                                    class="rounded-4 col-12"
                                                    src="https://live.staticflickr.com/960/40079593530_fce35b75ab_b.jpg"
                                                    alt="image"
                                                />
                                            </div>

                                            <div class="cardImage__wishlist">
                                                <button
                                                    class="button -blue-1 bg-white size-30 rounded-full shadow-2"
                                                >
                                                    <i class="icon-heart text-12"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="row x-gap-10 items-center">
                                            <div class="col-auto">
                                                <p class="text-14 lh-14 mb-5">6+ hours</p>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="size-3 rounded-full bg-light-1 mb-5"
                                                ></div>
                                            </div>
                                            <div class="col-auto">
                                                <p class="text-14 lh-14 mb-5">Full-day Tours</p>
                                            </div>
                                        </div>

                                        <h3 class="text-18 lh-16 fw-500">
                                            The Great Olumo Rock in the city of Abeokuta
                                        </h3>
                                        <p class="text-14 lh-14 mt-5">Abeokuta, Ogun State</p>

                                        <div class="text-14 lh-15 fw-500 mt-20">
                                            20th of February 2024
                                        </div>
                                        <div class="text-14 text-green-2 fw-500 lh-15 mt-5">
                                            Free cancellation
                                        </div>
                                    </div>

                                    <div class="col-md-auto text-right md:text-left">
                                        <div
                                            class="d-flex x-gap-5 items-center justify-end md:justify-start"
                                        >
                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>

                                            <i class="icon-star text-10 text-yellow-1"></i>
                                        </div>

                                        <div class="text-14 lh-14 text-light-1 mt-10">
                                            14 reviews
                                        </div>

                                        <div class="text-14 text-light-1 mt-50 md:mt-20">
                                            From
                                        </div>
                                        <div class="text-22 lh-12 fw-600 mt-5">
                                            &#8358;72,000
                                        </div>
                                        <div class="text-14 text-light-1 mt-5">per adult</div>

                                        <a
                                            href="#"
                                            class="button -md -dark-1 bg-blue-1 text-white mt-24"
                                        >
                                            View Detail
                                            <div class="icon-arrow-top-right ml-15"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-top-light mt-30 pt-30"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
