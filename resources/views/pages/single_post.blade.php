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
        .navbar-custom{
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
        .first-section{

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
            background:linear-gradient(45deg, #a30fff,#a30fff, #0f1e89);
            z-index: 2;
            width: 50vw;

            /*-webkit-clip-path: polygon(60% 0, 100% 0, 100% 100%, 40% 100%);
            clip-path: polygon(60% 0, 100% 0, 100% 100%, 40% 100%);*/
        }

        .top .description {
            left: 5%;
        }
        .description h1{
          margin-top:   -53px;
        }
        .description p{
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
        small a{
            text-decoration: none !important;
        }
        small a:hover{
            text-decoration: none !important;
            color: #038cc5 !important;
        }
        .justify-between .leading-5{
            font-size: 12px;
            float: right;
            height: 27px;
            line-height: 8px;
            margin-left: 2px;
            border-radius: 3px;

        }
        .justify-between p{
            margin-top: 7px;
            color: #8b8b8b;
        }
        .justify-between .flex-1{
            float: right;
        }
        .hashtags .hashtags-btn{
            border: none;
            box-shadow: 1px 1px 4px -2px grey;
            margin: 4px 3px;
            border-radius: 4px;
            color: #ff6027 !important;
            font-size: 12px;
            background: #e8e7e7 !important;
        }
.widget a{
    border: none !important;
    color: #1e2752 !important;
    text-decoration: none !important;
}
.big-meta h4 a{
    text-decoration: none;
    color: black;
}
        .justify-content-between h5
        {
            font-size: 14px;
        }
        .contact-form{
            display: none;
        }
        .hide-at-blogs{
            display: none;
        }
    </style>
    <div id="wrapper">

        <section class="section mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">

                            <div class="page-wrapper mt-5">
                                <div class="blog-title-area text-center mt-5">


                                    <h2 class="mt-5">{{$post->name}}</h2>


                                </div><!-- end title -->

                                <div class="single-post-media">
                                    <img  src="https://faceaqses.s3.amazonaws.com/roboads_website/posts/{{$post->original_filename}}" alt="" class="img-fluid">

                                    <p style="white-space: pre-line">{{$post->desc}}

                                    </p>
                                    <small class="firstsmall"><a class="bg-orange text-white p-1"
                                                                 href="tech-category-01.html" title="">Technology</a></small>
                                    <small><a href="tech-single.html" title="">{{\Carbon\Carbon::parse($post->created_at)->format('d M,Y')}}</a></small>

                                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i>
                                            {{rand(50,2000)}}</a></small>
                                </div><!-- end media -->



                            </div><!-- end page-wrapper -->
                            <div class="blog-list clearfix mt-5">
                                    <h2 class="text-dark mt-5">Similar Posts</h2>
                                    @if($posts !=null)
                                        @foreach($posts as $post)
                                            <div class="blog-box row" style="margin:0 0 49px 0px">
                                                <div class="col-md-4">
                                                    <div class="post-media h-100">
                                                        <img  src="https://faceaqses.s3.amazonaws.com/roboads_website/posts/{{$post->original_filename}}" alt="" class="img-fluid">
                                                        <div class="hovereffect"></div>
                                                    </div><!-- end media -->
                                                </div><!-- end col -->

                                                <div class="blog-meta big-meta col-md-8">
                                                    <h4><a href="{{route('single_post',[$post->id,$post->slug])}}" title="">{{$post->name}}</a></h4>
                                                    <p style="white-space: pre-line">{{ \Illuminate\Support\Str::words($post->desc,75)}}
                                                        <a href="" style="font-size: 13px">Read More</a>
                                                    </p>
                                                    <small class="firstsmall"><a class="bg-orange"
                                                                                 href="tech-category-01.html" title="">Technology</a></small>
                                                    <small><a href="tech-single.html" title="">{{\Carbon\Carbon::parse($post->created_at)->format('d M,Y')}}</a></small>

                                                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i>
                                                            {{rand(50,2000)}}</a></small>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        @endforeach
                                    @endif
                            </div><!-- end blog-list -->


                        </div><!-- end page-wrapper -->


                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget mt-5">
                             {{--   <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="upload/banner_07.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->--}}
                            </div><!-- end widget -->



                            <div class="widget">
                                <h2 class="widget-title">Popular Posts</h2>
                                <div class="blog-list-widget mt-1">
                                    <div class="list-group mt-3">

                                        @foreach($postsInRandom as $key => $post)
                                            @if($key <3)
                                            <a href="{{route('single_post',[$post->id,$post->slug])}}"
                                               class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between">
                                                    <img src="https://faceaqses.s3.amazonaws.com/roboads_website/posts/{{$post->original_filename}}" alt="" class="img-fluid float-left">
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
                                                    of delivering live and interactive digital content in the most engaging
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
                                                    of delivering live and interactive digital content in the most engaging
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
                                                <h5 class="mb-1">Thank you Roboads   team for cruising
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
                                        <a href="https://www.facebook.com/RoboAds/" target="_blank" class="social-button facebook-button">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://twitter.com/RoboAds" target="_blank" class="social-button twitter-button">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://www.instagram.com/robo.ads/?hl=en" target="_blank" class="social-button google-button">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://www.youtube.com/channel/UCegQ-wUuI4EfWUQkLlewoAQ" target="_blank" class="social-button youtube-button">
                                            <i class="fa fa-youtube"></i>

                                        </a>
                                    </div>
                                </div>
                            </div><!-- end widget -->

                            <div class="widget">
                                <span class="mt-5 btn btn-sm btn-info border-0">Related tags</span>
                                <div class="col hashtags ml-0 mt-2 p-0">
                                   @foreach($post->tags as $key => $tag)
                                        <a style="" href="{{route('getPostsWithTags',[$tag->id,\Illuminate\Support\Str::slug($tag->tag_name,'-','')])}}" class="btn hashtags-btn">{{$tag->tag_name}}</a>
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

            document.addEventListener('DOMContentLoaded', function() {
                var parent = document.querySelector('.splitview'),
                    toppanelSplit = parent.querySelector('.top'),
                    handle = parent.querySelector('.handle'),
                    skewHack = 0,
                    delta = 0;

                // If the parent has .skewed class, set the skewHack var.
                if (parent.className.indexOf('skewed') != -1) {
                    skewHack = 1000;
                }

                parent.addEventListener('mousemove', function(event) {
                    // Get the delta between the mouse position and center point.
                    delta = (event.clientX - window.innerWidth / 2) * 0.5;

               if (delta > 402){
                   console.log(delta)
               }
                    if (delta < -402){
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
