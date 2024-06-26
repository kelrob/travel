@extends('app')
@include('layouts.partials.head')

@section('title', 'GTWTravels - About')

@section('header')
    @include('layouts.partials.header_white')
@endsection

@section('content')
    <section class="layout-pt-lg layout-pb-lg">
        <div class="container">
            <div class="tabs js-tabs">
                <div class="row y-gap-30">
                    <div class="col-lg-3">
                        <div class="px-30 py-30 rounded-4 border-light">
                            <div class="tabs__controls row y-gap-10 js-tabs-controls">

                                <div class="col-12">
                                    <a href="{{@route('privacy-policy')}}">Privacy
                                        policy</a>
                                </div>

                                <div class="col-12">
                                    <a href="{{@route('terms-of-use')}}"> Terms of Use</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="tabs__content js-tabs-content">

                            <div class="tabs__pane -tab-item-1 is-tab-el-active">
                                <h1 class="text-30 fw-600 mb-15">Terms of use</h1>
                                <p class="text-16 fw-500">
                                    This Website is provided solely to assist customers in gathering travel information,
                                    determining the availability of travel-related goods and services, making legitimate
                                    reservations or otherwise transacting business with travel suppliers, and for no
                                    other purposes. the customer visiting the Website and/or booking a reservation
                                    through us on this Website, or through our customer service agents.

                                    This Website is offered to you conditioned upon your acceptance without modification
                                    of all the terms, conditions, and notices set forth below (collectively, the 'Terms
                                    of Use' or 'Agreement'). Please read the terms of Use carefully. By accessing or
                                    using this Website, booking any travel products or services on this Website, or
                                    contacting our call center agents, you agree that the Terms of Use then in force
                                    shall apply. If you do not agree to the Terms of Use, please do not use or make
                                    bookings through this Website or our call center agents. at any time change these
                                    Terms of Use and your continued use of this Website is conditioned upon acceptance
                                    of the updated Terms of Use.
                                </p>

                                <h2 class="text-16 fw-500 mt-20">1. USE OF THE WEBSITE</h2>
                                <p class="text-15 text-dark-1 mt-5">
                                    As a condition of your use of this Website, you warrant that

                                    (i) you are at least 18 years of age and are of sound mind, <br>
                                    (ii) you possess the legal authority to create a binding legal obligation,<br>
                                    (iii) you will use this Website in accordance with the Terms of Use,<br>
                                    (iv) you will only use this Website to make legitimate reservations for you or for
                                    another person for whom you are legally authorized to act,<br>
                                    (v) you will inform such other persons about the Terms of Use that apply to the
                                    reservations you have made on their behalf, including all rules and
                                    restrictions;<br>
                                    (v) i all information supplied by you on this Website is true, accurate, current and
                                    complete, and <br>
                                    (vii) if you have an online account with this Website, you will safeguard your
                                    account information and will supervise and be completely responsible for any use of
                                    your account by you and anyone other than you. We retain the right at our sole
                                    discretion to deny access to anyone to this Website and the services we offer, at
                                    any time without notice and for any reason, including, but not limited to, for
                                    violation of these Terms of Use.
                                </p>

                                <h2 class="text-16 fw-500 mt-35">2. PROHIBITED ACTIVITIES</h2>
                                <p class="text-15 text-dark-1 mt-5">
                                    use this Website or its contents for any commercial purpose;

                                    make any speculative, false, or fraudulent reservation or any reservation in
                                    anticipation of demand;
                                    access, monitor or copy any content or information of this Website using any robot,
                                    spider, scraper or other automated means or any manual process for any purpose
                                    without our express written permission;
                                    violate the restrictions in any robot exclusion headers on this Website or bypass or
                                    circumvent other measures employed to prevent or limit access to this Website;
                                    take any action that imposes, or may impose, in our discretion, an unreasonable or
                                    disproportionately large load on our infrastructure;
                                    deep-link to any portion of this Website (including, without limitation, the
                                    purchase path for any travel services) for any purpose without our express written
                                    permission;
                                    'frame', 'mirror' or otherwise incorporate any part of this Website into any other
                                    website without our prior written authorization.
                                    The content and information on this Website (including, but not limited to, price
                                    and availability of travel services), as well as the infrastructure used to provide
                                    such content and information, is proprietary to us or our suppliers and providers.
                                    While you may make limited copies of your travel itinerary (and related documents)
                                    for travel or services booked through this Website, you agree not to otherwise
                                    modify, copy, distribute, transmit, display, perform, reproduce, publish, license,
                                    create derivative works from, transfer, or sell or re-sell any information,
                                    software, products, or services obtained from or through this Website. Additionally,
                                    you agree not to:
                                    If your booking or account shows signs of fraud, abuse, or suspicious activity, we
                                    may cancel any bookings associated with your name, email address, or account, and
                                    close any associated accounts. If you have conducted any fraudulent activity, we
                                    reserves the right to take any necessary legal action and you may be liable for
                                    monetary losses to, including litigation costs and damages. To contest the
                                    cancellation of a booking or freezing or closure of an account, please contact us
                                    Customer Service.


                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
