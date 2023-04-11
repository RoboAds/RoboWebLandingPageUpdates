@extends('index')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

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
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
            7px 7px 20px 0px rgba(0, 0, 0, .1),
            4px 4px 5px 0px rgba(0, 0, 0, .1);
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
            box-shadow: -7px -7px 20px 0px #fff9,
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
            box-shadow: -7px -7px 20px 0px #fff9,
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

        #one_time_password {
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

        *,
        *:after,
        *:before {
            --primary-color: #4f46e5;
        }

        /* Hide default radio style */
        .checkbox-input {
            opacity: 0;
            visibility: hidden;
            margin: 0;
        }

        /* Change icon, border and text color when radio is checked */
        .checkbox-input:checked + .checkbox-tile,
        .checkbox-input:checked + .checkbox-tile span {
            border-color: #4f46e5;
            color: #4f46e5;
        }

        /* Checkbox display */
        .checkbox-input:checked + .checkbox-tile::before {
            transform: scale(1);
            opacity: 1;
            background-color: #4f46e5;
            background-color: #4f46e5;
        }

        /* Checkbox icon and text */
        .checkbox-tile {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.2rem;
            width: 160px;
            height: 70px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: 0.1s ease;
            cursor: pointer;
            position: relative;
            margin: -20px 1px;
        }

        .checkbox-tile:hover {
            border-color: #999;
        }

        /* Checkmark (icon inside checker) */
        .checkbox-tile::before {
            content: "";
            position: absolute;
            display: block;
            width: 1rem;
            height: 1rem;
            background-color: #fff;
            border-radius: 50%;
            top: 0.25rem;
            left: 0.25rem;
            opacity: 0;
            transform: scale(0);
            transition: 0.25s ease;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='192' height='192' fill='%23FFFFFF' viewBox='0 0 256 256'%3E%3Crect width='256' height='256' fill='none'%3E%3C/rect%3E%3Cpolyline points='216 72.005 104 184 48 128.005' fill='none' stroke='%23FFFFFF' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'%3E%3C/polyline%3E%3C/svg%3E");
            border: 2px solid #4f46e5;
            background-size: 12px;
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }

        /* Not important */
        a {
            color: #4f46e5;
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

    <div class="d-flex" >
        <div class="col-sm-8 video-section">
            <video class="col-input-form" style=""
                   src="http://localhost/RoboWeb/public/assets/video/video11.mp4" autoplay="" loop="" muted="">
            </video>
        </div>
        <div class="col-sm-4 text-center" style="margin-top: 5pc;z-index: 11">
            <form action="{{route('rentRobot.robot-add-on')}}" method="post" style="border: 1px solid #dddddd;  border-radius: 8px;  padding: 86px 5px;">
                <h2>Add On</h2>
                <div class="">
                    @csrf
                    <input type="text" hidden name="upload_id" value="{{$upload_id}}">
                    <input type="text" hidden name="event_id" value="{{$event_id}}">
                    <h4>Video Editing</h4>
                    <p>
                        Roboads experts will edit your contents <br>
                        to perfectly fit the screens. <br>
                        <b>500 AED</b>
                    </p>

                    <div class="checkbox">
                        <label class="checkbox-wrapper">
                            <input name="editing" type="checkbox" value="500" class="checkbox-input"/>
                            <span class="checkbox-tile">
                                 <i class="bx bxl-facebook-square"></i>
                                 <span>Editing</span>
                               </span>
                        </label>
                    </div>


                    <h4 class="mt-5">Telepresence</h4>
                    <p>
                        Talk remotely to your clients, and provide a better <br>
                        customer service while reducing the cost. <br>
                        <b>1000 AED</b>
                    </p>
                    <div class="checkbox">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="telepresence" value="1000" class="checkbox-input" checked/>
                            <span class="checkbox-tile">
          <i class="bx bxl-twitter"></i>
          <span>Telepresence</span>
        </span>
                        </label>
                    </div>

                </div>

                <div>
                    <button type="submit" class="btn btn-primary custom-btn btn-13 " style="float:right;margin: 30px 9px">
                        Next <i class="fa fa-arrow-alt-circle-right"></i></button>
                </div>
            </form>

        </div>
    </div>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300">


@endsection
