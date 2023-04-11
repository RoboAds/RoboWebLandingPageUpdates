@extends('index')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

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
            box-shadow: -7px -7px 20px 0px #fff9,
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

        #one_time_password {
            border: none;
            border-bottom: 3px solid #979797;
            border-radius: 0px;
            width: 38%;
            margin: auto;
            margin-top: 7pc;
            background: #e1e1e1;
            font-weight: 900;
            text-align: center;
            font-size: 24px;
        }

        *,
        *:after,
        *:before {
            --primary-color: #4f46e5;
        }

        /* Hide default radio style */
        .checkbox-input {
            opacity: 0;
            visibility: hidden;
            margin: 0;
        }

        /* Change icon, border and text color when radio is checked */
        .checkbox-input:checked + .checkbox-tile,
        .checkbox-input:checked + .checkbox-tile span {
            border-color: #4f46e5;
            color: #4f46e5;
        }

        /* Checkbox display */
        .checkbox-input:checked + .checkbox-tile::before {
            transform: scale(1);
            opacity: 1;
            background-color: #4f46e5;
            background-color: #4f46e5;
        }

        /* Checkbox icon and text */
        .checkbox-tile {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.2rem;
            width: 160px;
            height: 70px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: 0.1s ease;
            cursor: pointer;
            position: relative;
            margin: -20px 1px;
        }

        .checkbox-tile:hover {
            border-color: #999;
        }

        /* Checkmark (icon inside checker) */
        .checkbox-tile::before {
            content: "";
            position: absolute;
            display: block;
            width: 1rem;
            height: 1rem;
            background-color: #fff;
            border-radius: 50%;
            top: 0.25rem;
            left: 0.25rem;
            opacity: 0;
            transform: scale(0);
            transition: 0.25s ease;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='192' height='192' fill='%23FFFFFF' viewBox='0 0 256 256'%3E%3Crect width='256' height='256' fill='none'%3E%3C/rect%3E%3Cpolyline points='216 72.005 104 184 48 128.005' fill='none' stroke='%23FFFFFF' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'%3E%3C/polyline%3E%3C/svg%3E");
            border: 2px solid #4f46e5;
            background-size: 12px;
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }

        /* Not important */
        a {
            color: #4f46e5;
        }


        .example.example1 * {
            font-family: Roboto, Open Sans, Segoe UI, sans-serif;
            font-size: 16px;
            font-weight: 500;
        }

        .example.example1 fieldset {
            margin: 10px 15px 20px 20px;
            padding: 0;
            border-style: none;
            background-color: #7795f8;
            box-shadow: 0 6px 9px rgba(50, 50, 93, 0.06), 0 2px 5px rgba(0, 0, 0, 0.08),
            inset 0 1px 0 #829fff;
            border-radius: 4px;
        }

        .example.example1 .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            margin-left: 15px;
        }

        .example.example1 .row + .row {
            border-top: 1px solid #819efc;
        }

        .example.example1 label {
            width: 15%;
            min-width: 70px;
            padding: 11px 0;
            color: #c4f0ff;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .example.example1 input, .example.example1 button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
            border-style: none;
        }

        .example.example1 input:-webkit-autofill {
            -webkit-text-fill-color: #fce883;
            transition: background-color 100000000s;
            -webkit-animation: 1ms void-animation-out;
        }

        .example.example1 .StripeElement--webkit-autofill {
            background: transparent !important;
        }

        .example.example1 .StripeElement {
            width: 100%;
            padding: 11px 15px 11px 0;
        }

        .example.example1 input {
            width: 90%;
            padding: 11px 15px 11px 0;
            color: #fff;
            background-color: transparent;
            -webkit-animation: 1ms void-animation-out;
        }

        .example.example1 input::-webkit-input-placeholder {
            color: #87bbfd;
        }

        .example.example1 input::-moz-placeholder {
            color: #87bbfd;
        }

        .example.example1 input:-ms-input-placeholder {
            color: #87bbfd;
        }

        .example.example1 button {
            display: block;
            width: calc(100% - 30px);
            height: 40px;
            margin: 40px 15px 0;
            background-color: #f6a4eb;
            box-shadow: 0 6px 9px rgba(50, 50, 93, 0.06), 0 2px 5px rgba(0, 0, 0, 0.08),
            inset 0 1px 0 #ffb9f6;
            border-radius: 4px;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }

        #contact-form-second {
            display: none;
        }

        .example.example1 button:active {
            background-color: #d782d9;
            box-shadow: 0 6px 9px rgba(50, 50, 93, 0.06), 0 2px 5px rgba(0, 0, 0, 0.08),
            inset 0 1px 0 #e298d8;
        }

        .example.example1 .error svg .base {
            fill: #fff;
        }

        .example.example1 .error svg .glyph {
            fill: #6772e5;
        }

        .example.example1 .error .message {
            color: #fff;
        }

        .example.example1 .success .icon .border {
            stroke: #87bbfd;
        }

        .example.example1 .success .icon .checkmark {
            stroke: #fff;
        }

        .example.example1 .success .title {
            color: #fff;
        }

        .example.example1 .success .message {
            color: #9cdbff;
        }

        .example.example1 .success .reset path {
            fill: #fff;
        }

        .coupon-card {
            background: linear-gradient(135deg, #7158fe, #9d4de6);
            color: #fff;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.15);
            position: relative;
            width: 77%;

        }

        .coupon-card h3 {
            font-size: 16px;
            font-weight: 400;
            color: white;

        }

        .coupon-card p {
            font-size: 15px;

        }

        .coupon-row {
            display: flex;
            align-items: center;
            margin: 25px auto;
            width: fit-content;

        }

        #cpnCode {
            border: 1px solid whitesmoke;
            margin:6px;
            border-radius: 3px;

        }

        .circle1, .circle2 {
            background: #f0fff3;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);

        }

        .circle1 {
            left: -25px;
        }

        .circle2 {
            right: -25px;
        }

