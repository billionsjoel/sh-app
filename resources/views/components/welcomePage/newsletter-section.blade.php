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
