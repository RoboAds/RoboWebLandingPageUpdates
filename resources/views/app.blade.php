<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>

        .navbar-default {
            color: #fff;
            background-color: #272727;
            border-color: #272727;
        }

        .navbar-default .navbar-nav > li > a {
            color: #fff;
        }

        .navbar-default .navbar-nav > li > a:hover {
            color: #fff;
            background-color: #C7081B;
        }

        .navbar-default .navbar-nav > .dropdown > a .caret {

            border-bottom-color: #fff;
        }

        .navbar-default .navbar-brand {
            color: #fff;
        }

        .menu-large {
            position: static !important;
        }

        .megamenu {
            padding: 20px 0px;
            width: 100%;
            background-color: #C7081B;
        }

        .megamenu > li > ul {
            padding: 0;
            margin: 0;
        }

        .megamenu > li > ul > li {
            list-style: none;
        }

        .megamenu > li > ul > li > a {
            display: block;
            padding: 5px 20px;
            clear: both;
            font-weight: normal;
            line-height: 1.428571429;
            color: #fff;
            white-space: normal;
        }

        .megamenu > li ul > li > a:hover,
        .megamenu > li ul > li > a:focus {
            text-decoration: none;
            color: #fff;
            background-color: #333333;
        }

        .megamenu.disabled > a,
        .megamenu.disabled > a:hover,
        .megamenu.disabled > a:focus {
            color: #999999;
        }

        .megamenu.disabled > a:hover,
        .megamenu.disabled > a:focus {
            text-decoration: none;
            background-color: transparent;
            background-image: none;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            cursor: not-allowed;
        }

        .dropdown-header {
            color: #ffffff;
            font-size: 18px;
            font-weight: 700;
        }

        .img-thumbnail {
            background-color: #C7081B;
            border: 0;

        }

        .img-thumbnail:hover {
            background-color: #333333 !important;
        }

        @media (max-width: 768px) {
            .megamenu {
                margin-left: 0;
                margin-right: 0;
            }

            .megamenu > li {
                margin-bottom: 30px;
            }

            .megamenu > li:last-child {
                margin-bottom: 0;
            }

            .megamenu.dropdown-header {
                padding: 3px 15px !important;

            }

            .navbar-nav .open .dropdown-menu .dropdown-header {
                color: #fff;
            }
        }

        img {
            height: 200px !important;
        }

        canvas {
            background: black;
            width: 100vw;
            height: 100vh;
        }

        input {
            width: 250px;
            height: 40px;
            line-height: 40px;
            position: absolute;
            bottom: 35px;
            left: calc(50% - 125px);
            background: none;
            color: white;
            font-size: 30px;
            font-family: arial;
            text-align: center;
            border: 1px solid white;
            background: rgba(255, 255, 255, 0.2);
        }

        p {
            position: fixed;
            left: 0;
            bottom: 5px;
            color: #fff;
            z-index: 10;
            font-size: 16px;
            font-family: Helvetica, Verdana, sans-serif;
            opacity: 0.5;
            width: 100%;
            text-align: center;
            margin: 0;
        }
    </style>
</head>
<body class="antialiased">
{{--     <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
     --}}{{--    @if (Route::has('login'))
             <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                 @auth
                     <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                 @else
                     <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                     @if (Route::has('register'))
                         <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                     @endif
                 @endauth
             </div>
         @endif--}}{{--
     </div>--}}
<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li class="dropdown menu-large">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Product Listing <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu megamenu row">
                        <li>
                            <div class="col-sm-6 col-md-2">
                                <a href="#" class="img-thumbnail">
                                    <img src="{{asset('assets/images/robot1.png')}}"/>
                                </a>
                                <p>2016 Scion FR-S Coupe</p>
                            </div>
                            <div class="col-sm-6 col-md-2">
                                <a href="#" class="img-thumbnail">
                                    <img src="{{asset('assets/images/robot2.png')}}"/> </a>
                                <p>2016 Scion iA Sedan</p>
                            </div>
                            <div class="col-sm-6 col-md-2">
                                <a href="#" class="img-thumbnail">
                                    <img src="{{asset('assets/images/robot3.png')}}"/> </a>
                                <p>2016 Scion iM Hatchback</p>
                            </div>
                            <div class="col-sm-6 col-md-2">
                                <a href="#" class="img-thumbnail">
                                    <img src="{{asset('assets/images/robot5.png')}}"/> </a>
                                <p>2016 Scion FR-S Coupe</p>
                            </div>
                            <div class="col-sm-6 col-md-2">
                                <a href="#" class="img-thumbnail">
                                    <img src="{{asset('assets/images/robot6.png')}}"/> </a>
                                <p>2016 Scion iA Sedan</p>
                            </div>
                            <div class="col-sm-6 col-md-2">
                                <a href="#" class="img-thumbnail">
                                    <img src="{{asset('assets/images/robot7.jpg')}}"/> </a>
                                <p>2016 Scion iM Hatchback</p>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="dropdown menu-large">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                    <ul class="dropdown-menu megamenu row">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Glyphicons</li>
                                <li><a href="#">Available glyphs</a></li>
                                <li class="disabled"><a href="#">How to use</a></li>
                                <li><a href="#">Examples</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Dropdowns</li>
                                <li><a href="#">Example</a></li>
                                <li><a href="#">Aligninment options</a></li>
                                <li><a href="#">Headers</a></li>
                                <li><a href="#">Disabled menu items</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Button groups</li>
                                <li><a href="#">Basic example</a></li>
                                <li><a href="#">Button toolbar</a></li>
                                <li><a href="#">Sizing</a></li>
                                <li><a href="#">Nesting</a></li>
                                <li><a href="#">Vertical variation</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Button dropdowns</li>
                                <li><a href="#">Single button dropdowns</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Input groups</li>
                                <li><a href="#">Basic example</a></li>
                                <li><a href="#">Sizing</a></li>
                                <li><a href="#">Checkboxes and radio addons</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Navs</li>
                                <li><a href="#">Tabs</a></li>
                                <li><a href="#">Pills</a></li>
                                <li><a href="#">Justified</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Navbar</li>
                                <li><a href="#">Default navbar</a></li>
                                <li><a href="#">Buttons</a></li>
                                <li><a href="#">Text</a></li>
                                <li><a href="#">Non-nav links</a></li>
                                <li><a href="#">Component alignment</a></li>
                                <li><a href="#">Fixed to top</a></li>
                                <li><a href="#">Fixed to bottom</a></li>
                                <li><a href="#">Static top</a></li>
                                <li><a href="#">Inverted navbar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Edit the text with whatever you want :) -->
