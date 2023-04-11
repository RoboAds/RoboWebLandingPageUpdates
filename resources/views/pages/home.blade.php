@extends('index')
@section('title', 'Home')
@section('description', 'New Breed Of Service Robots with 55inch digital signage screens in 4K resolution')
@section('keywords', 'Robot rental, One of the best mobile advertising robots, Robot on rent, Rent mr robot, The company advertising ')
@section('content')
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #eeedef !important;

        }

        p {
            font-family: Inter !important;
        }

        .bg-video-wrap {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100vh;

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

        .portfolio_description {
            position: absolute;
            width: 67%;
            top: 0;
            float: right;
            background: red;
            height: 100%;
            right: 15px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .portfolio-block {
            position: relative;
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
        }

        .ul-left li img {
            float: right;
            margin: 1px 1px 1px 7px;
        }

        #products-right li {
            list-style: none;
            margin: 1px -41px;
        }

        hr {
            border: 1px solid #497bc9;
            height: 166px;
        }

        #robot-image {
            width: 145%;
            margin-top: -120px;
        }

        @media only screen and (max-width: 600px) {

            .ultimate_advertising_solution .card-text{
                font-weight: 400 !important;
            }
            .ul-left li {
                margin: 1px 0px 4px 5px;
                list-style: none;
                color: white;
            }

            .headinghow {
                font-weight: bold;
                color: black;
                font-size: 31px;
            }

            #robot-image {
                width: -webkit-fill-available;
                margin-top: -76px;
            }

            #row-reverse {
                flex-direction: column-reverse;
            }

            #video-heading {
                color: black;
                letter-spacing: 2px;
                font-size: 25px !important;
                font-weight: bold;
            }

            .imageDiv {
                margin-left: -50px !important;
            }

            p {
                color: black;
            }

            .small-screen-card {
                box-shadow: 0px 0px 9px -6px black;
                margin: -4px;
                border-radius: 10px;
                margin-bottom: 40px;
            }

            .text-container {
                margin-top: 45px;
            }

            .small-screen-how-it-works {
                margin-top: -42px !important;
            }

            .small-screen-card:first-child {
                margin-top: -89px !important;
            }
        }


        .typewriter {
            color: #fff;
            padding-left: 30px;
            display: block;
        }

        .typewriter-text {
            padding-right: 10px;
            color: #04199b94;
            border-right: solid #04199b94 7px;
            text-transform: uppercase;
            animation: cursor 1s ease-in-out infinite;
            font-weight: bold;
        }

        @keyframes cursor {
            from {
                border-color: #04199b94;
            }
            to {
                border-color: transparent;
            }
        }

        @media (max-width: 767.98px) {
            .typewriter {
                font-size: 14px;
            }

            .imagesContainer {
                height: 186px;
                overflow: hidden;
            }

            .headinghow {
                font-family: Inter !important;
            }

            #firstImage {
                width: 95px;
                margin: auto;
            }

            #yiframe {
                height: 300px;
                width: 100%;
            }

            .imageDiv {
                position: absolute;
                top: 9px !important;
                right: 0;
                bottom: 0;
                left: 59px !important;
                background-size: cover;
            }
        }


        @media (min-width: 768px) {

            #row-reverse {
                margin-top: 7%
            }

            .video-main {
                min-height: 100% !important;
            }

            .stimulating {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .typewriter {
                font-size: 17px;
            }

            .headinghow {
                color: #000000;
                letter-spacing: 2px;
                font-size: 44px;
                font-weight: 800 !important;
                line-height: 47px;
                font-family: Inter;
            }

            #yiframe {
                width: 100%;
            }

            .advertize-product {
                min-height: auto;
                width: 100%;
            }

            #firstImage {
                position: absolute;
                transform: rotate(-90deg);
                height: 118px;
                margin: 44% 82%;
            }

            /*   #semicircle {
                   width: 200px;
                   height: 400px;
                   background: linear-gradient(70deg, #C400FF 0%, #009EB2 100%);
                   cursor: grab;
                   position: absolute;
                   opacity: .4;
                   border-bottom-right-radius: 400px;
                   border-top-right-radius: 400px;
               }
               #semicircle1 {
                   width: 200px;
                   height: 400px;
                   background: linear-gradient(70deg,white,white, #fcfcfc 0%, #19c09a 100%);
                   cursor: grab;
                   position: absolute;
                   opacity: .4;
                   border-top-left-radius: 400px;
                   border-bottom-left-radius: 400px;
                   margin: 0px 0px 0 -200px;
               }*/
            #video-heading {
                color: #000000;
                letter-spacing: 1px;
                font-size: 52px;
                font-weight: 800 !important;
                line-height: 62px;
                padding: 43px;
            }

            .text-container p {
                font-size: 18.2px !important;
                margin: 44px;
                color: black;
                line-height: 36px;
                margin-top: -26px !important;
            }

            .audience-image {
                margin: 11px -16px !important;
            }

            .digital_robot_container {
                margin-top: -54px;
            }

            .ultimate_advertising_solution p{
                font-weight: 500;
                color: #404040;
            }

            .ultimate_advertising_solution .headinghow{
                color: #2f0464;
                font-size: 39px !important;
            }


        }


        /*general styles*/


        /*slideshow styles*/

        .slideshow {
            width: 625px;
            margin: 0 auto;
            overflow: hidden;
            border: none;
        }

        .slideshow-container {
            width: 2500px;
            font-size: 0;
            transition: 1s ease;
        }

        .slideshow-container:hover {
            animation-play-state: paused;
        }

        .imaging {
            width: 625px;
            height: auto;
            display: inline-block;
            font-size: 16px;
            text-align: center;
            margin-top: -36px;
        }

        .slide {
            animation: slide 24s ease infinite;
        }

        @keyframes slide {
            0% {
                transform: translateX(0%);
            }

            12.5% {
                transform: translateX(0%);
            }

            25% {
                transform: translateX(-25%);
            }

            37.5% {
                transform: translateX(-25%);
            }

            50% {
                transform: translateX(-50%);
            }

            62.5% {
                transform: translateX(-50%);
            }

            75% {
                transform: translateX(-75%);
            }

            87.5% {
                transform: translateX(-75%);
            }

            99% {
                transform: translateX(-75%);
            }

            100% {
                transform: translateX(0);
            }
        }

        .company_name {
            color: #06b77c;
            border: none;
            font-size: 14px;
        }

        figure {
            margin-bottom: 60px;
        }

        @media (min-width: 767.98px) {
            .imagesContainer {
                overflow: hidden;
                height: 250px;
            }

            #callMe h2 {
                font-size: 36px;
            }

            .basic-1 {
                padding: 100px;
            }

        }

        @media (min-width: 1000px) {

            .image1 {
                height: 233px;
            }

            .image2 {
                height: 233px;
            }
        }

        @media (min-width: 1200px) {
            .imagesContainer {
                overflow: hidden;

            }

            .image1 {
                height: 93%;
            }

            .image2 {
                height: 93%;
            }

            .imageDiv {
                top: 0px !important;
            }

            .text-container {
                margin-top: 0px !important;
            }
        }

        @media (min-width: 1500px) {
            .imagesContainer {
                height: 306px;
                overflow: hidden;
            }

            #video-heading {
                color: #000000;
                letter-spacing: 1px;
                font-size: 65px;
                font-weight: 800 !important;
                line-height: 62px;
                padding: 43px;
            }

            .text-container p {
                font-size: 28px;
                margin: 44px;
                color: black;
                line-height: 36px;
            }

        }

        /* img tags */
        @media (min-width: 2000px) {
            .imagesContainer {
                height: 600px;
                overflow: hidden;
            }

            .image1 {
                width: 1000px;
            }

            .image2 {
                width: 1000px;
            }

            .stimulating {
                margin-left: -141px;
            }

        }


        /* images using CSS */
        .imageDiv {
            position: absolute;
            top: -24px;
            right: 0;
            bottom: 0;
            left: 0;
            background-size: cover;
        }

        .image1 {
            background-image: url('https://faceaqses.s3.amazonaws.com/roboads_website/Make+up-min.png');
        }

        .image2 {
            background-image: url('https://faceaqses.s3.amazonaws.com/roboads_website/ROLLS-min.png');
        }


        /* animation styles */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            20% {
                opacity: 0;
            }
            60% {
                opacity: 1;
            }
            100% {
                opacity: 1;
            }
        }

        .fadeInClass {
            animation-name: fadeIn;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
            animation-timing-function: linear;
        }


        @keyframes vertical {
            0% {
                opacity: 0;
            }
            4% {
                opacity: 0;
                -webkit-transform: rotateX(-180deg);
                transform: rotateX(-180deg);
            }
            10% {
                opacity: 1;
                -webkit-transform: translateY(0px);
                transform: translateY(0px);
            }
            38% {
                opacity: 1;
                -webkit-transform: translateY(0px);
                transform: translateY(0px);
            }
            45% {
                opacity: 0;
                -webkit-transform: translateY(0px);
                transform: translateY(0px);
            }
            80% {
                opacity: 0;
            }
            100% {
                opacity: 0;
            }
        }

        .verticalflip {
            text-align: center;
            margin: -15px 206px 40px -15px;
            font-weight: bold;
        }

        .verticalflip span {
            animation: vertical 7.5s linear infinite 0s;
            -ms-animation: vertical 7.5s linear infinite 0s;
            -webkit-animation: vertical 7.5s linear infinite 0s;
            color: #2482ff;
            position: absolute;
            opacity: 0;
            padding: 3px;
            border-radius: 10px;
        }

        .verticalflip span:nth-child(2) {
            -ms-animation-delay: 2.5s;
            -webkit-animation-delay: 2.5s;
            animation-delay: 2.5s;
        }

        .heading3 {
            font-size: x-large;
            color: black;
            font-weight: bold;
        }

        .card-title {
            color: black;
            font: 700 1.125rem/1.5rem "Montserrat", sans-serif;
            font-size: x-large;
        }

        .card-text {
            color: black;
            font-weight: bold;
            font-size: 17px;
        }

        /*       .back{
                   height: 70px;
                   position: absolute;
                   margin: -10px -17px;
                   width: 70px;
                   border-radius: 50px;
                   box-shadow: 4px 4px 10px 4px rgba(var(--dark-clr), 0.2),
                   -4px -4px 10px 2px rgba(var(--bright-clr), 0.8),
                   inset 7px 7px 10px 4px rgba(var(--dark-clr), 0.2),
                   inset -7px -7px 10px 4px rgba(var(--bright-clr), 0.8);
               }
       */

        @media (max-width: 767.98px) {
            .audience-video {
                margin: 0 !important;

            }

            video {
                min-height: 0;
            }

            .advertize-product {
                max-width: -webkit-fill-available;
            }
        }

        .button_slide {
            background: #1d74ff;
            padding: 6px;
            color: white !important;
            font-size: 12px;
            box-shadow: inset 0 0 0 0 #4a4a4a;
            height: 32px;
            -webkit-transition: ease-out 1s;
            -moz-transition: ease-out 1s;
            transition: ease-out 3s;
            cursor: pointer;
            float: right;
            line-height: 22px;
            border-radius: 4px;
        }

        .slide_right:hover {
            box-shadow: inset 400px 0 0 0 #4a4a4a;
        }

        .slide_right:hover > .fa-play {
            transform: rotateX(369deg);
            transition-duration: 2s;
        }
        .wrapper {
            width: 100%;
            overflow: hidden;
        }
        .photobanner {
            position: relative;
           margin: -2pc 1pc -2pc 0pc;
            display: flex;
            width: 100%;
        }

        .photobanner img {
            margin: 0px 0px;
            padding: 32px;
            height: 158px;

        }

        .photobanner {
            animation: bannermove 10s linear infinite alternate-reverse;
        }

        @keyframes bannermove {
            from {
                left: 1px;
            }
            to {
                left: -300px;
            }
        }
        @media (max-width: 600px) {
            .photobanner {
                position: relative;
                height: 233px;
                margin-bottom: 30px;
                display: flex;
                width: 100%;
            }

            .photobanner img {
                margin:0px -50px 1px 0px;
                padding: 32px;
                height: 160px;
            }
            .basic-1 .wrapper{
                margin: -87px -1px -1px 0px;
            }
            @keyframes bannermove {
                from {
                    left: 0px;
                }
                to {
                    left: -1300px;
                }
            }
        }

        

    </style>
    @include('layouts.header')
    <!-- Intro -->
    <div id="intro" class="basic-1" style="height: 900px; background-color: white;">
        
    <form action="">
  <div class="row bg-white date-time-location" style="margin: 0 auto; width: 70vw; background: linear-gradient(45deg, #e9d101, #f88018e6); margin-bottom: 100px">
    <div class="col-sm-12 col-lg-4 d-flex align-items-center justify-content-center">
      <div class="form-group bg-white rounded">
        <label for="location" style="font-size: 1.5rem; text-align: left;">
          Location <i class="fa fa-search position-absolute" style="right: 30px;"></i>
        </label>
        <input type="text" class="form-control" id="location" placeholder="Dubai, United Arab Emirates" style="font-size: 1.2rem;">
      </div>
    </div>
    <div class="col-sm-12 col-lg-3 d-flex align-items-center justify-content-center">
      <div class="form-group bg-white rounded">
        <label for="dates" style="font-size: 1.5rem; text-align: left;">
          Dates <i class="fa fa-calendar position-absolute" style="right: 30px;"></i>
        </label>
        <input type="text" class="form-control" id="dates" name="dates" placeholder="Select date range" style="font-size: 1.2rem;">
      </div>
    </div>
    <div class="col-sm-12 col-lg-3 d-flex align-items-center justify-content-center">
      <div class="form-group bg-white rounded">
        <label for="times" style="font-size: 1.5rem; text-align: left;">
          Times <i class="fa fa-clock position-absolute" style="right: 30px;"></i>
        </label>
        <input type="text" class="form-control" id="times" name="times" placeholder="Select time range" style="font-size: 1.2rem;">
      </div>
    </div>
    <div class="col-sm-12 col-lg-2 d-flex align-items-center justify-content-center">
      <button type="submit" class="btn btn-success btn-block" style="font-size: 1.2rem;">Submit</button>
    </div>
  </div>
