@extends('layouts.app')

@section('content')
    <?php
      $itinerary = $catamaran_itineraries;
    ?>
    
    <div class="content-body">
      <section class="page-section pt-0 pb-50">
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
            <div class="col-md-12">
              <div class="bg-gray-3 p-30-40"style="list-style: square;">
                <h4>Itinerary of {{ $catamaran->name }} 
                  <a href="{{ url('inquiry') }}/{{ $catamaran->id }}/{{ $catamaran->slug }}/catamaran/{{ $itinerary->id }}" class="btn btn-lg btn-success">Send Inquiry</a>
                  <a href="{{ url('catamaran') }}/{{ $catamaran->slug }}" class="btn btn-lg btn-info">Go Back</a>
                </h4>
                <h5>Date: <strong>{{ $itinerary->date }}</strong> - Capacity: <strong>{{ $itinerary->current }} of {{ $itinerary->max }}</strong> - Price: <strong>{{ $itinerary->price }}</strong></h5>
                <hr>
                <div class="">{!! $itinerary->detail !!}</div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

@endsection