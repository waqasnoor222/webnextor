@extends('layout')

@section('content')
<section class="inner_banner contact_bg">
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
                        <img class="circle" src="{{ asset('images/circle-form.png') }}">
                        <img src="{{ asset('images/contact-bg.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
