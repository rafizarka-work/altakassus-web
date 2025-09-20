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
              @include('layouts.includes.slider')
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