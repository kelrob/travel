@extends('app')
@include('layouts.partials.head')

@section('title', 'GTWTravels - Visa | Get Started')

@section('header')
    @include('layouts.partials.header_white')
@endsection

@section('content')
    <section class="section-bg layout-pt-lg layout-pb-lg">
        <div class="section-bg__item col-12">
            <img
                src="https://images.unsplash.com/photo-1596120236172-231999844ade?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
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

    <section data-anim-wrap class="layout-pt-md layout-pb-sm">
        <div class="container">
            <div
                data-anim-child="slide-up delay-1"
                class="row justify-center text-center"
            >
                <div class="col-auto">
                    <div class="sectionTitle -md">
                        <h2 class="sectionTitle__title">
                            Get started with our Services
                        </h2>
                        <p class="sectionTitle__text mt-5 sm:mt-0">
                            Kindly fill the Form below so we can serve you better
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-lg bg-blue-2">
        <div class="container">
            <div class="row justify-center">
                <div class="col-lg-12">
                    <form method="POST" action="{{route('visa.submit.request')}}">
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
                                    <div
                                        class="select js-select js-liveSearch"
                                        data-select-value=""
                                        id="targetCountry"
                                    >
                                        <button class="select__button js-button">
                        <span class="js-button-title" id="country_value"
                        >What country are you applying for?</span
                        >
                                            <i class="select__icon" data-feather="chevron-down"></i>
                                        </button>

                                        <div class="select__dropdown js-dropdown">
                                            <input
                                                id="selected_country"
                                                type="text"
                                                placeholder="Search"
                                                class="select__search js-search"
                                                name="country_interest"
                                            />

                                            <div
                                                class="select__options js-options"
                                                id="selectOptionsContainer"
                                            ></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div
                                        class="select js-select js-liveSearch"
                                        data-select-value=""
                                    >
                                        <button class="select__button js-button">
                        <span class="js-button-title" id="employment_status_value"
                        >Are you an employee or self employed?</span
                        >
                                            <i class="select__icon" data-feather="chevron-down"></i>
                                        </button>

                                        <div class="select__dropdown js-dropdown">
                                            <input
                                                id="selected_employment_status"
                                                type="hidden"
                                                placeholder="Search"
                                                class="select__search js-search"
                                                name="employment_status"
                                            />

                                            <div class="select__options js-options">
                                                <div
                                                    class="select__options__button employment_status_option"
                                                    data-value="employee"
                                                >
                                                    Employee
                                                </div>
                                                <div
                                                    class="select__options__button employment_status_option"
                                                    data-value="self_employed"
                                                >
                                                    Self Employed
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-input">
                                        <input type="text" name="current_employer" required/>
                                        <label class="lh-1 text-14 text-light-1"
                                        >Where do you work?</label
                                        >
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-input">
                                        <input type="text" name="occupation" required/>
                                        <label class="lh-1 text-14 text-light-1"
                                        >What's your occupation?</label
                                        >
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-input">
                                        <input type="text" name="monthly_income" required/>
                                        <label class="lh-1 text-14 text-light-1"
                                        >How much do you earn Monthly?</label
                                        >
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-input">
                                        <input type="text" name="age" required/>
                                        <label class="lh-1 text-14 text-light-1"
                                        >How old are you?</label
                                        >
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-input">
                                        <input type="text" name="trip_purpose" required/>
                                        <label class="lh-1 text-14 text-light-1"
                                        >Purpose of your trip?</label
                                        >
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-input">
                                        <input type="text" name="has_travel_history" required/>
                                        <label class="lh-1 text-14 text-light-1"
                                        >Where have you travelled to in the last 5 years?</label
                                        >
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-input">
                                        <textarea required name="travel_history" rows="4"></textarea>
                                        <label class="lh-1 text-16 text-light-1"
                                        >List the countries you have travelld to in the last 5
                                            years</label
                                        >
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="text-16 lh-12 text-dark-1 fw-500 mb-10">
                                        Are you married?
                                    </div>
                                    <div class="row y-gap-10">
                                        <div class="col-12">
                                            <div class="form-radio d-flex items-center">
                                                <div class="radio">
                                                    <input type="radio" value="yes" name="is_married"/>
                                                    <div class="radio__mark">
                                                        <div class="radio__icon"></div>
                                                    </div>
                                                </div>
                                                <div class="text-14 lh-1 ml-10">Yes</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-radio d-flex items-center">
                                                <div class="radio">
                                                    <input type="radio" value="no" name="is_married"/>
                                                    <div class="radio__mark">
                                                        <div class="radio__icon"></div>
                                                    </div>
                                                </div>
                                                <div class="text-14 lh-1 ml-10">No</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="text-16 lh-12 text-dark-1 fw-500 mb-10">
                                        Do you have Children?
                                    </div>
                                    <div class="row y-gap-10">
                                        <div class="col-12">
                                            <div class="form-radio d-flex items-center">
                                                <div class="radio">
                                                    <input type="radio" value="yes" name="has_children"/>
                                                    <div class="radio__mark">
                                                        <div class="radio__icon"></div>
                                                    </div>
                                                </div>
                                                <div class="text-14 lh-1 ml-10">Yes</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-radio d-flex items-center">
                                                <div class="radio">
                                                    <input type="radio" value="no" name="has_children"/>
                                                    <div class="radio__mark">
                                                        <div class="radio__icon"></div>
                                                    </div>
                                                </div>
                                                <div class="text-14 lh-1 ml-10">No</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="text-16 lh-12 text-dark-1 fw-500 mb-10">
                                        Have you been denied any Visa?
                                    </div>
                                    <div class="row y-gap-10">
                                        <div class="col-12">
                                            <div class="form-radio d-flex items-center">
                                                <div class="radio">
                                                    <input type="radio" value="yes" name="has_visa_denial"/>
                                                    <div class="radio__mark">
                                                        <div class="radio__icon"></div>
                                                    </div>
                                                </div>
                                                <div class="text-14 lh-1 ml-10">Yes</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-radio d-flex items-center">
                                                <div class="radio">
                                                    <input type="radio" value="no" name="has_visa_denial"/>
                                                    <div class="radio__mark">
                                                        <div class="radio__icon"></div>
                                                    </div>
                                                </div>
                                                <div class="text-14 lh-1 ml-10">No</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-10">
                                    <div class="col-6">
                                        <div class="form-input">
                        <textarea
                            required
                            rows="4"
                            style="resize: none"
                            name="visa_denial_reason"
                        ></textarea>
                                            <label class="lh-1 text-16 text-light-1"
                                            >If you have been denied a visa, Please tell us
                                                why</label
                                            >
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-input">
                        <textarea
                            required
                            rows="4"
                            style="resize: none"
                            name="extra_information"
                        ></textarea>
                                            <label class="lh-1 text-16 text-light-1"
                                            >If you have any other information you would like us
                                                to know.</label
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-30">
                                    <div class="d-flex">
                                        <div class="form-checkbox mt-5">
                                            <input type="checkbox" checked disabled name="name"/>
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 lh-15 text-light-1 ml-10">
                                            I agree that there is no guarantee that this profiling
                                            will change the outcome of my visa application. It is
                                            meant to only assess my current status as far as visa
                                            processing is concerned. I will not hold GTWTravels and
                                            Pearls Travels responsible if my visa application is not
                                            successful.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button
                                        type="submit"
                                        style="width: 100%"
                                        class="button py-20 -dark-1 bg-blue-1 text-white"
                                    >
                                        Submit
                                        <div class="icon-arrow-top-right ml-15"></div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>


    jQuery.noConflict();
    (function ($) {
        $(document).ready(function () {
            // Click event listener for #selectOptionsContainer
            $('.select__options__button').click(function () {
                setTimeout(function () {
                    // Get the value of the country after the delay
                    let selectValue = $('#country_value').text();
                    $('#selected_country').val(selectValue)
                    console.log('Value of data-select-value:', selectValue);
                }, 1000); // 1000 milliseconds = 1 second
            });

            $('.employment_status_option').click(function () {
                setTimeout(function () {
                    // Get the value of the country after the delay
                    let selectValue = $('#employment_status_value').text();
                    $('#selected_employment_status').val(selectValue)
                    console.log('Value of data-select-value:', selectValue);
                }, 1000); // 1000 milliseconds = 1 second
            });
        });
    })(jQuery);
</script>
