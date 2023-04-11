@extends('index')
@section('description', 'New Breed Of Service Robots with 55inch digital signage screens in 4K resolution')
@section('keywords', 'Robot rental, One of the best mobile advertising robots, Robot on rent, Rent mr robot, The company advertising ')
@section('content')
    @include('layouts.newBlogs_header')

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

        .container h2{
            color: black !important;
        }
        .active-blogs{
            color: #14bf98 !important;
        }
    </style>


    <!-- Project Lightboxes -->
    <!-- Lightbox -->

    <div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-12">
                <iframe width="100%" height="600px" src="https://www.youtube.com/embed/KBKFXYEJCB4"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-12">
                <iframe width="100%" height="600px" src="https://www.youtube.com/embed/MteoDYVD4Z0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div> <!-- end of col -->

        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-12">
                <iframe width="100%" height="600px" src="https://www.youtube.com/embed/ByPGNZch2Fs"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close  x-button">×</button>
            <div class="col-lg-12">
                <img style="width: 100%" src="{{asset('assets/images/airshow-big.JPG')}}" alt="">
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-12">
                <iframe width="100%" height="600px" src="https://www.youtube.com/embed/g1z97AaOEjc"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-12">

                <iframe width="100%" height="600px" src="https://www.youtube.com/embed/ByPGNZch2Fs"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div> <!-- end of row -->
        </div> <!-- end of lightbox-basic -->
        <!-- end of lightbox -->

        <!-- Lightbox -->
        <div id="project-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-12">
                    <iframe width="100%" height="600" src="https://www.youtube.com/embed/ENvEcv-3uhs"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div> <!-- end of row -->
            </div> <!-- end of lightbox-basic -->
            <!-- end of lightbox -->
        </div>
    </div>

    <!-- Lightbox -->
    <div id="project-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-12">
                <iframe width="100%" height="600px" src="https://www.youtube.com/embed/Yq_vWN-1rEI"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div>
    </div> <!-- end of lightbox-basic -->

    <div class="container">
        <div class="row mb-2 p-3">
            <div class="col-12 text-center">
                <h2>News and Blogs</h2>
            </div>
            <h3 class="mb-4 mt-3">Why are RoboAds Mobile <span class="font-weight-bold">Advertising Robots</span> important for your business? </h3>
            <p class="text-dark">
                Mobile advertising robots, or MARs, are a relatively new technology that is gaining widespread attention
                for their ability to bring advertising directly to consumers. These robots are essentially mobile
                billboards that can roam around public spaces, displaying advertisements and other promotional materials
                to passersby.
            </p>
            <p class="text-dark"> There are several reasons why mobile advertising robots are important for businesses
                and advertisers. First, MARs offer a unique and eye-catching way to reach potential customers. Because
                they are mobile, they can go wherever there are people, allowing businesses to target specific
                demographics or areas. This can be particularly useful for small businesses or local businesses that may
                not have the resources to reach a wider audience through traditional advertising channels.
            </p>
            <p class="text-dark">
                Second, mobile advertising robots are highly customizable. Businesses can choose the size, shape, and
                design of the robot, as well as the content that is displayed on it. This allows businesses to tailor
                their advertising to specific audiences and goals, making it more effective.
            </p>

            <p class="text-dark">
                Third, mobile advertising robots are cost-effective. Because they do not require expensive advertising
                space or airtime, businesses can save money on their advertising budget while still reaching a large
                audience.
            </p>
            <p class="text-dark">Fourth, mobile advertising robots are environmentally friendly. Because they do not
                emit any emissions and do not require paper or other materials, they are a sustainable way to
                advertise. </p>
            <p class="text-dark">Overall, mobile advertising robots are a valuable tool for businesses and advertisers
                looking to reach potential customers in a unique and cost-effective way. As this technology continues to
                evolve, we can expect to see even more businesses and advertisers incorporating MARs into their
                marketing strategies.</p>

        </div>

        <!--Start code-->
        <div class="row">
            <div class="col-12 pb-5">
                <!--SECTION START-->
                <section class="row">
                    <!--Start slider news-->
                    <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                        <div id="featured" class="carousel slide carousel" data-ride="carousel">
                            <!--dots navigate-->
                            <ol class="carousel-indicators top-indicator">
                                <li data-target="#featured" data-slide-to="0" class="active"></li>
                                <li data-target="#featured" data-slide-to="1"></li>
                                <li data-target="#featured" data-slide-to="2"></li>
                                <li data-target="#featured" data-slide-to="3"></li>
                            </ol>

                            <!--carousel inner-->
                            <div class="carousel-inner">
                                <!--Item slider-->
                                <div class="carousel-item active">
                                    <div class="card border-0 rounded-0 text-light overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_left-cover-1 image-wrapper">
                                                <a href="{{route('newsBlogs_2')}}">
                                                    <img class="img-fluid w-100"
                                                         src="https://faceaqses.s3.amazonaws.com/roboads_website/leap11.jpg"
                                                         alt="no File">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!--title-->
                                                <a href="{{route('newsBlogs_2')}}">
                                                    <h2 class="h3 post-title text-white my-1">RA-200 - World's first
                                                        Advertising robot.</h2>
                                                </a>
                                                <!-- meta title -->
                                                <div class="news-meta">
                                                    <span class="news-author">at <a class="text-white font-weight-bold"
                                                                                    href="https://roboads.com/">LEAP Saudi Arabia</a></span>
                                                    <span class="news-date">2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Item slider-->
                                <div class="carousel-item">
                                    <div class="card border-0 rounded-0 text-light overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_left-cover-1 image-wrapper">
                                                <a href="{{route('newsBlogs_2')}}">
                                                    <img class="img-fluid w-100"
                                                         src="https://faceaqses.s3.amazonaws.com/roboads_website/leap2.PNG"
                                                         alt="Bootstrap news theme">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!--title-->
                                                <a href="https://roboads.com/">
                                                    <h2 class="h3 post-title text-white my-1">Future Innovations Summit
                                                        2021</h2>
                                                </a>
                                                <!-- meta title -->
                                                <div class="news-meta">
                                                    <span class="news-author"> at <a class="text-white font-weight-bold"
                                                                                     href=https://roboads.com/">Future Innovations Summit</a></span>
                                                    <span class="news-date">2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Item slider-->
                                <div class="carousel-item">
                                    <div class="card border-0 rounded-0 text-light overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_left-cover-1 image-wrapper">
                                                <a href="{{route('newsBlogs_2')}}">
                                                    <img class="img-fluid w-100"
                                                         src="https://faceaqses.s3.amazonaws.com/roboads_website/leap3.PNG"
                                                         alt="Roboads.com">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!--title-->
                                                <a href="https://roboads.com/">
                                                    <h2 class="h3 post-title text-white my-1">RA-200 - World's first
                                                        Advertising robot.</h2>
                                                </a>
                                                <!-- meta title -->
                                                <div class="news-meta">
                                                    <span class="news-author">by <a class="text-white font-weight-bold"
                                                                                    href="https://roboads.com/">Future Innovations Summit (FIS) Dubai</a></span>
                                                    <span class="news-date"> 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Item slider-->
                                <div class="carousel-item">
                                    <div class="card border-0 rounded-0 text-light overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_left-cover-1 image-wrapper">
                                                <a href="{{route('newsBlogs_2')}}">
                                                    <img class="img-fluid w-100"
                                                         src="https://faceaqses.s3.amazonaws.com/roboads_website/MENA1.jpg"
                                                         alt="Bootstrap portal template">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!--title-->
                                                <a href="https://roboads.com/">
                                                    <h2 class="h3 post-title text-white my-1">RA-200 - World's first
                                                        Advertising robot.</h2>
                                                </a>
                                                <!-- meta title -->
                                                <div class="news-meta">
                                                    <span class="news-author">by <a class="text-white font-weight-bold"
                                                                                    href="https://roboads.com/">MENA Transport Exhibition.</a></span>
                                                    <span class="news-date">Feb 6, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end item slider-->
                            </div>
                            <!--end carousel inner-->
                        </div>

                        <!--navigation-->
                        <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!--End slider news-->

                    <!--Start box news-->
                    <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                        <div class="row">
                            <!--news box-->
                            <div class="col-6 pb-1 pt-0 pr-1">
                                <div class="card border-0 rounded-0 text-white overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_right-cover-2 image-wrapper">
                                            <a href="{{route('newsBlogs_2')}}">
                                                <img class="img-fluid"
                                                     src="https://faceaqses.s3.amazonaws.com/roboads_website/eucerin1.jpg"
                                                     alt="simple blog template bootstrap">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!-- category -->
                                            <a class="p-1 badge badge-primary rounded-0" href="#">Technology</a>

                                            <!--title-->
                                            <a href="{{route('newsBlogs_2')}}">
                                                <h2 class="h5 text-white my-1">RA-200 Model</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--news box-->
                            <div class="col-6 pb-1 pl-1 pt-0">
                                <div class="card border-0 rounded-0 text-white overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_right-cover-2 image-wrapper">
                                            <a href="{{route('newsBlogs_2')}}">
                                                <img class="img-fluid"
                                                     src="https://faceaqses.s3.amazonaws.com/roboads_website/gitex1.jpg"
                                                     alt="bootstrap templates for blog">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!-- category -->
                                            <a class="p-1 badge badge-primary rounded-0" href="#">Robotics</a>
                                            <!--title-->
                                            <a href="https://roboads.com/">
                                                <h2 class="h5 text-white my-1">ROBOADS AT GITEX DWTC, DUBAI</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--news box-->
                            <div class="col-6 pb-1 pr-1 pt-1">
                                <div class="card border-0 rounded-0 text-white overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_right-cover-2 image-wrapper">
                                            <a href="{{route('newsBlogs_2')}}">
                                                <img class="img-fluid"
                                                     src="https://faceaqses.s3.amazonaws.com/roboads_website/leap11.jpg"
                                                     alt="bootstrap blog wordpress theme">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!-- category -->
                                            <a class="p-1 badge badge-primary rounded-0" href="#">Artificial
                                                Intelligence</a>
                                            <!--title-->
                                            <a href="{{route('newsBlogs_2')}}">
                                                <h2 class="h5 text-white my-1">Biggest tech event at Riyadh Saudi
                                                    Arabia</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--news box-->
                            <div class="col-6 pb-1 pl-1 pt-1">
                                <div class="card border-0 rounded-0 text-white overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_right-cover-2 image-wrapper">
                                            <a href="{{route('newsBlogs_2')}}">
                                                <img class="img-fluid"
                                                     src="https://faceaqses.s3.amazonaws.com/roboads_website/eucerin-jeddah.jpg"
                                                     alt="Jeddah">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!-- category -->
                                            <a class="p-1 badge badge-primary rounded-0" href="#">Telepresence</a>
                                            <!--title-->
                                            <a href="{{route('newsBlogs_2')}}">
                                                <h2 class="h5 text-white my-1">JEDDAH, SAUDI ARABIA 2022</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end news box-->
                        </div>
                    </div>
                    <!--End box news-->
                </section>
                <!--END SECTION-->
            </div>
        </div>
        <!--end code-->


    </div>
    <!-- end of lightbox -->
    <!-- end of project lightboxes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('.navbar-nav li .nav-link.active').removeClass('active');
        $('.navbar-nav li #newsblogs').addClass('active');
        $('.navbar-nav li .resources').addClass('active');

    </script>
@endsection
