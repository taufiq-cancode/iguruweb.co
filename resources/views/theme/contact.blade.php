<section id="contact" class="section section-height-3 bg-light border border-bottom-0 m-0" style="background-image: url(img/patterns/blizzard.png); background-repeat: repeat;">
    <div class="container">

        <div class="row py-4">
            <div class="col-lg-6">
                <h2 class="font-weight-bold text-7 mt-2 mb-0">Get in <strong>Touch</strong></h2>
                <p class="mb-4">Feel free to ask for details, don't save any questions!</p>

                <form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="form-label mb-1 text-2">Full Name</label>
                            <input type="text" name="name" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required="">
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-label mb-1 text-2">Email Address</label>
                            <input type="email" name="email" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label mb-1 text-2">Subject</label>
                            <input type="text" name="subject" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label mb-1 text-2">Message</label>
                            <textarea maxlength="5000" name="message" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required=""></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input type="submit"  value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-6">

                <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                    <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                    <ul class="list list-icons list-icons-style-2 mt-2">
                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> Melbourne, 121 King St, Australia</li>
                        <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> (123) 456-789</li>
                        <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
                    </ul>
                </div>

                <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="950" style="animation-delay: 950ms;">
                    <h4 class="pt-5">Business <strong>Hours</strong></h4>
                    <ul class="list list-icons list-dark mt-2">
                        <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                        <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                        <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                    </ul>
                </div>

                
            </div>

        </div>

    </div>
</section>