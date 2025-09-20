<!DOCTYPE html>
<html lang="en">

<head>
    
@include('layouts.includes.styles')
</head>

<body class="">
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="logopreloader">
            <img src="{{ asset('img/logos/condation.svg') }}" alt="logo" />
        </div>
        <div class="loader" id="loader"></div>
    </div>
    <!-- Preloader Ends -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        @include('layouts.includes.header')
        <!-- Main Slider Section Ends -->
        @include('layouts.includes.about')
        <!-- Video Section Starts -->
        {{-- <section class="videopromotion">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Video</span> Promo</h1>
                        <h4>Made with love for you</h4>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="video-content">
                        <p class="text-center">See Amira like you've never seen it before! Watch our new promo video,<br> and discover just what an Amira membership can do for you!</p>
                        <!-- Video Play Starts -->
                        <div class="magnific-popup-gallery">
                            <div class="btn-wrapper text-center"><a class="image-wrap mfp-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8"></a></div>
                        </div>
                        <!-- Video Play Ends -->
                    </div>
                </div>
                <!-- Container Ends -->
            </div>
        </section> --}}
        <!-- Video Section Ends -->
       @include('layouts.includes.services')
        <!-- Testimonials Section Starts -->
        {{-- <section class="testimonials">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Happy</span> Customers</h1>
                        <h4>Testimonials</h4>
                    </div>
                    <!-- Main Heading Starts -->
                    <!-- Blockquotes Starts -->
                    <div id="quote-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper For Sliders Starts -->
                        <!-- Indicators Starts -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Indicators Ends -->
                        <div class="carousel-inner">
                            <!-- Quote #1 Starts -->
                            <div class="item active">
                                <blockquote>
                                    <img class="img-circle img-responsive" src="http://via.placeholder.com/112x112" alt="client">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu nt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptat</p>
                                    <h5>Miss Elina Pool</h5>
                                    <h6>Developer - Adobe</h6>
                                </blockquote>
                            </div>
                            <!-- Quote #1 Ends -->
                            <!-- Quote #2 Starts -->
                            <div class="item">
                                <blockquote>
                                    <img class="img-circle img-responsive" src="http://via.placeholder.com/112x112" alt="client">
                                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                    <h5>Mr. Antoine Varane</h5>
                                    <h6>Manager - Twitter</h6>
                                </blockquote>
                            </div>
                            <!-- Quote #2 Ends -->
                            <!-- Quote #3 Starts -->
                            <div class="item">
                                <blockquote>
                                    <img class="img-circle img-responsive" src="http://via.placeholder.com/112x112" alt="client">
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                    <h5>Miss Lucy Walker</h5>
                                    <h6>Manager - Envato</h6>
                                </blockquote>
                            </div>
                            <!-- Quote #3 Ends -->
                        </div>
                        <!-- Wrapper For Sliders Ends -->
                    </div>
                    <!-- Blockquotes Ends -->
                </div>
                <!-- Container Ends -->
            </div>
        </section> --}}
        <!-- Testimonials Section Ends -->
        @include('layouts.includes.portfolio')\

        @include('layouts.includes.facts')

        <!-- Pricing Starts -->
        {{-- <section class="pricing">
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>affordable</span> packages</h1>
                    <h4>our prices</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-dollar" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- Section Content Starts -->
                <div class="row pricing-tables-content">
                    <div class="pricing-container">
                        <!-- Pricing Switcher Starts -->
                        <div class="pricing-switcher">
                            <p>
                                <input type="radio" name="switch" value="monthly" id="monthly-1" checked>
                                <label for="monthly-1">MONTHLY</label>
                                <input type="radio" name="switch" value="yearly" id="yearly-1">
                                <label for="yearly-1">YEARLY</label>
                                <span class="switch"></span>
                            </p>
                        </div>
                        <!-- Pricing Switcher Ends -->
                        <!-- Pricing Tables Starts -->
                        <ul class="pricing-list bounce-invert">
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <ul class="pricing-wrapper">
                                    <!-- Monthly Pricing Table #1 Starts -->
                                    <li data-type="monthly" class="is-visible">
                                        <header class="pricing-header">
                                            <h2>bronze</h2>
                                            <div class="price-content">
                                                <span class="currency">$</span>
                                                <span class="value">100</span>
                                                <span class="duration">mo</span>
                                            </div>
                                        </header>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                <li><em>1 GB</em> disk space</li>
                                                <li><em>2</em> email accounts</li>
                                                <li><em>unlimited</em> subomains</li>
                                            </ul>
                                        </div>
                                        <footer class="pricing-footer">
                                            <a class="custom-button" href="#">add to cart</a>
                                        </footer>
                                    </li>
                                    <!-- Monthly Pricing Table #1 Ends -->
                                    <!-- Yearly Pricing Table #1 Starts -->
                                    <li data-type="yearly" class="is-hidden">
                                        <header class="pricing-header">
                                            <h2>bronze</h2>
                                            <div class="price-content">
                                                <span class="currency">$</span>
                                                <span class="value">360</span>
                                                <span class="duration">yr</span>
                                            </div>
                                        </header>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                <li><em>10 GB</em> disk space</li>
                                                <li><em>100</em> email accounts</li>
                                                <li><em>unlimited</em> subomains</li>
                                            </ul>
                                        </div>
                                        <footer class="pricing-footer">
                                            <a class="custom-button" href="#">add to cart</a>
                                        </footer>
                                    </li>
                                    <!-- Yearly Pricing Table #1 Ends -->
                                </ul>
                            </li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <ul class="pricing-wrapper">
                                    <!-- Monthly Pricing Table #2 Starts -->
                                    <li data-type="monthly" class="is-visible">
                                        <header class="pricing-header">
                                            <h2>silver</h2>
                                            <div class="price-content">
                                                <span class="currency">$</span>
                                                <span class="value">300</span>
                                                <span class="duration">mo</span>
                                            </div>
                                        </header>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                <li><em>3 GB</em> disk space</li>
                                                <li><em>5</em> email accounts</li>
                                                <li><em>unlimited</em> subomains</li>
                                            </ul>
                                        </div>
                                        <footer class="pricing-footer">
                                            <a class="custom-button" href="#">add to cart</a>
                                        </footer>
                                    </li>
                                    <!-- Monthly Pricing Table #2 Ends -->
                                    <!-- Yearly Pricing Table #2 Starts -->
                                    <li data-type="yearly" class="is-hidden">
                                        <header class="pricing-header">
                                            <h2>silver</h2>
                                            <div class="price-content">
                                                <span class="currency">$</span>
                                                <span class="value">599</span>
                                                <span class="duration">yr</span>
                                            </div>
                                        </header>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                <li><em>100 GB</em> disk space</li>
                                                <li><em>unlimited</em> email accounts</li>
                                                <li><em>unlimited</em> subomains</li>
                                            </ul>
                                        </div>
                                        <footer class="pricing-footer">
                                            <a class="custom-button" href="#">add to cart</a>
                                        </footer>
                                    </li>
                                    <!-- Yearly Pricing Table #2 Ends -->
                                </ul>
                            </li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <ul class="pricing-wrapper">
                                    <!-- Monthly Pricing Table #3 Starts -->
                                    <li data-type="monthly" class="is-visible">
                                        <div class="badge-popular">
                                            <span class="popular">POPULAR</span>
                                        </div>
                                        <header class="pricing-header">
                                            <h2>gold</h2>
                                            <div class="price-content">
                                                <span class="currency">$</span>
                                                <span class="value">500</span>
                                                <span class="duration">mo</span>
                                            </div>
                                        </header>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                <li><em>5 GB</em> disk space</li>
                                                <li><em>10</em> email accounts</li>
                                                <li><em>unlimited</em> subomains</li>
                                            </ul>
                                        </div>
                                        <footer class="pricing-footer">
                                            <a class="custom-button" href="#">add to cart</a>
                                        </footer>
                                    </li>
                                    <!-- Monthly Pricing Table #3 Ends -->
                                    <!-- Yearly Pricing Table #3 Starts -->
                                    <li data-type="yearly" class="is-hidden">
                                        <div class="badge-popular">
                                            <span class="popular">POPULAR</span>
                                        </div>
                                        <header class="pricing-header">
                                            <h2>gold</h2>
                                            <div class="price-content">
                                                <span class="currency">$</span>
                                                <span class="value">899</span>
                                                <span class="duration">yr</span>
                                            </div>
                                        </header>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                <li><em>unlimited</em> disk space</li>
                                                <li><em>unlimited</em> email accounts</li>
                                                <li><em>unlimited</em> subomains</li>
                                            </ul>
                                        </div>
                                        <footer class="pricing-footer">
                                            <a class="custom-button" href="#">add to cart</a>
                                        </footer>
                                    </li>
                                    <!-- Yearly Pricing Table #3 Ends -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Pricing Ends -->
        <!-- Newsletter Section Starts -->
        {{-- <section class="newsletter">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>our</span> newsletter</h1>
                        <h4>Keep in touch</h4>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="newsletter-content">
                        <p class="text-center">Sign up to our newsletter subscription and be the first to know about<br> Important news <span> & </span> Amazing offers <span> & </span>Discounts</p>
                        <!-- Newsletter Form Starts -->
                        <form class="form-inputs">
                            <!-- Newsletter Form Input Field Starts -->
                            <div class="col-md-12 form-group custom-form-group">
                                <span class="input custom-input">
									<input placeholder="Enter Your Email" class="input-field custom-input-field" type="text" />
									<label class="input-label custom-input-label" >
										<i class="fa fa-envelope-open-o icon icon-field"></i>
									</label>
								</span>
                            </div>
                            <!-- Newsletter Form Input Field Ends -->
                            <!-- Newsletter Form Submit Button Starts -->
                            <button id="submit" name="submit" type="submit" class="custom-button" title="Send">Subscribe Now</button>
                            <!-- Newsletter Form Submit Button Ends -->
                        </form>
                        <!-- Newsletter Form Ends -->
                    </div>
                </div>
                <!-- Container Ends -->
            </div>
        </section> --}}
        <!-- Newsletter Section Ends -->
        @include('layouts.includes.blog')

        @include('layouts.includes.call')        
        
        @include('layouts.includes.logos')        
        
        @include('layouts.includes.footer')        
        <!-- Back To Top Starts -->
        <div id="back-top-wrapper">
            <p id="back-top">
                <a href="#top"><span></span></a>
            </p>
        </div>
        <!-- Back To Top Ends -->
    </div>
    <!-- Wrapper Ends -->
        @include('layouts.includes.script')
</body>

</html>