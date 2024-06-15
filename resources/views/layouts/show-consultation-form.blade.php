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
                        <h2 class="sectionTitle__title">Kindly fill the form below</h2>
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
                <form method="POST" action="{{route('consultation.submit')}}">
                    @csrf
                    <div
                        class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4"
                    >
                        <div class="row y-gap-20">
                            <div class="col-6">
                                <div class="form-input">
                                    <input type="text" name="first_name" required/>
                                    <label class="lh-1 text-14 text-light-1"
                                    >First Name</label
                                    >
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-input">
                                    <input type="text" name="last_name" required/>
                                    <label class="lh-1 text-14 text-light-1">Last Name</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-input">
                                    <input type="text" name="email" required/>
                                    <label class="lh-1 text-14 text-light-1">Email</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-input">
                                    <input type="text" name="phone_no" required/>
                                    <label class="lh-1 text-14 text-light-1"
                                    >Phone Number</label
                                    >
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-input">
                                    <input type="text" name="address" required/>
                                    <label class="lh-1 text-14 text-light-1"
                                    >Address</label
                                    >
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-input">
                                    <input type="text" name="destination" required/>
                                    <label class="lh-1 text-14 text-light-1"
                                    >What's your destination?</label
                                    >
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-input">
                        <textarea
                            required
                            rows="4"
                            style="resize: none"
                            name="clarification_needed"
                        ></textarea>
                                    <label class="lh-1 text-16 text-light-1"
                                    >What clarifications do you need about your travel plan?
                                    </label
                                    >
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-input">
                                    <input type="date" name="appointment_date" required/>
                                    <label class="lh-1 text-14 text-light-1"
                                    >Select Appointment Date</label
                                    >
                                </div>
                            </div>
                            <div class="col-12">
                                <button
                                    type="submit"
                                    style="width: 100%"
                                    class="button py-20 -dark-1 bg-blue-1 text-white"
                                >
                                    Book Consultation
                                    <span class="icon-arrow-top-right ml-15"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
