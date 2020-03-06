
    <!-- masthead -->
    <header id="masthead" class="site-header clearfix">
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="site-logo col-md-4 col-sm-4 col-xs-6">
                        <a href="{{url('/')}}" class="logo">
                            <img src="{{asset('frontend/image/svg1/GSIT-FullLogo.jpg')}}" alt="logo"
                                class="logo-dark show-logo" />
                        </a>
                        <h1 class="site-title"><a href="#">FactoryPlus</a></h1>
                        <h2 class="site-description">Just another Steel Themes Sites site</h2>
                    </div>
                    <div class="site-menu col-md-8 col-sm-8 col-xs-6">
                        <div class="navbar-toggle toggle-navs">
                            <a href="#" class="navbars-icon selected-mobile">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </a>
                        </div>
                        <nav id="site-navigation" class="main-nav primary-nav nav">
                            <ul id="primary-menu" class="menu pull-left">
                                <li class=" {{Request::is('/') ? 'current-menu-item' : ''}} ">
                                    <a href="{{url('/')}}">Home</a></li>
                                <li class="dropdown-item">
                                    <a href="#">About</a>
                                    <ul class="sub-menu">
                                        <li class=" {{Request::is('overview') ? 'current-menu-item' : ''}} "><a
                                                href="{{ url('/overview') }}">Company Overview</a></li>
                                        <li class=" {{Request::is('mission') ? 'current-menu-item' : ''}} "><a
                                                href="{{ url('/mission') }}">Mission & Values</a></li>
                                    </ul>
                                </li>
                                <li class=" {{Request::is('career') ? 'current-menu-item' : ''}} "><a
                                        href="{{ url('/career') }}">Our Career</li>
                                <li class=" {{Request::is('services') ? 'current-menu-item' : ''}} ">
                                    <a href="{{ url('/services') }}">Services</a>
                                </li>
                                <li class=" {{Request::is('faqs') ? 'current-menu-item' : ''}} "><a
                                        href="{{ url('/faqs') }}">FAQ</a></li>
                                <li class=" {{Request::is('contact') ? 'current-menu-item' : ''}} "><a
                                        href="{{ url('/contact') }}">Contact</a></li>
                                <li class=" {{Request::is('events') ? 'current-menu-item' : ''}} "><a
                                        href="{{ url('/events') }}">Events</a></li>
                            </ul>
                            
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
