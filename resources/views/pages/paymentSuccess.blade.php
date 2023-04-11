@extends('index')
@section('content')
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
    </style>
    <div class="container" style="margin-top:5%;">
       <div class="card">
           <h3>Payment received successfully!!!</h3>
       {{--    <img  style="width: 39%" src="https://faceaqses.s3.amazonaws.com/roboads_website/roboads_user_upload/checksuccess.gif" alt="">--}}

         <h1 class="text-center">{{$charge->currency}} <span class="price-format-input">{{$charge->amount}}</span></h1>

           <script>
               let val = $('.price-format-input').text();
               val = val.replace(/,/g, "");
               if (val.length > 3) {
                   let noCommas = Math.ceil(val.length / 3) - 1;
                   let remain = val.length - (noCommas * 3);
                   let newVal = [];
                   for (let i = 0; i < noCommas; i++) {
                       newVal.unshift(val.substr(val.length - (i * 3) - 3, 3));
                   }
                   newVal.unshift(val.substr(0, remain));
                   this.value = newVal;
               }
               else {
                   this.value = val;
               }
           </script>
       </div>
    </div>

    <!-- end of lightbox -->
    <!-- end of project lightboxes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@endsection
