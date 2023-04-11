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

    </style>

    <div class="d-flex" style="margin-top: 7pc">
        <div class="col-sm-8">
            <video class="" style="width: 40%;box-shadow: none"
                   src="http://localhost/RoboWeb/public/assets/video/gitexGlobal.mp4" autoplay="" loop="" muted="">
            </video>
            </video>
        </div>
        <div class="col-sm-4 p-5">

            <div id="stepped">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-sm-12">
                            <div
                                class="indicators d-flex justify-content-around py-4 text-light">
                                <div
                                    class="rounded-circle bg-secondary px-2 shadow-sm mr-2">
                                    1
                                </div>
                                <div
                                    class="rounded-circle bg-secondary px-2 shadow-sm mr-2">
                                    2
                                </div>
                                <div
                                    class="rounded-circle bg-secondary px-2 shadow-sm mr-2">
                                    3
                                </div>
                                <div
                                    class="rounded-circle bg-secondary px-2 shadow-sm mr-2">
                                    4
                                </div>
                                <div
                                    class="rounded-circle bg-secondary px-2 shadow-sm mr-2">
                                    5
                                </div>
                                <div
                                    class="rounded-circle bg-secondary px-2 shadow-sm">
                                    6
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="fix-height position-relative">
                                <div class="steps">
                                    <h4 style="margin: -156px -3px -1px -6px;
                                      position: absolute;text-align: center;color: #00368d">
                                        Please provide the following information
                                        to learn more about your event.
                                    </h4>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="event_name">Event Name
                                                </label>
                                                <input type="text" id="event_name"
                                                       class="form-control"
                                                       placeholder="Event Name">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="datetimes">Date
                                                    Range</label>
                                                <input type="text"
                                                       id="datetimes"
                                                       name="datetimes"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="robot_number">Number of
                                                    robots</label>
                                                <input type="number" id="robot_number"
                                                       value="1"
                                                       name="number_of_robots"
                                                       class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label
                                                    for="venue">Venue</label>
                                                <input type="email" id="venue"
                                                       class="form-control"
                                                       placeholder="Venue">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="steps">
                                    <h4 style="margin: -156px -3px -1px -6px;
                                      position: absolute;text-align: center;color: #00368d">
                                        Please provide contact information
                                    </h4>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="company_name">Company Name
                                                </label>
                                                <input type="text" id="company_name"
                                                       class="form-control"
                                                       placeholder="Company Name">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="contact_person">Contact Person</label>
                                                <input type="text" id="contact_person"
                                                       placeholder="Contact Person"
                                                       name="contact_person"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label
                                                    for="contact_number">Contact Number</label>
                                                <input type="text" id="contact_number"
                                                       class="form-control"
                                                       placeholder="Contact Number">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label
                                                    for="email_address">Email</label>
                                                <input type="email" id="email_address"
                                                       class="form-control"
                                                       placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="steps">
                                    <h4 style="margin: -156px -3px -1px -6px;
                                      position: absolute;text-align: center;color: #00368d">
                                        Verify your Email Address <span id="verifyYourEmail"></span>
                                    </h4>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-12" style="padding: 113px">
                                            <div class="form-group">
                                                <label for="otp">Enter OTP share on your Email
                                                </label>
                                                <input type="number" id="otp"
                                                       class="form-control"
                                                       placeholder="OTP">

                                            </div>
                                            <p class="text-danger">Note: Please enter correct OTP. For security reasons
                                                form will reset if OTP is incorrect.</p>
                                            <div class="row"><a href="https://gmail.com" target="_blank"
                                                                class="pull-right btn btn-sm bg-transparent text-dark"><img
                                                        style="height: 22px"
                                                        src="{{asset('assets/images/gmail.png')}}"
                                                        alt=""> Open gmail</a>
                                                <a href="https://outlook.live.com" target="_blank"
                                                   class="btn btn-sm pull-right bg-transparent text-dark"><img
                                                        style="height: 22px"
                                                        src="{{asset('assets/images/outlook.png')}}"
                                                        alt=""> Open Outlook</a></div>

                                            <span style="position: absolute; margin:4pc 6pc 0 -2pc; font-size: 14px; color: #0c4eb3; font-weight: bold;
}">Haven't seen the email? Check your spam folder, <button
                                                    class="btn btn-sm bg-transparent text-dark">resend</button></span>
                                        </div>

                                    </div>
                                </div>

                                <div class="steps text-center">
                                    <h3 style="color: #0c45ab">Add on</h3>
                                    <h4 style="font-weight: 500">Video
                                        Editing</h4>
                                    <p style=" margin: -4px 3px;   font-weight: 600;
                                                                           font-size: 13px;">Roboads Experts will edit
                                        your videos to perfectly fit the screens</p>
                                    <b>1000 AED</b>
                                    <br>
                                    <button class="btn btn-sm" style="background: #142dab;color: white">Add</button>
                                    <br><br>

                                    <h4 style="font-weight: 500">
                                        Telepresence</h4>
                                    <p style="  margin: -4px 3px;  font-weight: 600;
                                                                              font-size: 13px;">Talk remotely to your
                                        clients, and provide a better customer service while reducing the cost.</p>
                                    <b>1000 AED</b>
                                    <br>
                                    <button class="btn btn-sm " style="background: #142dab;color: white">Add</button>

                                </div>

                                <script>
                                    Dropzone.options.myAwesomeDropzone = { // The camelized version of the ID of the form element
                                        // The configuration we've talked about above
                                        autoProcessQueue: false,
                                        uploadMultiple: true,
                                        parallelUploads: 100,
                                        maxFiles: 100,

                                        // The setting up of the dropzone
                                        init: function () {
                                            var myDropzone = this;

                                            // First change the button to actually tell Dropzone to process the queue.
                                            this.element.querySelector("button[type=submit]").addEventListener("click", function (e) {
                                                // Make sure that the form isn't actually being sent.
                                                e.preventDefault();
                                                e.stopPropagation();
                                                myDropzone.processQueue();
                                            });

                                            // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
                                            // of the sending event because uploadMultiple is set to true.
                                            this.on("sendingmultiple", function (files) {
                                                console.log(files)
                                                // Gets triggered when the form is actually being sent.
                                                // Hide the success button or the complete form.
                                            });
                                            this.on("successmultiple", function (files, response) {
                                                // Gets triggered when the files have successfully been sent.
                                                // Redirect user or notify of success.
                                            });
                                            this.on("errormultiple", function (files, response) {
                                                // Gets triggered when there was an error sending the files.
                                                // Maybe show form again, and notify user of error
                                            });
                                        }

                                    }
                                </script>
                                <div class="steps">
                                    <div class="form-group">
                                        <form action="/file-upload" id="my-awesome-dropzone" class="dropzone">
                                            <div class="dropzone-previews"></div>
                                            <!-- this is were the previews should be shown. -->
                                        </form>

                                    </div>
                                </div>

                                <div class="steps">
                                    <div class="form-group">
                                        <span>Test one</span>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 text-right next-button">
                            <button type="button"
                                    class="btnPrev btn btn-outline-success">Prev
                            </button>
                            <button type="button"
                                    class="btnNext btn btn-outline-success">Next
                            </button>
                        </div>
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
    <script>


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

        document.addEventListener("DOMContentLoaded", () => {
            class MultiStep {
                constructor(formId) {
                    let myForm = document.querySelector(formId),
                        steps = myForm.querySelectorAll(".steps"),
                        btnPrev = myForm.querySelector(".btnPrev"),
                        btnNext = myForm.querySelector(".btnNext"),
                        indicators = myForm.querySelectorAll(".rounded-circle"),
                        inputClasses = ".form-control",
                        currentTab = 0;

                    // we'll need 4 different functions to do this
                    showTab(currentTab);

                    function showTab(n) {

                        if (n == 2) {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            var email = $('#email_address').val();
                            $.ajax({
                                type: "POST",
                                url: "{{route('sendOtp')}}", //Go to web.php file
                                data: {email: email},
                                success: function (response) {
                                    if (response == 1) {

                                        steps[n].classList.add("active");
                                        if (n == 0) {
                                            btnPrev.classList.add("hidden");
                                            btnPrev.classList.remove("show");
                                        } else {
                                            btnPrev.classList.add("show");
                                            btnPrev.classList.remove("hidden");
                                        }
                                        if (n == steps.length - 1) {
                                            btnNext.textContent = "Submit";
                                        } else {
                                            btnNext.textContent = "Next";
                                        }
                                        showIndicators(n);
                                    } else {
                                        alert('Wow !!! You are already registered with us, Login first.')
                                        window.location.href = "{{route('login')}}";
                                    }
                                }
                            });
                        }
                        if (n == 3) {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            var otp = $('#otp').val();
                            var email = $('#email_address').val();
                            var company_name = $('#company_name').val();
                            var contact_number = $('#contact_number').val();
                            var venue = $('#venue').val();
                            var contact_person = $('#robot_number').val();
                            var date_range = $('#datetimes').val();
                            $.ajax({
                                type: "POST",
                                url: "{{route('verifyOtp')}}", //Go to web.php file
                                data: {
                                    otp: otp,
                                    email: email,
                                    venue: venue,
                                    contact_person: contact_person,
                                    contact_number: contact_number,
                                    date_range: date_range,
                                    company_name: company_name
                                },
                                success: function (response) {
                                    if (response == 1) {



                                        steps[n].classList.add("active");
                                        if (n == 0) {
                                            btnPrev.classList.add("hidden");
                                            btnPrev.classList.remove("show");
                                        } else {
                                            btnPrev.classList.add("show");
                                            btnPrev.classList.remove("hidden");
                                        }
                                        if (n == steps.length - 1) {
                                            btnNext.textContent = "Submit";
                                        } else {
                                            btnNext.textContent = "Next";
                                        }
                                        showIndicators(n);
                                    } else {
                                        alert('Sorry !!! Invalid OTP. Please fill form again.')
                                        location.reload();
                                    }
                                }
                            });
                        } else {

                            steps[n].classList.add("active");
                            if (n == 0) {
                                btnPrev.classList.add("hidden");
                                btnPrev.classList.remove("show");
                            } else {
                                btnPrev.classList.add("show");
                                btnPrev.classList.remove("hidden");
                            }
                            if (n == steps.length - 1) {
                                btnNext.textContent = "Submit";
                            } else {
                                btnNext.textContent = "Next";
                            }
                            showIndicators(n);
                        }
                    }

                    function showIndicators(n) {

                        for (let i = 0; i < indicators.length; i++) {
                            indicators[i].classList.replace("bg-warning", "bg-success");
                        }
                        indicators[n].className += " bg-warning";
                    }

                    function clickerBtn(n) {
                        if (n == 1 && !validateForm()) return false;
                        steps[currentTab].classList.remove("active");
                        currentTab = currentTab + n;
                        if (currentTab >= steps.length) {
                            myForm.submit();
                            return false;
                        }
                        showTab(currentTab);
                    }

// Do whatever validation you want
                    function validateForm() {
                        let input = steps[currentTab].querySelectorAll(inputClasses),
                            valid = true
                        console.log(input.length);
                        for (let i = 0; i < input.length; i++) {

                            if (input[i].value == "") {
                                if (!input[i].classList.contains("invalid")) {
                                    input[i].classList.add("invalid");
                                }
                                valid = false;
                            }
                            if (!input[i].value == "") {
                                console.log(input[i].value)
                                if (input[i].classList.contains("invalid")) {
                                    input[i].classList.remove("invalid");
                                }
                            }
                        }
                        return valid;
                    }

                    btnPrev.addEventListener("click", () => {
                        clickerBtn(-1);
                    });
                    btnNext.addEventListener("click", () => {
                        clickerBtn(1);
                    });
                }
            }

            let MS = new MultiStep("#stepped");
        });

    </script>
    <script>
        /*     $('.navbar-nav li .nav-link.active').removeClass('active');
             $('.navbar-nav li #gallary').addClass('active');
     */
    </script>
@endsection
