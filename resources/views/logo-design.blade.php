@extends('layout')

@section('content')
<section class="banner_main">
      <div class="container">
        <div class="row">
          <div class="col-md-6 m-auto">
            <div class="bann_txt">
              <h1>Proficient Video Animation Services</h1>
              <p class="para">At Pro Website Design, we specialize in composing exquisite video animations that bring your brand to life. With our experts and cutting-edge technology, we present a range of services fitted to meet your needs.</p>
              <ul>
                <li>
                  <i class="fas fa-check" aria-hidden="true"></i>Explainer Videos
                </li>
                <li>
                  <i class="fas fa-check" aria-hidden="true"></i>Motion Graphics
                </li>
                <li>
                  <i class="fas fa-check" aria-hidden="true"></i>Whiteboard Animation
                </li>
                <li>
                  <i class="fas fa-check" aria-hidden="true"></i>Product Demos
                </li>
                <li>
                  <i class="fas fa-check" aria-hidden="true"></i>Animated Logos
                </li>
                <li>
                  <i class="fas fa-check" aria-hidden="true"></i>Character Animation
                </li>
              </ul>
              <div class="btn_gap">
                <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED <i class="fal fa-arrow-circle-right" aria-hidden="true"></i>
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
              <img src="{{ asset('images/logo-banner.png') }}">
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
              <!-- <h6 class="small">Why Choose Us As</h6> -->
              <h2 class="head">Why Choose Us for Logo Design:</h2>
              <p class="para">At Pro Website Design, we understand the importance of a compelling logo in defining your brand identity. Here's why you should entrust us with your logo design needs:</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="why_bx">
              <img src="{{ asset('images/s2.svg')}}">
              <h5>Expert Designers:</h5>
              <p>Our team comprises seasoned designers who focus on detail and a desire for inspiration. With years of experience crafting logos across various industries, we guarantee a design that encapsulates the essence of your brand and resonates with your target audience.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="why_bx">
              <img src="{{ asset('images/s1.svg')}}">
              <h5>Adapted Solutions:</h5>
              <p>We believe in the power of customization. Unlike generic templates, we provide personalized logo design solutions tailored to your brand's unique vision, values, and objectives. Whether you favor a minimalist aesthetic or bold, vibrant designs, we work closely with you to bring your ideas to life and create a logo that stands out.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="why_bx">
              <img src="{{ asset('images/s4.svg')}}">
              <h5>Client-Centric Approach:</h5>
              <p>Your satisfaction is our top priority. We prioritize clear communication, transparency, and collaboration from the initial consultation to the final delivery. We listen attentively to your feedback and make revisions until you're delighted with the result. </p>
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
                        <h5>"I'm overjoyed with the result!"</h5>
                        <p>"This was a fantastic experience! I'm excited to collaborate with The Pro website design again. It offers the opportunity to gather ideas from incredible designers worldwide."</p>

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
              <!-- <h6 class="small">How It Works</h6> -->
              <h2 class="head">Our Process for Success</h2>
              <p class="para">At Pro Website Design, we are committed to delivering a logo that truly reflects the essence of your brand. Our meticulous process ensures every design is a masterpiece tailored to elevate your brand identity.</p>
            </div>
          </div>
        </div>
        <div class="newslider">
          <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img src="{{ asset('images/icon04.png')}}">
                <span>01</span>
              </div>
              <h5>Discovery Phase:</h5>
              <p>We begin by getting to know your brand inside and out. Through in-depth discussions and research, we uncover your brand's values, target audience, and competitive landscape to lay the foundation for the design process.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp midd">
              <div class="d-flex">
                <img src="{{ asset('images/icon05.png')}}">
                <span>02</span>
              </div>
              <h5>Concept Development:</h5>
              <p>Armed with insights from the discovery phase, our team of expert designers brainstorm ideas and concepts for your logo. We explore various creative directions, sketching rough concepts before refining and selecting the most promising designs to move forward.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img src="{{ asset('images/icon06.png')}}">
                <span>03</span>
              </div>
              <h5>Design Iteration:</h5>
              <p>With the chosen concepts in hand, we dive into the design phase, meticulously refining each element to perfection. From typography and color arrangements to iconography and layout, we pay attention to every detail to certify the final design captures the essence of your brand.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img src="{{ asset('images/icon04.png')}}">
                <span>04</span>
              </div>
              <h5>Client Collaboration:</h5>
              <p>Your input is invaluable to us. We present our initial design concepts for your feedback, encouraging open communication and collaboration every step of the way. Your insights help us fine-tune the design until it aligns perfectly with your idea and objectives.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp midd">
              <div class="d-flex">
                <img src="{{ asset('images/icon05.png')}}">
                <span>05</span>
              </div>
              <h5>Revision and Refinement:</h5>
              <p>Based on your feedback, we make necessary revisions and refinements to the design, ensuring it meets your expectations and exceeds industry standards. We iterate until you are delighted with the final result, guaranteeing a logo that resonates with your audience and leaves a lasting impression.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img src="{{ asset('images/icon06.png')}}">
                <span>06</span>
              </div>
              <h5>Delivery and Support:</h5>
              <p>Once the design is approved, we release the final logo files in various formats, ready for use across all your marketing materials and platforms. Our support doesn't end there; we're always here to provide assistance and guidance as your brand grows and evolves. With Pro Website Design, your logo journey is just the beginning of a successful brand identity transformation.</p>
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





