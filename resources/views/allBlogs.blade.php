<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scribehouse | Book Covers</title>

    <!-- Fonts -->
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
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    <style>
        .mg-top {
            margin-top: 6rem;
        }

        .article-img {
            width: 10rem;
            height: 10rem;
            object-fit: cover;
        }
    </style>
</head>

<body>
    @include('components.welcomePage.navbar')

    <main class="container mb-4">
        <div class="row p-md-5 mb-4 text-white rounded bg-dark mg-top">
            <div class="col-md-12 px-0">
                <h1 class="display-4 fst-italic">{{ $featured->title }}</h1>
                <p class="lead my-3">{!! \Illuminate\Support\Str::limit($featured->body, 500) !!}</p>
                <p class="lead mb-0"><a href="{{ url('/blogs?id=' . $featured->id) }}"
                        class="text-white fw-bold">Continue reading...</a></p>
            </div>
        </div>

        <div class="row mb-2 d-flex justify-content-between">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative d-flex justify-content-center align-items-center">
                    <div class="col p-4 flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Latest</strong>
                        <h3 class="mb-0">{{ $latest->title }}</h3>
                        <div class="mb-1 text-muted">{{ $latest->created_at }}</div>
                        <p class="card-text mb-auto">{!! \Illuminate\Support\Str::limit($latest->body, 100) !!}</p>
                        <a href="{{ url('/blogs?id=' . $latest->id) }}" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="article-img" src="{{ asset('images/articles/' . $latest->image) }}" alt=""
                            height="100" width="100">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative d-flex justify-content-center align-items-center">
                    <div class="col p-3 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Promoted</strong>
                        <h3 class="mb-0">{{ $promoted->title }}</h3>
                        <div class="text-muted">{{ $promoted->created_at }}</div>
                        <p class="mb-auto">{!! \Illuminate\Support\Str::limit($promoted->body, 100) !!}</p>
                        <a href="{{ url('/blogs?id=' . $promoted->id) }}" class="stretched-link">Continue
                            reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="col-auto d-none d-lg-block">
                            <img class="article-img" src="{{ asset('images/articles/' . $promoted->image) }}"
                                alt="" height="100" width="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    From the ScribeHouse Lovers
                </h3>

                <article class="blog-post">
                    @forelse ($blogs as $blog)
                        <h2 class="blog-post-title">{{ $blog->title }}</h2>
                        <p class="blog-post-meta">{{ date('d-m-Y', strtotime($blog->created_at)) ?? '' }} <a
                                href="#">{{ $blog->author }}</a></p>

                        <p>{!! \Illuminate\Support\Str::limit($blog->body, 2000) !!}</p>
                        <p><a href="{{ url('/blogs?id=' . $blog->id) }}" class="text-primary">Continue
                                reading...</a></p>
                        <hr>
                    @empty
                        <p>There are currently no blogs at the moment. come back later</p>
                    @endforelse
                </article>

                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1"
                        aria-disabled="true">Newer</a>
                </nav>

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">Recognising the scarcity of excellent, affordable editors in Uganda
                            and Africa, Scribe House provides professional editing, and book production services. We
                            offer publishing and promotional advice to firms and individuals across the continent.
                            Publishing consultancies and editorial services are comfortably transacted online, making it
                            easy for us to serve you wherever you are.</p>
                        <p class="mt-1">Write to us @ <span class="text-danger">info@scribehouse.ug.</span>
                        </p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Blogs</h4>
                        <ol class="list-unstyled mb-0">
                            @forelse ($blogs as $blog)
                                <li><a href="{{ url('/blogs?id=' . $blog->id) }}">{{ $blog->title }}</a></li>
                            @empty
                                <li>There are currently no blogs at the moment. come back later</li>
                            @endforelse
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Book Covers</h4>
                        <ol class="list-unstyled">
                            @forelse ($covers as $cover)
                                <li><a href="{{ url('/covers?id=' . $cover->id) }}">{{ $cover->title }}</a></li>
                            @empty
                                <li>There are currently no blogs at the moment. come back later</li>
                            @endforelse
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        @include('layouts.footer')
    </footer>



</body>

</html>