</form>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" defer></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300">

<style>
.daterangepicker td {
    font-size: 16px !important; /* change the value to the desired font size */
}

.daterangepicker .calendar-time input[type="text"] {
  font-size: 16px !important; /* replace with your desired font size */
}

  </style>

<script>
$(function() {
  $('#dates').daterangepicker({
    opens: 'left',
    minDate: moment(),
    locale: {
      format: 'MM/DD/YYYY'
    }
  }, function(start, end, label) {
    console.log("A date range was chosen: " + start.format('MM/DD/YYYY') + ' to ' + end.format('MM/DD/YYYY'));
  });

  $('#times').daterangepicker({
  opens: 'left',
  timePicker: true,
  timePicker24Hour: true,
  timePickerIncrement: 30,
  startDate: moment().startOf('day'),
  endDate: moment().startOf('day').add(1, 'day'),
  minDate: moment().startOf('day'),
  minTime: '00:00:00', // allow selecting a time before the first time in the range
  maxTime: '23:59:59',
  locale: {
    format: 'hh:mm A'
  }
}, function(start, end, label) {
  console.log("A time range was chosen: " + start.format('hh:mm A') + ' to ' + end.format('hh:mm A'));
});

$('#times').on('show.daterangepicker', function (ev, picker) {
  picker.container.find(".calendar-table").hide();
  picker.container.find(".ranges").hide();
  picker.container.find(".timepicker").show();
  picker.container.find(".timepicker span").css('font-size', '20px'); // change font size here
});

$('#times').on('apply.daterangepicker', function (ev, picker) {
  console.log("A time range was chosen: " + picker.startDate.format('hh:mm A') + ' to ' + picker.endDate.format('hh:mm A'));
});
});
</script>


