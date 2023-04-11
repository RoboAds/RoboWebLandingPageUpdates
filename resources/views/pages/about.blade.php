@extends('index')
@section('description', 'New Breed Of Service Robots with 55inch digital signage screens in 4K resolution')
@section('keywords', 'Robot rental, One of the best mobile advertising robots, Robot on rent, Rent mr robot, The company advertising ')
@section('content')
    @include('layouts.about-header')
    <style>
        .clients {
            width: 100%;
        }

        .card {
            border: none;
            font-family: Inter !important;
        }

        body {
            font-family: Inter !important;
        }
        p{
            color: black;

            font-size: 17px;
        }

        .wrapper {
            width: 100%;
            overflow: hidden;
        }
        .photobanner {
            position: relative;
            height: 233px;
            margin-bottom: 30px;
            display: flex;
            width: 100%;
        }

        .photobanner img {
            margin: 0px 25px;
            padding: 32px;
        }

        .photobanner {
            animation: bannermove 50s linear infinite alternate-reverse;
        }

        @keyframes bannermove {
            from {
                left: 0px;
            }
            to {
                left: -2700px;
            }
        }
    </style>



    <div class="container mb-3" style="margin-top: 3rem !important">

        <p>
            <b>RoboAds Inc.</b> is one of the fastest growing leaders in the digital signage robotics industry. Established in
            2018 and headquartered in Palo Alto, RoboAds utilizes cutting edge technology and a highly skilled team of
            experts to provide imaginary and original advertising solutions.
        </p>
        <p> A few years ago, RoboAds brought together the best talent in AI technology, robotics, digital signage and
            app development, to accomplish a visionary goal: to develop the world's first commercial robots for digital
            advertising. Our objective was to leave behind the outdated static posters and billboards, modernizing the
            advertising world with amazing futuristic visual experiences.
        </p>
        <p>
            Our mission was to harness the many advantages of autonomous mobile robots, equipped with the latest visual
            technology, to interact with and engage targeted audiences. Following years of research and development, we
            managed to create a new out-of-this-world experience that has practically revolutionized the traditional
            advertising methods.
        </p>

        <p>
            Today RoboAds is proud to unleash its unique creativity and imagination to enable our customers engage their
            audiences, empower customer loyalty and drive business growth. Our game-changing innovations are redefining
            the possibilities of digital experiences. We enable advertisers and businesses to break new grounds and
            define new possibilities, rather than be limited by them.
        </p>
        <p>RoboAds’ experts stand by to answer your questions and introduce our mobile robots. Contact us now to explore a whole new world of opportunities. </p>

        <h3 class="mt-5">OUR CUSTOMERS</h3>

        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/moi_qatar.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/gitex.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/dubaiairports.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/huiwei.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/aramco.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/aibc.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/dubai_customs.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/dubaiderma.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/ford.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/imbc.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/fis.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/enoc.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/hypermotion.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/arabradio.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/ai_everything.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/dewa.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/geodrones.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/ddd.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/dic.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/FORD.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/globalmedia.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/kabitech.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/milipolqatar.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/missinfluencer.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/orangephar.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/PORCHE.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/sgidubai.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/SHRM.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/SONY.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/stepconference.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/tasmu.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/transportgeneral.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="{{asset('assets/images/files/VIDRO.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <img class="clients" src="https://faceaqses.s3.amazonaws.com/roboads_website/hpLogo.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <h3 class="mt-5">OUR TRUSTED PARTNERS</h3>

        <div class="wrapper">
            <div class="photobanner">
                <img class="first" src="{{asset('assets/images/partners/aws.jpg')}}" alt="" />
                <img src="{{asset('assets/images/partners/stereolabs.jpg')}}" alt="" />
                <img src="{{asset('assets/images/partners/intel.jpg')}}" alt="" />
                <img src="{{asset('assets/images/partners/jbl.jpg')}}" alt="" />
                <img src="{{asset('assets/images/partners/logi.jpg')}}" alt="" />
                <img src="{{asset('assets/images/partners/microsoft.jpg')}}" alt="" />
                <img src="{{asset('assets/images/partners/nvidia.jpg')}}" alt="" />
                <img src="{{asset('assets/images/partners/samsung.jpg')}}" alt="" />
                <img src="{{asset('assets/images/partners/tripplelite.jpg')}}" alt="" />
                <img src="{{asset('assets/images/partners/aws.jpg')}}" alt="" />
                <img src="{{asset('assets/images/partners/jbl.jpg')}}" alt="" />
                <img src="{{asset('assets/images/partners/logi.jpg')}}" alt="" />
                <img src="{{asset('assets/images/partners/intel.jpg')}}" alt="" />
                <img src="{{asset('assets/images/partners/stereolabs.jpg')}}" alt="" />
                <img src="{{asset('assets/images/partners/samsung.jpg')}}" alt="" />
                <img src="{{asset('assets/images/partners/tripplelite.jpg')}}" alt="" />
            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('.navbar-nav li .nav-link.active').removeClass('active');
        $('.navbar-nav li #about').addClass('active');
    </script>
@endsection
