<section id="contact" class="section section-height-3 bg-light border border-bottom-0 m-0" style="background-image: url(img/patterns/blizzard.png); background-repeat: repeat;">
    <div class="container">

        <div class="row py-4">
            <div class="col-lg-6">
                <h2 class="font-weight-bold text-7 mt-2 mb-0">Join Us</h2>
                <p class="mb-4">Join our amazing team at iguruweb</p>

                <form class="contact-form" action="{{ route('join.submit') }}" method="POST">
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
        </div>

    </div>
</section>