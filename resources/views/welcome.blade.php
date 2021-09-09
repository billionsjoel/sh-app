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
    <!-- Styles -->
    <style>
        a {
            text-decoration: none;
        }

        .avatar {
            width: 100px;
            margin: 10px;
            border: 4px solid #F7F9F8;
            border-radius: 500px;
            -webkit-border-radius: 500px;
            -moz-border-radius: 500px;
        }

    </style>
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
            background-image: linear-gradient(to right, rgba(64, 186, 213, 0.85), rgba(3, 90, 166, 0.85)),
                url('../images/service-3-bg.jpeg');
            background-size: cover;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            margin-top: 2rem;
            transform: skewY(-4deg);
            padding-bottom: 10rem;


        }

        .services>* {
            transform: skewY(4deg);
        }

        .s-border {
            background-color: #faf4f4;
            height: 0.3rem;
            width: 4rem;
            margin-left: 4rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .service-cards {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem;
        }

        .service-card {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            padding: 4rem 2rem;
            border: none;
            box-shadow: #0a0a0a;
            transition: transform .3s;
        }

        .service-card:hover {
            transform: translateY(-1.5rem) scale(1.03);
        }

        .service-card p {
            margin: 1.5rem;
            font-size: 1.11rem !important;
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

        .icon-border {
            height: 6rem;
            width: 6rem;
            border: 1px solid rgb(209, 75, 51);
            border-radius: 100%;
            padding: 1px;
            margin-bottom: 2rem;
            text-align: center;
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
            padding-top: 5rem;
            margin-top: -6rem !important;
            padding-bottom: 10rem !important;


        }

        .card-container {
            position: relative;
        }

        .caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 20%);
            text-align: center;
            font-size: 1.7rem;
            opacity: 0;
            transition: all .5s;
            backface-visibility: hidden;
        }

        .card-container:hover .caption {
            opacity: 1;
            transform: translate(-50%, -50%);
        }

        .card-img-top {
            transform: translate(0rem) scale(1);
            transition: all .5s;
        }

        .card-container:hover .card-img-top {
            transform: translate(0rem) scale(0.98);
            filter: blur(6px) brightness(70%);
        }

        .card-container:hover .card-body-text {
            transform: translate(0rem) scale(0.98);
            filter: blur(6px) brightness(70%);
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

    <style>
        .flash-message {
            position: absolute;
            top: 70px;
            right: 20px;
            z-index: 100;
        }

    </style>

    <style>
        .home-newsletter {
            padding: 80px 0;
            background: #f84e77;
        }

        .home-newsletter .single {
            max-width: 650px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .home-newsletter .single h2 {
            font-size: 22px;
            color: white;
            text-transform: uppercase;
            margin-bottom: 40px;
        }

        .home-newsletter .single .form-control {
            height: 50px;
            background: rgba(255, 255, 255, 0.6);
            border-color: transparent;
            border-radius: 20px 0 0 20px;
        }

        .home-newsletter .single .form-control:focus {
            box-shadow: none;
            border-color: #243c4f;
        }

        .home-newsletter .single .btn {
            min-height: 50px;
            border-radius: 0 20px 20px 0;
            background: #243c4f;
            color: #fff;
        }

    </style>
</head>

<body>
    @if ($flash = session('message'))

        <div id="flash-message" class="alert alert-success flash-message mt-4" role="alert">

            {{ $flash }}

        </div>

    @endif
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
        <nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top scrolled fixed-top shadow-lg small" id="header">
            <img src="{{ asset('/images/scribelogo.svg') }}" alt="" width="5%" class="ml-4">
            <a class="navbar-brand ml-4" href="{{ url('/') }}">Scribe House</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav ml-auto p-3 mr-4">
                    <li class="nav-item active">
                        <a class="nav-link ml-4" href="{{ url('/#home') }}"> Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-4" href="{{ url('/#about') }}">About <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-4" href="{{ url('/#services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-4" href="{{ url('/#blogs') }}">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-4 " href="{{ url('/#team') }}">Team</a>
                    </li>
                    <li class="nav-item mr-4 ">
                        <a class="nav-link ml-4 " href="{{ url('/#contact') }}">Contact</a>
                    </li>
                    {{-- <li class="nav-item dropdown"> --}}
                    {{-- <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a> --}}
                    {{-- <div class="dropdown-menu" aria-labelledby="dropdown04"> --}}
                    {{-- <a class="dropdown-item" href="#">Action</a> --}}
                    {{-- <a class="dropdown-item" href="#">Another action</a> --}}
                    {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                    {{-- </div> --}}
                    {{-- </li> --}}
                </ul>
            </div>
        </nav>
    </section>

    <section class="about" id="about">
        <h1 class="text-center s-title">About Us</h1>
        <div class="ab-border"></div>
        <div class="about-info container">
            <p>We love books. We love books good books. We love words, and the different ways in which words can be
                published. That’s
                why our mission is to help you publish your content well.</p>

            <p> Recognising the scarcity of excellent, affordable editors in Uganda and Africa, Scribe House provides
                professional
                editing, and book production services. We offer publishing and promotional advice to firms and
                individuals across the
                continent. Publishing consultancies and editorial services are comfortably transacted online, making it
                easy for us to
                serve you wherever you are.</p>

            <p>We are a home for scribes.<br>
                A scribe’s house.<br>
                Scribe House.</p>
            {{-- {!! $services->about ?? "" !!} --}}
        </div>
    </section>
    <section class="services mb-4" id="services">
        <div class="title mt-4">
            <h1 class="text-center text-white mt-4">Our Services</h1>
            <div class="s-border"></div>
        </div>

        <div class="service-cards">
            <div class="row">
                <div class="d-flex justify-content-center flex-column flex-md-row">
                    <div class="col-sm-4">
                        <div class="service-card mb-4 shadow-lg">
                            <div class="icon-border">
                                <i class="fas fa-couch s-icon"></i>
                            </div>
                            <h4 class="s-title">Production Management</h4>
                            <p class="text-justify">
                                You have written. We have edited. You would like to produce your content in the best
                                possible format, and sell it. But
                                you don’t know how to. Scribe House will tell you how, and do it for you even, at an
                                affordable cost. We will link you
                                up with competent service providers at each step of production, overseeing the book
                                design and printing processes (or
                                digital book development). We can walk you through your publishing journey, right from
                                the time we receive your
                                manuscript, to the time it is positioned at strategic selling points.
                                Contact us for details about our
                                rates. <br><br>
                                {{-- {!! $services->services1 ?? "" !!} --}}
                            </p>
                        </div>

                    </div>
                    <div class="col-sm-4 mb-4">
                        <div class="service-card shadow-lg">
                            <div class="icon-border">
                                <i class="fas fa-pen-nib s-icon"></i>
                            </div>
                            <h4 class="s-title">Editorial</h4>
                            <p class="text-justify">
                                We offer a wide range of editorial solutions for print and online copy. We edit fiction
                                and general non-fiction trade
                                books, short stories, magazines, poetry, reports, and academic papers. ‘Editing’
                                includes the full works; development
                                editing, copy-editing, proofreading, fact-checking, cross-checking permissions,
                                indexing, transcribing audios; all the
                                editorial steps needed to prepare your publication for the international market. Our
                                team also includes professional
                                writers who are able to undertake ghost-writing projects. Our values are founded on
                                Christian principles, and thus we
                                work with any fiction or non-fiction content that does not conflict Biblical theism.
                                {{-- {!! $services->services2 ?? "" !!} --}}
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-4">
                        <div class="service-card shadow-lg">
                            <div class="icon-border">
                                <i class="fas fa-baby s-icon"></i>
                            </div>
                            <h4 class="s-title">Junior Scribes</h4>
                            <p class="text-justify">
                                The cry of many over the years has been ‘Africans have a poor reading culture.’ Putting
                                aside the arguments justifying
                                or defying this cry, we are firm believers that charity starts at home. What better way
                                to grow and encourage the
                                reading culture in this country and continent, than by starting with our children?
                                Scribe House promotes and publishes
                                literature for youths from 0-14yrs. We have partnered with TWOG Games, a company that
                                creates word games for toddlers
                                and ‘tweens’. The Junior Scribes programmes and TWOG games provide fun, interactive
                                ‘word-ertainment’ for children and
                                tweens.
                                {{-- {!! $services->services3 ?? "" !!} --}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section class="t-team mt-4 pt-4 py-4" id="team">
        <div class="title text-white mt-4" style="padding-top: 5rem;">
            <h1 class="mt-4">Our Team</h1>
            <div class="t-border"></div>
        </div>
        <div class="row">
            <div class="d-flex flex-column flex-md-row justfiy-content-center t-cards">
                <div class="col-sm-4">
                    <div class="card mb-4 card-container" style="width: 20rem;">
                        <img class="card-img-top" src="{{ asset('images/img1.jpg') }}" alt="Card image cap">
                        <figcaption class="caption text-white">CRYSTAL <p> Publishing Director
                            <p>
                        </figcaption>
                        <div class="card-body card-body-text">
                            <p class="card-text text-danger">Crystal</p>
                            <p class="card-text">Publishing Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card mb-4 card-container" style="width: 20rem;">
                        <img class="card-img-top" src="{{ asset('images/img2.jpg') }}" alt="Card image cap">
                        <figcaption class="caption text-white">CAROLE <p> Administrative Director
                            <p>
                        </figcaption>
                        <div class="card-body card-body-text">
                            <p class="card-text text-danger">Carole</p>
                            <p class="card-text">Administrative Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card mb-4 card-container" style="width: 20rem;">
                        <img class="card-img-top" src="{{ asset('images/img3.jpg') }}" alt="Card image cap">
                        <figcaption class="caption text-white">FAITH <p> Managing Editor
                            <p>
                        </figcaption>
                        <div class="card-body card-body-text">
                            <p class="card-text text-danger">Faith</p>
                            <p class="card-text">Managing Editor</p>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-sm-3">
                    <div class="card mb-4" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/member3.jpeg')}}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text text-danger">Charles</p>
                    <p class="card-text">Junior Scribes Coordinator</p>
                </div>
            </div>
        </div> --}}
            </div>

        </div>
    </section>

    <section class="blogs mt-4" id="blogs">
        <div class="title">
            <h1 class="text-center mt-4">Latest News</h1>
            <div class="b-border "></div>
        </div>
        <div class="row p-4 justify-content-center">
            @forelse ($blogs as $blog)
                <div class="col-sm-2">
                    <div class="card mb-4">
                        {{-- <img src="{{asset('images/blog1.jpeg')}}" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <span class="posted-on small">Posted on : <br> <span
                                    class="text-danger small">{{ date('F', mktime(0, 0, 0, now()->month, 1)) }}
                                    {{ now()->weekOfYear }}, {{ now()->year }}
                                    |
                                    {{ $blog->category }}</span></span> <br>
                            <p class="card-text">{!! \Illuminate\Support\Str::limit($blog->body, 150) !!}
                            </p> <br>
                            <a href="{{ url('/blogs?id=' . $blog->id) }}" class="text-primary"> Read
                                more
                                ...</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-sm-12">
                    <p>There are no blogs at the moment</p>
                </div>

            @endforelse
            <div class="cta p-4 text-center w-100">
                <div class="btn border-bottom text-center text-primary">
                    <a href="{{ url('/view-all-blogs') }}">See all our Blogs <svg width="1em" height="1em"
                            viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z" />
                        </svg> </a>
                </div>
            </div>
        </div>
    </section>

    <section class="clients mb-4 ">
        <div class="row bg-danger text-white">
            <div class="col-sm-12">
                <div class="title mt-4 d-flex justify-content-center align-items-center flex-column">
                    <h1 class="text-center mt-4 mb-4">What People Say ...</h1>
                    <div class="s-border"></div>
                </div>
            </div>
        </div>
        <div class="lead">
            <p class="text-center p-4 lead">
                Scribe House is recommended by hundreds <br> upon hundreds of authors.
            </p>
        </div>
        <div class="mt-4 mb-4 ml-2 mr-2">
            <div class="row">
                <div class="col-sm-4">
                    <div class="panels ml-4 mt-4 shadow-lg mb-5 bg-white rounded">
                        <div class="up">
                            <div class="icon ml-2 mt-4">
                                <i class="fas fa-quote-left text-primary p-2" style="font-size: 2rem; opacity:0.3"></i>
                            </div>
                            <p class="p-4">I’ve been working with Scribe House for three years now
                                and I am just
                                thrilled,
                                very delighted, with the thorough
                                scrutiny, quick responsiveness of their service and high-quality editorial
                                and
                                publication skills.
                                Crystal’s abilities
                                as the team lead have been a great value add to my journey as a published
                                poet!</p>
                        </div>
                        <div class="down bg-primary text-white d-flex align-items-center w-auto rounded"
                            style="height: 100px;">
                            <div class="client_image ml-4">
                                <img class="avatar" src="images/ronald.jpeg" alt=""
                                    style="height: 80px; width: 80px; border-radius: 100%">
                            </div>
                            <div class="info ml-2 p-2">
                                <span class="small big">Ronald K Ssekajja,</span> <br><span
                                    class="big">Poet &
                                    Author.</span>
                            </div>
                            <div class="link ml-auto mr-4">
                                <i class="fab fa-twitter"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panels ml-4 mt-4 shadow-lg mb-5 bg-white rounded">
                        <div class="up">
                            <div class="icon ml-2 mt-4">
                                <i class="fas fa-quote-left text-success p-2" style="font-size: 2rem; opacity:0.3"></i>
                            </div>
                            <p class="p-4">I am so grateful to have had my book done through a professional
                                and
                                competant
                                publisher as Scribe House.. It is
                                excellent and my book is doing so well..</p>
                        </div>
                        <div class="down bg-success text-white d-flex align-items-center w-auto rounded"
                            style="height: 100px;">
                            <div class="client_image ml-4">
                                <img class="avatar" src="images/size3-book.jpeg" alt=""
                                    style="height: 80px; width: 80px; border-radius: 100%">
                            </div>
                            <div class="info ml-2 p-2">
                                <span class="small big">Phlynne,</span> <br><span class="big">
                                    Author</span>
                            </div>
                            <div class="link ml-auto mr-4">
                                <i class="fab fa-twitter"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panels mr-4 mt-4 shadow-lg mb-5 bg-white rounded">
                        <div class="up">
                            <div class="icon ml-2 mt-4">
                                <i class="fas fa-quote-left text-warning p-2" style="font-size: 2rem; opacity:0.3"></i>
                            </div>
                            <p class="p-4">If I had to recommend a way of becoming a great author in the
                                world
                                today, it would
                                be publishing with @scribehouse.</p>
                        </div>
                        <div class="down bg-warning text-white d-flex align-items-center w-auto rounded"
                            style="height: 100px;">
                            <div class="client_image ml-4">
                                <img class="avatar" src="images/billions.jpeg" alt=""
                                    style="height: 80px; width: 80px; border-radius: 100%">
                            </div>
                            <div class="info ml-2 p-2">
                                <span class="small big">Billions,</span> <br><span class="big">
                                    Software Eng.</span>
                            </div>
                            <div class="link ml-auto mr-4">
                                <i class="fab fa-twitter"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-primary btn-lg text-white" style="width:15rem; border-radius: 100px;"
                    href="#services">Join
                    Others <i class="fas fa-long-arrow-alt-right ml-2"></i></a>
            </div>
        </div>
    </section>

    <section class="gallery" style="margin-left: 3rem;">
        <div class="title">
            <h1 class="text-center">Latest Books</h1>
            <div class="bks-border mb-4"></div>
        </div>
        <div class="___class_+?161___">
            <div class="row">
                @forelse ($covers as $cover)
                    <div class="col-sm-4">
                        <div class="card" style="width: 20rem; margin-bottom:3rem;">
                            <img class="card-img-top" src="{{ url('images/bookcovers/' . $cover->image) }}"
                                alt="Card image cap" style="height: 100%; width: 100%; object-fit: contain">
                            <div class="card-body">
                                <h5 class="card-title">{{ $cover->title }}</h5>
                                <a href="#" class="i small">Author : <span
                                        class="text-info">{{ $cover->author }}</span></a>
                                <a href="{{ url('/covers?id=' . $cover->id) }}"
                                    class="btn btn-primary btn-block">Intrested</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-sm-3">
                        There are no book covers at the moment.
                    </div>
                @endforelse
            </div>

            <div class="cta p-4 text-center w-100">
                <div class="btn border-bottom text-center text-primary">
                    <a href="{{ url('/covers') }}">See all books <svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-arrow-right-circle-fill" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z" />
                        </svg> </a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-newsletter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="single">
                        <h2>Subscribe to our Newsletter</h2>
                        <div class="text-center lead">
                            <p class="lead text-light">Want us to email you occasionally <br> with Scribe House
                                news?</p>
                        </div>
                        <div class="mt-2 mb-2">
                            <form class="mt-4" method="POST" action="{{ url('/subscribe') }}">
                                @csrf
                                <div class=" input-group">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Enter your email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-theme" type="submit">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
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
                <form method="POST" action="{{ url('/messages') }}">
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
                                <input type="text" name="phone" class="form-control"
                                    placeholder="Your Phone Number *" value="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Your Message *"
                                    style="width: 100%; height: 150px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="sendMessage" class=i small"" Authour - value="Send Message" />
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
                            <img src="{{ asset('images/scribelogo.svg') }}" alt="footer_logo"
                                class="___class_+?210___" height="100px">
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
                                    <a href="{{ url('https://www.facebook.com/scribehouse') }}">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('https://twitter.com/scribehouse') }}">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('https://www.instagram.com/scribehouse') }}">
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
                                    {{-- <h2>Kiira</h2> --}}
                                    <h5>Kampala, Uganda.</h5>
                                    <p> scribehouse.ug@gmail.com <br> info@scribehouse.ug</p>
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
                                    <h3>+256(0)781 887 520.</h3>
                                    {{-- <h3>(+256)-702-152894</h3> --}}
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
                                        <a href="{{ url('/#about') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/#services') }}">Services</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/#gallery') }}">Projects</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/#team') }}">Our Team</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="{{ url('/#contact') }}">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/#gallery') }}">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/#clients') }}">Clients</a>
                                    </li>
                                    <li>
                                        <a href="{{ '/#why' }}">Why Scribe House</a>
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
                                    Subscribe to our news-letter to receive more updates and offers.
                                </p>
                                <form method="POST" action="{{ url('/subscribe') }}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col dk-footer-form">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Email Address">
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


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</body>
<script>
    setTimeout(function() {
        $('#flash-message').fadeOut('slow');
    }, 3000);
</script>

<script>
    $(function() {
        $(document).scroll(function() {
            var $nav = $(".navbar-fixed-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    });

    let modalId = $('#image-gallery');

    $(document)
        .ready(function() {

            loadGallery(true, 'a.thumbnail');

            //This function disables buttons when needed
            function disableButtons(counter_max, counter_current) {
                $('#show-previous-image, #show-next-image')
                    .show();
                if (counter_max === counter_current) {
                    $('#show-next-image')
                        .hide();
                } else if (counter_current === 1) {
                    $('#show-previous-image')
                        .hide();
                }
            }

            /**
             *
             * @param setIDs Sets IDs when DOM is loaded. If using a PHP counter, set to false.
             * @param setClickAttr Sets the attribute for the click handler.
             */

            function loadGallery(setIDs, setClickAttr) {
                let current_image,
                    selector,
                    counter = 0;

                $('#show-next-image, #show-previous-image')
                    .click(function() {
                        if ($(this)
                            .attr('id') === 'show-previous-image') {
                            current_image--;
                        } else {
                            current_image++;
                        }

                        selector = $('[data-image-id="' + current_image + '"]');
                        updateGallery(selector);
                    });

                function updateGallery(selector) {
                    let $sel = selector;
                    current_image = $sel.data('image-id');
                    $('#image-gallery-title')
                        .text($sel.data('title'));
                    $('#image-gallery-image')
                        .attr('src', $sel.data('image'));
                    disableButtons(counter, $sel.data('image-id'));
                }

                if (setIDs == true) {
                    $('[data-image-id]')
                        .each(function() {
                            counter++;
                            $(this)
                                .attr('data-image-id', counter);
                        });
                }
                $(setClickAttr)
                    .on('click', function() {
                        updateGallery($(this));
                    });
            }
        });

    // build key actions
    $(document)
        .keydown(function(e) {
            switch (e.which) {
                case 37: // left
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                        $('#show-previous-image')
                            .click();
                    }
                    break;

                case 39: // right
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                        $('#show-next-image')
                            .click();
                    }
                    break;

                default:
                    return; // exit this handler for other keys
            }
            e.preventDefault(); // prevent the default action (scroll / move caret)
        });
</script>

</html>
