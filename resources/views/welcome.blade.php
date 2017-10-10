@extends('layouts.app')

@section('content')

      <div class="content-body">
        <div class="tp-banner-container">
          <div class="tp-banner-slider">
            <ul>
              <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="/rs-plugin/assets/loader.gif" data-lazyload="/img/bg/7.JPG" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
                <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                  <div class="sl-title-top">Welcome to</div>
                  <div class="sl-title">Scuba Tribe Maldives</div>
                  <div class="sl-title-bot">Custom Made Scuba Diving <span>Holidays</span></div>
                </div>
              </li>
              <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="/rs-plugin/assets/loader.gif" data-lazyload="/img/bg/1.JPG" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
                <div data-x="['center','center','center','center']" data-y="center" data-transform_in="y:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                  <div class="sl-title-top">Welcome to</div>
                  <div class="sl-title">Scuba Tribe Maldives</div>
                  <div class="sl-title-bot">Custom Made Scuba Diving <span>Holidays</span></div>
                </div>
              </li>
              <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="/rs-plugin/assets/loader.gif" data-lazyload="/img/bg/11.JPG" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
                <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                  <div class="sl-title-top">Welcome to</div>
                  <div class="sl-title">Scuba Tribe Maldives</div>
                  <div class="sl-title-bot">Custom Made Scuba Diving <span>Holidays</span></div>
                </div>
              </li>
              <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="/rs-plugin/assets/loader.gif" data-lazyload="/img/bg/3.JPG" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
                <div data-x="['center','center','center','center']" data-y="center" data-transform_in="y:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                  <div class="sl-title-top">Welcome to</div>
                  <div class="sl-title">Scuba Tribe Maldives</div>
                  <div class="sl-title-bot">Custom Made Scuba Diving <span>Holidays</span></div>
                </div>
              </li>
              <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="/rs-plugin/assets/loader.gif" data-lazyload="/img/bg/9.JPG" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
                <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:-150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                  <div class="sl-title-top">Welcome to</div>
                  <div class="sl-title">Scuba Tribe Maldives</div>
                  <div class="sl-title-bot">Custom Made Scuba Diving <span>Holidays</span></div>
                </div>
              </li>
            </ul>
          </div>
          <!-- call out section-->
          <section id="subscribe" class="page-section-sub pt-90 pb-80 bg-main pattern relative">
            <div class="container">
              <div class="call-out-box clearfix with-icon">
                <div class="row call-out-wrap">
                    @if(Session::has('message'))
                      <div class="col-md-12">
                        <center>
                          <h4 class="title-section alt-2"><span>{{ Session::get('message') }}, Thanks for subscribing</span></h4>
                        </center>
                      </div>
                    @else
                    <div class="col-md-5">
                      <h6 class="title-section-top gray font-4">subscribe today</h6>
                      <h2 class="title-section alt-2"><span>Get</span> Latest offers</h2>
                    </div>
                    <div class="col-md-7">
                      <form action="/subscribe" method="post" class="form mt-10">
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

      <section class="small-section">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h6 class="title-section-top font-4"></h6>
              <h2 class="title-section"><span>About Us</span></h2>
              <div class="cws_divider mb-25 mt-5"></div>
              <p>We are here to make your scuba diving holiday a memorable one!</p>
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
                    <h6 class="trans-uppercase">Scuba Tribe Maldives</h6>
                    <p>Custom made SCUBA diving holidays in the Maldives.   </p>
                    <ul class="style-3">
                      <li>We have created Scuba Tribe Maldives to share our passion for scuba diving. To make sure you get what you need and even more. 
                          Booking your scuba holiday with us you will get the best Maldives liveaboards, sailing catamarans and local islands diving experience. 
                          Give us the dates and your expectations - the rest is on us. 
                          We work only with reputable dive operations, those who we personally know. And they are many! 
                          If you want to join a scheduled liveaboard diving cruise, or charter a boat for your family and friends, or have a private cruising on a sailing catamaran, or taste the local island life and diving the best surrounding dive sports - we will do all of this for you. With love!
                          Welcome to the Tribe!</li>
                   
                    </ul>
                  </div>
                  <!-- /tabs container-->
                  <!-- tabs container-->
                  <div data-tabs-id="cont-tabs2" class="container-tabs">
                    <p>Our mission is to be the most respected and trustful scuba diving agency in the Maldives. To do this, we have established a culture that puts our customer's needs at first place. We focus on prompt communication and being accessible at any time for our clients.</p>
                  </div>
                  <!-- /tabs container -->
                  <!-- tabs container-->
                  <div data-tabs-id="cont-tabs3" class="container-tabs">
                    <h6 class="trans-uppercase">Hotel Bohemians</h6>
                    <p>Our vision is to offer customized, details oriented, best possible priced scuba diving holidays in the Maldives for our customers.</p>
                  </div>
                  <!-- /tabs container-->
                </div>
                <!-- /tabs keeper-->
              </div>
            </div>
            <!-- /tabs-->
        </div>
      </section>
      
      <!-- testimonials section-->
      <section class="small-section cws_prlx_section bg-blue-40"><img src="/img/bg-2.jpg" alt class="cws_prlx_layer">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h6 class="title-section-top font-4"></h6>
              <h2 class="title-section alt-2"><span>Reviews</span> About Us</h2>
              <div class="cws_divider mb-25 mt-5" style="border-bottom: 2px solid #fff;"></div>
            </div>
          </div>
          <div class="row">
            <!-- testimonial carousel-->
            <div class="owl-three-item">
              <!-- testimonial item-->
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="{{ url('/') }}">
                    <div class="pic"><img src="pic/testimonial/top-bg/1.jpg" data-at2x="pic/testimonial/top-bg/1@2x.jpg" alt></div></a>
                  <div class="author"> <img src="/img/reviews/review (1).jpg" data-at2x="/img/reviews/review (1).jpg" alt></div>
                </div>
                <!-- testimonial content-->
                <div class="testimonial-body">
                  <h5 class="title"><span>Hadassah</span> Hartman</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">It was my first liveaboard trip to the Maldives! And it was amazing!!! Thanks to Rita for a very professional help and guidance, our trip was fabulous!</p>
                </div>
              </div>
              <!-- testimonial item-->
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="{{ url('/') }}">
                    <div class="pic"><img src="pic/testimonial/top-bg/2.jpg" data-at2x="pic/testimonial/top-bg/2@2x.jpg" alt></div></a>
                  <div class="author"> <img src="/img/reviews/review (2).jpg" data-at2x="/img/reviews/review (2).jpg" alt></div>
                </div>
                <!-- testimonial content-->
                <div class="testimonial-body">
                  <h5 class="title"><span>Alejandro</span> Cole</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">Scuba Tribe was recommended by my friend who knows the guys personally. I couldn't dream of more!<br> Rita was very helpful and really made sure everything goes smooth untill our departure from the Maldives. Sad we couldn't meet personally. But we are definitely coming back next year and will book only with Scuba Tribe!</p>
                </div>
              </div>
              <!-- testimonial item-->
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="{{ url('/') }}">
                    <div class="pic"><img src="pic/testimonial/top-bg/3.jpg" data-at2x="pic/testimonial/top-bg/3@2x.jpg" alt></div></a>
                  <div class="author"> <img src="/img/reviews/review (3).jpg" data-at2x="/img/reviews/review (3).jpg" alt></div>
                </div>
                <!-- testimonial content-->
                <div class="testimonial-body">
                  <h5 class="title"><span>Arturo</span> Bonilla</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">This was my 2nd time diving in Maldives, and I must say it was the best dive trip of my life. Me and my wife booked a liveaboard dive trip with Scuba Tribe, and will surely book again and highly recommend to everyone! <br>Thank you Rita and Shakko, it was superb experience!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ! testimonials section-->
      
    
    </div>

@endsection