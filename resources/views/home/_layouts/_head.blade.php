<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/bootstrap.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/owl.theme.default.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('home/assets/fonts/flaticon.css') }}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/boxicons.min.css') }}">
    <!-- Animate Min CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('home/assets/css/animate.min.css') }}"> --}}
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/magnific-popup.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/meanmenu.css') }}">
    <!-- Nice Select CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('home/assets/css/nice-select.min.css') }}"> --}}
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/responsive.css') }}">
    <!-- RTL CSS -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/rtl.css') }}">

    <!-- Title -->
    <title>{{ setting('site_title') }} </title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('abahee.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .owl-carousel {
            display: block;
        }

        .counter-area {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        @media only screen and (min-width: 5px) {
            /* table {
                border-collapse: separate !important;
                border-spacing: 0 2em !important; */

            /* border-collapse: collapse !important;
  border-spacing: 0 !important; */
            /* } */


            /*  separate needed      */
            tr {
                display: flex !important;
                white-space: nowrap !important;
                margin-bottom: 22px !important;
            }

            /* tr:not(:first-child) { text-align: center !important; } */
            td {
                /* display: inline-block !important */
            }

            /*  Firefox need inline-block + width  */
            td {
                /* position: relative !important; */
                /* padding: 12px 35px !important; */
                /* border-radius: 15px; */
                /* box-shadow: 10px 5px 5px #aaaaaa; */
                box-shadow: 0px +7px 7px #aaa !important;
                width: 180px !important;
            }

            /*  needed to make td move             */
            /* td {
                left: 10px !important;
                box-shadow: 1px 12px 8px #aaa !important;
            } */

            /*  push all 10px                      */
            td:first-child {
                left: : 0px !important;
                width: 100px !important;
                box-shadow: none !important;

            }

            tr:last-child {
                margin-bottom: 40px !important;

            }

            td.m1 {
                color: transparent;
                position: relative;
                top: 14px;
                transform: skewY(-50deg);
                /* translate: 0px 14px;
                -ms-transform: 0px 14px;
                -webkit-transform:  0px 14px; */
                box-shadow: 0px 6px 8px #aaa !important;
                background: linear-gradient(#cc9933, #d19426, #cc9933);

                width: 20px !important;
            }



            td.m2 {
                color: transparent;
                transform: skewY(50deg);
                background: linear-gradient(#cc9933, #d19426, #cc9933);

                position: relative;
                top: 14px;
                /* translate: 0px 14px;
                -ms-transform: 0px 14px;
                -webkit-transform:  0px 14px; */
                box-shadow: 0px 6px 8px #aaa !important;
                width: 20px !important;

            }

            /*  push 3:rd another extra 10px       */
            td.back {
                position: relative;
                top: 28px;
                /* translate: 0px 28px;

                -ms-transform: 0px 28px;
                -webkit-transform:  0px 28px; */
                /* right: 5px; */
                /* margin-top: 24px; */
                font-size: 13px !important;
                box-shadow: 0px 12px 8px #aaa !important;
                width: 167px !important;
            }

            .table-striped tbody tr:nth-of-type(2n+1) {
                background-color: none !important;
            }


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

            ::-webkit-scrollbar {
                height: 14px !important;
                /* height of horizontal scrollbar ← You're missing this */
                width: 4px !important;
                /* width of vertical scrollbar */
                border: 1px solid #094748 !important;
            }

            ::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px gray !important;
                border-radius: 10px !important;
            }

            ::-webkit-scrollbar-thumb {
                border-radius: 10px !important;
                background-color: #094748 !important;
                -webkit-box-shadow: inset 0 0 6px rgba(90, 90, 90, 0.7) !important;
            }
        }

        .map-area-two iframe {
            max-height: 50vh !important;
        }
        @media only screen and (max-width: 767px){
            .map-area-two iframe {
            max-height: 30vh !important;
        }

        }

        @media only screen and (max-width: 995px){

        .project-desktop{
            display: none;
        }
        }

        @media only screen and (min-width: 995px){
            .project-mobile{
            display: none;
        }
        }
    </style>
</head>
