@extends('app')
@include('layouts.partials.head')

@section('title', 'GTWTravels - Consultation Payment')

@section('header')
    @include('layouts.partials.header_white')
@endsection

@section('content')
    <section class="layout-pt-lg layout-pb-lg">
        <div class="container">
            <div class="row y-gap-30 mt-30 justify-between items-center">
                <div class="col-lg-12" align="center">
                    <h4 class="mb-5">Complete your Payment</h4>
                    <img src="{{asset('img/card-icon.gif')}}" alt="image">
                    <form method="POST" action="{{ route('pay') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                        <input type="hidden" name="email" value="{{$consultation->email}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="amount" value="2000000"/>
                        <input type="hidden" name="metadata"
                               value="{{ json_encode($array = ['consultation_id' => $consultation->id, 'type' => 'consultation']) }}">
                        <button
                            type="submit"
                            style="width: 40%"
                            class="button py-20 mt-20 -dark-1 bg-blue-1 text-white"
                        >
                            Proceed to make Payment
                            <span class="icon-arrow-top-right ml-15"></span>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
