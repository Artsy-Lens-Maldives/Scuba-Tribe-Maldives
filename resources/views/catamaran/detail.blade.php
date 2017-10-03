@extends('layouts.app-live')

@section('content')
    
    <div class="content-body">
      <section class="page-section pt-0 pb-50">
        <div class="container">
          <div class="menu-widget with-switch mt-30 mb-30">
            <ul class="magic-line">
              <li class="current_item"><a href="#overview" class="scrollto">Overview</a></li>
              <li><a href="#itinerary" class="scrollto">Itinerary</a></li>
              <li><a href="#features" class="scrollto">Features</a></li>
              <li><a href="#reviews" class="scrollto">Reviews</a></li>
            </ul>
          </div>
        </div>
        <div class="container" style="">
          <div class="row">
            <div class="col-md-7">
              <div id="flex-slider" class="flexslider">
                <ul class="slides">
                  @foreach($catamaran->images as $image)
                  <li><img src="{{ $image->photo_url }}" alt></li>
                  @endforeach
                </ul>
              </div>
              <div id="flex-carousel" class="flexslider">
                <ul class="slides">
                  @foreach($catamaran->images as $image)
                  <li><img src="{{ $image->photo_url }}" data-at2x="{{ $image->photo_url }}" alt></li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="bg-gray-3 p-30-40">
                <h4>Boat Features</h4>
                {!! $catamaran->features !!}
              </div>
            </div>
          </div>
          
        </div>
        <div class="container mt-30">
          <h4 class="mb-20">Description</h4>
          <div class="row">
            <div class="col-md-12">
              {!! $catamaran->description !!}
            </div>
          </div>
        </div>
        <!-- section prices-->
        <div id="itinerary" class="container mb-50 mt-40">
          <div class="search-hotels room-search pattern">
            <div class="search-room-title">
              <h5>Choose an Itinerary</h5>
            </div>
          </div>
          <div class="room-table">
            <table class="table alt-2">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Itinerary</th>
                  <th>Select</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @if(!$catamaran->itinerary->isEmpty())

                    @foreach($catamaran->itinerary as $itinerary)
                    <td style="vertical-align: middle;">
                      <h4>{{ $itinerary->date }}</h4>
                    </td>
                    <td style="vertical-align: middle;"> 
                      {{ $itinerary->detail }}
                    </td>
                    <td style="vertical-align: middle;">
                      <a href="#" class="cws-button alt gray">Book now</a>
                    </td>
                    @endforeach

                  @else

                    <td></td>
                    <td style="vertical-align: middle;">
                      <h4>No Itineraries Found</h4>
                    </td>
                    <td></td>
                  
                  @endif
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- section location-->
        <div id="features" class="container mb-50">
          <div class="row">
            <div class="col-md-12">
              <h4 class="trans-uppercase mb-10">{{ $catamaran->name }} Features</h4>
              <div class="cws_divider mb-30"></div>
            </div>
          </div> 
          <div class="row">
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="mb-15 p-30-40">
                <h4>Catamaran Layout photo</h4>
                <img src="{{ $catamaran->catamaran_layout_photo }}" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
        <!-- section reviews-->
        <div id="reviews" class="container mb-60">
          <div class="row">
            <div class="col-md-12">
              <h4 class="trans-uppercase mb-10">{{ $catamaran->name }} Reviews</h4>
              <div class="cws_divider mb-30"></div>
            </div>
          </div>
          @if(!$catamaran->reviews->isEmpty())

            <div class="reviews-wrap">
              <div class="reviews-top pattern relative">
                <div class="reviews-total" style="background: #afafaf;">

                  <div class="reviews-sub-mark">4.2</div>
                  <div class="stars-perc"><span style="width:85%"></span></div><span>Based on 67 reviews</span>
                </div>
                <div class="reviews-marks">
                  <ul>
                    <li>Cleanliness<span><span class="stars-perc"><span style="width:85%"></span></span>4.5</span></li>
                    <li>Location<span><span class="stars-perc"><span style="width:80%"></span></span>4.0</span></li>
                    <li>Staff<span><span class="stars-perc"><span style="width:100%"></span></span>5.0</span></li>
                    <li>Free Wi-Fi<span><span class="stars-perc"><span style="width:65%"> </span></span>3.5</span></li>
                  </ul>
                  <ul>
                    <li>Comfort<span><span class="stars-perc"><span style="width:85%"> </span></span>4.5</span></li>
                    <li>Facilities<span><span class="stars-perc"><span style="width:80%"></span></span>4.0</span></li>
                    <li>Value for money<span><span class="stars-perc"><span style="width:100%"> </span></span>5.0</span></li>
                  </ul>
                </div>
              </div>
              @foreach($catamaran->reviews as $review)
                <div class="comments">
                  <div class="comment-body">
                    <div class="avatar"><img src="/pic/blog/90x90/1.jpg" data-at2x="/pic/blog/90x90/1@2x.jpg" alt></div>
                    <div class="comment-info">
                      <div class="comment-meta">
                        <div class="title">
                          <h5>{{ $review->title }} <span>{{ $review->first_name }} {{ $review->last_name }}</span></h5>
                        </div>
                        <div class="comment-date">
                          <div class="stars stars-{{ $review->star }}">{{ $review->star }}</div><span>{{ $review->created_at->diffForHumans() }}</span>
                        </div>
                      </div>
                      <hr>
                      <div class="comment-content">
                        <p>{{ $review->text }}</p>
                      </div>
                    </div>
                  </div>
                </div>    
              @endforeach
              <div class="reviews-bottom">
                <h4>You've been to this? Leave a review</h4>
              </div>
            </div>

          @else
          
            <div class="reviews-wrap">
              <div class="comments">
                <h3>No Reviews found</h3>
              </div>
              <div class="reviews-bottom">
                <h4>You've been to this? Leave a review</h4>
              </div>
            </div>

          @endif
        </div>
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
                    <h6>{{ $catamaran->name }}</h6>
                    <div class="stars stars-{{ $catamaran->star }}"></div>
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