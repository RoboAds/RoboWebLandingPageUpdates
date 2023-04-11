<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
          content="Roboads - An IT COMPANY ">
    <meta name="author" content="ROBOADS">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!-- Website Title -->
    <title>RoboAds - {{$title}}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext"
          rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;500;900&display=swap" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('assets/images/files/robo-icon.png')}}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YDX7NPZ3L6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-YDX7NPZ3L6');
    </script>

    <style>
        body {

            margin: 0;
            padding: 0;
        }



        @media only screen and (max-width: 600px) {

            .contact-form-wrapper {
                padding: 100px 0;
                background: transparent;
            }

            .contact-form {
                margin: 1px 26px;
            }
            .chat {
                padding: 10px 20px;
                height: 50px;
                border-radius: 80px;
            }

            #chatbutton {
                position: fixed;
                bottom: 55px;
                right: -17px;
            }

            #social {
                height: 54px;
                margin-left: 7px;
            }

            .ul-left li {
                margin: 1px 0px 4px -48px !important;
                list-style: none;
                color: white;
                font-weight: 400;
            }

            .solutions {
                margin: 0px;
            }

            .card-img-top1 {
                width: 100px;
                margin: auto;
            }

            .larger-screen {
                display: none;
            }

            .custom-btn {
                width: 130px;
                height: 32px;
                background: #14bf98;
                border: none;
                box-shadow: none;
                outline: none;
                color: white;
                font-weight: bold;
                border-radius: 4px;
            }

            h5.h2-right-ra-200 {
                font-size: 13px;
                margin-top: -11px;
                font-weight: 500;
            }

            .ul-left li img {
                float: left !important;
                margin: 1px 1px 1px 7px;
                margin: auto;
            }

            .ra-500 {
                font-size: initial;
            }

            .h5-ra-500 {
                font-size: 14px;
                font-weight: 500;
                margin-top: -19px;
            }


            .ul-solutions li {
                list-style: none;
                color: #bbbbbb;
                font-weight: 100;


            }

            .telep {
                font-size: 15px;

                color: white !important;
                text-align: left !important;
            }

            #products-right li {
                list-style: none;
                margin: 1px -41px;
                font-weight: 400;

            }

            .small-screen {
                overflow-y: scroll;
                height: 500px;
            }

            .telepresence {
                overflow-y: scroll;
                height: 300px;
            }

            .small-screen .image-ra-100 {
                width: 58%;
                margin: 1px 72px;
            }

            .dropdown-menu {
                width: 98.5% !important;
                background: black !important;
            }
        }

        @media only screen and (min-width: 600px) {
            .contact-form-wrapper {
                padding: 100px 0;
            }

            #chatbutton {
                display: none;
            }

            .ra-500 {
                font-size: 23px;
            }

            .h5-ra-500 {
                font-size: 14px;
                margin-top: -19px;
                font-weight: 400 !important;
            }

            h5.h2-right-ra-200 {
                font-size: 13px;
                margin-top: -11px;
                font-weight: 500;
            }

            .small-screen {
                display: none;
            }

            video {
                min-width: 100%;
                min-height: 100vh;
                z-index: 1;
            }

            .overlay {
                width: 100%;
                height: 100vh;
                position: absolute;
                top: 0;
                left: 0;
                background-image: linear-gradient(45deg, rgba(0, 0, 0, .3) 50%, rgba(0, 0, 0, .7) 50%);
                background-size: 3px 3px;
                z-index: 2;
            }

            h1 {
                text-align: center;
                color: #fff;
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                margin: auto;
                z-index: 3;
                max-width: 400px;
                width: 100%;
                height: 50px;
            }

            /*     h2 {

                     background: -webkit-linear-gradient(#084681, #5effe7, #0f3e6c);
                     -webkit-background-clip: text;
                     -webkit-text-fill-color: transparent;
                 }*/
            .seperator {
                background: #787878;
                width: 0.3px;
            }

            #products li {
                list-style: none;
                line-height: normal;
            }


            #social {
                height: 50px;
            }

            .ul-left {

            }

            .ul-left li {
                margin: 1px 0px 4px 5px;
                list-style: none;
                color: white;
                font-weight: 400;
                text-align: right;
            }

            #products-right li {
                list-style: none;
                margin: 1px -41px;
                font-weight: 400;
            }

            .ul-left li img {
                float: right;
                margin: 1px 1px 1px 7px;
            }

            hr {
                border: 1px solid #497bc9;
                height: 166px;
            }

            .solutions {
                margin: 1px 1px 1px -106%;
            }

            .telepresence {
                margin: 1px 1px 1px -271%;
            }

            .products-menu {
                margin: 1px 1px 1px -189%;
            }


            .ul-solutions li {
                list-style: none;
                text-align: center;

            }

            .telep {
                font-size: 15px;

                color: white !important;
            }

            .ul-solutions li {
                text-align: center !important;
                line-height: 16px;
                margin: 1px 1px 4px -1px !important;
                font-weight: 100;
                color: #d9d9d9;

            }

            .ul-solutions {
                padding: 13px 0px 0px 0px;
            }

            .solutions .row .col-sm-3 h6 {
                color: #ffffff;
                font-size: 13px;
                text-align: center;
                font-weight: 500;
                margin-bottom: 27px;
                margin-top: -20px;
                padding: 6px;
            }

            .solutions-topText {
                background: #082C64;
                margin: -19px;
                margin-top: -31px;;
            }

            .solutions-topText h2 {

            }

            .li-space-lg .white {
                text-decoration: none;
            }

            .address li .white {
                display: flow-root;
            }

            /* 11 */
            .h2-right-ra-200 {
                text-align: right;
                font-size: 23px;
            }

            .custom-btn {
                width: 130px;
                height: 32px;
                background: #14bf98;
                border: none;
                box-shadow: none;
                outline: none;
                color: white;
                font-weight: bold;
                border-radius: 4px;
            }

            ::-webkit-scrollbar {
                width: 10px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px white;
                border-radius: 10px;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: linear-gradient(45deg, #09499f, #739cf1, #1f559a);
                border-radius: 10px;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: linear-gradient(45deg, #09499f, #618dee, #00419a);
            }

            .top-nav-collapse .telepresence {
                margin-top: 12px;
            }
        }

        .copied {
            width: 85px;
            display: none;
            position: fixed;
            bottom: 12%;
            left: 0;
            right: 0;
            margin: auto;
            color: #000;
            padding: 15px 15px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 3px 15px #b8c6db;
            -moz-box-shadow: 0 3px 15px #b8c6db;
            -webkit-box-shadow: 0 3px 15px #b8c6db;
        }

        .copybtn:focus {
            outline: none;
        }

        .ra-500-hover {
            color: white !important;
        }

        .ra-500-hover:hover {
            color: #14bf98 !important;
        }

        h2 {
            font-family: Inter !important;
        }

        .dropdown-menu, .top-nav-collapse {
            background: black !important;
        }

        .navbar-custom.top-nav-collapse {
            opacity: .98 !important;
        }

        .dropdown-menu {
            opacity: .98 !important;
        }

        img {
            opacity: 1 !important;
        }


        .textarea-input, .title-area {
            border: none;
            border-radius: 0;
            border-bottom: 2px solid #61afff;
            outline: none;
            margin-bottom: 23px;
        }

        .title-area {
            font-size: xx-large;
        }

        .textarea-input:focus, .title-area:focus {
            outline: none;
            box-shadow: none;
            border-color: #0184d1;
        }


        .contact-form {
            padding: 30px 40px;
            background-color: #0f3fab1c;
            box-shadow: 5px 4px 11px -7px grey;
            border-radius: 12px;
            max-width: 550px;

        }

        .contact-form textarea {
            resize: none;
        }

        .contact-form .form-input,
        .form-text-area {
            background-color: #f0f4f5;
            height: 50px;
            padding-left: 16px;
            border: 1px solid #e5e5e5 !important;
        }

        .contact-form .form-text-area {
            background-color: #f0f4f5;
            height: auto;
            padding-left: 16px;
        }

        .contact-form .form-control::placeholder {
            color: #aeb4b9;
            font-weight: 500;
            opacity: 1;
        }

        .contact-form .form-control:-ms-input-placeholder {
            color: #aeb4b9;
            font-weight: 500;
        }

        .contact-form .form-control::-ms-input-placeholder {
            color: #aeb4b9;
            font-weight: 500;
        }

        .contact-form .form-control:focus {
            border-color: #0382eb;
            box-shadow: 0px 0px 11px -3px #0382eb;
            transition-duration: .2s;
        }

        .contact-form .title {
            text-align: center;
            font-size: 24px;
            font-weight: 500;
        }

        .contact-form .description {
            color: #aeb4b9;
            font-size: 14px;
            text-align: center;
        }

        .contact-form .submit-button-wrapper {
            background: linear-gradient(6deg, #04409b, #058cc0bd);
            border: none;
            color: white;
            border-radius: 30px;
            width: 113px;
            margin: auto;
        }

        .contact-form .submit-button-wrapper:hover {
            background: linear-gradient(6deg, #0251c7, rgba(0, 164, 225, 0.74));
            border: none;
            color: white;
            border-radius: 30px;
            width: 113px;
            margin: auto;
        }

        .submit-button-wrapper:disabled,
        .submit-button-wrapper[disabled] {
            background: #cccccc !important;
            color: #ffffff !important;
            border: none !important;
        }

        .overlay .text-container h2 {
            color: cadetblue;
        }


        .container-for-robots {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 961px;
            height: 673px;
            background: #fff;
            margin: 20px;
        }

        .container-for-robots .imgBx {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50%;
            height: 100%;
            background: white !important;
            transition: .3s linear;
        }

        .container-for-robots .imgBx:before {
            content: '';
            position: absolute;
            top: 0px;
            left: 24px;
            color: #000;
            opacity: 0.2;
            font-size: 9em;
            font-weight: 800;
        }

        .container-for-robots .imgBx img {
            position: relative;
            height: 500px;
            left: -50px;
            transition: .9s linear;
        }

        .container-for-robots .details {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50%;
            height: 100%;
            box-sizing: border-box;
            padding: 40px;
        }

        .container-for-robots .details h2 {
            margin: -61px 3px 9px 1px;
            padding: 0;
            font-size: 2.4em;
            line-height: 1em;
            color: #444;
        }

        .container-for-robots .details h2 span {
            font-size: 0.4em;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #999;
        }

        .container-for-robots .details p {
            max-width: 85%;
            color: #333;
            font-size: 15px;
            margin-bottom: 36px;
        }

        .container-for-robots .details h3 {
            margin: 0;
            padding: 0;
            font-size: 2.5em;
            color: #a2a2a2;
            float: left;
        }

        .container-for-robots .details button {
            background: #000;
            color: #fff;
            border: none;
            outline: none;
            padding: 15px 20px;
            margin-top: 5px;
            font-size: 16px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 600;
            border-radius: 40px;
            float: right;
        }

        .product-colors span {
            width: 26px;
            height: 26px;
            top: 7px;
            margin-right: 12px;
            left: 10px;
            border-radius: 50%;
            position: relative;
            cursor: pointer;
            display: inline-block;
        }

        .black {
            background: #000;
        }

        .red {
            background: #D5212E;
        }

        .orange {
            background: #F18557;
        }

        .product-colors .active:after {
            content: "";
            width: 36px;
            height: 36px;
            border: 2px solid #000;
            position: absolute;
            border-radius: 50%;
            box-sizing: border-box;
            left: -5px;
            top: -5px;
        }

        /* responsive */
        @media (max-width: 1080px) {
            .container-for-robots {
                height: auto;
            }

            .container-for-robots .imgBx {
                padding: 40px;
                box-sizing: border-box;
                width: 100% !important;
                height: auto;
                text-align: center;
                overflow: hidden;
            }

            .container-for-robots .imgBx img {
                left: initial;
                max-width: 100%;
                transform: rotate(0deg);
            }

            .details {
                width: 100% !important;
                height: auto;
                padding: 20px;
            }

            .container-for-robots .details p {
                margin-left: 0;
                max-width: 100%;
            }
        }
        .custom-btn {
            width: 130px;
            height: 40px;
            color: #fff;
            border-radius: 5px;
            padding: 10px 25px;
            font-family: 'Lato', sans-serif;
            font-weight: 500;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
            box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
            7px 7px 20px 0px rgba(0,0,0,.1),
            4px 4px 5px 0px rgba(0,0,0,.1);
            outline: none;
        }

        .btn-13 {

            background-image: linear-gradient(315deg, #598efc 0%, #1077f8 74%);
            border: none;
            z-index: 1;
            padding: 8px;
            text-decoration: none;
        }
        .btn-13:after {
            position: absolute;
            content: "";
            width: 100%;
            height: 0;
            bottom: 0;
            left: 0;
            z-index: -1;
            border-radius: 5px;
            background-color: #4dccc6;
            background-image: linear-gradient(315deg, #0444c9 0%, #1077f8 74%);
            box-shadow:
                -7px -7px 20px 0px #fff9,
                -4px -4px 5px 0px #fff9,
                7px 7px 20px 0px #0002,
                4px 4px 5px 0px #0001;
            transition: all 0.3s ease;
        }
        .btn-13:hover {
            color: #fff;
        }
        .btn-13:hover:after {
            top: 0;
            height: 100%;
        }
        .btn-13:active {
            top: 2px;
        }

        .ul-solutions li:hover {
            color: #b3b3b3 !important;

        }

        .navbar-links {
            list-style-type: none;
            display: flex;
        }

        .navbar-links li a {
            display: block;
            text-decoration: none;
            color: white;
            padding:6px 9px 4px 5px;
            font-weight: 700;
            transition: 0.4s all;
        }

        .navbar-links li.navbar-dropdown {
            position: relative;
        }

        .navbar-links li.navbar-dropdown:hover .dropdown {
            visibility: visible;
            opacity: 1;
            transform: translateY(0px);
        }

        .navbar-links li.navbar-dropdown .dropdown {
            visibility: hidden;
            opacity: 0;
            position: absolute;
            padding: 20px 25px;
            top: 100%;
            transform: translateY(50px);
            left: 0;
            width: 211px;
            background-color: rgba(0, 0, 0, 0.7);
            box-shadow: 0px 10px 10px 3px rgb(0 0 0 / 30%);
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            transition: 0.4s all;
        }
        .navbar-links li.navbar-dropdown .dropdown a {
            padding-top: 10px;
            padding-bottom: 10px;
            font-weight: 400;
        }
        .navbar-dropdown .dropdown a:hover {
            padding-left: 30px;
        }
        .navbar-links li a:hover {
            color: #14bf98;
        }
        .navbar-links li a.active {
            color: #14bf98;
        }

.bootstrap-tagsinput .tag{
    background: #044dc5b5;
    border-radius: 3px;
    padding: 3px;
    font-size: 14px;
    font-family: inherit;
}
.control-label{
    font-size: 15px;
    margin-left: 13px;
    color: #363636;
}
        .bootstrap-tagsinput{
            width: 100%;
        }

        #blah{
            height: 200px;
            width: 200px;
            object-fit: cover;
            border: none;
            border-radius: 10px;
            box-shadow: 1px 1px 16px -2px;
        }

    </style>
</head>
<body data-spy="scroll" data-target=".fixed-top">

<!-- Preloader -->

<!-- end of preloader -->


<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">

    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.blade.php">Aria</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="/"><img src="{{asset('assets/images/logo_RoboAds.png')}}"
                                                                      alt="alternative"></a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto navbar-links">
            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll products" id="navbarDropdown" role="button"
                   aria-haspopup="true" aria-expanded="false">PRODUCTS</a>
                <div class="dropdown-menu solutions" aria-labelledby="navbarDropdown"
                     style="width: max-content;background: #2964bf;padding: 19px;">
                    <div class="row small-screen">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card bg-transparent border-0" style="width: 18rem;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <a href="{{route('raOneHundred')}}">
                                                <img class="image-ra-100"
                                                     src="https://faceaqses.s3.amazonaws.com/roboedge/ra100-s3-imp.png"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <a href="{{route('raOneHundred')}}" style="text-decoration: none">
                                                    <h2 class="text-white ra-500  ra-500-hover">RA-100</h2></a>

                                                <h5 class="text-white"
                                                    style="font-size: 14px;margin-top: -14px;font-weight: 500">Robotic
                                                    Digital
                                                    signage</h5>
                                                <ul class="text-white " id="products-right">
                                                    <li style="font-size: 12px"><img
                                                            src="{{asset('assets/images/files/bullets.png')}}" alt="">
                                                        Autonomous with 3D Lidars
                                                    </li>
                                                    <li style="font-size: 12px"><img
                                                            src="{{asset('assets/images/files/bullets.png')}}" alt="">
                                                        Three
                                                        4K Signage Displays
                                                    </li>
                                                    <li style="font-size: 12px"><img
                                                            src="{{asset('assets/images/files/bullets.png')}}" alt="">
                                                        Auto
                                                        Docking Stations
                                                    </li>
                                                    <li style="font-size: 12px"><img
                                                            src="{{asset('assets/images/files/bullets.png')}}" alt="">
                                                        Fast
                                                        Charging and long lasting batteries
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card bg-transparent border-0" style="width: 18rem;">

                                    <a href="{{route('raTwoHundred')}}" class="text-center">
                                        <img class="card-img-top1"
                                             src="{{asset('assets/images/files/ra-200-header1.png')}}"
                                             alt="Card image cap">
                                    </a>
                                    <div class="card-body">
                                        <h2 class="ra-500 text-white "><a class="ra-500-hover"
                                                                          style="text-decoration:none;color: white;font-weight: bold;"
                                                                          href="{{route('raTwoHundred')}}">RA-200</a>
                                        </h2>
                                        <h5 style="" class="h5-ra-500 text-white">
                                            Robotic Digital signage</h5>
                                        <ul id="products-left" class="ul-left">
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}"> Four signage
                                                Displays
                                            </li>
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}"> 4K video
                                                sharing
                                            </li>
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}"> Advanced 5G
                                                interfaces
                                            </li>
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}"> Fast
                                                Charging and long lasting
                                                batteries
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card bg-transparent border-0" style="width: 18rem;">
                                    <a href="{{route('products')}}" class="text-center">
                                        <img class="card-img-top1" src="{{asset('assets/images/files/robot2.png')}}"
                                             alt="Card image cap">
                                    </a>
                                    <div class="card-body bg-transparent">
                                        <a href="{{route('products')}}" style="text-decoration: none"><h2
                                                class="text-white ra-500  ra-500-hover">RA-500</h2></a>
                                        <h5 class="text-white h5-ra-500" style="font-size: 14px">Robotic Digital
                                            signage</h5>
                                        <ul class="text-white " id="products-right">
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}" alt="">
                                                Autonomous with 3D Lidars
                                            </li>
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}" alt=""> Four
                                                4K Signage Displays
                                            </li>
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}" alt=""> Auto
                                                Docking Stations
                                            </li>
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}" alt=""> Fast
                                                Charging and long lasting batteries
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row larger-screen" style="width: 989px;">
                        <div class="col-sm-5">
                            <div class="row">
                                <div class="col-md-8" style="margin:18px -0px">
                                    <div class="card-body">

                                        <h2 class="h2-right-ra-200 text-white "><a class="ra-500-hover"
                                                                                   style="text-decoration: none;font-weight: bold;"
                                                                                   href="{{route('raOneHundred')}}">RA-100</a>
                                        </h2>
                                        <h5 style="margin-top: -15px" class="h5-ra-500 text-right text-white">
                                            Robotic Digital signage</h5>
                                        <ul id="products-left" class="ul-left">
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}"> Four signage
                                                Displays
                                            </li>
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}"> 4K video
                                                sharing
                                            </li>
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}"> Advanced 5G
                                                interfaces
                                            </li>
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}"> Fast
                                                Charging and long lasting
                                                batteries
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <a href="{{route('raOneHundred')}}">
                                        <img style="    width: inherit;height: 214px;margin:-4px 0px 6px -51px"
                                             src="https://faceaqses.s3.amazonaws.com/roboedge/ra100-s3-imp.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-sm-6">
                            <div class="card mb-3 bg-transparent border-0" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <a href="{{route('products')}}">
                                            <img style="    width: inherit;height:181px;margin: 7px 53px 3px 1px;"
                                                 src="{{asset('assets/images/files/robot2.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="{{route('products')}}" style="text-decoration: none">
                                                <h2 class="text-white ra-500  ra-500-hover">RA-500</h2></a>

                                            <h5 class="text-white"
                                                style="font-size: 14px;margin-top: -14px;font-weight: 500">Robotic
                                                Digital
                                                signage</h5>
                                            <ul class="text-white " id="products-right">
                                                <li style="font-size: 12px"><img
                                                        src="{{asset('assets/images/files/bullets.png')}}" alt="">
                                                    Autonomous with 3D Lidars
                                                </li>
                                                <li style="font-size: 12px"><img
                                                        src="{{asset('assets/images/files/bullets.png')}}" alt=""> Three
                                                    4K Signage Displays
                                                </li>
                                                <li style="font-size: 12px"><img
                                                        src="{{asset('assets/images/files/bullets.png')}}" alt=""> Auto
                                                    Docking Stations
                                                </li>
                                                <li style="font-size: 12px"><img
                                                        src="{{asset('assets/images/files/bullets.png')}}" alt=""> Fast
                                                    Charging and long lasting batteries
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="card mb-3 bg-transparent border-0" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-8">
                                        <div class="card-body">

                                            <h2 class="h2-right-ra-200 text-white "><a class="ra-500-hover"
                                                                                       style="text-decoration: none;font-weight: bold;"
                                                                                       href="{{route('raTwoHundred')}}">RA-200</a>
                                            </h2>
                                            <h5 style="margin-top: -15px" class="h5-ra-500 text-right text-white">
                                                Robotic Digital signage</h5>
                                            <ul id="products-left" class="ul-left">
                                                <li style="font-size: 12px"><img
                                                        src="{{asset('assets/images/files/bullets.png')}}"> Four signage
                                                    Displays
                                                </li>
                                                <li style="font-size: 12px"><img
                                                        src="{{asset('assets/images/files/bullets.png')}}"> 4K video
                                                    sharing
                                                </li>
                                                <li style="font-size: 12px"><img
                                                        src="{{asset('assets/images/files/bullets.png')}}"> Advanced 5G
                                                    interfaces
                                                </li>
                                                <li style="font-size: 12px"><img
                                                        src="{{asset('assets/images/files/bullets.png')}}"> Fast
                                                    Charging and long lasting
                                                    batteries
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                        <a href="{{route('raTwoHundred')}}">
                                            <img style="    width: inherit;height:181px;margin: 7px 53px 3px 1px;"
                                                 src="{{asset('assets/images/files/ra-200-header1.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- end of dropdown menu -->
            {{--    <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">SERVICES</a>
                </li>--}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll solution" id="navbarDropdownsolutions" role="button"
                   aria-haspopup="true" aria-expanded="false">SERVICES</a>
                <div class="dropdown-menu telepresence" aria-labelledby="navbarDropdownsolutions"
                     style="width: max-content;background: #2964bf;padding: 19px;">

                        <div class="row text-white" style="font-size: 12px">

                            <div class="col-sm-3">
                                <div class="solutions-topText">
                                 <h2 class="text-white text-center telep ">ADVERTISING</h2>
                                </div>
                                <a href="{{route('solutions_advertising')}}" class="text-decoration-none">
                                    <ul class="ul-solutions">
                                    <li style="font-size: 14px;font-weight: 500;color: white">Moving signage screens
                                    </li>
                                    <li>Market your products by displaying image,<br> video and motion graphic
                                        advertising
                                        <br> content on RoboAds Advertising robot
                                    </li>
                                </ul>
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <div class="solutions-topText">
                                    <h2 class="text-white text-center telep tpresense">TELEPRESENCE</h2>
                                </div>
                                <a href="{{route('solutions_telepresense')}}" class="text-decoration-none">
                                <ul class="ul-solutions">
                                    <li style="font-size: 14px;font-weight: 500;color: white">Connect People remotely
                                    </li>
                                    <li>Talk and interact with your customers <br> from anywhere around the world by
                                        virtual
                                        <br> presence on RoboAds Telepresence Robot.
                                    </li>
                                </ul>
                                </a>
                            </div>


                            <div class="col-sm-3">
                                <div class="solutions-topText">
                                    <h2 class="text-white text-center telep artif">ARTIFICIAL INTELLIGENCE</h2>
                                </div>
                                <a href="{{route('solutions_ai')}}" class="text-decoration-none">
                                <ul class="ul-solutions">
                                    <li style="font-size: 14px;font-weight: 500;color: white">Interactions with
                                        Customers
                                    </li>
                                    <li>Improve demand forecasting and unveil <br> new business opportunities. <br> As a
                                        result, customers connect with the
                                        <br> right products, in the right place, <br> at the right time.
                                    </li>
                                </ul>
                                </a>
                            </div>

                            <div class="col-sm-3">
                                <div class="solutions-topText">
                                    <h2 class="text-whit text-center telep customise">CUSTOMIZATIONS</h2>
                                </div>
                                <a href="{{route('solutions_customisations')}}" class="text-decoration-none">
                                <ul class="ul-solutions">
                                    <li>
                                    <li style="font-size: 14px;font-weight: 500;color: white">Developing unique
                                        Solutions
                                    </li>
                                    <li>Tailored solutions to fit your <br> brand's needs Whether its Augmented reality,
                                        <br> API's to hardware and IOT upgrades.
                                    </li>
                                </ul>
                                </a>
                            </div>
                        </div>

                </div>
            </li>


           <li class="navbar-dropdown nav-item">
               <a class="dropdown-toggle resources" href="#">RESOURCES</a>
               <div class="dropdown">
                   <a class="active-gallary" href="{{route('gallary')}}">GALLERY</a>
                   <a class="active-blogs" href="{{route('newsBlogs')}}">BLOGS</a>
               </div>
           </li>


            <li class="nav-item">
                <a class="nav-link page-scroll" id="become_a_partner" href="{{route('become_a_partner')}}">BECOME A
                    PARTNER</a>
            </li>
            <li class="navbar-dropdown nav-item">
                <a class="dropdown-toggle" href="#">COMPANY</a>
                <div class="dropdown">
                    <a href="{{route('about')}}">ABOUT US</a>
                    <a href="{{route('contact')}}">CONTACT US</a>
                </div>
            </li>


        </ul>
        <span class="nav-item">
            <i class="fa fa-envelope text-white"></i><a style="margin:5px;color: white;text-underline-position: under;
" href="mailto:info@roboads.com">info@roboads.com</a>
            </span>

        <span class="nav-item">
                <a href="{{route('contact')}}"><button class="custom-btn btn-sm btn-11 ml-4">Rent Robot<div
                            class="dot"></div></button></a>
        </span>
        <span class="nav-item">
                <a title="Click to chat on Whatsapp" class="nav-link page-scroll" target="_blank" id="contact"
                   href="https://api.whatsapp.com/send?phone=+971563426662&text=Hi there !!!"><img
                        style="height: 40px"
                        src="https://faceaqses.s3.amazonaws.com/roboweb_videos/whatsapp-logo-png-2266.png" alt=""></a>
        </span>

        @auth()
@if(\Illuminate\Support\Facades\Auth::user()->email =='faysal@roboads.com')
                <span class="nav-item">
   <div class="dropdown ">
  <button class="btn btn-sm text-white dropdown-toggle" type="button" id="dropdownMenu2"
          style="background: #ffffff38 !important" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 @php
     $str =\Illuminate\Support\Facades\Auth::user()->name;
    echo implode('', array_map(function($v) { return $v[0]; }, explode(' ', $str)));
 @endphp
  </button>
  <div class="dropdown-menu" style="margin: 1px -6pc" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button"> {{\Illuminate\Support\Facades\Auth::user()->name}}</button>
         <div class="card-header text-center hide-at-blogs">

            <button type="button" class="btn btn-dark btn-sm" data-toggle="modal"
                    data-target="#exampleModalLong">
                <i class=" fa fa-edit"></i> Create Blog
                            </button>
                    </div>


   {{-- <button class="dropdown-item" type="button">Another action</button>--}}
   <form method="post" action="{{route('logout')}}" class="text-center">
       @csrf
       <button type="submit" class="btn btn-sm btn-dark m-auto" style=""><i class="fa fa-power-off"></i> Logout</button>
   </form>
  </div>
</div>
        </span>
            @endif
        @endauth

    </div>
</nav> <!-- end of navbar -->
<!-- end of navbar -->
@auth()
    @if(\Illuminate\Support\Facades\Auth::user()->email =='faysal@roboads.com')
    <div class="modal fade " style="margin-top: 8pc" id="exampleModalLong" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #062353">
                    <h5 class="modal-title text-white" id="exampleModalLongTitle"><i class="fa fa-edit"></i>Create Post
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('users.blogs.submit')}}" method="post"
                      enctype="multipart/form-data">
                    <div class="card gedf-card">
                        @csrf

                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="posts" role="tabpanel"
                                     aria-labelledby="posts-tab">
                                    <div class="form-group">

                                        <div class="row">
                                            <div class="col-8">

                                                <div class="custom-file">
                                                    <input type="file" onchange="readURL(this);"
                                                           name="userFile" class="custom-file-input"
                                                           id="customFile">
                                                    <label class="custom-file-label" for="customFile">Upload
                                                        image</label>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <img class="img-thumbnail" id="blah"
                                                     src="https://faceaqses.s3.amazonaws.com/roboads_website/file-uploadimage.jpg"
                                                     alt="Your selected image"/>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="sr-only" for="message">post</label>
                                        <input class="form-control title-area" name="title" id="message"
                                               placeholder="Title">

                                        <label class="sr-only" for="message">post</label>
                                        <textarea class="form-control textarea-input" name="post" id="message" rows="3"
                                                  placeholder="Tell me more about..."
                                                  required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Your Tags:</label>
                                        <div class="col-xs-8">
                                            <input type="text" id="add-post-tags" name="postTags" data-role="tagsinput"  />
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="btn-toolbar justify-content-between">
                                <div class="btn-group pull-right">
                                    <button type="submit" class="btn btn-sm btn-outline-primary pull-right"><i
                                            class="fa fa-upload" aria-hidden="true"></i> Publish
                                    </button>
                                </div>
                                {{--       <div class="btn-group">
                                           <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false">
                                               <i class="fa fa-globe"></i>
                                           </button>
                                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                               <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
                                               <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
                                               <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
                                           </div>
                                       </div>--}}
                            </div>
                        </div>

                        @if (count($errors) > 0)
                            <div class="alerting">
                                <strong>Whoops!</strong> There were some problems with your
                                input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
