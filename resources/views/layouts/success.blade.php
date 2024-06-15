@extends('app')
@include('layouts.partials.head')

@section('title', 'GTWTravels - About')

@section('header')
    @include('layouts.partials.header_white')
@endsection

@section('content')
    <section class="layout-pt-lg layout-pb-lg">
        <div class="container">
            <div class="row y-gap-30 justify-between items-center">
                <div class="col-lg-12" align="center">
                    <img src="{{asset('img/success.svg')}}" style="min-width: 100px" alt="image">
                    <h3 class="mt-10">
                        @if($type)
                            {{$type}}
                        @else
                            Consultation
                        @endif

                        Request Submitted Successfully
                    </h3>
                    <p>Our team would be in touch with you shortly</p>
                </div>
            </div>
        </div>
    </section>
@endsection