#cpnCode ::placeholder{
    color: rgba(255, 255, 255, 0.38);
}
.receive-quotation img{
    display: none;
}
    </style>

    <div class="d-flex" style="margin-top: 8pc;margin-bottom: 9pc">
        <div class="col-sm-8">


            <div class="container">
                <div class="card"  id="element-to-print">
                    <div class="card-header">
                        Invoice
                        <strong>{{\Carbon\Carbon::now()->format('d-m-Y : h:i:s')}}</strong>
                        <span class="float-right"> <strong>Status:</strong> Pending</span>

                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-sm-6">
                                <h6 class="mb-3">From:</h6>
                                <div>
                                    <strong>Dubai, UAE</strong>
                                </div>
                                <div>Business Bay</div>
                                <div>1312 , Metropolis Tower</div>
                                <div>Email: info@roboads.com</div>
                                <div>Phone: (+971) 563 426 662</div>
                            </div>

                            <div class="col-sm-6">
                                <h6 class="mb-3">To:</h6>
                                <div>
                                    <strong>Bob Mart</strong>
                                </div>
                                <div>Attn: Daniel Marek</div>
                                <div>43-190 Mikolow, Poland</div>
                                <div>Email: marek@daniel.com</div>
                                <div>Phone: +48 123 456 789</div>
                            </div>


                        </div>

                        <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>Robot Name</th>
                                    <th>Event Name</th>
                                    <th class="right">Unit Price</th>
                                    <th class="right">Quantity</th>
                                    <th class="center">Date Range</th>
                                    <th class="right">Total Price</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td class="center">*</td>
                                    <td class="left strong">{{$event->robot !=null ? $event->robot->robot_name : ''}}</td>
                                    <td class="left font-weight-bold">{{$event != null ? $event->event_name : ''}}</td>
                                    <td class="text-right" id="robotUnitPrice">
                                        AED {{$event->robot !=null ? $event->robot->robot_rental_price : ''}}</td>
                                    <input
                                        hidden type="text" id="robotUnitPriceHidden" value="{{$event->robot !=null ? $event->robot->robot_rental_price : ''}}">
                                    <td class="text-right">{{$event !=null ? $event->robot_number : ''}}</td>
                                    <td class="center">{{$event !=null ? $event->date_range : ''}}</td>
                                    <td class="text-right" id="robotTotalPrice">
                                        AED {{$event->robot !=null ? $event->robot->robot_rental_price : ''}}</td>
                                </tr>

                                @if($tele->telepresence !=null)
                                    <tr>
                                        <td class="center">*</td>
                                        <td class="left" colspan="5">Telepresence Charges</td>
                                        <td class="text-right">AED {{$tele->telepresence}}</td>
                                        <input
                                           hidden type="text" id="tp-charges" value="{{$tele->telepresence}}">
                                    </tr>
                                @endif
                                @if($tele->editing !=null)
                                    <tr>
                                        <td class="center">*</td>
                                        <td class="left" colspan="5">Editing Charges</td>
                                        <td class="text-right">AED {{$tele->editing}}</td>
                                        <input hidden type="text" id="editing-charges" value="{{$tele->editing}}">
                                    </tr>
                                @endif

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5">

                            </div>

                            <div class="col-lg-4 col-sm-5 ml-auto">
                                <table class="table table-clear">
                                    <tbody>
                                    <tr>
                                        <td class="left">
                                            <strong>Subtotal</strong>
                                        </td>
                                        <td class="text-right font-weight-bold">AED <span id="subtotal_amount">
                                                {{($tele->telepresence!=null ? $tele->telepresence : null) + ($tele->editing!=null ? $tele->editing : null) +($event->robot !=null ? $event->robot->robot_rental_price : null)}}
                                            </span></td>
                                    </tr>
                                    <tr class="text-success">
                                        <td class="left">
                                            <strong>Discount (<span id="discount_percent">0</span>%)</strong>
                                        </td>
                                        <td class="text-right"> AED <span id="discount_amount">0</span></td>
                                    </tr>
                               {{--     <tr>
                                        <td class="left">
                                            <strong>VAT (10%)</strong>
                                        </td>
                                        <td class="right">$679,76</td>
                                    </tr>--}}
                                    <tr>
                                        <td class="left">
                                            <strong>Total</strong>
                                        </td>
                                        <td class="text-right">
                                            <strong>AED <span id="main_total_amount">
                                                       {{($tele->telepresence!=null ? $tele->telepresence : null) + ($tele->editing!=null ? $tele->editing : null) +($event->robot !=null ? $event->robot->robot_rental_price : null)}}
                                                </span></strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
                <button class="btn btn-warning receive-quotation html2PdfConverter mt-2" style="float: right"  onclick="createPDF()">
                    <img style="height: 21px" src="https://faceaqses.s3.amazonaws.com/roboads_website/roboads_user_upload/loader.gif" alt="">
                    <i class="fa fa-paper-plane"
                       title="Receive Quotation"></i>
                    RECEIVE QUOTATION
                </button>
            </div>

        </div>
        <div class="col-sm-4 text-center">
            <div class="container">
                <div class="coupon-card m-auto">

                    <h3>Enter Coupon Code</h3>
                    <di class="coupon-row">
                        <span id="cpnCode"><input type="text" class="form-control bg-transparent border-0 text-white" placeholder="Coupon Code" id="discount_coupon"></span>
                        <button class="btn btn-outline-warning" id="cpnBtn">Redeem</button>
                    </di>
                    <p class="text-white"><span id="coupon_message">Paste your coupon here</span></p>
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 card">
                    @if (session()->has('error'))
                        <div class="text-danger font-italic">{{ session()->get('error') }}</div>
                    @endif
                    <form action="{{ route('stripe.post') }}" method="post" id="payment-form">
                        @csrf
                        <div class="row form-group d-none">
                            <div class="col-md-12 ">
                                <label for="name">Name</label>
                                @error('name')
                                <div class="text-danger font-italic">{{ $message }}</div>
                                @enderror
                                <input type="text" name="name" id="name" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->name }}" hidden>
                            </div>
                        </div>
                        <div class="row form-group d-none">
                            <div class="col-md-12">
                                <label for="email">Email</label>
                                @error('email')
                                <div class="text-danger font-italic">{{ $message }}</div>
                                @enderror
                                <input type="text" name="email" id="email" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" hidden>

                                <input type="text" name="payable_amount" hidden id="hidden_payable_amount" value="{{($tele->telepresence!=null ? $tele->telepresence : null) + ($tele->editing!=null ? $tele->editing : null) +($event->robot !=null ? $event->robot->robot_rental_price : null)}}" >
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label>Billing Amount in AED</label> <br>
                                <h2 class="text-muted">AED <span id="total_payable_amount">
                                        {{($tele->telepresence!=null ? $tele->telepresence : null) + ($tele->editing!=null ? $tele->editing : null) +($event->robot !=null ? $event->robot->robot_rental_price : null)}}
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label>Card Number</label>
                                <div id="paymentResponse" class="text-danger font-italic"></div>
                                <div id="card_number" class="field form-control"></div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-3">
                                <label>Expiry Date</label>
                                <div id="card_expiry" class="field form-control"></div>
                            </div>
                            <div class="col-md-3">
                                <label>CVC Code</label>
                                <div id="card_cvc" class="field form-control"></div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline custom-control custom-checkbox">
                                    <input type="checkbox" name="terms_conditions" id="terms_conditions" class="custom-control-input">
                                    <label for="terms_conditions" class="custom-control-label">
                                        I agree to terms & conditions
                                    </label>
                                </div>
                                @error('terms_conditions')
                                <div class="text-danger font-italic">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 small text-muted">
                                <div class="alert alert-warning">
                                    <strong>NOTE: </strong> All the payments are handled by <a target="_blank"
                                                                                               href="https://stripe.com">STRIPE</a>. We don't store any of your data.
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <div class="text-danger font-italic generic-errors"></div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <input type="submit" value="Pay via Stripe" class="btn btn-primary pay-via-stripe-btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>


    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Create an instance of the Stripe object
        // Set your publishable API key
        var stripe = Stripe('pk_test_51L8JQdF6VgkIEGDjoS44bRnhYjDZrBFZMqRwBauGwLhoHNDJfD5kXN27jA4xNPpGpJUsZ0ANSAkhPta9Uy9cgl5O00gPD0YjpE');
        console.log(stripe)

        // Create an instance of elements
        var elements = stripe.elements();

        var style = {
            base: {
                fontWeight: 400,
                fontFamily: '"DM Sans", Roboto, Open Sans, Segoe UI, sans-serif',
                fontSize: '16px',
                lineHeight: '1.4',
                color: '#1b1642',
                padding: '.75rem 1.25rem',
                '::placeholder': {
                    color: '#ccc',
                },
            },
            invalid: {
                color: '#dc3545',
            }
        };

        var cardElement = elements.create('cardNumber', {
            style: style
        });
        cardElement.mount('#card_number');

        var exp = elements.create('cardExpiry', {
            'style': style
        });
        exp.mount('#card_expiry');

        var cvc = elements.create('cardCvc', {
            'style': style
        });
        cvc.mount('#card_cvc');

        // Validate input of the card elements
        var resultContainer = document.getElementById('paymentResponse');
        cardElement.addEventListener('change', function (event) {
            if (event.error) {
                resultContainer.innerHTML = '<p>' + event.error.message + '</p>';
            } else {
                resultContainer.innerHTML = '';
            }
        });

        // Get payment form element
        var form = document.getElementById('payment-form');

        // Create a token when the form is submitted.
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            createToken();
        });

        // Create single-use token to charge the user
        function createToken() {
            stripe.createToken(cardElement).then(function (result) {
                if (result.error) {
                    // Inform the user if there was an error
                    resultContainer.innerHTML = '<p>' + result.error.message + '</p>';
                } else {
                    // Send the token to your server
                    stripeTokenHandler(result.token);
                }
            });
        }



        // Callback to handle the response from stripe
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }



        $('.pay-via-stripe-btn').on('click', function () {
            var payButton   = $(this);
            var name        = $('#name').val();
            var email       = $('#email').val();

            if (name == '' || name == 'undefined') {
                $('.generic-errors').html('Name field required.');
                return false;
            }
            if (email == '' || email == 'undefined') {
                $('.generic-errors').html('Email field required.');
                return false;
            }

            if(!$('#terms_conditions').prop('checked')){
                $('.generic-errors').html('The terms conditions must be accepted.');
                return false;
            }
        });

    </script>

    <script type="text/javascript">
        $('#cpnBtn').click(function (){
           var discount =  $('#discount_coupon').val();
            $.ajax({
                /* the route pointing to the post function */
                url: '{{route('rentRobot.couponRedeem')}}',
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {_token: '{{csrf_token()}}', discount:discount},
                dataType: 'JSON',
                /* remind that 'data' is the response of the AjaxController */
                success: function (response) {
                  if(response.status == 1){
                      var main = $('#subtotal_amount').text();
                      var disc = response.value.percent;

                      var dec = (disc / 100).toFixed(2); //its convert 10 into 0.10
                      var mult = main * dec; // gives the value for subtract from main value
                      var total_amount = main - mult;

                      $('#discount_percent').text(disc);
                      $('#discount_amount').text(mult);
                      $('#main_total_amount').text(total_amount);
                      $('#coupon_message').text(' Hurray !! Coupon applied successfully.');

                      $('#total_payable_amount').text(total_amount);

                     var payable_amount = $('#hidden_payable_amount').val(total_amount);

                  }
                  else {
                      $('#coupon_message').text(' Sorry !! Coupon not valid.');
                  }
                }
            });
        });


        $('.receive-quotation').click(function (){

            var robotPrice = $('#robotUnitPriceHidden').val();
                var tpCharges =$('#tp-charges').val();
                    var editingCharges = $('#editing-charges').val();
                        var discountPercent = $('#discount_percent').text()
                            var discountAmount = $('#discount_amount').text();
                                var totalPayableAmount = $('#main_total_amount').text();
                                 var robotId = '{{$event->robot->id}}';
            $('.receive-quotation').attr("disabled", true);
            $('.receive-quotation i').hide();
            $('.receive-quotation img').show();


            $.ajax({
                /* the route pointing to the post function */
                url: '{{route('createInvoicePost')}}',
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {_token: '{{csrf_token()}}', robotPrice:robotPrice,tpCharges:tpCharges,editingCharges:editingCharges,discountPercent:discountPercent,
                    discountAmount:discountAmount,totalPayableAmount:totalPayableAmount,robotId:robotId},
                dataType: 'JSON',
                /* remind that 'data' is the response of the AjaxController */
                success: function(data){
                    //The Ajax request was a success.
                    //Do something in here.
                },
                complete: function(){
                    //Ajax request is finished, so we can enable
                    //the button again.
                    $('.receive-quotation').attr("disabled", false);
                    $('.receive-quotation i').show();
                    $('.receive-quotation img').hide();
                }
            });
        })



    </script>
    <script src="https://cdn.bootcss.com/html2pdf.js/0.9.1/html2pdf.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300">
    <script>
        function createPDF() {
            var element = document.getElementById('element-to-print');
            html2pdf(element, {
                margin:1,
                padding:0,
                filename: 'Quotation for {{$event->robot->robot_name.'-'.\Carbon\Carbon::now()->format('d-M-Y-h:i:s')}}',
                image: { type: 'jpeg', quality: 1 },
                html2canvas: { scale: 2,  logging: true },
                jsPDF: { unit: 'in', format: 'A2', orientation: 'P' },
                class: createPDF
            });
        };
        // function exportHTML(){
        //     var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
        //             "xmlns:w='urn:schemas-microsoft-com:office:word' "+
        //             "xmlns='http://www.w3.org/TR/REC-html40'>"+
        //             "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
        //     var footer = "</body></html>";
        //     var sourceHTML = header+document.getElementById("element-to-print").innerHTML+footer;

        //     var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
        //     var fileDownload = document.createElement("a");
        //     document.body.appendChild(fileDownload);
        //     fileDownload.href = source;
        //     fileDownload.download = 'document.doc';
        //     fileDownload.click();
        //     document.body.removeChild(fileDownload);
        // }

    </script>


@endsection
