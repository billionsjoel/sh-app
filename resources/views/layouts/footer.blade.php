    <footer id="dk-footer" class="dk-footer text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <img src="{{ asset('images/scribelogo.svg') }}" alt="footer_logo" class="___class_+?210___"
                                height="100px">
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
                                        <i class="fa fa-facebook white"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('https://twitter.com/scribehouse') }}">
                                        <i class="fa fa-twitter white"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('https://www.instagram.com/scribehouse') }}">
                                        <i class="fa fa-instagram white"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
                    {{-- <div class="footer-awarad" style="margin-top:-2rem ">
                        <img src="images/icon/best.png" alt="">
                        <p>ScribeHouse 2020</p>
                    </div> --}}
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
                                    <p> info@scribehouse.ug <br> scribehouse.ug@gmail.com</p>
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
                                    <h3> Kaddu Road, Kisaasi, Kampala.</h3>
                                    <p class="mt-2">+256 (0)781 915759.</p>
                                    <p>+256 (0)705 522273.</p>
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