<section class="how_it">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="how_txt">
              <!-- <h6 class="small">How It Works</h6> -->
              <h2 class="head">Seven-Step Video Animation Creation Process</h2>
              <p class="para">Video animation requires a lot of teamwork to bring our clients' ideas to life. We follow a six-step process to create phenomenal video animations.</p>
            </div>
          </div>
        </div>
        <div class="newslider">
          <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img src="{{ asset('images/icon04.png') }}">
                <span>01</span>
              </div>
              <h5>Concept Development</h5>
              <p>We begin by interpreting your objectives, target audience, and message. This phase involves brainstorming ideas, storyboarding, and outlining the overall concept for the animation.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp midd">
              <div class="d-flex">
                <img src="{{ asset('images/icon05.png') }}">
                <span>02</span>
              </div>
              <h5>Scriptwriting</h5>
              <p>Once the concept is finalized, our experienced scriptwriters craft a compelling script that effectively communicates your message. The script supplies the foundation for the entire animation.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img src="{{ asset('images/icon06.png') }}">
                <span>03</span>
              </div>
              <h5>Visual Design</h5>
              <p>With the script, our designers create visual elements such as characters, backgrounds, and graphics that align with your brand identity and storytelling style. This stage focuses on defining the look and feel of the animation.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img src="{{ asset('images/icon04.png') }}">
                <span>04</span>
              </div>
              <h5>Animation Production</h5>
              <p>The production phase involves bringing the visual elements to life through animation. Using industry-leading software and techniques, our animators meticulously animate each scene according to the storyboard and script.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp midd">
              <div class="d-flex">
                <img src="{{ asset('images/icon05.png') }}">
                <span>05</span>
              </div>
              <h5>Sound Design and Voiceover</h5>
              <p>Sound design plays a central role in enhancing the overall impact of the animation. We carefully select background music, sound effects, and voiceover artists to complement the visuals and convey the intended emotions.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img src="{{ asset('images/icon06.png') }}">
                <span>06</span>
              </div>
              <h5>Review and Revision</h5>
              <p>Before finalizing the animation, we provide you with a preview version for review and feedback. We welcome revisions or adjustments to ensure the animation meets your expectations and aligns with your goals.</p>
            </div>
          </div>
           <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img src="{{ asset('images/icon06.png') }}">
                <span>07</span>
              </div>
              <h5>Delivery</h5>
              <p>Once the animation is approved, we deliver the final files in the desired format. Whether you need the animation for your website, social media, or presentations, we ensure seamless integration and provide ongoing support as required.</p>
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
    
    

    <section class="pack_sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="pack_txt">
              <h2 class="head">Explore Our Logo Design Packages</h2>
              <p class="para">Each package offers a unique combination of services and features to help you create a logo that sets your brand apart. Explore our packages below to find the perfect solution for your logo design requirements.</p>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon1.png')}}">
                <h4>Professional Logo <br> Package </h4>
                <h5>From USD <span class="yellowcr"> 124.00 </span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Logo Design Concepts
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>By 3 Designers
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Revisions
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>FREE Stationary Design Set
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>FREE MS Word Letterhead
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>48 to 72 hours TAT
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee *
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>15% Discount on your next order
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon2.png')}}">
                <h4>Elite Logo <br> Package </h4>
                <h5>From USD <span class="yellowcr"> 174.00 </span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Logo Design Concepts
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>By 5 Design Artist
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>FREE Stationary Design Set
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
                      <i class="fal fa-check" aria-hidden="true"></i>All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee *
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>48 to 72 hours TAT
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>15% Discount on your next order
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx no-right">
                <img src="{{ asset('images/picon4.png')}}">
                <h4>Business Logo <br> Package </h4>
                <h5>From USD <span class="yellowcr"> 244.00 </span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Logo Design Concepts
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
                      <i class="fal fa-check" aria-hidden="true"></i>Social Media Banners Design
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>Free Email Signature
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>FREE Fax Template
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee *
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon7.png')}}">
                <h4>Gold Logo <br> Package </h4>
                <h5>From USD <span class="yellowcr"> 524.00 </span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>UNLIMITED Logo Design Concepts
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
                      <i class="fal fa-check" aria-hidden="true"></i>All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>100% Ownership Rights
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>100% Unique Design Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>100% Money Back Guarantee *
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon5.png')}}">
                <h4>Teaser/Intro Video <br> Package </h4>
                <h5>From USD <span class="yellowcr"> 145.00 </span></h5>
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
                      <i class="fal fa-check" aria-hidden="true"></i>Professional Voice - Over &amp; Sound Effects
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
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx no-right">
                <img src="{{ asset('images/picon3.png')}}">
                <h4>Startup Video <br> Package </h4>
                <h5>From USD <span class="yellowcr"> 195.00 </span></h5>
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
                      <i class="fal fa-check" aria-hidden="true"></i>Custom Setting, Characters &amp; Graphics
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>Animation Effects &amp; Visualization
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>Voice - Over &amp; Sound Effects (All accents) (M/F)
                    </li>
                    <li>
                      <i class="fal fa-check" aria-hidden="true"></i>Unlimited Revisions
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!--packages  start-->
<!--packages  start-->



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