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
