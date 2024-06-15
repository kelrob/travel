@extends('app')
@include('layouts.partials.head')

@section('title', 'GTWTravels - About')

@section('header')
    @include('layouts.partials.header_white')
@endsection

@section('content')
    <section class="section-bg layout-pt-lg layout-pb-lg">
        <div class="section-bg__item col-12">
            <img
                src="https://images.unsplash.com/photo-1507537362848-9c7e70b7b5c1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="image"/>
        </div>

        <div class="container">
            <div class="row justify-center text-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <h1 class="text-40 md:text-25 fw-600 text-white">
                        Book A Consultation
                    </h1>
                    <div class="text-white mt-15">Do you have any questions? Book a Consultation Now!</div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md">
        <div class="container">
            <div class="row justify-center text-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="sectionTitle -md">
                        <h2 class="sectionTitle__title">Please Select your type of Consultation</h2>
                        {{--                        <p class=" sectionTitle__text mt-5 sm:mt-0">Lorem ipsum is placeholder text commonly used in--}}
                        {{--                            site.</p>--}}
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="layout-pb-lg">
        <div class="container">
            <div class="row y-gap-30 pt-60 lg:pt-40">
                <div class="col-lg-6 col-md-6">
                    <div class="bg-blue-1-05 rounded-4 px-50 py-40">
                        <div class="size-70 bg-white rounded-full flex-center">
                            <img src="img/pages/help/icons/6.svg" alt="icon">
                        </div>

                        <div class="mt-24 mb-15">
                            <div class="text-18 fw-500">Booking your meeting online</div>
                            <h2 class="mt-5">&#8358;20,000</h2>
                            <a href="{{@route('consultation-form')}}"
                               class="button h-50 px-24 -dark-1 bg-blue-1 text-white">Book
                                a
                                Consultation</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="bg-blue-1-05 rounded-4 px-50 py-40">
                        <div class="size-70 bg-white rounded-full flex-center">
                            <img src="img/pages/help/icons/1.svg" alt="icon">
                        </div>

                        <div class="mt-24">
                            <div class="text-18 fw-500">Come to our office</div>
                            <h2 class="mt-5">Free</h2>
                            <p><b>Address:</b> 25b Oladimeji Alo Street off freedom way Ikate roundabout, Lekki, Lagos
                                State, Nigeria.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
