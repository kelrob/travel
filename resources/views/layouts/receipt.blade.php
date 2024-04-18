@extends('app')
@include('layouts.partials.head')

@section('title', 'GTWTravels - Activity')

@section('header')
    @include('layouts.partials.header_blue')
@endsection

@section('content')
    <section class="layout-pt-lg layout-pb-lg bg-blue-2">
        <div class="container">
            <div class="row justify-center">
                <div class="col-xl-10 col-lg-11">
                    {{--                    <div class="d-flex justify-end">--}}
                    {{--                        <button class="button h-50 px-24 -dark-1 bg-blue-1 text-white">--}}
                    {{--                            Print--}}
                    {{--                            <i class="icon-bed text-20 ml-10"></i>--}}
                    {{--                        </button>--}}
                    {{--                    </div>--}}

                    <div class="bg-white rounded-4 ">
                        <div class="layout-pt-lg layout-pb-lg px-50">
                            <div class="row justify-between">
                                <div class="col-auto">
                                    <img src="{{asset('img/gtw-logo.png')}}" style="max-width: 100px" alt="logo icon">
                                </div>

                                <div class="col-xl-4">
                                    <div class="row justify-between items-center">
                                        <div class="col-auto">
                                            <div class="text-26 text-right fw-600">Receipt #</div>
                                        </div>

                                        <div class="col-auto">
                                            <div
                                                class="text-18 fw-500 text-light-1">{{formatNumber($payment->id)}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-between pt-50">
                                <div class="col-auto">
                                    <div class="text-15 text-light-1">Receipt date:</div>
                                    <div
                                        class="text-15 fw-500 lh-15">{{$payment->created_at->format('l, F jS, Y')}}</div>
                                </div>

                                <div class="col-xl-4">
                                    {{--                                    <div class="text-15 text-light-1">Due date:</div>--}}
                                    <div class="text-15 text-success fw-500 lh-15">Payment Received</div>
                                </div>
                            </div>

                            <div class="row justify-between pt-50">
                                <div class="col-auto">
                                    <div class="text-20 fw-500">Business Owner</div>
                                    <div class="text-15 fw-500 mt-20">GTWTravels</div>
                                    <div class="text-15 text-light-1 mt-10">Lekki, Lagos State<br> Nigeria
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="text-20 fw-500">Customer</div>
                                    <div class="text-15 fw-500 mt-20">{{$payment->email}}</div>
                                    <div class="text-15 text-light-1 mt-10">
                                        {!! DNS2D::getBarcodeHTML($payment->reference, 'QRCODE', 5, 5) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-50">
                                <div class="col-12">
                                    <table class="table col-12">
                                        <thead class="bg-blue-1-05 text-blue-1">
                                        <tr>
                                            <th>Description</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>VAT (7.5%)</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>

                                            <td>{{$payment->tour->title}}</td>
                                            <td>{{$payment->ticket_no}}</td>
                                            <td>
                                                &#8358;{{number_format(($payment->amount - ($payment->amount *  0.075)) / 100)}}
                                            </td>

                                            <td>&#8358;{{number_format(($payment->amount *  0.075) / 100)}}</td>

                                            <td>&#8358;{{number_format($payment->amount / 100)}}</td>

                                        </tr>


                                        <tr>
                                            <td class="text-18 fw-500">Total</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-18 fw-500">
                                                &#8358;{{number_format($payment->amount / 100)}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="border-top-light py-50">
                            <div class="row x-gap-60 y-gap-10 justify-center">
                                <div class="col-auto">
                                    <a href="#" class="text-14">www.gtwtravels.com</a>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-14">hello@gtwtravels.com</a>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-14">(234) 801 234 6553</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

