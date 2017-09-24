@extends('layouts.app')

@section('content')

<div class="content-body">
      <div class="tp-banner-container">
        <div class="tp-banner-slider">
          <ul>
            <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="pic/slider/main/1.jpg" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
              <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                <div class="sl-title-top">Welcome to</div>
                <div class="sl-title">Scuba Tribe Maldives</div>
                <div class="sl-title-bot">Personalized <span>Prices</span></div>
              </div>
            </li>
          </ul>
        </div>
        <!-- call out section-->
      <section class="page-section pt-90 pb-80 bg-main pattern relative">
        <div class="container">
          <div class="call-out-box clearfix with-icon">
            <div class="row call-out-wrap">
              <div class="col-md-5">
                <h6 class="title-section-top gray font-4">subscribe today</h6>
                <h2 class="title-section alt-2"><span>Get</span> Latest offers</h2><i class="flaticon-suntour-email call-out-icon"></i>
              </div>
              <div class="col-md-7">
                <form action="php/contacts-process.php" method="post" class="form contact-form mt-10">
                  <div class="input-container">
                    <input type="text" placeholder="Enter your email" value="" name="email" class="newsletter-field mb-0 form-row"><i class="flaticon-suntour-email icon-left"></i>
                    <button type="submit" class="subscribe-submit"><i class="flaticon-suntour-arrow icon-right"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ! call out section-->
      </div>
      <!-- gallery section-->
      <section class="small-section">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h6 class="title-section-top font-4">Happy Memories</h6>
              <h2 class="title-section"><span>Photo</span> Gallery</h2>
              <div class="cws_divider mb-25 mt-5"></div>
              <p>Vestibulum feugiat vitae tortor ut venenatis. Sed cursus, purus eu euismod bibendum, diam nisl suscipit odio, vitae ultrices mauris dolor quis mauris. Curabitur ac metus id leo maximus porta.</p>
            </div>
            <div class="col-md-4"><i class="flaticon-suntour-photo title-icon"></i></div>
          </div>
          <div class="row portfolio-grid">
            <!-- portfolio item-->
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="portfolio-item big">
                <!-- portfolio image--><a href="pic/portfolio/580x285-1@2x.jpg" class="fancy">
                  <div class="portfolio-media"><img src="pic/portfolio/580x285-1.jpg" data-at2x="pic/portfolio/580x285-1@2x.jpg" alt></div></a>
                <div class="links"><a href="pic/portfolio/580x285-1@2x.jpg" class="fancy"><i class="fa fa-expand"></i></a></div>
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="portfolio-item">
                <!-- portfolio image--><a href="pic/portfolio/285x285-1@2x.jpg" class="fancy">
                  <div class="portfolio-media"><img src="pic/portfolio/285x285-1.jpg" data-at2x="pic/portfolio/285x285-1@2x.jpg" alt></div></a>
                <div class="links"><a href="pic/portfolio/285x285-1@2x.jpg" class="fancy"><i class="fa fa-expand"></i></a></div>
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="portfolio-item">
                <!-- portfolio image--><a href="pic/portfolio/285x285-2@2x.jpg" class="fancy">
                  <div class="portfolio-media"><img src="pic/portfolio/285x285-2.jpg" data-at2x="pic/portfolio/285x285-2@2x.jpg" alt></div></a>
                <div class="links"><a href="pic/portfolio/285x285-2@2x.jpg" class="fancy"><i class="fa fa-expand"></i></a></div>
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="portfolio-item">
                <!-- portfolio image--><a href="pic/portfolio/285x285-3@2x.jpg" class="fancy">
                  <div class="portfolio-media"><img src="pic/portfolio/285x285-3.jpg" data-at2x="pic/portfolio/285x285-3@2x.jpg" alt></div></a>
                <div class="links"><a href="pic/portfolio/285x285-3@2x.jpg" class="fancy"><i class="fa fa-expand"></i></a></div>
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="portfolio-item">
                <!-- portfolio image--><a href="pic/portfolio/285x285-4@2x.jpg" class="fancy">
                  <div class="portfolio-media"><img src="pic/portfolio/285x285-4.jpg" data-at2x="pic/portfolio/285x285-4@2x.jpg" alt></div></a>
                <div class="links"><a href="pic/portfolio/285x285-4@2x.jpg" class="fancy"><i class="fa fa-expand"></i></a></div>
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="portfolio-item">
                <!-- portfolio image--><a href="pic/portfolio/285x285-5@2x.jpg" class="fancy">
                  <div class="portfolio-media"><img src="pic/portfolio/285x285-5.jpg" data-at2x="pic/portfolio/285x285-5@2x.jpg" alt></div></a>
                <div class="links"><a href="pic/portfolio/285x285-5@2x.jpg" class="fancy"><i class="fa fa-expand"></i></a></div>
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="portfolio-item">
                <!-- portfolio image--><a href="pic/portfolio/285x285-6@2x.jpg" class="fancy">
                  <div class="portfolio-media"><img src="pic/portfolio/285x285-6.jpg" data-at2x="pic/portfolio/285x285-6@2x.jpg" alt></div></a>
                <div class="links"><a href="pic/portfolio/285x285-6@2x.jpg" class="fancy"><i class="fa fa-expand"></i></a></div>
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="portfolio-item">
                <!-- portfolio image--><a href="pic/portfolio/285x285-7@2x.jpg" class="fancy">
                  <div class="portfolio-media"><img src="pic/portfolio/285x285-7.jpg" data-at2x="pic/portfolio/285x285-7@2x.jpg" alt></div></a>
                <div class="links"><a href="pic/portfolio/285x285-7@2x.jpg" class="fancy"><i class="fa fa-expand"></i></a></div>
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="portfolio-item">
                <!-- portfolio image--><a href="pic/portfolio/285x285-8@2x.jpg" class="fancy">
                  <div class="portfolio-media"><img src="pic/portfolio/285x285-8.jpg" data-at2x="pic/portfolio/285x285-8@2x.jpg" alt></div></a>
                <div class="links"><a href="pic/portfolio/285x285-8@2x.jpg" class="fancy"><i class="fa fa-expand"></i></a></div>
              </div>
            </div>
            <!-- portfolio item-->
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="portfolio-item big">
                <!-- portfolio image--><a href="pic/portfolio/580x285-2@2x.jpg" class="fancy">
                  <div class="portfolio-media"><img src="pic/portfolio/580x285-2.jpg" data-at2x="pic/portfolio/580x285-2@2x.jpg" alt></div></a>
                <div class="links"><a href="pic/portfolio/580x285-2@2x.jpg" class="fancy"><i class="fa fa-expand"></i></a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ! gallery section-->
      <!-- testimonials section-->
      <section class="small-section cws_prlx_section bg-blue-40"><img src="pic/parallax-2.jpg" alt class="cws_prlx_layer">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h6 class="title-section-top font-4">Happy Memories</h6>
              <h2 class="title-section alt-2"><span>Our</span> Testimonials</h2>
              <div class="cws_divider mb-25 mt-5"></div>
            </div>
          </div>
          <div class="row">
            <!-- testimonial carousel-->
            <div class="owl-three-item">
              <!-- testimonial item-->
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/testimonial/top-bg/1.jpg" data-at2x="pic/testimonial/top-bg/1@2x.jpg" alt></div></a>
                  <div class="author"> <img src="pic/testimonial/author/1.jpg" data-at2x="pic/testimonial/author/1@2x.jpg" alt></div>
                </div>
                <!-- testimonial content-->
                <div class="testimonial-body">
                  <h5 class="title"><span>Nicole</span> Beck</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">Suspe blandit orci quis lorem eleifend maximus. Quisque nec.</p><a href="page-about-us.html" class="testimonial-button">Read more</a>
                </div>
              </div>
              <!-- testimonial item-->
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/testimonial/top-bg/2.jpg" data-at2x="pic/testimonial/top-bg/2@2x.jpg" alt></div></a>
                  <div class="author"> <img src="pic/testimonial/author/2.jpg" data-at2x="pic/testimonial/author/2@2x.jpg" alt></div>
                </div>
                <!-- testimonial content-->
                <div class="testimonial-body">
                  <h5 class="title"><span>Peter</span> Robertson</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">Nulla elit justo, dapibus ut lacus ac, ornare elementum neque.</p><a href="page-about-us.html" class="testimonial-button">Read more</a>
                </div>
              </div>
              <!-- testimonial item-->
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/testimonial/top-bg/3.jpg" data-at2x="pic/testimonial/top-bg/3@2x.jpg" alt></div></a>
                  <div class="author"> <img src="pic/testimonial/author/3.jpg" data-at2x="pic/testimonial/author/3@2x.jpg" alt></div>
                </div>
                <!-- testimonial content-->
                <div class="testimonial-body">
                  <h5 class="title"><span>Kathy</span> Harrison</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">Maece facilisis sit amet mauris eget aliquam. Integer vitae.</p><a href="page-about-us.html" class="testimonial-button">Read more</a>
                </div>
              </div>
              <!-- testimonial item-->
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/testimonial/top-bg/1.jpg" data-at2x="pic/testimonial/top-bg/1@2x.jpg" alt></div></a>
                  <div class="author"> <img src="pic/testimonial/author/1.jpg" data-at2x="pic/testimonial/author/1@2x.jpg" alt></div>
                </div>
                <!-- testimonial content-->
                <div class="testimonial-body">
                  <h5 class="title"><span>Nicole</span> Beck</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">Suspe blandit orci quis lorem eleifend maximus. Quisque nec.</p><a href="page-about-us.html" class="testimonial-button">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ! testimonials section-->
    
    </div>

@endsection