@extends('index')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <style>
        .fixed-top {
            padding: 0.375rem 1.5rem 0.375rem 2rem;
            box-shadow: 0 0.0625rem 0.375rem 0 rgba(0, 0, 0, 0.1);
            background-color: #0349B4 !important;
            opacity: .85;
        }

        video {
            min-height: 0vh !important;
            box-shadow: 1px 1px 19px -1px black;
            border-radius: 3px;
        }

        .lightbox-basic {
            background: none;
        }

        @media (max-width: 600px) {


        }

        .b-0 {
            bottom: 0;
        }

        .bg-shadow {
            background: rgba(76, 76, 76, 0);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(179, 171, 171, 0)), color-stop(49%, rgba(48, 48, 48, 0.37)), color-stop(100%, rgba(19, 19, 19, 0.8)));
            background: linear-gradient(to bottom, rgba(179, 171, 171, 0) 0%, rgba(48, 48, 48, 0.71) 49%, rgba(19, 19, 19, 0.8) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0);
        }

        .top-indicator {
            right: 0;
            top: 1rem;
            bottom: inherit;
            left: inherit;
            margin-right: 1rem;
        }

        .overflow {
            position: relative;
            overflow: hidden;
        }

        .zoom img {
            transition: all 0.2s linear;
        }

        .zoom:hover img {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        .bg-shadow a {
            text-decoration: none;
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
            padding: 30px;
        }

        .steps.active {
            width: 100%;
            z-index: 1;
            visibility: visible;
            opacity: 1;
            transition: all 0.4s ease-in-out;
        }

        .steps .form-control {
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #3c8dff;

        }

        .steps .form-control:focus {
            box-shadow: none;
            background: #7fbeff47

        }

        /* animation for input boxes */

        .form-control.invalid {
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #ec2626;
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

        #my-awesome-dropzone {
            border: none;
            border-radius: 8px;
            box-shadow: 0px 0px 9px -1px inset #878787;
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
            background-color: #89d8d3;
            background-image: linear-gradient(315deg, #598efc 0%, #1077f8 74%);
            border: none;
            z-index: 1;
            padding: 1px;
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
            background-image: linear-gradient(315deg, #598efc 0%, #1077f8 74%);
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

        .btn-16 {
            background-color: #89d8d3;
            background-image: linear-gradient(315deg, #fd9c65 0%, #fd6e5f 74%);
            border: none;
            z-index: 1;
            padding: 7px 4px;
            text-decoration: none;
        }
        .btn-16:after {
            position: absolute;
            content: "";
            width: 100%;
            height: 0;
            bottom: 0;
            left: 0;
            z-index: -1;
            border-radius: 5px;
            background-color: #4dccc6;
            background-image: linear-gradient(315deg, #fd9c65 0%, #fd6e5f 74%);
            box-shadow:
                -7px -7px 20px 0px #fff9,
                -4px -4px 5px 0px #fff9,
                7px 7px 20px 0px #0002,
                4px 4px 5px 0px #0001;
            transition: all 0.3s ease;
        }
        .btn-16:hover {
            color: #fff;
        }
        .btn-16:hover:after {
            top: 0;
            height: 100%;
        }
        .btn-16:active {
            top: 2px;
        }

#one_time_password{
    border: none;
    border-bottom: 3px solid #979797;
    border-radius: 0px;
    width: 38%;
    margin: auto;
    margin-top: 7pc;
    background: #e1e1e1;
    font-weight: 900;
    text-align: center;
    font-size: 24px;
}

        .container {
            max-width: 600px;
            padding: 2rem;
        }


        /* Bootstrap Add-On (BEM-syntax)
        _________________________________________ */

        .form-control--otp {
            line-height: 2.5;
            height: 3.5rem;
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }

        @media ( min-width: 375px ) {
            .form-control--otp {
                line-height: 3;
                height: 4.5rem;
                font-size: 2rem;
                font-weight: bold;
                text-align: center;
                max-width: 3.5rem;
            }
        }

        .input-group-seperator {
            width: 2rem;
            margin-left: 0.75rem;
            margin-right: 0.75rem;
            height: 0.3rem;
            background: #ced4da;
            border-radius: 0.1rem;
        }
        input{
            background: #cdcdcd !important;
        }
        input:focus{
            background: #a2a2a2 !important;
        }
        input:active{
            background: #2a7e51 !important;
        }
        input:hover{
            background: #F0DBDB !important;
        }

        .video-section video{
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            position: fixed;
            top: 70px;
            left: 0;

        }
        #contact-form-second{
            display: none;
        }
    </style>

    <div class="d-flex" style="">
        <div class="col-sm-8 video-section">
            <video class="col-input-form" style=""
                   src="http://localhost/RoboWeb/public/assets/video/video11.mp4" autoplay="" loop="" muted="">
            </video>
        </div>
        <div class="col-sm-4 " style="margin-top: 18pc;z-index: 11">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">

                        <div class="d-flex text-center container" style="width: 45%">
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus text-primary"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus text-primary"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus text-primary"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus"></i>
                        </div>

                    <p class="text-center"> Please enter OTP sent to your email. </p>
                        <div class="container">
                            <form  action="{{ route('createCustomer') }}" method="POST">
                            <div class="card">
                                <div class="card-body">
                                    <fieldset>
                                        @if(session()->has('error'))
                                            <p class="alert alert-danger">{{ session('error') }}</p>
                                        @endif

                                        <div class="d-flex align-items-center justify-content-center">
                                            <input type="text" hidden name="email" value="{{$event->email}}">
                                            <input type="text" hidden name="otp" id="current-otp" value="" >
                                            <div class="input-group justify-content-end flex-nowrap">
                                                <input  type="text" class="form-control form-control--otp js-otp-input" inputmode="numeric" pattern="[0-9]*" autocomplete="one-time-code" required>
                                                <input  type="text" class="form-control form-control--otp js-otp-input" inputmode="numeric" pattern="[0-9]*" required>
                                                <input  type="text" class="form-control form-control--otp js-otp-input" inputmode="numeric" pattern="[0-9]*" required>
                                            </div>
                                            <div class="input-group-seperator"></div>
                                            <div class="input-group flex-nowrap">
                                                <input type="text" class="form-control form-control--otp js-otp-input" inputmode="numeric" pattern="[0-9]*" required>
                                                <input type="text" class="form-control form-control--otp js-otp-input" inputmode="numeric" pattern="[0-9]*" required>
                                                <input type="text" class="form-control form-control--otp js-otp-input" inputmode="numeric" pattern="[0-9]*" required>
                                            </div>
                                        </div>
                                    </fieldset>
                                    @csrf
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <a href="" class="btn btn-danger pull-right custom-btn btn-16"><i class="fa fa-arrow-alt-circle-left"></i> Previous</a>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <button type="submit" class="btn btn-primary custom-btn btn-13"> Next  <i class="fa fa-arrow-alt-circle-right"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>
    <!-- end of lightbox -->
    <!-- end of project lightboxes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"
            defer></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300">
    <script>

        var BACKSPACE_KEY = 8;
        var ENTER_KEY = 13;
        var TAB_KEY = 9;
        var LEFT_KEY = 37;
        var RIGHT_KEY = 39;
        var ZERO_KEY = 48;
        var NINE_KEY = 57;

        function otp(elementId) {
            var inputs = document.querySelectorAll('.js-otp-input');
            var callback = null;

            function init(completeCallback) {
                callback = completeCallback;
                for (i = 0; i < inputs.length; i++) {
                    registerEvents(i, inputs[i]);
                }
            }

            function destroy() {
                for (i = 0; i < inputs.length; i++) {
                    registerEvents(i, inputs[i]);
                }
            }

            function registerEvents(index, element) {
                element.addEventListener("input", function(ev) {
                    onInput(index, ev);
                });
                element.addEventListener("paste", function(ev) {
                    onPaste(index, ev);
                });
                element.addEventListener("keydown", function(ev) {
                    onKeyDown(index, ev);
                });
            }

            function onPaste(index, ev) {
                ev.preventDefault();
                var curIndex = index;
                var clipboardData = ev.clipboardData || window.clipboardData;
                var pastedData = clipboardData.getData("Text");
                for (i = 0; i < pastedData.length; i++) {
                    if (i < inputs.length) {
                        if (!isDigit(pastedData[i])) break;
                        inputs[curIndex].value = pastedData[i];
                        curIndex++;
                    }
                }
                if (curIndex == inputs.length) {
                    inputs[curIndex - 1].focus();
                    callback(retrieveOTP());
                } else {
                    inputs[curIndex].focus();
                }
            }

            function onKeyDown(index, ev) {
                var key = ev.keyCode || ev.which;
                if (key == LEFT_KEY && index > 0) {
                    ev.preventDefault(); // prevent cursor to move before digit in input
                    inputs[index - 1].focus();
                }
                if (key == RIGHT_KEY && index + 1 < inputs.length) {
                    ev.preventDefault();
                    inputs[index + 1].focus();
                }
                if (key == BACKSPACE_KEY && index > 0) {
                    if (inputs[index].value == "") {
                        // Empty and focus previous input and current input is empty
                        inputs[index - 1].value = "";
                        inputs[index - 1].focus();
                    } else {
                        inputs[index].value = "";
                    }
                }
                if (key == ENTER_KEY) {
                    // force submit if enter is pressed
                    ev.preventDefault();
                    if (isOTPComplete()) {
                        callback(retrieveOTP());
                    }
                }
                if (key == TAB_KEY && index == inputs.length - 1) {
                    // force submit if tab pressed on last input
                    ev.preventDefault();
                    if (isOTPComplete()) {
                        callback(retrieveOTP());
                    }
                }
            }

            function onInput(index, ev) {
                var value = ev.data || ev.target.value;
                var curIndex = index;
                for (i = 0; i < value.length; i++) {
                    if (i < inputs.length) {
                        if (!isDigit(value[i])) {
                            inputs[curIndex].value = "";
                            break;
                        }
                        inputs[curIndex++].value = value[i];
                        if (curIndex == inputs.length) {
                            if(isOTPComplete()) {
                                callback(retrieveOTP());
                            }
                        } else {
                            inputs[curIndex].focus();
                        }
                    }
                }
            }

            function retrieveOTP() {
                var otp = "";
                for (i = 0; i < inputs.length; i++) {
                    otp += inputs[i].value;
                }
                $('#current-otp').val(otp)
                }

            function isDigit(d) {
                return d >= "0" && d <= "9";
            }

            function isOTPComplete() {
                var isComplete = true;
                var i = 0;
                while (i < inputs.length && isComplete) {
                    if (inputs[i].value == "") {
                        isComplete = false;
                    }
                    i++;
                }
                return isComplete;
            }

            return {
                init: init
            };
        }

        var otpModule = otp("otp-inputs");
        otpModule.init(function(passcode) {});



        // JavaScript for label effects only
        $(window).load(function(){
            $(".col-input-form input").val("");

            $(".input-effect input").focusout(function(){
                if($(this).val() != ""){
                    $(this).addClass("has-content");
                }else{
                    $(this).removeClass("has-content");
                }
            })
        });

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


    </script>

@endsection
