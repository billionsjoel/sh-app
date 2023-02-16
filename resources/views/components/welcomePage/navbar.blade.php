<section>
    <nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top scrolled fixed-top shadow-lg small" id="header">
        <img src="{{ asset('/images/scribelogo.svg') }}" alt="" width="5%" class="ml-4">
        {{-- <a class="navbar-brand ml-4" href="{{ url('/') }}">Scribe House</a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
            aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav ml-auto p-3 mr-4">
                <li class="nav-item active">
                    <a class="nav-link ml-4" href="{{ url('/#home') }}"> Home <span class="sr-only">(current)</span></a>
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
