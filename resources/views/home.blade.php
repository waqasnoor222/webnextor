@extends('layout')

@section('content')

{{-- Home --}}


<section class="banner_main">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="bann_txt">
                    <h1>Optimize Your Online Presence with The Pro Website Design </h1>
                    <p class="para">We assure you that your website reflects your brand identity and drives
                        higher conversion rates and revenue. Client-focused and customer-centric, our web developers
                        create website solutions that deliver tangible business results, helping brands navigate the
                        ever-changing digital landscape.</p>
                    <ul>
                        <li>
                            <i class="fas fa-check" aria-hidden="true"></i> Distinct, eye-catching designs
                        </li>
                        <li>
                            <i class="fas fa-check" aria-hidden="true"></i> SEO best practices
                        </li>
                        <li>
                            <i class="fas fa-check" aria-hidden="true"></i> Mobile Optimization
                        </li>
                        <li>
                            <i class="fas fa-check" aria-hidden="true"></i> Conversion-driven design
                        </li>
                    </ul>
                    <div class="btn_gap">
                        <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET
                            STARTED <i class="fal fa-arrow-circle-right" aria-hidden="true"></i>
                        </a>
                        <a href="javascript:;" class="theme_btn1" onclick="setButtonURL();">
                            <i class="fas fa-comment-alt" aria-hidden="true"></i> Chat Now </a>
                    </div>
                    <p>We are rated 4.9 <span>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                        </span> among <strong>34,578</strong> satisfied customers </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ban_img">
                    <img class="lazy" src="{{ asset('images/home-banner.png') }}"
                        data-src="assets/images/home-banner.png">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="logos_Sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li>
                        <h6>Trusted by :</h6>
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/client01.png') }}"
                            data-src="assets/images/client01.png">
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/client02.png') }}"
                            data-src="assets/images/client02.png">
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/client03.png') }}"
                            data-src="assets/images/client03.png">
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/client04.png') }}"
                            data-src="assets/images/client04.png">
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/client05.png') }}"
                            data-src="assets/images/client05.png">
                    </li>
                    <li>
                        <img class="lazy" src="{{ asset('images/client06.png') }}"
                            data-src="assets/images/client06.png">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="potfolio_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="port_wrp">
                    <h6 class="small">OUR PORTFOLIO</h6>
                    <h2 class="head">Achieving Excellence Across Platforms</h2>
                </div>
            </div>
            <div class="col-md-7 m-auto">
                <div class="port_wrp">
                    <p class="para">Experience our data-driven and creative work across various industries and
                        marketing disciplines.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="sds testi slick-initialized slick-slider">
                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 14608px; transform: translate3d(-1660px, 0px, 0px);">
                            <li class="slick-slide slick-cloned" data-slick-index="-4" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/17.webp') }}"
                                    data-src="assets/images/portfolio/17.webp">
                                <h6>Print</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="-3" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/18.webp') }}"
                                    data-src="assets/images/portfolio/18.webp">
                                <h6>Fashion</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="-2" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/19.webp') }}"
                                    data-src="assets/images/portfolio/19.webp">
                                <h6>Technology</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="-1" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/20.webp') }}"
                                    data-src="assets/images/portfolio/20.webp">
                                <h6>Food</h6>
                            </li>
                            <li class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1"
                                style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/01.webp') }}"
                                    data-src="assets/images/portfolio/01.webp">
                                <h6>Gaming</h6>
                            </li>
                            <li class="slick-slide slick-current slick-active" data-slick-index="1"
                                aria-hidden="false" tabindex="0" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/02.webp') }}"
                                    data-src="assets/images/portfolio/02.webp">
                                <h6>Fitness</h6>
                            </li>
                            <li class="slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                tabindex="0" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/03.webp') }}"
                                    data-src="assets/images/portfolio/03.webp">
                                <h6>Music</h6>
                            </li>
                            <li class="slick-slide slick-active" data-slick-index="3" aria-hidden="false"
                                tabindex="0" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/04.webp') }}"
                                    data-src="assets/images/portfolio/04.webp">
                                <h6>Technology</h6>
                            </li>
                            <li class="slick-slide slick-active" data-slick-index="4" aria-hidden="false"
                                tabindex="0" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/05.webp') }}"
                                    data-src="assets/images/portfolio/05.webp">
                                <h6>Food</h6>
                            </li>
                            <li class="slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1"
                                style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/06.webp') }}"
                                    data-src="assets/images/portfolio/06.webp">
                                <h6>Agency</h6>
                            </li>
                            <li class="slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1"
                                style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/07.webp') }}"
                                    data-src="assets/images/portfolio/07.webp">
                                <h6>Clothing</h6>
                            </li>
                            <li class="slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1"
                                style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/08.webp') }}"
                                    data-src="assets/images/portfolio/08.webp">
                                <h6>Beauty</h6>
                            </li>
                            <li class="slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1"
                                style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/09.webp') }}"
                                    data-src="assets/images/portfolio/09.webp">
                                <h6>Fintech</h6>
                            </li>
                            <li class="slick-slide" data-slick-index="9" aria-hidden="true" tabindex="-1"
                                style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/10.webp') }}"
                                    data-src="assets/images/portfolio/10.webp">
                                <h6>Cleaning</h6>
                            </li>
                            <li class="slick-slide" data-slick-index="10" aria-hidden="true" tabindex="-1"
                                style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/11.webp') }}"
                                    data-src="assets/images/portfolio/11.webp">
                                <h6>Security</h6>
                            </li>
                            <li class="slick-slide" data-slick-index="11" aria-hidden="true" tabindex="-1"
                                style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/12.webp') }}"
                                    data-src="assets/images/portfolio/12.webp">
                                <h6>NFT</h6>
                            </li>
                            <li class="slick-slide" data-slick-index="12" aria-hidden="true" tabindex="-1"
                                style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/13.webp') }}"
                                    data-src="assets/images/portfolio/13.webp">
                                <h6>Gaming</h6>
                            </li>
                            <li class="slick-slide" data-slick-index="13" aria-hidden="true" tabindex="-1"
                                style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/14.webp') }}"
                                    data-src="assets/images/portfolio/14.webp">
                                <h6>Agency</h6>
                            </li>
                            <li class="slick-slide" data-slick-index="14" aria-hidden="true" tabindex="-1"
                                style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/15.webp') }}"
                                    data-src="assets/images/portfolio/15.webp">
                                <h6>Food</h6>
                            </li>
                            <li class="slick-slide" data-slick-index="15" aria-hidden="true" tabindex="-1"
                                style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/16.webp') }}"
                                    data-src="assets/images/portfolio/16.webp">
                                <h6>Clothing</h6>
                            </li>
                            <li class="slick-slide" data-slick-index="16" aria-hidden="true" tabindex="-1"
                                style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/17.webp') }}"
                                    data-src="assets/images/portfolio/17.webp">
                                <h6>Print</h6>
                            </li>
                            <li class="slick-slide" data-slick-index="17" aria-hidden="true" tabindex="-1"
                                style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/18.webp') }}"
                                    data-src="assets/images/portfolio/18.webp">
                                <h6>Fashion</h6>
                            </li>
                            <li class="slick-slide" data-slick-index="18" aria-hidden="true" tabindex="-1"
                                style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/19.webp') }}"
                                    data-src="assets/images/portfolio/19.webp">
                                <h6>Technology</h6>
                            </li>
                            <li class="slick-slide" data-slick-index="19" aria-hidden="true" tabindex="-1"
                                style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/20.webp') }}"
                                    data-src="assets/images/portfolio/20.webp">
                                <h6>Food</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="20" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/01.webp') }}"
                                    data-src="assets/images/portfolio/01.webp">
                                <h6>Gaming</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="21" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/02.webp') }}"
                                    data-src="assets/images/portfolio/02.webp">
                                <h6>Fitness</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="22" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/03.webp') }}"
                                    data-src="assets/images/portfolio/03.webp">
                                <h6>Music</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="23" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/04.webp') }}"
                                    data-src="assets/images/portfolio/04.webp">
                                <h6>Technology</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="24" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/05.webp') }}"
                                    data-src="assets/images/portfolio/05.webp">
                                <h6>Food</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="25" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/06.webp') }}"
                                    data-src="assets/images/portfolio/06.webp">
                                <h6>Agency</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="26" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/07.webp') }}"
                                    data-src="assets/images/portfolio/07.webp">
                                <h6>Clothing</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="27" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/08.webp') }}"
                                    data-src="assets/images/portfolio/08.webp">
                                <h6>Beauty</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="28" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/09.webp') }}"
                                    data-src="assets/images/portfolio/09.webp">
                                <h6>Fintech</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="29" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/10.webp') }}"
                                    data-src="assets/images/portfolio/10.webp">
                                <h6>Cleaning</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="30" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/11.webp') }}"
                                    data-src="assets/images/portfolio/11.webp">
                                <h6>Security</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="31" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/12.webp') }}"
                                    data-src="assets/images/portfolio/12.webp">
                                <h6>NFT</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="32" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/13.webp') }}"
                                    data-src="assets/images/portfolio/13.webp">
                                <h6>Gaming</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="33" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/14.webp') }}"
                                    data-src="assets/images/portfolio/14.webp">
                                <h6>Agency</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="34" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/15.webp') }}"
                                    data-src="assets/images/portfolio/15.webp">
                                <h6>Food</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="35" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/16.webp') }}"
                                    data-src="assets/images/portfolio/16.webp">
                                <h6>Clothing</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="36" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/17.webp') }}"
                                    data-src="assets/images/portfolio/17.webp">
                                <h6>Print</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="37" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/18.webp') }}"
                                    data-src="assets/images/portfolio/18.webp">
                                <h6>Fashion</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="38" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/19.webp') }}"
                                    data-src="assets/images/portfolio/19.webp">
                                <h6>Technology</h6>
                            </li>
                            <li class="slick-slide slick-cloned" data-slick-index="39" id=""
                                aria-hidden="true" tabindex="-1" style="width: 292px;">
                                <img class="lazy" src="{{ asset('images/20.webp') }}"
                                    data-src="assets/images/portfolio/20.webp">
                                <h6>Food</h6>
                            </li>
                        </div>
                    </div>

                </ul>

            </div>
        </div>
    </div>
