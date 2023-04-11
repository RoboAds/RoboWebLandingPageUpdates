@extends('index')
@section('description', 'New Breed Of Service Robots with 55inch digital signage screens in 4K resolution')
@section('keywords', 'Robot rental, One of the best mobile advertising robots, Robot on rent, Rent mr robot, The company advertising ')
@section('content')
    @include('layouts.contact-header')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"
            defer></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300">
    <style>


        @media (min-width: 600px) {
            h5 {
                font-size: 12px;
                color: #696969;
                font-weight: 300;
                margin-bottom: 20px;
            }

            .nav {
                display: list-item;
                font-size: 15px;
                font-weight: 200;
            }

            #myTab {
                width: 74%;
            }

            #myTab .nav-item, #myTab .active {
                height: 60px;
                line-height: 41px;
                clip-path: polygon(0% 0%, 75% 0, 85% 51%, 75% 100%, 0 100%);
                text-align: left;

            }

            .large-screen {
                padding: 66px;
            }

            .register .nav-tabs .nav-link:hover {
                border: none;
            }

            .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
                background: linear-gradient(6deg, #04409b, #058cc0bd);
                color: white;
                border-radius: 0;
                font-size: 15px;
                font-weight: 200;
            }

            .nav-tabs .nav-link {
                border: none;
                color: #747474;
                text-decoration: none;
                font-weight: bold;

            }

            label {
                color: #959595 !important;
                font-size: 14px;
                font-weight: 700;
            }

            .email-image {
                height: 81px;
                transform: rotate(45deg);
                opacity: .6 !important;
            }


            .alert-danger {
                color: red;
            }

            .alert-success {
                font-size: x-large;
                color: white;
                text-align: center !important;
            }


            .contact-us {
                margin-top: 13%;
                font-size: 51px;
            }

            /* @keyframes for the gradient animation */
            @keyframes bg-hue {
                100% {
                    filter: hue-rotate(360deg);
                }
            }

            .form-container {
                margin-top: 5%;
            }

            .form-control {
                border: 1px solid #e6e6e6;
                box-shadow: 1px 4.5px 11px -5px #8e8e8e;
                transition-duration: .2s;
            }

            .form-control:focus {
                border: 1px solid #e6e6e6;
                box-shadow: 1px 4.5px 11px -5px #6c6c6c;
                background: #e4e4e4;
            }

            .google-maps-area {
                height: 500px;
                margin-top: 4%;
            }

            iframe {
                width: 100%;
                height: 300px;
            }

        }

        .iframe {
            border: none;
        }

        @media (max-width: 600px) {

            .alert-danger {
                margin-left: 5px !important;
            }

            .email-image {
                position: absolute;
                margin: -73% 1% 1% -43% !important;
                width: 46px !important;
                height: inherit;
                opacity: .4;
                transform: rotate(45deg);
            }

            .form-container {
                margin-top: 22%;
            }

            .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
                background: linear-gradient(6deg, #04409b, #058cc0bd);
                color: white;
                border-radius: 0;
                white-space: nowrap !important;
            }

            .nav-tabs .nav-link {
                text-decoration: none;
                background: #e7e7e7;
                white-space: nowrap;
            }


            .name {
                color: black !important;
            }

            .alert-danger {
                color: #00ff32;
            }

            .alert-success {
                font-size: x-large;
                text-align: center !important;
                color: white;
            }


            .iframe {
                width: 100% !important;
                height: 400px;
            }

            .register {
                box-shadow: 0 1px 17px -4px #afafaf;
            }

            .contact-us {
                margin-top: 30px
            }

            .large-screen {
                display: contents !important;
            }

        }

        .g-recaptcha {
            text-align: -webkit-center;
            margin-bottom: 8px;
            margin-top: 39px;
        }

        .text-nowrap.nav-link:hover {
            background: linear-gradient(6deg, #04409b, #058cc0bd);
            color: white;
            border-radius: 0;
        }

        .recaptcha-error {
            text-align: center;
            color: red;
            font-weight: bold;
            font-style: italic;
        }

        .success-message {
            text-align: center;
            color: #00930d;
            font-weight: bold;
            font-style: italic;
        }

        #contact-form-second {
            display: none;
        }


        .btn-hover {
            background-image: linear-gradient(to right, #009245, #FCEE21, #00A8C5, #D9E021);
            box-shadow: 0 4px 15px 0 rgba(83, 176, 57, 0.75);
        }

        .btn-hover:focus {
            outline: none;
        }

        .btn-hover:hover {
            background-position: 100% 0;
            color: white;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }


        /* title styles */
        .home-title span {
            position: relative;
            overflow: hidden;
            display: block;
            line-height: 1.2;
        }

        .home-title span::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: white;
            animation: a-ltr-after 2s cubic-bezier(.77, 0, .18, 1) forwards;
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

        ::placeholder {
            color: #6c6c6c !important;
            font-size: 14px;
        }

        h4 {
            font-family: Inter;
            font-size: 16px;
        }

        .robotEnquirySubmitBtn, .buyRobotSubmitBtn {
            background: linear-gradient(6deg, #04409b, #058cc0bd);
            border: none;
            color: white;
            border-radius: 30px;
            width: 113px;
        }

        .register {
            border: 1px solid #f6f6f6;
            border-radius: 5px;
        }

        .address-data {
            font-family: 'Inter';
            font-size: 14px;
        }

        .nav-tabs {
            border: none;
        }

        .large-screen .nav-item {
            border-bottom: 1px solid #e4e4e4;
        }

        .upload_btn {
            background: linear-gradient(159deg, #2e6eff, #39b7f3, #004eff);
            border: none;
            float: right;
            color: white;
        }

        #datetimes {
            border: none;
            width: -webkit-fill-available;
            background: bisque;
            outline: none;
        }

        body {
            background-color: var(--light);
        }

        .indicators * {
            transition: all 0.4s ease-in-out;
        }

        .fix-height {
            min-height: 200px;
        }

        .steps {
            position: absolute;
            width: 0;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            visibility: hidden;
            opacity: 0;
            transition: all 0.4s ease-in-out;
        }

        .steps.active {
            width: 100%;
            z-index: 1;
            visibility: visible;
            opacity: 1;
            transition: all 0.4s ease-in-out;
        }

        /* animation for input boxes */

        .form-control.invalid {
            border: 1px solid #ec2626;
            /* paste any animation you want */
            animation: shaking 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
            transform: translate3d(0, 0, 0);
            backface-visibility: hidden;
            perspective: 1000px;
            transition: all 0.4s ease-in-out;
        }

        @keyframes shaking {
            10%,
            90% {
                transform: translate3d(-2px, 0, 0);
            }
            20%,
            80% {
                transform: translate3d(4px, 0, 0);
            }
            30%,
            50%,
            70% {
                transform: translate3d(-8px, 0, 0);
            }
            40%,
            60% {
                transform: translate3d(8px, 0, 0);
            }
        }

        .hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: all 0.4s ease-in-out;
        }

        .show {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            transition: all 0.4s ease-in-out;
        }

        @media screen and (min-width: 768px) {
            .fix-height {
                min-height: 100px;
            }

            .next-button {
                margin: 23pc 1pc 2pc 0;
            }
        }


    </style>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css"/>
    <h1 class="text-center contact-us home-title" id="coming_soon"><span>CONTACT US</span></h1>
    <div class="container form-container">

        <div class="row">
            <div class="col-sm-12">
                <div class="container register p-4">
                    <div class="row">
                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <div style=""
                                 class="alert bg-transparent alert-success  alert-dismissible fade show w-100 ml-auto alert-custom"
                                 role="alert">
                                {{ \Illuminate\Support\Facades\Session::get('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if(\Illuminate\Support\Facades\Session::has('recaptcha-error'))
                            <div style="color: #fd0000"
                                 class="alert bg-transparent alert-danger alert-dismissible fade show w-100 ml-auto alert-custom"
                                 role="alert">
                                {{ \Illuminate\Support\Facades\Session::get('recaptcha-error') }}
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col large-screen">
                                    <h5>Help us directly you to the right person.</h5>
                                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                               role="tab"
                                               aria-controls="home" aria-selected="true">Rent a Robot</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                               role="tab"
                                               aria-controls="profile" aria-selected="false">Buy Robot</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                               role="tab"
                                               aria-controls="profile" aria-selected="false">Distribution Inquiries</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                               role="tab"
                                               aria-controls="profile" aria-selected="false">Technical Support</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col mt-3">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active text-align form-new" id="home"
                                             role="tabpanel"
                                             aria-labelledby="home-tab">
                                            <h4 class="">Rent your <span>advertising</span> Robot.</h4>
                                            <div class="row register-form">
                                                <div class="col-lg-12">

                                                    <div id="stepped">
                                                        <div class="container">
                                                            <div class="row justify-content-center">
                                                                <div class="col-sm-12">
                                                                    <div
                                                                        class="indicators d-flex justify-content-around py-4 text-light">
                                                                        <div
                                                                            class="rounded-circle bg-secondary px-2 shadow-sm mr-2">
                                                                            1
                                                                        </div>
                                                                        <div
                                                                            class="rounded-circle bg-secondary px-2 shadow-sm mr-2">
                                                                            2
                                                                        </div>
                                                                        <div
                                                                            class="rounded-circle bg-secondary px-2 shadow-sm mr-2">
                                                                            3
                                                                        </div>
                                                                        <div
                                                                            class="rounded-circle bg-secondary px-2 shadow-sm">
                                                                            4
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="fix-height position-relative">
                                                                        <div class="steps">
                                                                            <div class="row justify-content-center">
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label for="inp1">Company
                                                                                            Name</label>
                                                                                        <input type="text" id="inp1"
                                                                                               class="form-control"
                                                                                               placeholder="Company Name">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label for="event_name">Event
                                                                                            Name</label>
                                                                                        <input type="text"
                                                                                               id="event_name"
                                                                                               name="event_name"
                                                                                               class="form-control"
                                                                                               placeholder="Event Name">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label for="datetimes">Date
                                                                                            Range</label>
                                                                                        <input type="text"
                                                                                               id="datetimes"
                                                                                               name="datetimes"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label for="inp14">Number of
                                                                                            robots</label>
                                                                                        <input type="number" id="inp14"
                                                                                               value="1"
                                                                                               name="number_of_robots"
                                                                                               class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="inp12">E-mail</label>
                                                                                        <input type="email" id="inp12"
                                                                                               class="form-control"
                                                                                               placeholder="E-mail">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="steps text-center">
                                                                            <h3 style="color: #0c45ab">Add on</h3>
                                                                            <h4 style="font-weight: 500">Video
                                                                                Editing</h4>
                                                                            <p style=" margin: -4px 3px;   font-weight: 600;
                                                                           font-size: 13px;">Roboads Experts will edit your videos to perfectly fit the screens</p>
                                                                             <b>1000 AED</b>
                                                                            <br>
                                                                            <button class="btn btn-sm" style="background: #142dab;color: white">Add</button>
                                                                             <br><br>

                                                                             <h4 style="font-weight: 500">
                                                                                 Telepresence</h4>
                                                                             <p style="  margin: -4px 3px;  font-weight: 600;
                                                                              font-size: 13px;">Talk remotely to your clients, and provide a better customer service while reducing the cost.</p>
                                                                            <b>1000 AED</b>
                                                                            <br>
                                                                            <button class="btn btn-sm " style="background: #142dab;color: white">Add</button>

                                                                        </div>

                                                                        <script>
                                                                            Dropzone.options.myAwesomeDropzone = { // The camelized version of the ID of the form element
                                                                                // The configuration we've talked about above
                                                                                autoProcessQueue: false,
                                                                                uploadMultiple: true,
                                                                                parallelUploads: 100,
                                                                                maxFiles: 100,

                                                                                // The setting up of the dropzone
                                                                                init: function () {
                                                                                    var myDropzone = this;

                                                                                    // First change the button to actually tell Dropzone to process the queue.
                                                                                    this.element.querySelector("button[type=submit]").addEventListener("click", function (e) {
                                                                                        // Make sure that the form isn't actually being sent.
                                                                                        e.preventDefault();
                                                                                        e.stopPropagation();
                                                                                        myDropzone.processQueue();
                                                                                    });

                                                                                    // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
                                                                                    // of the sending event because uploadMultiple is set to true.
                                                                                    this.on("sendingmultiple", function (files) {
                                                                                        console.log(files)
                                                                                        // Gets triggered when the form is actually being sent.
                                                                                        // Hide the success button or the complete form.
                                                                                    });
                                                                                    this.on("successmultiple", function (files, response) {
                                                                                        // Gets triggered when the files have successfully been sent.
                                                                                        // Redirect user or notify of success.
                                                                                    });
                                                                                    this.on("errormultiple", function (files, response) {
                                                                                        // Gets triggered when there was an error sending the files.
                                                                                        // Maybe show form again, and notify user of error
                                                                                    });
                                                                                }

                                                                            }
                                                                        </script>
                                                                        <div class="steps">
                                                                            <div class="form-group">
                                                                                <form action="/file-upload"
                                                                                      id="my-awesome-dropzone"
                                                                                      class="dropzone">
                                                                                    <div
                                                                                        class="dropzone-previews"></div>
                                                                                    <!-- this is were the previews should be shown. -->
                                                                                    <button type="submit"
                                                                                            class="btn upload_btn">
                                                                                        Submit
                                                                                    </button>
                                                                                </form>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 text-right next-button">
                                                                    <button type="button"
                                                                            class="btnPrev btn btn-outline-success">Prev
                                                                    </button>
                                                                    <button type="button"
                                                                            class="btnNext btn btn-outline-success">Next
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            document.addEventListener("DOMContentLoaded", () => {
                                                class MultiStep {
                                                    constructor(formId) {
                                                        let myForm = document.querySelector(formId),
                                                            steps = myForm.querySelectorAll(".steps"),
                                                            btnPrev = myForm.querySelector(".btnPrev"),
                                                            btnNext = myForm.querySelector(".btnNext"),
                                                            indicators = myForm.querySelectorAll(".rounded-circle"),
                                                            inputClasses = ".form-control",
                                                            currentTab = 0;

                                                        // we'll need 4 different functions to do this
                                                        showTab(currentTab);

                                                        function showTab(n) {
                                                            steps[n].classList.add("active");
                                                            if (n == 0) {
                                                                btnPrev.classList.add("hidden");
                                                                btnPrev.classList.remove("show");
                                                            } else {
                                                                btnPrev.classList.add("show");
                                                                btnPrev.classList.remove("hidden");
                                                            }
                                                            if (n == steps.length - 1) {
                                                                btnNext.textContent = "Submit";
                                                            } else {
                                                                btnNext.textContent = "Next";
                                                            }
                                                            showIndicators(n);
                                                        }

                                                        function showIndicators(n) {
                                                            for (let i = 0; i < indicators.length; i++) {
                                                                indicators[i].classList.replace("bg-warning", "bg-success");
                                                            }
                                                            indicators[n].className += " bg-warning";
                                                        }

                                                        function clickerBtn(n) {
                                                            if (n == 1 && !validateForm()) return false;
                                                            steps[currentTab].classList.remove("active");
                                                            currentTab = currentTab + n;
                                                            if (currentTab >= steps.length) {
                                                                myForm.submit();
                                                                return false;
                                                            }
                                                            showTab(currentTab);
                                                        }

// Do whatever validation you want
                                                        function validateForm() {
                                                            let input = steps[currentTab].querySelectorAll(inputClasses),
                                                                valid = true;
                                                            for (let i = 0; i < input.length; i++) {
                                                                if (input[i].value == "") {
                                                                    if (!input[i].classList.contains("invalid")) {
                                                                        input[i].classList.add("invalid");
                                                                    }
                                                                    valid = false;
                                                                }
                                                                if (!input[i].value == "") {
                                                                    if (input[i].classList.contains("invalid")) {
                                                                        input[i].classList.remove("invalid");
                                                                    }
                                                                }
                                                            }
                                                            return valid;
                                                        }

                                                        btnPrev.addEventListener("click", () => {
                                                            clickerBtn(-1);
                                                        });
                                                        btnNext.addEventListener("click", () => {
                                                            clickerBtn(1);
                                                        });
                                                    }
                                                }

                                                let MS = new MultiStep("#stepped");
                                            });

                                        </script>
                                        <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel"
                                             aria-labelledby="profile-tab">
                                            <h4 class=" text-nowrap">How may I help you ?</h4>
                                            <div class="row register-form">
                                                <div class="col-md-12">
                                                    <form method="post" id="buyRobotForm"
                                                          action="{{route('buyRobot')}}">
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
                                                        @csrf
                                                        <div class="form-group">

                                                            <input name="mobile" type="text" class="form-control"
                                                                   id="formGroupExampleInput2" required
                                                                   placeholder="Phone Number">
                                                        </div>
                                                        <div class="form-group">

                                                            <input name="company" type="text" class="form-control"
                                                                   id="formGroupExampleInput2"
                                                                   placeholder="Company Name">
                                                        </div>
                                                        <div class="form-group">

                                                            <input type="email" class="form-control"
                                                                   id="formGroupExampleInput2"
                                                                   name="email" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">

                                                            <textarea rows="5" name="message" type="text"
                                                                      class="form-control"
                                                                      id="formGroupExampleInput2" required
                                                                      placeholder="Write Something..."></textarea>
                                                        </div>
                                                        <div class="form-group text-center">
                                                            <div class="g-recaptcha"
                                                                 data-sitekey="6LcfN2QdAAAAAEQKXXAc7gl5P9ujQYbOejnK0v1S"></div>
                                                            <button
                                                                class="btn  text-center buyRobotSubmitBtn mt-4">
                                                                <span>Submit</span>
                                                                <span id="buyRobotLoader"
                                                                      style="z-index: 3;position:absolute;margin: 0px 10px"></span>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 style="text-align: center">
                                            <div class="container">
                                                <h6 id="response-message"></h6>
                                            </div>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row address-data">
            <div class="col m-auto">
                <div><i class="fa fa-map-marker" aria-hidden="true"></i> 3000 El Camino Real,Palo Alto, CA94306,United
                    States.
                </div>
                <div><i class="fa fa-map-marker" aria-hidden="true"></i> 1312 Metropolis Tower, Business Bay, Dubai,
                    UAE.
                </div>
                <div><i class="fa fa-phone" aria-hidden="true"></i> <a title="Click to direct chat on Whatsapp"
                                                                       class="text-decoration-none text-info"
                                                                       href="https://api.whatsapp.com/send?phone=+971563426662&text=Hi there !!!">
                        (+971) 563 426 662 </a></div>
            </div>
            <div class="col">
                <iframe class="iframe"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.7533646300067!2d-122.13650748436949!3d37.41930404030348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fbaf4ad29751f%3A0xa17c20f65cc2d210!2sRoboads!5e0!3m2!1sen!2sae!4v1657617296151!5m2!1sen!2sae"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <script>


        $(function () {
            $('input[name="datetimes"]').daterangepicker({
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'M/DD hh:mm A'
                }
            });
        });
        $(function () {
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


            $("#buyRobotForm").on("submit", function (e) { //id of form
                e.preventDefault();
                var action = $(this).attr("action"); //get submit action from form
                var method = $(this).attr("method"); // get submit method
                var form_data = new FormData($(this)[0]); // convert form into formdata
                var form = $(this);
                $('.buyRobotSubmitBtn').prop('disabled', true);
                $('#buyRobotLoader').html('<i class="fa fa-spinner fa-spin"></i>')
                $.ajax({
                    url: action,
                    dataType: 'json', // what to expect back from the server
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: method,
                    success: function (response) {
                        $('#buyRobotLoader').empty();
                        $('.buyRobotSubmitBtn').prop('disabled', false);
                        $("#response-message").html('<i class="' + response.class + '">' + response.post_response + '</i>').show().delay(5000).fadeOut();
                        if (response.class == 'success-message') {
                            $("#buyRobotForm")[0].reset();
                        }
                    },
                    error: function (response) { // handle the error


                    },

                })
            });
        });
    </script>




    <script>

        $('.navbar-nav li .nav-link.active').removeClass('active');
        $('.navbar-nav li #contact').addClass('active');

        $('#reportrange').daterangepicker({
            opens: 'left'
        }, function (start, end, label) {
            $('#from_date').val(start.format('MMMM D, YYYY'));
            $('#to_date').val(end.format('MMMM D, YYYY'));
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });

        var $question = $(".question");
        var $questionval;
        var $tags = $(".tags");
        var tagsval;
        var $yourquestion = $(".yourquestion");
        var $yourtags = $(".yourtags");

        // The first button will be clicked after the user enters a question
        $(".first").click(function (event) {
            $questionval = $question.val();
            if ($questionval == "") {
                $yourquestion.html("No Question.");
            } else {
                $yourquestion.html($questionval);
            }

            $(".container").removeClass("third-dot initial-active-area");
            $(".container").addClass("second-dot second-active-area");

            // Stop the button from performing it's default task
            event.preventDefault();
        });

        // The second button will be clicked after the user enters some tags (not required)
        $(".second").click(function (event) {
            $(".container").removeClass("second-dot second-active-area initial-active-area");
            $(".container").addClass("third-dot third-active-area");
            $tagsval = $tags.val();
            // Check if the value of tags field is empty
            if ($tagsval == "") {
                $yourtags.html("No tags.");
            } else {
                $yourtags.html($tagsval);
            }
            // Stop the button from performing it's default task
            event.preventDefault();
        });

        // The third button will be clicked when the user is ready to submit their question
        $(".third").click(function (event) {
            $(".container").addClass("first-dot initial-active-area")
            $(".container").removeClass("third-dot third-active-area");
            // Stop the button from performing it's default task
            event.preventDefault();
        });
    </script>
@endsection
