@extends('layouts.app-dive')

@section('content')
    
    <div class="content-body">
      <section class="page-section pt-0 pb-50">
        <div class="container">
          <div class="menu-widget with-switch mt-30 mb-30">
            <ul class="magic-line">
              <li class="current_item"><a href="#overview" class="scrollto">Overview</a></li>
              <li><a href="#reviews" class="scrollto">Reviews</a></li>
            </ul>
          </div>
        </div>
        <div class="container" style="margin-bottom: 100px">
          <div class="row">
            <div class="col-md-7">
              <div id="flex-slider" class="flexslider">
                <ul class="slides">
                  @foreach($diving_spot->images as $image)
                  <li><img src="{{ $image->photo_url }}" alt></li>
                  @endforeach
                </ul>
              </div>
              <div id="flex-carousel" class="flexslider">
                <ul class="slides">
                  @foreach($diving_spot->images as $image)
                  <li><img src="{{ $image->photo_url }}" data-at2x="{{ $image->photo_url }}" alt></li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="bg-gray-3 p-30-40">
                <h4>Description</h4>
                {!! $diving_spot->description !!}
              </div>
            </div>
          </div>
          
        </div>

        @if($diving_spot->reviews->isEmpty())
        
        @else
        <div id="reviews" class="container mb-60">
          <div class="row">
            <div class="col-md-12">
              <h4 class="trans-uppercase mb-10">{{ $diving_spot->name }} Reviews</h4>
              <div class="cws_divider mb-30"></div>
            </div>
          </div>
            <div class="reviews-wrap">
              <div class="comments">
                <h3>No Reviews found</h3>
              </div>
              <div class="reviews-bottom">
                <h4>You've been to this? Leave a review</h4>
              </div>
            </div>
          </div>
        @endif
        <!-- review -->
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="trans-uppercase mb-10">Write a review</h4>
              <div class="cws_divider mb-30"></div>
            </div>
          </div>
          
          <div class="review-content pattern relative">
            @if(!Auth::guest())

            <div class="row">
              <div class="col-md-5 mb-md-30 mb-xs-0">
                <div class="review-total"><img src="/pic/blog/120x120.jpg" data-at2x="/pic/blog/120x120@2x.jpg" alt>
                  <div class="review-total-content">
                    <h6>{{ $diving_spot->name }}</h6>
                    <div class="stars stars-{{ $diving_spot->star }}"></div>
                    <ul class="icon">
                      <li>Maldives<i class="flaticon-suntour-map"></i></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="review-marks clearfix mb-30">
                  <ul>
                    <li>Cleanliness
                      <div class="stars stars-5"></div>
                    </li>
                    <li>Location
                      <div class="stars stars-5"></div>
                    </li>
                    <li>Staff
                      <div class="stars stars-5"></div>
                    </li>
                    <li>Free Wi-Fi
                      <div class="stars stars-5"></div>
                    </li>
                  </ul>
                  <ul>
                    <li>Comfort
                      <div class="stars stars-5"></div>
                    </li>
                    <li>Facilities
                      <div class="stars stars-5"></div>
                    </li>
                    <li>Value for money
                      <div class="stars stars-5"></div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <form class="form clearfix">
              <div class="row">
                <div class="col-md-4">
                  <input type="text" name="email" value="" size="40" placeholder="First Name" aria-required="true" class="form-row form-row-first">
                </div>
                <div class="col-md-4">
                  <input type="text" name="email" value="" size="40" placeholder="Last Name" aria-required="true" class="form-row form-row-first">
                </div>
                <div class="col-md-4">
                  <input type="text" name="email" value="" size="40" placeholder="Booking Number" aria-required="true" class="form-row form-row-first">
                </div>
                <div class="col-md-12">
                  <input type="text" name="password" value="" size="40" placeholder="Title of your review" aria-required="true" class="form-row form-row-last">
                </div>
                <div class="col-md-12">
                  <textarea name="message" cols="40" rows="4" placeholder="Message of your review" aria-invalid="false" aria-required="true" class="mb-20"></textarea>
                  <input type="submit" value="Add a review" class="cws-button alt float-right">
                </div>
              </div>
            </form>

            @else

            <h4>You need to login to write a review</h4>

            @endif
            
            
          </div>
        </div>
        <!-- ! review -->
      </section>
    </div>

@endsection