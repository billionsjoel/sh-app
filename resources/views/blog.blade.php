<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog</title>

    <!-- Bootstrap core CSS -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96832486-1"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6271400531285389"
        crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-96832486-1');
    </script> --}}
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/blog-post.css') }}" rel="stylesheet">
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            font-family: "Poppins", sans-serif;
            line-height: 1.15;
            scroll-behavior: smooth;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            overflow-x: hidden;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }
    </style>
    <style>
        .navbar-fixed-top.scrolled {
            background-image: linear-gradient(to right, rgba(3, 90, 166, 0.85), rgba(64, 186, 213, 0.85)) !important;
            transition: background-color 200ms linear;
        }

        section {
            font-family: "Poppins", sans-serif, !important;
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
        .flash-message {
            position: absolute;
            top: 70px;
            right: 20px;
            z-index: 100;
        }
    </style>

</head>

<body>
    {{-- <amp-auto-ads type="adsense" data-ad-client="ca-pub-6271400531285389">
    </amp-auto-ads> --}}

    @if ($flash = session('message'))
        <div id="flash-message" class="alert alert-success flash-message mt-4" role="alert">

            {{ $flash }}

        </div>
    @endif
    @if ($errors->any())
        <div id="flash-message" class="alert alert-danger flash-message mt-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="p-1">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Navigation -->
    <section>
        <nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top scrolled fixed-top shadow-lg small"
            id="header">
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

    <!-- Page Content -->
    <div class="container" style="margin-top: 8%;">

        @forelse($blogs as $blog)
            <div class="row mt-4">

                <!-- Post Content Column -->
                <div class="col-lg-8">

                    <!-- Title -->
                    <h1 class="mt-4">{{ $blog->title ?? '' }}</h1>

                    <!-- Author -->
                    <p class="lead">
                        By :
                        <a href="#">{{ $blog->author ?? '' }}</a>
                    </p>

                    <hr>

                    <!-- Date/Time -->
                    <p>Posted on :
                        <span class="text-primary">
                            {{ date('d-m-Y', strtotime($blog->created_at)) ?? '' }} <span
                                class="text-dark ml-4">Category :
                            </span>
                            {{ $blog->category ?? '' }}</span>
                    </p>
                    </span>
                    <hr>

                    <!-- Preview Image -->
                    <img class="img-fluid rounded" src="{{ asset('images/articles/' . $blog->image) }}"
                        alt={{ $blog->image }}>
                    <hr>

                    <!-- Post Content -->
                    <p class="lead">
                        {{-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6271400531285389"
                            crossorigin="anonymous"></script>
                        <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed"
                            data-ad-client="ca-pub-6271400531285389" data-ad-slot="4676939541"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || [])
                            .push({});
                        </script> --}}
                        {!! $blog->body ?? '' !!}
                    </p>

                    {{-- <blockquote class="blockquote"> --}}
                    {{-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p> --}}
                    {{-- <footer class="blockquote-footer">Someone famous in --}}
                    {{-- <cite title="Source Title">Source Title</cite> --}}
                    {{-- </footer> --}}
                    {{-- </blockquote> --}}

                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p> --}}

                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p> --}}
                    <div class="card my-4">
                        <h5 class="card-header">Leave a Comment:</h5>
                        <div class="card-body">
                            <form action="{{ url('/comments/' . $blog->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="username ">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" name="comment" placeholder="comment"></textarea>
                                </div>
                                <input class="btn btn-primary" type="submit">
                            </form>
                        </div>
                    </div>
                @empty
                    <div class="row mt-4">
                        <div class="col-lg-8 mt-4">
                            <div class="container" style="margin-top: 8%;">

                                <div class="row mt-4">

                                    <!-- Post Content Column -->
                                    <div class="col-lg-8">

                                        <!-- Title -->
                                        <h1 class="mt-4 text-center">Oops.. Sorry!</h1>

                                        <!-- Author -->
                                        <p class="lead">

                                            <a href="#"></a>
                                        </p>



                                        <!-- Date/Time -->
                                        <p>Unfortunately, there are no blogs associated with this title, id or
                                            category.</p>

                                        <hr>

                                        <!-- Preview Image -->
                                        <img class="img-fluid rounded" src="{{ asset('images/sorry.png') }}"
                                            alt="blog image">
                                        <hr>

                                        <!-- Post Content -->
                                        <p class="lead">
                                            Please choose another blog from the featured blog panel.
                                        </p>

                                        {{-- <blockquote class="blockquote"> --}}
                                        {{-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p> --}}
                                        {{-- <footer class="blockquote-footer">Someone famous in --}}
                                        {{-- <cite title="Source Title">Source Title</cite> --}}
                                        {{-- </footer> --}}
                                        {{-- </blockquote> --}}

                                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p> --}}

                                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p> --}}



                                        <hr>

                                        <!-- Comments Form -->


                                        <!-- Single Comment -->
                                        <div class="media mb-4">
                                            {{-- <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt=""> --}}
                                            {{-- <div class="media-body"> --}}
                                            {{-- <h5 class="mt-0">Commenter Name</h5> --}}
                                            {{-- Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. --}}
                                            {{-- </div> --}}
                                        </div>

                                        <!-- Comment with nested comments -->
                                        <div class="media mb-4">
                                            {{-- <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt=""> --}}
                                            {{-- <div class="media-body"> --}}
                                            {{-- <h5 class="mt-0">Commenter Name</h5> --}}
                                            {{-- Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. --}}

                                            {{-- <div class="media mt-4"> --}}
                                            {{-- <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt=""> --}}
                                            {{-- <div class="media-body"> --}}
                                            {{-- <h5 class="mt-0">Commenter Name</h5> --}}
                                            {{-- Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. --}}
                                            {{-- </div> --}}
                                            {{-- </div> --}}

                                            {{-- <div class="media mt-4"> --}}
                                            {{-- <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt=""> --}}
                                            {{-- <div class="media-body"> --}}
                                            {{-- <h5 class="mt-0">Commenter Name</h5> --}}
                                            {{-- Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. --}}
                                            {{-- </div> --}}
                                            {{-- </div> --}}

                                            {{-- </div> --}}
                                        </div>

                                    </div>
                                </div>
                            </div>
        @endforelse

        <hr>


        <!-- Comments Form -->

        <!-- Single Comment -->
        <div class="lead mb-4">Read Comments</div>
        @forelse ($comments as $comment)
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h6 class="mt-0 text-dark">@ {{ $comment->username }}</h6>
                    <p class="alert border text-secondary">{{ $comment->comment }} <svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                            stroke="currentColor" class="w-6 h-6" height="20" width="20">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>

                    </p>
                </div>
            </div>
        @empty
            <div class="mb-4 pb-4">
                <p class="mb-4 alert alert-primary">There are no comments on this blog at the moment. Be the first to
                    comment</p>
            </div>
        @endforelse


        <!-- Comment with nested comments -->
        <div class="media mb-4">
            {{-- <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt=""> --}}
            {{-- <div class="media-body"> --}}
            {{-- <h5 class="mt-0">Commenter Name</h5> --}}
            {{-- Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. --}}

            {{-- <div class="media mt-4"> --}}
            {{-- <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt=""> --}}
            {{-- <div class="media-body"> --}}
            {{-- <h5 class="mt-0">Commenter Name</h5> --}}
            {{-- Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. --}}
            {{-- </div> --}}
            {{-- </div> --}}

            {{-- <div class="media mt-4"> --}}
            {{-- <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt=""> --}}
            {{-- <div class="media-body"> --}}
            {{-- <h5 class="mt-0">Commenter Name</h5> --}}
            {{-- Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. --}}
            {{-- </div> --}}
            {{-- </div> --}}

            {{-- </div> --}}
        </div>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4 mt-4">

        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-append">
                        <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0 ">
                            <li class="p-2">
                                <a href="#">Poems</a>
                            </li>
                            <li class="p-2">
                                <a href="#">Publishing</a>
                            </li>
                            <li class="p-2">
                                <a href="#">Editing</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li class="p-2">
                                <a href="#">Fiction</a>
                            </li>
                            <li class="p-2">
                                <a href="#">Proof Reading</a>
                            </li>
                            <li class="p-2">
                                <a href="#">Journeys</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4 mb-4">
            <h5 class="card-header">Featured Blogs</h5>
            <div class="card-body">
                @forelse($titles as $title)
                    <p>
                        <a href="{{ url('blogs?id=' . $title->id) }}">
                            {{ $title->title }}
                        </a>
                    </p>
                @empty
                    <p>No featured blogs at the moment!</p>
                @endforelse
            </div>
            {{ $titles->links() }}
        </div>

    </div>

    </div>
    <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    @include('layouts.footer')
    <script>
        setTimeout(function() {
            $('#flash-message').fadeOut('slow');
        }, 3000);
    </script>

</body>

</html>
