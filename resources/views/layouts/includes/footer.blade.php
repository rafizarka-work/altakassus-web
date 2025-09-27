<!-- Footer Section Starts -->
<footer class="footer top-logos">
    <div class="container top-footer">
        <div class="row">
            <!-- Footer Widget: Menu -->
            <div class="col-xs-6 col-sm-4 col-md-2">
                <h4>{{ __('footer.menu.title') }}</h4>
                <div class="menu">
                    <ul>
                        <li><a href="{{ url('') }}">{{ __('footer.menu.home') }}</a></li>
                        <li><a href="{{ url('about.html') }}">{{ __('footer.menu.about') }}</a></li>
                        <li><a href="{{ url('pricing.html') }}">{{ __('footer.menu.pricing') }}</a></li>
                        <li><a href="{{ url('portfolio-3-columns.html') }}">{{ __('footer.menu.portfolio') }}</a></li>
                        <li><a href="{{ url('blog-right-sidebar.html') }}">{{ __('footer.menu.blog') }}</a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer Widget: Contact -->
            <div class="col-xs-6 col-sm-4 col-md-3">
                <h4>{{ __('footer.contact.title') }}</h4>
                <div class="menu">
                    <ul>
                        <li><span><i class="fa fa-envelope-open"></i> {{ __('footer.contact.email') }}</span></li>
                        <li><span><i class="fa fa-phone"></i> {{ __('footer.contact.phone') }}</span></li>
                        <li><span><i class="fa fa-map-marker"></i> {{ __('footer.contact.address') }}</span></li>
                        <li><span><i class="fa fa-clock-o"></i> {{ __('footer.contact.hours') }}</span></li>
                        {{-- <li><span><i class="fa fa-skype"></i> {{ __('footer.contact.skype') }}</span></li> --}}
                    </ul>
                </div>
            </div>

            <!-- Footer Widget: Facts + Social -->
            <div class="col-xs-6 col-sm-12 col-md-4">
                <div class="facts-footer">
                    <div>
                        <h5>77,991</h5>
                        <span>{{ __('footer.facts.projects') }}</span>
                    </div>
                    <div>
                        <h5>80,217</h5>
                        <span>{{ __('footer.facts.hours_work') }}</span>
                    </div>
                    <div>
                        <h5>1,253</h5>
                        <span>{{ __('footer.facts.offices') }}</span>
                    </div>
                    <div>
                        <h5>17,361</h5>
                        <span>{{ __('footer.facts.clients') }}</span>
                    </div>
                </div>

                <hr>

                <div class="social-icons">
                    <ul class="social">
                        <li><a class="twitter" href="#" title="{{ __('footer.social.twitter') }}"></a></li>
                        <li><a class="facebook" href="#" title="{{ __('footer.social.facebook') }}"></a></li>
                        <li><a class="google" href="#" title="{{ __('footer.social.google') }}"></a></li>
                        <li><a class="linkedin" href="#" title="{{ __('footer.social.linkedin') }}"></a></li>
                        <li><a class="youtube" href="#" title="{{ __('footer.social.youtube') }}"></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bottom-footer">
            <div class="row">
                <div class="col-xs-12">
                    @php
                        $year = now()->year;
                        $brand = __('footer.brand');
                        $author = __('footer.author_name');
                    @endphp
                    <p class="text-center">
                        {!! __('footer.copyright', ['year' => $year, 'brand' => $brand, 'author' => $author]) !!}
                        | <a href="https://themeforest.net/user/celtano" target="_blank">{{ $author }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section Ends -->
