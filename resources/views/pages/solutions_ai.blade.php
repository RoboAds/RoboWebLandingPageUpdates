@extends('index')
@section('description', 'New Breed Of Service Robots with 55inch digital signage screens in 4K resolution')
@section('keywords', 'Robot rental, One of the best mobile advertising robots, Robot on rent, Rent mr robot, The company advertising ')
@section('content')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
    <link rel="stylesheet" href="{{asset('products/css/style.css')}}">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{asset('products/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @include('layouts.solutions_ai_header')

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
        .overlay{
            background-image: linear-gradient(45deg, rgba(0, 0, 0, .3) 50%, rgb(0 2 54 / 70%) 50%);
        }
    </style>

    <section class="feature-list section">

        <div class="container-fluid ">
            <div class="first-paragraph">
                <p>
                    AI analytics in advertising robots refers to the use of artificial intelligence (AI) algorithms and
                    data analytics tools to analyze and optimize advertising campaigns delivered by robots. Advertising
                    robots, which are often used in public spaces such as shopping centers, airports, and train
                    stations, can use AI analytics to tailor their messaging to individual viewers based on their
                    demographics, interests, and behavior.
                </p>
                <p> By analyzing data on customer behavior, such as how long they spend viewing an ad or which products
                    they show interest in, AI analytics can help advertising robots optimize their campaigns and improve
                    their effectiveness. This allows advertisers to deliver more targeted and relevant messages,
                    increasing the chances of converting viewers into customers.
                </p>
                <p>
                    AI analytics can also help advertising robots to identify trends and patterns in customer behavior,
                    providing valuable insights into consumer preferences and habits. This can help advertisers to make
                    more informed decisions about their marketing strategies and product offerings.

                </p>
            </div>
            <div class="row client-robot">

                <div class="col-sm-12 col-md-4 col-lg-4 m-auto robot-do-for-clients">
                    Here are six benefits of <span style="color: #0a0dff"> AI analytics </span> <br> in advertising
                    robots:
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 small-screen-partner-text">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title" style="">TARGETED ADVERTISING</h4>
                                        <p class="card-text ">AI analytics can help advertising robots deliver more
                                            targeted advertising messages to individual viewers based on their
                                            demographics, interests, and behavior, resulting in more effective and
                                            relevant advertising.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">INCREASED ENGAGEMENT</h4>
                                        <p class="card-text "> By using AI analytics to tailor advertising messages to
                                            individual viewers, advertising robots can increase customer engagement,
                                            resulting in higher conversion rates and sales.
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
                                        <h4 class="card-title">DATA-DRIVEN INSIGHTS</h4>
                                        <p class="card-text ">AI analytics can provide valuable insights into customer
                                            behavior and preferences, allowing advertisers to make more informed
                                            decisions about their marketing strategies and product offerings.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">IMPROVED EFFICIENCY</h4>
                                        <p class="card-text ">AI analytics can help advertising robots optimize their
                                            advertising campaigns, resulting in more efficient and cost-effective
                                            advertising.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">REAL-TIME OPTIMIZATION</h4>
                                        <p class="card-text">AI analytics can analyze customer data in real-time,
                                            allowing advertising robots to adapt their messaging and strategies on the
                                            fly to maximize their effectiveness.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">COMPETITIVE ADVANTAGE</h4>
                                        <p class="card-text ">By using AI analytics to deliver more personalized and
                                            effective advertising messages, businesses can gain a competitive advantage
                                            in the market, resulting in increased market share and revenue.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('.navbar-nav li .nav-link.active').removeClass('active');
        $('.navbar-nav li #navbarDropdownsolutions').addClass('active');

    </script>
@endsection
