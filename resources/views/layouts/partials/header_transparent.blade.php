<header
    style="background-color: rgba(0,0,0,0.5)"
    class="header bg-green js-header"
    data-x="header"
    data-x-toggle="is-menu-opened"
>
    <div data-anim="fade" class="header__container px-30 sm:px-20">
        <div class="row justify-between items-center">
            <div class="col-auto">
                <div class="d-flex items-center">
                    <a
                        href="{{@route('/')}}"
                        class="header-logo mr-20"
                        data-x="header-logo"
                        data-x-toggle="is-logo-dark"
                    >
                        {{--                         <h3 class="text-white">GTWTravels</h3>--}}
                        <img src="{{asset('img/gtw-logo.png')}}" alt="logo icon"/>
                        <!--
                        <img src="img/general/logo-dark.svg" alt="logo icon" /> -->
                    </a>

                    <div
                        class="header-menu"
                        data-x="mobile-menu"
                        data-x-toggle="is-menu-active"
                    >
                        <div class="mobile-overlay"></div>

                        <div class="header-menu__content">
                            <div class="mobile-bg js-mobile-bg"></div>

                            <div class="menu js-navList">
                                <ul class="menu__nav text-white -is-active">
                                    <li class="menu-item-has-children">
                                        <a data-barba href="#">
                                            <span class="mr-10">Home</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{@route('about')}}">
                                            <span class="mr-10">About us</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{@route('destinations')}}"> Destinations </a>
                                    </li>

                                    <li>
                                        <a href="{{@route('success-stories')}}"> Success Stories </a>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mr-10">Services</span>
                                            <i class="icon icon-chevron-sm-down"></i>
                                        </a>
                                        <ul class="subnav">
                                            <li><a href="{{@route('visa')}}">Visa</a></li>

                                            <li><a href="{{@route('tour')}}">Tour</a></li>

                                            <li><a href="{{@route('flights')}}">Flights</a></li>

                                            <li><a href="{{@route('study')}}">Study Abroad</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{@route('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                <a href="{{@route('consultation')}}"
                   class="button px-30 fw-400 text-14 -white bg-white h-50 text-dark-1">Book a Consultation</a>
            </div>
            <div class="col-auto">
                <div class="d-flex items-center">

                    <div class="row x-gap-20 items-center xxl:d-none">

                        <div class="col-auto">
                            <div class="w-1 h-20 bg-white-20"></div>
                        </div>

                        <div class="col-auto">
                            <button class="d-flex items-center text-14 text-white" data-x-click="lang">
                                <img src="img/general/lang.png" alt="image" class="rounded-full mr-10">
                                <span class="js-language-mainTitle">United Kingdom</span>
                                <i class="icon-chevron-sm-down text-7 ml-15"></i>
                            </button>
                        </div>
                    </div>


                    {{--                    <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">--}}
                    {{--                        <a href="login.html" class="button px-30 fw-400 text-14 -white bg-white h-50 text-dark-1">Become--}}
                    {{--                            An Expert</a>--}}
                    {{--                        <a href="signup.html"--}}
                    {{--                           class="button px-30 fw-400 text-14 border-white -outline-white h-50 text-white ml-20">Sign In--}}
                    {{--                            / Register</a>--}}
                    {{--                    </div>--}}

                    <div class="d-none xl:d-flex x-gap-20 items-center pl-30 text-white" data-x="header-mobile-icons"
                         data-x-toggle="text-white">
                        <a href="{{@route('consultation')}}"
                           class="button px-30 fw-400 text-14 -white bg-white h-50 text-dark-1">Book a
                            Consultation</a>
                        <div>
                            <button class="d-flex items-center icon-menu text-inherit text-20"
                                    data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
