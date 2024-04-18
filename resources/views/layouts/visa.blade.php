@extends('app')
@include('layouts.partials.head')

@section('title', 'GTWTravels - Visa')

@section('header')
    @include('layouts.partials.header_blue')
@endsection

@section('content')
    <section data-anim-wrap class="layout-pt-md layout-pb-lg">
        <div class="container">
            <div
                data-anim-child="slide-up delay-1"
                class="row justify-center text-center"
            >
                <div class="col-auto">
                    <div class="sectionTitle -md">
                        <h2 class="sectionTitle__title">Our Visa Services</h2>
                        <p class="sectionTitle__text mt-5 sm:mt-0">
                            Below are the Visa Services that we render
                        </p>
                    </div>
                </div>
            </div>

            <div
                data-anim-child="slide-up delay-2"
                class="tabs -pills-3 pt-30 js-tabs"
            >
                <div
                    class="tabs__controls row x-gap-10 justify-center js-tabs-controls"
                >
                    <div class="col-auto">
                        <button
                            class="tabs__button text-14 fw-500 px-20 py-10 rounded-4 bg-light-2 js-tabs-button is-tab-el-active"
                            data-tab-target=".-tab-item-1"
                        >
                            Supported Contries
                        </button>
                    </div>
                </div>

                <div class="tabs__content pt-30 js-tabs-content">
                    <div class="tabs__pane -tab-item-1 is-tab-el-active">
                        <div class="row y-gap-30">
                            <div class="col-lg-3 col-sm-6">
                                <a href="#" class="blogCard -type-1 d-block">
                                    <div class="blogCard__image">
                                        <div class="ratio ratio-4:3 rounded-8">
                                            <img
                                                class="img-ratio js-lazy"
                                                src="#"
                                                data-src="https://images.pexels.com/photos/921259/pexels-photo-921259.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                alt="image"
                                            />
                                        </div>
                                    </div>

                                    <div class="pt-20">
                                        <h4 class="text-dark-1 text-18 fw-500 text-center">
                                            United States of America
                                        </h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="#" class="blogCard -type-1 d-block">
                                    <div class="blogCard__image">
                                        <div class="ratio ratio-4:3 rounded-8">
                                            <img
                                                class="img-ratio js-lazy"
                                                src="#"
                                                data-src="https://images.pexels.com/photos/19564535/pexels-photo-19564535/free-photo-of-flag-of-uk.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                alt="image"
                                            />
                                        </div>
                                    </div>

                                    <div class="pt-20">
                                        <h4 class="text-dark-1 text-18 fw-500 text-center">
                                            United Kingdom
                                        </h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="#" class="blogCard -type-1 d-block">
                                    <div class="blogCard__image">
                                        <div class="ratio ratio-4:3 rounded-8">
                                            <img
                                                class="img-ratio js-lazy"
                                                src="#"
                                                data-src="https://images.pexels.com/photos/113885/pexels-photo-113885.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                alt="image"
                                            />
                                        </div>
                                    </div>

                                    <div class="pt-20">
                                        <h4 class="text-dark-1 text-18 fw-500 text-center">
                                            Schengen Visa
                                        </h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="#" class="blogCard -type-1 d-block">
                                    <div class="blogCard__image">
                                        <div class="ratio ratio-4:3 rounded-8">
                                            <img
                                                class="img-ratio js-lazy"
                                                src="#"
                                                data-src="https://images.pexels.com/photos/3744699/pexels-photo-3744699.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                alt="image"
                                            />
                                        </div>
                                    </div>

                                    <div class="pt-20">
                                        <h4 class="text-dark-1 text-18 fw-500 text-center">
                                            Canada
                                        </h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="#" class="blogCard -type-1 d-block">
                                    <div class="blogCard__image">
                                        <div class="ratio ratio-4:3 rounded-8">
                                            <img
                                                class="img-ratio js-lazy"
                                                src="#"
                                                data-src="https://images.pexels.com/photos/3122147/pexels-photo-3122147.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                alt="image"
                                            />
                                        </div>
                                    </div>

                                    <div class="pt-20">
                                        <h4 class="text-dark-1 text-18 fw-500 text-center">
                                            Turkey
                                        </h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="#" class="blogCard -type-1 d-block">
                                    <div class="blogCard__image">
                                        <div class="ratio ratio-4:3 rounded-8">
                                            <img
                                                class="img-ratio js-lazy"
                                                src="#"
                                                data-src="https://images.pexels.com/photos/18294707/pexels-photo-18294707/free-photo-of-uae-flag.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                alt="image"
                                            />
                                        </div>
                                    </div>

                                    <div class="pt-20">
                                        <h4 class="text-dark-1 text-18 fw-500 text-center">
                                            United Arab Emirates
                                        </h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <a href="#" class="blogCard -type-1 d-block">
                                    <div class="blogCard__image">
                                        <div class="ratio ratio-4:3 rounded-8">
                                            <img
                                                class="img-ratio js-lazy"
                                                src="#"
                                                data-src="https://images.pexels.com/photos/11514758/pexels-photo-11514758.jpeg"
                                                alt="image"
                                            />
                                        </div>
                                    </div>

                                    <div class="pt-20">
                                        <h4 class="text-dark-1 text-18 fw-500 text-center">
                                            South Africa
                                        </h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="#" class="blogCard -type-1 d-block">
                                    <div class="blogCard__image">
                                        <div class="ratio ratio-4:3 rounded-8">
                                            <img
                                                class="img-ratio js-lazy"
                                                src="#"
                                                data-src="https://images.pexels.com/photos/13867676/pexels-photo-13867676.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                            />
                                        </div>
                                    </div>

                                    <div class="pt-20">
                                        <h4 class="text-dark-1 text-18 fw-500 text-center">
                                            Singapore
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="border-top-light mt-30 pt-30">
                            <div
                                class="row x-gap-10 y-gap-20 justify-between md:justify-center"
                            ></div>
                        </div>
                    </div>
                </div>

                <div
                    class="tabs__controls row x-gap-10 justify-center js-tabs-controls"
                >
                    <div class="col-auto">
                        <a href="{{@route('visa-get-started')}}">
                            <button
                                class="tabs__button text-14 fw-500 px-20 py-10 rounded-4 bg-light-2 js-tabs-button is-tab-el-active"
                                data-tab-target=".-tab-item-1"
                            >
                                Get Started
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
