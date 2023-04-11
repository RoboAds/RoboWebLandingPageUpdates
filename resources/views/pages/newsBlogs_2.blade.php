@extends('index')
@section('description', 'New Breed Of Service Robots with 55inch digital signage screens in 4K resolution')
@section('keywords', 'Robot rental, One of the best mobile advertising robots, Robot on rent, Rent mr robot, The company advertising ')
@section('content')
    @include('layouts.newBlogs_2_header')

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


        /* about us section */

        .section-header {
            justify-content: center;
            display: flex;
            align-items: center;
            background-color: var(--glaucous);
        }

        .section-container {
            display: grid;
            grid-template-columns: 0.05fr repeat(2, 1fr) 0.05fr;
            /* grid-template-rows: minmax(221px, 1fr) minmax(168px, 1fr) minmax(221px, 1fr) minmax(168px, 1fr) minmax(221px, 1fr); */
            grid-auto-rows: min-content;
            grid-column-gap: 5px;
            grid-row-gap: 20px;
            margin: 1rem 0;
            /* border: var(--dark-slate-blue) solid 3px; */
        }

        .history {
            grid-area: 1 / 2 / 2 / 3;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            padding-top: 1rem;
        }


        .content-sub-title {
            font-family: Rockwell, sans-serif;
            font-style: normal;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .content {
            font-family: Rockwell, sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 1rem;
            margin-top: 1.2vw;
        }

        .content-image {
            justify-self: center;
            align-self: center;
            height: 320px;
            width: auto;
        }

        .history-image {
            grid-area: 1 / 3 / 2 / 4;
        }

        .aims {
            grid-area: 2 / 2 / 3 / 4;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            /* border: var(--dark-slate-blue) solid 3px; */
        }

        .quality {
            grid-area: 3 / 3 / 4 / 4;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            padding-top: 1rem;
        }

        .quality-image {
            grid-area: 3 / 2 / 4 / 3;
        }
        .newsandBlogs h2,.newsandBlogs .card-title,.newsandBlogs p{
            color: black;
        }
        .active-blogs{
            color: #14bf98 !important;
        }
    </style>


    <div class="container newsandBlogs">
        <div class="row mb-2 p-3">
            <h2 class="text-center mt-4 mb-2">News And Blogs</h2>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-block">
                            <h5 class="card-title">How can RoboAds mobile robots boost exposure during an
                                exhibition </h5>
                            <p class="card-text">Robots are increasingly being used in exhibitions as a way to boost
                                exposure and engage visitors. Here are a few reasons why robots can be a valuable
                                addition to an exhibition: </p>
                            <p><b>Attraction</b>: Robots are eye-catching and can draw a crowd, especially when they are
                                performing tasks or moving around. This can be particularly useful in a crowded
                                exhibition hall where you want to stand out from the competition. </p>
                            <p>
                                <b>Education</b>: Robots can be used to demonstrate complex concepts or processes in a
                                way that is accessible and engaging for visitors. They can also be programmed to answer
                                questions and provide information about your products or services.
                            </p>
                            <p>
                                <b>Interactivity</b>: Robots can be programmed to interact with visitors in a variety of
                                ways, such as through voice or touch. This can help to create a more immersive and
                                memorable experience for visitors.
                            </p>
                            <p><b>Personalization</b>: Robots can be programmed to recognize individual visitors and
                                offer personalized recommendations or information based on their interests or
                                preferences. This can help to create a more tailored and engaging experience for each
                                visitor</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-block">
                            <div id="featured" class="carousel slide carousel" data-ride="carousel">
                                <!--dots navigate-->
                                <ol class="carousel-indicators top-indicator">
                                    <li data-target="#featured" data-slide-to="0" class="active"></li>
                                    <li data-target="#featured" data-slide-to="1"></li>
                                    <li data-target="#featured" data-slide-to="2"></li>
                                    <li data-target="#featured" data-slide-to="3"></li>
                                </ol>

                                <!--carousel inner-->
                                <div class="carousel-inner">
                                    <!--Item slider-->
                                    <div class="carousel-item active">
                                        <div class="card border-0 rounded-0 text-light overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_left-cover-1 image-wrapper">
                                                    <a href="#">
                                                        <img class="img-fluid w-100"
                                                             src="https://faceaqses.s3.amazonaws.com/roboweb_videos/public-interaction1-min.png"
                                                             alt="no File">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!--title-->
                                                    <a href="#">
                                                        <h2 class="h3 post-title text-white my-1"> World's first
                                                            Advertising robot.</h2>
                                                    </a>
                                                    <!-- meta title -->
                                                    <div class="news-meta">
                                                    <span class="news-author">at <a class="text-white font-weight-bold"
                                                                                    href="https://roboads.com/">AIBC SUMMIT</a></span>
                                                        <span class="news-date">2021</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Item slider-->
                                    <div class="carousel-item">
                                        <div class="card border-0 rounded-0 text-light overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_left-cover-1 image-wrapper">
                                                    <a href="#">
                                                        <img class="img-fluid w-100"
                                                             src="https://faceaqses.s3.amazonaws.com/roboads_website/leap2.PNG"
                                                             alt="Bootstrap news theme">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!--title-->
                                                    <a href="https://roboads.com/">
                                                        <h2 class="h3 post-title text-white my-1">Future Innovations
                                                            Summit
                                                            2021</h2>
                                                    </a>
                                                    <!-- meta title -->
                                                    <div class="news-meta">
                                                    <span class="news-author"> at <a class="text-white font-weight-bold"
                                                                                     href=https://roboads.com/">Future Innovations Summit</a></span>
                                                        <span class="news-date">2021</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Item slider-->
                                    <div class="carousel-item">
                                        <div class="card border-0 rounded-0 text-light overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_left-cover-1 image-wrapper">
                                                    <a href="#">
                                                        <img class="img-fluid w-100"
                                                             src="https://faceaqses.s3.amazonaws.com/roboads_website/leap3.PNG"
                                                             alt="Roboads.com">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!--title-->
                                                    <a href="https://roboads.com/">
                                                        <h2 class="h3 post-title text-white my-1">RA-200 - World's first
                                                            Advertising robot.</h2>
                                                    </a>
                                                    <!-- meta title -->
                                                    <div class="news-meta">
                                                    <span class="news-author">by <a class="text-white font-weight-bold"
                                                                                    href="https://roboads.com/">Future Innovations Summit (FIS) Dubai</a></span>
                                                        <span class="news-date"> 2021</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Item slider-->
                                    <div class="carousel-item">
                                        <div class="card border-0 rounded-0 text-light overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_left-cover-1 image-wrapper">
                                                    <a href="#">
                                                        <img class="img-fluid w-100"
                                                             src="https://faceaqses.s3.amazonaws.com/roboads_website/MENA1.jpg"
                                                             alt="Bootstrap portal template">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!--title-->
                                                    <a href="https://roboads.com/">
                                                        <h2 class="h3 post-title text-white my-1">RA-200 - World's first
                                                            Advertising robot.</h2>
                                                    </a>
                                                    <!-- meta title -->
                                                    <div class="news-meta">
                                                    <span class="news-author">by <a class="text-white font-weight-bold"
                                                                                    href="https://roboads.com/">MENA Transport Exhibition.</a></span>
                                                        <span class="news-date">Feb 6, 2022</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end item slider-->
                                </div>
                                <!--end carousel inner-->
                            </div>

                            <!--navigation-->
                            <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mb-3">
                    <div class="card border-0">
                        <div class="card-block">

                            <p>Overall, robots can be a valuable tool for boosting exposure and engagement at an
                                exhibition. Whether you are showcasing products or services, or simply looking for a way
                                to stand out in a crowded space, robots can help you to connect with visitors and leave
                                a lasting impression.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-3">

                </div>

                <div class="col-sm-12">
                    <div class="card border-0">
                        <div class="card-block">
                            <h3 class="card-title">What are telepresence robots and why is it important for your
                                business?</h3>
                            <p class="card-text"><b>Telepresence robots</b>, also known as telebots, are robotic devices
                                that
                                allow a person to remotely participate in a physical environment from a remote location.
                                These robots are equipped with cameras, audio systems, and sometimes even motion
                                sensors, which enable them to transmit real-time video and audio of their surroundings
                                to a remote user. The user can then control the movement and actions of the robot, as if
                                they were physically present in the same location.</p>
                            <p>
                                Telepresence robots have a number of important applications and are becoming
                                increasingly popular in a variety of fields. Here are just a few examples of how
                                telepresence robots are being used:
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-block">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#">
                                            <img class="img-fluid"
                                                 src="https://faceaqses.s3.amazonaws.com/roboweb_videos/Metaverse111.jpg"
                                                 alt="bootstrap blog wordpress theme">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="#">Digital Human</a>
                                        <!--title-->
                                        <a href="https://roboads.com/">
                                            <h2 class="h5 text-white my-1">What are telepresence robots and why is it important for your
                                                business?</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-block">
                            <p>1. <b>Business meetings and conferences</b>: Telepresence robots can be used to remotely
                                attend
                                meetings and conferences, enabling people to participate in discussions and make
                                decisions without having to physically be in the same location. This can save time and
                                money on travel expenses, and also allow people to participate in meetings from anywhere
                                in the world.</p>
                            <p>2. <b>Education</b>: Telepresence robots can be used to remotely attend lectures,
                                seminars, and
                                other educational events. This can be especially useful for students who are unable to
                                physically attend class due to illness or other reasons.</p>
                            <p>3. <b>Healthcare</b>: Telepresence robots can be used to remotely assess and treat
                                patients,
                                enabling doctors and other healthcare professionals to remotely examine and diagnose
                                patients from a distance. This can be especially useful in rural or underserved areas
                                where access to medical care is limited.</p>
                            <p>4. <b>Social interaction</b>: Telepresence robots can be used to enable people to
                                remotely
                                interact with others, especially those who are unable to leave their homes due to
                                illness or disability. This can help reduce feelings of isolation and improve the
                                quality of life for these individuals.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 mt-2 mb-4">
                    <div class="card border-0">
                        <div class="card-block">
                            <p>Overall, telepresence robots are an important technology that can facilitate remote
                                communication and interaction in a variety of settings. As the technology continues to
                                advance and become more widespread, it is likely that telepresence robots will become an
                                increasingly important tool for businesses, educators, healthcare professionals, and
                                individuals around the world.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-block">
                            <h3 class="card-title">How do AI analytics work on mobile robots?</h3>
                            <p>AI analytics on mobile robots typically involve the use of machine learning algorithms
                                and other forms of artificial intelligence to analyze data collected by the robot's
                                sensors and cameras. These sensors and cameras can collect a wide range of data,
                                including visual data from the robot's surroundings, data on the robot's own movements
                                and actions, and data from other sensors such as temperature and humidity sensors.</p>

                            <p>The data collected by the robot's sensors is then fed into machine learning algorithms,
                                which analyze the data and identify patterns and trends. Based on these patterns and
                                trends, the AI system can make predictions, classify objects, and perform other types of
                                analysis that can be used to improve the performance of the robot and its ability to
                                navigate and interact with its environment.</p>
                            <p>
                                For example, an AI system on a mobile robot might be used to analyze visual data from
                                the robot's cameras to identify objects in the robot's surroundings, such as people,
                                pets, or furniture. The AI system might then use this data to help the robot navigate
                                around these objects, avoid collisions, and interact with its environment in a more
                                intelligent and efficient way.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-block">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#">
                                            <img class="img-fluid"
                                                 src="https://faceaqses.s3.amazonaws.com/roboweb_videos/event111-min.png"
                                                 alt="bootstrap blog wordpress theme">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="#">Artificial
                                            Intelligence</a>
                                        <!--title-->
                                        <a href="https://roboads.com/">
                                            <h2 class="h5 text-white my-1">Kira, a digital human.</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 mb-4">
                    <div class="card border-0">
                        <div class="card-block">
                            <p>AI analytics can also be used to continuously improve the performance of the robot over
                                time, as the AI system learns from new data and adjusts its algorithms accordingly. This
                                can enable the robot to become more intelligent and adaptable over time, and improve its
                                ability to navigate and interact with its environment.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-block">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="https://roboads.com/">
                                            <img class="img-fluid"
                                                 src="https://faceaqses.s3.amazonaws.com/roboads_website/gitex1.jpg"
                                                 alt="bootstrap templates for blog">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="#">Robotics</a>
                                        <!--title-->
                                        <a href="https://roboads.com/">
                                            <h2 class="h5 text-white my-1">ROBOADS AT GITEX DWTC, DUBAI</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-block">
                            <h3 class="card-title">How are robots used in Dubai?</h3>
                            <p>
                                Robots are becoming increasingly popular in Dubai, and the option to rent robots is now
                                available for a variety of applications. Here are just a few examples of how robots are
                                being used in Dubai, and how they can be rented for short-term or long-term use:
                            </p>
                            <p>1. <b>Event and party entertainment</b>: Robots can be rented for events and parties to
                                provide
                                entertainment and engage guests. These robots can be programmed to dance, perform
                                tricks, and interact with guests in a variety of ways</p>
                            <p>2. <b>Customer service</b>: Robots are being used in a number of retail and hospitality
                                settings
                                in Dubai to provide customer service and assistance. These robots can be rented to
                                handle tasks such as answering questions, directing customers, and providing
                                information.</p>
                            <p>
                                3. <b>Security</b>: Robots are being used in Dubai to provide security and surveillance
                                in a
                                variety of settings. These robots can be rented to patrol areas, monitor activity, and
                                alert authorities in the event of an emergency.
                            </p>
                            <p>
                                4. <b>Education</b>: Robots are being used in educational settings in Dubai to engage
                                students
                                and enhance learning. These robots can be rented for short-term or long-term use, and
                                can be programmed to teach a variety of subjects and skills.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12">
                    <div class="card border-0">
                        <div class="card-block">
                            <p>Overall, the option to rent robots in Dubai is providing businesses and individuals with
                                the opportunity to leverage the capabilities of this technology on a short-term or
                                temporary basis. Whether for entertainment, customer service, security, or education,
                                robots are proving to be a valuable tool in a variety of settings in Dubai.</p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 mt-4">
                    <div class="card border-0">
                        <div class="card-block">
                            <h3 class="card-title">What are Digital avatars and why are they important?</h3>
                            <p class="card-text">Digital avatars are virtual representations of a person or character
                                that can be used in a variety of settings, including online gaming, social media, and
                                virtual reality. These avatars enable users to create and customize their own online
                                persona, and can be used to interact with others in virtual environments.</p>

                        </div>
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-block">
                            <p>There are a number of important benefits to using digital avatars, including:</p>
                            <p>1. <b>Increased social connectivity</b>: Digital avatars can be used to connect with
                                others
                                online, enabling users to form and maintain relationships with people from all over the
                                world. This can be especially beneficial for individuals who are isolated or unable to
                                connect with others in person.</p>

                            <p>2. <b>Enhanced privacy</b>: Digital avatars allow users to remain anonymous online, which
                                can be
                                important for those who value their privacy or who are concerned about online
                                safety.</p>
                            <p> 3. <b>Greater self-expression</b>: Digital avatars provide users with a platform to
                                express themselves
                                creatively and to create a unique online identity. This can be especially important for
                                individuals who may feel constrained by social norms or who are seeking to explore
                                different
                                aspects of their personality. </p>

                            <p> 4. <b>Improved communication</b>: Digital avatars can be used to facilitate
                                communication and
                                collaboration in online environments, and can be especially helpful for those who may
                                have
                                difficulty communicating in person due to disability or other barriers.</p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-block">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="https://roboads.com/">
                                            <img class="img-fluid"
                                                 src="https://faceaqses.s3.amazonaws.com/roboweb_videos/artificial-intelligence11.jpg"
                                                 alt="Jeddah">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="#">Digital Human</a>
                                        <!--title-->
                                        <a href="https://roboads.com/">
                                            <h2 class="h5 text-white my-1">A.I.</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 mt-5">
                    <div class="card border-0">
                        <div class="card-block">
                            <h3 class="card-title">What is the difference between AMR (RoboAds Robots) and AGV?</h3>
                            <p class="card-text">Autonomous mobile robots (AMR) and automated guided vehicles (AGV) are
                                both types of industrial robots that are used to automate material handling and
                                transportation tasks in a variety of settings. While these two types of robots have some
                                similarities, there are also some key differences between them.</p>
                            <p>One major difference between AMRs and AGVs is the way they navigate their environment.
                                AGVs are guided by physical markers or wires embedded in the floor, which they follow to
                                move from one location to another. In contrast, AMRs use a variety of sensors and other
                                technologies to map their environment and navigate autonomously, without the need for
                                physical guidance.</p>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-block">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#">
                                            <img class="img-fluid"
                                                 src="https://faceaqses.s3.amazonaws.com/roboweb_videos/robads-featured-web.jpg"
                                                 alt="bootstrap blog wordpress theme">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="#">Artificial
                                            Intelligence</a>
                                        <!--title-->
                                        <a href="https://roboads.com/">
                                            <h2 class="h5 text-white my-1">Biggest tech event at Riyadh Saudi
                                                Arabia</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-block">

                            <p>
                                Another key difference is the way that AMRs and AGVs are programmed and controlled. AGVs
                                are typically programmed to follow a fixed route and perform a specific set of tasks,
                                while AMRs are often equipped with more advanced software and sensor systems that allow
                                them to adapt to changing environments and perform a wider range of tasks.
                            </p>
                            <p>Another difference is the flexibility of AMRs and AGVs. AMRs are generally more flexible
                                and adaptable than AGVs, as they are not limited by the need for physical guidance and
                                can navigate around obstacles and changes in their environment. AGVs, on the other hand,
                                are typically limited to following their predetermined routes and may require
                                significant effort to reprogram or modify their path.</p>
                            <p>Overall, both AMRs and AGVs are valuable tools for automating material handling and
                                transportation tasks, and the choice between the two will depend on the specific needs
                                and requirements of the application. AMRs offer more flexibility and adaptability, while
                                AGVs may be a more cost-effective option for applications that require a fixed,
                                predetermined route.</p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 mt-4">
                    <div class="card border-0">
                        <div class="card-block">
                            <h3>Rent or buy a robot, what are the cons and pros to consider.</h3>
                            <p>There are a number of pros and cons to consider when deciding between renting and buying
                                robots. Here are some of the key factors to consider:</p>
                            <p><b>Pros of renting robots:</b></p>
                            <p>1. <b>Cost</b>: Renting robots can be more cost-effective than buying them outright,
                                especially
                                if the robots will only be needed for a short period of time.</p>
                            <p>2. <b>Flexibility</b>: Renting robots can provide more flexibility, as it is easier to
                                upgrade
                                or change the type of robot being used if the needs of the business change.</p>
                            <p>3. <b>No maintenance responsibilities</b>: When robots are rented, the responsibility for
                                maintaining and repairing them usually falls on the provider, not the user. This can be
                                a significant advantage for businesses that do not have the resources or expertise to
                                maintain robots in-house.</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-4">
                    <div class="card border-0">
                        <div class="card-block">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#">
                                            <img class="img-fluid"
                                                 src="https://faceaqses.s3.amazonaws.com/roboads_website/ra100-3.png"
                                                 alt="bootstrap blog wordpress theme">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="#">Artificial
                                            Intelligence</a>
                                        <!--title-->
                                        <a href="https://roboads.com/">
                                            <h2 class="h5 text-white my-1">Renting robots can provide more flexibility.</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card border-0">
                        <div class="card-block">
                            <p><b>Cons of renting robots:</b></p>
                            <p>
                                1. <b>Limited control</b>: When robots are rented, the user has limited control over the
                                robot's capabilities and features. This can be a disadvantage for businesses that need a
                                high level of customization or control over their robots.
                            </p>
                            <p>
                                2. <b>Long-term cost</b>: Renting robots over an extended period of time can be more
                                costly
                                than buying them outright, especially if the business has a long-term need for the
                                robots.
                            </p>
                            <p>
                                <b>Pros of buying robots:</b>
                            </p>
                            <p>
                                1. <b>Customization</b>: Buying robots allows businesses to customize the robots to meet
                                their
                                specific needs and requirements.
                            </p>
                            <p>
                                2. <b>Long-term cost savings</b>: Buying robots can be more cost-effective over the long
                                term,
                                especially if the robots will be used extensively or for an extended period of time.
                            </p>
                            <p>3. <b>Greater control</b>: Buying robots gives businesses greater control over the robots
                                and
                                their capabilities, which can be important for businesses that need a high level of
                                customization or control.</p>
                            <p><b>Cons of buying robots:</b></p>
                            <p>1. <b>Upfront cost</b>: Buying robots can be more expensive upfront, especially if the
                                business
                                is purchasing multiple robots or high-end models.</p>
                            <p>2. <b>Maintenance responsibilities</b>: When robots are purchased, the responsibility for
                                maintaining and repairing them falls on the business, which can be a significant
                                undertaking for companies that do not have the resources or expertise to do so.</p>
                            <p>
                                3. <b>Lack of flexibility</b>: Buying robots can be less flexible than renting them, as
                                it can
                                be difficult and costly to upgrade or change the type of robot being used if the needs
                                of the business change.
                            </p>
                            <p>
                                Overall, the decision to rent or buy robots will depend on the specific needs and
                                circumstances of the business. Both options have their own set of pros and cons, and the
                                best choice will depend on factors such as the business's budget, the duration of the
                                need for the robots, and the level of customization and control required.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-block">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#">
                                            <img class="img-fluid"
                                                 src="https://faceaqses.s3.amazonaws.com/roboweb_videos/d6e565fbb0f0efb8cb57d8b32b0666e9.jpg"
                                                 alt="bootstrap blog wordpress theme">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="#">Artificial
                                            Intelligence</a>
                                        <!--title-->
                                        <a href="https://roboads.com/">
                                            <h2 class="h5 text-white my-1">Biggest tech event at Riyadh Saudi
                                                Arabia</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-block">
                            <h3>What is the difference between RoboAds mobile advertising robot and digital
                                signage?</h3>
                            <p>Mobile advertising robots and digital signage are both tools that can be used to promote
                                products and services, but they differ in a number of key ways. Here are some of the
                                main differences between mobile advertising robots and digital signage:</p>
                            <p>1. <b>Mobility</b>: Mobile advertising robots are physically mobile, while digital
                                signage is
                                stationary. This means that mobile advertising robots can move around and interact with
                                people in a variety of locations, while digital signage is typically limited to one
                                location.</p>
                            <p>2. <b>Interactivity</b>: Mobile advertising robots can often be programmed to interact
                                with
                                people, answering questions, providing information, and even performing tricks or
                                demonstrations. Digital signage, on the other hand, is typically limited to displaying
                                static content.</p>
                            <p>3. <b>Customization</b>: Both mobile advertising robots and digital signage can be
                                customized to
                                display specific content and branding, but mobile advertising robots offer more
                                flexibility in terms of the types of interactions and experiences they can provide.</p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mt-2">
                    <div class="card border-0">
                        <div class="card-block">
                            <p>4. <b>Cost</b>: Mobile advertising robots can be more expensive to purchase or rent than digital
                                signage, as they require more advanced technology and often have higher maintenance
                                costs. Digital signage, on the other hand, can be more cost-effective, especially for
                                businesses that only need to display static content.</p>
                            <p>Overall, both mobile advertising robots and digital signage can be effective tools for
                                promoting products and services, but the best choice will depend on the specific needs
                                and goals of the business. Mobile advertising robots offer greater mobility,
                                interactivity, and customization, but may be more expensive, while digital signage is
                                typically more cost-effective and can be used to display a wide range of static
                                content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-4">
                    <div class="card border-0">
                        <div class="card-block">
                            <h3> How can Digital signage benefit my retail outlet?</h3>
                            <p>Digital signage is an increasingly popular marketing tool for retailers, and it's easy to
                                see why. With the ability to display dynamic, eye-catching content on screens in
                                storefronts and other high-traffic areas, digital signage has the power to attract
                                attention, engage customers, and drive sales.</p>
                            <p>Here are just a few of the many ways that digital signage can be used to benefit
                                retailers:</p>
                            <p>1. <b>Displaying promotional content</b>: Digital signage can be used to display promotional
                                content such as sales, discounts, and new products. This can help to attract the
                                attention of potential customers and encourage them to enter the store.</p>
                            <p>
                                2. <b>Providing product information</b>: Digital signage can be used to provide detailed
                                information about products, including images, descriptions, and pricing. This can help
                                customers to make informed purchasing decisions, and can also free up store staff to
                                provide more personalized customer service.
                            </p>
                            <p>3. <b>Enhancing the customer experience</b>: Digital signage can be used to create a more
                                interactive and engaging shopping experience. For example, retailers can use digital
                                signage to display customer reviews, ratings, and social media feeds, or to offer
                                interactive product demonstrations.</p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-4">
                    <div class="card border-0">
                        <div class="card-block">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#">
                                            <img class="img-fluid"
                                                 src="https://faceaqses.s3.amazonaws.com/roboweb_videos/Business-risk-amico.png"
                                                 alt="bootstrap blog wordpress theme">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="#">Building Businesses</a>
                                        <!--title-->
                                        <a href="https://roboads.com/">
                                            <h2 class="h5 text-white my-1">How can Digital signage benefit my retail outlet?</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mt-4 mb-5">
                    <div class="card border-0">
                        <div class="card-block">
                            <p>4. <b>Improving store navigation</b>: Digital signage can be used to help customers navigate the
                                store, displaying maps, directories, and other information to help them find what
                                they're looking for.</p>
                            <p>Overall, digital signage is an important tool for retailers looking to attract customers,
                                engage them, and drive sales. By using digital signage to display dynamic, relevant
                                content, retailers can create a more interactive and engaging shopping experience, and
                                ultimately drive more sales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-block">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#">
                                            <img class="img-fluid"
                                                 src="https://faceaqses.s3.amazonaws.com/roboweb_videos/DSC_3853.jpg"
                                                 alt="bootstrap blog wordpress theme">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="#">Tech Events</a>
                                        <!--title-->
                                        <a href="https://roboads.com/">
                                            <h2 class="h5 text-white my-1">Biggest tech event at DWTC, DUBAI</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-block">
                            <h3>How can robots be useful for activations and new launches?</h3>
                            <p>Using robots for product activation and new product launches can be an effective way to
                                attract attention and engage customers. Robots can be programmed to perform a variety of
                                tasks and can be customized to fit the theme and branding of the product or event.</p>
                            <p>One way that robots can be used for product activation is by creating interactive
                                displays or demonstrations. For example, a robot could be programmed to interact with
                                customers, answer questions, or demonstrate the features and benefits of a new product.
                                Robots can also be used to create immersive, interactive experiences that engage
                                customers and create a memorable brand experience.</p>
                            <p>Another way that robots can be used for product launches is by providing entertainment or
                                adding to the overall atmosphere of the event. Robots can be programmed to perform a
                                variety of tasks, such as dancing, playing music, or interacting with guests. This can
                                create a unique and memorable experience for attendees and help to generate buzz and
                                interest in the product.</p>
                            <p>  Robots can also be used to handle logistical tasks at product launches, such as directing
                              guests, managing queues, or distributing promotional materials. This can help to streamline
                              the event and make it more efficient and enjoyable for attendees.</p>

                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card border-0">
                        <div class="card-block">
                            <p>Overall, using robots for product activation and new product launches can be an effective
                                way to create a memorable and engaging experience for customers. By leveraging the
                                flexibility and adaptability of robots, businesses can create unique and interactive
                                experiences that help to generate interest and drive sales.</p>
                        </div>
                    </div>
                </div>



            </div>

            <!--Start code-->
            <div class="row">
                <div class="col-12 pb-5 mt-5">
                    <!--SECTION START-->
                    <section class="row">
                        <!--Start slider news-->
                        <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                            <div id="featured" class="carousel slide carousel" data-ride="carousel">
                                <!--dots navigate-->
                                <ol class="carousel-indicators top-indicator">
                                    <li data-target="#featured" data-slide-to="0" class="active"></li>
                                    <li data-target="#featured" data-slide-to="1"></li>
                                    <li data-target="#featured" data-slide-to="2"></li>
                                    <li data-target="#featured" data-slide-to="3"></li>
                                </ol>

                                <!--carousel inner-->
                                <div class="carousel-inner">
                                    <!--Item slider-->
                                    <div class="carousel-item active">
                                        <div class="card border-0 rounded-0 text-light overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_left-cover-1 image-wrapper">
                                                    <a href="#">
                                                        <img class="img-fluid w-100"
                                                             src="https://faceaqses.s3.amazonaws.com/roboads_website/leap11.jpg"
                                                             alt="no File">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!--title-->
                                                    <a href="#">
                                                        <h2 class="h3 post-title text-white my-1">RA-200 - World's first
                                                            Advertising robot.</h2>
                                                    </a>
                                                    <!-- meta title -->
                                                    <div class="news-meta">
                                                    <span class="news-author">at <a class="text-white font-weight-bold"
                                                                                    href="https://roboads.com/">LEAP Saudi Arabia</a></span>
                                                        <span class="news-date">2022</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Item slider-->
                                    <div class="carousel-item">
                                        <div class="card border-0 rounded-0 text-light overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_left-cover-1 image-wrapper">
                                                    <a href="#">
                                                        <img class="img-fluid w-100"
                                                             src="https://faceaqses.s3.amazonaws.com/roboads_website/leap2.PNG"
                                                             alt="Bootstrap news theme">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!--title-->
                                                    <a href="https://roboads.com/">
                                                        <h2 class="h3 post-title text-white my-1">Future Innovations
                                                            Summit
                                                            2021</h2>
                                                    </a>
                                                    <!-- meta title -->
                                                    <div class="news-meta">
                                                    <span class="news-author"> at <a class="text-white font-weight-bold"
                                                                                     href=https://roboads.com/">Future Innovations Summit</a></span>
                                                        <span class="news-date">2021</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Item slider-->
                                    <div class="carousel-item">
                                        <div class="card border-0 rounded-0 text-light overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_left-cover-1 image-wrapper">
                                                    <a href="#">
                                                        <img class="img-fluid w-100"
                                                             src="https://faceaqses.s3.amazonaws.com/roboads_website/leap3.PNG"
                                                             alt="Roboads.com">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!--title-->
                                                    <a href="https://roboads.com/">
                                                        <h2 class="h3 post-title text-white my-1">RA-200 - World's first
                                                            Advertising robot.</h2>
                                                    </a>
                                                    <!-- meta title -->
                                                    <div class="news-meta">
                                                    <span class="news-author">by <a class="text-white font-weight-bold"
                                                                                    href="https://roboads.com/">Future Innovations Summit (FIS) Dubai</a></span>
                                                        <span class="news-date"> 2021</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Item slider-->
                                    <div class="carousel-item">
                                        <div class="card border-0 rounded-0 text-light overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_left-cover-1 image-wrapper">
                                                    <a href="#">
                                                        <img class="img-fluid w-100"
                                                             src="https://faceaqses.s3.amazonaws.com/roboads_website/MENA1.jpg"
                                                             alt="Bootstrap portal template">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!--title-->
                                                    <a href="https://roboads.com/">
                                                        <h2 class="h3 post-title text-white my-1">RA-200 - World's first
                                                            Advertising robot.</h2>
                                                    </a>
                                                    <!-- meta title -->
                                                    <div class="news-meta">
                                                    <span class="news-author">by <a class="text-white font-weight-bold"
                                                                                    href="https://roboads.com/">MENA Transport Exhibition.</a></span>
                                                        <span class="news-date">Feb 6, 2022</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end item slider-->
                                </div>
                                <!--end carousel inner-->
                            </div>

                            <!--navigation-->
                            <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End slider news-->

                        <!--Start box news-->
                        <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                            <div class="row">
                                <!--news box-->
                                <div class="col-6 pb-1 pt-0 pr-1">
                                    <div class="card border-0 rounded-0 text-white overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_right-cover-2 image-wrapper">
                                                <a href="#">
                                                    <img class="img-fluid"
                                                         src="https://faceaqses.s3.amazonaws.com/roboads_website/eucerin1.jpg"
                                                         alt="simple blog template bootstrap">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!-- category -->
                                                <a class="p-1 badge badge-primary rounded-0" href="#">Technology</a>

                                                <!--title-->
                                                <a href="https://roboads.com/">
                                                    <h2 class="h5 text-white my-1">RA-200 Model</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--news box-->
                                <div class="col-6 pb-1 pl-1 pt-0">
                                    <div class="card border-0 rounded-0 text-white overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_right-cover-2 image-wrapper">
                                                <a href="https://roboads.com/">
                                                    <img class="img-fluid"
                                                         src="https://faceaqses.s3.amazonaws.com/roboads_website/gitex1.jpg"
                                                         alt="bootstrap templates for blog">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!-- category -->
                                                <a class="p-1 badge badge-primary rounded-0" href="#">Robotics</a>
                                                <!--title-->
                                                <a href="https://roboads.com/">
                                                    <h2 class="h5 text-white my-1">ROBOADS AT GITEX DWTC, DUBAI</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--news box-->
                                <div class="col-6 pb-1 pr-1 pt-1">
                                    <div class="card border-0 rounded-0 text-white overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_right-cover-2 image-wrapper">
                                                <a href="#">
                                                    <img class="img-fluid"
                                                         src="https://faceaqses.s3.amazonaws.com/roboads_website/leap11.jpg"
                                                         alt="bootstrap blog wordpress theme">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!-- category -->
                                                <a class="p-1 badge badge-primary rounded-0" href="#">Artificial
                                                    Intelligence</a>
                                                <!--title-->
                                                <a href="https://roboads.com/">
                                                    <h2 class="h5 text-white my-1">Biggest tech event at Riyadh Saudi
                                                        Arabia</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--news box-->
                                <div class="col-6 pb-1 pl-1 pt-1">
                                    <div class="card border-0 rounded-0 text-white overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_right-cover-2 image-wrapper">
                                                <a href="https://roboads.com/">
                                                    <img class="img-fluid"
                                                         src="https://faceaqses.s3.amazonaws.com/roboads_website/eucerin-jeddah.jpg"
                                                         alt="Jeddah">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!-- category -->
                                                <a class="p-1 badge badge-primary rounded-0" href="#">Telepresence</a>
                                                <!--title-->
                                                <a href="https://roboads.com/">
                                                    <h2 class="h5 text-white my-1">JEDDAH, SAUDI ARABIA 2022</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end news box-->
                            </div>
                        </div>
                        <!--End box news-->
                    </section>
                    <!--END SECTION-->
                </div>
            </div>
            <!--end code-->
        </div>


    </div>
    <!-- end of lightbox -->
    <!-- end of project lightboxes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('.navbar-nav li .nav-link.active').removeClass('active');
        $('.navbar-nav li #newsblogs').addClass('active');
        $('.navbar-nav li .resources').addClass('active');

    </script>
@endsection
