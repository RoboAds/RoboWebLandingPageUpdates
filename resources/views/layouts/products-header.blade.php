<!-- Header -->
<style>

    @media (min-width: 768px) {
        .header h1 {
            margin-right: -245%;
        }
        .header .overlay p{
            margin-right: -222%;
            margin-top:23px
        }


    }

    @media (min-width: 1500px) {
        .header h1 {
            margin-right: -204%;
        }
        .header .overlay p{
            margin-right: -183%;
            margin-top:23px
        }


    }
    @media (max-width: 600px) {
        .overlay{width: 100%;
            height: 100vh;
            position: absolute;
            top: 0;
            left: 0;
            background-image: linear-gradient(
                45deg, rgb(88 176 255 / 18%) 59%, rgb(0 31 76 / 51%) 42%);
            background-size: 3px 3px;
            z-index: 2;
        }
        .header h1 {
            color: #fff;
            margin: 78px 1px -66px 0px;
            text-shadow: 1px 2px 6px black;
        }
        .header .overlay p{
            font-size: 13px;
            margin-top:-4px;
            text-shadow: 1px 2px 5px black;
        }
        .my-video{
            margin: 0% 2% -1% -80% !important;
            height: -webkit-fill-available !important;
        }
    }
</style>
<header id="header" class="header">
    <div class="bg-video-wrap">
        <video class="my-video" src="{{asset('assets/video/videoRA500.webm')}}" autoplay loop muted >
        </video>
        <div class="overlay">
            <div class="header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            {{-- <canvas id="scene"></canvas>
                             <input id="copy" type="text" value="RoboAds ♥" />--}}
                            <div class="text-container">
                                <h1 style="">RA-500</h1><br>
                            </div>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->

                </div> <!-- end of container -->
                <p class="p-heading p-large text-nowrap" style="" id="coming_soon"> AUTONOMOUS - INDOOR - ADVERTISING ROBOT</p>
            </div> <!-- end of header-content -->

        </div>

    </div>

</header> <!-- end of header -->
<!-- end of header -->

