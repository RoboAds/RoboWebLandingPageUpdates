<!-- Header -->
<style>


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
            margin: 0% 2% -1% -61% !important;
            height: -webkit-fill-available !important;
        }
    }


    @media (min-width: 768px) {
        .header h1 {

        }
        .header .overlay p{

            margin-top:23px
        }

        .header-content p{
            margin: 1px 189px 24px 117px;
        }
        .btn-hover{
            margin: -2px 65px 22px 1px;
        }

        .header-content{
            right: 0;
        }
    }
    @media (min-width: 1100px) {
        .header h1 {
            text-shadow: 1px 2px 5px black;
        }
        .header .overlay p{

            margin-top:23px;
            text-shadow: 1px 2px 4px black;
        }
        video {
            min-height: 100vh;
            z-index: 1;
            width: 110vh;
        }
        .header-content{
            right: 0;
        }
        .header-content h2{
            font-size: 64px;
            text-shadow: 1px 2px 5px black;
        }
    }

    @media (min-width: 1400px) {
        .header h1 {
        }
        .header .overlay p{
            margin-top:23px;
            text-shadow: 1px 2px 6px black;
        }

        video {
            min-height: 100vh;
            z-index: 1;
            width: 140vh;
        }
        .header-content{
            right: 0;
        }
    }

    @media (min-width: 1900px) {
        .header h1 {
            margin-right: -150%;
        }
        .header .overlay p{
            margin-top:23px;
            text-shadow: 1px 2px 6px black;
        }
        .header-content{
            right: 0;
        }

        video {

            z-index: 1;
            width: 100%    !important;
            height: auto   !important;
        }
        .text-container{
            margin: -90px 301px !important;
        }
    }

    .bg-video-wrap{
        position: relative;
        overflow: hidden;
        width: 100%;
        /*  background: linear-gradient(84deg, #1212120d, white,#00000038);*/
        height: 100vh;
    }

    .btn-hover {
        width: 200px;
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        cursor: pointer;
        height: 55px;
        text-align:center;
        border: none;
        background-size: 300% 100%;

        border-radius: 50px;
        moz-transition: all .4s ease-in-out;
        -o-transition: all .4s ease-in-out;
        -webkit-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out;
    }

    .btn-hover:hover {
        background-position: 100% 0;
        moz-transition: all .4s ease-in-out;
        -o-transition: all .4s ease-in-out;
        -webkit-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out;
    }

    .btn-hover:focus {
        outline: none;
    }
    .btn-hover.color-6 {
        background-image: linear-gradient(to right, #009245, #FCEE21, #00A8C5, #D9E021);
        box-shadow: 0 4px 15px 0 rgba(83, 176, 57, 0.75);
    }

</style>
<header id="header" class="header">
    <div class="bg-video-wrap">
        <video class="my-video" src="{{asset('assets/video/COMPLETE.mp4')}}" autoplay loop muted >
        </video>

        <div class="overlay">
            <div class="header-content" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-container">
                                <h2 style="color: whitesmoke">RA-200</h2><br>
                                <p class="text-nowrap text-white" style="" id="topreveal"> AUTONOMOUS - INDOOR/OUTDOOR - ADVERTISING ROBOT
                                </p>
                                <br>  <a class="page-scroll" href="#contact-form-second"><button class=" btn-hover color-6 fadeIn">Get Started</button></a>
                            </div>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->

                </div> <!-- end of container -->

            </div> <!-- end of header-content -->

        </div>

    </div>
    <script>

        // Targeting video element
        let clip = document.querySelector(".my-video")
        let overlay = document.querySelector(".overlay")

        overlay.addEventListener("mouseover", function (e) {
            clip.pause()
        })

        overlay.addEventListener("mouseout", function (e) {
            clip.play();
        })
    </script>

</header> <!-- end of header -->
<!-- end of header -->

