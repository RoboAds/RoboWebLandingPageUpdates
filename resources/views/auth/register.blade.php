@extends('layouts.app')

@section('content')

    {{
    dd('Un-authorized')
}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .main-container {
            padding: 8pc !important;
            margin-top: 7pc;
        }

        .square {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 15px;
            animation: square 10s linear infinite;
            animation-delay: calc(-1s * var(--i));
        }

        @keyframes square {
            0%, 100% {
                transform: translateY(-20px);
            }

            50% {
                transform: translateY(20px);
            }
        }

        .square:nth-child(1) {
            width: 100px;
            height: 100px;
            background: linear-gradient(45deg, rgba(154, 236, 255, 0.76), rgba(255, 255, 255, 0.75));
            border: none;
            right: 40px;

        }

        .square:nth-child(2) {
            width: 150px;
            height: 150px;
            background: linear-gradient(45deg, #a9ffc8, white);
            z-index: 2;
            right: 20px;
            top: 147px;
            border: none;
        }

        .square:nth-child(3) {
            width: 88px;
            height: 88px;
            background: rgb(65 253 175 / 71%);
            z-index: 2;
            right: 3px;
            top: 201px;
        }

        .square:nth-child(4) {
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, #f1099f3d, #d0ffdaf7);
            top: 127px;
            z-index: 22;
            border: none;

        }

        .square:nth-child(5) {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, rgba(134, 238, 255, 0.53), rgba(255, 228, 168, 0.71));
            z-index: 3;
            border: none;
        }


        .square:nth-child(6) {
            width: 85px;
            height: 85px;
            background: rgba(138, 236, 255, 0.84);
            z-index: 2;
            right: 40px;
        }

        .square:nth-child(7) {
            width: 85px;
            height: 85px;
            background: rgba(138, 236, 255, 0.86);
            z-index: 2;

        }

        .square:nth-child(8) {
            width: 85px;
            height: 85px;
            background: rgba(255, 239, 193, 0.89);
            top: 162px;
            z-index: 2;

        }

        .square:nth-child(9) {
            width: 119px;
            height: 119px;
            background: linear-gradient(45deg, rgba(255, 175, 91, 0.82), rgba(255, 255, 255, 0.85));
            z-index: 2;
            top: 183px;
            left: -54px;
            border: none;
        }

        .navbar {
            background: #266deb !important;
        }

        .navbar a, .navbar button {
            color: white !important;
            float: right;
        }


        @keyframes slay-3 {
            0% {
                transform: rotate(0deg);
            }

            50% {
                transform: rotate(-5deg);
            }

            100% {
                transform: rotate(0);
            }
        }



        input:focus, input:hover {
            box-shadow: none !important;
            outline: none !important;
            border-bottom: 2px solid #1e91e5 !important;
            transition-duration: .2s;
        }

        form label {
            color: #ffffff;
        }

        body {
            height: 100vh;
        }

        button {
            position: relative;
            width: 130px;
            height: 35px;
            border-radius: 30px;
            background-color: white;
            border: 1px #00acee solid;
            overflow: hidden;
        }

        .text1 {
            font-size: 17px;
            font-weight: 700;
            margin-left: 22%;
            color: #38acff;
        }

        .text2 {
            position: absolute;
            top: 17%;
            left: -63px;
            font-weight: 700;
            font-size: 14px;
            color: white;
        }

        .icon {
            position: absolute;
            top: 0;
            left: 0;
            transition: transform 0.5s;
        }

        .icon::before {
            position: absolute;
            left: -100px;
            top: 0;
            z-index: -1;
            content: '';
            width: 130px;
            height: 33px;
            border-radius: 30px;
            background-color: #00acee;
        }

        button:hover .icon {
            transform: translateX(100px);
            transition: transform 0.5s;

        }

        button:hover .text2 {
            transform: translateX(100px);
            transition: transform 0.6s;
        }

        button:active {
            transform: scale(1.03);
        }
        .fa-key{
            background: #07aeee;
            padding: 10px;
            border-radius: 27px;
            color: white;
            margin: 0px 0px -2px -1px;
        }
        body{
            background-image: url("assets/images/login-images/8.jpg");
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100%;

        }


        .card {
            backdrop-filter: blur(10px);
            background: linear-gradient(45deg, #4c4c4878, #a28273);
        }
        input {
            border: none !important;
            border-radius: 0 !important;
            border-bottom: 2px solid #2ecdff !important;
            background: transparent !important;
            color: white !important;
        }
        input:active{
            background: transparent;
        }
    </style>
<div class="container main-container">

    <div class="col-12 bg-danger h-100">
        <div class="square" style="--i:0;"></div>
        <div class="square" style="--i:1;"></div>
        <div class="square" style="--i:2;"></div>
        <div class="square" style="--i:3;"></div>
        <div class="square" style="--i:4;"></div>
        <div class="square" style="--i:5;"></div>
        <div class="square" style="--i:6;"></div>
        <div class="square" style="--i:7;"></div>
        <div class="square" style="--i:8;"></div>

    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white"> <i class="fa fa-user"></i> {{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" placeholder="Enter Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Enter Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Enter Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Please confirm password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="pull-right">
                                        <span class="icon">

                                            <i class="fa fa-key"></i>

                                        </span>
                                    <span class="text1">Register</span>
                                    <span class="text2">Let's Go</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
