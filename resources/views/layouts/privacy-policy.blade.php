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
                                <h1 class="text-30 fw-600 mb-15">Privacy Policy</h1>
                                <p class="text-16 fw-500">
                                    This Privacy Policy governs the manner in which GTWTravels collects, uses, maintains
                                    and
                                    discloses information collected from users (each, a "User") of the <a
                                        href="https://gtwtravels.com" class="text-blue-1">gtwtravels.com</a>
                                    website ("Site").
                                    This privacy policy applies to the Site and all products and services offered by
                                    GTWTravels.
                                </p>

                                <h2 class="text-16 fw-500 mt-20">1. Personal identification information</h2>
                                <p class="text-15 text-dark-1 mt-5">
                                    We may collect personal identification information from Users in a variety of ways,
                                    including, but not limited to, when Users visit our site, place an order, and in
                                    connection with other activities, services, features or resources we make available
                                    on our Site. Users may be asked for, as appropriate, name, email address, mailing
                                    address, phone number, credit card information. We will collect personal
                                    identification information from Users only if they voluntarily submit such
                                    information to us. Users can always refuse to supply personally identification
                                    information, except that it may prevent them from engaging in certain Site related
                                    activities.
                                </p>

                                <h2 class="text-16 fw-500 mt-35">2. Non-personal identification information</h2>
                                <p class="text-15 text-dark-1 mt-5">
                                    We may collect non-personal identification information about Users whenever they
                                    interact with our Site. Non-personal identification information may include the
                                    browser name, the type of computer and technical information about Users means of
                                    connection to our Site, such as the operating system and the Internet service
                                    providers utilized and other similar information.

                                </p>

                                <h2 class="text-16 fw-500 mt-35">3. Web browser cookies</h2>
                                <p class="text-15 text-dark-1 mt-5">
                                    Our Site may use "cookies" to enhance User experience. User's web browser places
                                    cookies on their hard drive for record-keeping purposes and sometimes to track
                                    information about them. User may choose to set their web browser to refuse cookies,
                                    or to alert you when cookies are being sent. If they do so, note that some parts of
                                    the Site may not function properly.
                                </p>

                                <h2 class="text-16 fw-500 mt-35">4. How we use collected information</h2>
                                <p class="text-15 text-dark-1 mt-5">
                                    GTWTravels may collect and use Users personal information for the following purposes
                                </p>
                                <ul>
                                    <li><em>- To improve customer service</em><br/>
                                        Information you provide helps us respond to your customer service requests and
                                        support needs more efficiently.
                                    </li>
                                    <li><em>- To personalize user experience</em><br/>
                                        We may use information in the aggregate to understand how our Users as a group
                                        use the services and resources provided on our Site.
                                    </li>
                                    <li><em>- To improve our Site</em><br/>
                                        We may use feedback you provide to improve our products and services.
                                    </li>
                                    <li><em>- To process payments</em><br/>
                                        We may use the information Users provide about themselves when placing an order
                                        only to provide service to that order. We do not share this information with
                                        outside parties except to the extent necessary to provide the service.
                                    </li>
                                    <li><em>- To send periodic emails</em><br/>
                                        We may use the email address to send User information and updates pertaining to
                                        their order. It may also be used to respond to their inquiries, questions,
                                        and/or other requests. If User decides to opt-in to our mailing list, they will
                                        receive emails that may include company news, updates, related product or
                                        service information, etc. If at any time the User would like to unsubscribe from
                                        receiving future emails, they may do so by contacting us via our Site.
                                    </li>
                                </ul>

                                <h2 class="text-16 fw-500 mt-35">5. How we protect your information</h2>
                                <p class="text-15 text-dark-1 mt-5">
                                    We adopt appropriate data collection, storage and processing practices and security
                                    measures to protect against unauthorized access, alteration, disclosure or
                                    destruction of your personal information, username, password, transaction
                                    information and data stored on our Site.

                                    Sensitive and private data exchange between the Site and its Users happens over a
                                    SSL secured communication channel and is encrypted and protected with digital
                                    signatures.
                                </p>

                                <h2 class="text-16 fw-500 mt-35">6. Sharing your personal information</h2>
                                <p class="text-15 text-dark-1 mt-5">
                                    We do not sell, trade, or rent Users personal identification information to others.
                                    We may share generic aggregated demographic information not linked to any personal
                                    identification information regarding visitors and users with our business partners,
                                    trusted affiliates and advertisers for the purposes outlined above.
                                </p>

                                <h2 class="text-16 fw-500 mt-35">7. Changes to this Privacy Policy</h2>
                                <p class="text-15 text-dark-1 mt-5">
                                    GTWTravels has the discretion to update this privacy policy at any time. When we do,
                                    we will revise the updated date at the bottom of this page. We encourage Users to
                                    frequently check this page for any changes to stay informed about how we are helping
                                    to protect the personal information we collect. You acknowledge and agree that it is
                                    your responsibility to review this privacy policy periodically and become aware of
                                    modifications.
                                </p>

                                <h2 class="text-16 fw-500 mt-35">8. Your acceptance of these terms</h2>
                                <p class="text-15 text-dark-1 mt-5">
                                    By using this Site, you signify your acceptance of this policy and <a
                                        class="text-blue-1" href="#">terms of service</a>
                                    . If you do not
                                    agree to this policy, please do not use our Site. Your continued use of the Site
                                    following the posting of changes to this policy will be deemed your acceptance of
                                    those changes.
                                </p>

                                <h2 class="text-16 fw-500 mt-35">9. Contacting us</h2>
                                <p class="text-15 text-dark-1 mt-5">
                                    If you have any questions about this Privacy Policy, the practices of this site, or
                                    your dealings with this site, please contact us.
                                </p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
