@extends('layout')

@section('content')
<section class="banner_main">
      <div class="container">
        <div class="row">
        <div class="col-md-6 m-auto">
            <div class="bann_txt">
              <h1>Drive Sales With <br> E-commerce Development Services</h1>
              <p class="para">We assist e-commerce businesses in boosting their revenue and expanding their customer base through a strategic blend of omnichannel presence, customer-focused solutions, and identity verification tools.</p>
              <ul>
                <li>
                  <i class="fas fa-check" aria-hidden="true"></i>Logistics and Warehouse Management
                </li>
                <li>
                  <i class="fas fa-check" aria-hidden="true"></i>Inventory and Shipment Management
                </li>
                <li>
                  <i class="fas fa-check" aria-hidden="true"></i>E-commerce ERP
                </li>
                <li>
                  <i class="fas fa-check" aria-hidden="true"></i>Product Information Management (PIM)
                </li>
                <li>
                  <i class="fas fa-check" aria-hidden="true"></i>Marketing and Sales Management
                </li>
                <li>
                  <i class="fas fa-check" aria-hidden="true"></i>Corporate Billing and Accounting
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
              <img src="{{ asset('images/ecom.png')}}">
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
              <h2 class="head">Why Select Our E-commerce Development Services</h2>
              <p class="para">We offer versatile web solutions catering to different requirements of business. Utilizing our proven development methods, you can achieve these:</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="why_bx">
              <img src="{{ asset('images/s2.svg')}}">
              <h5>Stable Performance</h5>
              <p>Utilizing industry-leading software development methodologies, we engineer e-commerce solutions that boast consistent and robust performance metrics. Our focus lies in crafting platforms that load swiftly, operate seamlessly, and gracefully handle surges in traffic. Moreover, our team is adept at identifying and resolving performance bottlenecks, ensuring a frictionless shopping experience for your customers through ongoing system maintenance.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="why_bx">
              <img src="{{ asset('images/s1.svg')}}">
              <h5>Top-Level Security
              </h5>
              <p>Our suite of services encompasses comprehensive e-commerce security consultancy aimed at aligning your data governance and security strategies with stringent standards such as PCI DSS and GDPR. Furthermore, we conduct meticulous security testing following OWASP methodologies to fortify your e-commerce solution against potential threats and vulnerabilities, safeguarding your valuable assets and customer data.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="why_bx">
              <img src="{{ asset('images/s4.svg')}}">
              <h5>Controllable Growth</h5>
              <p>At the core of our approach is the development of e-commerce systems engineered to support your business's evolution seamlessly. From designing robust system architectures to implementing scalable functional cores, we ensure that your e-commerce solution remains agile and adaptable to accommodate both vertical and horizontal growth.</p>
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
                        <h5>A Partner You Can Trust!</h5>
                        <p>Choosing 'The Pro Website Design' for our e-commerce needs was one of our best decisions. Their top-level security measures and stable performance have given us peace of mind, knowing our online store is safe. Their team's dedication to controllable growth has ensured our platform remains scalable as our business expands. Highly recommended!

