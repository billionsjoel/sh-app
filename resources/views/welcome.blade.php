<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sgit cribehouse</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <!-- Styles -->
    <style>
        html {
            font-family: "Poppins", sans-serif;
            line-height: 1.15;
            scroll-behavior: smooth;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .navbar-fixed-top.scrolled {
            background-image: linear-gradient(to right, rgba(3, 90, 166, 0.85), rgba(64, 186, 213, 0.85)) !important;
            transition: background-color 200ms linear;
        }

        section,
        .services,
        .about,
        .team,
        .blogs {
            font-family: "Poppins", sans-serif,  !important;
            font-size: 0.9rem;
            font-weight: lighter;
            font-size: 20px;
        }

        .header {
            height: 100vh;
            background-image: linear-gradient(to right, rgba(64, 186, 213, 0.85), rgba(3, 90, 166, 0.85)),
                url('../images/background.jpg');
            background-size: cover;
            background-position: top;
            clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
            -webkit-clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
        }

        .heading-main {
            display: block;
            color: #fff;
            font-size: 4rem;
            font-weight: lighter;
        }

        .heading-sub {
            display: block;
            font-weight: lighter;
            font-size: 20px;
            letter-spacing: 2px;
            color: #fff;
        }

        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        #header {
            transition: 0.2s;
        }

        .contact {
            background-image: linear-gradient(to right, rgba(64, 186, 213, 0.85), rgba(3, 90, 166, 0.85));
        }

        .contact-form {
            background: #fff;
            margin-top: 10%;
            margin-bottom: 5%;
            width: 70%;
        }

        .contact-form .form-control {
            border-radius: 1rem;
        }

        .contact-image {
            text-align: center;
        }

        .contact-image img {
            border-radius: 6rem;
            width: 11%;
            margin-top: -3%;
            transform: rotate(29deg);
        }

        .contact-form form {
            padding: 14%;
        }

        .contact-form form .row {
            margin-bottom: -7%;
        }

        .contact-form h3 {
            margin-bottom: 8%;
            margin-top: -10%;
            text-align: center;
            color: #0062cc;
        }

        .contact-form .btnContact {
            width: 70%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            background: #dc3545;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }

        .btnContactSubmit {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            color: #fff;
            background-color: #0062cc;
            border: none;
            cursor: pointer;
        }

        p {
            font-family: 'Nunito', sans-serif;
            font-size: 16px;
            line-height: 28px;
        }

        .animate-border {
            position: relative;
            display: block;
            width: 115px;
            height: 3px;
            background: #007bff;
        }

        .animate-border:after {
            position: absolute;
            content: "";
            width: 35px;
            height: 3px;
            left: 0;
            bottom: 0;
            border-left: 10px solid #fff;
            border-right: 10px solid #fff;
            -webkit-animation: animborder 2s linear infinite;
            animation: animborder 2s linear infinite;
        }

        @-webkit-keyframes animborder {
            0% {
                -webkit-transform: translateX(0px);
                transform: translateX(0px);
            }

            100% {
                -webkit-transform: translateX(113px);
                transform: translateX(113px);
            }
        }

        @keyframes animborder {
            0% {
                -webkit-transform: translateX(0px);
                transform: translateX(0px);
            }

            100% {
                -webkit-transform: translateX(113px);
                transform: translateX(113px);
            }
        }

        .animate-border.border-white:after {
            border-color: #fff;
        }

        .animate-border.border-yellow:after {
            border-color: #F5B02E;
        }

        .animate-border.border-orange:after {
            border-right-color: #007bff;
            border-left-color: #007bff;
        }

        .animate-border.border-ash:after {
            border-right-color: #EEF0EF;
            border-left-color: #EEF0EF;
        }

        .animate-border.border-offwhite:after {
            border-right-color: #F7F9F8;
            border-left-color: #F7F9F8;
        }

        /* Animated heading border */
        @keyframes primary-short {
            0% {
                width: 15%;
            }

            50% {
                width: 90%;
            }

            100% {
                width: 10%;
            }
        }

        @keyframes primary-long {
            0% {
                width: 80%;
            }

            50% {
                width: 0%;
            }

            100% {
                width: 80%;
            }
        }

        .dk-footer {
            padding: 75px 0 0;
            background-color: #151414;
            position: relative;
            z-index: 2;
        }

        .dk-footer .contact-us {
            margin-top: 0;
            margin-bottom: 30px;
            padding-left: 80px;
        }

        .dk-footer .contact-us .contact-info {
            margin-left: 50px;
        }

        .dk-footer .contact-us.contact-us-last {
            margin-left: -80px;
        }

        .dk-footer .contact-icon i {
            font-size: 24px;
            top: -15px;
            position: relative;
            color: #007bff;
        }

        .dk-footer-box-info {
            position: absolute;
            top: -122px;
            background: #202020;
            padding: 40px;
            z-index: 2;
        }

        .dk-footer-box-info .footer-social-link h3 {
            color: #fff;
            font-size: 24px;
            margin-bottom: 25px;
        }

        .dk-footer-box-info .footer-social-link ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .dk-footer-box-info .footer-social-link li {
            display: inline-block;
        }

        .dk-footer-box-info .footer-social-link a i {
            display: block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            background: #000;
            margin-right: 5px;
            color: #fff;
        }

        .dk-footer-box-info .footer-social-link a i.fa-facebook {
            background-color: #3B5998;
        }

        .dk-footer-box-info .footer-social-link a i.fa-twitter {
            background-color: #55ACEE;
        }

        .dk-footer-box-info .footer-social-link a i.fa-google-plus {
            background-color: #DD4B39;
        }

        .dk-footer-box-info .footer-social-link a i.fa-linkedin {
            background-color: #0976B4;
        }

        .dk-footer-box-info .footer-social-link a i.fa-instagram {
            background-color: #B7242A;
        }

        .footer-awarad {
            margin-top: 285px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 100%;
            -moz-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .footer-awarad p {
            color: #fff;
            font-size: 24px;
            font-weight: 700;
            margin-left: 20px;
            padding-top: 15px;
        }

        .footer-info-text {
            margin: 26px 0 32px;
        }

        .footer-left-widget {
            padding-left: 80px;
        }

        .footer-widget .section-heading {
            margin-bottom: 35px;
        }

        .footer-widget h3 {
            font-size: 24px;
            color: #fff;
            position: relative;
            margin-bottom: 15px;
            max-width: -webkit-fit-content;
            max-width: -moz-fit-content;
            max-width: fit-content;
        }

        .footer-widget ul {
            width: 50%;
            float: left;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .footer-widget li {
            margin-bottom: 18px;
        }

        .footer-widget p {
            margin-bottom: 27px;
        }

        .footer-widget a {
            color: #878787;
            -webkit-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }

        .footer-widget a:hover {
            color: #007bff;
        }

        .footer-widget:after {
            content: "";
            display: block;
            clear: both;
        }

        .dk-footer-form {
            position: relative;
        }

        .dk-footer-form input[type=email] {
            padding: 14px 28px;
            border-radius: 50px;
            background: #2E2E2E;
            border: 1px solid #2E2E2E;
        }

        .dk-footer-form input::-webkit-input-placeholder,
        .dk-footer-form input::-moz-placeholder,
        .dk-footer-form input:-ms-input-placeholder,
        .dk-footer-form input::-ms-input-placeholder,
        .dk-footer-form input::-webkit-input-placeholder {
            color: #878787;
            font-size: 14px;
        }

        .dk-footer-form input::-webkit-input-placeholder,
        .dk-footer-form input::-moz-placeholder,
        .dk-footer-form input:-ms-input-placeholder,
        .dk-footer-form input::-ms-input-placeholder,
        .dk-footer-form input::placeholder {
            color: #878787;
            font-size: 14px;
        }

        .dk-footer-form button[type=submit] {
            position: absolute;
            top: 0;
            right: 0;
            padding: 12px 24px 12px 17px;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
            border: 1px solid #007bff;
            background: #007bff;
            color: #fff;
        }

        .dk-footer-form button:hover {
            cursor: pointer;
        }

        /* ==========================
            Contact
         =============================*/
        .contact-us {
            position: relative;
            z-index: 2;
            margin-top: 65px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .contact-icon {
            position: absolute;
        }

        .contact-icon i {
            font-size: 36px;
            top: -5px;
            position: relative;
            color: #007bff;
        }

        .contact-info {
            margin-left: 75px;
            color: #fff;
        }

        .contact-info h3 {
            font-size: 20px;
            color: #fff;
            margin-bottom: 0;
        }

        .copyright {
            padding: 28px 0;
            margin-top: 55px;
            background-color: #202020;
        }

        .copyright span,
        .copyright a {
            color: #878787;
            -webkit-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear;
        }

        .copyright a:hover {
            color: #007bff;
        }

        .copyright-menu ul {
            text-align: right;
            margin: 0;
        }

        .copyright-menu li {
            display: inline-block;
            padding-left: 20px;
        }

        .back-to-top {
            position: relative;
            z-index: 2;
        }

        .back-to-top .btn-dark {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            padding: 0;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #2e2e2e;
            border-color: #2e2e2e;
            display: none;
            z-index: 999;
            -webkit-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear;
        }

        .back-to-top .btn-dark:hover {
            cursor: pointer;
            background: #FA6742;
            border-color: #FA6742;
        }
    </style>

    <style>
        .services {
            min-height: 100vh;
            background-attachment: cover;
            background-color: #fff;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        .s-border {
            background-color: #e24d48;
            height: 0.3rem;
            width: 4rem;
            margin-left: 4rem;
            margin-top: 2rem;
        }

        .service-cards {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            margin-top: 5rem;
        }

        .service-card {
            width: 25%;
            height: 40rem;
            background-color: rgba(241, 235, 235, 0.993);
            border-radius: 10px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            padding: 2rem 4rem;
            border: none;
            box-shadow: #2e2e2e;
        }

        .service-card p {
            margin-top: 1rem;
            font-size: 1.1rem !important;
            word-spacing: 0.2rem;
            line-height: 2rem;
            overflow: hidden;
        }

        .s-title {
            margin-bottom: 2rem;
        }

        .s-icon {
            font-size: 3rem;
            margin: 1rem;
            color: rgb(209, 75, 51);

        }
    </style>

    <style>
        .about {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: transparent;
        }

        .ab-border {
            background-color: #e24d48;
            height: 0.3rem;
            width: 4rem;
        }

        .about-info p {
            margin-top: 4rem;
            font-size: 1.2rem !important;
            word-spacing: 0.2rem;
            line-height: 3rem;
        }
    </style>

    <style>
        .t-team {
            min-height: 80vh;
            background-color: rgb(0, 0, 0);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;


        }

        .t-cards {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 4rem;
        }

        .t-card {
            border-radius: 10px;
            height: 20vh;
            margin-left: 2rem;
            background-color: #0976B4;
        }

        .t-border {
            height: 0.3rem;
            background-color: #e24d48;
            width: 2rem;
            margin-left: 1rem;
            margin-top: 2rem;
        }

        /* @media only screen and (max-width: 1200px) {
            .s-team {
                height: 80vh;
                background-color: rgb(231, 125, 125);
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;

            }

            .t-cards {
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                flex-direction: column;
                margin-top: 4rem;
                padding-bottom: 12rem;
            }

            .t-card {
                border-radius: 10px;
                height: 20vh;
                margin-top: 12rem;
                background-color: #0976B4;
            }
        } */
    </style>

    <style>
        .blogs {
            height: 80vh;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .b-border {
            height: 0.3rem;
            background-color: #e24d48;
            width: 2rem;
            margin: 2rem;
        }
    </style>
</head>

<body>
    <header id="home">
        <div class="row header" id="home">
            <div class="col-sm-12">
                <div class="center">
                    <span class="heading-main">Scribe House</span>
                    <span class="heading-sub mb-4 border-bottom border-teal">PUBLISHING AGENCY.</span>
                    <span class="heading-sub P-4">"A fast and efficient way to get your publications right."</span></p>
                    <a class="btn btn-light btn-lg" style="width:13rem; border-radius: 100px;" href="#services">Get
                        started</a>
                </div>
            </div>
        </div>
    </header>
    <section>
        <nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top scrolled fixed-top shadow-lg small"
            id="header">
            <img src="{{asset('/images/scribelogo.svg')}}" alt="" width="5%" class="ml-4">
            <a class="navbar-brand ml-4" href="{{url('/')}}">Scribe House</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav ml-auto p-3 mr-4">
                    <li class="nav-item active">
                        <a class="nav-link ml-4" href="{{url('/#home')}}"> Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-4" href="{{url('/#about')}}">About <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-4" href="{{url('/#services')}}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-4" href="{{url('/#blogs')}}">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-4 " href="{{url('/#team')}}">Team</a>
                    </li>
                    <li class="nav-item mr-4 ">
                        <a class="nav-link ml-4 " href="{{url('/#contact')}}">Contact</a>
                    </li>
                    {{--            <li class="nav-item dropdown">--}}
                    {{--                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>--}}
                    {{--                <div class="dropdown-menu" aria-labelledby="dropdown04">--}}
                    {{--                    <a class="dropdown-item" href="#">Action</a>--}}
                    {{--                    <a class="dropdown-item" href="#">Another action</a>--}}
                    {{--                    <a class="dropdown-item" href="#">Something else here</a>--}}
                    {{--                </div>--}}
                    {{--            </li>--}}
                </ul>
            </div>
        </nav>
    </section>

    <section class="services" id="services">
        <div class="title">
            <h1 class="text-center">Our Services</h1>
            <div class="s-border"></div>
        </div>

        <div class="service-cards">
            <div class="service-card">
                <i class="fas fa-couch s-icon"></i>
                <h4 class="s-title">Consultancy</h4>
                <p>
                    You have written. You would like to package your content well, and sell it. But you don’t know
                    how to. Scribe House will
                    tell you how, and do it for you even, at an affordable cost. We will link you up with competent
                    service providers for
                    each step of the publishing process, right from the time we receive your manuscript, to the time
                    it is published and
                    positioned at strategic selling points. We will help you budget and cost your work, and create
                    and follow through with a
                    marketing plan.
                    {{-- {!! $services->services1 ?? "" !!} --}}
                </p>
            </div>
            <div class="service-card">
                <i class="fas fa-pen-nib s-icon"></i>
                <h4 class="s-title">Editorial</h4>
                <p>
                    We offer a wide range of editorial solutions for print and online copy. We edit fiction and
                    general non-fiction books,
                    short stories, magazines, poetry, reports, academic papers, and any other publication in line
                    with our values.
                    {{-- {!! $services->services2 ?? "" !!} --}}
                </p>
            </div>
            <div class="service-card">
                <i class="fas fa-baby s-icon"></i>
                <h4 class="s-title">Junior Scribes</h4>
                <p>
                    The cry of many over the years has been ‘Africans have a poor reading culture.’ Putting aside
                    the arguments justifying
                    or defying this cry, we are firm believers that charity starts at home. What better way to grow
                    and encourage the
                    reading culture in this country and continent, than by starting with our children? Scribe House
                    promotes and publishes
                    literature for youths from 0-14yrs. We have partnered with TWOG Games, a company that creates
                    word games for toddlers
                    and ‘tweens’ to provide fun, interactive ‘word-ertainment’ for children and tweens.
                    {{-- {!! $services->services3 ?? "" !!} --}}
                </p>
            </div>
        </div>

    </section>

    <section class="about" id="about">
        <h1 class="text-center s-title">About Us</h1>
        <div class="ab-border"></div>
        <div class="about-info container">
            <p>Recognising the scarcity of excellent, affordable editors in Uganda and Africa, Scribe House
                provides specialised
                editing and book production services. We offer publishing and promotional advice to firms and
                individuals across the
                continent. Publishing consultancies and editorial services are comfortably transacted online,
                making it easy for us to
                serve you wherever you are.
                <p> We are a home for scribes.<br>
                    A scribe’s house.<br>
                    Scribe House.</p>
                {{-- {!! $services->about ?? "" !!} --}}
        </div>
    </section>

    <section class="t-team" id="team">
        <div class="title text-white">
            <h1>Our Team</h1>
            <div class="t-border"></div>
        </div>

        <div class="t-cards">
            <div class="t-card">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/member1.JPG')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-danger">Crystal</p>
                        <p class="card-text">Publishing Director</p>
                    </div>
                </div>
            </div>

            <div class="t-card">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/member2.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-danger">Carole</p>
                        <p class="card-text">Administrative Director</p>
                    </div>
                </div>
            </div>
            <div class="t-card">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/member4.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-danger">Faith</p>
                        <p class="card-text">Managing Editor</p>
                    </div>
                </div>
            </div>

            <div class="t-card">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/member3.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-danger">Charles</p>
                        <p class="card-text">Junior Scribes Coordinator</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blogs" id="blogs">
        <div class="title bg-white">
            <h1 class="text-center ">Latest News</h1>
            <div class="b-border "></div>
        </div>
        <div class="row p-4 bg-white justify-content-center">
            <div class="col-sm-2">
                <div class="card">
                    {{-- <img src="{{asset('images/blog1.jpeg')}}" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">THE JOURNEY TO SCRIBE HOUSE (ONLINE): Part 1</h5>
                        <span class="posted-on small mb-4">Posted on <span class="text-danger small">March 6,
                                2021 | Work</span></span>
                        <p class="card-text mt-2">It started in 2015. In Scotland. We were at the end of our second
                            semester,
                            of our
                            Master’s in Publishing Studies.
                        </p>
                        <a href="{{url('/blogs?id=1')}}" class="text-primary">Read more ...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    {{-- <img src="{{asset('images/blog2.jpeg')}}" class="card-img-top" alt="..." height="360px"> --}}
                    <div class="card-body">
                        <h5 class="card-title">THE JOURNEY TO SCRIBE HOUSE (ONLINE): Part 2</h5>
                        <span class="posted-on small mb-4">Posted on <span class="text-danger small">Jan 16,
                                2021 | Publishing</span></span>
                        <p class="card-text mt-2">In High School, I was always singled out in our English classes, for
                            having
                            the
                            best ‘summaries’ in the class.</p>
                        <a href="{{url('/blogs?id=2')}}" class="text-primary">Read more ...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    {{-- <img src="{{asset('images/blog3.jpeg')}}" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">THE JOURNEY TO SCRIBE HOUSE (ONLINE): Part 3</h5>
                        <span class="posted-on small mb-4">Posted on <span class="text-danger small">Feb 2,
                                2021 | Editing</span></span>
                        <p class="card-text mt-2">One evening a few years ago, during a fellowship of young Christian
                            friends, a
                            lady’s turn came to introduce herself.</p>
                        <a href="{{url('/blogs?id=3')}}" class="text-primary">Read more ...</a>
                    </div>
                </div>
            </div>
            <div class="cta p-4 text-center w-100">
                <div class="btn border-bottom text-center text-primary">
                    <a href="{{url('/blogs?id=1')}}">See all our Blogs <svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-arrow-right-circle-fill" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z" />
                        </svg> </a>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="body p-4" id="contact">
            <div class="container contact-form">
                <div class="contact-image">
                    <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
                </div>
                <form method="POST" action="{{url('/messages')}}">
                    @csrf
                    <h3>Drop Us a Message</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name *"
                                    value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Your Email *"
                                    value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *"
                                    value="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Your Message *"
                                    style="width: 100%; height: 150px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Send Message" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer id="dk-footer" class="dk-footer text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <img src="{{asset('images/scribelogo.svg')}}" alt="footer_logo" class="" height="100px">
                        </a>
                        <p class="footer-info-text">
                            Scribe House recognises the scarcity of excellent, affordable editors in Uganda and Africa,
                            and
                            thus
                            offers unique and specialised editing services.
                        </p>
                        <div class="footer-social-link">
                            <h3>Follow us</h3>
                            <ul>
                                <li>
                                    <a href="{{url('https://www.facebook.com/scribehouse')}}">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('https://twitter.com/scribehouse')}}">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('https://www.instagram.com/scribehouse')}}">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
                    <div class="footer-awarad">
                        <img src="images/icon/best.png" alt="">
                        <p>ScribeHouse 2020</p>
                    </div>
                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    {{--                                <h2>Kiira</h2>--}}
                                    <h5>Kampala, Uganda.</h5>
                                    <p> scribehouse.ug@gmail.com.</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>(+256)782-682-678.</h3>
                                    {{--                                <h3>(+256)-702-152894</h3>--}}
                                    <p>Give us a call.</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Useful Links</h3>
                                    <span class="animate-border-- border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="{{url('/#about')}}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/#services')}}">Services</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/#gallery')}}">Projects</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/#team')}}">Our Team</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="{{url('/#contact')}}">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/#gallery')}}">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/#clients')}}">Clients</a>
                                    </li>
                                    <li>
                                        <a href="{{('/#why')}}">Why Scribe House</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                    <h3>Subscribe</h3>
                                    <span class="animate-border-- border-black"></span>
                                </div>
                                <p>
                                    <!-- Don’t miss to subscribe to our new feeds, kindly fill the form below. -->
                                    Subscribe to our news-letter to receive more updates and offers.</p>
                                <form action="#">
                                    <div class="form-row">
                                        <div class="col dk-footer-form">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                            <button type="submit">
                                                <i class="fa fa-send"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End form -->
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2020, All Right Reserved.</span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Terms</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
        <div id="back-to-top" class="back-to-top">
            <button class="btn btn-dark" title="Back to Top" style="display: block;">
                <i class="fa fa-angle-up"></i>
            </button>
        </div>
        <!-- End Back to top -->
    </footer>

</body>




<script>
    $(function () {
            $(document).scroll(function () {
                var $nav = $(".navbar-fixed-top");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
</script>

</html>