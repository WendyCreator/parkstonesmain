<?php 
include_once 'inc/head.php';
include_once 'inc/header.php';
?>
        <!--============== Header One Section End ==============-->

        <!--============== Banner Section Start ==============-->
        <div class="page-banner full-row bg-gray py-5">
            <div class="container">
                <div class="row row-cols-md-2 row-cols-1 g-3">
                    <div class="col">
                        <h3 class="page-name text-secondary m-0">Contact</h3>
                    </div>
                    <div class="col">
                        <nav class="float-start float-md-end">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index-1.html">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Banner Section End ==============-->

        <!--============== Contact Information Section Start ==============-->
        <div class="full-row bg-white">
            <div class="container">
                <div class="row row-cols-lg-3 row-cols-1">
                    <div class="col">
                        <div class="contact-info">
                            <h3 class="mb-4 text-secondary">Support</h3>
                            <div class="d-flex">
                                <div class="circle me-4"><img src="assets/images/team/01.png" alt=""></div>
                                <div class="contact-details">
                                    <h5>Lawrance Kyle</h5>
                                    <span class="d-block">Support Member</span> <a class="text-primary" href="#">www.support@homex.com</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="contact-info">
                            <h3 class="mb-4 text-secondary">Contacts</h3>
                            <ul>
                                <li class="d-flex mb-4"> <i class="fas fa-map-marker-alt text-primary me-2 font-13 mt-2"></i>
                                    <div class="contact-address">
                                        <h5 class="text-secondary">Address</h5>
                                        <span>Collins Street West, Victoria 8007, Australia</span> </div>
                                </li>
                                <li class="d-flex mb-4"> <i class="fas fa-phone-alt text-primary me-2 font-13 mt-2"></i>
                                    <div class="contact-address">
                                        <h5 class="text-secondary">Call Us</h5>
                                        <span class="d-table">012 34 567 809 (or)</span> <span>012 34 567 809 </span> </div>
                                </li>
                                <li class="d-flex mb-4"> <i class="fas fa-envelope text-primary me-2 font-13 mt-2"></i>
                                    <div class="contact-address">
                                        <h5 class="text-secondary">Email Adderss</h5>
                                        <span>helpline@homex.com</span> </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="contact-info">
                            <h3 class="mb-5 text-secondary">Social</h3>
                            <div class="media-widget text-secondary hover-text-primary">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Contact Information Section End ==============-->

        <!--============== Get In Touch Section Start ==============-->
        <div class="full-row bg-white pt-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">Get In Touch</h2>
                        <span class="text-center mt-4 d-block mb-5">Nullam dapibus nullam aliquet maecenas pede dignissim Felis porta risus sociis.</span> </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form id="contact-form" class="w-100" action="https://unicoderbd.com/theme/html/homex/email.php" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" id="name" name="firstname" class="form-control bg-gray mb-3" placeholder="Your Name*">
                                    <input type="text" id="email" name="email" class="form-control bg-gray mb-3" placeholder="Email Address*">
                                    <input type="text" id="site-link" name="site-link" class="form-control bg-gray mb-3" placeholder="Website">
                                    <input type="text" id="subject" name="subject" class="form-control bg-gray mb-3" placeholder="Subject">
                                </div>
                                <div class="col-lg-6">
                                    <textarea id="message" name="message" class="form-control bg-gray mb-3" rows="5" placeholder="Type Comments..."></textarea>
                                    <button type="submit" id="send" value="send message" class="btn btn-primary">Send Message</button>
                                </div>
                                <div class="col-lg-12">
                                    <div class="error-handel">
                                        <div class="d-none" id="success">Your email sent Successfully, Thank you.</div>
                                        <div class="d-none" id="error"> Error occurred while sending email. Please try again later.</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Get In Touch Section End ==============-->

        <!--============== Map Section Start ==============-->
        <div class="full-row bg-white p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div id="map" class="contact-location"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Map Section End ==============-->

        <!--============== Subscribe Section Start ==============-->
        <div class="full-row bg-gray p-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="divider py-80">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-7">
                                    <h4 class="text-secondary mb-0">Enter your email for subscribe to get monthly newslatter</h4>
                                </div>
                                <div class="col-lg-5">
                                    <form class="subscribe">
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Enter your email">
                                            <button class="btn btn-primary" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Subscribe Section End ==============-->

        <!--============== Footer Section Start ==============-->
        <footer class="full-row bg-gray p-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="divider py-80">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="footer-widget">
                                        <div class="footer-logo mb-4">
                                            <a href="#"><img class="logo-bottom" src="assets/images/logo/logo.png" alt="image"></a>
                                        </div>
                                        <p class="pb-20">Risus commodo congue augue phasellus morbi hymenaeos ante tincidunt eu orci dictum bibendum lacus platea primis mi lacinia felis gravida natoque bibendum cubilia montes tristique et arcu blandit risus. Lobortis
                                            dignissim nam.
                                        </p>
                                        <a class="btn btn-primary mt-4" href="#">Register Now</a>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row row-cols-md-3 row-cols-1">
                                        <div class="col">
                                            <div class="footer-widget footer-nav">
                                                <h4 class="widget-title text-secondary double-down-line-left position-relative">Support</h4>
                                                <ul>
                                                    <li><a href="#">Forum</a></li>
                                                    <li><a href="#">Statistics</a></li>
                                                    <li><a href="#">Terms and Condition</a></li>
                                                    <li><a href="#">Get Support</a></li>
                                                    <li><a href="#">Freequenly Ask Question</a></li>
                                                    <li><a href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="footer-widget footer-nav">
                                                <h4 class="widget-title text-secondary double-down-line-left position-relative">Quick Links</h4>
                                                <ul>
                                                    <li><a href="#">About Us</a></li>
                                                    <li><a href="#">Featured Property</a></li>
                                                    <li><a href="#">Become A Member</a></li>
                                                    <li><a href="#">Submit Property</a></li>
                                                    <li><a href="#">How It Work</a></li>
                                                    <li><a href="#">Our Agents</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="footer-widget">
                                                <h4 class="widget-title text-secondary double-down-line-left position-relative">Contact Us</h4>
                                                <ul>
                                                    <li>Collins Street West, Victoria 8007, Australia</li>
                                                    <li>+1 246-345-0695</li>
                                                    <li>helpline@homex.com</li>
                                                </ul>
                                            </div>
                                            <div class="footer-widget media-widget mt-4 text-secondary hover-text-primary">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#"><i class="fas fa-rss"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright Start -->
            <div class="copyright">
                <div class="container">
                    <div class="row row-cols-sm-2 row-cols-1">
                        <div class="col"> <span>© 2021 Homex All right reserved</span> </div>
                        <div class="col">
                            <ul class="line-menu text-ordinary float-end">
                                <li><a href="#">Privacy & Policy</a></li>
                                <li>|</li>
                                <li><a href="#"> Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright End -->
        </footer>
        <!--============== Footer Section End ==============-->

        <!-- Scroll to top -->
        <a href="#" class="bg-secondary text-white" id="scroll"><i class="fas fa-angle-up"></i></a>
        <!-- End Scroll To top -->
    </div>
    <!-- Wrapper End -->

    <!-- Javascript Files -->
    <script src="assets/js/jquery.min.js"></script>
    <!--jQuery Layer Slider -->
    <script src="assets/js/greensock.js"></script>
    <script src="assets/js/layerslider.transitions.js"></script>
    <script src="assets/js/layerslider.kreaturamedia.jquery.js"></script>
    <!--jQuery Layer Slider -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/tmpl.js"></script>
    <script src="assets/js/jquery.dependClass-0.1.js"></script>
    <script src="assets/js/draggable-0.1.js"></script>
    <script src="assets/js/jquery.slider.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/YouTubePopUp.jquery.js"></script>
    <script src="assets/js/validate.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPZ-Erd-14Vf2AoPW2Pzlxssf6-2R3PPs"></script>
    <script src="assets/js/map/markerwithlabel_packed.js"></script>
    <script src="assets/js/map/infobox.js"></script>
    <script src="assets/js/map/custom-map.js"></script>
    <script>
        (function($) {
            var _latitude = 36.596165;
            var _longitude = -97.062988;
            createHomepageGoogleMap(_latitude, _longitude);
        })(jQuery);
    </script>
</body>


<!-- Mirrored from unicoderbd.com/theme/html/homex/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 05:40:48 GMT -->
</html>