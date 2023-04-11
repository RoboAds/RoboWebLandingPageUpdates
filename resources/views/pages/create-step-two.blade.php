@extends('index')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
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
            box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
            7px 7px 20px 0px rgba(0,0,0,.1),
            4px 4px 5px 0px rgba(0,0,0,.1);
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
            box-shadow:
                -7px -7px 20px 0px #fff9,
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
            box-shadow:
                -7px -7px 20px 0px #fff9,
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


        .card-info span{
            float: right;
            color: #4384e9;
            font-weight: 600;
        }
        .input--chisato .notEmpty{
            color: #818181;
        }
        .video-section video{
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            position: fixed;
            top: 70px;
            left: 0;
        }

        .text-error{
            border: 2px solid red !important;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/set2.css')}}" />
    <script src="{{asset('js/classie.js')}}"></script>
    <div class="d-flex" style="">
        <div class="col-sm-8 video-section">
            <video class="col-input-form" style=""
                   src="http://localhost/RoboWeb/public/assets/video/video11.mp4" autoplay="" loop="" muted="">
            </video>
        </div>
        <div class="col-sm-4 " style="margin-top: 9pc">
            @if($errors->any())
               <div class="card card-danger" style="z-index: 111;color: red">
                   {{ implode('', $errors->all()) }}
               </div>
            @endif
            <div class="container mt-5">
                <div class="row justify-content-center mt-3">

                    <div class="col-md-12">
                        <div class="d-flex text-center container" style="width: 45%">
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus text-primary"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus text-primary"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus"></i>
                        </div>
                        <form action="{{ route('rentRobot.step.two.post') }}" method="POST">
                            @csrf

                            <div class="card border-0">

                                <div class="card-body">

                                {{--    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif--}}


                 <section class="content bgcolor-4">
				<span class="input input--chisato mt-0">
					<input autocomplete="off" class="input__field input__field--chisato" type="text"  id="company_name"  name="company_name" />
					<label class="input__label input__label--chisato" for="company_name">
						<span class="input__label-content input__label-content--chisato" data-content="Please provide company name">Please provide company name</span>
					</label>
				</span>
                                        <span class="input input--chisato m-0">
					<input autocomplete="off" class="input__field input__field--chisato" type="text"  id="contact_person" name="contact_person" />
					<label class="input__label input__label--chisato" for="contact_person">
						<span class="input__label-content input__label-content--chisato" data-content="Contact person's name">Contact person's name</span>
					</label>
				</span>
                                        <span class="input input--chisato">
					<input autocomplete="off" class="input__field input__field--chisato" type="text" id="contact_number" required  name="contact_number"  />
					<label class="input__label input__label--chisato" for="input-15">
						<span class="input__label-content input__label-content--chisato" data-content="Please provide mobile number">Please provide mobile number</span>
					</label>
				</span>

                           <span class="input input--chisato m-0">
					<input autocomplete="off" class="input__field input__field--chisato" type="text"  id="email" name="email" required  />
					<label class="input__label input__label--chisato" for="input-15">
						<span class="input__label-content input__label-content--chisato" data-content="Please provide email address">Please provide email address</span>
					</label>
				</span>
                                    </section>


                                </div>


                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <a href="" class="btn btn-danger pull-right custom-btn btn-16"><i class="fa fa-arrow-alt-circle-left"></i> Previous</a>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <button type="submit" class="btn btn-primary custom-btn btn-13 submit-button"> Next  <i class="fa fa-arrow-alt-circle-right"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>
    <!-- end of lightbox -->
    <!-- end of project lightboxes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"
            defer></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300">
    <script src="{{asset('js/classie.js')}}"></script>
    <script>


        $("#company_name").on("focusout", function(e){
          var company_name =  $("#company_name").val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url:"{{ route('checkForCompanyExist') }}",
                data:{company_name:company_name},
                success:function(data){
                  if(data == 0){
                      $('#company_name').addClass('text-error');
                      $(".submit-button").prop("disabled", true);
                  }
                  else {
                      $('#company_name').removeClass('text-error');
                      $('.submit-button').prop("disabled", false);
                  }
                }
            });

        });

        $("#email").on("focusout", function(e){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var email = $("input[name=email]").val();

            $.ajax({
                type:'POST',
                url:"{{ route('checkForEmailExist') }}",
                data:{email:email},
                success:function(data){
                    if(data == 0){
                        $('#email').addClass('text-error');

                        $(".submit-button").prop("disabled", true);
                    }
                    else {
                        $('.submit-button').prop("disabled", false);
                        $('#email').removeClass('text-error');
                    }
                }
            });
        });


        (function() {
            // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
            if (!String.prototype.trim) {
                (function() {
                    // Make sure we trim BOM and NBSP
                    var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                    String.prototype.trim = function() {
                        return this.replace(rtrim, '');
                    };
                })();
            }

            [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
                // in case the input is already filled..
                if( inputEl.value.trim() !== '' ) {
                    classie.add( inputEl.parentNode, 'input--filled' );
                }

                // events:
                inputEl.addEventListener( 'focus', onInputFocus );
                inputEl.addEventListener( 'blur', onInputBlur );
            } );

            function onInputFocus( ev ) {
                classie.add( ev.target.parentNode, 'input--filled' );
            }

            function onInputBlur( ev ) {
                if( ev.target.value.trim() === '' ) {
                    classie.remove( ev.target.parentNode, 'input--filled' );
                }
            }
        })();

        $(function () {
            $('input[name="datetimes"]').daterangepicker({
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'M/DD hh:mm A'
                }
            });
        });


    </script>

@endsection
