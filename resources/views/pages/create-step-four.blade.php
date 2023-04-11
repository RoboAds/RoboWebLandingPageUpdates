@extends('index')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js" ></script>
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
        .card .card-title h6{
            font-weight: 800 !important;
            color: #287cff;
            font-size: 20px;
        }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,800;1,200&family=Roboto:wght@100&display=swap" rel="stylesheet">

    <div class="d-flex" >
        <div class="col-sm-8 video-section">
            <video class="col-input-form" style=""
                   src="http://localhost/RoboWeb/public/assets/video/video11.mp4" autoplay="" loop="" muted="">
            </video>
        </div>
        <div class="col-sm-4 " style="margin-top: 18pc">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">

                        <div class="d-flex text-center container" style="width: 45%">
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus text-primary"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus text-primary"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus text-primary"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus text-primary"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus"></i>
                            <i style="z-index: 11" class="fa m-auto fa-solid fa-minus"></i>
                        </div>

                        <div class="card" style="z-index: 111;margin-top: 30px">
                            <div class="card-header">
                                <div class="card-title">
                                    <h6 class="font-weight-light mt-2">Upload medias here : </h6>
                                </div>
                            </div>
                            @php
                                $time_id = 'rand-'.time();
                            @endphp
                            <div class="card-body">
                                <form action="{{ route('rentRobot.medias_upload.post') }}" method="post" style="    box-shadow: 1px 1px 23px -4px inset;
    border-radius: 8px;
    border: none;
    background: #e5eaff;"
                                      enctype="multipart/form-data" id="image-upload" class="dropzone">
                                    @csrf

                                    <input type="text" id="media_unique_playlist_id"
                                           name="media_unique_playlist_id" value="{{$time_id}}" hidden>
                                    <input type="text" id=""
                                           name="event_id" value="{{$event->id}}" hidden>
                                    <div class="container-fluid our-services" style="">
                                        <div class="row media_container-upload">
                                        </div>
                                    </div>
                                    <!--                                            <span class="text-success pull-right"></span>-->
                                    <div style="    position: absolute; cursor: inherit; left: 47%; top: 35%;"
                                         class="fa fa-upload"></div>
                                    @csrf
                                </form>


                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="" class="btn btn-danger pull-right custom-btn btn-16"><i
                                                class="fa fa-arrow-alt-circle-left"></i> Previous</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <form action="{{route('rentRobot.step.four.post')}}" method="post">
                                            @csrf
                                            <input type="text" name="time_id" value="{{$time_id}}" hidden>
                                            <input type="text" name="auth_id"
                                                   value="{{\Illuminate\Support\Facades\Auth::id()}}" hidden>
                                            <input type="text" name="event_id"
                                                   value="{{$event->id}}" hidden>
                                            <button type="submit" class="btn btn-primary custom-btn btn-13 next-submit-button" style="display: none" disabled>
                                                Next <i class="fa fa-arrow-alt-circle-right"></i></button>
                                            <button id="submit" disabled style="" class="btn btn-whit bg-transparent p-2 custom-btn btn-13 text-white upload-submit-button"><i class="fa fa-upload text-white "></i> Upload
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end of lightbox -->
    <!-- end of project lightboxes -->

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300">
    <script>
        var drop = Dropzone.options.imageUpload = {
            // Prevents Dropzone from uploading dropped files immediately
            autoProcessQueue: false,
            dictDefaultMessage: "Drag and drop videos. Click upload to send.",
            parallelUploads: 10,
            acceptedFiles: ".MOV,.mp4",
            paramName: "file",
            maxFilesize: 501,
            addRemoveLinks: true,

            /*      this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                      e.preventDefault();
                      e.stopPropagation();
                      myDropzone.processQueue();
                  });*/

            init: function () {
                var submitButton = document.querySelector("#submit")
                myDropzone = this; // closure

                submitButton.addEventListener("click", function (file) {
                    myDropzone.processQueue(); // Tell Dropzone to process all queued files.
                    $('#submit').attr('disabled', 'disabled');
                    $('.dz-progress').show()
                });
                $(".refresh-dropzone-content").click(function () {
                        myDropzone.removeAllFiles();
                        var value = $('#media_unique_playlist_id').val();
                        deleteFileswithUploadId(value);

                        function deleteFileswithUploadId(value) { //this is call function for 'page-index/member_management'
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $('.delete-message').html('<i class="fa fa-spinner fa-spin text-white"></i>')
                            $(".delete-message").show();

                        }

                    }
                );


                // You might want to show the submit button only when
                // files are dropped here:
                this.on("addedfile", function (event) {
                    $('.selected_media_count').html(this.files.length)
                    console.log(this.files.length)
                    $('.dz-progress').hide();
                    // Show submit button here and/or inform user to click it.
                    $('.dz-remove').html('<button class="btn btn-sm border-0 bg-transparent"><i class="fa fa-trash text-danger"></i></button>')
                    $('.dz-processing >.dz-remove').html('<button class="btn btn-sm border-0 bg-transparent"><i class="fa fa-paper-plane text-success"></i></button>')
                    $('.dz-complete >.dz-remove').html('<button class="btn btn-sm border-0 bg-transparent"><i class="fa fa-check text-success"></i></button>')
                    $('#submit').removeAttr('disabled');

                    $('.add-arrow-image').html('<img src="{{asset('assets/img/upload-arrow.gif')}}">')
                    $('#submit').addClass('animation');
                    setTimeout(function () {
                        $('#submit').removeClass('animation');
                        $('.add-arrow-image').hide();
                    }, 5000);
                    $('.next-submit-button').attr('disabled', true);
                    $('.next-submit-button').hide(100);
                    $('.upload-submit-button').removeAttr("disabled");
                    $('.upload-submit-button').show(100);


                });

                this.on("queuecomplete", function (file) {
                    console.log(file)
                    var value = $('#media_unique_playlist_id').val();
                    if (value !== null) {
                        console.log(value)
                        $('#add_create_playlist').html('<a class="btn btn-sm " id="add_create_playlist_btn" href="medias/create-playlist/' + value + '"><i class="fa fa-plus"></i> Create Playlist</a>');
                        $('.saveandrefresh').html('<button type="button" id="save_and_refresh_btn" onclick="save_and_refresh_btn()" class="btn  btn-sm refresh-datatable" data-dismiss="modal"><i class="fa fa-download"></i> Save & Refresh </button>');
                        /* $('#submit').removeAttr('disabled');*/

                        getFileswithUploadId(value);

                        $('.next-submit-button').removeAttr("disabled");
                        $('.next-submit-button').show(100);
                        $('.upload-submit-button').attr("disabled",true);
                        $('.upload-submit-button').hide(100);

                        function getFileswithUploadId(value) { //this is call function for 'page-index/member_management'
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });

                        }

                    }
                });

            },
            success: function (file, response) {
                if (response.status == 1) {

                    $('.uploaded_media_count').html(response.uploaded_media_count);
                    $('.dz-complete > .dz-remove').html('<button class="btn btn-sm border-0 bg-transparent"><i class="fa fa-check text-success"></i></button>')
                } else {
                    console.log(response.message)
                    $('.dz-complete > .dz-remove').html('<button class="btn btn-sm border-0 bg-transparent"><i class="fa fa-times text-danger"></i></button>')
                }

            }

        };

        $('#upload_form').on('submit', function (event) {
            event.preventDefault();
            var filename = $('input[type=file]')[0].files.length ? $('input[type=file]')[0].files[0].name : "";
            var file = $('#files')[0].files[0];
            var reader = new FileReader();
            var fileType = file.type;
            var myData = new FormData(this);
            console.log("type", fileType);

            reader.addEventListener("load", function () {
                var dataUrl = reader.result;
                var videoId = "videoMain";
                var $videoEl = $('<video id="' + videoId + '"></video>');

                $videoEl.attr('src', dataUrl);

                var videoTagRef = $videoEl[0];
                videoTagRef.addEventListener('loadedmetadata', function (e) {
                    console.log(videoTagRef.videoWidth, videoTagRef.videoHeight);

                    uploadVideoHeight = videoTagRef.videoHeight;
                    uploadVideoWidth = videoTagRef.videoWidth;

                    if (calculate_ratio(uploadVideoHeight, uploadVideoWidth) !== 1) {
                        $('#note2').append('Your aspect ratio is not as per requirement. Your file aspect ratio is ' + calculate_ratio(uploadVideoHeight, uploadVideoWidth) + ' and we require 9:16 *').fadeOut(10000);
                    } else {

                        $.ajax({
                            url: "{{ route('rentRobot.step.four.post') }}",
                            method: "POST",
                            data: myData,
                            dataType: 'JSON',
                            contentType: false,
                            cache: false,
                            processData: false,
                            beforeSend: function () {
                                document.getElementById("progress_div").style.display = "block";
                                $("#file_uploaded").hide();

                            },
                            /*   uploadProgress: function(event, position, total, percentComplete) {
                                   var percentVal = percentComplete + '%';
                                   bar.width(percentVal)
                                   percent.html(percentVal);
                               },*/
                            success: function (file, resp) {
                                console.log('data' + resp)
                                document.getElementById("progress_div").style.display = "none";
                            },

                            complete: function (xhr) {
                                table.draw();
                                $("#progress_div").hide();
                                $("#file_uploaded").show().delay(5000).fadeOut();
                                $('#createMedia').modal('hide')
                            }
                        })
                    }
                });

            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        });
    </script>

@endsection
