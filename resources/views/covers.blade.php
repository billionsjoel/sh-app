<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scribehouse</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('js/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96832486-1"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6271400531285389"
        crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-96832486-1');
    </script>
    <!-- Styles -->
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
            scroll-behavior: smooth !important;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            font-family: "Poppins", sans-serif;
            line-height: 1.15;
            scroll-behavior: smooth !important;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }
    </style>

    <style>
        .navbar-fixed-top.scrolled {
            background-image: linear-gradient(to right, rgba(3, 90, 166, 0.85), rgba(64, 186, 213, 0.85)) !important;
            transition: background-color 200ms linear;
        }

        section {
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
            margin-top: 2rem;
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
            justify-content: center;
            margin: 1rem;
            margin-left: 1rem;
        }

        .service-card {
            background-color: rgba(241, 235, 235, 0.993);
            border-radius: 10px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            padding: 4rem 2rem;
            border: none;
            box-shadow: #2e2e2e;
        }

        .service-card p {
            margin-top: 1rem;
            font-size: 1.1rem !important;
            word-spacing: 0.2rem;
            line-height: 2rem;
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
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 14rem;
        }

        .b-border {
            height: 0.3rem;
            background-color: #e24d48;
            width: 2rem;
            margin: 2rem;
        }

        .gallery {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 5rem;
        }

        .bks-border {
            background-color: #e24d48;
            height: 0.3rem;
            width: 3rem;
        }
    </style>

    <style>
        .test-say {
            background-image: linear-gradient(to bottom left, rgb(64, 183, 213), rgb(3, 90, 166)), url('../images/agency.jpeg');
            background-size: cover;
            background-position: top;
            /* clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
            -webkit-clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%); */
        }

        .test-img {
            height: 12em;
            width: 35em;
            border-radius: 100%;
        }

        .test-img2 {
            height: 12em;
            width: 18em;
            border-radius: 100%;
        }

        .btn:focus,
        .btn:active,
        button:focus,
        button:active {
            outline: none !important;
            box-shadow: none !important;
        }

        #image-gallery .modal-footer {
            display: block;
        }

        .thumb {
            margin-top: 15px;
            margin-bottom: 15px;
        }
    </style>

</head>

<body>
    <section>
        @include('components.welcomePage.navbar')
    </section>

    <section style="margin-top:150px; margin-bottom:150px;">
        <div class="container">
            <div class="row">
                @forelse ($covers as $cover)
                    <div class="col-sm-6 py-2" style="width: 26rem;">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{ $cover->title }}</h4>
                            </div>
                            <img class="card-img-top" src="{{ asset('/images/bookcovers/' . $cover->image) }}"
                                alt="Card image cap" style="height: 100%; width: 100%; object-fit: contain">
                            <div class="card-body">
                                <h5 class="card-title">Description</h5>
                                <p class="card-text">{!! $cover->description !!}</p>
                                <p href="#" class="small text-secondar"> <span class="text-dark">Genre :</span>
                                    {{ $cover->genre }}</p>
                                <a href="#" class="small"><span class="text-success">Author :
                                    </span><b class="text-info">{{ $cover->author }}</b></a>
                                <br>
                                <a href="#" class="btn btn-primary btn-block mt-2">Buy This Book</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4>No book covers at the moment. Come back later!</h4>
                                <img class="mt-4" src="{{ url('images/sorry.png') }}" alt="No book covers"
                                    style="width: 25rem;">
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    @include('layouts.footer')

</body>

</html>
