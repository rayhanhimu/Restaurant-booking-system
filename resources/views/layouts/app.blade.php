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

    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{ asset('css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">

    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{ asset('css/demo/nifty-demo.min.css') }}" rel="stylesheet">

    <!--Theme [ DEMONSTRATION ]-->
    <link href="{{ asset('css/themes/type-full/theme-dark-full.min.css') }}" rel="stylesheet">

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

</head>
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        
        @include('inc.admin_nav')
        

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-content">

                    @yield('content')

                </div>
            </div>
        </div>

        @if(Auth::user()->user_type == "SystemAdmin")
            @include('inc.systemadmin_sidenav')
        @elseif(Auth::user()->user_type == "Admin")
            @include('inc.admin_sidenav')
        @endif
        
        @include('inc.admin_footer')

        @include('partials.modal')

    </div>

        <!--JAVASCRIPT-->
        <!--=================================================-->

        <!--jQuery [ REQUIRED ]-->
        <script src=" {{asset('js/jquery.min.js') }}"></script>


        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>


        <!--NiftyJS [ RECOMMENDED ]-->
        <script src="{{ asset('js/nifty.min.js') }}"></script>

        <!--Alerts [ SAMPLE ]-->
        <script src="{{asset('js/demo/ui-alerts.js') }}"></script>

        <!--Bootstrap Wizard [ OPTIONAL ]-->
        <script src="{{ asset('plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>


        <!--Form Wizard [ SAMPLE ]-->
        <script src="{{ asset('js/demo/form-wizard.js')}}"></script>


        <script type="text/javascript">

            $( document ).ready(function() {
                //$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
                $('.nav-link').each(function(){
                    var url = window.location.pathname,
                    urlRegExp = new RegExp(url.replace(/\/$/,''));
                    if(urlRegExp.test(this.href)){
                        $(this).parent().addClass('active-link');
                    }  
                });
            });

        </script>

        @yield('script')

</body>
</html>
