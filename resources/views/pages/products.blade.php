@extends('index')
@section('description', 'New Breed Of Service Robots with 55inch digital signage screens in 4K resolution')
@section('keywords', 'Robot rental, One of the best mobile advertising robots, Robot on rent, Rent mr robot, The company advertising ')
@section('content')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
    <link rel="stylesheet" href="{{asset('products/css/style.css')}}">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{asset('products/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @include('layouts.products-header')

    <style>
        ul li {
            list-style: none;
        }

        @media (min-width: 768px) {
            #callMe ul{
                display: flex !important;
            }
            #product-para {
                font-style: italic;
                font-size: 19px !important;
                color: black;
            }

            .subheading {
                color: #3c3c3c;
                padding-bottom: 15px;
                text-transform: capitalize;
                font-weight: 500;
                font-size: 35px !important;
                line-height: 45px;
            }

            .cms-header-text {
                font-size: 40px;
                margin-top: 10px;

            }

            .cms-para-text {

                font-size: 23px;
                margin-top: 25px;
                margin-bottom: 34px;
                letter-spacing: 3px;
            }

            .navbar-second .nav-item .nav-link {
                padding: 0.25rem 10.75rem 0.25rem 8.75rem;
            }

            .navbar-second {
                height: 0px;
                margin: -100px 1px -110px 0px;
            }

            .left-text-1 {
                padding: 19% 10%;
            }

            .text-right-1 {
                padding: 10% 1% 5%;
            }

            .text-right-2 {
                padding: 10% 1% 5%;
            }

            .text-left-2 {
                padding: 19% 10%;
            }

            .overlapped-image {
                position: absolute;
                z-index: -1;
                height: 123px;
                margin: -52px 0px 1px -34px;
                opacity: .8;
            }

            .content-details h3 {
                color: white !important;
                font-weight: 500;
                letter-spacing: 0.15em;
                margin-bottom: 0.5em;
                text-transform: uppercase;
                font-size: 26px;
            }

            .col-lg-8 h3, .col-sm-8 h3, .col-lg-4 h3 {
                color: #161616cc;
                font-weight: 600;
                letter-spacing: 0.15em;
                margin-bottom: 0.5em;
                text-transform: uppercase;
                font-size: 26px;
                margin-top: 13px !important;
            }
            .loading-ar-gif,.loading-en-gif{
                width: 21px;
                margin: -22px 101px;
            }
            .check-en-gif,.check-ar-gif{
                width: 30px;
                margin: -28px 96px;
            }

        }
        @media (max-width: 768px) {
            .loading-ar-gif,.loading-en-gif{
                width: 25px;
                margin: -32px 144px;
            }
            .check-en-gif,.check-ar-gif{
                width: 25px;
                margin: -32px 144px;
            }
            #callMe ul{
                margin-left: -51px;
            }
            table tr td,table tr th{
                font-size: 14px;
            }

            .alignment-for-mobile{
                flex-flow: column-reverse;
            }

            .featured-products .row:not(:first-child) {
                margin-top: 20%;
            }
            .featured-products .row:first-child {
                margin-top: -46%;
            }
            .featured-products .row{
                box-shadow: 0px 0px 17px 0px #c4c4c4;
                margin: -183px 1px 1px 1px;
                border-radius: 18px;
                padding: 32px;

            }

            .navbar-second .collapse:not(.show) {
                display: block;
                text-align: center;
            }
            .navbar-second .navbar-toggler{
                display: none;
            }
            .navbar-second ul{
                display:  -webkit-inline-box !important;
            }

            .cms-header-text {
                font-size: 18px;
            }

            .navbar-second {
                margin-top: -99px !important;
            }

            .content-details h3 {
                color: white !important;
                font-weight: 500;
                letter-spacing: 0.15em;
                margin-bottom: 0.5em;
                text-transform: uppercase;
                font-size: 15px;
            }

            .col-sm-12 h3 {
                color: #161616cc;
                font-weight: 600;

                margin-bottom: 0.5em;
                text-transform: uppercase;
                font-size: 15px;
                margin-top: 13px !important;
            }


            .overlapped-image {
                position: absolute;
                z-index: -1;
                margin: -20px 0px 1px -18px;
                opacity: .8;
                height: 72px;
            }
            .contact-form{
                margin: 20px;
            }
        }

        .subheading {
            font-family: 'Montserrat';
            font-weight: bold !important;

        }

        #product-para {
            font-style: italic;
            font-size: 14px;
            color: black;
        }

        canvas {
            background-image: radial-gradient(#666, #333);
        }

        #instructions {
            position: absolute;
            color: #fff;
            bottom: 0;
            padding-bottom: 6px;
            font-family: sans-serif;
            width: 100%;
            text-align: center;
            pointer-events: none;
        }

        .ourProducts {
            font-family: fantasy;
            background: -webkit-linear-gradient(rgba(3, 59, 145, 0.58), rgba(180, 49, 246, 0.65));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            z-index: 1;
        }


        .box-item {
            float: left;
            opacity: 1;
            overflow: hidden;
            position: relative;
        }

        .box-item img {
            width: 100%;
        }

        .box-item a, span {
            color: #FFF;
        }

        .box-item .box-post span.meta {
            font-family: sans-serif;
            font-size: 12px;
            color: #fff;
            margin-top: 15px;
            display: block;
        }

        .box-item .box-post span.meta span {
            margin-right: 15px;
        }

        .box-item .box-post {
            text-align: center;
            color: #9f7373;
            top: 0;
            left: 0;
            right: 0;
            margin: auto;
            z-index: 3;
            text-shadow: 1px 1px 5px black;
            font-size: 26px;
        }

        .grid-images {
            box-shadow: 1px 1px 27px -14px black;
            border-radius: 11px;
        }


        .content {
            position: relative;
            margin: auto;
            position: relative;

        }

        .content .content-overlay {
            background: rgba(0, 0, 0, 0.7);
            position: absolute;
            height: 99%;
            width: 100%;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            opacity: 0;
            -webkit-transition: all 0.4s ease-in-out 0s;
            -moz-transition: all 0.4s ease-in-out 0s;
            transition: all 0.4s ease-in-out 0s;
        }

        .content:hover .content-overlay {
            opacity: 1;
        }

        .content-image {
            width: 100%;
        }

        .content-details {
            position: absolute;
            text-align: center;
            padding-left: 1em;
            padding-right: 1em;
            width: 100%;
            top: 50%;
            left: 50%;
            opacity: 0;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: all 0.3s ease-in-out 0s;
            -moz-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
        }

        .content:hover .content-details {
            top: 50%;
            left: 50%;
            opacity: 1;
        }


        .content-details p {
            color: #fff;
            font-size: 0.8em;
        }

        .fadeIn-bottom {
            top: 80%;
        }

        .fadeIn-top {
            top: 20%;
        }

        .fadeIn-left {
            left: 20%;
        }

        .fadeIn-right {
            left: 80%;
        }

        .col-lg-8, .col-sm-12 {
            margin-top: 2%;
        }

        .navbar-second .active a {
            text-shadow: 1px 2px 4px black !important;
            color: #00dae5 !important;
        }

        .img-parallax{
            width:80% !important;
            animation: controll 2s infinite alternate ease-in-out;
        }

        @keyframes controll {
            0% {
                transform: translate(-2%);
            }
        }
        #callMe ul li, #callMe ul li button,#callMe ul li a{
            color: #4d4d4d;
            padding: 6px;
            margin: 5px;
            border-radius: 7px;
            width: 100%;
            font-size: 14px;

        }
        #callMe ul li{
            box-shadow: 1px 2px 6px -3px;

        }

        #callMe ul li:hover{
            box-shadow: 1px 3px 7px -3px black;
            background: #90919038;
        }

        #callMe ul li:hover a,#callMe ul li:hover button  {
            color: #169fb2;
        }

        #callMe ul li:hover a,#callMe ul li:hover .bouncing  {
            animation: bounce .4 both ease-out 1s;
        }
        @keyframes bounce {
            0% { transform: translateY(0) }
            25% { transform: translateY(-6px) }
            50% { transform: translateY(0) }
            75% { transform: translateY(-3px) }
            100% { transform: translateY(0) }
        }

    </style>

    <section class="feature-list section">

        <div class="">
            <nav class="navbar navbar-expand-md navbar-second navbar-custom" style="background:#0349B4;opacity: .8;">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarsExampleDefault2" aria-controls="navbarsExampleDefault2"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-awesome fas fa-bars"></span>
                    <span class="navbar-toggler-awesome fas fa-times"></span>
                </button>
                <!-- end of mobile menu toggle button -->

                <div class="collapse navbar-collapse" id="navbarsExampleDefault2">
                    <ul class="navbar-nav ml-auto second-navbar">
                        <li class="nav-item active">
                            <a class="nav-link page-scroll" href="#intro">OVERVIEW</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#services">SPECIFICATION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#callMe">RESOURCES</a>
                        </li>

                    </ul>

                </div>
            </nav> <!-- end of navbar -->
            <!-- end of navbar -->


            <!-- Intro -->
            <div id="intro" class="basic-1">
                <section class="feature-list section">
                    <div class="container-fluid featured-products">

                        <div class="row alignment-for-mobile">
                            <div class="col-md-6 text-center">
                                <div class="col position-absolute left-div"></div>
                                <img class="img-parallax" style="width: inherit"
                                     src="{{asset('assets/images/files/image-left-1.png')}}" alt="">
                            </div>
                            <div class="col-md-4 text-right-1">
                                <div class="content mt-100">
                                    <img class="overlapped-image" src="{{asset('assets/images/files/overlapped.png')}}"
                                         alt="">
                                    <h4 class="subheading">ADVERTISING EXPERIENCE</h4>
                                    <p id="product-para">The most sophisticated signage robot
                                        that has been designed to maximize
                                        the impact of the mobile indoor/outdoor
                                        advertising experience.</p>
                                    <br>
                                    <p id="product-para">Equipped with three 55inch 4K digital signage
                                        screens, this amazing new robot can navigate
                                        on its own and learn its environment.</p>
                                    <!-- <a href="" class="btn btn-main btn-main-sm">Check More</a> -->
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 left-text-1">
                                <div class="content mt-100">
                                    <img class="overlapped-image" src="{{asset('assets/images/files/overlapped.png')}}"
                                         alt="">
                                    <h4 class="subheading">AUDIENCE ATTENTION</h4>
                                    <p id="product-para">The autonomous RA-500 is programmed
                                        to roam around freely, attracting attention,
                                        and engaging targeted audiences.
                                    </p>
                                    <br>
                                    <p id="product-para">Its attached camera provides real-time
                                        visual queue for the operator,
                                        who can monitor its activity remotely.
                                    </p>
                                    <!--   <a href="" class="btn btn-main btn-main-sm">Check Features</a> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="img-responsive img-parallax" style="width: inherit"
                                     src="{{asset('assets/images/files/image-right-1.png')}}" alt="">
                            </div>
                        </div>




                        <div class="row alignment-for-mobile">
                            <div class="col-md-6 text-center">
                                <div class="col position-absolute left-div"></div>
                                <img class="img-parallax" style="width: inherit"
                                     src="{{asset('assets/images/files/image-left-2.png')}}"
                                     alt="">
                            </div>
                            <div class="col-md-4 text-right-2">
                                <div class="content mt-100">
                                    <img class="overlapped-image" src="{{asset('assets/images/files/overlapped.png')}}"
                                         alt="">
                                    <h4 class="subheading">TELEPRESENCE</h4>
                                    <p id="product-para">RA-500 Telepresence Robots help you
                                        work and visit others safely
                                        with a remote presence.

                                        <br>
                                        wherever you want and whenever
                                        you want to be there
                                    </p>

                                    <!--  <a href="" class="btn btn-main btn-main-sm">Check More</a> -->
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6 text-left-2">
                                <div class="content mt-100">
                                    <img class="overlapped-image " src="{{asset('assets/images/files/overlapped.png')}}"
                                         alt="">
                                    <h4 class="subheading">AI ANALYTICS</h4>
                                    <p id="product-para">AI software application which is used
                                        to detect age and gender of users
                                        who passes by based on online
                                        face analyses and automatically starts
                                        playing advertisements based on the
                                        targeted audience.</p>
                                    <!--    <a href="" class="btn btn-main btn-main-sm">Check More</a> -->
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="col position-absolute right-div">

                                </div>
                                <img class="img-responsive img-parallax" style="width: inherit"
                                     src="{{asset('assets/images/files/mcdonalds.jpg')}}" alt="">
                            </div>
                        </div>

                    </div>


                    <div class="container-fluid" style="text-align: center; margin-top:60px;margin-bottom: 60px;">
                        <h3 class="cms-header-text">ADVANCED CMS FOR ROBOT CONTENT MANAGEMENT</h3>
                        <p class="cms-para-text">Manage one or multiple robots with a click of a button.
                            <br>
                            Easily manage, preview and send real time videos from anywhere around the world.</p>
                        <img style=" width: 100%;height: auto;"
                             src="https://faceaqses.s3.amazonaws.com/roboads_website/CMS-Statics.png">
                    </div>

                </section>



                {{--UPTO HERE WORKING FINE--}}
                <div class="">
                    <div class="container-fluid " style="padding: 0px 100px;margin: -77px 0px 0px 0px;">
                        <div class="text-center">
                            <h4>USE SCENERIO</h4>
                            <p>Our Some Works</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-sm-12">
                                <div class="content grid-images">
                                    <a href="{{route('gallary')}}" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="content-image"
                                             src="https://faceaqses.s3.amazonaws.com/roboads_website/col-8-recep.png">
                                        <div class="content-details fadeIn-top">
                                            <h3 class="content-title">HOTELS / RESORTS / SERVICED RESIDENCES</h3>
                                            <p>This is a short description</p>
                                        </div>
                                    </a>
                                </div>
                                <h3 class="title">HOTELS / RESORTS / SERVICED RESIDENCES</h3>
                            </div>

                            <div class="col-lg-4 col-sm-12">
                                <div class="content grid-images">
                                    <a href="{{route('gallary')}}" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="content-image"
                                             src="https://faceaqses.s3.amazonaws.com/roboads_website/col-3-hospital.png">
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">HOSPITALS</h3>
                                            <p class="content-text">This is a short description</p>
                                        </div>
                                    </a>
                                </div>
                                <h3 class="title">HOSPITALS</h3>
                            </div>

                            <div class="col-lg-4 col-sm-12">
                                <div class="content grid-images">
                                    <a href="{{route('gallary')}}" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="content-image"
                                             src="https://faceaqses.s3.amazonaws.com/roboads_website/col-4-event.png">
                                        <div class="content-details fadeIn-top">
                                            <h3 class="content-title">EVENTS & TRADESHOWS</h3>
                                            <p>This is a short description</p>
                                        </div>
                                    </a>
                                </div>
                                <h3 class="title">EVENTS & TRADESHOWS</h3>
                            </div>

                            <div class="col-lg-8 col-sm-12">

                                <div class="content grid-images">
                                    <a href="{{route('gallary')}}" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="content-image"
                                             src="https://faceaqses.s3.amazonaws.com/roboads_website/col-8-hotel.png">
                                        <div class="content-details fadeIn-left">
                                            <h3 class="content-title">OFFICES / COMMERCIAL BUILDINGS / PUBLIC
                                                OFFICES</h3>
                                            <p>This is a short description</p>
                                        </div>
                                    </a>
                                </div>
                                <h3 class="title">OFFICES / COMMERCIAL BUILDINGS / PUBLIC OFFICES</h3>
                            </div>

                        </div>

                    </div> <!-- /container -->
                </div>
            </div> <!-- end of basic-1 -->
            <!-- end of intro -->

            <!-- Services -->
            <div id="services" class="cards-2" style=" margin-top: -4%;">
                <div class="container">
                    <button type="button" class="btn btn-primary hide-show-btn" style="border-radius: 30px;margin-left: 11px;" data-toggle="collapse" data-target="#demo">
                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                    </button>
                    <div id="demo" class="collapse show">
                        <div class="container text-center" style="margin-top: 3%;">
                            <h4 class="text-left" style="margin-bottom: 10px;">SPECIFICATIONS</h4>
                            <table class="text-left table table-hover table-responsive">
                                <tr>
                                    <th style="border-top:none">Dimensions</th>
                                    <td style="border-top:none">100 * 110 * 172 (cm)</td>
                                    <th style="border-top:none">Weight</th>
                                    <td style="border-top:none">380KG</td>
                                </tr>
                                <tr>
                                    <th>Sensors</th>
                                    <td>Lidar/TOF/Bumper/Magnetic</td>
                                    <th>Connectivity</th>
                                    <td>5G-LTE / WiFi / Bluetooth</td>
                                </tr>
                                <tr>

                                    <th>Display</th>
                                    <td>HEAD 9.2 LCD, Body (Front/Back) 27" Touch LCD display</td>
                                </tr>
                            </table>
                        </div>

                        <div class="container text-center" style="margin-top: 50px;">
                            <h4 class="text-left">BATTERY</h4>
                            <table class="text-left table table-hover table-responsive">
                                <tr>
                                    <th style="border-top:none">Capacity</th>
                                    <td style="border-top:none">1,250 W (625W*2)</td>
                                    <th style="border-top:none">Charging time</th>
                                    <td style="border-top:none">5 Hours</td>
                                </tr>
                                <tr>
                                    <th>Continuous usage time</th>
                                    <td> 9 Hours</td>
                                    <th>Charging type</th>
                                    <td>Automatic</td>
                                </tr>

                            </table>
                        </div>

                        <div class="container text-center" style="margin-top:50px">
                            <h4 class="text-left">AUTONOMOUS DRIVING</h4>
                            <table class="text-left table table-hover table-responsive">
                                <tr>
                                    <th style="border-top:none">Obstacle Recognition/Avoidance</th>
                                    <td style="border-top:none">Automatic obstacle recognition, realtime path planing and driving</td>
                                    <th style="border-top:none">Drive Width</th>
                                    <td style="border-top:none">80CM</td>
                                </tr>
                                <tr>
                                    <th>Max speed</th>
                                    <td> 3 m/s</td>
                                    <th>Destination guidance</th>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td> Marble, Carpet, Cement, Tile</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>


            </div> <!-- end of cards-2 -->
            <!-- end of services -->

            <!-- Call Me -->
            <div id="callMe" class="form-1" style="background:transparent;padding-top: 4px;margin-bottom: -50px;margin-top: 40px;">
                <div class="container">
                    <h4 style="margin: 1px 1px 16px 7px;">RESOURCES</h4>
                    <ul class="text-center">
                        <li class=" font-weight-bold"><a class="" target="_blank" style="text-decoration:none"
                                                         href="https://roboedge.com"><i
                                    class='fa fa-leaf mt-3'></i><br> <i class="fa fa-external-link bouncing" aria-hidden="true"></i> RoboEdge CMS Portal
                            </a>
                        </li>
                        <li class=" font-weight-bold"><a class="" target="_blank" style="text-decoration:none"
                                                         href="https://play.google.com/store/apps/details?id=com.aqses_telepresence.calls"><i
                                    class='fa fa-android mt-3'></i><br> <i class="fa fa-external-link bouncing" aria-hidden="true"></i> Telepresence Application</a>
                        </li>
                        <li class="font-weight-bold"><i
                                class='fa fa-file-pdf-o'></i><br>
                            <button class="border-0 font-weight-bold bg-transparent" style="text-decoration:none;" onclick="getDownloadEn()"><i class="fa fa-download bouncing"></i> Download Datasheet - RA-100.pdf (EN)</button>
                            <img class="position-absolute loading-en-gif" src="{{asset('assets/images/files/Loading_2.gif')}}" alt="">
                            <img class="position-absolute check-en-gif" src="{{asset('assets/images/files/check-success.gif')}}" alt="">
                        </li>
                        <li class=" font-weight-bold"><i
                                class='fa fa-file-pdf-o'></i><br>
                            <button onclick="getDownloadAr()" class="font-weight-bold border-0 bg-transparent" style="text-decoration:none;"
                                    href="{{--{{route('getDownload')}}--}}"><i class="fa fa-download bouncing"></i> Download Datasheet - RA-100.pdf (AR)</button>
                            <img class="position-absolute loading-ar-gif " src="{{asset('assets/images/files/Loading_2.gif')}}" alt="">
                            <img class="position-absolute check-ar-gif " src="{{asset('assets/images/files/check-success.gif')}}" alt="">
                        </li>
                    </ul>
                </div>
            </div> <!-- end of form-1 -->
            <!-- end of call me -->
        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('.check-ar-gif,.check-en-gif,.loading-ar-gif,.loading-en-gif').hide();

        function getDownloadEn(){
            $('.loading-en-gif').show();
            $.ajax({
                type: 'GET',
                url: '{{route('getDownload')}}',
                xhrFields: {
                    responseType: 'blob'
                },
                success: function(response){
                    $('.loading-en-gif').hide();
                    $('.check-en-gif').show().delay(5000).fadeOut();
                    var blob = new Blob([response]);
                    var link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = "RA-100_Data_Sheet_EN.pdf";
                    link.click();

                },
                error: function(blob){
                    console.log(blob);

                }
            });
        }
        function getDownloadAr(){
            $('.loading-ar-gif').show();
            $.ajax({
                type: 'GET',
                url: '{{route('getDownloadAr')}}',
                xhrFields: {
                    responseType: 'blob'
                },
                success: function(response){
                    $('.loading-ar-gif').hide();
                    $('.check-ar-gif').show().delay(5000).fadeOut();
                    var blob = new Blob([response]);
                    var link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = "RA-100_Data_Sheet_AR.pdf";
                    link.click();

                },

                error: function(blob){

                    console.log(blob);

                }
            });
        }

        $('.second-navbar').on('click', 'li', function(){

            $('.second-navbar li').removeClass('active');
            $(this).addClass('active');
        });


        $('.navbar-nav li .nav-link.active').removeClass('active');
        $('.navbar-nav li .products').addClass('active');



    </script>
@endsection