</section>

<section class="why_choose">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="why_txt">
                    <h6 class="small">Why Select Our Services? </h6>
                    <h2 class="head">Your Expert Designer</h2>
                    <p class="para">Choosing Pro Website Design for your web development needs ensures you're
                        partnering with a team dedicated to excellence in every aspect of your online presence.
                        Here's why you should choose us:</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why_bx">
                    <img class="lazy" src="{{ asset('images/s2.svg') }}" data-src="assets/images/s2.svg">
                    <h5>Integrated Platforms</h5>
                    <p>Our skilled web developers are proficient in working with popular platforms such as
                        PrestaShop, Magento, and WordPress.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why_bx">
                    <img class="lazy" src="{{ asset('images/s1.svg') }}" data-src="assets/images/s1.svg">
                    <h5>Quality and Attractive Designs</h5>
                    <p>Our websites are custom-made to excel in quality, attractiveness, elegance, and
                        functionality, setting them apart from the competition.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why_bx">
                    <img class="lazy" src="{{ asset('images/s4.svg') }}" data-src="assets/images/s4.svg">
                    <h5>Simple to Maintain</h5>
                    <p>We build your website using a simple and efficient CMS, making it easy for you to make web
                        changes and updates on your own.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="reviewCta" style="background-image: url('{{ asset('images/cta-banner.png') }}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="ctaimg">
                    <img class="lazy" src="{{ asset('images/02(1).webp') }}" data-src="assets/images/02.webp"
                        alt="">
                    <div class="revBtns">
                        <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET
                            STARTED <i class="fal fa-arrow-circle-right" aria-hidden="true"></i>
                        </a>
                        <a href="tel:8778650327" class="theme_btn1">
                            <i class="fal fa-phone-alt" aria-hidden="true"></i> (877) 865 0327 </a>
                    </div>
                    <div class="rev-rtng">
                        <p>
                            <span>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>Check our web page design
                                customer reviews </span> (4.6 average from 2,355 rating)
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="revWrp">
                    <img class="lazy" src="{{ asset('images/rev.png') }}" data-src="assets/images/rev.png"
                        alt="">
                    <div class="revDetal">
                        <h5>"Exceeding Expectations Every Step of the Way!"</h5>
                        <p>"I couldn't be more pleased with the exceptional service and results provided by Pro
                            Website Design. From our early consultation to the final launch of our website, their
                            team demonstrated unparalleled expertise, professionalism, and dedication. They took the
                            time to understand our unique needs and vision and then went above and beyond to bring
                            it to life in a way that far exceeded our expectations. They delivered a stunning
                            website that perfectly captured our brand essence and ensured it was user-friendly,
                            responsive, and optimized for performance. The seamless communication and timely
                            delivery throughout the process made it a pleasure to work with them. If you're looking
                            for top-notch web design and development services, look no further than Pro Website
                            Design. Highly recommended!"</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="how_it">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="how_txt">
              <h6 class="small">How It Works</h6>
              <h2 class="head">Our Process</h2>
              <p class="para"> Pro Website Design, we've refined our web design and development process to confirm a smooth and efficient experience for our clients. Here's an overview of our process:</p>
            </div>
          </div>
        </div>
        <div class="newslider">
          <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/icon04.png">
                <span>01</span>
              </div>
              <h5>Discovery & Planning:</h5>
              <p>We begin by getting to know you and your business. Through detailed discussions and questionnaires, we gather information about your goals, target audience, brand identity, and specific website requirements.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp midd">
              <div class="d-flex">
                <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/icon05.png">
                <span>02</span>
              </div>
              <h5>Design Concept:</h5>
              <p>Once we understand your needs clearly, our design team gets to work. We create initial design concepts and mockups for your review. You can provide feedback and request revisions until we achieve a design that perfectly aligns with your vision.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/icon06.png">
                <span>03</span>
              </div>
              <h5>Development:</h5>
              <p>With the design approved, our development team takes over. Using the latest technologies and finest practices, we bring the design to life, creating a practical website with clean code, seamless navigation, and a responsive layout. Throughout this stage, we maintain open communication, providing regular updates on our progress.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/icon04.png">
                <span>04</span>
              </div>
              <h5>Testing & Feedback:</h5>
              <p>Before launch, we thoroughly test the website to ensure it performs flawlessly across different browsers, devices, and screen sizes. We also invite you to review the website and provide any final feedback or adjustments.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp midd">
              <div class="d-flex">
                <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/icon05.png">
                <span>05</span>
              </div>
              <h5>Launch & Optimization:</h5>
              <p>Once everything is finalized, we're ready to launch your website! We handle all the technical factors of deployment, including domain setup and hosting configuration. After launch, we monitor the website's performance and make any necessary optimizations to ensure it delivers the best possible user experience.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/icon06.png">
                <span>06</span>
              </div>
              <h5>Training & Support:</h5>
              <p>We do more than hand over the website and disappear. We provide training sessions to familiarize you with the content management system (CMS) so you can easily update and manage your website. Additionally, our support team is always available to help you with any queries or technical problems that may arise.</p>
            </div>
          </div>
          
        </div>
        <div class="row">
            <div class="col-md-12">
            <div class="how_btn">
              <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED <i class="fal fa-arrow-circle-right"></i>
              </a>
              <a href="javascript:;" class="theme_btn1" onclick="setButtonURL();">
                <i class="fas fa-comment-alt"></i> Chat Now </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <!--packages  start-->
