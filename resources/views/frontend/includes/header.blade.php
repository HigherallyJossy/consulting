
<!--==========================
    Header
    ============================-->
<!-- masthead -->
<header id="masthead" class="site-header clearfix">
    <div class="header-main">
        <div class="container">
            <div class="row">
                <div class="site-logo col-md-4 col-sm-4 col-xs-6">
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{asset('frontend/homepage1/img/GSIT-FullLogo-1.jpg')}}" class=" show-logo"
                            alt="logo" />
                    </a>
                    <h1 class="site-title"><a href="#">Global State IT Solutions</a></h1>
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
                            <li class="dropdown-item current-menu-item">
                                <a href="{{ url('/') }}">Home</a></li>
                            <li class="dropdown-item">
                                <a href="#">About</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/overview') }}">Company Overview</a></li>
                                    <li><a href="{{ url('/mission') }}">Mission & Values</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/career') }}">Our Career</li>
                            <li class="dropdown-item">
                                <a href="{{ url('/services') }}">Services</a>
                            </li>
                            <li><a href="{{ url('/faqs') }}">FAQ</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            <li><a href="{{ url('/events') }}">Events</a></li>
                        </ul>                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- masthead end -->
