<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link name="favicon" type="image/x-icon" href="{{asset('img/favicon.png')}}" rel="shortcut icon" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('css/nifty.min.css')}}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-timepicker.min.css')}}" rel="stylesheet">

    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{ asset('css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">

    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{ asset('css/demo/nifty-demo.min.css') }}" rel="stylesheet">

    <!--Theme [ DEMONSTRATION ]-->
    <link href="{{ asset('css/themes/type-b/theme-purple.min.css') }}" rel="stylesheet">

    <!--Custom [ OPTIONAL ]-->
    <link href="{{ asset('css/custom.css')}}" rel="stylesheet">

    <!--Select2 [ OPTIONAL ]-->
    <link href="{{ asset('plugins/select2/css/select2.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors/main.css') }}" id="colors">
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}" id="icons">


    <!--Unite Gallery [ OPTIONAL ]-->
    <link href="{{  asset('plugins/unitegallery/css/unitegallery.min.css') }}" rel="stylesheet">


</head>
<body>

    <div id="container" class="cls-container">
        @include('inc.user_nav')
        <div class="cls-content">
            <div id="alert" class="text-center col-md-12" align="right">
                        @include('flash::message')
                    </div>
            @yield('content')
        </div>
    </div>

    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src=" {{asset('js/jquery.min.js') }}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-timepicker.min.js') }}"></script>

    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{ asset('js/nifty.min.js') }}"></script>

    <!--Alerts [ SAMPLE ]-->
    <script src="{{asset('js/demo/ui-alerts.js') }}"></script>

    <!--Select2 [ OPTIONAL ]-->
    <script src="{{ asset('plugins/select2/js/select2.min.js')}}"></script>

    <!--Form Component [ SAMPLE ]-->
    <script src="{{ asset('js/custom.js')}}"></script>

    @include('partials.modal')

    @yield('script')



</body>
</html>
