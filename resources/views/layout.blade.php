<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Home Page</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="CrYcmqkWU_uSO_O-5G-v05ykKcM6vJmrcAqeqsrSA0M">
    <link d-href="assets/css/animate.css" rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fancybox.css') }}">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />




    <!-- Slick CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

<!-- jQuery (Required for Slick) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Slick JS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



<script>
    $(document).ready(function() {
    $(".newslider").slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            { breakpoint: 1024, settings: { slidesToShow: 4, slidesToScroll: 1, infinite: true, dots: true } },
            { breakpoint: 600, settings: { slidesToShow: 2, slidesToScroll: 2 } },
            { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
        ],
    });
});
</script>
<script>
 document.addEventListener("DOMContentLoaded", function () {
    // Get all tab links and tab content elements
    const tabs = document.querySelectorAll(".tab-links li");
    const tabContents = document.querySelectorAll(".tabs");

    // Function to handle tab switching
    function switchTab(event) {
        const targetTab = event.target.getAttribute("data-targetit");

        // Remove "current" class from all tabs and hide all tab contents
        tabs.forEach(tab => tab.classList.remove("current"));
        tabContents.forEach(content => content.classList.remove("current"));

        // Add "current" class to the clicked tab and show the corresponding tab content
        event.target.classList.add("current");
        document.querySelector(`.tabs.${targetTab}`).classList.add("current");
    }

    // Add click event listener to all tabs
    tabs.forEach(tab => tab.addEventListener("click", switchTab));
});
</script>
</head>

