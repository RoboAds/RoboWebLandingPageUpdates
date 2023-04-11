@extends('index')
@section('content')
    <link href="{{asset('assets/news/css/version/tech.css')}}" rel="stylesheet">
    <link href="{{asset('assets/news/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/news/css/colors.css')}}" rel="stylesheet">
    <link href="{{asset('assets/news/css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->

    <script src="{{asset('assets/news/js/tether.min.js')}}"></script>
    <script src="{{asset('assets/news/js/custom.js')}}"></script>



    <style>
        .navbar-custom {
            background: #000000;
            height: 70px;
        }

        .post-media img {
            transition: all 0.3s;
            display: block;
            width: auto;
            height: 100%;
            transform: scale(1);
            object-fit: cover;
        }

        .post-media:hover img {
            transform: scale(1.1);
        }


        /* panelSplits. */
        .splitview {
            position: relative;
            width: 100%;
            min-height: 45vw;
            overflow: hidden;
        }

        .first-section {

            margin-top: 4.4rem;
        }

        .panelSplit {
            position: absolute;
            width: 100vw;
            min-height: 45vw;
            overflow: hidden;
        }

        .panelSplit .content {
            position: absolute;
            width: 100vw;
            min-height: 45vw;
            color: #FFF;
        }

        .panelSplit .description {
            width: 25%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
        }

        .panelSplit img {

            width: 35%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }


        .bottomSplit {
            background-color: rgb(44, 44, 44);
            z-index: 1;
        }

        .bottomSplit .description {
            right: 5%;
        }

        .top {
            background: linear-gradient(45deg, #a30fff, #a30fff, #0f1e89);
            z-index: 2;
            width: 50vw;

            /*-webkit-clip-path: polygon(60% 0, 100% 0, 100% 100%, 40% 100%);
            clip-path: polygon(60% 0, 100% 0, 100% 100%, 40% 100%);*/
        }

        .top .description {
            left: 5%;
        }

        .description h1 {
            margin-top: -53px;
        }

        .description p {
            color: white;
        }

        /* Handle. */
        .handle {
            height: 100%;
            position: absolute;
            display: block;
            background-color: rgb(253, 171, 0);
            width: 5px;
            top: 0;
            left: 50%;
            z-index: 3;
        }

        /* Skewed. */
        .skewed .handle {
            top: 50%;
            transform: rotate(30deg) translateY(-50%);
            height: 200%;
            -webkit-transform-origin: top;
            -moz-transform-origin: top;
            transform-origin: top;
        }

        .skewed .top {
            transform: skew(-30deg);
            margin-left: -1000px;
            width: calc(50vw + 1000px);
        }

        .skewed .top .content {
            transform: skew(30deg);
            margin-left: 1000px;
        }

        /* Responsive. */
        @media (max-width: 900px) {
            body {
                font-size: 75%;
            }
        }

        small a {
            text-decoration: none !important;
        }

        small a:hover {
            text-decoration: none !important;
            color: #038cc5 !important;
        }

        .justify-between .leading-5 {
            font-size: 12px;
            float: right;
            height: 27px;
            line-height: 8px;
            margin-left: 2px;
            border-radius: 3px;

        }

        .justify-between p {
            margin-top: 7px;
            color: #8b8b8b;
        }

        .justify-between .flex-1 {
            float: right;
        }

        .widget a {
            border: none !important;
            color: #1e2752 !important;
            text-decoration: none !important;
        }

        .big-meta h4 a {
            text-decoration: none;
            color: black;
        }

        .hashtags .hashtags-btn {
            border: none;
            box-shadow: 1px 1px 4px -2px grey;
            margin: 4px 3px;
            border-radius: 4px;
            color: #ff6027 !important;
            font-size: 12px;
            background: #e8e7e7 !important;
        }

        .contact-form {
            display: none;
        }

        .justify-content-between h5 {
            font-size: 14px;
        }

        .hide-at-blogs {
            display: none;
        }


        /** Copyright 2014 Semenchenko V. Elena

/* ===================================================
   Base
   ================================================= */


        #content-slider {
            line-height: 1;
            font-family: 'Montserrat', Helvetica, Arial, sans-serif;
            font-size: 10px; /* font-size 1em = 10px = 62.5%*/

            /*background: #4e616d;*/
        }

        /* ------------------------------- > Clearfix */
        .clr {
            *zoom: 1;
        }

        .clr:before,
        .clr:after {
            display: table;
            content: "";
            line-height: 0;
        }

        .clr:after {
            clear: both;
        }

        /* ---------------------------------> wrapper */
        #content-slider .wrap-slider {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;

            max-width: 1200px;
            /*max-height: 400px;*/
            height: 100%;
            width: 100%;
            margin: 0px auto;
            position: relative;
            text-align: right;
        }

        #content-slider .wrap-slider.full {
            width: 100%;
            max-width: 100%;
            text-align: center;
            border: none;
        }

        /* --------------------------------> Link style */
        #content-slider *:focus {
            outline: 0;
        }

        #content-slider a:hover {
            color: #7FD4FD !important;
            text-decoration: underline !important;
        }

        #content-slider a:focus {
            outline: thin dotted #333;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        #content-slider a:hover,
        #content-slider a:active {
            outline: 0;
        }

        /* --------------------------------> Responsive images (ensure images don't scale beyond their parents) */
        #content-slider img {
            max-width: 100%;
            width: auto \9;
            height: auto;
            vertical-align: middle;
            border: 0;
            -ms-interpolation-mode: bicubic;
        }

        /*---------------
            Main
        ---------------------------*/

        #content-slider .slider {
            margin-top: 5%;
            position: absolute;
            overflow: hidden;
            width: 100%;
            margin: 0 auto;
        }

        #content-slider .inset {
            width: 500%;
            line-height: 0;

            -webkit-animation: 30s slidy infinite;
            -moz-animation: 30s slidy infinite;
            -ms-animation: 30s slidy infinite;
            -o-animation: 30s slidy infinite;
            animation: 30s slidy infinite;

            -webkit-transition: all 2s ease-in-out;
            -moz-transition: all 2s ease-in-out;
            -ms-transition: all 2s ease-in-out;
            -o-transition: all 2s ease-in-out;
            transition: all 2s ease-in-out;
        }


        #content-slider .slider [class*='title-'] {
            background: rgba(0, 0, 0, 0.51);
            padding: 1% 1%;
            display: inline-block;
            width: 40%;
            /*width: 385px;*/
            height: auto;
            position: absolute;
            z-index: 12;
            margin: 15px 0 0 15px;
            /*margin-bottom: -15%;
            left: -65%;*//*
            margin-left: -40%;*/
            line-height: normal;
            overflow: hidden;
            text-align: left;

            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }

        #content-slider .th > [class*='title-'] {
            width: auto;
            height: auto;
            position: absolute;
            top: 0em;
            right: 0em;
            text-align: right;
            margin: 5px 10px 0 0;
            opacity: 1;
            line-height: normal;
            overflow: hidden;

            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }

        /*------------------------------*/
        /* ------------------------------------------------> article */
        /*------------------------------*/
        #content-slider .slider h1, #content-slider .th h1 {
            color: #fffefe;
            text-transform: uppercase;
            padding: 0;
            margin: 0;
            font-weight: bold;
        }

        #content-slider .slider p, #content-slider .th p {
            color: #fffefe;
            text-transform: uppercase;
            padding: 0;
            margin: 0;
        }

        #content-slider .slider a, #content-slider .th a {

            color: #ff8944;
            text-decoration: none;
        }

        /*------------------------------*/
        /* -----------------------------------------------> article img slider*/
        /*------------------------------*/
        #content-slider .slider h1 {
            font-size: 14px;
            margin: 26px 7pc;
        }

        #content-slider .slider p {
            font-size: 2.3em;
            line-height: 1.2em;
        }

        #content-slider .slider a {
            font-size: 12px;
            text-transform: capitalize;
        }

        /*------------------------------*/
        /* -----------------------------------------------> article img prewiew*/
        /*------------------------------*/
        #content-slider .th h1 {
            font-size: 2em;
            line-height: 1.2em;
        }

        #content-slider .th p {
            font-size: 15px;
            margin: 21px 0px;
            font-weight: 600;
        }

        #content-slider .th a {
            font-size: 1.55em;
            line-height: 7.55em;
        }

        #content-slider .th img {
            position: relative;
            max-width: 100%;
            height: auto !important;
            -webkit-filter: brightness(50%);
            -moz-filter: brightness(50%);
            -ms-filter: brightness(50%);
            -o-filter: brightness(50%);
            filter: brightness(50%);

            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }

        #content-slider .th:hover img {
            -webkit-filter: brightness(100%);
            -moz-filter: brightness(100%);
            -ms-filter: brightness(100%);
            -o-filter: brightness(100%);
            filter: brightness(100%);
        }

        /* ---------------------------------------------> main img */
        #content-slider figure {
            margin: 0;
            padding: 0;
            width: 20%;
            float: left;
            cursor: pointer;

            -webkit-transition: all 2s ease-in-out;
            -moz-transition: all 2s ease-in-out;
            -ms-transition: all 2s ease-in-out;
            -o-transition: all 2s ease-in-out;
            transition: all 2s ease-in-out;
        }

        #content-slider figure img {
            width: 100%;
            position: relative;
            height: 400px;
            object-fit: cover;
        }

        /* --------------------------------------------> max contrloS img preview*/
        #content-slider span.th {
            width: 25%;
            margin: 36.7% 0% 0 0%;
            float: left;
            text-align: center;
            display: inline-block;
            position: relative;
            z-index: 1000;
            cursor: pointer;
        }

        #content-slider input[type='radio'] {
            width: 10px;
            height: 10px;
            display: none;
            position: relative;
            /*left: 0%;
            bottom: 0%;*/

            display: none;
        }

        #control {
            position: absolute;
            left: 3%;
            z-index: 5;
            top: 55%;
            width: 95%;
        }

        #content-slider label.first {
            width: 9px;
            height: 9px;
            margin: 33% 1% 0 0%;
            /*float: left;*/
            text-align: center;
            display: inline-block;
            position: relative;
            z-index: 1000;
            cursor: pointer;
            border-radius: 100%;
            background: #00ABFA;
            border: 1px solid transparent;

            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        #content-slider #main > label:after {
            content: '';
            display: inline-block;
            width: 8px;
            height: 8px;
            background: #fff;
            position: absolute;
            top: 1px;
            left: 1px;
            border-radius: 100%;
            opacity: 0;
            visibility: hidden;
            z-index: 9;

            -webkit-transition: all 1s ease-in-out;
            -moz-transition: all 1s ease-in-out;
            -ms-transition: all 1s ease-in-out;
            -o-transition: all 1s ease-in-out;
            transition: all 1s ease-in-out;
        }

        #content-slider input[type='radio'] {
            width: 10px;
            height: 10px;
            display: none;
            position: relative;
            /*left: 0%;
            bottom: 0%;*/

            display: none;
        }

        #content-slider #control {
            position: absolute;
            left: 3%;
            z-index: 15;
            top: 0%;
            width: 95%;
            margin-top: 10%;

            display: none;
        }

        #content-slider label.first {
            width: 9px;
            height: 9px;
            /*margin: 33% 1% 0 0%;*/
            margin: 0% 1% -30% 0%;
            /*float: left;*/
            text-align: center;
            /*display: inline-block;*/
            position: relative;
            z-index: 1000;
            cursor: pointer;
            border-radius: 100%;
            background: #00ABFA;
            border: 1px solid transparent;

            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;

            display: none;
        }

        #content-slider #main > label:after {
            content: '';
            display: inline-block;
            width: 7px;
            height: 7px;
            background: #fff;
            position: absolute;
            top: 1px;
            left: 1px;
            border-radius: 100%;
            opacity: 0;
            visibility: hidden;
            z-index: 9;

            -webkit-transition: all 1s ease-in-out;
            -moz-transition: all 1s ease-in-out;
            -ms-transition: all 1s ease-in-out;
            -o-transition: all 1s ease-in-out;
            transition: all 1s ease-in-out;
        }

        /*_____________________________________________________________________________________________*/

        /*-------------------------------------------------------------------
            CoNTROLS
        -------------------------------------------------------------------*/
        #main > label:hover {
            width: 9px;
            height: 9px;
            background: #FFF;
            border: 1px solid #00ABFA;
        }

        input#a-1:checked ~ .slider .inset {
            margin-left: 0%;
        }

        input#a-2:checked ~ .slider .inset {
            margin-left: -100%;
        }

        input#a-3:checked ~ .slider .inset {
            margin-left: -200%;
        }

        input#a-4:checked ~ .slider .inset {
            margin-left: -300%;
        }

        input#a-5:checked ~ .slider .inset {
            margin-left: -400%;
        }


        input#a-1:checked ~ #main > label:nth-child(1):after {
            opacity: 1;
            visibility: visible;
        }

        input#a-2:checked ~ #main > label:nth-child(2):after {
            opacity: 1;
            visibility: visible;
        }

        input#a-3:checked ~ #main > label:nth-child(3):after {
            opacity: 1;
            visibility: visible;
        }

        input#a-4:checked ~ #main > label:nth-child(4):after {
            opacity: 1;
            visibility: visible;
        }

        input#a-1:checked ~ #control > label:nth-child(2),
        input#a-2:checked ~ #control > label:nth-child(3),
        input#a-3:checked ~ #control > label:nth-child(4),
        input#a-4:checked ~ #control > label:nth-child(1),
        input#a-5:checked ~ #control > label:nth-child(1),
        input#a-1:checked ~ #control > label:nth-child(4),
        input#a-2:checked ~ #control > label:nth-child(1),
        input#a-3:checked ~ #control > label:nth-child(2),
        input#a-4:checked ~ #control > label:nth-child(3) {
            width: 50px;
            height: 50px;
            top: 12em;
            display: inline-block;
            position: relative;
            cursor: pointer;
        }

        input#a-1:checked ~ #control > label:nth-child(2),
        input#a-2:checked ~ #control > label:nth-child(3),
        input#a-3:checked ~ #control > label:nth-child(4),
        input#a-4:checked ~ #control > label:nth-child(1) {

            float: right;
            right: 0.3%;
        }

        input#a-1:checked ~ #control > label:nth-child(4),
        input#a-2:checked ~ #control > label:nth-child(1),
        input#a-3:checked ~ #control > label:nth-child(2),
        input#a-4:checked ~ #control > label:nth-child(3) {

            float: left;
            left: 0.3%;
        }

        span#a-1:focus ~ .slider .inset {
            margin-left: 0%;
        }

        span#a-2:focus ~ .slider .inset {
            margin-left: -100%;
        }

        span#a-3:focus ~ .slider .inset {
            margin-left: -200%;
        }

        span#a-4:focus ~ .slider .inset {
            margin-left: -300%;
        }

        span#a-5:focus ~ .slider .inset {
            margin-left: -400%;
        }

        span#b-1:focus ~ .slider .inset {
            margin-left: 0%;
        }

        span#b-2:focus ~ .slider .inset {
            margin-left: -100%;
        }

        span#b-3:focus ~ .slider .inset {
            margin-left: -200%;
        }

        span#b-4:focus ~ .slider .inset {
            margin-left: -300%;
        }

        span#b-5:focus ~ .slider .inset {
            margin-left: -400%;
        }

        #content-slider input:checked ~ .slider > .inset {
            -webkit-animation: none;
            -moz-animation: none;
            -ms-animation: none;
            -o-animation: none;
            animation: none;
        }

        #content-slider input:hover ~ .slider > .inset, #content-slider label:hover ~ .slider > .inset {
            -webkit-animation-play-state: paused;
            -moz-animation-play-state: paused;
            -ms-animation-play-state: paused;
            -o-animation-play-state: paused;
            animation-play-state: paused;
        }

        #content-slider input:hover ~ .slider > .inset, #content-slider label:hover ~ .slider > .inset {
            -webkit-animation-play-state: paused;
            -moz-animation-play-state: paused;
            -ms-animation-play-state: paused;
            -o-animation-play-state: paused;
            animation-play-state: paused;
        }

        #content-slider span:focus ~ .slider > .inset {
            -webkit-animation: none;
            -moz-animation: none;
            -ms-animation: none;
            -o-animation: none;
            animation: none;
        }

        #content-slider span:hover ~ .slider > .inset {
            -webkit-animation-play-state: paused;
            -moz-animation-play-state: paused;
            -ms-animation-play-state: paused;
            -o-animation-play-state: paused;
            animation-play-state: paused;
        }

        /*---------
            ANIMATION img
        ----------------------------*/

        @keyframes slidy {
            20% {
                margin-left: 0%;
            }
            25% {
                margin-left: -100%;
            }
            45% {
                margin-left: -100%;
            }
            50% {
                margin-left: -200%;
            }
            70% {
                margin-left: -200%;
            }
            75% {
                margin-left: -300%;
            }
            95% {
                margin-left: -300%;
            }
            100% {
                margin-left: -400%;
            }
        }

        @-webkit-keyframes slidy {
            20% {
                margin-left: 0%;
            }
            25% {
                margin-left: -100%;
            }
            45% {
                margin-left: -100%;
            }
            50% {
                margin-left: -200%;
            }
            70% {
                margin-left: -200%;
            }
            75% {
                margin-left: -300%;
            }
            95% {
                margin-left: -300%;
            }
            100% {
                margin-left: -400%;
            }
        }

        @-moz-keyframes slidy {
            20% {
                margin-left: 0%;
            }
            25% {
                margin-left: -100%;
            }
            45% {
                margin-left: -100%;
            }
            50% {
                margin-left: -200%;
            }
            70% {
                margin-left: -200%;
            }
            75% {
                margin-left: -300%;
            }
            95% {
                margin-left: -300%;
            }
            100% {
                margin-left: -400%;
            }
        }

        @-o-keyframes slidy {
            20% {
                margin-left: 0%;
            }
            25% {
                margin-left: -100%;
            }
            45% {
                margin-left: -100%;
            }
            50% {
                margin-left: -200%;
            }
            70% {
                margin-left: -200%;
            }
            75% {
                margin-left: -300%;
            }
            95% {
                margin-left: -300%;
            }
            100% {
                margin-left: -400%;
            }
        }

        @media only screen and (max-width: 1040px) and (min-width: 640px) {

            #content-slider .th h1 {
                font-size: 1.2em;
                line-height: 1em;
            }

            #content-slider .th p {
                font-size: 1.0em;
                line-height: 0.7em;
            }

            #content-slider .th a {
                font-size: 0.55em;
                line-height: 0.55em;
            }


        }

        /*@media only screen and (max-width: 940px) {

            #content-slider .slider [class*='title-'] { margin-bottom: -20%; }

        }*/

        @media only screen and (max-width: 640px) {

            #content-slider .slider [class*='title-'] {
                display: none;
            }

            #content-slider span.first {
                display: none;
            }

            #content-slider span.th {
                width: 98%;
                cursor: default;
                margin-top: 37%;
            }

            #content-slider span.th img {
                float: left;
                width: 40%;
                margin-right: 5%;
                padding: .7% 0 0 0;
            }

            #content-slider .th > [class*='title-'] {
                right: 0%;
                width: 55%;
                text-align: left;
            }

            #content-slider #b-2 {
                margin: 5% auto 0 auto;
            }

            #content-slider #b-3, #content-slider #b-4 {
                margin-top: 5%;
            }

            #content-slider span#b-2:focus {
                opacity: 1;
            }

            span#b-2:focus ~ span#b-5 {
                display: none;
            }

            #content-slider span#b-3:focus {
                opacity: 1;
            }

            span#b-3:focus ~ span#b-5 {
                display: none;
            }

            #content-slider span#b-4:focus {
                opacity: 1;
            }

            span#b-4:focus ~ span#b-5 {
                display: none;
            }

            #content-slider #control {
                display: block;
            }

            #content-slider #main {
                padding: 1% 0;
                width: 100%;
                margin-top: 29.2%;
                z-index: 10;
                position: absolute;
                text-align: center;
                background: rgba(0, 0, 0, 0.71);
            }

            #content-slider label.first {
                display: inline-block;
                margin-bottom: 0;
            }
            .hide-in-small{
                display: none !important;
            }
            .page-wrapper{
                margin-top: 30pc;
            }
            #content-slider{
                margin-top: -67px;
            }
        }

        @media only screen and (max-width: 480px) {


            #content-slider #main {
                padding: 1% 0;
                width: 100%; /*bottom: -15.5em;*/
                z-index: 10;
                position: absolute;
                text-align: center;
                background: rgba(0, 0, 0, 0.71);
            }

            #content-slider label.first {
                margin-bottom: 0;
            }

            /*#content-slider span.th { display: none; }*/
            #content-slider span.th img {
                display: none;
            }

            #content-slider .th > [class*='title-'] {
                width: 98%;
                margin: 2% auto;
                position: relative;
                text-align: center;
            }

            #content-slider #control {
                margin-top: 12%;
            }

        }
        @media only screen and (min-width: 1000px) {
            #content-slider .th img{
                height: 209px !important;
            }
        }



    </style>
    <div id="wrapper">
        <section class="section mt-5">
            <div class="container mt-5">
                <div id="content-slider" class="clr">
                    <div class="wrap-slider clr">

                        <!-- 	========================Thumbnail ControlNav======================================    -->
                        <input type="radio" id="a-1" name="a">
                        <input type="radio" id="a-2" name="a">
                        <input type="radio" id="a-3" name="a">
                        <input type="radio" id="a-4" name="a">

                        <nav id="main">
                            <label for="a-1" class="first"></label>
                            <label for="a-2" class="first"></label>
                            <label for="a-3" class="first"></label>
                            <label for="a-4" class="first"></label>
                            <!-- <label for="a-5" class="first"></label> -->
                        </nav>
                        <!-- 	==============================================================    -->
                        <nav id="control">
                            <label for="a-1"></label>
                            <label for="a-2"></label>
                            <label for="a-3"></label>
                            <label for="a-4"></label>
                            <!-- <label for="a-5" class="first"></label> -->
                        </nav>
                        <!-- 	==============================================================    -->

                        <!-- 	IMAGE NAVIGATION pic -->

                        @foreach($postsInRandom as $key => $post)
                            @if($key <4)
                                <span id="b-{{$key+1}}" class="th hide-in-small" tabindex="10">
				                <img class="hide-in-small" src="https://faceaqses.s3.amazonaws.com/roboads_website/posts/{{$post->original_filename}}" alt="" id="p-{{$key+1}}">
				                <div class="title-{{$key+1}} hide-in-small">
                                  <p class="hide-in-small">{{ \Illuminate\Support\Str::limit($post->name, 60, $end='...') }}</p>
                                  <a class="hide-in-small" href="">read more...</a>
				                  </div>
			                      </span>
                            @endif
                        @endforeach


                        <div class="slider">
                            <div class="inset">
                                @foreach($postsInRandom as $key => $post)
                                    @if($key <4)
                                        <figure>
                                            <figcaption class="title-{{$key+1}}">
                                                <h1>{{ \Illuminate\Support\Str::words($post->desc,7)}}</h1>
                                                <p>{{ \Illuminate\Support\Str::words($post->name,3)}}</p>
                                                <a href="">read more...</a>
                                            </figcaption>
                                            <img
                                                src="https://faceaqses.s3.amazonaws.com/roboads_website/posts/{{$post->original_filename}}"
                                                alt="" id="i-{{$key+1}}" class="f">
                                        </figure>
                                    @endif
                                @endforeach


                            </div>
                        </div>

                    </div>
                </div>
                <div class="row " style="margin-top: 3pc">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->

                            <div class="blog-list clearfix">

                                @if($posts !=null)
                                    @foreach($posts as $post)
                                        <div class="blog-box row" style="margin:0 0 49px 0px">
                                            <div class="col-md-4">
                                                <div class="post-media h-100">
                                                    <img
                                                        src="https://faceaqses.s3.amazonaws.com/roboads_website/posts/{{$post->original_filename}}"
                                                        alt="" class="img-fluid">
                                                    <div class="hovereffect"></div>
                                                </div><!-- end media -->
                                            </div><!-- end col -->

                                            <div class="blog-meta big-meta col-md-8">
                                                <h4><a href="{{route('single_post',[$post->id,$post->slug])}}"
                                                       title="">{{$post->name}}</a></h4>
                                                <p style="white-space: pre-line">{{ \Illuminate\Support\Str::words($post->desc,75)}}
                                                    <a href="" style="font-size: 13px">Read More</a>
                                                </p>
                                                <small class="firstsmall"><a class="bg-orange"
                                                                             href="tech-category-01.html" title="">Technology</a></small>
                                                <small><a href="tech-single.html"
                                                          title="">{{\Carbon\Carbon::parse($post->created_at)->format('d M,Y')}}</a></small>

                                                <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i>
                                                        {{rand(50,2000)}}</a></small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    @endforeach
                                @endif


                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->


                        <div class="d-flex justify-content-center pull-right">
                            <style>
                                .shadow-sm {
                                    display: none;
                                }
                            </style>
                            {!! $posts->links() !!}
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget mt-5">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img
                                            src="https://faceaqses.s3.amazonaws.com/roboads_website/posts/{{$postsInRandom[0]->original_filename}}"
                                            alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->


                            <div class="widget mt-4">
                                <h2 class="widget-title">Popular Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">

                                        @foreach($postsInRandom as $key => $post)
                                            @if($key <3)
                                                <a href="tech-single.html"
                                                   class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="w-100 justify-content-between">
                                                        <img src="upload/tech_blog_08.jpg" alt=""
                                                             class="img-fluid float-left">
                                                        <h5 class="mb-1">{{$post->name}}</h5>
                                                        <small>{{\Carbon\Carbon::parse($post->created_at)->format('d M, Y')}}</small>
                                                    </div>
                                                </a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Recent Reviews</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/tech_blog_02.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">The most disruptive piece of equipment capable
                                                    of delivering live and interactive digital content in the most
                                                    engaging
                                                    way. We use it and will continue doing so.
                                                </h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>

                                        <a
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/tech_blog_03.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">The most disruptive piece of equipment capable
                                                    of delivering live and interactive digital content in the most
                                                    engaging
                                                    way. We use it and will continue doing so.
                                                </h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>

                                        <a
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 last-item justify-content-between">
                                                <img src="upload/tech_blog_07.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Thank you Roboads team for cruising
                                                    GeoDrones Robot all around the Dubai Airshow. You really helped in
                                                    branding our company beautifully and elegantly! You deserve to be
                                                    recommended to all my network entrepreneurs.
                                                </h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Follow Us</h2>

                                <div class="row text-center">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://www.facebook.com/RoboAds/" target="_blank"
                                           class="social-button facebook-button">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://twitter.com/RoboAds" target="_blank"
                                           class="social-button twitter-button">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://www.instagram.com/robo.ads/?hl=en" target="_blank"
                                           class="social-button google-button">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://www.youtube.com/channel/UCegQ-wUuI4EfWUQkLlewoAQ"
                                           target="_blank" class="social-button youtube-button">
                                            <i class="fa fa-youtube"></i>

                                        </a>
                                    </div>
                                </div>
                            </div><!-- end widget -->

                            <div class="widget">
                                <span class="mt-5 btn btn-sm btn-info border-0">Related tags</span>
                                <div class="col hashtags ml-0 mt-2 p-0">
                                    @foreach($post->tags as $key => $tag)
                                        <a style=""
                                           href="{{route('getPostsWithTags',[$tag->id,\Illuminate\Support\Str::slug($tag->tag_name,'-','')])}}"
                                           class="btn hashtags-btn">{{$tag->tag_name}}</a>
                                    @endforeach

                                </div>
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <script src="https://unpkg.com/scrollreveal@4"></script>
        <script>

            document.addEventListener('DOMContentLoaded', function () {
                var parent = document.querySelector('.splitview'),
                    toppanelSplit = parent.querySelector('.top'),
                    handle = parent.querySelector('.handle'),
                    skewHack = 0,
                    delta = 0;

                // If the parent has .skewed class, set the skewHack var.
                if (parent.className.indexOf('skewed') != -1) {
                    skewHack = 1000;
                }

                parent.addEventListener('mousemove', function (event) {
                    // Get the delta between the mouse position and center point.
                    delta = (event.clientX - window.innerWidth / 2) * 0.5;

                    if (delta > 402) {
                        console.log(delta)
                    }
                    if (delta < -402) {
                        console.log(delta)
                    }
                    // Move the handle.
                    handle.style.left = event.clientX + delta + 'px';
                    //Adjust the top panelSplit width.
                    toppanelSplit.style.width = event.clientX + skewHack + delta + 'px';
                });
            });

            ScrollReveal().reveal(".blog-box", {
                duration: 1000,
                origin: "left",
                distance: "200px",
                easing: "ease"
            });
            ScrollReveal().reveal(".widget a", {
                duration: 1000,
                origin: "right",
                distance: "200px",
                easing: "ease"
            });
        </script>
    </div>

@endsection
