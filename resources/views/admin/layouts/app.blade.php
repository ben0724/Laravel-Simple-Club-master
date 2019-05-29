<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Icons-->
    <link href="{{ asset('coreui/vendors/@coreui/icons/css/coreui-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('coreui/vendors/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('coreui/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('coreui/vendors/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset('coreui/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('coreui/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('admin.partials.header')

    <div class="app-body">
        @include('admin.partials.sidebar')
        
        @yield('content')
    </div>
    
    @include('admin.partials.footer')

    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('coreui/vendors/jquery/js/jquery.min.js') }}"></script>
    <script src="{{ asset('coreui/vendors/popper.js/js/popper.min.js') }}"></script>
    <script src="{{ asset('coreui/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('coreui/vendors/pace-progress/js/pace.min.js') }}"></script>
    <script src="{{ asset('coreui/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('coreui/vendors/@coreui/coreui/js/coreui.min.js') }}"></script>
    <!-- Plugins and scripts required by this view-->
    <!-- <script src="{{ asset('coreui/vendors/chart.js/js/Chart.min.js') }}"></script> -->
    <!-- <script src="{{ asset('coreui/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js') }}"></script> -->
    <!-- <script src="{{ asset('coreui/js/main.js') }}"></script> -->
</body>
</html>