<body>


    <div class="mobile-nav">
        <nav>
            <ul class="unstyled mainnav pbpx-15">
                <li><a href="https://theprowebsitedesign.com/">Home</a></li>

                <li>
                    <a href="javascript:;" class="">Services <i class="fa fa-angle-down"
                            aria-hidden="true"></i></a>
                    <ul class="firstlevel unstyled" style="display: none;">
                    <li>
                                        <a href="{{ route('webcopyRighting') }}">Web
                                            Copywriting</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('videoAnimation') }}">Video
                                            Animation</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logoDesign') }}">Logo Design</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('websiteDevelopment') }}">Custom Website
                                            development</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('ecommerce') }}">Ecommerce
                                            Development</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('webApp') }}">WEB App</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('smm') }}">SMM</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('seo') }}">SEO</a>
                                    </li>

                    </ul>
                </li>
                <li>
                                <a href="{{ route('portfolio') }}">Portfolio</a>
                            </li>
                            <li>
                                <a href="{{ route('ourpackages') }}">Packages</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About us</a>
                            </li>
                            <li>
                                <a href="{{ route('contactUs') }}">Contact Us</a>
                            </li>
            </ul>
        </nav>
    </div>

    <main class="app-container">
        <div class="mobile-nav-btn">
            <span class="lines"></span>
        </div>
    </main>
    <header>
        <div class="menuSec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <a href="https://theprowebsitedesign.com/">
                            <img src="{{ asset('images/logo-new.png') }}" alt="img">
                        </a>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <ul id="menu">
                            <li>
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Services <i class="fas fa-caret-down"
                                        aria-hidden="true"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('webcopyRighting') }}">Web
                                            Copywriting</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('videoAnimation') }}">Video
                                            Animation</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logoDesign') }}">Logo Design</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('websiteDevelopment') }}">Custom Website
                                            development</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('ecommerce') }}">Ecommerce
                                            Development</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('webApp') }}">WEB App</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('smm') }}">SMM</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('seo') }}">SEO</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('portfolio') }}">Portfolio</a>
                            </li>
                            <li>
                                <a href="{{ route('ourpackages') }}">Packages</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About us</a>
                            </li>
                            <li>
                                <a href="{{ route('contactUs') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-right">
                        <div class="btn_wrp">
                            <a href="tel:8778650327" class="theme_btn">
                                <i class="fal fa-phone-alt" aria-hidden="true"></i> (877) 865 0327 </a>
                            <a href="javascript:;" class="theme_btn1" onclick="setButtonURL();">
                                <i class="fas fa-comment-alt" aria-hidden="true"></i> Chat Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="f-wrp">
                        <img class="lazy" src="{{ asset('images/logo-w.webp') }}"
                            data-src="https://theprowebsitedesign.com/assets/images/logo-w.webp">
                        <p class="para">Has vast market experience and is well known for its professional website
                            design services in USA and across the globe. When searching for the best custom website
                            design agency or an affordable website design and development service provider, you will
                            surely come across us; as a full-service digital marketing agency that goes all out for its
                            clients.</p>
                        <div class="smm">
                            <a href="https://www.facebook.com/TheProWebsiteDesign" target="_blank">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.pinterest.com/theprowebsitedesign/" target="_blank">
                                <i class="fab fa-pinterest" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/the-pro-website-design/" target="_blank">
                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.instagram.com/theprowebsitedesign/" target="_blank">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="f-wrp">
                        <ul>
                            <h6>Services</h6>
                            <li>
                                        <a href="{{ route('webcopyRighting') }}">Web
                                            Copywriting</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('videoAnimation') }}">Video
                                            Animation</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logoDesign') }}">Logo Design</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('websiteDevelopment') }}">Custom Website
                                            development</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('ecommerce') }}">Ecommerce
                                            Development</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('webApp') }}">WEB App</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('smm') }}">SMM</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('seo') }}">SEO</a>
                                    </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="f-wrp">
                        <ul>
                            <h6>Quick Links</h6>
                            <li>
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('contactUs') }}">Contact</a>
                            </li>
                            <li>
                                <a href="{{ route('privacy') }}">Privacy Policy</a>
                            </li>
                            <li>
                                <a  href="{{ route('terms') }}">Terms Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="f-wrp">
                        <ul>
                            <h6>CONTACT INFO</h6>
                            <li>
                                <a href="javascript:;">
                                    <strong>Mailing Address:</strong> 30 Montgomery St Suite 605, Jersey City, NJ 07302,
                                    United States </a>
                            </li>
                            <li>
                                <a href="tel:8778650327">
                                    <strong>Contact :</strong> (877) 865 0327 </a>
                            </li>
                            <li>
                                <a href="mailto:info@theprowebsitedesign.com">
                                    <strong>Email Us:</strong> info@theprowebsitedesign.com </a>
                            </li>
                        </ul>
                        <img class="payment lazy" src="{{ asset('images/visa.webp') }}"
                            data-src="https://theprowebsitedesign.com/assets/images/visa.webp">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <section class="copy_rigth">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>© Copyrights 2024 | All Rights Reserved The Pro Website Design</p>
                </div>
            </div>
        </div>
    </section>

    <!-- popup form -->
    <div class="bouncepopup-overlay" id="bouncepopup-overlay"></div>
    <div style="display: none;" class="popupform" id="popupform">
        <div class="easter_popup">
            <div class="easter_popup_inner">
                <span class="close_popppp">X</span>
                <!--<img src="assets/images/rabbit.webp" alt="img" class="rabbit">-->
                <!-- <img src="images/womens-img/vec1.png" alt="img" class="wvec1"> -->
                <div class="easter_popup_inner_form-wrpp">
                    <h3>We are here to help!</h3>
                    <p>Providing you the perfect solution for your business needs. Let's work together and unlock doors
                        to success.</p>
                    <form class="form-get-quote" action="javascript:void(0)">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <input type="text" onkeypress="return /[a-z]/i.test(event.key)" required=""
                                    minlength="2" name="quote[name]" placeholder="Your Name">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <input id="phone" onkeypress="return isNumberKey(event)" type="tel"
                                    name="quote[phone]" placeholder="Phone Number" required=""
                                    maxlength="11">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="email" name="quote[email]" placeholder="Email Address"
                                    required="">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">

                                <textarea name="quote[msg]" placeholder="Message"></textarea>
                                <button type="submit">Avail Your Discount</button>
                            </div>
                        </div>
                        <!--<img src="assets/images/flower.webp" class="flower">-->
                    </form>



                </div>
            </div>
        </div>
    </div>
    <!-- popup form -->







    <script src="{{asset('images/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('images/wow.js') }}"></script>
    <script src="{{ asset('images/slick.js') }}"></script>
    <script src="{{ asset('images/slick.min.js') }}"></script>
    <script src="{{ asset('images/jquery.slicknav.js') }}"></script>
    <script r-src="assets/js/fancybox.js" src="{{ asset('images/fancybox.js') }}"></script>
    <script src="{{ asset('images/font-awesome.js') }}"></script>
    <script src="{{ asset('images/bootstrap.js') }}"></script>
    <script r-src="assets/js/font.js" src="{{ asset('images/font.js') }}"></script>
    <script src="{{ asset('images/custom.js') }}"></script>

    <script>
        var x = 0;
        $(window).scroll(function() {
            console.log((x += 1));
            if ((x += 1) == 50) {
                $.get('https://theprowebsitedesign.com/ajaxdatacall.php', function(data) {

                    $('#DataAjaxShow').html(data)

                });


            }


        });
    </script>
    <script>
        $('.close_popppp ').click(function() {

            parent.$.fancybox.close();
        })
    </script>
    <script>
        $('.form-get-quote').on('submit', function(e) {
            // if ($('#phone').val().length != 14) {
            //     $('#phone').focus();
            //     return false;
            // }
            var obj = $(this);
            e.preventDefault();
            var data = $(obj).serialize();
            jQuery.ajax({
                url: "sendmail.php",
                type: "POST",
                data: data,
                async: false, // Has to be false to be able to return response
                dataType: "json", // Has to be false to be able to return response
                success: function(response) {
                    if (response.status == 1) {
                        window.location = 'thankyou.php';
                        // alert('Thank You');
                        obj.trigger("reset");
                    } else {
                        return false;
                    }

                },
                beforeSend: function() {
                    // Loader.show();
                }
            });

            return false;
        });
    </script>
    <script>
        $(document).ready(function() {
            $('input[type=number]').attr('type', 'tel')
            $('input[type=tel]').attr('maxlength', 11)
            // $('input[type=tel]').attr('pattern','{10}')
            $('input[type=tel]').keypress(function(e) {
                var kk = e.which;
                if (kk < 48 || kk > 57)
                    e.preventDefault();
            });
        })

        function isNumber(e) {

            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;

            var value = Number(e.target.value + e.key) || 0;

            if ((keyCode >= 37 && keyCode <= 40) || (keyCode == 8 || keyCode == 9 || keyCode == 13) || (keyCode >= 48 &&
                    keyCode <= 57)) {

                return true;

            }

            return false;

        }



        function isValidNumber(number) {

            return (1 <= number && number <= 10)
        }

        function setButtonURL() {
            $zopim.livechat.window.toggle();
        }
    </script>

   
    <iframe height="0" width="0" style="display: none; visibility: hidden;"
        src="{{ asset('images/saved_resource.html') }}"></iframe>







</body>
</html>
