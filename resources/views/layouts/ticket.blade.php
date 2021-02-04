<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Ticket4u</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('theme/css/material-kit.css?v=2.0.7') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('theme/demo/demo.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/datatables.min.css') }}" rel="stylesheet" />
</head>
<body>
    @include('layouts.nav')
    @yield('content')

    @include('layouts.footer')

    <!--   Core JS Files   -->

    <script src="{{ asset('theme/js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/js/plugins/moment.min.js') }}"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('theme/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('theme/js/material-kit.js?v=2.0.7') }}" type="text/javascript"></script>

    <script>
    $(document).ready(function() {
        // Sliders Init
        materialKit.initSliders();
        });

        function scrollToDownload() {
        if ($('.section-download').length != 0) {
            $("html, body").animate({
            scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
    </script>

</body>
</html>
