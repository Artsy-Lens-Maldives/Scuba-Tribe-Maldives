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
            <div class="col-md-12">
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
            <div class="col-md-12" style="margin-top: 100px;">
              <div class="bg-gray-3 p-30-40">
                <h4>Boat Features</h4>
                <div class="" style="list-style: none;">
                  {!! $catamaran->features !!}
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="container mt-30">
          
          <div class="row">
            @if($catamaran->catamaran_layout_photo == null)
              <div class="col-md-12">
                <h4 class="mb-20">Description</h4>
                <div class="" style="list-style: none;">
                {!! $catamaran->description !!}
                </div>
              </div>  
            @else
              <div class="col-md-8">
                <h4 class="mb-20">Description</h4>
                <div class="" style="list-style: none;">
                {!! $catamaran->description !!}
                </div>
              </div>
              <div class="col-md-4">
                <h4 class="mb-20">Catamaran Layout Photo</h4>
                <center>
                  <img style="height: 100%; width: 100%;" src="{{ $catamaran->catamaran_layout_photo }}" alt="{{ $catamaran->name }} layout photo">
                </center>
              </div>
            @endif
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
                  <th>Price</th
                  <th>Select</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @if(!$catamaran->itinerary->isEmpty())
                    @foreach($catamaran->itinerary as $itinerary)
                    <tr>
                      <td class="col-md-3" style="vertical-align: middle;">
                        <h6>{{ $itinerary->date }}</h6>
                      </td>
                      <td class="col-md-4" style="vertical-align: middle;"> 
                        <a class="btn btn-info btn-lg" href="{{ url()->current() }}/itinerary/{{ $itinerary->id }}">Show Details</button>
                      </td>                      
                      <td class="col-md-3" style="vertical-align: middle;"> 
                        <strong>{{ $itinerary->current }}</strong> of <strong>{{ $itinerary->max }}</strong>
                      </td>
                      <td class="col-md-1" style="vertical-align: middle;"> 
                        {!! $itinerary->price !!}
                      </td>
                      <td class="col-md-1" style="vertical-align: middle;">
                        <a href="{{ url('inquiry') }}/{{ $catamaran->id }}/{{ $catamaran->slug }}/catamaran/{{ $itinerary->id }}" class="cws-button alt gray">Send Inquiry</a>
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
      </section>
    </div>

@endsection