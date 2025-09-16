<!-- Facts Section Starts -->
<section class="facts">
    <div class="section-overlay">
        <!-- Container Starts -->
        <div class="container">
            <!-- Main Heading Starts -->
            <div class="text-center top-text">
                <h1>{{ __($ns . '.facts.title') }}</h1>
                <h4>{{ __($ns . '.facts.subtitle') }}</h4>
            </div>
            <!-- Main Heading Starts -->
            <!-- Fact Badges Starts -->
            <div class="fact-badges">
                <div class="row">
                    @php
                        $facts = Lang::get($ns . '.facts.items');
                    @endphp

                    @foreach ($facts as $fac)
                        <div class="col-md-3 col-sm-6 text-center">
                            <i class="{{ $fac['icon'] }}"></i>
                            <h2>
                                <span>
                                    <strong class="badges-counter">{{ $fac['count'] }}</strong>
                                </span>
                            </h2>
                            <h4>{{ $fac['label'] }}</h4>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- Fact Badges Ends -->
        </div>
        <!-- Container Ends -->
    </div>
</section>
<!-- facts Section Ends -->
