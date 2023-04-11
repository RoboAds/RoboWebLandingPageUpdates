@extends('index')
@section('description', 'New Breed Of Service Robots with 55inch digital signage screens in 4K resolution')
@section('keywords', 'Robot rental, One of the best mobile advertising robots, Robot on rent, Rent mr robot, The company advertising ')
@section('content')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
    <link rel="stylesheet" href="{{asset('products/css/style.css')}}">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{asset('products/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @include('layouts.become_a_partner_header')

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
            .robot-inquiry{
                padding-right: 18%;
            }
            .robotEnquirySubmitBtn{
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
.padding-container{

padding:5pc !important;
}
        }

        @media (max-width: 768px) {
.padding-container{

padding:0px;
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
		.small-screen-partner-text .col-md-6{
			margin-top:40px;
			
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
        #contact-form-second{
            display: none;
        }
    </style>

    <section class="feature-list section">
        <div class="container-fluid">
            <div class="row client-robot">
                <div class="col-sm-12 col-md-4 col-lg-4 m-auto robot-do-for-clients">
                    What can our robot do <br>
                    for your clients?
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 small-screen-partner-text">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">SMART ADVERTISING</h4>
                                        <p class="card-text ">With Roboads' unique advertisement display system,
                                            bystanders can receive customized advertisements based on their demographic
                                            classifications using Convolutional Neural Networks.
                                            An advertising screen includes a webcam that detects bystanders' faces and
                                            feeds them into a trained Convolutional Neural Network that can determine
                                            age, gender, emotions, and other related details.
                                            Can spot immediately what content or ads are effective with customers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">DIGITAL HUMAN INTERACTION</h4>
                                        <p class="card-text ">A new generation that we have not seen much of is
                                            what we call the digital human generation, in which we give digital human
                                            identities, human looks, and human-like interfaces. Kira is an AI-powered
                                            digital human avatar that uses natural language processing to enhance
                                            communication with bystanders.</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">INTELLIGENT NAVIGATION</h4>
                                        <p class="card-text ">An autonomous mobile robot is controlled by a
                                            graphical user interface (GUI) that can create continuous loop navigation in
                                            a created environment.
                                            Four-layer security and neural networks for human detection make robots
                                            capable of managing interactions with audiences and navigating to the next
                                            goal. This makes it an ideal choice for complex and crowded
                                            environments.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">CUSTOMIZED BRANDING</h4>
                                        <p class="card-text ">The auxiliary screen can display logos and contact
                                            information, allowing the target audience to communicate directly with
                                            customers. Information can be pushed directly from the Edge portal and shown
                                            on a separate screen below the advertisement.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">REAL TIME ANALYTICS</h4>
                                        <p class="card-text">Analytics software allows you to track everything
                                            from the length of time someone spent viewing an ad or message to exactly
                                            who viewed it and correlate its effectiveness. Additionally, it provides a
                                            deeper understanding of their interests. A comparison of the sales figures
                                            of certain products can be made based on the time of day and frequency of
                                            advertising for the particular product. Human traffic counting, attendance
                                            peaks and falls throughout the day, and demographics for selling ad time on
                                            your network are some of the features.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">INTEGRATING THIRD PARTY APPLICATIONS</h4>
                                        <p class="card-text ">The RoboEdge application programming interfaces
                                            (APIs) allow third-party software applications to customize robot movements
                                            and campaigns. Clients can receive real-time information about content and
                                            analytics through APIs.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt-4">
                <div class="row padding-container">
                        <div class="col-sm-12 col-md-4 col-lg-4 m-auto robot-do-for-clients " style="margin-top: 7% !important;color: black !important;">
                          Wanna become a partner ? <br>
                            Let's Talk
                        </div>
                    <div class="col-md-6 robot-inquiry">
                       <div class="container">
                           <h5 class="text-dark">How can we help?</h5>
                           <form method="post" action="{{route('robotInquiry')}}"
                                 id="robotInquiry">
                               <div class="form-group">

                                   <input type="text" name="name" class="form-control"
                                          id="formGroupExampleInput2"
                                          required placeholder="Name">
                               </div>
                               <div class="form-group">

                                   <input name="country" type="text" class="form-control"
                                          id="formGroupExampleInput2" required
                                          placeholder="Country/Region">
                               </div>
                               <div class="form-group">

                                   <input name="mobile" type="text" class="form-control"
                                          id="formGroupExampleInput2" required
                                          placeholder="Phone Number">
                               </div>
                               {{--     <div class="form-group">
                                        <label for="formGroupExampleInput2">Company Name</label>
                                        <input name="company" type="text" class="form-control"
                                               id="formGroupExampleInput2" placeholder="Company Name">
                                    </div>--}}
                               <div class="form-group">

                                   <input type="email" class="form-control"
                                          id="formGroupExampleInput2"
                                          name="email" placeholder="Email">
                               </div>


                               @csrf
                               <div class="form-group">

                                 <textarea name="message" rows="5" type="text"
                                           class="form-control"
                                           id="formGroupExampleInput2"
                                           placeholder="Write Something..."></textarea>
                               </div>
                               <div class="form-group text-center">

                                   <div class="d-flex justify-content-center">
                                       <div class="g-recaptcha"
                                            data-sitekey="6LcfN2QdAAAAAEQKXXAc7gl5P9ujQYbOejnK0v1S" data-callback="callback"></div>
                                   </div>
                                   <button class="btn text-center robotEnquirySubmitBtn mt-4" id="robotEnquirySubmitBtn" >
                                       <span>Submit</span>
                                       <span id="robotEnquiryLoader"
                                             style="z-index: 3;position:absolute;margin: 0px 10px"></span>
                                   </button>
                               </div>
                           </form>
                       </div>
                        <div id="response-message" class=" text-success"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

        $("#robotInquiry").on("submit", function (e) { //id of form
            e.preventDefault();
            var action = $(this).attr("action"); //get submit action from form
            var method = $(this).attr("method"); // get submit method
            var form_data = new FormData($(this)[0]); // convert form into formdata
            var form = $(this);
            $('.robotEnquirySubmitBtn').prop('disabled', true);
            $('#robotEnquiryLoader').html('<i class="fa fa-spinner fa-spin"></i>')
            $.ajax({
                url: action,
                dataType: 'json', // what to expect back from the server
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: method,
                success: function (response) {
                    $('#robotEnquiryLoader').empty();
                    $('.robotEnquirySubmitBtn').prop('disabled', false);
                    $("#response-message").html('<i class="' + response.class + '">' + response.post_response + '</i>').show().delay(5000).fadeOut();
                    if (response.class == 'success-message') {
                        $("#robotInquiry")[0].reset();
                    }
                },
                error: function (response) { // handle the error


                },

            })
        });
        $('.second-navbar').on('click', 'li', function () {

            $('.second-navbar li').removeClass('active');
            $(this).addClass('active');
        });


        $('.navbar-nav li .nav-link.active').removeClass('active');
        $('.navbar-nav li #become_a_partner').addClass('active');

        function callback() {
            const submitButton = document.getElementById("robotEnquirySubmitBtn");
            submitButton.removeAttribute("disabled");
        }

    </script>
@endsection
