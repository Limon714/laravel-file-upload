@extends('layout.app')

@section('content')
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>get &nbsp; in  <span> &nbsp;touch</span></h1>
    <span class="title-bg">contact</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Left Side Starts -->
            <div class="col-12 col-lg-4">
                <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">Don't be shy !</h3>
                <p class="open-sans-font mb-3">Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be part of your visions.</p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-envelope-open position-absolute"></i>
                    <span class="d-block">mail me</span>limon4u714@gmail.com
                </p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-phone-square position-absolute"></i>
                    <span class="d-block">call me</span> 01902 616 821
                </p>
                <ul class="social list-unstyled pt-1 mb-5">
                    <li class="youtube"><a title="Youtube" href="https://www.youtube.com/@limonfwt/videos"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                    <li class="facebook"><a title="LinkedIn" href="https://www.linkedin.com/in/md-abdul-khalaque/"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                    <li class="twitter"><a title="Twitter" href="https://twitter.com/limon4u714"><i class="fa-brands fa-x-twitter"></i></a>
                    </li>
                    <li class="dribbble"><a title="GitHub" href="https://github.com/Limon714"><i class="fa-brands fa-github"></i></a>
                    </li>
                </ul>
            </div>
            <!-- Left Side Ends -->
            <!-- Contact Form Starts -->
            <div class="col-12 col-lg-8">
                <form class="contactform" method="post" action="php/process-form.php">
                    <div class="contactform">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <input type="text" name="name" placeholder="YOUR NAME">
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="email" name="email" placeholder="YOUR EMAIL">
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="text" name="subject" placeholder="YOUR SUBJECT">
                            </div>
                            <div class="col-12">
                                <textarea name="message" placeholder="YOUR MESSAGE"></textarea>
                                <button type="submit" class="button">
                                    <span class="button-text">Send Message</span>
                                    <span class="button-icon"> <i class="fa-solid fa-paper-plane"></i></span>
                                </button>
                            </div>
                            <div class="col-12 form-message">
                                <span class="output_message text-center font-weight-600 text-uppercase"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Contact Form Ends -->
        </div>
    </div>

</section>
<!-- Template JS Files -->
@endsection