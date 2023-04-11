<!-- Header -->
<header id="header" class="header">
    <style>

        @media only screen and (max-width: 700px) {
            .home-header-video {
                margin: -51% 0% -11% -212% !important;
            }
            .p-large{
                margin-top: 90%;
            }
        .date-time-location{
            margin: 8pc 0pc -14pc 0pc;
        }
        }


        @media only screen and (min-width: 700px) {
            .p-large {
                margin: 13% 31.6%;
                text-align: left;
            }
            .btn-hover{
                margin: -19px 2px 2px 11pc;
            }
            .header .header-content{
                padding-top: 5.75rem;
            }
            .animate-charcter{
                white-space: nowrap;
            }

            .interactive{
                margin-top: -10%;
            }

        }
        @media (min-width: 992px) {
            .header .text-container {
                margin: -15.5rem 0rem 4rem 35rem;
            }
            .btn-hover{
                margin: -19px 2px 2px 11pc;
            }
        }

        @media only screen and (min-width: 1200px) {
         .header .header-content{
             padding-top: 6.75rem;
         }
        }
        @media only screen and (min-width: 1600px) {
            .wrapping{
                white-space: nowrap !important;
            }
            .p-large{
                margin: 9% 31%;
                text-align: left;
            }
            .btn-hover{
                margin: -19px 2px 2px 11pc;
            }
            .date-time-location{
                margin: 1pc -20pc 3pc 22pc;
            }

        }

        .btn-hover,.buyRobot-btn,.advertisement-btn {
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

        .btn-hover:hover,.advertisement-btn:hover,.buyRobot-btn:hover {
            background-position: 100% 0;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .btn-hover:focus,.advertisement-btn:focus,.buyRobot-btn:focus {
            outline: none;
        }
        .btn-hover.color-6 ,.advertisement-btn.color-6,.buyRobot-btn.color-6 {
            background-image: linear-gradient(to right, #009245, #FCEE21, #00A8C5, #D9E021);
            box-shadow: 0 4px 15px 0 rgba(83, 176, 57, 0.75);
        }
        .fadeIn {
            animation: fadeIn ease 2s;
            animation-delay: .9s;
            animation-direction: alternate;
            opacity: 0;
        }

        .fadeIn.fadeIn--after {
            opacity: 1
        }

        @keyframes fadeIn {
            0% { opacity: 0;}
            100% { opacity: 1; }
        }
        body{
            background: #f0f0f0 !important;
        }
        .date-time-location label{
            float: left;
            margin: 2px 0 -11px 12px;
            font-size: 12px;
        }
        .date-time-location label i{
            margin: 19px -21px;
        }
        .date-time-location input{
            border: none;

        }
        .date-time-location input:focus{
            box-shadow: none;

        }
        .date-time-location .form-group{
            margin: 9px 1px;
            padding: 1px 23px;
        }
        .date-time-location button{
            margin: 2px -16px 2px -31px;
            padding: 15px;
        }
    </style>

    <div class="bg-video-wrap">
        <video class="video-main home-header-video" src="{{asset('assets/video/FDH.webm')}}" autoplay loop muted>
        </video>
        <div class="overlay">
            <div class="header-content ">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-12 ">
                            {{-- <canvas id="scene"></canvas>
                             <input id="copy" type="text" value="RoboAds ♥" />--}}
                            <div class="text-container ">
                                <h1 id="coming_soon" class="interactive"><span class="text-nowrap">THE FUTURE OF</span><br> <span class="wrapping animate-charcter">INTERACTIVE
                                    ADVERTISING</span></h1>
                            </div>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                    <form action="">
                        <div class="row bg-white rounded date-time-location" style="background: linear-gradient(45deg, #e9d101, #f88018e6)">
                            <div class="col-sm-12 col-lg-3 ">
                                <div class="form-group bg-white rounded">
                                    <label for="inputEmail4"> <i class="fa fa-search position-absolute"></i> Location</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Dubai, United Arab Emirates">
                                </div></div>
                            <div class="col-sm-12 col-lg-2 ">  <div class="form-group bg-white rounded">
                                    <label for="inputEmail4">
                                        <i class="fa fa-calendar position-absolute"></i>Start Date</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="7th April">
                                </div></div>
                            <div class="col-sm-12 col-lg-2 ">  <div class="form-group bg-white rounded">
                                    <label for="inputEmail4">  <i class="fa fa-clock position-absolute"></i> Start Time</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="12:15AM">
                                </div></div>
                            <div class="col-sm-12 col-lg-2 ">  <div class="form-group bg-white rounded">
                                    <label for="inputEmail4">  <i class="fa fa-calendar position-absolute"></i> End Date</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="8th April">
                                </div></div>
                            <div class="col-sm-12 col-lg-2 ">  <div class="form-group bg-white rounded">
                                    <label for="inputEmail4"> <i class="fa fa-clock position-absolute"></i>  End Time</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="12:15PM">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-1 p-2">
                                <button class="btn btn-success">Submit</button></div>
                        </div>
                    </form>
                </div> <!-- end of container -->
                <p class="p-heading p-large" style="background: transparent" id="coming_soon">Innovative mobile advertising
                    robots designed for brand awareness, precision targeting and powerful customer engagement.
                </p>

                <br>
           {{--     <a class="page-scroll" href="#container-for-robots1"><button class=" btn-hover color-6 fadeIn">Rent Robot</button></a>
                <a class="page-scroll" href="{{route('advertisement')}}"><button class=" advertisement-btn color-6 fadeIn">Advertisement</button></a>
                <a class="page-scroll" href="#{{'buy-robot'}}"><button class=" buyRobot-btn color-6 fadeIn">Buy Robot</button></a>
--}}
            </div> <!-- end of header-content -->

        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        document.body.addEventListener("animationend", (ev) => {
            if(ev.animationName === "fadeIn") {
                ev.target.classList.add("fadeIn--after");
            }
        });
    </script>
</header> <!-- end of header -->
<!-- end of header -->

