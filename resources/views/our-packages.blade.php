@extends('layout')

@section('content')
<section class="inner_banner pack_pkg">
      <ul class="smm_patti">
        <li>
          <a href="javascript:;">
            <i class="fab fa-facebook-f" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="javascript:;">
            <i class="fab fa-twitter" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="javascript:;">
            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="javascript:;">
            <i class="fab fa-instagram" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
      <div class="container">
        <div class="row">
          <div class="col-md-6"> </div>
          <div class="col-md-6">
            <div class="inner_wrp">
              <h3 class="head">Top Quality Web <br> Design Services</h3> 
            </div>
            <div class="btn_gap">
                <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED <i class="fal fa-arrow-circle-right" aria-hidden="true"></i> </a> 
                <a href="javascript:;" class="theme_btn1" onclick="setButtonURL();"> <i class="fas fa-comment-alt" aria-hidden="true"></i> Chat Now </a> 
              </div>
          </div>  
        </div>
      </div>
    </section>
    <section class="logo-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo_wrp log">
                            <div class="item">
                                <div class="logo_tab_platform">
                                    <img src="{{ asset('images/platform-logo-img-01.webp') }}" class="ImgFluid">
                                    <h5>WordPress</h5>
                                </div>
                            </div>
                            <div class="item">
                                 <div class="logo_tab_platform">
                                    <img src="{{ asset('images/platform-logo-img-03.webp') }}" class="ImgFluid">
                                    <h5>WooCommerce</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="logo_tab_platform">
                                    <img src="{{ asset('images/platform-logo-img-09.webp') }}" class="ImgFluid">
                                    <h5>Magento</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="logo_tab_platform">
                                    <img src="{{ asset('images/platform-logo-img-05.webp') }}" class="ImgFluid">
                                    <h5>Laravel</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="logo_tab_platform">
                                    <img src="{{ asset('images/platform-logo-img-06.webp') }}" class="ImgFluid">
                                    <h5>Veu.js</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="logo_tab_platform">
                                    <img src="{{ asset('images/platform-logo-img-07.webp') }}" class="ImgFluid">
                                    <h5>Angular</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="logo_tab_platform">
                                    <img src="{{ asset('images/platform-logo-img-08.webp') }}" class="ImgFluid">
                                    <h5>React</h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="logo_tab_platform">
                                    <img src="{{ asset('images/platform-logo-img-10.webp') }}" class="ImgFluid">
                                    <h5>Nuxt.js</h5>
                                </div>
                            </div>
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
              <h2 class="head">Transparent Pricing: Empowering Your Budget</h2>
              <p class="para">At Pro Website Design, we believe in transparency and empowerment regarding pricing. We aim to provide high-quality digital solutions that align with your budget and deliver exceptional value. Our pricing structure is clear, straightforward, and fitted to your needs. </p>
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
          <div class="row">
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon1.png')}}">
                <h4>Basic Website <br> Package </h4>
                <h5>From USD  <span class="yellowcr"> 249.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>3 Page Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>2 Stock Images
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 jQuery Slider Banner
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Contact/Query Form
                    </li>
                    <li>
                      <i class="fal fa-check"></i>48 to 72 hours TAT
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
                      <i class="fal fa-check"></i>100% Money Back Guarantee *
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/basic-website-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon2.png')}}">
                <h4>Startup Website <br> Package </h4>
                <h5>From USD <span class="yellowcr"> 499.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>5 Page Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>5 Stock Photos
                    </li>
                    <li>
                      <i class="fal fa-check"></i>3 Banner Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 jQuery Slider Banner
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE Google Friendly Sitemap
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete W3C Certified HTML
                    </li>
                    <li>
                      <i class="fal fa-check"></i>48 to 72 hours TAT
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
                    <li>
                      <i class="fal fa-check"></i>Mobile Responsive will be Additional $200*
                    </li>
                    <li>
                      <i class="fal fa-check"></i>CMS will be Additional $250*
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/startup-website-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx no-right">
                <img src="{{ asset('images/picon4.png')}}">
                <h4>Professional Website <br> Package </h4>
                <h5>From USD <span class="yellowcr"> 649.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>10 Unique Pages Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>CMS / Admin Panel Support
                    </li>
                    <li>
                      <i class="fal fa-check"></i>8 Stock images
                    </li>
                    <li>
                      <i class="fal fa-check"></i>5 Banner Designs
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Mobile Responsive
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 jQuery Slider Banner
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE Google Friendly Sitemap
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete W3C Certified HTML
                    </li>
                    <li>
                      <i class="fal fa-check"></i>48 to 72 hours TAT
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
                      <i class="fal fa-check"></i>100% Money Back Guarantee *
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/professional-website-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon7.png')}}">
                <h4>Elite Website <br> Package </h4>
                <h5>From USD <span class="yellowcr"> 1249.00</span></h5>
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
                      <i class="fal fa-check"></i>Mobile Responsive
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Online Reservation/Appointment Tool (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Online Payment Integration (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Forms
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Lead Capturing Forms (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Striking Hover Effects
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Newsletter Subscription (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Newsfeed Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Social Media Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Search Engine Submission
                    </li>
                    <li>
                      <i class="fal fa-check"></i>5 Stock Photos
                    </li>
                    <li>
                      <i class="fal fa-check"></i>3 Unique Banner Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 jQuery Slider Banner
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete W3C Certified HTML
                    </li>
                    <li>
                      <i class="fal fa-check"></i>48 to 72 hours TAT
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
                      <i class="fal fa-check"></i>100% Money Back Guarantee *
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/elite-website-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon5.png')}}">
                <h4>Corporate Website <br> Package </h4>
                <h5>From USD <span class="yellowcr"> 1949.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>15 to 20 Pages Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Made, Interactive, Dynamic & High End Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom WP (or) Custom PHP Development
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 jQuery Slider Banner
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Up to 10 Custom Made Banner Designs
                    </li>
                    <li>
                      <i class="fal fa-check"></i>10 Stock Images
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Revisions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Special Hoover Effects
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Content Management System (CMS)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Online Appointment/Scheduling/Online Ordering Integration (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Online Payment Integration (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Multi Lingual (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Dynamic Forms (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Signup Area (For Newsletters, Offers etc.)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Search Bar
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Live Feeds of Social Networks integration (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Mobile Responsive
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE 5 Years Domain Name
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Free Google Friendly Sitemap
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Search Engine Submission
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete W3C Certified HTML
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Industry Specified Team of Expert Designers and Developers
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete Deployment
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Dedicated Accounts Manager
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
                  <a href="packages/corporate-website-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx no-right">
                <img src="{{ asset('images/picon3.png')}}">
                <h4>Business Website <br> Package </h4>
                <h5>From USD <span class="yellowcr"> 3294.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>15 to 20 Pages Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>15 Seconds 2D Explainer Video
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Voice - Over & Sound Effects
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Professional Script Writing
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Storyboard
                    </li>
                    <li>
                      <i class="fal fa-check"></i>SEO Meta Tags
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Made, Interactive, Dynamic & High End Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom WP (or) Custom PHP Development
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 jQuery Slider Banner
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Up to 10 Custom Made Banner Designs
                    </li>
                    <li>
                      <i class="fal fa-check"></i>10 Stock Images
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Revisions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Special Hoover Effects
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Content Management System (CMS)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Online Appointment/Scheduling/Online Ordering Integration (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Online Payment Integration (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Multi Lingual (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Dynamic Forms (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Signup Area (For Newsletters, Offers etc.)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Search Bar
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Live Feeds of Social Networks integration (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Mobile Responsive
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE 5 Years Domain Name
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Free Google Friendly Sitemap
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Search Engine Submission
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete W3C Certified HTML
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Industry Specified Team of Expert Designers and Developers
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete Deployment
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Dedicated Accounts Manager
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
                  <a href="packages/business-corporate-website-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx no-right">
                <img src="{{ asset('images/picon3.png')}}">
                <h4>Automated/Interactive Conferencing Portal Package</h4>
                <h5>From USD <span class="yellowcr"> 6999.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>Upto 20 Stock Images
                    </li>
                    <li>
                      <i class="fal fa-check"></i>20 Unique Banner Designs
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Page Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Content Management System (CMS)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unique Pages And UI Design
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
                      <i class="fal fa-check"></i>JQuery Slider
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Search Engine Submission
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Free Google Friendly Sitemap
                    </li>
                    <li>
                      <i class="fal fa-check"></i>3 Years FREE Hosting
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
                      <i class="fal fa-check"></i>Complete Deployment 100%
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Automated Course Creation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Video Conferencing
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Skills/Certification Tracking
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Mobile Learning
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Asynchronous Learning
                    </li>
                    <li>
                      <i class="fal fa-check"></i>CRM Features
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Gamification
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Social Learning/Message Boards
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Motivational Triggers
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Forums And Webinars
                    </li>
                    <li>
                      <i class="fal fa-check"></i>E-commerce And Subscriptions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Online Course Booking
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Excellent Reporting
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Invoicing Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Financial Integrations
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Student Information management
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Automated communications
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Learning Management System
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Quick And Easy Course Scheduling
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Reporting And Data Analysis
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Assessment Management & Live Feedback
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Gradebooks
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Quick User Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Easy Payment Methods
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Online Communities & Social Engagement
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Curation of Resources And Adding Own Resources
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Satisfaction Guarantee 100%
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unique Design Guarantee 100%
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Money Back Guarantee *
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/automated-interactive-conferencing-portal-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tabs ecompack">
        <div class="row">

        <div class="col-md-4">
           <div class="pack_bx">
              <img src="{{ asset('images/picon1.png')}}">
              <h4>Startup E-Commerce <br> Package </h4>
              <h5>From USD <span class="yellowcr"> $399.00</span></h5>
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
              <h5>From USD <span class="yellowcr"> 995.00</span></h5>
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
              <h5>From USD <span class="yellowcr"> 1795.00</span></h5>
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
              <h5>From USD <span class="yellowcr">3695.00</span></h5>
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
              <h5>From USD <span class="yellowcr">4994.00</span></h5>
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
              <h5>From USD <span class="yellowcr"> 7995.00 </span</h5>
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
        <div class="tabs wordpack">
          <div class="row">
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon1.png')}}">
                <h4>Basic Wordpress <br> Package </h4>
                <h5>From USD <span class="yellowcr">215.00 </span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>3 Page Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>2 Stock Images
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 jQuery Slider Banner
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Contact/Query Form
                    </li>
                    <li>
                      <i class="fal fa-check"></i>48 to 72 hours TAT
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
                      <i class="fal fa-check"></i>100% Money Back Guarantee *
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/basic-wordpress-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon2.png')}}">
                <h4>Startup Wordpress <br> Package </h4>
                <h5>From USD <span class="yellowcr">349.00 </span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>5 Page Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>5 Stock Photos
                    </li>
                    <li>
                      <i class="fal fa-check"></i>3 Banner Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 jQuery Slider Banner
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE Google Friendly Sitemap
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete W3C Certified HTML
                    </li>
                    <li>
                      <i class="fal fa-check"></i>48 to 72 hours TAT
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
                    <li>
                      <i class="fal fa-check"></i>Mobile Responsive will be Additional $200*
                    </li>
                    <li>
                      <i class="fal fa-check"></i>CMS will be Additional $250*
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/startup-wordpress-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx no-right">
                <img src="{{ asset('images/picon4.png')}}">
                <h4>Professional Wordpress <br> Package </h4>
                <h5>From USD <span class="yellowcr">649.00 </span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>10 Unique Pages Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>CMS / Admin Panel Support
                    </li>
                    <li>
                      <i class="fal fa-check"></i>8 Stock images
                    </li>
                    <li>
                      <i class="fal fa-check"></i>5 Banner Designs
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Mobile Responsive
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 jQuery Slider Banner
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE Google Friendly Sitemap
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete W3C Certified HTML
                    </li>
                    <li>
                      <i class="fal fa-check"></i>48 to 72 hours TAT
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
                      <i class="fal fa-check"></i>100% Money Back Guarantee *
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/professional-wordpress-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon7.png')}}">
                <h4>Elite Wordpress <br> Package </h4>
                <h5>From USD <span class="yellowcr">1249.00</span></h5>
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
                      <i class="fal fa-check"></i>Mobile Responsive
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Online Reservation/Appointment Tool (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Online Payment Integration (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Forms
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Lead Capturing Forms (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Striking Hover Effects
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Newsletter Subscription (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Newsfeed Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Social Media Integration
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Search Engine Submission
                    </li>
                    <li>
                      <i class="fal fa-check"></i>5 Stock Photos
                    </li>
                    <li>
                      <i class="fal fa-check"></i>3 Unique Banner Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 jQuery Slider Banner
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete W3C Certified HTML
                    </li>
                    <li>
                      <i class="fal fa-check"></i>48 to 72 hours TAT
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
                      <i class="fal fa-check"></i>100% Money Back Guarantee *
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/elite-wordpress-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon5.png')}}">
                <h4>Corporate Wordpress <br> Package </h4>
                <h5>From USD <span class="yellowcr">2495.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>15 to 20 Pages Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Made, Interactive, Dynamic & High End Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom WP (or) Custom PHP Development
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 jQuery Slider Banner
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Up to 10 Custom Made Banner Designs
                    </li>
                    <li>
                      <i class="fal fa-check"></i>10 Stock Images
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Revisions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Special Hoover Effects
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Content Management System (CMS)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Online Appointment/Scheduling/Online Ordering Integration (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Online Payment Integration (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Multi Lingual (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Dynamic Forms (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Signup Area (For Newsletters, Offers etc.)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Search Bar
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Live Feeds of Social Networks integration (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Mobile Responsive
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE 5 Years Domain Name
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Free Google Friendly Sitemap
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Search Engine Submission
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete W3C Certified HTML
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Industry Specified Team of Expert Designers and Developers
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete Deployment
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Dedicated Accounts Manager
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
                  <a href="packages/corporate-wordpress-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx no-right">
                <img src="{{ asset('images/picon3.png')}}">
                <h4>Business Wordpress <br> Package </h4>
                <h5>From USD <span class="yellowcr">3294.00 </span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>15 to 20 Pages Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>15 Seconds 2D Explainer Video
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Voice - Over & Sound Effects
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Professional Script Writing
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Storyboard
                    </li>
                    <li>
                      <i class="fal fa-check"></i>SEO Meta Tags
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Made, Interactive, Dynamic & High End Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom WP (or) Custom PHP Development
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 jQuery Slider Banner
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Up to 10 Custom Made Banner Designs
                    </li>
                    <li>
                      <i class="fal fa-check"></i>10 Stock Images
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Revisions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Special Hoover Effects
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Content Management System (CMS)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Online Appointment/Scheduling/Online Ordering Integration (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Online Payment Integration (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Multi Lingual (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Dynamic Forms (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Signup Area (For Newsletters, Offers etc.)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Search Bar
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Live Feeds of Social Networks integration (Optional)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Mobile Responsive
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE 5 Years Domain Name
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Free Google Friendly Sitemap
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Search Engine Submission
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete W3C Certified HTML
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Industry Specified Team of Expert Designers and Developers
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Complete Deployment
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Dedicated Accounts Manager
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
                  <a href="packages/business-wordpress-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tabs brand-pack">
          <div class="row">
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon1.png')}}">
                <h4>Startup Collateral <br> Package </h4>
                <h5>From USD <span class="yellowcr">99.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>2 Stationery Design Set
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE Fax Template
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Print Ready Formats
                    </li>
                    <li>
                      <i class="fal fa-check"></i>UNLIMITED Revisions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Satisfaction Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Money Back Guarantee *
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/startup-collateral-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon2.png')}}">
                <h4>Collateral Classic <br> Package </h4>
                <h5>From USD <span class="yellowcr">199.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>2 Stationery Design Set
                    </li>
                    <li>
                      <i class="fal fa-check"></i>UNLIMITED Revisions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Flyer Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Brochure Design (Bi-fold/Tri-fold)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Satisfaction Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Money Back Guarantee *
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/collateral-classic-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx no-right">
                <img src="{{ asset('images/picon4.png')}}">
                <h4>Premium Collateral <br> Package </h4>
                <h5>From USD <span class="yellowcr">399.00 </span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>2 Stationery Design Set
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Packaging Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>UNLIMITED Revisions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>T-Shirt Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Satisfaction Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Money Back Guarantee *
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/premium-collateral-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon7.png')}}">
                <h4>Unlimited Collateral <br> Package </h4>
                <h5>From USD <span class="yellowcr">499.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>2 Stationery Design Set
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Menu Card Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>T-Shirt Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 Banner Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Satisfaction Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Money Back Guarantee *
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/unlimited-collateral-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon5.png')}}">
                <h4>Basic Logo <br> Package </h4>
                <h5>From USD <span class="yellowcr">44.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>1 Custom Logo Design Concepts
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 Dedicated Designer
                    </li>
                    <li>
                      <i class="fal fa-check"></i>4 Revisions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>48 to 72 hours TAT
                    </li>
                    <li>
                      <i class="fal fa-check"></i>All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Unique Design Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Satisfaction Guarantee
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Money Back Guarantee *
                    </li>
                    <li>
                      <i class="fal fa-check"></i>100% Ownership Rights
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/basic-logo-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx no-right">
                <img src="{{ asset('images/picon3.png')}}">
                <h4>Start Up Logo <br> Package </h4>
                <h5>From USD <span class="yellowcr">74.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>4 Custom Logo Design Concepts
                    </li>
                    <li>
                      <i class="fal fa-check"></i>By 2 Designers
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE Icon
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE Business Card Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>UNLIMITED Revisions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>48 to 72 hours TAT
                    </li>
                    <li>
                      <i class="fal fa-check"></i>All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)
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
                    <li>
                      <i class="fal fa-check"></i>100% Ownership Rights
                    </li>
                  </ul>
                </div>
                <div class="btn_pack">
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="theme_btn">GET STARTED</a>
                  <a href="packages/startup-logo-package" class="detail_btn">View Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tabs logopack">
          <div class="row">
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon1.png')}}">
                <h4>Professional Logo <br> Package </h4>
                <h5>From USD <span class="yellowcr">124.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>UNLIMITED Logo Design Concepts
                    </li>
                    <li>
                      <i class="fal fa-check"></i>By 3 Designers
                    </li>
                    <li>
                      <i class="fal fa-check"></i>UNLIMITED Revisions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE Stationary Design Set
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE MS Word Letterhead
                    </li>
                    <li>
                      <i class="fal fa-check"></i>48 to 72 hours TAT
                    </li>
                    <li>
                      <i class="fal fa-check"></i>All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)
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
                    <li>
                      <i class="fal fa-check"></i>15% Discount on your next order
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
                <h5>From USD <span class="yellowcr">174.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>UNLIMITED Logo Design Concepts
                    </li>
                    <li>
                      <i class="fal fa-check"></i>By 5 Design Artist
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE Stationary Design Set
                    </li>
                    <li>
                      <i class="fal fa-check"></i>UNLIMITED Revisions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE MS Word Letterhead
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Free Email Signature
                    </li>
                    <li>
                      <i class="fal fa-check"></i>All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)
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
                    <li>
                      <i class="fal fa-check"></i>48 to 72 hours TAT
                    </li>
                    <li>
                      <i class="fal fa-check"></i>15% Discount on your next order
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
                <h5>From USD <span class="yellowcr">244.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>UNLIMITED Logo Design Concepts
                    </li>
                    <li>
                      <i class="fal fa-check"></i>By 8 Design Artist
                    </li>
                    <li>
                      <i class="fal fa-check"></i>UNLIMITED Revisions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>2 Stationary Design Sets
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Double Sided Flyer Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Bi-Fold Brochure
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE MS Word Letterhead
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Social Media Banners Design
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Free Email Signature
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE Fax Template
                    </li>
                    <li>
                      <i class="fal fa-check"></i>All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)
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
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon7.png')}}">
                <h4>Gold Logo <br> Package </h4>
                <h5>From USD <span class="yellowcr">524.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>UNLIMITED Logo Design Concepts
                    </li>
                    <li>
                      <i class="fal fa-check"></i>By 8 Design Artist
                    </li>
                    <li>
                      <i class="fal fa-check"></i>UNLIMITED Revisions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>2 Stationary Design Sets
                    </li>
                    <li>
                      <i class="fal fa-check"></i>FREE MS Word Letterhead
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Free Email Signature
                    </li>
                    <li>
                      <i class="fal fa-check"></i>3 Page Custom Website
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Content Management System
                    </li>
                    <li>
                      <i class="fal fa-check"></i>2 Stock Photos
                    </li>
                    <li>
                      <i class="fal fa-check"></i>2 Banner Designs
                    </li>
                    <li>
                      <i class="fal fa-check"></i>jQuery Slider
                    </li>
                    <li>
                      <i class="fal fa-check"></i>All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)
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
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon5.png')}}">
                <h4>Teaser/Intro Video <br> Package </h4>
                <h5>From USD <span class="yellowcr">145.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>10 Seconds Video
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Professional Script
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Sample Theme
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Storyboard
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Artwork
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Animation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Professional Voice - Over & Sound Effects
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 week Delivery
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Revisions
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
                <h5>From USD <span class="yellowcr">195.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>30s Duration - HD 1080
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Professional Script
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Storyboard
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Sample Themes
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Setting, Characters & Graphics
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Animation Effects & Visualization
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Voice - Over & Sound Effects (All accents) (M/F)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Revisions
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
        <div class="tabs videopack">
          <div class="row">
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon1.png')}}">
                <h4>Teaser/Intro Video <br> Package </h4>
                <h5>From USD <span class="yellowcr">145.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>10 Seconds Video
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Professional Script
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Sample Theme
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Storyboard
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Artwork
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Animation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Professional Voice - Over & Sound Effects
                    </li>
                    <li>
                      <i class="fal fa-check"></i>1 week Delivery
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Revisions
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
                <h4>Startup Video <br> Package </h4>
                <h5>From USD <span class="yellowcr">195.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>30s Duration - HD 1080
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Professional Script
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Storyboard
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Sample Themes
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Custom Setting, Characters & Graphics
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Animation Effects & Visualization
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Voice - Over & Sound Effects (All accents) (M/F)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Revisions
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
                <img src="{{ asset('images/picon1.png')}}">
                <h4>Classic Video <br> Package </h4>
                <h5>From USD <span class="yellowcr">395.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>60 Second Video - HD 1080
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Professional Script
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Sample Theme
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Storyboard
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Animation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Voice - Over & Sound Effects
                    </li>
                    <li>
                      <i class="fal fa-check"></i>5 weeks Delivery
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Revisions
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
                <h4>Premium Video <br> Package </h4>
                <h5>From USD <span class="yellowcr">695.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>90 Second Video - HD 1080
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Professional Script
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Sample Theme
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Storyboard
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Animation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Voice - Over & Sound Effects
                    </li>
                    <li>
                      <i class="fal fa-check"></i>6 Weeks Delivery
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Revisions
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
                <h4>Deluxe Video <br> Package </h4>
                <h5>From USD <span class="yellowcr">895.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>120 Second Video - HD 1080
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Professional Script
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Sample Theme
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Storyboard
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Animation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Voice - Over & Sound Effects
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Unlimited Revisions
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
        <div class="tabs seopack">
          <div class="row">
            <div class="col-md-4">
              <div class="pack_bx">
                <img src="{{ asset('images/picon7.png')}}">
                <h4>Startup SEO <br> Package </h4>
                <h5>From USD <span class="yellowcr">350.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>Website Audit
                    </li>
                    <li>
                      <i class="fal fa-check"></i>15 Selected Keywords Targeting
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Keyword Research
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Keyword Grouping
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Keyword Mapping
                    </li>
                    <li class="heading">
                      <i class="fal fa-check"></i>On-Page Optimization
                    </li>
                    <li>
                      <i class="fal fa-check"></i>SEO Road Map
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Blog Creation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Webpage Copywriting (3 pages, 350 words per page)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Title Tag Optimization (10 titles)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Meta Description Optimization (10 meta description)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Meta Keyword Optimization (10 meta keywords)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Domain Redirect Optimization (10 domain redirects)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>xml Sitemap Optimization
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Robots.txt Check
                    </li>
                    <li>
                      <i class="fal fa-check"></i>URL Rewrites (10 URL rewrites)
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Broken Link Report
                    </li>
                    <li class="heading">
                      <i class="fal fa-check"></i>Initial Off-Page SEO
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Social Bookmarking
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Slide Share Marketing
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Forums/FAQ’s
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Link Building
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Directory Submission
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Local Business Listings
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
                <h4>Scaling SEO <br> Package </h4>
                <h5>From USD <span class="yellowcr">750.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>Business Analysis
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Consumer Analysis
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Competitor Analysis
                    </li>
                    <li>
                      <i class="fal fa-check"></i>35 Selected Keywords Targeting
                    </li>
                    <li>
                      <i class="fal fa-check"></i>15 Pages Keyword Targeted
                    </li>
                    <li class="heading">Webpage Optimization</li>
                    <li>
                      <i class="fal fa-check"></i>Meta Tags Creation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Keyword Optimization
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Image Optimization
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Inclusion of anchors
                    </li>
                    <li class="heading">Tracking &amp; Analysis</li>
                    <li>
                      <i class="fal fa-check"></i>Google Analytics Installation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Google Webmaster Installation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Call To Action Plan
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Creation of Sitemaps
                    </li>
                    <li class="heading">Reporting</li>
                    <li>
                      <i class="fal fa-check"></i>Monthly Reporting
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Email Support
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Phone Support
                    </li>
                    <li class="heading">Off Page Optimization</li>
                    <li>
                      <i class="fal fa-check"></i>Social Bookmarking
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Slide Share Marketing
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Forums/FAQ’s
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Link Building
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Directory Submission
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Local Business Listings
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Local Business Listings
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
                <h4>Venture Plan <br> Package </h4>
                <h5>From USD <span class="yellowcr">1200.00</span></h5>
                <p>Package Includes</p>
                <div class="pkg_body">
                  <ul class="listscroll">
                    <li>
                      <i class="fal fa-check"></i>Business Analysis
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Consumer Analysis
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Competitor Analysis
                    </li>
                    <li>
                      <i class="fal fa-check"></i>60+ Selected Keywords Targeting
                    </li>
                    <li>
                      <i class="fal fa-check"></i>30 Pages Keyword Targeted
                    </li>
                    <li class="heading">
                      <i class="fal fa-check"></i>Webpage Optimization
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Meta Tags Creation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Keyword Optimization
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Image Optimization
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Inclusion of anchors Tags
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Inclusion of anchors Indexing Modifications
                    </li>
                    <li class="heading">
                      <i class="fal fa-check"></i>Tracking &amp; Analysis
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Google Places Inclusions
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Google Analytics Installation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Google Webmaster Installation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Call To Action Plan
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Creation of Sitemaps
                    </li>
                    <li class="heading">
                      <i class="fal fa-check"></i>Reporting
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Monthly Reporting
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Recommendation
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Email Support
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Phone Support
                    </li>
                    <li class="heading">
                      <i class="fal fa-check"></i>Off Page Optimization
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Social Bookmarking
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Slide Share Marketing
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Forums/FAQ’s
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Link Building
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Directory Submission
                    </li>
                    <li>
                      <i class="fal fa-check"></i>Local Business Listings
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
<section class="btm_form">
        <div class="container">
            <div class="row">
                <div class="col-md-7 m-auto">
                    <div class="form">
                       <form class="form-get-quote" action="javascript:void(0)">
                            <h4>Let's Connect and Bring Your Concept to Life!</h4>
                            <p class="para">At Pro Website Design, we're passionate about turning ideas into reality. Let's join forces and collaborate on your project to create something remarkable. We're here to bring it to fruition. Reach out to us today, and let's work together to make your digital objectives a reality!</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="grp">
                                        <input type="text" onkeypress="return /[a-z]/i.test(event.key)" name="quote[name]" minlength="2" placeholder="Full Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="grp">
                                        <input type="email" name="quote[email]" placeholder="Email Address" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="grp">
                                        <input id="phone" onkeypress="return isNumberKey(event)" type="tel"  name="quote[phone]" placeholder="Phone Number" required="">
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
                        <img class="circle lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/circle-form.png">
                        <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/contact-bg.webp">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection