<!-- Portfolio Section Starts -->
<section id="portfolio" class="portfolio">
    <!-- Container Starts -->
    <div class="container">
        <!-- Main Heading Starts -->
        <div class="text-center top-text">
            <h1><span>Our</span> Portfolio</h1>
            <h4>{{ __($ns . '.projects.title') }}</h4>
        </div>
        <!-- Main Heading Starts -->
        <!-- Divider Starts -->
        <div class="divider text-center">
            <span class="outer-line"></span>
            <span class="fa fa-image" aria-hidden="true"></span>
            <span class="outer-line"></span>
        </div>
        <!-- Divider Ends -->
        <!-- Filter Wrapper Starts -->
        <nav>
            <ul class="simplefilter nav nav-pills">
                <!-- Filter Wrapper Items Starts -->
                <li class="active" data-filter="all"><i class="fa fa-reorder"></i> {{ __($ns . '.projects.category') }}</li>
                <li data-filter="1">{{ __($ns . '.projects.category1') }}</li>
                {{-- <li data-filter="2">Videos</li>
                <li data-filter="3">External Links</li> --}}
                <!-- Filter Wrapper Items Ends -->
            </ul>
        </nav>
        <!-- Filter Wrapper Ends -->
        <div>
            <div class="filtr-container">
                <!-- Project Starts -->
                @php
                    $projects = Lang::get($ns . '.projects.items');
                @endphp

                <div class="row filtr-container">
                    @foreach ($projects as $proj)
                        <div class="col-xs-12 col-sm-6 col-md-4 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">

                                {{-- Thumbnail Starts --}}
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap"
                                        href="{{ asset($proj['image'] ?? 'assets/images/projects/placeholder.jpg') }}"
                                        data-gal="magnific-pop-up[image]" title="{{ $proj['title'] }}">
                                        <img class="img-responsive"
                                            src="{{ asset($proj['image'] ?? 'assets/images/projects/placeholder.jpg') }}"
                                            alt="{{ $proj['title'] }}">
                                        <span class="zoom-icon"></span>
                                    </a>
                                </figure>
                                {{-- Thumbnail Ends --}}
                                {{-- Caption Starts --}}
                                <div class="caption">
                                    <a class="title-link" href="{{ $proj['link'] ?? '#' }}">
                                        <h3>{{ $proj['title'] }}</h3>
                                    </a>
                                    <p>{{ $proj['desc'] }}</p>
                                    <a class="custom-button" href="{{ $proj['link'] ?? '#' }}">
                                        {{ __('common.actions.read_more') }}
                                    </a>
                                </div>
                                {{-- Caption Ends --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Container Ends -->
</section>
<!-- Portfolio Section Ends -->
