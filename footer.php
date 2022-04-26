

    
    <div class="footer-wrapper">
 

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="title"> Quick Links </h4>
                    <ul class="reset-ul links">
                        <li><a href="#"> Home </a></li>
                        <li><a href="#"> Solutions </a></li>
                        <li><a href="#"> About Us </a></li>
                        <li><a href="#"> Services </a></li>
                        <li><a href="#"> Contact </a></li>
                    </ul>
                </div><!-- col-md-4 -->
                <div class="col-md-4">
                    <h4 class="title"> Contact </h4>
                    <ul class="reset-ul contact">
                        <li><a href="#"> <i class="fa fa-phone"></i> 000-000-0000 </a></li>
                        <li><a href="#"> <i class="fa fa-envelope"></i> info@email.com </a></li>
                        <li><a href="#"> <i class="fa fa-map-marker-alt"></i> New York, US </a></li>
                    </ul>
                </div><!-- col-md-4 -->
                <div class="col-md-4">
                    <img class="img-fluid logo mb-4" src="img/qpn-wide.png" alt="">
                    <h4 class="title"> Stay in touch </h4>
                    <ul class="reset-ul social">
                        <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                        <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
                        <li><a href="#"> <i class="fab fa-linkedin-in"></i> </a></li>
                    </ul>
                </div><!-- col-md-4 -->
            </div><!-- row -->
        </div><!-- container -->

        <p class="copyrights"> Copyright ©2022 QPN Company All rights reserved. </p>


    </div><!-- footer-wrapper -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Slick Slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>



    <script>

        $('.testimonials-slick').slick({
            arrows: false,
            dots: true,
            infinite: true,
            centerMode: true,
            slidesToShow: 2.7,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
            ]
        });

        $(document).ready(function () {

            setTimeout(() => {
                $(".lds-dual-ring").fadeOut();
                setTimeout(() => {
                    $(".left , .right").css("width", "0%");
                    setTimeout(() => {
                        $(".loading-wrapper").remove();
                    }, 1000);
                }, 500);
            }, 1500);

        })



        $(document).ready(function ($) {
            $('.count-number').counterUp({
                delay: 10,
                time: 10000
            });
        });




        // $(".mobile-icon").on("click", function () {
        //     $(".left-menu-wrapper").addClass("show");
        //     $("body").css("overflow-y", "hidden");
        // });

        // $(".close-menu").on("click", function () {
        //     $(".left-menu-wrapper").removeClass("show");
        //     $("body").css("overflow-y", "auto");
        // });






        let isOpened = false;

        let menuTimeLine;

        toggleMenu = () => { 

            if (isOpened == false) {
                isOpened = true;
                menuTimeLine = gsap.timeline();

                menuTimeLine.to(".left-menu-wrapper", { opacity: 1, duration: 0.7, x: '0', ease: "power4.out" });
                menuTimeLine.to(".left-menu-wrapper .menu-links li", { opacity: 1, duration: 1.2, y: '10px', ease: "power4.out", stagger: 0.1 });
                menuTimeLine.to(".close-menu", { opacity: 1, duration: 0.7, y: '0', ease: "power4.out" });

            } else {

                isOpened = false;
                menuTimeLine = gsap.timeline();
                
                menuTimeLine.to(".close-menu", { opacity: 0, duration: 0.7, y: '0', ease: "power4.out" });
                menuTimeLine.to(".left-menu-wrapper .menu-links li", { opacity: 0, duration: 1.2, y: '30px', ease: "power4.out", stagger: 0.1 });
                menuTimeLine.to(".left-menu-wrapper", { opacity: 0, duration: 0.7, x: '-100%', ease: "power4.out" });

            }
        }
    </script>



    <script>
        AOS.init();
    </script>

</body>

</html>