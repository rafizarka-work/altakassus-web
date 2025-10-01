<!-- About Section Starts -->
<section id="about" class="about">
    <!-- Container Starts -->
    <div class="container">
        <!-- Main Heading Starts -->
        <div class="text-center top-text">
            <h1><span>{{ __($ns . '.about.title') }}</span></h1>
            <h4>{{ __($ns . '.about.subtitle') }}</h4>
        </div>
        <!-- Main Heading Ends -->
        <!-- Divider Starts -->
        <div class="divider text-center">
            <span class="outer-line"></span>
            <span class="fa fa-user" aria-hidden="true"></span>
            <span class="outer-line"></span>
        </div>
        <!-- Divider Ends -->
        <!-- About Content Starts -->
        <div class="row about-content">
            <div class="col-sm-12 col-md-6 col-lg-6 about-left-side">
                <h3 class="title-about"><strong>{{ __($ns . '.about.head') }}</strong></h3>
                <hr>

                {{-- الفقرة التعريفية --}}
                <p>{{ __($ns . '.about.intro') }}</p>

                <!-- Tabs Heading Starts -->    
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#menu1">{{ __($ns . '.about.tabs.mission.title') }}</a>
                    </li>
                    <li><a data-toggle="tab" href="#menu2">{{ __($ns . '.about.tabs.advantages.title') }}</a></li>
                    <li><a data-toggle="tab" href="#menu3">{{ __($ns . '.about.tabs.guarantees.title') }}</a></li>
                </ul>
                <!-- Tabs Heading Ends -->

                <!-- Tabs Content Starts -->
                <div class="tab-content">
                    {{-- Mission --}}
                    <div id="menu1" class="tab-pane fade in active">
                        <p>{{ __($ns . '.about.tabs.mission.body') }}</p>
                    </div>

                    {{-- Advantages --}}
                    <div id="menu2" class="tab-pane fade">
                        @php($advantages = Lang::get($ns . '.about.tabs.advantages.items'))
                        @if (is_array($advantages))
                            <ul>
                                @foreach ($advantages as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    {{-- Guarantees --}}
                    <div id="menu3" class="tab-pane fade">
                        @php($guarantees = Lang::get($ns . '.about.tabs.guarantees.items'))
                        @if (is_array($guarantees))
                            <ul>
                                @foreach ($guarantees as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <!-- Tabs Content Ends -->

                @if($ns === 'common')
                    <div class="about-buttons">
                        <a class="custom-button" href="{{ route('contractors') }}">
                            <i class="fa fa-building"></i> {{ __('common.nav.contracting') }}
                        </a>
                        <a class="custom-button" href="{{ route('conditioning') }}">
                            <i class="fa fa-snowflake-o"></i> {{ __('common.nav.hvac') }}
                        </a>
                    </div>
                @endif
            </div>

            <div class="col-md-6 col-lg-6 about-right-side">
                <div class="full-image-container hovered">
                    <img class="img-responsive hidden-xs" src="{{ asset(__('' . $ns . '.about.image')) }}" alt="">

                    <div class="full-image-overlay">
                        <h3>{{ __($ns . '.about.why') }}</h3>

                        @php($advantagesRight = Lang::get($ns . '.about.tabs.advantages.items'))
                        @if (is_array($advantagesRight))
                            <ul class="list-why-choose-us">
                                @foreach ($advantagesRight as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- About Content Ends -->

    </div>
    <!-- Container Ends -->
</section>
<!-- About Section Ends -->
