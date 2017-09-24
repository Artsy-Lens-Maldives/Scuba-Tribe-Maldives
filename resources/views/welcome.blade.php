@extends('layouts.app')

@section('content')

<div class="content-body">
      <div class="tp-banner-container">
        <div class="tp-banner-slider">
          <ul>
            <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="/rs-plugin/assets/loader.gif" data-lazyload="/pic/slider/main/1.jpg" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
              <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                <div class="sl-title-top">Welcome to</div>
                <div class="sl-title">Scuba Tribe Maldives</div>
                <div class="sl-title-bot">We Offer Personalized <span>Prices</span></div>
              </div>
            </li>
          </ul>
        </div>
        <!-- call out section-->
      <section class="page-section-sub pt-90 pb-80 bg-main pattern relative">
        <div class="container">
          <div class="call-out-box clearfix with-icon">
            <div class="row call-out-wrap">
              
              @if(Session::has('msg'))
                <div class="col-md-12">
                  <center>
                    <h2 class="title-section alt-2"><span>{{Session::get('msg')}}, Thanks for subscribing</span></h2>
                  </center>
                </div>
              @else
                <div class="col-md-5">
                  <h6 class="title-section-top gray font-4">subscribe today</h6>
                  <h2 class="title-section alt-2"><span>Get</span> Latest offers</h2>
                </div>
                <div class="col-md-7">
                  <form action="api/subscribe" method="post" class="form contact-form mt-10">
                    {!! csrf_field() !!}
                    <div class="input-container">
                      <input type="text" placeholder="Enter your email" value="" name="email" class="newsletter-field mb-0 form-row"><i class="flaticon-suntour-email icon-left"></i>
                      
                    </div>
                    <button type="submit" class="subscribe-submit"><i class="flaticon-suntour-arrow icon-right"></i></button>
                  </form>
                </div>
              @endif

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
              <h6 class="title-section-top font-4"></h6>
              <h2 class="title-section"><span>About</span> Us</h2>
              <div class="cws_divider mb-25 mt-5"></div>
              <p>Read about our fantastic organization which provides varaities of services which is unmatchable to any other in this industry. </p>
            </div>
            <div class="col-md-4"><i class="flaticon-suntour-photo title-icon"></i></div>
          </div>
          <!-- tabs-->
            <div class="col-md-12 mt-md-40">
              <div class="tabs">
                <div class="block-tabs-btn clearfix">
                  <div data-tabs-id="tabs1" class="tabs-btn active">About us</div>
                  <div data-tabs-id="tabs2" class="tabs-btn">Our mission</div>
                  <div data-tabs-id="tabs3" class="tabs-btn">Our vision</div>
                </div>
                <!-- tabs keeper-->
                <div class="tabs-keeper">
                  <!-- tabs container-->
                  <div data-tabs-id="cont-tabs1" class="container-tabs active">
                    <h6 class="trans-uppercase">Hotel Bohemians</h6>
                    <p>Duis egestas accumsan ipsum, at volutpat elit imperdiet in. Curabitur lacinia, massa quis elementum bibendum, tellus neque porttitor erat, a ornare enim arcu nec mauris. Morbi ac tristique felis. Praesent cursus placerat risus. Duis ut magna quis sem varius consequat.  </p>
                    <ul class="style-3">
                      <li>Nam molestie dolor id auctor sodales;</li>
                      <li>In sagittis dolor vel turpis aliquet pharetra;</li>
                      <li>Quisque non turpis in dui congue dapibus;</li>
                      <li>Vivamus varius nisl quis dictum maximus;</li>
                      <li>Vestibulum scelerisque ligula quis est faucibus tincidunt.</li>
                    </ul>
                  </div>
                  <!-- /tabs container-->
                  <!-- tabs container-->
                  <div data-tabs-id="cont-tabs2" class="container-tabs">
                    <h6 class="trans-uppercase">Hotel Bohemians</h6>
                    <p>Duis egestas accumsan ipsum, at volutpat elit imperdiet in. Curabitur lacinia, massa quis elementum bibendum, tellus neque porttitor erat, a ornare enim arcu nec mauris. Morbi ac tristique felis. Praesent cursus placerat risus. Duis ut magna quis sem varius consequat.  </p>
                    <ul class="style-3">
                      <li>Nam molestie dolor id auctor sodales;</li>
                      <li>In sagittis dolor vel turpis aliquet pharetra;</li>
                      <li>Quisque non turpis in dui congue dapibus;</li>
                      <li>Vivamus varius nisl quis dictum maximus;</li>
                      <li>Vestibulum scelerisque ligula quis est faucibus tincidunt.</li>
                    </ul>
                  </div>
                  <!-- /tabs container-->
                  <!-- tabs container-->
                  <div data-tabs-id="cont-tabs3" class="container-tabs">
                    <h6 class="trans-uppercase">Hotel Bohemians</h6>
                    <p>Duis egestas accumsan ipsum, at volutpat elit imperdiet in. Curabitur lacinia, massa quis elementum bibendum, tellus neque porttitor erat, a ornare enim arcu nec mauris. Morbi ac tristique felis. Praesent cursus placerat risus. Duis ut magna quis sem varius consequat.  </p>
                    <ul class="style-3">
                      <li>Nam molestie dolor id auctor sodales;</li>
                      <li>In sagittis dolor vel turpis aliquet pharetra;</li>
                      <li>Quisque non turpis in dui congue dapibus;</li>
                      <li>Vivamus varius nisl quis dictum maximus;</li>
                      <li>Vestibulum scelerisque ligula quis est faucibus tincidunt.</li>
                    </ul>
                  </div>
                  <!-- /tabs container-->
                </div>
                <!-- /tabs keeper-->
              </div>
            </div>
            <!-- /tabs-->
        </div>
      </section>
      <!-- ! gallery section-->
      <!-- testimonials section-->
      <section class="small-section cws_prlx_section bg-blue-40"><img src="/img/bg-2.jpg" alt class="cws_prlx_layer">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h6 class="title-section-top font-4"></h6>
              <h2 class="title-section alt-2"><span>Reviews</span> About Us</h2>
              <div class="cws_divider mb-25 mt-5"></div>
            </div>
          </div>
          <div class="row">
            <!-- testimonial carousel-->
            <div class="owl-three-item">
              <!-- testimonial item-->
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="{{ url('/') }}">
                    <div class="pic"><img src="pic/testimonial/top-bg/1.jpg" data-at2x="pic/testimonial/top-bg/1@2x.jpg" alt></div></a>
                  <div class="author"> <img src="pic/testimonial/author/1.jpg" data-at2x="pic/testimonial/author/1@2x.jpg" alt></div>
                </div>
                <!-- testimonial content-->
                <div class="testimonial-body">
                  <h5 class="title"><span>Nicole</span> Beck</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">Suspe blandit orci quis lorem eleifend maximus. Quisque nec.</p><a href="{{ url('/') }}" class="testimonial-button">Read more</a>
                </div>
              </div>
              <!-- testimonial item-->
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="{{ url('/') }}">
                    <div class="pic"><img src="pic/testimonial/top-bg/2.jpg" data-at2x="pic/testimonial/top-bg/2@2x.jpg" alt></div></a>
                  <div class="author"> <img src="pic/testimonial/author/2.jpg" data-at2x="pic/testimonial/author/2@2x.jpg" alt></div>
                </div>
                <!-- testimonial content-->
                <div class="testimonial-body">
                  <h5 class="title"><span>Peter</span> Robertson</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">Nulla elit justo, dapibus ut lacus ac, ornare elementum neque.</p><a href="{{ url('/') }}" class="testimonial-button">Read more</a>
                </div>
              </div>
              <!-- testimonial item-->
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="{{ url('/') }}">
                    <div class="pic"><img src="pic/testimonial/top-bg/3.jpg" data-at2x="pic/testimonial/top-bg/3@2x.jpg" alt></div></a>
                  <div class="author"> <img src="pic/testimonial/author/3.jpg" data-at2x="pic/testimonial/author/3@2x.jpg" alt></div>
                </div>
                <!-- testimonial content-->
                <div class="testimonial-body">
                  <h5 class="title"><span>Kathy</span> Harrison</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">Maece facilisis sit amet mauris eget aliquam. Integer vitae.</p><a href="{{ url('/') }}" class="testimonial-button">Read more</a>
                </div>
              </div>
              <!-- testimonial item-->
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="{{ url('/') }}">
                    <div class="pic"><img src="pic/testimonial/top-bg/1.jpg" data-at2x="pic/testimonial/top-bg/1@2x.jpg" alt></div></a>
                  <div class="author"> <img src="pic/testimonial/author/1.jpg" data-at2x="pic/testimonial/author/1@2x.jpg" alt></div>
                </div>
                <!-- testimonial content-->
                <div class="testimonial-body">
                  <h5 class="title"><span>Nicole</span> Beck</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">Suspe blandit orci quis lorem eleifend maximus. Quisque nec.</p><a href="{{ url('/') }}" class="testimonial-button">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ! testimonials section-->
    
    </div>

@endsection