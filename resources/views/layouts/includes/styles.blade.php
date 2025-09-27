<meta charset="utf-8" />
    <title>Altakassus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="http://via.placeholder.com/30x30">
    @if (app()->getLocale()== "ar")
    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('rtl-file/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('rtl-file/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('rtl-file/css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('rtl-file/css/style.css') }}" />
    <link href="https://db.onlinewebfonts.com/c/4ce5fad2df30ef4ed5ee61f579ee24b7?family=CoconNextArabic-Regular" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('rtl-file/css/skins/red.css') }}" /> --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('rtl-file/js/plugins/revolution/css/settings.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('rtl-file/js/plugins/revolution/css/layers.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('rtl-file/js/plugins/revolution/css/navigation.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

     @else
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link href="https://db.onlinewebfonts.com/c/4ce5fad2df30ef4ed5ee61f579ee24b7?family=CoconNextArabic-Regular" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/skins/red.css') }}" /> --}}
    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugins/revolution/css/settings.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugins/revolution/css/layers.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugins/revolution/css/navigation.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @endif

    @if (Route::is('contractors'))
    <link rel="stylesheet" href="{{ asset('css/skins/red.css') }}">
    @elseif (Route::is('conditioning'))
    <link rel="stylesheet" href="{{ asset('css/skins/blue.css') }}">
    @else
    <link rel="stylesheet" href="{{ asset('css/skins/blue.css') }}">
    @endif

    <!-- Template JS Files -->
    <script src="{{ asset('js/modernizr.js') }}"></script>