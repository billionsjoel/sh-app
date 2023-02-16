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
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *"
                                value="" />
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
