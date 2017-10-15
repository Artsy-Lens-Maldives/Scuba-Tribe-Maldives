   @extends('layouts.app')

@section('content')
    <!-- content-->
    <div class="content-body">
      <div class="container page">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-item">
              <h4 class="title-section mt-30"><span class="font-bold">Contacts</span></h4>
              <div class="cws_divider mb-25 mt-5"></div>
              <ul class="icon">
                <li> <a href="mailto:info@scubatribemaldives.com">info@scubatribemaldives.com<i class="flaticon-suntour-email"></i></a></li>
                <li> <a href="tel:7465333">(960)-746-5333<i class="flaticon-suntour-phone"></i></a></li>
                <li> <a href="#">Hulhumale<i class="flaticon-suntour-map"></i></a></li>
              </ul>
              <p class="mt-20">We have created Scuba Tribe Maldives to share our passion for scuba diving. To make sure you get what you need and even more. Booking your scuba holiday with us you will get the best Maldives liveaboards, sailing catamarans and local islands diving experience. </p>
              <div class="contact-cws-social"><a href="#" class="cws-social fa fa-twitter"></a><a href="#" class="cws-social fa fa-facebook"></a><a href="#" class="cws-social fa fa-google-plus"></a><a href="#" class="cws-social fa fa-linkedin"></a></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map-wrapper">
              <iframe src="https://www.google.com/maps/embed/v1/view?key=AIzaSyB9LZeVoEfQZHvSUT5lpVdD5kYZZNYjo6g&center=4.2108213,73.5399387&zoom=14"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ! content-->

    @endsection