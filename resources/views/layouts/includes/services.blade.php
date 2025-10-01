 <!-- Services Section Starts -->
        <section class="services">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>{{ __($ns.'.services.title') }}</span></h1>
                    <h4>{{ __($ns.'.services.title') }}</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-cogs" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- Services Starts -->
                <div class="row services-box">
                     @php
                    $services = __($ns.'.services.items');
                    @endphp
                    @foreach($services as $srv)
                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover {{ $srv['icon'] }}" data-headline="{{ $srv['title'] }}"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content {{ $srv['icon'] }}">
                            <h2>{{ $srv['title'] }}</h2>
                            <p>{{ $srv['desc'] }}</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                     @endforeach
                </div>
                <!-- Services Ends -->
            </div>
        </section>
        <!-- Services Section Ends -->