</p>

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
              <h2 class="head">Our Process To Success </h2>
              <p class="para">We are transparent in what we offer you, so our e-commerce development process typically unfolds in six key stages. </p>
            </div>
          </div>
        </div>
        <div class="newslider">
          <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img src="assets/images/icon04.png">
                <span>01</span>
              </div>
              <h5>1. Planning and Research:</h5>
              <p>The project's objectives are defined in this initial phase, including identifying the target audience and setting budgetary constraints. Extensive market research and competitor analysis are managed to attain insights into industry trends and customer preferences. Additionally, selecting the most suitable e-commerce platform is crucial, laying the groundwork for subsequent development stages.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp midd">
              <div class="d-flex">
                <img src="assets/images/icon05.png">
                <span>02</span>
              </div>
              <h5>2. Design and Wireframing:</h5>
              <p>The design process begins with creating wireframes and prototypes, which serve as blueprints for the platform's layout and user flow. Attention is paid to user interface design, ensuring it is intuitive, visually attractive, and consistent with the company's branding guidelines. Responsive design principles are applied to provide smooth user experiences across different screen sizes.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img src="assets/images/icon06.png">
                <span>03</span>
              </div>
              <h5>3. Development and Customization:</h5>
              <p>With the design finalized, the development team creates the chosen e-commerce platform and proceeds with customization. Custom features such as product catalogs, checkout processes, and payment gateways are developed and integrated. Strict testing is conducted throughout development to identify and rectify any issues or bugs.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img src="assets/images/icon04.png">
                <span>04</span>
              </div>
              <h5>4. Content Creation and Integration:</h5>
              <p>Compelling content, including product descriptions, images, and videos, is created to showcase the company's offerings effectively. Third-party tools such as analytics and client relationship management (CRM) systems are integrated to enhance functionality. Inventory management and order fulfillment systems are also established to ensure seamless operations.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp midd">
              <div class="d-flex">
                <img src="assets/images/icon05.png">
                <span>05</span>
              </div>
              <h5>5. Testing and Launch:</h5>
              <p>The platform undergoes comprehensive testing to meet functionality, performance, and security standards. Any identified issues or bugs are addressed promptly to guarantee a smooth user experience. Simultaneously, a strategic marketing plan generates excitement and drives traffic to the newly launched platform.</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="how_wrp">
              <div class="d-flex">
                <img src="assets/images/icon06.png">
                <span>06</span>
              </div>
              <h5>6. Optimization and Maintenance:</h5>
              <p>Following the launch, the focus shifted to optimizing the platform based on performance analytics and user feedback. Continuous improvement efforts aim to enhance conversion rates and overall user satisfaction. Ongoing maintenance, information, and support are provided to ensure the platform remains secure, stable, and up-to-date, meeting the business's and its customers' evolving needs.</p>
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
              <h2 class="head">Adapted Solutions for Every Financial Plan</h2>
              <p class="para">Searching for cost-effective, strategic, and outcome-oriented e-commerce development services? Explore our range of budget-friendly packages for solutions that suit your financial requirements without compromising quality or effectiveness.</p>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon1.png')}}">
                <h4>Startup E-Commerce <br> Package </h4>
                <h5>From USD <span class="yellowcr"> $399.00 </span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>Upto 5 Unique Pages Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Conceptual and Dynamic Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Content Management System (CMS)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Mobile Responsive
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Product Reviews
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Up To 20 Products
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Up To 7 Categories
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Full Shopping Cart Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Jquery Slider
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Email Addresses
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete W3C Certified HTML
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete Deployment
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Dedicated Accounts Manager
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Phone / Chat Support
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Ownership Rights
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Satisfaction Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Unique Design Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Money Back Guarantee
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/startup-ecommerce-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon2.png')}}">
                <h4>Beginners E-Commerce <br> Package </h4>
                <h5>From USD <span class="yellowcr"> 995.00 </span> </h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>Upto 15 Unique Pages Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Conceptual and Dynamic Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Content Management System (CMS)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Mobile Responsive
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Easy Product Search
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Product Reviews
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Up To 100 Products
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Up To 7 Categories
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Full Shopping Cart Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Payment Module Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Sales & Inventory Management
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Jquery Slider
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Free Google Friendly Sitemap
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Email Addresses
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete W3C Certified HTML
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Facebook Page Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Twitter Page Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>YouTube Page Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete Deployment
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Dedicated Accounts Manager
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Phone / Chat Support
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Ownership Rights
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Satisfaction Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Unique Design Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Money Back Guarantee
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/beginners-ecommerce-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx no-right">
                <img src="{{ asset('images/picon4.png')}}">
                <h4>Corporate E-Commerce <br> Package </h4>
                <h5>From USD <span class="yellowcr"> 1795.00 </span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>Unlimited Unique Pages Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Conceptual and Dynamic Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Content Management System (CMS)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Mobile Responsive
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Easy Product Search
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Product Reviews
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Products
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Categories
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Full Shopping Cart Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Payment Module Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Sales & Inventory Management
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Jquery Slider
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Free Google Friendly Sitemap
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Email Addresses
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete W3C Certified HTML
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Facebook Page Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Twitter Page Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>YouTube Page Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Instagram Page Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete Deployment
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Dedicated Accounts Manager
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Phone / Chat Support
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Ownership Rights
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Satisfaction Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Unique Design Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Money Back Guarantee
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                   <a href="packages/corporate-ecommerce-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon7.png')}}">
                <h4>Elite E-Commerce <br> Package </h4>
                <h5>From USD <span class="yellowcr"> 3695.00 </span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>UNLIMITED Logo Design Concepts
                    </li>
                    <li>
                      <i class="fal fa-check"></i>By 6 Professional Designers
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Icon Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>UNLIMITED Revisions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Print Media
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Stationary Design (BusinessCard,Letterhead & Envelope)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Invoice Design, Email Signature
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Bi-Fold Brochure (OR) 2 Sided Flyer Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Product Catalog Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Sign age Design (OR) Label Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>T-Shirt Design (OR) Car Wrap Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>E-Commerce Store Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Product Detail Page Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unique Banner Slider
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Featured Products Showcase
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Full Shopping Cart Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Products
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Categories
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Product Rating & Reviews
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Easy Product Search
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Payment Gateway Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Multi-currency Support
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Content Management System
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Cutomer Log-in Area
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Mobile Responsive
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Social Media Plugins Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Tell a Friend Feature
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Social Media Pages
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Facebook , Twitter, YouTube, Google+ & Pinterest Page Designs
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Value Added Services
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Dedicated Account Manager
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Phone / Chat Support
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Revisions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>All Final File Formats
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Ownership Rights
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Satisfaction Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Unique Design Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Money Back Guarantee *
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/elite-ecommerce-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon5.png')}}">
                <h4>Business E-Commerce <br> Package </h4>
                <h5>From USD <span class="yellowcr"> 4994.00 </span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>Complete Custom Design & Development
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unique, User Friendly, Interactive, Dynamic, High End UI Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Banner Designs
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Interactive Sliding Banners
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Special Hover Effects
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Customized Contact us Form
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Multiple Filtration Option (Search by Age, Experience, Talent, Industry etc)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Profile Comparison (As per Category)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>File Converter
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Video Functionality
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Multiple File format Uploading
                    </li>
                    <li>
                      <i class="fal fa-check"></i>User Signup Area ( Talent )
                    </li>
                    <li>
                      <i class="fal fa-check"></i>User Signup Area ( Casting )
                    </li>
                    <li>
                      <i class="fal fa-check"></i>User Signup Area ( Agency )
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Client/User Dashboard Area
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Vendor / Agency Dashboard Area
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Coding and Development
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Content Management System (Custom)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Online Appointment/Scheduling integration (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Online Payment Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Invoicing System
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Automated Email Notifications
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Multi Lingual (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Dynamic Forms
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete Database Creation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>3rd Party Links integration (Instagram, IMDB etc )
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Signup Automated Email Authentication
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Signup Area (For Newsletters, Offers etc.)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Search Bar for Easy Search
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Live Feeds of Social Networks integration (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Search Engine Submission
                    </li>
                    <li>
                      <i class="fal fa-check"></i>SEO friendly
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Mobile Responsive
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Master Admin Panel
                    </li>
                    <li>
                      <i class="fal fa-check"></i>SSL Certification ( to make the website and it’s informative secured )
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 Year Free Hosting
                    </li>
                    <li>
                      <i class="fal fa-check"></i>6 Months of Free Maintenance
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Professional Team of Expert Designers and Developers
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete Deployment
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete W3C Validation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Dedicated Team of Designers and Developers
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/business-ecommerce-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx no-right">
                <img src="{{ asset('images/picon3.png')}}">
                <h4>Automated/Interactive <br> E-Commerce Package </h4>
                <h5>From USD <span class="yellowcr"> 7995.00 </span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>Unlimited Page Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Content Management System (CMS)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unique Pages and UI Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete Custom Development
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Process Automation Tools
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Newsfeed Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Social Media Plugins Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Upto 40 Stock images
                    </li>
                    <li>
                      <i class="fal fa-check"></i>10 Unique Banner Designs
                    </li>
                    <li>
                      <i class="fal fa-check"></i>JQuery Slider
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Search Engine Submission
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Free Google Friendly Sitemap
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Email Addresses
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Social Media Page Designs (Facebook, Twitter, Instagram)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete W3C Certified HTML
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete Deployment
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Satisfaction Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Unique Design Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Money Back Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Automated Inventory/Shipping/Supplier Module:
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Manage thousands to millions of inventory with ease and check stock levels in real-time. Receive low inventory notifications and generate purchase orders to replenish your stock.
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Suppliers Integration (API NEEDED)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Shipper Integration (API NEEDED)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Order management
                    </li>
                    <li>
                      <i class="fal fa-check"></i>LOT numbers and expire date tracking
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Transfer stock between warehouses (If Warehouse - API NEEDED)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Receive stock into a specific warehouse (If Warehouse - API NEEDED)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Fulfill orders from a particular warehouse (If Warehouse - API NEEDED)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Stock Management
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Actionable Insights
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Real- Time Visibility
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Inventory Opportunities
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Advanced Features: (API Needed For Suppliers/Warehouse)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Speak to suppliers during trivial conversations.
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Set and send actions to suppliers regarding governance and compliance materials. Place purchasing requests.
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Research and answer internal questions regarding procurement functionalities or a supplier/supplier set.
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Receiving/filing/documentation of invoices and payments/order requests
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Machine Learning (ML) for Supply Chain Planning (SCP)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Machine Learning for Warehouse Management
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Natural Language Processing (NLP) for Data Cleansing and Building Data Robustness
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Automated Invoices & Estimates
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Create beautiful, professional invoices & estimates in just a few seconds and then instantly email them as PDF's directly to your customers or prospects.
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Automated Split invoicing
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Automated Combine invoices
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Invoice templates
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Automated Barcode Scanning
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Scan inventory into your orders, generate barcodes for your documents, and search for inventory or documents by scanning barcodes.
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Locations and Zones
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Have multiple warehouses, offices, or retail stores? No problem. Easily track where all your inventory is by organizing everything into locations and zones. Organize inventory items using custom attributes such as size, color, and location. View how many you have globally or at each location.
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Customer Accounts
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Performance and analytics
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Customization of Personal Details
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Process management
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Sales Automation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Team Collaboration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Marketing Automation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Security
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Integrations
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Mobile Notifications
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Sales Reports
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Trend Analytics
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Forecasting
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Territory Management
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Account Management
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Event Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Advanced Data Security
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Purchase Orders
                    </li>
                    <li>
                      <i class="fal fa-check"></i>With integrated purchase orders, you can easily replenish your inventory levels by ordering more stock and even track when those new items will arrive.
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Partial orders fulfill
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Backordering
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Financial Reports
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Generate extremely detailed reports for your inventory, sales and services. Filter your reports by date-range and category to see what's making you the most money.
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/automated-interactive-ecommerce-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




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
                        data-src="{{ asset('images/clutch.png')}}">
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