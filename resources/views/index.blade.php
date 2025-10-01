@php($isAr = app()->getLocale() === 'ar')
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ $isAr ? 'rtl' : 'ltr' }}">

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
        <header class="header">
            <div class="header-inner">
                @if (request()->routeIs('index'))
                    @include('layouts.includes.navbar-home')
                @else
                    @include('layouts.includes.navbar-default')
                @endif
            </div>
        </header>
        @include('layouts.includes.slider')
        @php($ns = 'common')
        @include('layouts.includes.about')
        @include('layouts.includes.footer')
        @include('layouts.includes.whatsapp')

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