@endauth
@yield('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

<div>

    <div id="contact-form-second">

        <div class="contact-form-wrapper d-flex justify-content-center">
            <form class="contact-form" method="post" action="{{route('client-details-submit')}}">
                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success {{session('success')}}">
                        {{session('success')}}
                    </div>
                @endif
                @if(\Illuminate\Support\Facades\Session::has('error'))
                    <div class="alert alert-danger {{session('error')}}">
                        {{session('error')}}
                    </div>
                @endif
                <h5 class="title">Contact us</h5>
                <p class="description">Feel free to contact us if you need any assistance, any help or another question.
                </p>
                <div>
                    @csrf
                    <input type="text" name="name" class="form-control rounded border-white mb-3 form-input" id="name"
                           placeholder="Name">
                </div>
                <input type="text" hidden name="message_page" value="{{$title == null ? 'Home' :$title}}">
                <div>
                    <input type="email" name="email" class="form-control rounded border-white mb-3 form-input"
                           placeholder="Email" required>
                </div>
                <div>
                    <input type="tel" name="mobile" class="form-control rounded border-white mb-3 form-input"
                           placeholder="Mobile" required>
                </div>
                <div>
                    <textarea id="message" name="message" class="form-control rounded border-white mb-3 form-text-area"
                              rows="5" cols="30" placeholder="Message"></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="g-recaptcha"
                         data-sitekey="6LcfN2QdAAAAAEQKXXAc7gl5P9ujQYbOejnK0v1S" data-callback="callback"></div>
                </div>

                <div class="submit-button-wrapper mt-2">
                    <button class="btn submit-button-wrapper btn-sm" id="submit-button" disabled>Submit</button>
                </div>
            </form>
        </div>
    </div> <!-- end of form-1 -->


</div>

<!-- Footer -->
<!-- Footer -->
<div class="footer" style="background: linear-gradient(45deg, #001a3e, #083089,#031f46)">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class=" about">
                    <h4>Few Words About RoboAds</h4>
                    <p class="white">RoboAds designs and markets mobile robots and mobile manipulators. Our robots are
                        designed for advertising and marketing purposes, promising a memorable
                        experience when promoting products and services.</p>
                </div> <!-- end of text-container -->
                <div class="row d-flex">
                    <a target="_blank" href="https://www.instagram.com/robo.ads/?hl=en"> <img id="social"
                                                                                              src="{{asset('assets/images/files/social_icons/INSTAGRAM.png')}}"
                                                                                              alt=""></a>
                    <a target="_blank" href="https://www.linkedin.com/company/roboads/"><img id="social"
                                                                                             src="{{asset('assets/images/files/social_icons/LINKEDIN.png')}}"
                                                                                             alt=""></a>
                    <a target="_blank" href="https://www.pinterest.com/roboads/"> <img id="social"
                                                                                       src="{{asset('assets/images/files/social_icons/PINTREST.png')}}"
                                                                                       alt=""></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCegQ-wUuI4EfWUQkLlewoAQ"><img id="social"
                                                                                                            src="{{asset('assets/images/files/social_icons/YOUTUBE.png')}}"
                                                                                                            alt=""></a>
                    <a target="_blank" href="https://twitter.com/roboads"><img id="social"
                                                                               src="{{asset('assets/images/files/social_icons/TWITTER.png')}}"
                                                                               alt=""></a>

                    <a title="Click to chat on Whatsapp" target="_blank"
                       href="https://api.whatsapp.com/send?phone=+971563426662&text=Hi there !!!"
                       class="bg-transparent copybtn border-0 "><img id="social"
                                                                     src="{{asset('assets/images/files/social_icons/WASTAPP.png')}}"
                                                                     alt=""></a>

                </div>
            </div> <!-- end of col -->
            <div class="col-md-2">
                <div class="">
                    <h4>Discover</h4>
                    <ul class="list-unstyled li-space-lg white">
                        <li>
                            <a class="white" href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <a class="white" href="{{route('products')}}">Products</a>
                        </li>
                        <li>
                            <a class="white text-warning" href="terms-conditions.blade.php">Terms & Conditions</a>
                        </li>
                        <li>
                            <a class="white text-warning" href="privacy-policy.blade.php">Privacy Policy</a>
                        </li>
                    </ul>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-md-2">
                <div class="">
                    <h4>Services</h4>
                    <ul class="list-unstyled li-space-lg">
                        <li>
                            <a class="white" href="{{route('about')}}">Who We are</a>
                        </li>
                        <li>
                            <a class="white" href="{{route('gallary')}}">Gallery</a>
                        </li>

                        <li class="media">
                            <a class="white" href="{{route('contact')}}">Contact Us</a>
                        </li>

                    </ul>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-md-2">

                <div id="chatbutton">
                    <a title="Click to chat on Whatsapp" class="nav-link page-scroll chat" target="_blank" id="contact"
                       href="https://api.whatsapp.com/send?phone=+971563426662&amp;text=Hi there !!!"><img
                            style="height: 40px"
                            src="https://faceaqses.s3.amazonaws.com/roboweb_videos/whatsapp-logo-png-2266.png"
                            alt=""></a>
                </div>

                <div class="">
                    <h4>Address</h4>
                    <ul class="list-unstyled li-space-lg address">
                        <li class="mb-3">
                            <span class="white" href="#your-link"><i class="fa fa-map-marker"></i> 3000 El Camino Real,Palo Alto, CA94306,United States.</span>
                            <br>
                            <span class="white" href="#your-link"><i class="fa fa-map-marker"></i> 1312 Metropolis Tower, Business Bay,
Dubai, UAE.</span>

                        </li>
                        <li>
                            <b class="mt-4 text-white"><i class="fa fa-mobile"></i> Contact</b><br>
                            <b class="p-heading p-large text-nowrap text-white" style="font-size: 14px" id=""><img
                                    style="height: 15px;width: 24px" src="{{asset('assets/images/files/uae-flag.png')}}"
                                    alt=""> (+971) 563 426 662</b><br>
                            <b class="p-heading p-large text-nowrap  text-white" id="" style="font-size: 14px"><img
                                    style="height: 15px;width: 26px"
                                    src="{{asset('assets/images/files/usa-flage.png')}}" alt=""> (+18) 555 828 005</b>
                        </li>

                    </ul>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->

<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © {{\Carbon\Carbon::now()->format('Y')}} <a href="https://roboads.com">ROBOADS
                        All Right Reserved</a></p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->

<!-- Scripts -->

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="{{asset('assets/js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
<script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
<!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{asset('assets/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
<script src="{{asset('assets/js/morphext.min.js')}}"></script> <!-- Morphtext rotating text in the header -->
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script> <!-- Isotope for filter -->
<script src="{{asset('assets/js/validator.min.js')}}"></script>
<!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="{{asset('assets/js/scripts.js')}}"></script> <!-- Custom scripts -->
<script src="{{asset('assets/js/reveal.js')}}"></script>
<script src="{{asset('js/index-js-file.js')}}"></script>

</body>
</html>
