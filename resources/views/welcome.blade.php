<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!--
Our color pallette

053742- thick
39A2DB - blue
A2DBFA - Light blue
E8F0F2 - very light
  -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Scribe house publishing agency Africa">
    <meta name="author" content="Scribe house, Crystal butungi, and Publishing in uganda">
    <title>Scribehouse</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

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

    <script type="text/javascript">
        $(window).on('load', function() {
            $('#staticBackdrop').modal('show');
        });
    </script>

    <?php
    use Carbon\Carbon;
    ?>

    <!-- Styles -->


</head>

<body>

    @if ($flash = session('message'))
        --}}

        <div id="flash-message" class="alert alert-success flash-message mt-4" role="alert">

            {{ $flash }}

        </div>
    @endif

    @include('components.header')

    <section>
        <nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top scrolled fixed-top shadow-lg small"
            id="header">
            <img src="{{ asset('/images/scribelogo.svg') }}" alt="" width="5%" class="ml-4">
            {{-- <a class="navbar-brand ml-4" href="{{ url('/') }}">Scribe House</a> --}}
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
                        <a class="nav-link ml-4" href="{{ url('/#covers') }}">Our Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-4" href="{{ url('/#about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-4" href="{{ url('/#services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-4" href="{{ url('/covers') }}">Book Covers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-4" href="{{ url('/view-all-blogs') }}">Blogs</a>
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

    <section class="books" id="covers">
        <div class="content ">
            <div class="row">
                <div class="col-sm-8">
                    <div class="left">
                        <div class="l-content">
                            <div class="heading display-3">In the beginning was the <span class="blue"> word ...
                                </span>
                            </div>
                            {{-- <div class="lb-paragraph">Start with a goal, get a plan, and set targets for that goal.
                                SCRIBE HOUSE
                                focuses
                                on
                                helping you achieve your desired goal.</div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="right">
                        <div class="r-content">
                            <div class="b-icon"><a href="{{ url('/covers') }}" class="text-decoration-none"><i
                                        class="fas fa-caret-right"></i></a></div>
                            <div class="title">
                                <h5> <a href="{{ url('/covers') }}" class="text-black text-decoration-none">OUR
                                        WORKS</a> </h5>
                            </div>
                            <div class="image">
                                <a href="{{ url('/covers') }}" class="text-decoration-none"><img class="b-image"
                                        src="{{ asset('images/bookcovers/book3.jpeg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mt-4">
                <div class="wrapper">
                    <div class="outer">
                        <img class="b-img shadow" src="{{ asset('images/bookcovers/bishop-luke-orombi.jpg') }}"
                            alt="Bishop Luke Orombi">
                        <div class="chev"><i class="fa fa-angle-right chev-color"></i></div>
                    </div>
                    <div class="inner">
                        <div class="title mt-3">
                            <h5 class="text-white">His Grace</h5>
                        </div>
                        <div class="description  text-center p-2">The autobiography of Bishop Henry Luke Orombi.</div>
                        <a href="{{ url('covers') }}" class="btn btn-book shadow mb-3">&nbsp;&nbsp;Buy Book
                            &nbsp;&nbsp;<i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="wrapper">
                    <div class="outer">
                        <img class="b-img shadow" src="{{ asset('images/bookcovers/kiima.jpg') }}"
                            alt="Say No To Fear">
                        <div class="chev"><i class="fa fa-angle-right chev-color"></i></div>
                    </div>
                    <div class="inner">
                        <div class="title mt-3">
                            <h5 class="text-white">Say No to Fear</h5>
                        </div>
                        <div class="description text-center p-2">Learn to overcome five of our most common fears.</div>
                        <a href="{{ url('covers') }}" class="btn btn-book shadow mb-3">&nbsp;&nbsp;Buy Book
                            &nbsp;&nbsp;<i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="wrapper">
                    <div class="outer">
                        <img class="b-img shadow" src="{{ asset('images/bookcovers/benjamin.png') }}"
                            alt="Benjamin photo">
                        <div class="chev"><i class="fa fa-angle-right chev-color"></i></div>
                    </div>
                    <div class="inner">
                        <div class="title mt-3">
                            <h5 class="text-white text-center">Emonevate</h5>
                        </div>
                        <div class="description text-center p-2">A poetry collection that will move you from an
                            emotional rollercoaster to faith in God.</div>
                        <a href="{{ url('covers') }}" class="btn btn-book shadow mb-3">&nbsp;&nbsp;Buy Book
                            &nbsp;&nbsp;<i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="wrapper">
                    <div class="outer">
                        <img class="b-img shadow mb-3" src="{{ asset('images/bookcovers/truck-driver.png') }}"
                            alt="truck-driver">
                        <div class="chev"><i class="fa fa-angle-right chev-color"></i></div>

                    </div>
                    <div class="inner">
                        <div class="title mt-3">
                            <h5 class="text-white">Truck Driver</h5>
                        </div>
                        <div class="description text-center p-2">A creative non-fictional story of the life of an East
                            African truck driver.
                        </div>
                        <a href="{{ url('covers') }}" class="btn btn-book shadow mb-3">&nbsp;&nbsp;Buy Book
                            &nbsp;&nbsp;<i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="about" id="about">
        <h1 class="text-center s-title blue">About Us</h1>
        <div class="ab-border light-blue"></div>
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
        <div class="row" style="align-content: center;display: flex;justify-content: center;">
            <div class="d-flex flex-column flex-md-row justfiy-content-center t-cards">
                <div class="col-sm-3">
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
                <div class="col-sm-3">
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
                <div class="col-sm-3">
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

                <div class="col-sm-3">
                    <div class="card mb-4 card-container" style="width: 20rem;">
                        <img class="card-img-top" src="{{ asset('https://picsum.photos/200/300/?blur') }}"
                            alt="Card image cap">
                        <figcaption class="caption text-white">Jane <p> Administrative Assistant
                            <p>
                        </figcaption>
                        <div class="card-body card-body-text">
                            <p class="card-text text-danger">Jane</p>
                            <p class="card-text">Administrative Assistant</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="d-flex flex-column flex-md-row justfiy-content-center t-cards">
                    <div class="col-sm-3">
                        <div class="card mb-4 card-container" style="width: 20rem;">
                            <img class="card-img-top" src="{{ asset('images/joseph.jpg') }}" alt="Card image cap">
                            <figcaption class="caption text-white">JOSEPH (PhD) <p> Academic Publishing Consultant </p>
                            </figcaption>
                            <div class="card-body card-body-text">
                                <p class="card-text text-danger">Joseph (PhD)</p>
                                <p class="card-text"> Academic Publishing Consultant</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card mb-4 card-container" style="width: 20rem;">
                            <img class="card-img-top" src="{{ asset('images/patricia.jpg') }}" alt="Card image cap">
                            <figcaption class="caption text-white">PATRICIA <p>Writer | Associate Editor | Poetry
                                    Editor
                                <p>
                            </figcaption>
                            <div class="card-body card-body-text">
                                <p class="card-text text-danger">Patricia</p>
                                <p class="card-text">Writer | Associate Editor | Poetry Editor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card mb-4 card-container" style="width: 20rem;">
                            <img class="card-img-top" src="{{ asset('images/hassan.jpg') }}" alt="Card image cap">
                            <figcaption class="caption text-white"> HASSAN<p> Writer | Editor
                                </p>
                            </figcaption>
                            <div class="card-body card-body-text">
                                <p class="card-text text-danger">Hassan</p>
                                <p class="card-text">Writer | Editor</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card mb-4 card-container" style="width: 20rem;">
                            <img class="card-img-top" src="{{ asset('images/Lule.jpg') }}" alt="lule's image">
                            <figcaption class="caption text-white">SSEBO LULE <p>Poetry Editor </p>
                            </figcaption>
                            <div class="card-body card-body-text">
                                <p class="card-text text-danger">Ssebo Lule</p>
                                <p class="card-text">Poetry Editor</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="d-flex flex-column flex-md-row justfiy-content-center t-cards">
                    <div class="col-sm-3">
                        <div class="card mb-4 card-container" style="width: 20rem;">
                            <img class="card-img-top" src="{{ asset('images/correen.jpg') }}" alt="Card image cap">
                            <figcaption class="caption text-white">COREEN <p> (Founder of KempiihArt)
                                    Illustrator and Book Design Partner
                                <p>
                            </figcaption>
                            <div class="card-body card-body-text">
                                <p class="card-text text-danger">Coreen</p>
                                <p class="card-text">
                                    Illustrator and Book Design Partner</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        {{-- <div class="card mb-4 card-container" style="width: 20rem;">
                            <img class="card-img-top" src="{{ asset('images/hassan.jpg') }}" alt="Card image cap">
                            <figcaption class="caption text-white">HASSAN <p> Writer | Editor
                                <p>
                            </figcaption>
                            <div class="card-body card-body-text">
                                <p class="card-text text-danger">Hassan</p>
                                <p class="card-text">Writer | Editor</p>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-sm-3">
                        <div class="card mb-4 card-container" style="width: 20rem;">
                            <img class="card-img-top" src="{{ asset('images/henry.jpg') }}" alt="Card image cap">
                            <figcaption class="caption text-white">HENRY <p> (Founder of ArmUp Media)
                                    Book Design Partner
                                <p>
                            </figcaption>
                            <div class="card-body card-body-text">
                                <p class="card-text text-danger">Henry</p>
                                <p class="card-text">
                                    Book Design Partner</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        {{-- <div class="card mb-4 card-container" style="width: 20rem;">
                            <img class="card-img-top" src="{{ asset('images/henry.jpg') }}" alt="Card image cap">
                            <figcaption class="caption text-white">HENRY <p> (Founder of ArmUp Media)
                                    Book Design Partner
                                <p>
                            </figcaption>
                            <div class="card-body card-body-text">
                                <p class="card-text text-danger">HENRY</p>
                                <p class="card-text">
                                    Book Design Partner</p>
                            </div>
                        </div> --}}
                    </div>
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
                <div class="col-md-2">
                    <div class="card mb-4">
                        {{-- <img src="{{asset('images/blog1.jpeg')}}" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <span class="posted-on small">Posted on : <br> <span
                                    class="text-danger small">{{ $blog->created_at }}
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
                Scribe House is recommended by <br> many authors.
            </p>
        </div>
        <div class="mt-4 mb-4 ml-2 mr-2">
            <div class="row">
                <div class="col-sm-4">
                    <div class="panels ml-4 mt-4 shadow-lg mb-5 bg-white rounded">
                        <div class="up">
                            <div class="icon ml-2 mt-4">
                                <i class="fas fa-quote-left text-primary p-2"
                                    style="font-size: 2rem; opacity:0.3"></i>
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
                                <span class="small big">Ronald K Ssekajja,</span> <br><span class="big">Poet &
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
                                <i class="fas fa-quote-left text-success p-2"
                                    style="font-size: 2rem; opacity:0.3"></i>
                            </div>
                            <p class="p-4 mt-5 mb-4">I am so grateful to have had my book done through a professional
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
                                <i class="fas fa-quote-left text-warning p-2"
                                    style="font-size: 2rem; opacity:0.3"></i>
                            </div>
                            <p>&nbsp;</p>

                            <p class="p-4 mt-3 mb-2">If I had to recommend a way of becoming a great author in the
                                world
                                today, it would
                                be publishing with @scribehouse.</p>
                            <p>&nbsp;</p>
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
                                    class="btn btn-primary btn-block">Interested</a>
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
                    <a href="{{ url('/covers') }}">See all books <svg width="1em" height="1em"
                            viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" fill="currentColor"
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

    <section class="contact mb-0">
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
                                <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="form-group push-right">
                                <input type="submit" id="sendMessage" class="btn btn-primary mt-4 ml-2 btn-rounded"
                                    value="Send Message" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('layouts.footer')

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
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
