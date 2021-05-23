@extends('landing.master_landing')

@section('content')
    @include('landing.partials_landing.nav_bar_landing')

    <div>
        <div class="section-title">
            <h2>Contact</h2>
            <p>We are glad to receive something from you</p>
        </div>

        <div class="row no-gutter">
            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in">
                <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>Mirzo-Ulugbek,<br>Tashkent</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in">
                <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>enin@enin.online</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in">
                <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>+998909988409</p>
                </div>
            </div>
        </div>

        <div class="">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-left">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
{{--                    <div class="loading">Loading</div>--}}
                    <div class="error-message"></div>
{{--                    <div class="sent-message">Your message has been sent. Thank you!</div>--}}
                </div>
                <div class="text-center"><a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-black">Send Message</a></div>
            </form>
        </div>
    </div>
@endsection
