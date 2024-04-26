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
                            <div class="">{{$tour->location}}</div>
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
                <div class="col-lg-8">
                    <div class="row x-gap-20 items-center">
                        <div class="col-auto">
                            <h1 class="text-30 sm:text-25 fw-600">
                                {{$tour->title}}
                            </h1>
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
                                {{$tour->location}}
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

                <div class="col-lg-4">
                    <div class="row x-gap-15 y-gap-15 items-right">
                        <div class="col-auto">
                            <div class="text-14">
                                From
                                <span class="text-22 text-dark-1 fw-500"
                                >&#8358;{{number_format($tour->price / 100)}}</span
                                >
                            </div>
                        </div>

                        <div class="col-auto">

                            <a
                                href="#" data-toggle="modal" data-target="#exampleModal"
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
                    {{--                    {{dd(json_decode($tour->images))}}--}}
                    @php
                        $images = json_decode($tour->images);
                    @endphp

                    <img src="{{$images[0]}}" alt="image" class="rounded-4"/>

                    <div class="absolute px-20 py-20 col-12 d-flex justify-end">
                        <button
                            class="button -blue-1 size-40 rounded-full flex-center bg-white text-dark-1"
                        >
                            <i class="icon-heart text-16"></i>
                        </button>
                    </div>
                </div>

                <div class="galleryGrid__item">
                    <img src="{{$images[1]}}" alt="image" class="rounded-4"/>
                </div>

                <div class="galleryGrid__item relative d-flex">
                    <img src="{{$images[2]}}" alt="image" class="rounded-4"/>
                </div>

                <div class="galleryGrid__item">
                    <img src="{{$images[3]}}" alt="image" class="rounded-4"/>
                </div>

                <div class="galleryGrid__item relative d-flex">
                    <img src="{{$images[4]}}" alt="image" class="rounded-4"/>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-30">
        <div class="container">
            <div class="row y-gap-30">
                <div class="col-xl-8">
                    <div class="row y-gap-40">
                        @if($tour->highlights)
                            <div class="col-12">
                                <h3 class="text-22 fw-500">Property highlights</h3>
                                <div class="row y-gap-20 pt-30">
                                    <div class="col-lg-3 col-6">
                                        <div class="text-center">
                                            <i class="icon-city text-24 text-blue-1"></i>
                                            <div class="text-15 lh-1 mt-10">The Olumo rock</div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <div class="text-center">
                                            <i class="icon-airplane text-24 text-blue-1"></i>
                                            <div class="text-15 lh-1 mt-10">Adire market</div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <div class="text-center">
                                            <i class="icon-bell-ring text-24 text-blue-1"></i>
                                            <div class="text-15 lh-1 mt-10">
                                                (Olusegun obasanjo presidential library)
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <div class="text-center">
                                            <i class="icon-tv text-24 text-blue-1"></i>
                                            <div class="text-15 lh-1 mt-10">Wildlife Park</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {!! $tour->text !!}

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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Please fill the form below</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('pay') }}">
                        <div class="row y-gap-20">

                            <div class="col-6">
                                <div class="form-input">
                                    <input type="text" id="firstNameInput" name="first_name" required/>
                                    <label class="lh-1 text-14 text-light-1">First Name</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-input">
                                    <input type="text" id="lastNameInput" name="last_name" required/>
                                    <label class="lh-1 text-14 text-light-1">Last Name</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-input">
                                    <input type="text" name="email" required/>
                                    <label class="lh-1 text-14 text-light-1">Email</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-input">
                                    <input type="text" name="phone" id="phoneInput" required/>
                                    <label class="lh-1 text-14 text-light-1">Phone no</label>
                                </div>
                            </div>


                            <input type="hidden" name="tour_code" value="{{$tour->tour_reference}}" required/>
                            <input type="hidden" name="metadata" id="metadataInput"/>
                            {{--                            <input type="hidden" name="metadata"--}}
                            {{--                                   value="{{ json_encode($array = ['tour_reference' => $tour->tour_reference, 'type' => 'tour']) }}">--}}
                            <div class="col-12">
                                <div class="form-input">
                                    <input type="number" name="quantity" required/>
                                    <label class="lh-1 text-14 text-light-1">No of Tickets</label>
                                </div>
                            </div>
                            {{ csrf_field() }}

                            <input type="hidden" name="amount" value={{$tour->price}}/>
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-auto">
                                <button type="submit"
                                        href="#"
                                        class="button px-24 h-50 -dark-1 bg-blue-1 text-white"

                                >
                                    Book Tour
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    jQuery.noConflict();
    (function ($) {
        $(document).ready(function () {
            // Function to update metadata
            function updateMetadata() {
                var firstNameValue = $('#firstNameInput').val();
                var lastNameValue = $('#lastNameInput').val();
                var phoneValue = $('#phoneInput').val();

                var metadata = {
                    first_name: firstNameValue,
                    last_name: lastNameValue,
                    phone: phoneValue,
                    tour_reference: '<?php echo $tour->tour_reference; ?>',
                    type: 'tour'
                };

                $('#metadataInput').val(JSON.stringify(metadata));
            }

            // Bind onchange event to input fields
            $('#firstNameInput, #lastNameInput, #phoneInput').on('change', updateMetadata);
        });
    })(jQuery);
</script>

