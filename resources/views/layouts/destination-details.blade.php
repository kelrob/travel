@extends('app')
@include('layouts.partials.head')

@section('title', 'GTWTravels - Destinations')

@section('header')
    @include('layouts.partials.header_blue')
@endsection

@section('content')
    <section
        data-anim="fade"
        class="d-flex items-center py-15 border-top-light"
    >
        <div class="container">
            <div class="row y-gap-10 items-center justify-between">
                <div class="col-auto">
                    <div
                        class="row x-gap-10 y-gap-5 items-center text-14 text-light-1"
                    >
                        <div class="col-auto">
                            <div class="">{{$destination->name}}</div>
                        </div>

                    </div>
                </div>

                <div class="col-auto">
                    <a href="#" class="text-14 text-light-1"
                    >{{$destination->name}}</a
                    >
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pb-md">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="relative d-flex">
                        <img
                            src="{{$destination->banner_image}}"
                            alt="image"
                            class="col-12 rounded-4"
                        />

                        <div class="absolute z-2 px-50 py-60">
                            <h1 class="text-50 fw-600 text-white">Explore London</h1>
                            <div class="text-white">
                                Explore deals, travel guides and things to do in London
                            </div>
                        </div>

                        <div
                            class="absolute d-flex justify-end items-end col-12 h-full z-1 px-10 py-10"
                        >
                            <a href="{{@route('flights')}}"
                               class="button -md -blue-1 bg-white text-dark-1 text-14 fw-500"
                            >
                                Book now!
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row x-gap-20 y-gap-20 items-center pt-20">
                <div class="col">
                    <button
                        class="d-flex flex-column justify-center px-20 py-15 rounded-4 border-light text-16 lh-14 fw-500 col-12"
                    >
                        <i class="icon-bed text-25 mb-10"></i>
                        Hotel
                    </button>
                </div>

                <div class="col">
                    <button
                        class="d-flex flex-column justify-center px-20 py-15 rounded-4 border-light text-16 lh-14 fw-500 col-12"
                    >
                        <i class="icon-destination text-25 mb-10"></i>
                        Tour
                    </button>
                </div>

                <div class="col">
                    <button
                        class="d-flex flex-column justify-center px-20 py-15 rounded-4 border-light text-16 lh-14 fw-500 col-12"
                    >
                        <i class="icon-ski text-25 mb-10"></i>
                        Activity
                    </button>
                </div>

                <div class="col">
                    <button
                        class="d-flex flex-column justify-center px-20 py-15 rounded-4 border-light text-16 lh-14 fw-500 col-12"
                    >
                        <i class="icon-home text-25 mb-10"></i>
                        Holiday
                    </button>
                </div>

                <div class="col">
                    <button
                        class="d-flex flex-column justify-center px-20 py-15 rounded-4 border-light text-16 lh-14 fw-500 col-12"
                    >
                        <i class="icon-car text-25 mb-10"></i>
                        Car
                    </button>
                </div>

                <div class="col">
                    <button
                        class="d-flex flex-column justify-center px-20 py-15 rounded-4 border-light text-16 lh-14 fw-500 col-12"
                    >
                        <i class="icon-yatch text-25 mb-10"></i>
                        Cruise
                    </button>
                </div>

                <div class="col">
                    <button
                        class="d-flex flex-column justify-center px-20 py-15 rounded-4 border-light text-16 lh-14 fw-500 col-12"
                    >
                        <i class="icon-tickets text-25 mb-10"></i>
                        Flights
                    </button>
                </div>
            </div>

            <div class="row y-gap-20 pt-40">
                <div class="col-auto">
                    <h2 class="">What to know before visiting {{$destination->name}}</h2>
                </div>

                <div class="col-xl-8">
                    {!! $destination->text !!}

                    <!-- <a
                      href="#"
                      class="d-block text-14 fw-500 text-blue-1 underline mt-20"
                      >Show More</a
                    > -->
                </div>

                <div class="col-xl-4">
                    <div class="relative d-flex ml-35">
                        <iframe
                            width="300"
                            height="500"
                            src="https://maps.google.com/maps?q={{$destination->latitude}},{{$destination->longitude}}&hl=es&z=3&amp;output=embed"
                        ></iframe>

                        <div
                            class="absolute d-flex justify-center items-end col-12 h-full z-1 px-35 py-20"
                        >
                            <a href="{{@route('flights')}}"
                               class="button h-50 px-25 -blue-1 bg-white text-dark-1 text-14 fw-500 col-12"
                            >
                                <i class="icon-book text-18 mr-10"></i>
                                Book Now!
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-30 mt-30 border-top-light"></div>


        </div>
    </section>

@endsection
