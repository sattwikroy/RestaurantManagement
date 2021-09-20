<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('adminDash/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('adminDash/css/material-dashboard.css') }}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('adminDash/css/demo.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('adminDash/css/dataTables.bootstrap.min.css') }}" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    @stack('css')
</head>
<body>
    <div id="app">
        <div class="wrapper">
                @include('layouts.partial.sidebar')
            <div class="main-panel">
                    @include('layouts.partial.topbar')
                    @yield('content')
                    @include('layouts.partial.footer')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <!--   Core JS Files   -->
    <script src="{{ asset('adminDash/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminDash/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('adminDash/js/material.min.js') }}" type="text/javascript"></script>
    <!--  Charts Plugin -->
    <script src="{{ asset('adminDash/js/chartist.min.js') }}"></script>
    <!--  Dynamic Elements plugin -->
    <script src="{{ asset('adminDash/js/arrive.min.js') }}"></script>
    <!--  PerfectScrollbar Library -->
    <script src="{{ asset('adminDash/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('adminDash/js/bootstrap-notify.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="{{ asset('adminDash/js/material-dashboard.js') }}"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('adminDash/js/demo.js') }}"></script>    
    <script src="{{ asset('adminDash/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminDash/js/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();
        });
    </script>

    @stack('scripts')
</body>
</html>