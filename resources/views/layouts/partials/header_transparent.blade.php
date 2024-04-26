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
           
        </div>
    </div>
</header>
