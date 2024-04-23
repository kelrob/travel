<div class="header-margin"></div>
<header data-add-bg="" class="header bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
    <div data-anim="fade" class="header__container px-30 sm:px-20">
        <div class="row justify-between items-center">
            <div class="col-auto">
                <div class="d-flex items-center">
                    <a href="{{@route('/')}}" class="header-logo mr-20" data-x="header-logo"
                       data-x-toggle="is-logo-dark">
                        <h3 class="text-dark-1">GTWTravels</h3>
                    </a>

                    <div class="header-menu" data-x="mobile-menu" data-x-toggle="is-menu-active">
                        <div class="mobile-overlay"></div>

                        <div class="header-menu__content">
                            <div class="mobile-bg js-mobile-bg"></div>

                            <div class="menu js-navList">
                                <ul class="menu__nav text-dark-1 -is-active">
                                    <li>
                                        <a href="{{@route('/')}}">
                                            <span class="mr-10">Home</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{@route('about')}}">About us</a>
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

                            <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <div class="d-flex items-center">
                    <div class="row x-gap-20 items-center xxl:d-none">
                        <div class="col-auto">
                            <button class="d-flex items-center text-14 text-dark-1" data-x-click="currency">
                                <span class="js-currencyMenu-mainTitle">USD</span>
                                <i class="icon-chevron-sm-down text-7 ml-10"></i>
                            </button>
                        </div>

                        <div class="col-auto">
                            <div class="w-1 h-20 bg-black-20"></div>
                        </div>

                        <div class="col-auto">
                            <button class="d-flex items-center text-14 text-dark-1" data-x-click="lang">
                                <img src="img/general/lang.png" alt="image" class="rounded-full mr-10"/>
                                <span class="js-language-mainTitle">United Kingdom</span>
                                <i class="icon-chevron-sm-down text-7 ml-15"></i>
                            </button>
                        </div>
                    </div>

                    <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                        <a href="{{@route('contact')}}"
                           class="button px-30 fw-400 text-14 -blue-1 bg-blue-1 h-50 text-white">Consultations</a>
                    </div>

                    <div class="d-none xl:d-flex x-gap-20 items-center pl-30" data-x="header-mobile-icons"
                         data-x-toggle="text-white">
                        <div>
                            <button class="d-flex items-center icon-menu text-20"
                                    data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