<!-- Works with emojis too ! -->
<canvas id="scene"></canvas>
<input id="copy" type="text" value="RoboAds ♥"/>
</body>
</html>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script>
    // Dropdown Menu Fade
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop().fadeIn("fast");
            },
            function () {
                $('.dropdown-menu', this).stop().fadeOut("fast");
            });

        var canvas = document.querySelector("#scene"),
            ctx = canvas.getContext("2d"),
            particles = [],
            amount = 0,
            mouse = {x: 0, y: 0},
            radius = 1;

        var colors = ["#468966", "#FFF0A5", "#FFB03B", "#B64926", "#8E2800"];

        var copy = document.querySelector("#copy");

        var ww = canvas.width = window.innerWidth;
        var wh = canvas.height = window.innerHeight;

        function Particle(x, y) {
            this.x = Math.random() * ww;
            this.y = Math.random() * wh;
            this.dest = {
                x: x,
                y: y
            };
            this.r = Math.random() * 5 + 2;
            this.vx = (Math.random() - 0.5) * 20;
            this.vy = (Math.random() - 0.5) * 20;
            this.accX = 0;
            this.accY = 0;
            this.friction = Math.random() * 0.05 + 0.94;

            this.color = colors[Math.floor(Math.random() * 6)];
        }

        Particle.prototype.render = function () {


            this.accX = (this.dest.x - this.x) / 1000;
            this.accY = (this.dest.y - this.y) / 1000;
            this.vx += this.accX;
            this.vy += this.accY;
            this.vx *= this.friction;
            this.vy *= this.friction;

            this.x += this.vx;
            this.y += this.vy;

            ctx.fillStyle = this.color;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.r, Math.PI * 2, false);
            ctx.fill();

            var a = this.x - mouse.x;
            var b = this.y - mouse.y;

            var distance = Math.sqrt(a * a + b * b);
            if (distance < (radius * 70)) {
                this.accX = (this.x - mouse.x) / 100;
                this.accY = (this.y - mouse.y) / 100;
                this.vx += this.accX;
                this.vy += this.accY;
            }

        }

        function onMouseMove(e) {
            mouse.x = e.clientX;
            mouse.y = e.clientY;
        }

        function onTouchMove(e) {
            if (e.touches.length > 0) {
                mouse.x = e.touches[0].clientX;
                mouse.y = e.touches[0].clientY;
            }
        }

        function onTouchEnd(e) {
            mouse.x = -9999;
            mouse.y = -9999;
        }

        function initScene() {
            ww = canvas.width = window.innerWidth;
            wh = canvas.height = window.innerHeight;
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.font = "bold " + (ww / 10) + "px sans-serif";
            ctx.textAlign = "center";
            ctx.fillText(copy.value, ww / 2, wh / 2);

            var data = ctx.getImageData(0, 0, ww, wh).data;
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.globalCompositeOperation = "screen";

            particles = [];
            for (var i = 0; i < ww; i += Math.round(ww / 150)) {
                for (var j = 0; j < wh; j += Math.round(ww / 150)) {
                    if (data[((i + j * ww) * 4) + 3] > 150) {
                        particles.push(new Particle(i, j));
                    }
                }
            }
            amount = particles.length;

        }

        function onMouseClick() {
            radius++;
            if (radius === 5) {
                radius = 0;
            }
        }

        function render(a) {
            requestAnimationFrame(render);
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (var i = 0; i < amount; i++) {
                particles[i].render();
            }
        };

        copy.addEventListener("keyup", initScene);
        window.addEventListener("resize", initScene);
        window.addEventListener("mousemove", onMouseMove);
        window.addEventListener("touchmove", onTouchMove);
        window.addEventListener("click", onMouseClick);
        window.addEventListener("touchend", onTouchEnd);
        initScene();
        requestAnimationFrame(render);
    });
</script>
