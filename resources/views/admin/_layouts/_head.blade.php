<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="admin">
    <meta name="author" content="ThemeSelect">
    <title>لوحة التحكم - أباهي</title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/theme-assets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/theme-assets/vendors/css/charts/chartist.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/theme-assets/css/app-lite.css') }}">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/theme-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/theme-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/theme-assets/css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->

    <link rel="stylesheet" href="{{ asset('admin/assets/css/style-rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/rtl.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('dist/css/rtl.css') }}"> --}}

    <style>
        .td1 {
            text-align: center;
            color: white;
            font-weight: bolder;
            font-size: 16px;
            background: linear-gradient(#cc9933, #d19426, #cc9933);
        }

        .td2 {
            text-align: center;
            color: white;
            font-weight: bolder;
            font-size: 16px;

            background-color: #0aafb6;
        }

        .td3 {
            text-align: center;
            color: white;
            font-weight: bolder;
            font-size: 16px;
            background-color: #094748
        }

        .td {

            background-color: #fdb901;
        }


        .main-menu {
            direction: rtl;
            text-align: right;
            right: 0;
        }

        .app-content {
            margin-left: 0 !important;
            margin-right: 250px;
        }

        .header-navbar {
            margin-right: 250px;
        }

        .navbar-container {
            margin-left: 0 !important;
        }

        .dropdown-language .dropdown-menu {
            left: 0 !important;
            direction: rtl;
        }

        .dropdown-notification .dropdown-menu {

            direction: rtl;
        }

        .dropdown-user .dropdown-menu {

            direction: rtl;
        }

        .main-menu-content i {
            margin-right: 0 !important;
            margin-left: 12px;
        }

        .dropdown-item .avatar {
            direction: rtl;
        }

        .dropdown-menu .show {
            direction: rtl !important;
        }

        .card-content {
            direction: rtl !important;
        }

        .card-content i {
            position: absolute;
            left: 0;
        }

        .card .card-title {
            float: right;
            margin-right: 50px;
        }

        .card .heading-elements {
            right: unset !important;
        }

        .footer {
            margin-left: 0 !important;
        }

        @media screen and (max-width: 768px) {
            .header-navbar {
                margin-right: 0;
            }

            .app-content {
                margin-right: 0;
            }

            .table th,
            .table td {
                padding: 10px 10px !important;
            }

            .project th,
            .project td {
                padding: 10px 0px !important;
            }

            .project th:first-child,
            .project td:first-child {
                padding: 10px !important;
            }


        }

        .sidebar-mini.sidebar-collapse .content-wrapper,
        .sidebar-mini.sidebar-collapse .right-side,
        .sidebar-mini.sidebar-collapse .main-footer {
            margin-right: 50px !important
        }

        .notify-alert.notify-success.animated,
        .notify-alert.notify-error.animated {
            direction: ltr !important;
            right: inherit !important;
            left: 0 !important;
            margin-top: 22px !important;
        }

        .card-body a {
            position: relative;
            z-index: 5;
        }
    </style>
    <!-- include libraries(jQuery, bootstrap) -->
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('abahee.png') }}">
    @yield('head')
</head>
