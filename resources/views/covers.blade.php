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
    {{-- <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
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
    </script> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body>
    {{-- <amp-auto-ads type="adsense" data-ad-client="ca-pub-6271400531285389">
    </amp-auto-ads> --}}
    <section>
        @include('components.welcomePage.navbar')
    </section>

    {{-- code ads --}}
    {{-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6271400531285389"
                                    crossorigin="anonymous"></script>
                                <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed"
                                    data-ad-client="ca-pub-6271400531285389" data-ad-slot="4676939541"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || [])
                                    .push({});
                                </script> --}}

    <section style="margin-top:150px; margin-bottom:150px;">
        <div class="container">
            <div class="row">
                @forelse ($covers as $cover)
                    <div class="col-md-4 py-2" style="width: 26rem;">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{ $cover->title }}</h4>
                            </div>
                            <img class="card-img-top" src="{{ asset('/images/bookcovers/' . $cover->image) }}"
                                alt="Card image cap" style="height: 100%; width: 100%; object-fit: contain">
                            <div class="card-body">
                                <h5 class="card-title">Book Description</h5>
                                <p class="card-text">{!! $cover->description !!}</p>
                                <div
                                    class="small text-info lead d-flex justify-content-center align-items-center border-bottom border-top">
                                    <p class="text-success me-2 p-2 flex-fill pt-3">Genre </p>
                                    <p class="pt-1">{{ ucwords(strtolower($cover->genre)) }}</p>
                                </div>
                                <div
                                    class="small text-info lead d-flex justify-content-center align-items-center border-bottom">
                                    <p class="text-success me-2 p-2 pt-3 flex-fill">Publisher </p>
                                    <p class="pt-2">
                                        {{ ucwords(strtolower($cover->publisher)) }}</p>
                                </div>
                                <div
                                    class="small text-info lead d-flex justify-content-center align-items-center border-bottom">
                                    <p class="text-success me-2 p-2 pt-2 flex-fill">Book Cover
                                    </p>
                                    <p class="pt-2">
                                        {{ ucwords(strtolower($cover->design)) }}</p>
                                </div>
                                <div class="small lead d-flex justify-content-center align-items-center border-bottom">
                                    <p class="text-success me-2 p-2 pt-2 flex-fill">Author
                                    </p>
                                    <p class="text-info pt-2">{{ ucwords(strtolower($cover->author)) }}</p>
                                </div>
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
