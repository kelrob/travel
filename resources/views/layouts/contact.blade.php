@extends('app')
@include('layouts.partials.head')

@section('title', 'GTWTravels - Contact Us')

@section('header')
    @include('layouts.partials.header_white')
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
                            <div class="">Europe</div>
                        </div>
                        <div class="col-auto">
                            <div class="">></div>
                        </div>
                        <div class="col-auto">
                            <div class="">United Kingdom (UK)</div>
                        </div>
                        <div class="col-auto">
                            <div class="">></div>
                        </div>
                        <div class="col-auto">
                            <div class="text-dark-1">London</div>
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <a href="#" class="text-14 text-light-1"
                    >London Tourism: Best of London</a
                    >
                </div>
            </div>
        </div>
    </section>

    <div class="ratio ratio-16:9">
        <div class="map-ratio">
            <div class="map js-map-single"></div>
        </div>
    </div>

    <section>
        <div class="relative container">
            <div class="row justify-end">
                <div class="col-xl-5 col-lg-7">
                    <div
                        class="map-form px-40 pt-40 pb-50 lg:px-30 lg:py-30 md:px-24 md:py-24 bg-white rounded-4 shadow-4"
                    >
                        <div class="text-22 fw-500">Send a message</div>

                        <div class="row y-gap-20 pt-20">
                            {{--                            <div class="col-12">--}}
                            {{--                                <div class="form-input">--}}
                            {{--                                    <input type="text" required/>--}}
                            {{--                                    <label class="lh-1 text-16 text-light-1">Full Name</label>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-12">--}}
                            {{--                                <div class="form-input">--}}
                            {{--                                    <input type="text" required/>--}}
                            {{--                                    <label class="lh-1 text-16 text-light-1">Email</label>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-12">--}}
                            {{--                                <div class="form-input">--}}
                            {{--                                    <input type="text" required/>--}}
                            {{--                                    <label class="lh-1 text-16 text-light-1">Subject</label>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-12">--}}
                            {{--                                <div class="form-input">--}}
                            {{--                                    <textarea required rows="4"></textarea>--}}
                            {{--                                    <label class="lh-1 text-16 text-light-1"--}}
                            {{--                                    >Your Messages</label--}}
                            {{--                                    >--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="col-auto">
                                <a href="https://api.whatsapp.com/send?phone=2348065411212&text=Hello%20GTWTravels%2C%20I%20would%20like%20to%20make%20an%20inquiry."
                                   class="button px-24 h-50 -dark-1 bg-blue-1 text-white">
                                    Click to Send us a whatsapp Message
                                    <div class="icon-arrow-top-right icon-whatsapp ml-15"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
        <div class="container">
            <div class="row x-gap-80 y-gap-20 justify-between">
                <div class="col-12">
                    <div class="text-30 sm:text-24 fw-600">Contact Us</div>
                </div>

                <div class="col-lg-3">
                    <div class="text-14 text-light-1">Address</div>
                    <div class="text-18 fw-500 mt-10">
                        Lekki Phase 1, Admiralty way Lagos, Nigeria
                    </div>
                </div>

                <div class="col-auto">
                    <div class="text-14 text-light-1">Customer Care</div>
                    <div class="text-18 fw-500 mt-10">+(234) 123 456 7890</div>
                </div>

                <div class="col-auto">
                    <div class="text-14 text-light-1">Need live support?</div>
                    <div class="text-18 fw-500 mt-10">hello@gtwtravels.com</div>
                </div>

                <div class="col-auto">
                    <div class="text-14 text-light-1">Follow us on social media</div>
                    <div class="d-flex x-gap-20 items-center mt-10">
                        <a href="#"><i class="icon-facebook text-14"></i></a>
                        <a href="#"><i class="icon-twitter text-14"></i></a>
                        <a href="#"><i class="icon-instagram text-14"></i></a>
                        <a href="#"><i class="icon-linkedin text-14"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
