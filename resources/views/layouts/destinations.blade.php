@extends('app')
@include('layouts.partials.head')

@section('title', 'GTWTravels - Destinations')

@section('header')
    @include('layouts.partials.header_blue')
@endsection

@section('content')
    <section class="section-bg layout-pt-lg layout-pb-lg">
        <div class="section-bg__item col-12">
            <img
                src="https://images.pexels.com/photos/1188470/pexels-photo-1188470.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                alt="image"/>
        </div>

        <div class="container">
            <div class="row justify-center text-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <h1 class="text-40 md:text-25 fw-600 text-white">
                        Looking for joy?
                    </h1>
                    <div class="text-white mt-15">Your trusted trip companion</div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-40 pb-40 bg-light-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h1 class="text-30 fw-600">Ongoing Tours</h1>
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
                            <div class="text-18"><span
                                    class="fw-500">{{number_format($tours->count())}} Ongoing</span>
                                Tours
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="row x-gap-20 y-gap-20">

                                <div class="col-auto d-none lg:d-block">
                                    <button data-x-click="filterPopup"
                                            class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">
                                        <i class="icon-up-down text-14 mr-10"></i>
                                        Filter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-30"></div>

                    <div class="row y-gap-30">
                        @foreach($tours as $tour)
                            @php
                                $slug = Illuminate\Support\Str::slug($tour->title, '-');
                            @endphp
                            <div class="col-12">

                                <div class="border-top-light pt-30">
                                    <div class="row x-gap-20 y-gap-20">
                                        <div class="col-md-auto">

                                            <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                                                <div class="cardImage__content">

                                                    <img class="rounded-4 col-12" src="{{$tour->featured_image}}"
                                                         alt="image">
                                                </div>

                                                <div class="cardImage__wishlist">
                                                    <button
                                                        class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                                        <i class="icon-heart text-12"></i>
                                                    </button>
                                                </div>


                                            </div>

                                        </div>

                                        <div class="col-md">
                                            {{--                                            <p class="text-14 lh-14 mb-5">6+ hours</p>--}}
                                            <h3 class="text-18 lh-16 fw-500">{{$tour->title}}</h3>
                                            <p class="text-14 lh-14 mt-5">{{$tour->location}}</p>

                                            {{--                                            <div class="text-14 lh-15 fw-500 mt-20">Taking safety measures</div>--}}
                                            {{--                                            <div class="text-14 text-green-2 fw-500 lh-15 mt-5">Free cancellation</div>--}}
                                        </div>

                                        <div class="col-md-auto text-right md:text-left">
                                            <div class="d-flex x-gap-5 items-center justify-end md:justify-start">
                                                <i class="icon-star text-10 text-yellow-1"></i>
                                                <div class="text-15 fw-500 ml-5">4.82</div>
                                                <div class="text-14 text-light-1">94 reviews</div>
                                            </div>

                                            <div class="text-14 text-light-1 mt-50 md:mt-20">From</div>
                                            <div class="text-22 lh-12 fw-600 mt-5">
                                                &#8358;{{number_format($tour->price / 100)}}</div>
                                            <div class="text-14 text-light-1 mt-5">per adult</div>


                                            <a href="{{@route('tour-details', ['id' => $tour->id, 'slug' => $slug])}}"
                                               class="button -md -dark-1 bg-blue-1 text-white mt-24">
                                                View Detail
                                                <div class="icon-arrow-top-right ml-15"></div>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
@endsection
