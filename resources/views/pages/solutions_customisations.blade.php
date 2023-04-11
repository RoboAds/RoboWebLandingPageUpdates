@extends('index')
@section('description', 'New Breed Of Service Robots with 55inch digital signage screens in 4K resolution')
@section('keywords', 'Robot rental, One of the best mobile advertising robots, Robot on rent, Rent mr robot, The company advertising ')
@section('content')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
    <link rel="stylesheet" href="{{asset('products/css/style.css')}}">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{asset('products/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @include('layouts.solutions_customisations_header')

    <style>

        /* title styles */
        .home-title span {
            position: relative;
            overflow: hidden;
            display: block;
            line-height: 1.2;
            color: aquamarine;
        }

        .home-title span::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.81);
            animation: a-ltr-after 1s cubic-bezier(.77, 0, .18, 1) forwards;
            transform: translateX(-101%);
        }

        .home-title span::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: #D8D8D8;
            animation: a-ltr-before 2s cubic-bezier(.77, 0, .18, 1) forwards;
            transform: translateX(0);
        }

        .home-title span:nth-of-type(1)::before,
        .home-title span:nth-of-type(1)::after {
            animation-delay: 1s;
        }

        .home-title span:nth-of-type(2)::before,
        .home-title span:nth-of-type(2)::after {
            animation-delay: 1.5s;
        }

        @keyframes a-ltr-after {
            0% {
                transform: translateX(-100%)
            }
            100% {
                transform: translateX(101%)
            }
        }

        @keyframes a-ltr-before {
            0% {
                transform: translateX(0)
            }
            100% {
                transform: translateX(200%)
            }
        }


        ul li {
            list-style: none;
        }

        @media (min-width: 768px) {
            .robot-inquiry {
                padding-right: 18%;
            }

            .robotEnquirySubmitBtn {
                background: linear-gradient(6deg, #04409b, #058cc0bd);
                border: none;
                color: white;
                border-radius: 30px;
                width: 113px;
            }

            .client-robot {
                padding: 1% 8%;
            }

            .feature-list .container-fluid .robot-do-for-clients {
                font-size: 40px;
                line-height: 39px;
                color: black;
                font-family: inter;
                font-weight: 700;
            }

            #callMe ul {
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

            .loading-ar-gif, .loading-en-gif {
                width: 21px;
                margin: -22px 101px;
            }

            .check-en-gif, .check-ar-gif {
                width: 30px;
                margin: -28px 96px;
            }

            .padding-container {

                padding: 5pc !important;
            }

            .first-paragraph {
                padding-left: 9pc;
                padding-right: 9pc
            }
        }

        @media (max-width: 768px) {
            .padding-container {

                padding: 0px;
            }

            #callMe ul {
                margin-left: -51px;
            }

            .loading-ar-gif, .loading-en-gif {
                width: 25px;
                margin: -32px 144px;
            }

            .check-en-gif, .check-ar-gif {
                width: 25px;
                margin: -32px 144px;
            }

            table tr td, table tr th {
                font-size: 14px;
            }

            .alignment-for-mobile {
                flex-flow: column-reverse;
            }

            .featured-products .row:not(:first-child) {
                margin-top: 20%;
            }

            .featured-products .row:first-child {
                margin-top: -46%;
            }

            .featured-products .row {
                box-shadow: 0px 0px 17px 0px #c4c4c4;
                margin: -183px 1px 1px 1px;
                border-radius: 18px;
                padding: 32px;

            }

            .navbar-second .collapse:not(.show) {
                display: block;
                text-align: center;
            }

            .navbar-second .navbar-toggler {
                display: none;
            }

            .navbar-second ul {
                display: -webkit-inline-box !important;
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

            .contact-form {
                margin: 20px;
            }

            .header-content .text-container h2:nth-child(1) {
                font-size: 43px;
            }

            .small-screen-partner-text .col-md-6 {
                margin-top: 40px;

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

        .img-parallax {
            width: 80% !important;
            animation: controll 2s infinite alternate ease-in-out;
        }

        @keyframes controll {
            0% {
                transform: translate(-2%);
            }
        }

        #callMe ul li, #callMe ul li button, #callMe ul li a {
            color: #4d4d4d;
            padding: 6px;
            margin: 5px;
            border-radius: 7px;
            width: 100%;
            font-size: 14px;

        }

        #callMe ul li {
            box-shadow: 1px 2px 6px -3px;

        }

        #callMe ul li:hover {
            box-shadow: 1px 3px 7px -3px black;
            background: #90919038;
        }

        #callMe ul li:hover a, #callMe ul li:hover button {
            color: #169fb2;
        }

        #callMe ul li:hover a, #callMe ul li:hover .bouncing {
            animation: bounce .4 both ease-out 1s;
        }

        @keyframes bounce {
            0% {
                transform: translateY(0)
            }
            25% {
                transform: translateY(-6px)
            }
            50% {
                transform: translateY(0)
            }
            75% {
                transform: translateY(-3px)
            }
            100% {
                transform: translateY(0)
            }
        }

        body p {
            color: black;
        }

        .card-title {
            color: black;
            font-family: Inter !important;
        }

        .card {
            border: none;
        }

        #contact-form-second {
            display: none;
        }

        section {
            padding: 60px 0;
            min-height: 100vh;
        }

        a, a:hover, a:focus, a:active {
            text-decoration: none;
            outline: none;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .bg-gray {
            background-color: #f9f9f9;
        }

        .site-heading h2 {
            display: block;
            font-weight: 700;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .site-heading h2 span {
            color: #005aff;
        }

        .site-heading h4 {
            display: inline-block;
            padding-bottom: 20px;
            position: relative;
            text-transform: capitalize;
            z-index: 1;
        }

        .site-heading h4::before {
            background: #005aff none repeat scroll 0 0;
            bottom: 0;
            content: "";
            height: 2px;
            left: 50%;
            margin-left: -25px;
            position: absolute;
            width: 50px;
        }

        .site-heading {
            margin-bottom: 60px;
            overflow: hidden;
            margin-top: -5px;
        }

        .carousel-shadow .owl-stage-outer {
            margin: -15px -15px 0;
            padding: 15px;
        }

        .we-offer-area .our-offer-carousel .owl-dots .owl-dot span {
            background: #ffffff none repeat scroll 0 0;
            border: 2px solid;
            height: 15px;
            margin: 0 5px;
            width: 15px;
        }

        .we-offer-area .our-offer-carousel .owl-dots .owl-dot.active span {
            background: #005aff none repeat scroll 0 0;
            border-color: #005aff;
        }

        .we-offer-area .item {
            background: #ffffff none repeat scroll 0 0;
            border-left: 2px solid #005aff;
            -moz-box-shadow: 0 0 10px #cccccc;
            -webkit-box-shadow: 0 0 10px #cccccc;
            -o-box-shadow: 0 0 10px #cccccc;
            box-shadow: 0 0 10px #cccccc;
            overflow: hidden;
            padding: 30px;
            position: relative;
            z-index: 1;
        }

        .we-offer-area.text-center .item {
            background: #ffffff none repeat scroll 0 0;
            border: medium none;
            padding: 67px 40px 64px;
        }

        .we-offer-area.text-center .item i {
            background: #005aff none repeat scroll 0 0;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            color: #ffffff;
            font-size: 40px;
            height: 80px;
            line-height: 80px;
            position: relative;
            text-align: center;
            width: 80px;
            z-index: 1;
            transition: all 0.35s ease-in-out;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            -ms-transition: all 0.35s ease-in-out;
            -o-transition: all 0.35s ease-in-out;
            margin-bottom: 25px;
        }

        .we-offer-area.text-center .item i::after {
            border: 2px solid #005aff;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            content: "";
            height: 90px;
            left: -5px;
            position: absolute;
            top: -5px;
            width: 90px;
            z-index: -1;
            transition: all 0.35s ease-in-out;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            -ms-transition: all 0.35s ease-in-out;
            -o-transition: all 0.35s ease-in-out;
        }

        .we-offer-area.item-border-less .item {
            border: medium none;
        }

        .we-offer-area .our-offer-items.less-carousel .equal-height {
            margin-bottom: 30px;
        }

        .we-offer-area.item-border-less .item .number {
            font-family: "Poppins", sans-serif;
            font-size: 50px;
            font-weight: 900;
            opacity: 0.1;
            position: absolute;
            right: 30px;
            top: 30px;
        }

        .our-offer-carousel.center-active .owl-item:nth-child(2n) .item,
        .we-offer-area.center-active .single-item:nth-child(2n) .item {
            background: #005aff none repeat scroll 0 0;
        }

        .our-offer-carousel.center-active .owl-item:nth-child(2n) .item i,
        .our-offer-carousel.center-active .owl-item:nth-child(2n) .item h4,
        .our-offer-carousel.center-active .owl-item:nth-child(2n) .item p,
        .we-offer-area.center-active .single-item:nth-child(2n) .item i,
        .we-offer-area.center-active .single-item:nth-child(2n) .item h4,
        .we-offer-area.center-active .single-item:nth-child(2n) .item p {
            color: #ffffff;
        }

        .we-offer-area .item i {
            color: #005aff;
            display: inline-block;
            font-size: 60px;
            margin-bottom: 20px;
        }

        .we-offer-area .item h4 {
            font-weight: 600;
            text-transform: capitalize;
        }

        .we-offer-area .item p {
            margin: 0;
        }

        .we-offer-area .item i,
        .we-offer-area .item h4,
        .we-offer-area .item p {
            transition: all 0.35s ease-in-out;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            -ms-transition: all 0.35s ease-in-out;
            -o-transition: all 0.35s ease-in-out;
        }

        .we-offer-area .item::after {
            background: #005aff none repeat scroll 0 0;
            content: "";
            height: 100%;
            left: -100%;
            position: absolute;
            top: 0;
            transition: all 0.35s ease-in-out;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            -ms-transition: all 0.35s ease-in-out;
            -o-transition: all 0.35s ease-in-out;
            width: 100%;
            z-index: -1;
        }

        .we-offer-area .item:hover::after {
            left: 0;
        }

        .we-offer-area .item:hover i,
        .we-offer-area .item:hover h4,
        .we-offer-area .item:hover p {
            color: #ffffff !important;
        }

        .we-offer-area.text-center .item:hover i::after {
            border-color: #ffffff !important;
        }

        .we-offer-area.text-center .item:hover i {
            background-color: #ffffff !important;
            color: #005aff !important;
        }

        .we-offer-area.text-left .item i {
            background: #005aff none repeat scroll 0 0;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            color: #ffffff;
            display: inline-block;
            font-size: 60px;
            height: 100px;
            line-height: 100px;
            margin-bottom: 30px;
            position: relative;
            width: 100px;
            z-index: 1;
            text-align: center;
        }

        .we-offer-area.text-left .item i::after {
            border: 2px solid #005aff;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            content: "";
            height: 120px;
            left: -10px;
            position: absolute;
            top: -10px;
            width: 120px;
        }

    </style>

    <section class="feature-list section">

        <div class="container-fluid ">

            <div class="row client-robot">

                <div class="col-sm-12 col-md-4 col-lg-4 m-auto robot-do-for-clients">
                    Here are six benefits of <span style="color: #005aff">customisations</span> <br> on mobile robots:
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 small-screen-partner-text">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title" style="">TRIVIA GAMES</h4>
                                        <p class="card-text "> Digital display robots can be programmed with trivia
                                            games that challenge users to answer questions on a variety of topics,
                                            providing an entertaining and educational experience.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">VIRTUAL TOURS</h4>
                                        <p class="card-text "> Robots can be used to provide virtual tours of remote
                                            locations, allowing users to explore new places and learn about different
                                            cultures.
                                        </p>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">SOCIAL MEDIA INTERACTIONS</h4>
                                        <p class="card-text ">Robots can be integrated with social media platforms,
                                            allowing users to interact with friends and family members in a more
                                            engaging and immersive way.

                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">MULTIPLAYER GAMES</h4>
                                        <p class="card-text ">Robots can be used to host multiplayer games that allow
                                            users to compete against each other in real-time, providing a fun and
                                            challenging experience.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">EDUCATIONAL INTERACTIONS</h4>
                                        <p class="card-text">Robots can be used to provide educational interactions,
                                            such as language lessons or math quizzes, helping to improve learning
                                            outcomes in a more engaging and interactive way.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="we-offer-area text-center bg-gray">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="site-heading text-center">
                                    <h2 style="color: black">How <span>digital display robots</span> can integrate with
                                        third-party APIs:
                                    </h2>
                                    <p>Robots with third-party APIs can provide a more comprehensive and customizable
                                        user experience, enabling them to access a wide range of external resources and
                                        services. As the technology continues to advance, we can expect to see even more
                                        sophisticated integrations being developed for digital display robots, making
                                        them an even more powerful tool for communication, education, and
                                        entertainment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row our-offer-items less-carousel">
                            <!-- Single Item -->
                            <div class="col-md-4 col-sm-6 equal-height">
                                <div class="item">
                                    <i class="fa fa-sun-o"></i>
                                    <h4>Weather API</h4>
                                    <p>Digital display robots can be integrated with a weather API to provide real-time
                                        weather updates for different locations, allowing users to plan their activities
                                        accordingly.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="col-md-4 col-sm-6 equal-height">
                                <div class="item">
                                    <i class="fa fa-facebook"></i>
                                    <h4>Social Media API</h4>
                                    <p>Digital display robots can be integrated with social media APIs to access users'
                                        profiles, posts, and messages, allowing for more personalized and interactive
                                        interactions with customers or guests.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="col-md-4 col-sm-6 equal-height">
                                <div class="item">
                                    <i class="fas fa-tasks"></i>
                                    <h4>Translation API</h4>
                                    <p>Digital display robots can be integrated with translation APIs to provide
                                        real-time language translation, allowing users to communicate with people who
                                        speak different languages.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="col-md-4 col-sm-6 equal-height">
                                <div class="item">
                                    <i class="fas fa-shopping-bag"></i>
                                    <h4>E-commerce API</h4>
                                    <p>
                                        Digital display robots can be integrated with e-commerce APIs to provide users
                                        with information about products, prices, and promotions, allowing them to make
                                        purchases directly through the robot.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="col-md-4 col-sm-6 equal-height">
                                <div class="item">
                                    <i class="fas fa-recycle"></i>
                                    <h4>Entertainment API</h4>
                                    <p> Digital display robots can be integrated with entertainment APIs to provide
                                        access to music, videos, and other multimedia content, enhancing the user
                                        experience and engagement.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="col-md-4 col-sm-6 equal-height">
                                <div class="item">
                                    <i class="fas fa-headset"></i>
                                    <h4>24/7 Support</h4>
                                    <p>
                                        All time services and support is available to solve any issue you face during
                                        robot queries.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </section>

            </div>
        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('.navbar-nav li .nav-link.active').removeClass('active');
        $('.navbar-nav li #navbarDropdownsolutions').addClass('active');

    </script>
@endsection
