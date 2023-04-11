@extends('index')
@section('content')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"
            defer></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300">

    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/demo.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/set2.css')}}" />

    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <style>
        .body {
            background: #f3f3f2;
        }

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
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
            7px 7px 20px 0px rgba(0, 0, 0, .1),
            4px 4px 5px 0px rgba(0, 0, 0, .1);
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
            box-shadow: -7px -7px 20px 0px #fff9,
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

        tbody tr .in-range {
            background: #bfe1f5 !important;
        }

        tbody tr .end-date, tbody tr .start-date {
            background: #357ebd !important;
        }

        #selected_robot_rent {
            background: #cfffd0;
            font-weight: bold;
            border: 1px solid #5aff5a;
        }

        ::placeholder {
            color: #cccbcb !important;
        }

        .card-info span {
            float: right;
            color: #4384e9;
            font-weight: 600;
        }
        .input--chisato .notEmpty{
            color: #818181;
        }
        #datetimes {
            font-size: 23.2px !important;
        }
        .video-section video{
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            position: fixed;
            top: 70px;
            left: 0;

        }
        #contact-form-second{
            display: none;
        }
    </style>

    <div class="d-flex" >
        <div class="col-sm-8 video-section">
            <video class="col-input-form" style=""
                   src="http://localhost/RoboWeb/public/assets/video/video11.mp4" autoplay="" loop="" muted="">
            </video>
        </div>
        <div class="col-sm-4 "  style="margin-top: 9pc">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="d-flex text-center container" style="width: 45%">
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-dash text-primary"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-dash"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-dash"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-dash"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-dash"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-dash"></i>
                        </div>

                        <form action="{{ route('rentRobot.step.one.post') }}" method="POST">
                            @csrf

                            <div class="card border-0 p-0">
                                <div class="card-body p-0">

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
					   <span class="input input--chisato ">
                             <input type="text" name="robot_id" value="{{$robot->id}}" hidden>
                                        <input style="font-weight: bold;height: 71px" type="text" name=""
                                               value="{{$robot->robot_name}}" class="form-control" disabled
                                               readonly="readonly" id="selected_robot_rent">
                                        <i class="fa fa-check-circle text-success" style="  float: right;
                                               margin:-44px 6px"></i>
                       </span>

                   <span class="input input--chisato m-0">
					<input autocomplete="off" class="input__field input__field--chisato" type="text" id="event_name" required
                           name="event_name"/>
					<label class="input__label input__label--chisato" for="event_name">
						<span class="input__label-content input__label-content--chisato" data-content="Please Provide Event Name">Please Provide Event Name</span>
					</label>
				</span>
                   <span class="input input--chisato">
					<input autocomplete="off" class="input__field input__field--chisato" type="text" id="datetimes" name="datetimes"
                           required />
					<label class="input__label input__label--chisato" for="datetimes">
						<span class="input__label-content input__label-content--chisato" data-content="Please Select Dates">Please Select Dates</span>
					</label>
				</span>
                 <span class="input input--chisato m-0">
					<input autocomplete="off" class="input__field input__field--chisato" type="text"  id="number_of_robots"
                           name="number_of_robots"/>
					<label class="input__label input__label--chisato" for="number_of_robots">
						<span class="input__label-content input__label-content--chisato" data-content="Number Of Robots">Number Of Robots</span>
					</label>
				</span>
                                        <span class="input input--chisato">
					<input autocomplete="off" class="input__field input__field--chisato" type="text" id="venue" name="venue" />
					<label class="input__label input__label--chisato" for="venue">
						<span class="input__label-content input__label-content--chisato" data-content="Please provide location for Event">Please provide location for Event</span>
					</label>
				</span>
                                    </section>

                                </div>

                                <div class="card-footer text-right border-0">
                                    <button type="submit" class="btn btn-primary custom-btn btn-13"> Next <i
                                            class="fa fa-arrow-alt-circle-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="{{asset('js/classie.js')}}"></script>
    <script>

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

            function onInputBlur(ev) {
                if( ev.target.value.trim() === '' ) {
                    classie.remove( ev.target.parentNode, 'input--filled' );
                }
            }
        })();
        $(function ()
        {
             $('input[name="datetimes"]').daterangepicker({
             timePicker: true,
             startDate: moment().startOf('hour'),
             endDate: moment().startOf('hour').add(32, 'hour'),
             locale: {
                 format: 'DD/MMM hh:mm a',
             }
            });
            $('input[name="datetimes"]').val('');
            $('input[name="datetimes"]').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });
        });
    </script>

@endsection
