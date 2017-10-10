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
              <!-- <li><a href="#reviews" class="scrollto">Reviews</a></li> -->
            </ul>
          </div>
        </div>
        <div class="container" style="">
          <div class="row">
            <div class="col-md-7">
              <div id="flex-slider" class="flexslider">
                <ul class="slides">
                  @foreach($liveaboard->images as $image)
                  <li><img src="{{ $image->photo_url }}" alt></li>
                  @endforeach
                </ul>
              </div>
              <div id="flex-carousel" class="flexslider">
                <ul class="slides">
                  @foreach($liveaboard->images as $image)
                  <li><img src="{{ $image->photo_url }}" data-at2x="{{ $image->photo_url }}" alt></li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="bg-gray-3 p-30-40"style="list-style: square;">
                <h4>Boat Features</h4>
                {!! $liveaboard->boat_features !!}
              </div>
            </div>
          </div>
          
        </div>
        <div class="container mt-30">
          <div class="row">
            <div class="col-md-8">
              <h4 class="mb-20">Description</h4>
              
              {!! $liveaboard->description !!}
            </div>
            <div class="col-md-4">
              <h4 class="mb-20">Liveaboard Layout Photo</h4>
              <center>
                <img style="height: 100%; width: 100%;" src="{{ $liveaboard->vessel_layout_photo }}" alt="{{ $liveaboard->name }} layout photo">
              </center>
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
                  <th>Capacity</th>
                  <th>Select</th>
                </tr>
              </thead>
              <tbody>
                  @if(!$liveaboard->itinerary->isEmpty())
                    @foreach($liveaboard->itinerary as $itinerary)
                    <tr>
                      <td class="col-md-1" style="vertical-align: middle;">
                        <h4>{{ $itinerary->date }}</h4>
                      </td>
                      <td class="col-md-8" style="vertical-align: middle;"> 
                        {!! $itinerary->detail !!}
                      </td>
                      <td class="col-md-2" style="vertical-align: middle;"> 
                        <strong>{{ $itinerary->current }}</strong> of <strong>{{ $itinerary->max }}</strong>
                      </td>
                      <td class="col-md-1" style="vertical-align: middle;">
                        <a href="{{ url('inquiry') }}/{{ $liveaboard->id }}/{{ $liveaboard->name }}/liveaboard/{{ $itinerary->id }}" class="cws-button alt gray">Send Inquiry</a>
                      </td>
                    </tr>
                    @endforeach
                  @else
                    <tr>
                      <td></td>
                      <td style="vertical-align: middle;">
                        <h4>No Itineraries Found</h4>
                      </td>
                      <td></td>
                    </tr>
                  @endif
              </tbody>
            </table>
          </div>
        </div>
        <!-- section location-->
        <div id="features" class="container mb-50">
          <div class="row">
            <div class="col-md-12">
              <h4 class="trans-uppercase mb-10">{{ $liveaboard->name }} Features</h4>
              <div class="cws_divider mb-30"></div>
            </div>
          </div> 
          <div class="row">
            <div class="col-md-4">
              <div class="mb-15 p-30-40">
                <h4>Food and Drinks</h4>
                {!! $liveaboard->food_and_drinks !!}
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-15 p-30-40">
                <h4>Diving</h4>
                  {!! $liveaboard->diving !!}
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-15 p-30-40">
                <h4>Gear Rental</h4>
                {!! $liveaboard->gear_rental !!}
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

@endsection