<style>
@media screen and (max-width: 767px) {
  .card {
    width: 90vw !important;
    height: 60vh !important;
  }
  .d-flex {
    flex-direction: column !important;
    align-items: center !important;
  }
  span {
    margin-right: 0 !important;  
    margin-bottom: 200px !important;
  }
}
</style>


<div class="d-flex justify-content-center align-items-center" style=" padding: 20px; margin-bottom:50px; font-size: 36px; color: black; font-weight: bold; text-align: left;">
  <span style="margin-right: 550px;">Explore advertising solutions and rental robots</span>
</div>
  <div class="d-flex justify-content-center align-items-center" style="height: 50vh; margin-bottom: 50px;">
  <div class="row" flex-row flex-wrap>
  <div class="col-sm-6">
      <div class="card" style="width: 35vw;height:49vh; position: relative;">
        <div class="row">
        <div class="card-body " >
      <div id="opal" style="font-size: 36px; font-weight: bold; color: black; padding: 20px; position: absolute; top: 0; left: 0;">OPAL</div>
      <div style="font-size: 18px;  padding-left: 15px; padding-top: 30px;">Advertising Robot</div>
      <div style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
        <img src="https://faceaqses.s3.amazonaws.com/roboedge/ra100-s3-imp.png" style="width: 35%; margin-bottom: 30px;">
        <div style="display: flex; align-items: center; justify-content: space-between; width: 90%;">
        <div style="display: flex; align-items: center; justify-content: center; flex-grow: 1;">
            <img src="https://static.thenounproject.com/png/199165-200.png" style="width: 25px; height: 25px; margin-right: 5px;">
            <div style="font-size: 1vw; font-weight: bold;">2 Display</div>
          </div>
          <div style="display: flex; align-items: center; justify-content: center; flex-grow: 1;">
            <img src="https://icon-library.com/images/battery-icon-png/battery-icon-png-5.jpg" style="width: 25px; height: 25px; margin-right: 5px;">
            <div style="font-size: 1vw; font-weight: bold;">10 Hours</div>
          </div>
          <div style="display: flex; align-items: center; justify-content: center; flex-grow: 1;">
            <img src="https://static.thenounproject.com/png/2960736-200.png" style="width: 25px; height: 25px; margin-right: 5px;">
            <div style="font-size: 1vw; font-weight: bold;">Indoor</div>
          </div>
          <div style="display: flex; align-items: center; justify-content: center; flex-grow: 1;">
            <img src="https://cdn-icons-png.flaticon.com/512/83/83468.png" style="width: 25px; height: 25px; margin-right: 5px;">
            <div style="font-size: 1vw; font-weight: bold;">4K Display</div>
          </div>
        </div>
        <div style="position: absolute; top: 20px; right: 20px; font-size: 26px; display: flex; align-items: center;">
          <span style="color: black;font-weight: 900;">Rent for</span>
          <span style="color: #00BF63; font-weight: bold; margin-left: 5px;">AED 3000</span>
        </div>
        <div style="position: absolute; top: 45px; right: 20px; font-size: 26px; display: flex; align-items: center;">
          <span style="color: black; margin-left: 5px;">per day</span>
        </div>
        <a href="#" class="btn btn-primary" style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); width: 29vw; height: 6vh; text-align: center; font-size: 1.1vw; font-weight: bold; text-decoration: none; display: flex; justify-content: center; align-items: center; margin: 0; padding: 2vh 4vw; border: none;">View Details</a>
      </div>
    </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card" style="width: 35vw;height:49vh; position: relative;">
        <div class="row">
        <div class="card-body " >
      <div id="opal" style="font-size: 36px; font-weight: bold; color: black; padding: 20px; position: absolute; top: 0; left: 0;">OPAL</div>
      <div style="font-size: 18px;  padding-left: 15px; padding-top: 30px;">Advertising Robot</div>
      <div style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
        <img src="https://faceaqses.s3.amazonaws.com/roboedge/ra100-s3-imp.png" style="width: 35%; margin-bottom: 30px;">
        <div style="display: flex; align-items: center; justify-content: space-between; width: 90%;">
        <div style="display: flex; align-items: center; justify-content: center; flex-grow: 1;">
            <img src="https://static.thenounproject.com/png/199165-200.png" style="width: 25px; height: 25px; margin-right: 5px;">
            <div style="font-size: 1vw; font-weight: bold;">2 Display</div>
          </div>
          <div style="display: flex; align-items: center; justify-content: center; flex-grow: 1;">
            <img src="https://icon-library.com/images/battery-icon-png/battery-icon-png-5.jpg" style="width: 25px; height: 25px; margin-right: 5px;">
            <div style="font-size: 1vw; font-weight: bold;">10 Hours</div>
          </div>
          <div style="display: flex; align-items: center; justify-content: center; flex-grow: 1;">
            <img src="https://static.thenounproject.com/png/2960736-200.png" style="width: 25px; height: 25px; margin-right: 5px;">
            <div style="font-size: 1vw; font-weight: bold;">Indoor</div>
          </div>
          <div style="display: flex; align-items: center; justify-content: center; flex-grow: 1;">
            <img src="https://cdn-icons-png.flaticon.com/512/83/83468.png" style="width: 25px; height: 25px; margin-right: 5px;">
            <div style="font-size: 1vw; font-weight: bold;">4K Display</div>
          </div>
        </div>
        <div style="position: absolute; top: 20px; right: 20px; font-size: 26px; display: flex; align-items: center;">
          <span style="color: black;font-weight: 900;">Rent for</span>
          <span style="color: #00BF63; font-weight: bold; margin-left: 5px;">AED 3000</span>
        </div>
        <div style="position: absolute; top: 45px; right: 20px; font-size: 26px; display: flex; align-items: center;">
          <span style="color: black; margin-left: 5px;">per day</span>
        </div>
        <a href="#" class="btn btn-primary" style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); width: 29vw; height: 6vh; text-align: center; font-size: 1.1vw; font-weight: bold; text-decoration: none; display: flex; justify-content: center; align-items: center; margin: 0; padding: 2vh 4vw; border: none;">View Details</a>
      </div>
    </div>
        </div>
      </div>
    </div>
    </div>