<!--packages  start-->

<div id="DataAjaxShow">
    <section class="pack_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pack_txt">
                        <h2 class="head">Affordable Web Design Packages</h2>
                        <p class="para">Take your business to new heights with our comprehensive web design
                            packages to meet your particular conditions. We have a wide range of packages to choose
                            from and get started. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="pot-tab-box">
                    <ul class="tab-links">
                        <li class="current" data-targetit="webpack">Website Design</li>
                        <li data-targetit="ecompack">Ecommerce Packages</li>
                        <li data-targetit="wordpack">Wordpress</li>
                        <li data-targetit="brand-pack">Branding</li>
                        <li data-targetit="logopack">Logo Design</li>
                        <li data-targetit="videopack">Video Animation</li>
                        <li data-targetit="seopack">SEO</li>
                    </ul>
                </div>
            </div>
            <div class="tabs webpack current">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon1.png') }}">
                            <h4>Basic Website <br> Package </h4>
                            <h5>From USD <span class="yellowcr"> 249.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>3 Page Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>2 Stock Images
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 jQuery Slider Banner
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Contact/Query Form
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>48 to 72 hours TAT
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Deployment
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon2.png') }}">
                            <h4>Startup Website <br> Package </h4>
                            <h5>From USD <span class="yellowcr"> 499.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>5 Page Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>5 Stock Photos
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>3 Banner Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 jQuery Slider Banner
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE Google Friendly
                                        Sitemap
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete W3C Certified HTML
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>48 to 72 hours TAT
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee *
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Mobile Responsive will be
                                        Additional $200*
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>CMS will be Additional
                                        $250*
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx no-right">
                            <img src="{{ asset('images/picon4.png') }}">
                            <h4>Professional Website <br> Package </h4>
                            <h5>From USD <span class="yellowcr"> 649.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>10 Unique Pages Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>CMS / Admin Panel Support
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>8 Stock images
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>5 Banner Designs
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Mobile Responsive
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 jQuery Slider Banner
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE Google Friendly
                                        Sitemap
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete W3C Certified HTML
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>48 to 72 hours TAT
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Deployment
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon7.png') }}">
                            <h4>Elite Website <br> Package </h4>
                            <h5>From USD <span class="yellowcr"> 1249.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Upto 15 Unique Pages
                                        Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Conceptual and Dynamic
                                        Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Mobile Responsive
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Online
                                        Reservation/Appointment Tool (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Online Payment Integration
                                        (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Forms
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Lead Capturing Forms
                                        (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Striking Hover Effects
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Newsletter Subscription
                                        (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Newsfeed Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Social Media Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Search Engine Submission
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>5 Stock Photos
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>3 Unique Banner Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 jQuery Slider Banner
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete W3C Certified HTML
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>48 to 72 hours TAT
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Deployment
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon5.png') }}">
                            <h4>Corporate Website <br> Package </h4>
                            <h5>From USD <span class="yellowcr"> 1949.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>15 to 20 Pages Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Made, Interactive,
                                        Dynamic &amp; High End Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom WP (or) Custom PHP
                                        Development
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 jQuery Slider Banner
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Up to 10 Custom Made Banner
                                        Designs
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>10 Stock Images
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Revisions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Special Hoover Effects
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Content Management System
                                        (CMS)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Online
                                        Appointment/Scheduling/Online Ordering Integration (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Online Payment
                                        Integration (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Multi Lingual (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Dynamic Forms
                                        (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Signup Area (For
                                        Newsletters, Offers etc.)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Search Bar
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Live Feeds of Social
                                        Networks integration (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Mobile Responsive
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE 5 Years Domain Name
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Free Google Friendly
                                        Sitemap
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Search Engine Submission
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete W3C Certified
                                        HTML
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Industry Specified Team
                                        of Expert Designers and Developers
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Deployment
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Dedicated Accounts
                                        Manager
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx no-right">
                            <img src="{{ asset('images/picon3.png') }}">
                            <h4>Business Website <br> Package </h4>
                            <h5>From USD <span class="yellowcr"> 3294.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>15 to 20 Pages Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>15 Seconds 2D Explainer
                                        Video
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Voice - Over &amp; Sound
                                        Effects
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Professional Script
                                        Writing
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Storyboard
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>SEO Meta Tags
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Made, Interactive,
                                        Dynamic &amp; High End Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom WP (or) Custom PHP
                                        Development
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 jQuery Slider Banner
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Up to 10 Custom Made
                                        Banner Designs
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>10 Stock Images
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Revisions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Special Hoover Effects
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Content Management System
                                        (CMS)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Online
                                        Appointment/Scheduling/Online Ordering Integration (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Online Payment
                                        Integration (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Multi Lingual (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Dynamic Forms
                                        (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Signup Area (For
                                        Newsletters, Offers etc.)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Search Bar
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Live Feeds of Social
                                        Networks integration (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Mobile Responsive
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE 5 Years Domain Name
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Free Google Friendly
                                        Sitemap
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Search Engine Submission
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete W3C Certified
                                        HTML
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Industry Specified Team
                                        of Expert Designers and Developers
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Deployment
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Dedicated Accounts
                                        Manager
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx no-right">
                            <img src="{{ asset('images/picon3.png') }}">
                            <h4>Automated/Interactive Conferencing Portal Package</h4>
                            <h5>From USD <span class="yellowcr"> 6999.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Upto 20 Stock Images
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>20 Unique Banner Designs
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Page Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Content Management
                                        System (CMS)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unique Pages And UI
                                        Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Custom
                                        Development
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Process Automation Tools
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Newsfeed Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Social Media Plugins
                                        Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>JQuery Slider
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Search Engine Submission
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Free Google Friendly
                                        Sitemap
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>3 Years FREE Hosting
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Email Addresses
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Social Media Page Designs
                                        (Facebook, Twitter, Instagram)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete W3C Certified
                                        HTML
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Deployment 100%
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Automated Course Creation
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Video Conferencing
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Skills/Certification
                                        Tracking
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Mobile Learning
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Asynchronous Learning
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>CRM Features
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Gamification
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Social Learning/Message
                                        Boards
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Motivational Triggers
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Forums And Webinars
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>E-commerce And
                                        Subscriptions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Online Course Booking
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Excellent Reporting
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Invoicing Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Financial Integrations
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Student Information
                                        management
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Automated communications
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Learning Management
                                        System
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Quick And Easy Course
                                        Scheduling
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Reporting And Data
                                        Analysis
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Assessment Management
                                        &amp; Live Feedback
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Gradebooks
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Quick User Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Easy Payment Methods
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Online Communities &amp;
                                        Social Engagement
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Curation of Resources And
                                        Adding Own Resources
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Satisfaction Guarantee
                                        100%
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unique Design Guarantee
                                        100%
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Money Back Guarantee *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs ecompack">
                <div class="row">
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon1.png') }}">
                            <h4>Startup E-Commerce <br> Package </h4>
                            <h5>From USD <span class="yellowcr"> $399.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Upto 5 Unique Pages
                                        Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Conceptual and Dynamic
                                        Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Content Management System
                                        (CMS)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Mobile Responsive
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Product Reviews
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Up To 20 Products
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Up To 7 Categories
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Full Shopping Cart
                                        Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Jquery Slider
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Email Addresses
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete W3C Certified
                                        HTML
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Deployment
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Dedicated Accounts
                                        Manager
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Phone / Chat Support
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon2.png') }}">
                            <h4>Beginners E-Commerce <br> Package </h4>
                            <h5>From USD <span class="yellowcr"> 995.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Upto 15 Unique Pages
                                        Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Conceptual and Dynamic
                                        Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Content Management System
                                        (CMS)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Mobile Responsive
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Easy Product Search
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Product Reviews
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Up To 100 Products
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Up To 7 Categories
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Full Shopping Cart
                                        Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Payment Module
                                        Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Sales &amp; Inventory
                                        Management
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Jquery Slider
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Free Google Friendly
                                        Sitemap
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Email Addresses
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete W3C Certified
                                        HTML
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Facebook Page Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Twitter Page Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>YouTube Page Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Deployment
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Dedicated Accounts
                                        Manager
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Phone / Chat Support
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx no-right">
                            <img src="{{ asset('images/picon4.png') }}">
                            <h4>Corporate E-Commerce <br> Package </h4>
                            <h5>From USD <span class="yellowcr"> 1795.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Unique Pages
                                        Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Conceptual and Dynamic
                                        Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Content Management System
                                        (CMS)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Mobile Responsive
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Easy Product Search
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Product Reviews
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Products
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Categories
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Full Shopping Cart
                                        Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Payment Module
                                        Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Sales &amp; Inventory
                                        Management
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Jquery Slider
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Free Google Friendly
                                        Sitemap
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Email Addresses
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete W3C Certified
                                        HTML
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Facebook Page Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Twitter Page Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>YouTube Page Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Instagram Page Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Deployment
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Dedicated Accounts
                                        Manager
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Phone / Chat Support
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon7.png') }}">
                            <h4>Elite E-Commerce <br> Package </h4>
                            <h5>From USD <span class="yellowcr">3695.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Logo Design
                                        Concepts
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>By 6 Professional
                                        Designers
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Icon Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Revisions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Print Media
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Stationary Design
                                        (BusinessCard,Letterhead &amp; Envelope)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Invoice Design, Email
                                        Signature
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Bi-Fold Brochure (OR) 2
                                        Sided Flyer Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Product Catalog Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Sign age Design (OR)
                                        Label Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>T-Shirt Design (OR) Car
                                        Wrap Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>E-Commerce Store Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Product Detail Page
                                        Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unique Banner Slider
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Featured Products
                                        Showcase
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Full Shopping Cart
                                        Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Products
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Categories
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Product Rating &amp;
                                        Reviews
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Easy Product Search
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Payment Gateway
                                        Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Multi-currency Support
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Content Management System
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Cutomer Log-in Area
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Mobile Responsive
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Social Media Plugins
                                        Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Tell a Friend Feature
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Social Media Pages
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Facebook , Twitter,
                                        YouTube, Google+ &amp; Pinterest Page Designs
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Value Added Services
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Dedicated Account Manager
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Phone / Chat Support
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Revisions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>All Final File Formats
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon5.png') }}">
                            <h4>Business E-Commerce <br> Package </h4>
                            <h5>From USD <span class="yellowcr">4994.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Custom Design
                                        &amp; Development
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unique, User Friendly,
                                        Interactive, Dynamic, High End UI Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Banner Designs
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Interactive Sliding
                                        Banners
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Special Hover Effects
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Customized Contact us
                                        Form
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Multiple Filtration
                                        Option (Search by Age, Experience, Talent, Industry etc)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Profile Comparison (As
                                        per Category)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>File Converter
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Video
                                        Functionality
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Multiple File format
                                        Uploading
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>User Signup Area ( Talent
                                        )
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>User Signup Area (
                                        Casting )
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>User Signup Area ( Agency
                                        )
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Client/User Dashboard
                                        Area
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Vendor / Agency Dashboard
                                        Area
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Coding and
                                        Development
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Content Management System
                                        (Custom)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Online
                                        Appointment/Scheduling integration (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Online Payment
                                        Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Invoicing System
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Automated Email
                                        Notifications
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Multi Lingual (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Dynamic Forms
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Database
                                        Creation
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>3rd Party Links
                                        integration (Instagram, IMDB etc )
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Signup Automated Email
                                        Authentication
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Signup Area (For
                                        Newsletters, Offers etc.)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Search Bar for Easy
                                        Search
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Live Feeds of Social
                                        Networks integration (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Search Engine Submission
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>SEO friendly
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Mobile Responsive
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Master Admin Panel
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>SSL Certification ( to
                                        make the website and it’s informative secured )
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 Year Free Hosting
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>6 Months of Free
                                        Maintenance
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Professional Team of
                                        Expert Designers and Developers
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Deployment
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete W3C Validation
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Dedicated Team of
                                        Designers and Developers
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx no-right">
                            <img src="{{ asset('images/picon3.png') }}">
                            <h4>Automated/Interactive <br> E-Commerce Package </h4>
                            <h5>From USD <span class="yellowcr"> 7995.00
                                    <p>Package Includes</p>
                                    <div class="pkg_body">
                                        <ul class="listscroll">
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Unlimited Page
                                                Website
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Custom Content
                                                Management System (CMS)
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Unique Pages and
                                                UI Design
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Complete Custom
                                                Development
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Process
                                                Automation Tools
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Newsfeed
                                                Integration
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Social Media
                                                Plugins Integration
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Upto 40 Stock
                                                images
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>10 Unique Banner
                                                Designs
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>JQuery Slider
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Search Engine
                                                Submission
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Free Google
                                                Friendly Sitemap
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Custom Email
                                                Addresses
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Social Media Page
                                                Designs (Facebook, Twitter, Instagram)
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Complete W3C
                                                Certified HTML
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Complete
                                                Deployment
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                                Guarantee
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>100% Unique
                                                Design Guarantee
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Money Back
                                                Guarantee
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Automated
                                                Inventory/Shipping/Supplier Module:
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Manage thousands
                                                to millions of inventory with ease and check stock levels in
                                                real-time. Receive low inventory notifications and generate purchase
                                                orders to replenish your stock.
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Suppliers
                                                Integration (API NEEDED)
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Shipper
                                                Integration (API NEEDED)
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Order management
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>LOT numbers and
                                                expire date tracking
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Transfer stock
                                                between warehouses (If Warehouse - API NEEDED)
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Receive stock
                                                into a specific warehouse (If Warehouse - API NEEDED)
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Fulfill orders
                                                from a particular warehouse (If Warehouse - API NEEDED)
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Stock Management
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Actionable
                                                Insights
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Real- Time
                                                Visibility
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Inventory
                                                Opportunities
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Advanced
                                                Features: (API Needed For Suppliers/Warehouse)
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Speak to
                                                suppliers during trivial conversations.
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Set and send
                                                actions to suppliers regarding governance and compliance materials.
                                                Place purchasing requests.
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Research and
                                                answer internal questions regarding procurement functionalities or a
                                                supplier/supplier set.
                                            </li>
                                            <li>
                                                <i class="fal fa-check"
                                                    aria-hidden="true"></i>Receiving/filing/documentation of
                                                invoices and payments/order requests
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Machine Learning
                                                (ML) for Supply Chain Planning (SCP)
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Machine Learning
                                                for Warehouse Management
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Natural Language
                                                Processing (NLP) for Data Cleansing and Building Data Robustness
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Automated
                                                Invoices &amp; Estimates
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Create beautiful,
                                                professional invoices &amp; estimates in just a few seconds and then
                                                instantly email them as PDF's directly to your customers or
                                                prospects.
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Automated Split
                                                invoicing
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Automated Combine
                                                invoices
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Invoice templates
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Automated Barcode
                                                Scanning
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Scan inventory
                                                into your orders, generate barcodes for your documents, and search
                                                for inventory or documents by scanning barcodes.
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Locations and
                                                Zones
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Have multiple
                                                warehouses, offices, or retail stores? No problem. Easily track
                                                where all your inventory is by organizing everything into locations
                                                and zones. Organize inventory items using custom attributes such as
                                                size, color, and location. View how many you have globally or at
                                                each location.
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Customer Accounts
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Performance and
                                                analytics
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Customization of
                                                Personal Details
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Process
                                                management
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Sales Automation
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Team
                                                Collaboration
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Marketing
                                                Automation
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Security
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Integrations
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Mobile
                                                Notifications
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Sales Reports
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Trend Analytics
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Forecasting
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Territory
                                                Management
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Account
                                                Management
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Event Integration
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Advanced Data
                                                Security
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Purchase Orders
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>With integrated
                                                purchase orders, you can easily replenish your inventory levels by
                                                ordering more stock and even track when those new items will arrive.
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Partial orders
                                                fulfill
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Backordering
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Financial Reports
                                            </li>
                                            <li>
                                                <i class="fal fa-check" aria-hidden="true"></i>Generate
                                                extremely detailed reports for your inventory, sales and services.
                                                Filter your reports by date-range and category to see what's making
                                                you the most money.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn_pack">
                                        <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                            class="theme_btn">GET STARTED</a>
                                    </div>
                                </span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs wordpack">
                <div class="row">
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon1.png') }}">
                            <h4>Basic Wordpress <br> Package </h4>
                            <h5>From USD <span class="yellowcr">215.00 </span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>3 Page Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>2 Stock Images
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 jQuery Slider Banner
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Contact/Query Form
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>48 to 72 hours TAT
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Deployment
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon2.png') }}">
                            <h4>Startup Wordpress <br> Package </h4>
                            <h5>From USD <span class="yellowcr">349.00 </span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>5 Page Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>5 Stock Photos
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>3 Banner Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 jQuery Slider Banner
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE Google Friendly
                                        Sitemap
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete W3C Certified
                                        HTML
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>48 to 72 hours TAT
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Mobile Responsive will be
                                        Additional $200*
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>CMS will be Additional
                                        $250*
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx no-right">
                            <img src="{{ asset('images/picon4.png') }}">
                            <h4>Professional Wordpress <br> Package </h4>
                            <h5>From USD <span class="yellowcr">649.00 </span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>10 Unique Pages Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>CMS / Admin Panel Support
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>8 Stock images
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>5 Banner Designs
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Mobile Responsive
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 jQuery Slider Banner
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE Google Friendly
                                        Sitemap
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete W3C Certified
                                        HTML
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>48 to 72 hours TAT
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Deployment
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon7.png') }}">
                            <h4>Elite Wordpress <br> Package </h4>
                            <h5>From USD <span class="yellowcr">1249.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Upto 15 Unique Pages
                                        Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Conceptual and Dynamic
                                        Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Mobile Responsive
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Online
                                        Reservation/Appointment Tool (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Online Payment
                                        Integration (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Forms
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Lead Capturing Forms
                                        (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Striking Hover Effects
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Newsletter Subscription
                                        (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Newsfeed Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Social Media Integration
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Search Engine Submission
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>5 Stock Photos
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>3 Unique Banner Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 jQuery Slider Banner
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete W3C Certified
                                        HTML
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>48 to 72 hours TAT
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Deployment
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon5.png') }}">
                            <h4>Corporate Wordpress <br> Package </h4>
                            <h5>From USD <span class="yellowcr">2495.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>15 to 20 Pages Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Made, Interactive,
                                        Dynamic &amp; High End Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom WP (or) Custom PHP
                                        Development
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 jQuery Slider Banner
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Up to 10 Custom Made
                                        Banner Designs
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>10 Stock Images
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Revisions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Special Hoover Effects
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Content Management System
                                        (CMS)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Online
                                        Appointment/Scheduling/Online Ordering Integration (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Online Payment
                                        Integration (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Multi Lingual (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Dynamic Forms
                                        (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Signup Area (For
                                        Newsletters, Offers etc.)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Search Bar
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Live Feeds of Social
                                        Networks integration (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Mobile Responsive
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE 5 Years Domain Name
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Free Google Friendly
                                        Sitemap
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Search Engine Submission
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete W3C Certified
                                        HTML
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Industry Specified Team
                                        of Expert Designers and Developers
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Deployment
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Dedicated Accounts
                                        Manager
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx no-right">
                            <img src="{{ asset('images/picon3.png') }}">
                            <h4>Business Wordpress <br> Package </h4>
                            <h5>From USD <span class="yellowcr">3294.00 </span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>15 to 20 Pages Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>15 Seconds 2D Explainer
                                        Video
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Voice - Over &amp; Sound
                                        Effects
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Professional Script
                                        Writing
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Storyboard
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>SEO Meta Tags
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Made, Interactive,
                                        Dynamic &amp; High End Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom WP (or) Custom PHP
                                        Development
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 jQuery Slider Banner
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Up to 10 Custom Made
                                        Banner Designs
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>10 Stock Images
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Revisions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Special Hoover Effects
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Content Management System
                                        (CMS)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Online
                                        Appointment/Scheduling/Online Ordering Integration (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Online Payment
                                        Integration (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Multi Lingual (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Dynamic Forms
                                        (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Signup Area (For
                                        Newsletters, Offers etc.)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Search Bar
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Live Feeds of Social
                                        Networks integration (Optional)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Mobile Responsive
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE 5 Years Domain Name
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Free Google Friendly
                                        Sitemap
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Search Engine Submission
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete W3C Certified
                                        HTML
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Industry Specified Team
                                        of Expert Designers and Developers
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Complete Deployment
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Dedicated Accounts
                                        Manager
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs brand-pack">
                <div class="row">
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon1.png') }}">
                            <h4>Startup Collateral <br> Package </h4>
                            <h5>From USD <span class="yellowcr">99.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>2 Stationery Design Set
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE Fax Template
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Print Ready Formats
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Revisions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon2.png') }}">
                            <h4>Collateral Classic <br> Package </h4>
                            <h5>From USD <span class="yellowcr">199.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>2 Stationery Design Set
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Revisions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Flyer Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Brochure Design
                                        (Bi-fold/Tri-fold)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx no-right">
                            <img src="{{ asset('images/picon4.png') }}">
                            <h4>Premium Collateral <br> Package </h4>
                            <h5>From USD <span class="yellowcr">399.00 </span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>2 Stationery Design Set
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Packaging Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Revisions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>T-Shirt Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon7.png') }}">
                            <h4>Unlimited Collateral <br> Package </h4>
                            <h5>From USD <span class="yellowcr">499.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>2 Stationery Design Set
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Menu Card Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>T-Shirt Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 Banner Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon5.png') }}">
                            <h4>Basic Logo <br> Package </h4>
                            <h5>From USD <span class="yellowcr">44.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 Custom Logo Design
                                        Concepts
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 Dedicated Designer
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>4 Revisions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>48 to 72 hours TAT
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>All Final Files Format
                                        (AI, PSD, EPS, PNG, GIF, JPG, PDF)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx no-right">
                            <img src="{{ asset('images/picon3.png') }}">
                            <h4>Start Up Logo <br> Package </h4>
                            <h5>From USD <span class="yellowcr">74.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>4 Custom Logo Design
                                        Concepts
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>By 2 Designers
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE Icon
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE Business Card Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Revisions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>48 to 72 hours TAT
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>All Final Files Format
                                        (AI, PSD, EPS, PNG, GIF, JPG, PDF)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs logopack">
                <div class="row">
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon1.png') }}">
                            <h4>Professional Logo <br> Package </h4>
                            <h5>From USD <span class="yellowcr">124.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Logo Design
                                        Concepts
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>By 3 Designers
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Revisions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE Stationary Design
                                        Set
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE MS Word Letterhead
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>48 to 72 hours TAT
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>All Final Files Format
                                        (AI, PSD, EPS, PNG, GIF, JPG, PDF)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>15% Discount on your next
                                        order
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon2.png') }}">
                            <h4>Elite Logo <br> Package </h4>
                            <h5>From USD <span class="yellowcr">174.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Logo Design
                                        Concepts
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>By 5 Design Artist
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE Stationary Design
                                        Set
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Revisions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE MS Word Letterhead
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Free Email Signature
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>All Final Files Format
                                        (AI, PSD, EPS, PNG, GIF, JPG, PDF)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>48 to 72 hours TAT
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>15% Discount on your next
                                        order
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx no-right">
                            <img src="{{ asset('images/picon4.png') }}">
                            <h4>Business Logo <br> Package </h4>
                            <h5>From USD <span class="yellowcr">244.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Logo Design
                                        Concepts
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>By 8 Design Artist
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Revisions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>2 Stationary Design Sets
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Double Sided Flyer Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Bi-Fold Brochure
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE MS Word Letterhead
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Social Media Banners
                                        Design
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Free Email Signature
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE Fax Template
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>All Final Files Format
                                        (AI, PSD, EPS, PNG, GIF, JPG, PDF)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon7.png') }}">
                            <h4>Gold Logo <br> Package </h4>
                            <h5>From USD <span class="yellowcr">524.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Logo Design
                                        Concepts
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>By 8 Design Artist
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Revisions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>2 Stationary Design Sets
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>FREE MS Word Letterhead
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Free Email Signature
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>3 Page Custom Website
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Content Management System
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>2 Stock Photos
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>2 Banner Designs
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>jQuery Slider
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>All Final Files Format
                                        (AI, PSD, EPS, PNG, GIF, JPG, PDF)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design
                                        Guarantee
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee
                                        *
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon5.png') }}">
                            <h4>Teaser/Intro Video <br> Package </h4>
                            <h5>From USD <span class="yellowcr">145.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>10 Seconds Video
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Professional Script
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Sample Theme
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Storyboard
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Artwork
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Animation
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Professional Voice - Over
                                        &amp; Sound Effects
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 week Delivery
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Revisions
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx no-right">
                            <img src="{{ asset('images/picon3.png') }}">
                            <h4>Startup Video <br> Package </h4>
                            <h5>From USD <span class="yellowcr">195.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>30s Duration - HD 1080
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Professional Script
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Storyboard
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Sample Themes
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Setting,
                                        Characters &amp; Graphics
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Animation Effects &amp;
                                        Visualization
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Voice - Over &amp; Sound
                                        Effects (All accents) (M/F)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Revisions
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs videopack">
                <div class="row">
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon1.png') }}">
                            <h4>Teaser/Intro Video <br> Package </h4>
                            <h5>From USD <span class="yellowcr">145.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>10 Seconds Video
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Professional Script
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Sample Theme
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Storyboard
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Artwork
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Animation
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Professional Voice - Over
                                        &amp; Sound Effects
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>1 week Delivery
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Revisions
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon2.png') }}">
                            <h4>Startup Video <br> Package </h4>
                            <h5>From USD <span class="yellowcr">195.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>30s Duration - HD 1080
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Professional Script
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Storyboard
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Sample Themes
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Custom Setting,
                                        Characters &amp; Graphics
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Animation Effects &amp;
                                        Visualization
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Voice - Over &amp; Sound
                                        Effects (All accents) (M/F)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Revisions
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon1.png') }}">
                            <h4>Classic Video <br> Package </h4>
                            <h5>From USD <span class="yellowcr">395.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>60 Second Video - HD 1080
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Professional Script
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Sample Theme
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Storyboard
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Animation
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Voice - Over &amp; Sound
                                        Effects
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>5 weeks Delivery
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Revisions
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon2.png') }}">
                            <h4>Premium Video <br> Package </h4>
                            <h5>From USD <span class="yellowcr">695.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>90 Second Video - HD 1080
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Professional Script
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Sample Theme
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Storyboard
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Animation
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Voice - Over &amp; Sound
                                        Effects
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>6 Weeks Delivery
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Revisions
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx no-right">
                            <img src="{{ asset('images/picon4.png') }}">
                            <h4>Deluxe Video <br> Package </h4>
                            <h5>From USD <span class="yellowcr">895.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>120 Second Video - HD
                                        1080
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Professional Script
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Sample Theme
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Storyboard
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Animation
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Voice - Over &amp; Sound
                                        Effects
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Unlimited Revisions
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs seopack">
                <div class="row">
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon7.png') }}">
                            <h4>Startup SEO <br> Package </h4>
                            <h5>From USD <span class="yellowcr">350.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Website Audit
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>15 Selected Keywords
                                        Targeting
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Keyword Research
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Keyword Grouping
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Keyword Mapping
                                    </li>
                                    <li class="heading">
                                        <i class="fal fa-check" aria-hidden="true"></i>On-Page Optimization
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>SEO Road Map
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Blog Creation
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Webpage Copywriting (3
                                        pages, 350 words per page)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Title Tag Optimization
                                        (10 titles)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Meta Description
                                        Optimization (10 meta description)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Meta Keyword Optimization
                                        (10 meta keywords)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Domain Redirect
                                        Optimization (10 domain redirects)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>xml Sitemap Optimization
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Robots.txt Check
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>URL Rewrites (10 URL
                                        rewrites)
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Broken Link Report
                                    </li>
                                    <li class="heading">
                                        <i class="fal fa-check" aria-hidden="true"></i>Initial Off-Page SEO
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Social Bookmarking
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Slide Share Marketing
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Forums/FAQ’s
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Link Building
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Directory Submission
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Local Business Listings
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx">
                            <img src="{{ asset('images/picon5.png') }}">
                            <h4>Scaling SEO <br> Package </h4>
                            <h5>From USD <span class="yellowcr">750.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Business Analysis
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Consumer Analysis
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Competitor Analysis
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>35 Selected Keywords
                                        Targeting
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>15 Pages Keyword Targeted
                                    </li>
                                    <li class="heading">Webpage Optimization</li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Meta Tags Creation
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Keyword Optimization
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Image Optimization
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Inclusion of anchors
                                    </li>
                                    <li class="heading">Tracking &amp; Analysis</li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Google Analytics
                                        Installation
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Google Webmaster
                                        Installation
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Call To Action Plan
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Creation of Sitemaps
                                    </li>
                                    <li class="heading">Reporting</li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Monthly Reporting
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Email Support
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Phone Support
                                    </li>
                                    <li class="heading">Off Page Optimization</li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Social Bookmarking
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Slide Share Marketing
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Forums/FAQ’s
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Link Building
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Directory Submission
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Local Business Listings
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Local Business Listings
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pack_bx no-right">
                            <img src="{{ asset('images/picon3.png') }}">
                            <h4>Venture Plan <br> Package </h4>
                            <h5>From USD <span class="yellowcr">1200.00</span></h5>
                            <p>Package Includes</p>
                            <div class="pkg_body">
                                <ul class="listscroll">
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Business Analysis
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Consumer Analysis
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Competitor Analysis
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>60+ Selected Keywords
                                        Targeting
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>30 Pages Keyword Targeted
                                    </li>
                                    <li class="heading">
                                        <i class="fal fa-check" aria-hidden="true"></i>Webpage Optimization
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Meta Tags Creation
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Keyword Optimization
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Image Optimization
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Inclusion of anchors Tags
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Inclusion of anchors
                                        Indexing Modifications
                                    </li>
                                    <li class="heading">
                                        <i class="fal fa-check" aria-hidden="true"></i>Tracking &amp; Analysis
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Google Places Inclusions
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Google Analytics
                                        Installation
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Google Webmaster
                                        Installation
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Call To Action Plan
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Creation of Sitemaps
                                    </li>
                                    <li class="heading">
                                        <i class="fal fa-check" aria-hidden="true"></i>Reporting
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Monthly Reporting
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Recommendation
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Email Support
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Phone Support
                                    </li>
                                    <li class="heading">
                                        <i class="fal fa-check" aria-hidden="true"></i>Off Page Optimization
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Social Bookmarking
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Slide Share Marketing
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Forums/FAQ’s
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Link Building
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Directory Submission
                                    </li>
                                    <li>
                                        <i class="fal fa-check" aria-hidden="true"></i>Local Business Listings
                                    </li>
                                </ul>
                            </div>
                            <div class="btn_pack">
                                <a href="javascript:;" data-fancybox="" data-src="#popupform"
                                    class="theme_btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<!--packages  end-->

<section class="testi_Sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="testi_wrp">
                    <h2 class="head">Voice of Satisfaction</h2>
                    <p class="para">Read real testimonials from businesses like yours who have benefited from
                        our expert services. Their stories highlight the transformative impact of our solutions and
                        our commitment to exceeding expectations.</p>
                    <img class="lazy" src="{{ asset('images/clutch.png') }}"
                        data-src="assets/images/clutch.png">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="testi slick-initialized slick-slider">
                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 996px; transform: translate3d(0px, 0px, 0px);">
                            <div class="item slick-slide slick-current slick-active" data-slick-index="0"
                                aria-hidden="false" tabindex="0" style="width: 292px;">
                                <div class="d-flex">
                                    <img class="lazy" src="{{ asset('images/julia.png') }}"
                                        data-src="assets/images/julia.png">
                                    <h6>Julia <span>Founder &amp; CEO</span>
                                    </h6>
                                </div>
                                <p>The team helped us build a stunning website and provided invaluable guidance on
                                    digital marketing strategies. Thanks to their expertise, our online presence has
                                    never been more substantial.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="stars">
                                            <span>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="stars">
                                            <p>Rated 4.9/5.0</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item slick-slide slick-active" data-slick-index="1"
                                aria-hidden="false" tabindex="0" style="width: 292px;">
                                <div class="d-flex">
                                    <img class="lazy" src="{{ asset('images/rev02.png') }}"
                                        data-src="assets/images/rev02.png">
                                    <h6>Rocky <span>Marketing Manager</span>
                                    </h6>
                                </div>
                                <p>I couldn't be happier with the results delivered, from the initial discussion to
                                    the final product launch; their professionalism and attention to detail were
                                    evident at every step. Our website looks fantastic and performs exceptionally
                                    well, driving significant traffic and conversions.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="stars">
                                            <span>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="stars">
                                            <p>Rated 4.9/5.0</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item slick-slide slick-active" data-slick-index="2"
                                aria-hidden="false" tabindex="0" style="width: 292px;">
                                <div class="d-flex">
                                    <img class="lazy" src="{{ asset('images/rev03.png') }}"
                                        data-src="assets/images/rev03.png">
                                    <h6>Jamey Roberts <span>Founder &amp; CEO @ HowUdish</span>
                                    </h6>
                                </div>
                                <p>Choosing this website for our web design needs was one of our best decisions.
                                    Their team took the time to understand our vision and delivered a website that
                                    perfectly captures our brand identity. The support and responsiveness they
                                    provided throughout the process exceeded our expectations. We highly recommend
                                    it!</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="stars">
                                            <span>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="stars">
                                            <p>Rated 4.9/5.0</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="testi_btm">
                    <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET
                        STARTED <i class="fal fa-arrow-circle-right" aria-hidden="true"></i>
                    </a>
                    <a href="javascript:;" class="theme_btn1" onclick="setButtonURL();">
                        <i class="fas fa-comment-alt" aria-hidden="true"></i> Chat Now </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq_Sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="faq_txt">
                    <h2 class="head">Frequently Asked Questions</h2>
                </div>
                <div class="faq_wrp">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"> How long will it take to build my
                                    website?</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The timeline for website development depends on various factors, such as the
                                    complexity of your project, the features you require, and the timely provision
                                    of content and feedback. Generally, we aim to deliver your website within a few
                                    weeks from the project kickoff.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo"> Can I update my website
                                    content on my own? </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Absolutely! We empower our customers with easy-to-use content management systems
                                    (CMS) that enable you to update text, images, and other content without
                                    technical expertise. We'll provide training and ongoing support to ensure you
                                    manage your website comfortably.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree"> Will my website be
                                    mobile-friendly? </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, all websites we design and develop are fully responsive, adapting
                                    impeccably to various screen sizes and devices. Whether visitors browse on a
                                    computer, tablet, or smartphone, they'll enjoy a consistent and user-friendly
                                    experience.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour"> What happens after my
                                    website launches? </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our support continues after your website's launch. We offer post-launch support
                                    and maintenance facilities to guarantee your website stays secure, up-to-date,
                                    and optimized for performance. Additionally, we're here to assist with any
                                    future updates or modifications you may need.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive"> Can you help with
                                    hosting and domain registration? </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, we offer hosting and domain registration services to simplify the process
                                    for our clients. We'll guide you through selecting the right hosting plan and
                                    domain name for your website, ensuring everything is set up correctly for a
                                    seamless online presence.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="exceeding_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="exceeding_txt">
                    <h2 class="head">Affordable Web Design to Elevate Your Business</h2>
                    <p class="para">Looking to boost your business? Our outstanding web designs can attract,
                        engage, and convert prospects into loyal clients, providing a compelling experience and
                        lifetime value.</p>
                    <ul>
                        <li>
                            <img class="lazy" src="{{ asset('images/logo-1.svg') }}"
                                data-src="assets/images/logo-1.svg">
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/logo-2.svg') }}"
                                data-src="assets/images/logo-2.svg">
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/logo-3.svg') }}"
                                data-src="assets/images/logo-3.svg">
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/logo-4.svg') }}"
                                data-src="assets/images/logo-4.svg">
                        </li>
                        <li>
                            <img class="lazy" src="{{ asset('images/logo-7.svg') }}"
                                data-src="assets/images/logo-7.svg">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="btm_form">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="form">
                    <form class="form-get-quote" action="javascript:void(0)">
                        <h4>Let's Connect and Bring Your Concept to Life!</h4>
                        <p class="para">At Pro Website Design, we're passionate about turning ideas into
                            reality. Let's join forces and collaborate on your project to create something
                            remarkable. We're here to bring it to fruition. Reach out to us today, and let's work
                            together to make your digital objectives a reality!</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="grp">
                                    <input type="text" onkeypress="return /[a-z]/i.test(event.key)"
                                        name="quote[name]" minlength="2" placeholder="Full Name"
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="grp">
                                    <input type="email" name="quote[email]" placeholder="Email Address"
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="grp">
                                    <input id="phone" onkeypress="return isNumberKey(event)"
                                        type="tel" name="quote[phone]" placeholder="Phone Number"
                                        required="" maxlength="11">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="grp">
                                    <textarea name="quote[msg]" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="grp">
                                    <button type="submit" class="theme_btn">submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="btm_img">
                    <img class="circle lazy" src="{{ asset('images/circle-form.png') }}"
                        data-src="assets/images/circle-form.png">
                    <img class="lazy" src="{{ asset('images/contact-bg.webp') }}"
                        data-src="assets/images/contact-bg.webp">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection