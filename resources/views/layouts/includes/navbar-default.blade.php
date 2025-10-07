<!-- Navbar Starts -->
        <nav class="navbar">
            <!-- Logo Starts -->
            <div class="logo">
                <a data-toggle="collapse" data-target=".navbar-collapse.show" class="navbar-brand" href="{{ url('') }}">
                    <img id="logo-light" class="logo-light" src="{{ asset('img/logos/condation-and-constract.svg') }}" alt="logo-light" />
                    <img id="logo-dark" class="logo-dark" src="{{ asset('img/logos/condation-and-constract.svg') }}" alt="logo-dark" />
                </a>
            </div>
            <!-- Logo Ends -->

            <!-- Toggle Icon for Mobile Starts -->
            <button class="navbar-toggle navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span id="icon-toggler">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
            </button>
            <!-- Toggle Icon for Mobile Ends -->

            <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
                <!-- Main Menu Starts -->
                <ul class="nav navbar-nav" id="main-navigation">
                    <li class="active">
                        <a href="{{ url('') }}">
                            <i class="fa fa-home"></i> {{ __('header.menu.home') }}
                        </a>
                    </li>
                    <li>
                        <a href="#about">
                            <i class="fa fa-user"></i> {{ __('header.menu.about') }}
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#portfolio">
                            <i class="fa fa-image"></i> {{ __('header.menu.portfolio') }}
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#blog">
                            <i class="fa fa-edit"></i> {{ __('header.menu.blog') }}
                        </a>
                    </li>
                    <li>
                        <a href="#contact">
                            <i class="fa fa-envelope"></i> {{ __('header.menu.contact') }}
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-globe"></i> {{ app()->getLocale() == 'ar' ? 'العربية' : 'English' }}
                            <i class="icon-angle fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">English</a></li>
                            <li><a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">العربية</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Main Menu Ends -->
            </div>

            <!-- Search Input Starts -->
            <div class="site-search hidden-xs">
                <div class="search-container">
                    <input id="search-input" type="text" placeholder="{{ __('header.search_placeholder') }}">
                    <span class="close">×</span>
                </div>
            </div>
            <!-- Search Input Ends -->
        </nav>
        <!-- Navbar Ends -->