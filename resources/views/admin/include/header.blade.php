<!DOCTYPE html>
<html class="loading" lang="en">
<!-- BEGIN : Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="../../css.css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/simple-line-icons/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/chartist.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/layout-dark.min.css')}}">
    <link rel="stylesheet" href="{{asset('app-assets/css/plugins/switchery.min.css')}}">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/horizontal-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/dashboard1.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END: Custom CSS-->
</head>
<!-- END : Head-->

<!-- BEGIN : Body-->

<body class="horizontal-layout horizontal-menu horizontal-menu-padding navbar-static 2-columns  navbar-static layout-dark layout-transparent bg-glass-2" data-bg-img="bg-glass-2" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
    @include('admin.include.navbar')
            <div class="main-panel">
                 @yield('content')
                 <!-- BEGIN : Footer-->
                <footer class="footer undefined undefined">
                    <p class="clearfix text-muted m-0"><span>Copyright &copy; 2020 &nbsp;</span><a href="../../user/pixinvent/portfolio.html?ref=pixinvent" id="pixinventLink" target="_blank">PIXINVENT</a><span class="d-none d-sm-inline-block">, All rights reserved.</span></p>
                </footer>
                <!-- End : Footer-->
        <!-- Scroll to top button -->
        <button class="btn btn-primary scroll-top" type="button"><i class="ft-arrow-up"></i></button>
            </div>
       </div>
    @include('admin.include.sidenotification')
    @include('admin.include.themecumtomize')
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/switchery.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('app-assets/vendors/js/chartist.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="{{asset('app-assets/js/core/app-menu.min.js')}}"></script>
    <script src="{{asset('app-assets/js/core/app.min.js')}}"></script>
    <script src="{{asset('app-assets/js/notification-sidebar.min.js')}}"></script>
    <script src="{{asset('app-assets/js/customizer.min.js')}}"></script>
    <script src="{{asset('app-assets/js/scroll-top.min.js')}}"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('app-assets/js/dashboard1.min.js')}}"></script>
    <!-- END PAGE LEVEL JS-->
    <!-- BEGIN: Custom CSS-->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <!-- END: Custom CSS-->
</body>
<!-- END : Body-->

</html>