</div>

</div>




<div style="height:90px; width:100%; background-color: #EFEFEF"></div>



        <a href="{{route('about')}}">
            <div class="wrapper">
                <div class="photobanner">

                    <img src="https://roboads.com/assets/images/files/huiwei.png" alt="" />
                    <img src="https://roboads.com/assets/images/files/ford.png" alt="" />
                    <img src="https://roboads.com/assets/images/files/dubai_customs.png" alt="" />
                    <img src="https://roboads.com/assets/images/files/SONY.png" alt="" />
                    <img class="first" src="https://roboads.com/assets/images/files/aramco.png" alt="" />
                    <img src="https://roboads.com/assets/images/files/dubaiairports.png" alt="" />
                    <img src="https://roboads.com/assets/images/files/PORCHE.png" alt="" />
                    <img src="https://roboads.com/assets/images/moi_qatar.png" alt="" />
                </div>
            </div>
        </a>
        <div class="container-fluid">
      
            <div class="row small-screen-card">
                <div class="col-lg-6 col-md-6">
                    <div id="semicircle"></div>
                    <div class="text-container">
                        <div class="section-title"></div>
                        <h2 id="video-heading">
                            {{--  <div class="back"></div>--}}
                            <span id="amaze" style="color: #0956d1">Amaze</span> your audiences <br>
                            with Roboads </h2>
                        <p><b>RoboAds</b> mobile robots are one of the most powerful tools on the digital signage
                            advertising
                            scene. With a unique ability to attract attention and interact with targeted audiences,
                            RoboAds empower brands, shape customer engagement and lead to action.
                            <br>
                            <a data-target="#amazeShowMore" data-toggle="modal"
                               class="btn-1 button_slide slide_right"><i class="fa fa-play"></i> Watch video </a>
                        </p>

                        <!-- Modal -->
                        <div class="modal fade mt-5" id="amazeShowMore" data-backdrop="static" tabindex="-1" role="dialog"
                             aria-labelledby="advertizeShowMoreLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content bg-transparent border-0">
                                    <div class="modal-header border-0">
                                        <button type="button" style="color: whitesmoke" class="close"
                                                data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe style="height: 400px;width: 100%"
                                                src="https://www.youtube.com/embed/KBKFXYEJCB4?rel=0&showinfo=0&autohide=1"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6 col-md-6">
                    <div class="image-container audience-image">
                        {{--    <iframe id="yiframe" src="https://www.youtube.com/embed/KBKFXYEJCB4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>--}}

                        <video class="video-main audience-video" id="yiframe"
                               src="https://faceaqses.s3.amazonaws.com/roboads_website/audience11.mp4" autoplay loop
                               muted>
                        </video>
                    </div> <!-- end of image-container -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->

            <div class="row small-screen-card" id="row-reverse">
                <div class="col-lg-6 col-md-6">
                    <div class="image-container" style="margin-top: 32px;">
                        {{--   <iframe id="yiframe" src="https://www.youtube.com/embed/ByPGNZch2Fs"
                                   title="YouTube video player" frameborder="0"
                                   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                   allowfullscreen></iframe>--}}
                        <video class="advertize-product"
                               src="https://faceaqses.s3.amazonaws.com/roboads_website/roboads-ra-100-21.mp4" autoplay
                               loop muted>
                        </video>

                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-md-6">
                    <div class="text-container">

                        <div class="section-title"></div>
                        <h2 id="video-heading">
                            <span style="color: #0956d1">Advertise</span> your <br>
                            products on RoboAds </h2>
                        <p> RoboAds can be used at corporate events, conferences, malls, product launches, crowded
                            public
                            places and trade shows. Moving around fully autonomously, the mobile robots engage with the
                            right targets at the right time to deliver the right messages.
                            <br>
                            <a id="showMoreBtn" data-toggle="modal" data-target="#advertizeShowMore"
                               class="btn-1 button_slide slide_right"><i class="fa fa-play"></i> Watch video</a>
                        </p>

                        <!-- Modal -->
                        <div class="modal fade mt-5" data-backdrop="static" id="advertizeShowMore" tabindex="-1" role="dialog"
                             aria-labelledby="advertizeShowMoreLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content bg-transparent border-0">
                                    <div class="modal-header border-0">
                                        <button type="button" style="color: whitesmoke" class="close"
                                                data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe style="height: 400px;width: 100%"
                                                src="https://www.youtube.com/embed/ByPGNZch2Fs"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->

            <div class="row small-screen-card" style="margin-top: 7%">
                <div class="col-lg-6 col-md-6">
                    <div class="text-container">
                        <div class="section-title"></div>
                        <h2 id="video-heading">
                            Meet your <br>
                            <span style="color: #0956d1">Digital Robot</span>, Kira </h2>
                        <p> Technologies like Virtual Reality would have a bigger role to play. Within seconds you can
                            create your own human-like avatar, enter into a virtual room with friends, and watch movies
                            or play games. </p>
                        <p>Introducing <b>Kira</b>, a digital robot that has been integrated into Roboads
                            mobile robots. With the ability to speak multiple languages, Kira is the ideal
                            customer service representative and can assist visitors at any retail outlet.
                            <br>
                            <a id="showMoreBtn" data-toggle="modal" data-target="#KiraShowMore"
                               class="btn-1 button_slide slide_right"><i class="fa fa-play"></i> Watch video</a>
                        </p>

                        <!-- Modal -->
                        <div class="modal fade mt-5" data-backdrop="static" id="KiraShowMore" tabindex="-1" role="dialog"
                             aria-labelledby="KiraShowMoreLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content bg-transparent border-0">
                                    <div class="modal-header border-0">
                                        <button type="button" style="color: whitesmoke" class="close"
                                                data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe style="height: 400px;width: 100%"
                                                src="https://www.youtube.com/embed/iVtAgUsw7_k"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-md-6">
                    <div class="image-container digital_robot_container">
                        {{--  <iframe id="yiframe" src="https://www.youtube.com/embed/iVtAgUsw7_k"
                                  title="YouTube video player" frameborder="0"
                                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                  allowfullscreen></iframe>--}}
                        <video class="video-main" id="yiframe"
                               src="https://faceaqses.s3.amazonaws.com/roboads_website/digital-keira.mp4" autoplay loop
                               muted>
                        </video>

                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->

    <!-- Call Me -->
    {{--   <div id="howitsworks" class="m-1">
           <div class="container">
               <h2 style="color: #051788" class="text-center">RENT YOUR ADVERTISING ROBOT</h2>
               <p class='typewriter text-dark text-center'>
               <div class="verticalflip">
                   <span>Tradeshows, Summits, Events</span>
                   <span class="ml-4">Airports, Malls, Hotels.</span>
               </div>
               </p>
               <img style="width: inherit" src="{{asset('assets/images/files/howitworks.png')}}" alt="">
           </div>

       </div> --}}

    <div class="container ultimate_advertising_solution">
        <h2 class="headinghow text-center">Why RoboAds is the ultimate advertising solution?</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                <div class="card border-0 bg-transparent">
                    <div class="card-body">
                        <h5 class="card-title">Highest brand visibility </h5>
                        <p class="card-text">Over 500% of visitors notice the video advertised with RoboAds in
                            comparison to traditional posters and static signage.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                <div class="card border-0 bg-transparent">
                    <div class="card-body">
                        <h5 class="card-title">Increased Sales</h5>
                        <p class="card-text">With increased visibility and precision targeting, you can witness
                            increased sales boosts and higher conversion rates.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                <div class="card border-0 bg-transparent">
                    <div class="card-body">
                        <h5 class="card-title">Memorability </h5>
                        <p class="card-text">RoboAds attractive robots and mobility ensures a memorable experience.
                            Customers tend to remember it even after walking away from the location.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                <div class="card border-0 bg-transparent">
                    <div class="card-body">
                        <h5 class="card-title">Powerful customer engagement </h5>
                        <p class="card-text">RoboAds offers a real engagement that extends to your brand's emotional
                            connection. Customers tend to capture and share the robot videos with friends, families and
                            on their social media. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                <div class="card border-0 bg-transparent">
                    <div class="card-body">
                        <h5 class="card-title">KYC</h5>
                        <p class="card-text">With RoboAds AI analytics, you can now know your customers by generating
                            reports for the number of visitors, age, gender and gaze. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                <div class="card border-0 bg-transparent">
                    <div class="card-body">
                        <h5 class="card-title">Stay Connected</h5>
                        <p class="card-text">With RoboAds QR code display, customers can input their contact details and
                            stay informed about your brand's latest offers and releases.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <div class="container mb-4 mt-5 small-screen-how-it-works">
        <div class="row mt-5">
            <div class="col headinghow m-1 mb-5 text-center"><span>How It Works ?</span></div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-4">
                <div class="card border-0">
                    <img class="card-img-top" src="{{asset('assets/images/files/how1.png')}}" alt="Card image cap">

                    <div class="card-body">
                        <h5 class="card-title">Rental</h5>
                        <p class="card-text">RoboAds' creative team will edit your videos and images, adjusting them to
                            the robot screens</p>
                    </div>
                    <img id="firstImage" src="{{asset('assets/images/files/bounceArrow.gif')}}">
                </div>
            </div>
            <div class="col-sm-4">

                <div class="card border-0">
                    <img class="card-img-top" src="{{asset('assets/images/files/how2.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Lease</h5>
                        <p class="card-text">RoboAds' logistics people will bring the robots to the required location &
                            prepare them for action</p>
                    </div>
                    <img id="firstImage" src="{{asset('assets/images/files/bounceArrow.gif')}}">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card border-0">
                    <img class="card-img-top" src="{{asset('assets/images/files/how3.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Buy Robot</h5>
                        <p class="card-text">RoboAds operators will manage the robots activities ensuring a successful
                            and profitable campaign</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="callMe" class="form-1 mb-4" style="margin-top: -0px">
        <h2 class="white text-center" style="margin-top: -30px;text-transform: uppercase">Attract your Audience</h2>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 stimulating">
                    <div class="">
                        <p class="white">In today's crowded advertising world, RoboAds' futuristic digital signage
                            technology gives you a tremendous competitive advantage, generating unprecedented new
                            opportunities for your marketing initiatives. <br>
                            <br>
                            Call us now to explore the incredible potential of our dynamic, agile, and persuasive
                            advertising robots. </p>
                        {{--                        <ul class="list-unstyled li-space-lg white">--}}
                        {{--                            <li class="media">--}}
                        {{--                                <i class="fas fa-square"></i>--}}
                        {{--                                <div class="media-body">It's very easy just fill in the form so we can call</div>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="media">--}}
                        {{--                                <i class="fas fa-square"></i>--}}
                        {{--                                <div class="media-body">During the call we'll require some info about the company</div>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="media">--}}
                        {{--                                <i class="fas fa-square"></i>--}}
                        {{--                                <div class="media-body">Don't hesitate to email us for any questions or inquiries</div>--}}
                        {{--                            </li>--}}
                        {{--                        </ul>--}}
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6 col-md-6">
                    <figure>
                        <div class="imagesContainer">
                            <div class="imageDiv image1"></div>
                            <div class="imageDiv image2 fadeInClass"></div>
                        </div>
                    </figure>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->


    <!-- Testimonials -->
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="headinghow">Read Our Customer Testimonials</h2>
                    <p class="p-heading">Our clients are our partners and we can not imagine a better future for our
                        company without helping them reach their objectives</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('assets/images/testimonial-1.jpg')}}"
                                             alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">The most disruptive piece of equipment capable
                                                of delivering live and interactive digital content in the most engaging
                                                way. We use it and will continue doing so.
                                            </div>
                                            <div class="testimonial-author text-nowrap">Daniel Khairallah</div>
                                            <h6 class="text-dark small">Managing Partner</h6>
                                            <span class="company_name ">Activate 360</span>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('assets/images/mohammad.jpg')}}"
                                             alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Thank you Roboads   team for cruising
                                                GeoDrones Robot all around the Dubai Airshow. You really helped in
                                                branding our company beautifully and elegantly! You deserve to be
                                                recommended to all my network entrepreneurs.
                                            </div>
                                            <div class="testimonial-author">Mr. Muhammad</div>
                                            <span class="company_name ">GeoDrones</span>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('assets/images/files/anzil.png')}}"
                                             alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">RoboAds has been a complete gamechanger for
                                                our company. The number of visitors has tripled from day one!
                                            </div>
                                            <div class="testimonial-author">Antony Anzil</div>
                                            <p class="text-dark small">Technical Engineer</p>
                                            <span class="company_name ">Advanced Technologies</span>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                            </div> <!-- end of swiper-wrapper -->
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of sliedr-container -->
                    <!-- end of card slider -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider -->
    <!-- end of testimonials -->
    <div class="container" id="container-for-robots1">
        @php
            $robots = \App\Models\Robot::all();
        @endphp
        <h3 class="text-center headinghow">Rent Your Robot Now</h3>
        <div class="container container-for-robots1" style='background: {{$robots[0]->color_code}};border-radius:22pc'>
            @if($robots !=null)

                <div class="container-for-robots">

                    <div class="imgBx">
                        <img src="https://faceaqses.s3.amazonaws.com/roboedge/ra100-s3-imp.png"
                             alt="Nike Jordan Proto-Lyte Image">
                    </div>
                    <div class="details">
                        <div class="content">
                            <h2 id="robot_name" class="text-uppercase">{{$robots[0]->robot_name}} <br>
                                <span></span>
                            </h2>
                            <p>
                                The most sophisticated signage robot that has been designed to maximize the impact of the
                                mobile indoor/outdoor advertising experience.
                                Cushioned Comfort: A full-length foam midsole delivers lightweight, plush cushioning.
                            </p>
                            <p>AI software application which is used to detect age and gender of users who passes by based
                                on online face analyses and automatically starts playing advertisements based on the
                                targeted audience.</p>
                            <p class="product-colors">Available Robots for rent:
                                <br>
                                @foreach($robots as $key => $robot)
                                    <span class="{{$robot->color_name}} active_{{$key}}" data-robot-id="{{$robot->id}}" data-color-primary="{{$robot->color_code}}" data-color-sec="{{$robot->color_code}}"
                                          data-pic="{{$robot->robot_photo}}"></span><b style="font-weight: bolder;position: relative;margin: 7px -6px 7px 9px;">{{$robot->robot_name}}</b>
                                @endforeach
                            </p>
                            <h3 style="color: black" id="price-format">{{$robots[0]->robot_rental_price}}</h3>
                            <input type="text" id="robot_price_info" value="{{$robots[0]->robot_rental_price}}" hidden> <b id="aed" style="line-height: 38px;   color: black;">AED</b>
                            <a class="btn custom-btn text-white btn-13 rentRobotButton" style="float: right" onclick="selectRobotForRent()" id="{{$robots[0]->id}}">Rent Robot</a>
                        </div>
                    </div>

                </div>
            @endif
            <script>

                $('.active_0').addClass('active');

                $(".product-colors span").click(function () {

                    var robot_renta_price =  $('.content #robot_price_info').val();
                    $(".product-colors span").removeClass("active");
                    var activeClass =  $(this).addClass("active");
                    /*  $(".active").css("border-color", $(this).attr("data-color-sec"))*/
                    /* $("body").css("background", $(this).attr("data-color-primary"));*/
                    $(".content h2").css("color", $(this).attr("data-color-sec"));

                    $(".content #price-format").val(robot_renta_price);
                    var robot_id = $(this).attr("data-robot-id");

                    $.ajax({
                        /* the route pointing to the post function */
                        url: '{{route('getRobotDetails')}}',
                        type: 'POST',
                        data: {robot_id:robot_id,_token:'{{csrf_token()}}'},
                        success: function (data) {
                                if(data.status ==1){
                                $('#robot_price_info').val(data.message.robot_rental_price);
                                $('.content #price-format').text(data.message.robot_rental_price)
                                $('.content #robot_name').text(data.message.robot_name)
                                $(".rentRobotButton").attr('id',data.message.id);
                                /* var linearColor = 'linear-gradient(359deg,white,' +activeClass.attr("data-color-sec")+ ',white)';
                                console.log(linearColor)*/
                                $(".container-for-robots1").css("background", activeClass.attr("data-color-sec"));
                                $("#aed").css("color", activeClass.attr("data-color-sec"));
                                }
                                else {
                                $('#robot_price_info').val('NA');
                                $('.content #price-format').text('NA')
                                }
                              }
                          });

                    $(".content h3").css("color", $(this).attr("data-color-sec"));
                    $(".container-for-robots .details a").css("background", $(this).attr("data-color-sec"));
                    $(".imgBx img").attr('src', $(this).attr("data-pic"));
                });
                function selectRobotForRent(){
                    var getId = event.srcElement.id;
                    window.location.href= "robot/rent-Robot-Step-One/"+getId+"";
                }
            </script>
        </div>


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('.close').click(function(){
            $('iframe').each(function(){
                var el_src = $(this).attr("src");
                $(this).attr("src",el_src);
            });
        });
        $('.navbar-nav li .nav-link.active').removeClass('active');
        $('.navbar-nav li #home').addClass('active');
    </script>
@endsection
