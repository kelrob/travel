@extends('app')
@include('layouts.partials.head')

@section('title', 'GTWTravels - Testimonials')

@section('header')
    @include('layouts.partials.header_white')
@endsection

@section('content')
    <section class="section-bg layout-pt-lg layout-pb-lg">
        <div class="section-bg__item col-12">
            <img
                src="https://images.pexels.com/photos/3769021/pexels-photo-3769021.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                alt="image"/>
        </div>

        <div class="container">
            <div class="row justify-center text-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <h1 class="text-40 md:text-25 fw-600 text-white">
                        See some of our success
                    </h1>
                    <div class="text-white mt-15">Yours could be next</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bg layout-pt-md layout-pb-lg mb-5">
        <div class="container">
            <div class="row y-gap-30">
                <div class="col-lg-12 text-center">
                    <h3>Success results</h3>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="hotelsCard -type-1 ">
                        <div class="hotelsCard__image">
                            <div class="cardImage ratio ratio-1:1 rounded-4">
                                <div class="cardImage__content">
                                    <img class="rounded-4 col-12" src="https://gtwtravels.com/img/v-2.jpg" alt="image">
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="hotelsCard -type-1 ">
                        <div class="hotelsCard__image">
                            <div class="cardImage ratio ratio-1:1 rounded-4">
                                <div class="cardImage__content">
                                    <img class="rounded-4 col-12" src="https://gtwtravels.com/img/v-2.jpg" alt="image">
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="hotelsCard -type-1 ">
                        <div class="hotelsCard__image">
                            <div class="cardImage ratio ratio-1:1 rounded-4">
                                <div class="cardImage__content">
                                    <img class="rounded-4 col-12" src="https://gtwtravels.com/img/v-3.jpg" alt="image">
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="hotelsCard -type-1 ">
                        <div class="hotelsCard__image">
                            <div class="cardImage ratio ratio-1:1 rounded-4">
                                <div class="cardImage__content">
                                    <img class="rounded-4 col-12" src="https://gtwtravels.com/img/v-4.jpg" alt="image">
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="hotelsCard -type-1 ">
                        <div class="hotelsCard__image">
                            <div class="cardImage ratio ratio-1:1 rounded-4">
                                <div class="cardImage__content">
                                    <img class="rounded-4 col-12" src="https://gtwtravels.com/img/v-5.jpg" alt="image">
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="hotelsCard -type-1 ">
                        <div class="hotelsCard__image">
                            <div class="cardImage ratio ratio-1:1 rounded-4">
                                <div class="cardImage__content">
                                    <img class="rounded-4 col-12" src="https://gtwtravels.com/img/v-6.jpg" alt="image">
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
