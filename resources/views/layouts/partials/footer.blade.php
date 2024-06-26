<footer class="footer -type-1">
    <div class="container">
        <div class="pt-60 pb-60">
            <div class="row y-gap-40 justify-between xl:justify-start">
                <div class="col-xl-2 col-lg-4 col-sm-6">
                    <h5 class="text-16 fw-500 mb-30">Contact Us</h5>

                    <div class="mt-30">
                        <div class="text-14 mt-30">Toll Free Customer Care</div>
                        <a href="#" class="text-18 fw-500 text-blue-1 mt-5">+234 811 048 7425 </a>
                    </div>

                    <div class="mt-35">
                        <div class="text-14 mt-30">Need live support?</div>
                        <a href="#" class="text-18 fw-500 text-blue-1 mt-5">hello@gtwtravels.com</a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-4 col-sm-6">
                    <h5 class="text-16 fw-500 mb-30">Company</h5>
                    <div class="d-flex y-gap-10 flex-column">
                        <a href="{{@route('about')}}">About Us</a>
                        {{--                        <a href="#">Careers</a>--}}
                        {{--                         <a href="#">Blog</a>--}}
                        {{--                         <a href="#">Press</a>--}}
                        {{--                         <a href="#">Gift Cards</a>--}}
                        {{--                         <a href="#">Magazine</a>--}}
                    </div>
                </div>

                <div class="col-xl-2 col-lg-4 col-sm-6">
                    <h5 class="text-16 fw-500 mb-30">Support</h5>
                    <div class="d-flex y-gap-10 flex-column">
                        <a href="{{@route('contact')}}">Contact</a>
                        {{--                        <a href="#">Legal Notice</a>--}}
                        <a href={{route('privacy-policy')}}>Privacy Policy</a>
                        <a href="{{route('terms-of-use')}}">Terms of use</a>
                    </div>
                </div>

                {{--                <div class="col-xl-2 col-lg-4 col-sm-6">--}}
                {{--                    <h5 class="text-16 fw-500 mb-30">Other Services</h5>--}}
                {{--                    <div class="d-flex y-gap-10 flex-column">--}}
                {{--                        <a href="#">Car hire</a>--}}
                {{--                        <a href="#">Activity Finder</a>--}}
                {{--                        <a href="#">Tour List</a>--}}
                {{--                        <a href="#">Flight finder</a>--}}
                {{--                        <a href="#">Cruise Ticket</a>--}}
                {{--                        <a href="#">Holiday Rental</a>--}}
                {{--                        <a href="#">Travel Agents</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                <div class="col-xl-2 col-lg-4 col-sm-6">
                    <h5 class="text-16 fw-500 mb-30">Socials</h5>

                    <div class="col-auto">
                        <div class="d-flex x-gap-20 items-center">
                            <a href="https://facebook.com/GTWtravels" target="_blank"><i
                                    class="icon-facebook text-14"></i></a>
                            <a href="https://www.instagram.com/gtw_travels/" target="_blank"><i
                                    class="icon-instagram text-14"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-20 border-top-light">
            <div class="row justify-between items-center y-gap-10">
                <div class="col-auto">
                    <div class="row x-gap-30 y-gap-10">
                        <div class="col-auto">
                            <div class="d-flex items-center">
                                © 2024 GTWTravels LLC All rights reserved.
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="d-flex x-gap-15">
                                <a href="{{route('privacy-policy')}}">Privacy</a>
                                <a href="{{route('terms-of-use')}}">Terms of use</a>
                                {{--                                <a href="#">Site Map</a>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="row y-gap-10 items-center">
                        <div class="col-auto">
                            <div class="d-flex items-center">
                                <button class="d-flex items-center text-14 fw-500 text-dark-1 mr-10">
                                    <i class="icon-globe text-16 mr-10"></i>
                                    <span class="underline">English (US)</span>
                                </button>

                                <button class="d-flex items-center text-14 fw-500 text-dark-1">
                                    <i class="icon-ngn text-16 mr-10"></i>
                                    <span class="underline">NGN</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="d-flex x-gap-20 items-center">
                                <a href="https://facebook.com/GTWtravels" target="_blank"><i
                                        class="icon-facebook text-14"></i></a>
                                <a href="https://www.instagram.com/gtw_travels/" target="_blank"><i
                                        class="icon-instagram text-14"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
