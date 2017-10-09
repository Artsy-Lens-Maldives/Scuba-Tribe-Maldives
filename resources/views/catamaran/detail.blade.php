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
            <div class="col-md-12">
              <h4 class="mb-20">Catamaran Layout Photo</h4>
              <div class="cws_divider mb-30"></div>
              <center>
                <img src="{{ $catamaran->catamaran_layout_photo }}" class="img-responsive" alt="{{ $catamaran->name }} layout photo">
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
                  <th>Select</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @if(!$catamaran->itinerary->isEmpty())
                    @foreach($catamaran->itinerary as $itinerary)
                    <tr>
                      <td style="vertical-align: middle;">
                        <h4>{{ $itinerary->date }}</h4>
                      </td>
                      <td style="vertical-align: middle;"> 
                        {!! $itinerary->detail !!}
                      </td>
                      <td style="vertical-align: middle;">
                        <a href="{{ url('inquiry') }}/{{ $catamaran->id }}/{{ $catamaran->name }}/catamaran/{{ $itinerary->id }}" class="cws-button alt gray">Send Inquiry</a>
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
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- section location-->
        <!--<div id="features" class="container mb-50">
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
        </div>-->
      </section>
    </div>

@endsection